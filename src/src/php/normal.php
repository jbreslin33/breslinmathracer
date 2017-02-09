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
	$this->logs = false; 
	if ($this->logs)
	{
		error_log('Normal::Normal');
	}
	
	//evaluationsAttempts	
	$this->mEvaluationsAttemptsID = 0;

	//evaluations
	$this->mEvaluationsArray  = array();
	$this->mEvaluationsItemTypesArray  = array();

        
	//types array	
	$this->mItemTypesArray  = array();


	$this->mUnmasteredCount = 0;
	$this->mScore = 0;
	$this->mLastScore = 0;

	//i assume live new attempts
	$this->mItemAttemptsArray    = array();

	//database attempts
	$this->mItemAttemptsEvaluationsIDArray   = array();
	$this->mItemAttemptsItemTypeArray            = array();
	$this->mItemAttemptsTransactionCodeArray = array();
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
		$query = "select id from item_types where progression > "; 
		$query .= "-1"; 
		$query .= " AND active_code = 1"; //skip unactive
		$query .= " order by progression asc;";

        	$db = new DatabaseConnection();
		$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
       		$numberOfResults = pg_num_rows($result);
                
		for($i=0; $i < $numberOfResults; $i++)
        	{
			$this->mItemTypesArray[]       = pg_Result($result, $i, 'id');	
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
                $query = "select evaluations_attempts.evaluations_id, item_attempts.item_types_id, item_attempts.transaction_code from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id != 2 AND evaluations_attempts.user_id = ";
                $query .= $this->mApplication->mLoginStudent->mUserID;
                $query .= " AND item_types.active_code = 1";
                $query .= " order by item_attempts.start_time desc;";

                $db = new DatabaseConnection();
                $result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());

                $num = pg_num_rows($result);

                //fill arrays
                for ($i = 0; $i < $num; $i++)
                {
                        $this->mItemAttemptsEvaluationsIDArray[]   = pg_Result($result,$i,'evaluations_id');
                        $this->mItemAttemptsItemTypeArray[]        = pg_Result($result,$i,'item_types_id');
                        $this->mItemAttemptsTransactionCodeArray[] = pg_Result($result,$i,'transaction_code');
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

public function fillEvaluationsArray()
{
        if ($this->logs)
        {
                error_log('fillEvaluationsArray');
        }

        if (count($this->mEvaluationsArray) < 1)
        {
                //normal base types..
                $query = "select id from evaluations where progression > 0.15 AND progression < 100 ";
                $query .= " order by progression asc;";

                $db = new DatabaseConnection();
                $result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
                $numberOfResults = pg_num_rows($result);

                for($i=0; $i < $numberOfResults; $i++)
                {
                        $this->mEvaluationsArray[]       = pg_Result($result, $i, 'id');
                }
        }
        else
        {
                if ($this->logs)
                {
                        error_log('skipping fillEvaluationsArray');
                }
        }
}

public function fillEvaluationItemTypesArray()
{
        if ($this->logs)
        {
                error_log('fillEvaluationItemTypesArray');
        }

        if (count($this->mEvaluationItemTypesArray) < 1)
        {
		$query = "select evaluations_id, item_types_id from evaluations_items  order by evaluations_id asc, item_types_id;";

                $db = new DatabaseConnection();
                $result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
                $numberOfResults = pg_num_rows($result);

                for($i=0; $i < $numberOfResults; $i++)
                {
                        $this->mEvaluationsItemTypesArray[] = pg_Result($result, $i, 'id');
                }
        }
        else
        {
                if ($this->logs)
                {
                        error_log('skipping fillEvaluationsItemTypesArray');
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

	if ($field_name == 'score')
	{
		$this->updateMatch($db);
	}
}

public function updateStandard($score,$field_name)
{
        $this->mScore = $score;

        if ($this->logs)
        {
                error_log('updateScores');
        }
        /*********************  for teacher real time data  *************/
        $update = "update users SET last_activity = CURRENT_TIMESTAMP, ";
        $update .= $field_name;
        $update .= " = '";
        $update .= $this->mScore;
        $update .= "' WHERE id = ";
        $update .= $this->mApplication->mLoginStudent->mUserID;
        $update .= ";";

        $db = new DatabaseConnection();
        $updateResult = pg_query($db->getConn(),$update) or die('Could not connect: ' . pg_last_error());

        if ($field_name == 'score')
        {
                $this->updateMatch($db);
        }

}


public function updateMatch($db)
{
	if ($this->mLastScore != $this->mScore && $this->mLastScore != 0)
	{
		$s = "select users.id, teams_matches.id from matches JOIN teams_matches ON matches.id=teams_matches.matches_id JOIN teams ON teams_matches.team_id=teams.id JOIN users ON teams.id=users.team_id where now() > matches.start_time AND now() < matches.end_time;";	
		
        	$r = pg_query($db->getConn(),$s) or die('Could not connect: ' . pg_last_error());
                $n = pg_num_rows($r);
		//$val = pg_fetch_result($res, 1, 0);
                for($i = 0; $i < $n; $i++)
                {
			$arr = pg_fetch_array($r, NULL, PGSQL_NUM);
			$user_id = $arr[0];		
			$teams_matches_id = $arr[1];		
			//$teams_matches_id = pg_fetch_result($r, $i, 1);
			if ($user_id == $this->mApplication->mLoginStudent->mUserID)
			{
				$u = "update teams_matches set score = score + 1 where id = ";
				$u .= $teams_matches_id;
				$u .= ";";	
        			$r = pg_query($db->getConn(),$u) or die('Could not connect: ' . pg_last_error());
			} 
		}
	}
	$this->mLastScore = $this->mScore;
}

//end of class
}
?>
