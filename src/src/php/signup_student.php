<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
?>

<?php

class SignupStudent
{
   	private $mDatabaseConnection;

function __construct($application)
{
        $this->logs = false;
        if ($this->logs)
        {
                error_log('SignupStudent::SignUpStudent');
        }

 	$this->mApplication = $application;
	$this->mSignedUp = 0;
        $this->mStudentExists = false;
        $this->mUserID = 0;
}

function __destruct()
{

}

public function sendUsernameTaken()
{
	$returnString = "118";
	echo $returnString;
}

public function process()
{
	$this->mDatabaseConnection = new DatabaseConnection();
        if ($this->insertIntoUsers())
	{
        	$databaseConnection = new DatabaseConnection();
        	$_SESSION["user_id"] = $databaseConnection->selectUserID($this->mApplication->mLoginStudent->mUsername,$this->mApplication->mLoginStudent->mPassword);
		$this->mSignedUp = 1;
		$this->mCode = 117; //send to login
		//$error_log('insert into users');
	}
	else
	{
		$this->mSignedUp = 0;
		$this->sendUsernameTaken();
	}
}

public function insertIntoUsers()
{
        $query = "INSERT INTO users (username, password, first_name, last_name, core_standards_id, school_id) VALUES ('";
        $query .= $this->mApplication->mLoginStudent->mUsername;
        $query .= "','";
        $query .= $this->mApplication->mLoginStudent->mPassword;
        $query .= "','";
        $query .= $this->mApplication->mLoginStudent->mFirstName;
        $query .= "','";
        $query .= $this->mApplication->mLoginStudent->mLastName;
        $query .= "','k.cc.a.1_1',1);";

  	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query); // or die('Could not connect: ' . pg_last_error());
        $er = pg_last_error();
        if (strpos($er,'username') !== false)
        {
		return false;
        }
	else
	{
		return true;
	}
}

}

?>
