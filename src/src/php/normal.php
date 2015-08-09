<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/core_application.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");

//start new session
//session_start();
?>

<?php

class Normal 
{

function __construct($application)
{
	$this->mApplication = $application;
	$this->logs = true; 
	if ($this->logs)
	{
		error_log('normal constructor');
	}
	
	//evaluationsAttempts	
	$this->mEvaluationsAttemptsID = 0;
        
	//types array	
	$this->mItemTypesArray  = array();

	$this->mUnmasteredCount = 0;
	$this->mScore = 0;

	$this->mItemAttemptsArray    = array();
	$this->mItemAttemptsTypeArray    = array();
	$this->mItemAttemptsTransactionCodeArray    = array();
}

public function process()
{
	if ($this->logs)
	{
		error_log('process');
	}
}
	
public function fillTypesArray()
{
	if ($this->logs)
	{
		error_log('fillTypesArray');
	}

	if (count($this->mItemTypesArray) < 1)
	{
		//normal base types..
		$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
		$query .= "-1"; 
		$query .= " AND active_code = 1"; //skip unactive
		$query .= " order by progression asc;";

        	$db = new DatabaseConnection();
		$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
       		$numberOfResults = pg_num_rows($result);
                
		for($i=0; $i < $numberOfResults; $i++)
        	{
			$this->mItemTypesArray[]       = pg_Result($result, $i, 'id');	
			$this->mCoreStandardsIDArray[] = pg_Result($result, $i, 'core_standards_id');
			$this->mTypeMasteryArray[]     = pg_Result($result, $i, 'type_mastery');
		}
	}
	else
	{
		if ($this->logs)
		{
			error_log('skipping fillTypesArray');
		}
	}
}

public function fillItemAttemptsArray()
{
        if ($this->logs)
        {
                error_log('fillItemAttemptsArray');
        }
 
	if (count($this->mItemAttemptsTransactionCodeArray) < 1) //not filled at all get em all....
        {
                $query = "select item_attempts.item_types_id, item_attempts.transaction_code from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
                $query .= $this->mApplication->mLoginStudent->mUserID;
                $query .= " AND item_types.active_code = 1";
                $query .= " order by item_attempts.start_time desc;";

                $db = new DatabaseConnection();
                $result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());

                $num = pg_num_rows($result);

                //fill arrays
                for ($i = 0; $i < $num; $i++)
                {
                        $this->mItemAttemptsTypeArray[] = pg_Result($result, $i, 'item_types_id');
                        $this->mItemAttemptsTransactionCodeArray[]  = pg_Result($result, $i, 'transaction_code');
                }
        }
	else
	{
		if ($this->logs)
		{
			error_log('skipping fillItemAttemptsArray');
		}
	}
}

public function updateScores($score,$field_name)
{
	$this->mScore = $score;

	if ($this->logs)	
	{
		error_log('updateScores');
	}
        /*********************  for teacher real time data  *************/
        $update = "update users SET last_activity = CURRENT_TIMESTAMP, ";
	$update .= $field_name;
	$update .= " = ";
        $update .= $this->mScore;
        $update .= " WHERE id = ";
 	$update .= $this->mApplication->mLoginStudent->mUserID;
        $update .= ";";

        $db = new DatabaseConnection();
        $updateResult = pg_query($db->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

//end of class
}
?>
