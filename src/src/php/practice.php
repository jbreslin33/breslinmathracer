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
       		$query = "select item_attempts.item_types_id from item_attempts JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON learning_standards_attempts.id=levelattempts.learning_standards_attempts_id where evaluations_attempts.user_id = ";
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
        		$update = "update evaluations_attempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
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
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",2);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get learning_standard_attempt id
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
        $_SESSION["ref_id"] = 'practice';
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
}

public function continueAttempt()
{
        $_SESSION["ref_id"] = 'practice';

        $this->setRawData();
}

//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	$raw = '';
	for($i=0; $i<10; $i++)
	{
		if ($i > 0)
		{
			$raw .= ":";
		}
		$raw .= $this->mTypeID; 
		$raw .= ":";
		$raw .= "0";
	}
       	$_SESSION["raw_data"] = $raw; 
}

public function leavePractice()
{
	// lets close out this practice
        $update = "update evaluations_attempts set end_time = CURRENT_TIMESTAMP WHERE id = ";
        $update .= $_SESSION["evaluations_attempts_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

  	//get evaluations_attempts id
        $query = "select evaluations_attempts.id, evaluations.description from evaluations_attempts JOIN evaluations ON evaluations_attempts.evaluations_id=evaluations.id where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " AND evaluations_id != 2 order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;

                $ref_id                                       = pg_Result($result, 0, 'description');
                $_SESSION["ref_id"]  = $ref_id;

                if ($ref_id == 'normal')
                {
$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'normal','if');";
$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		
                        $normal = new Normal(0);
                }
        }
}
//end of class
}
?>
