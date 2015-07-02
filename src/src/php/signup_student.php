<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");


class SignupStudent
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mUsernameTaken = 0;
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

function __destruct()
{

}

public function process()
{
        //insert user
        if ($this->insertIntoUsers())
	{
        	$databaseConnection = new DatabaseConnection();
        	$_SESSION["user_id"] = $databaseConnection->selectUserID($_SESSION["username"], $_SESSION["password"]);

        	if ($_SESSION["user_id"] == 0)
        	{
               		$_SESSION["LOGGED_IN"] = 0;
        	}
		else
		{
			$this->insertFirstEvaluationsAttempt();
        		$_SESSION["LOGGED_IN"] = 1;
			$item_attempt = new ItemAttempt();
			$item_attempt->insert();
	        	$_SESSION["role"] = 3;
		}
	}
	else
	{
		//do nothing errors should take care of it.	
	}
}

public function insertFirstEvaluationsAttempt()
{ 
	//prime the pump
	$insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",1);";

       	$insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

	$query = "select id from evaluations_attempts where user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";	
       	
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
   
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

               	//set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;
        }

	//set sessions for signup
        $_SESSION["ref_id"] = 'normal';
        $_SESSION["subject_id"] = 1;
	
	$this->setRawData();
}

public function setRawData()
{
	$query = "select item_types.id from item_types where core_standards_id = '";
	$query .= $_SESSION["core_standards_id"]; 
	$query .= "' ORDER BY progression"; 
	$query .= " LIMIT 1;";

       	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $num = pg_num_rows($result);
       
	if ($num > 0)
	{ 
        	$id = pg_Result($result, 0, 'id');
        	$_SESSION["item_types_id"] = $id;
	}
  
	$itemString = $id;
	$itemString .= ":0:";
	$itemString .= $id;
	$itemString .= ":0";

        $_SESSION["raw_data"] = $itemString;
}

public function insertIntoUsers()
{
        $query = "INSERT INTO users (username, password, first_name, last_name, core_standards_id, school_id) VALUES ('";
        $query .= $_SESSION["username"];
        $query .= "','";
        $query .= $_SESSION["password"];
        $query .= "','";
        $query .= $_SESSION["first_name"];
        $query .= "','";
        $query .= $_SESSION["last_name"];
        $query .= "','";
        $query .= $_SESSION["core_standards_id"];
        $query .= "',1);"; //default to mathcore

  	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query); // or die('Could not connect: ' . pg_last_error());
        $er = pg_last_error();
        if (strpos($er,'username') !== false)
        {
                $this->mUsernameTaken = 1;
        }
	else
	{
		error_log('not taken ....');
	}

	if ($this->mUsernameTaken == 1)
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