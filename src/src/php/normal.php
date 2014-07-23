<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Normal 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	$this->process();
}

public function process()
{
        $_SESSION["ref_id"] = 'normal';

        //BEGIN NEW CODE
        //right here you need to check the level of the ref_id you are about to send them to.
        $selectLastLevelAttempt = "select level, transaction_code from levelattempts where user_id = ";
        $selectLastLevelAttempt .= $_SESSION["user_id"];
        $selectLastLevelAttempt .= " and learning_standards_id = '";
        $selectLastLevelAttempt .= $_SESSION["ref_id"];
        $selectLastLevelAttempt .= "' order by start_time desc limit 1;";

       	$selectLastLevelAttemptResult = pg_query($this->mDatabaseConnection->getConn(),$selectLastLevelAttempt) or die('Could not connect: ' . pg_last_error());
        $numLastLevelAttemptRows = pg_num_rows($selectLastLevelAttemptResult);

        if ($numLastLevelAttemptRows > 0)
        {
        	$levelVar               = pg_Result($selectLastLevelAttemptResult, 0, 'level');
        	$transaction_codeVar = pg_Result($selectLastLevelAttemptResult, 0, 'transaction_code');
                $_SESSION["level"] = $levelVar;
                
		//passed
                if ($transaction_codeVar == 1)
                {
                	$levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
               	        $levelVar++;
                	$_SESSION["level"] = $level;
                }
                //failed
                if ($transaction_codeVar == 2)
                {
                	if ($levelVar > 1)
                        {
                                $levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
                       	        $levelVar--;
                		$_SESSION["level"] = $level;
                        }
                }
        }
        else
        {
        	$_SESSION["level"] = 1;
        }
        //END NEW CODE
   
        //do the insert...
        $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $_SESSION["level"];
        $insert .= ",'normal',3);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //update session vars with some hard coding
        $_SESSION["levels"] = 3; //normal is always 10 levels....

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

	//temp hard code...
       	$_SESSION["raw_data"] = "1:2:3:4:101:102:103:104:201:202"; 

  	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$rawData','rawData');";
  	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
}
//end of class
}
?>
