<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];

$loginSchool = new LoginSchool();
?>

<?php
class LoginSchool 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	
	//login helpers
	$this->mSchoolExists = false;

	$this->process();
}

public function sendLoginSchool()
{
	$returnString = "114,";
	$returnString .= $_SESSION["LOGGED_IN"];
	$returnString .= ",";
	$returnString .= $_SESSION["username"];
	$returnString .= ",";
	$returnString .= $_SESSION["role"];
	echo $returnString;
}

public function sendBadUsername()
{
        $returnString = "103";
        echo $returnString;
}

public function sendBadPassword()
{
        $returnString = "104";
        echo $returnString;
}

public function process()
{
	//school	
	$this->checkForSchool();
	
	if ($_SESSION["LOGGED_IN"] == 1)
	{
		return;
	}
	
	if ($this->mSchoolExists)
	{
		$this->sendBadPassword();
		return;
	}

	//fall thru to bad username	
	$this->sendBadUsername();
}

public function checkForSchool()
{
       	if (!isset($_SESSION["LOGGED_IN"]))
	{
        	$_SESSION["LOGGED_IN"] = 0;
	}
       	if ($_SESSION["LOGGED_IN"] == 1)
	{
		return;
	}

	//let's set a var that will be false if there was a problem..
	$problem = "";

        $query = "select username from schools where username = '";
        $query .= $_SESSION["username"];
        $query .= "';";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
		$this->mSchoolExists = true;

		$query2 = "select id from schools where username = '";
        	$query2 .= $_SESSION["username"];
        	$query2 .= "' AND password = '";
        	$query2 .= $_SESSION["password"];
        	$query2 .= "';";
	
		//get db result
        	$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
		{
        		$_SESSION["LOGGED_IN"] = 1;

			//get the id from user table
                	$school_id = pg_Result($result2, 0, 'id');

			//set sessions
        		$_SESSION["role"] = 3; //school
        		$_SESSION["raw_data"] = NULL; 
                	$_SESSION["school_id"] = $school_id;

			$this->sendLoginSchool();
		}
		else
		{
        		$_SESSION["LOGGED_IN"] = 0;
        		$_SESSION["school_id"] = 0;
		}
        }
        else
        {
        	$_SESSION["LOGGED_IN"] = 0;
        	$_SESSION["school_id"] = 0;
        }
}
}
?>
