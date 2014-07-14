<?php

class Signup
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->processSignUp();
}

function __destruct()
{

}

public function processSignUp()
{
	//this will exit out  
	if ($this->checkInput())
	{
        	//insert user
        	$this->insertIntoUsers($_SESSION["username"], $_SESSION["password"], $_SESSION["first_name"], $_SESSION["last_name"]);
        	$databaseConnection = new DatabaseConnection();
        	$user_id = $databaseConnection->selectUserID($_SESSION["username"], $_SESSION["password"]);
        	if ($user_id)
        	{
                	//set sessions
                	$_SESSION["user_id"] = $user_id;
        	}
        	else
        	{
                	$_SESSION["Login"] = "NO";
        	}

        	//SESSION
        	$sessions = new Sessions();
        	$sessions->setSessionVariables();

        	$_SESSION["Login"] = "YES";
        	header("Location: /web/home/home.php");
	}
	else
	{
		$error_text = $_SESSION["error_text"];
		$headerString = "Location: /web/signup/signup_form.php?message=";
		$headerString .= $error_text;
        	header($headerString);
	}
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

public function insertIntoUsers($username,$password,$first_name,$last_name)
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
        $query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
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
