<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Remediate 
{
    private $mDatabaseConnection;

function __construct($typeid)
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTypeID = $typeid;

	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'remediate','$this->mTypeID');";
	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

	if ($this->mTypeID == 0)
	{
       		$query = "select item_attempts.item_types_id from item_attempts JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id where levelattempts.user_id = ";
        	$query .= $_SESSION["user_id"];
        	$query .= " order by item_attempts.start_time desc limit 1;";

        	//get db result
        	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        	$num = pg_num_rows($result);

        	if ($num > 0)
        	{
                	$this->mTypeID = pg_Result($result, 0, 'item_types_id');
		}
	}

	$this->process();
}
//if you have to do 3 levels. that would be 1,2,3=6 correct in a row which would be small enuf as to be managable for student but still keep question in the rotation for evaluations
public function process()
{
        $_SESSION["ref_id"] = 'remediate';

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
        $insert .= ",'remediate',3);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //update session vars with some hard coding
        $_SESSION["levels"] = 3; //remediate is always 3 levels....
        $_SESSION["progression"] = 10001;
        $_SESSION["standard"] = 'remediate';

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
}
//end of class
}
?>
