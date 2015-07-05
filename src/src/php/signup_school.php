<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

$_SESSION["username"] = $_GET["username"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["name"] = $_GET["name"];
$_SESSION["city"] = $_GET["city"];
$_SESSION["state"] = $_GET["state"];
$_SESSION["zip"] = $_GET["zip"];
$_SESSION["email"] = $_GET["email"];
$_SESSION["student_code"] = $_GET["student_code"];

$signupSchool = new SignupSchool();
?>

<?php
session_start();

class SignupSchool 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	$this->process();
}
public function sendUsernameTaken()
{
	$returnString = "115";
	echo $returnString;
}
public function sendSchoolNameTaken()
{
        $returnString = "120";
        echo $returnString;
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
public function sendBadPassword()
{
        $returnString = "104";
        echo $returnString;
}

public function process()
{
	//let's set a var that will be false if there was a problem..
	$problem = "";

        $query = "insert into schools (username,password,name,city,state,zip,email,student_code) values ('";
        $query .= $_SESSION["username"];
	$query .= "','";
	$query .= $_SESSION["password"];
	$query .= "','";
        $query .= $_SESSION["name"];
	$query .= "','";
        $query .= $_SESSION["city"];
	$query .= "','";
        $query .= $_SESSION["state"];
	$query .= "','";
        $query .= $_SESSION["zip"];
	$query .= "','";
        $query .= $_SESSION["email"];
	$query .= "','";
        $query .= $_SESSION["student_code"];
        $query .= "');";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query); // or die('Could not connect: ' . pg_last_error());
	$er = pg_last_error();
	if (strpos($er,'schools_username_key') !== false)
 	{
		$this->sendUsernameTaken();
	}

        if (strpos($er,'schools_name_city_state_zip_key') !== false)
        {
		$this->sendSchoolNameTaken();
        }
	
	//then check login

       	$query = "select username from schools where username = '";
        $query .= $_SESSION["username"];
        $query .= "';";

        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
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
                        $this->mBadPassword = 0;
                        $this->mBadUsername = 0;

                        //get the id from user table
                        $school_id = pg_Result($result2, 0, 'id');

                        //set sessions
                        $_SESSION["school_name"] = $_SESSION["name"];
                        $_SESSION["school_id"] = $school_id;
                        $_SESSION["LOGGED_IN"] = 1;
                        $_SESSION["role"] = 3;

			$this->sendLoginSchool();
                }
                else
                {
                        $_SESSION["LOGGED_IN"] = 0;
                        $this->mBadPassword = 1;
                        $this->mBadUsername = 0;
                        $_SESSION["school_id"] = 0;

			$this->sendBadPassword();
                }
        }
        else
        {
                $_SESSION["LOGGED_IN"] = 0;
                $this->mBadUsername = 1;
                $this->mBadPassword = 0;
                $_SESSION["school_id"] = 0;

		$this->sendUsernameTaken();
        }
}//end function
}// end class
?>

