<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/remediate.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

class Practice 
{
    private $mDatabaseConnection;

function __construct($typeid, $startNew, $leavePractice)
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTypeID = $typeid;

	//if no typeid then get one
	if (strlen($this->mTypeID) > 0)
	{

	}
	else
	{
		//get the item_type_id of the last asked question as that will be what you where previously practicing.
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
		else 
		{
			//no attempts made...... go back to previus and close out this one....
	        	// lets close out this practice cause it was never attempted
			//shouild not go here..
        		$update = "update learning_standards_attempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
        		$update .= $_SESSION["learning_standards_attempts_id"];
        		$update .=  ";";
        		$updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
	
			//then go to sessions again...
                	//SESSION
                	$sessions = new Sessions();
			return 0;
		}
	}

	if ($leavePractice)
	{
		$this->leavePractice();
	}
	else
	{
		if ($startNew)
		{
                	$this->insertNewAttempt();
		}
		else
		{
                	$this->continueAttempt();
		}
	}
}

public function insertNewAttempt()
{
      	//insert learning_standard_attempt
        $insert = "insert into learning_standards_attempts (start_time,user_id,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",'practice');";

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
        $_SESSION["ref_id"] = 'practice';
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 3; //practice is 3 levels
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
}

public function continueAttempt()
{
        $_SESSION["ref_id"] = 'practice';

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
        $_SESSION["levels"] = 3; //practice is always 3 levels....

        $this->setRawData();
}

//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	$raw = $this->mTypeID; 
	$raw .= ":0";
       	$_SESSION["raw_data"] = $raw; 
}

public function leavePractice()
{
	// lets close out this practice
        $update = "update learning_standards_attempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
        $update .= $_SESSION["learning_standards_attempts_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

  	//get learning_standard_attempt id
        $query = "select * from learning_standards_attempts where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " AND learning_standards_id != 'practice' order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $learning_standards_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["learning_standards_attempts_id"] = $learning_standards_attempts_id;

                $ref_id                                       = pg_Result($result, 0, 'learning_standards_id');
                $_SESSION["ref_id"]  = $ref_id;

                if ($ref_id == 'evaluation')
                {
                        $evaluation = new Evaluation();
                }
                if ($ref_id == 'remediate')
                {
                        //pass 0 in for start new and 0 for type id as we are returning to remediate.
                        $remediate = new Remediate(0,0);
                }
                if ($ref_id == 'normal')
                {
                        $normal = new Normal(0);
                }
        }
}
//end of class
}
?>
