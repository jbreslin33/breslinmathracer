<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Remediate 
{
    private $mDatabaseConnection;

function __construct($startNew, $typeid)
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTypeID = $typeid;

	//if no typeid then get one
	if ($this->mTypeID == 0)
	{
		//get the item_type_id of the last asked question as that will be what you where previously remediating.
       		$query = "select item_attempts.item_types_id from item_attempts JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON learning_standards_attempts.id=levelattempts.learning_standards_attempts_id where learning_standards_attempts.user_id = ";
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

	if ($startNew)
	{
                $this->insertNewAttempt();
	}
	else
	{
                $this->continueAttempt();
	}
}

public function insertNewAttempt()
{
      	//insert learning_standard_attempt
        $insert = "insert into learning_standards_attempts (start_time,user_id,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",'remediate');";

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
        }

        //set sessions for signup
        $_SESSION["ref_id"] = 'remediate';
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 3; //remediate is 3 levels
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
}

public function continueAttempt()
{
        $_SESSION["ref_id"] = 'remediate';

        //BEGIN NEW CODE
        //right here you need to check the level of the ref_id you are about to send them to.
        $selectLastLevelAttempt = "select level, transaction_code from levelattempts where learning_standards_attempts_id = ";
        $selectLastLevelAttempt .= $_SESSION["learning_standards_attempts_id"];
        $selectLastLevelAttempt .= " order by start_time desc limit 1;";

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
                        $_SESSION["level"] = $levelVar;
                }
                //failed
                if ($transaction_codeVar == 2)
                {
                        if ($levelVar > 1)
                        {
                                $levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
                                $levelVar--;
                                $_SESSION["level"] = $levelVar;
                        }
                }
        }
        else
        {
                $_SESSION["level"] = 1;
        }
        //END NEW CODE
  
        //update session vars with some hard coding
        $_SESSION["levels"] = 3; //remediate is always 3 levels....

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
