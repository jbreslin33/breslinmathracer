<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Remediate 
{
    private $mDatabaseConnection;

function __construct($typeid)
{
	$this->mTypeID = $typeid;

	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}
//if you have to do 3 levels. that would be 1,2,3=6 correct in a row which would be small enuf as to be managable for student but still keep question in the rotation for evaluations
public function process()
{
        $nextID = 'remediate';

        //do the insert...
        $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",1,'remediate',3);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //update session vars with some hard coding
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 3; //remediate is always 3 levels....
        $_SESSION["progression"] = 10001;
        $_SESSION["standard"] = 'remediate';
        $_SESSION["ref_id"] = 'remediate';

        $this->setRawData();
}
//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	$itemString = "";
	$itemString .= $this->mTypeID;
	$itemString .= ":";
	
       	$_SESSION["raw_data"] = $itemString; 
       	$rawData = $_SESSION["raw_data"]; 

  	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$rawData','rawData');";
  	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
}
//end of class
}
?>
