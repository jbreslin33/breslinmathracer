<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

//start new session
//session_start();
/*
$username = $_GET["username"];
$password = $_GET["password"];

$_SESSION["username"]   = $username;
$_SESSION["password"]   = $password;
*/

//$loginStudent = new LoginStudent($username,$password);
?>

<?php

class LoginStudent
{
    private $mDatabaseConnection;
function __construct($username,$password)
{
	$this->mUsername = $username;
	$this->mPassword = $password;
	$this->mDatabaseConnection = new DatabaseConnection();
	
	//login helpers
	$this->mStudentExists = false;
	$this->process();
}

public function sendLoginStudent()
{
	//fill php vars
	$returnString = "117,";
	$returnString .= $_SESSION["ref_id"];
	$returnString .= ",";
	$returnString .= $_SESSION["LOGGED_IN"];
	$returnString .= ",";
	$returnString .= $this->mUsername;
	$returnString .= ",";
	$returnString .= $_SESSION["first_name"];
	$returnString .= ",";
	$returnString .= $_SESSION["last_name"];
	$returnString .= ",";
	$returnString .= $_SESSION["raw_data"];
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
	//student
	$this->checkForStudent();
	if ($_SESSION["LOGGED_IN"] == 1)
	{
		return;
	}
	if ($this->mStudentExists)
	{
		$this->sendBadPassword();
		return;
	}
	//fall thru to bad username	
	$this->sendBadUsername();
}
public function checkForStudent()
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
        $query = "select username from users where username = '";
        $query .= $this->mUsername;
        $query .= "';";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
        //get numer of rows
        $num = pg_num_rows($result);
        if ($num > 0)
        {
		$this->mStudentExists = true;
		$query2 = "select id, password, first_name, last_name, core_standards_id, school_id, room_id, team_id, teacher_id from users where username = '";
        	$query2 .= $this->mUsername;
        	$query2 .= "' AND password = '";
        	$query2 .= $this->mPassword;
        	$query2 .= "';";
	
		//get db result
        	$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());
        	//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
		{
        		$_SESSION["LOGGED_IN"] = 1;
			//get the id from user table
                	$first_name = pg_Result($result2, 0, 'first_name');
                	$last_name = pg_Result($result2, 0, 'last_name');
                	$user_id = pg_Result($result2, 0, 'id');
                	$core_standards_id = pg_Result($result2, 0, 'core_standards_id');
                	$school_id = pg_Result($result2, 0, 'school_id');
                	$teacher_id = pg_Result($result2, 0, 'teacher_id');
                	$room_id = pg_Result($result2, 0, 'room_id');
                	$team_id = pg_Result($result2, 0, 'team_id');
			//set sessions
                	$_SESSION["first_name"] = $first_name;
                	$_SESSION["last_name"] = $last_name;
                	$_SESSION["user_id"] = $user_id;
        		$_SESSION["LOGGED_IN"] = 1;
        		$_SESSION["role"] = 1; //student
        		$_SESSION["raw_data"] = NULL; 
        		$_SESSION["username"] = $this->mUsername; 
                	$_SESSION["core_standards_id"] = $core_standards_id;
                	$_SESSION["school_id"] = $school_id;
                	$_SESSION["teacher_id"] = $teacher_id;
                	$_SESSION["room_id"] = $room_id;
                	$_SESSION["team_id"] = $team_id;

        		//SESSION
        		$sessions = new Sessions();

			//send to login data to client
			$this->sendLoginStudent();
		}
		else
		{
        		$_SESSION["LOGGED_IN"] = 0;
        		$_SESSION["user_id"] = 0;
		}
        }
        else
        {
        	$_SESSION["LOGGED_IN"] = 0;
        	$_SESSION["user_id"] = 0;
        }
}
}
?>
