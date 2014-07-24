<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Signup
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

function __destruct()
{

}

public function process()
{
	//this will exit out  
	if ($this->checkInput())
	{
        	//insert user
        	$this->insertIntoUsers();

        	$databaseConnection = new DatabaseConnection();
        	$_SESSION["user_id"] = $databaseConnection->selectUserID($_SESSION["username"], $_SESSION["password"]);
	

        	if ($_SESSION["user_id"] == 0)
        	{
                	$_SESSION["LOGGED_IN"] = 0;
        	}
		else
		{
			$this->insertFirstLevelAttempt();

        		$_SESSION["LOGGED_IN"] = 1;
		}
	}
	else
	{
                $_SESSION["LOGGED_IN"] = 0;
	}
}

public function insertFirstLevelAttempt()
{ 
	//insert learning_standard_attempt
	$insert = "insert into learning_standards_attempts (start_time,user_id,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",'normal');";

       	$insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

	//get learning_standard_attempt id
	$query = "select id from learning_standards_attempts where user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";	
       	
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
   
        $num = pg_num_rows($result);

        if ($num > 0)
        {

                //get the attempt_id
                $learning_standards_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["learning_standards_attempts_id"] = $learning_standards_attempts_id;
		
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'lid','$learning_standards_attempts_id');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

        }

	//set sessions for signup
        $_SESSION["ref_id"] = 'normal';
        $_SESSION["standard"] = 'normal';
        $_SESSION["level"] = 1;
       	$_SESSION["levels"] = 1;
        $_SESSION["progression"] = 1.000;
        $_SESSION["subject_id"] = 1;
        $_SESSION["raw_data"] = '1:2:3:4';
}

public function checkInput()
{
        $_SESSION["error_text"] = "";
        $inputGood = true;
        
        $userNameString = $_SESSION["username"];
        $stringArray = explode( ' ', $userNameString);
        $num = count($stringArray);
        $space = false; 

        if ($num > 1)
        {
                $space = true;
        }

        $taken = $this->checkForUser($_SESSION["username"]);

        if ($taken || $space || $_SESSION["username"] == '')
        {
                if ($taken)
                {
                        $inputGood = false;
                        $_SESSION["error_text"] = "name_taken";
                }
                if ($space)
                {
                        $inputGood = false;
                        $_SESSION["error_text"] = "do_not_use_spaces_in_user_name";
                }
                if ($_SESSION["username"] == '')
                {
                        $inputGood = false;
                        $_SESSION["error_text"] = "you_did_not_put_a_user_name";
                }
                if ($_SESSION["first_name"] == '')
                {
                        $inputGood = false;
                        $_SESSION["error_text"] = "you_did_not_put_a_first_name";
                }
                if ($_SESSION["last_name"] == '')
                {
                        $inputGood = false;
                        $_SESSION["error_text"] = "you_did_not_put_a_last_name";
                }
        }
        return $inputGood;
}

public function insertIntoUsers()
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $_SESSION["username"];
        $query .= "','";
        $query .= $_SESSION["password"];
        $query .= "','";
        $query .= $_SESSION["first_name"];
        $query .= "','";
        $query .= $_SESSION["last_name"];
        $query .= "',1";
        $query .= ");";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
}

public function insertIntoUsersWithSchool($username,$password,$first_name,$last_name,$school_id)
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
        $query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
        $query .= "',";
        $query .= $school_id;
        $query .= ");";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
}

public function checkForUser($username)
{
        //query string
        $query = "select username from users where username = '";
        $query .= $username;
        $query .= "';";

        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        // if there is a row then the username and password pair exists
        if ($num == 1)
        {
                return true;
        }
        else
        {
                return false;
        }
}

}

?>
