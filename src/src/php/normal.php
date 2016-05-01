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
		error_log('normal constructor');
	}
	
	//evaluationsAttempts	
	$this->mEvaluationsAttemptsID = 0;
        
	//types array	
	$this->mItemTypesArray  = array();

	$this->mUnmasteredCount = 0;
	$this->mScore = 0;
	$this->mLastScore = 0;

	$this->mItemAttemptsArray    = array();

	$this->mItemAttemptsTypeArrayOne    = array();
	$this->mItemAttemptsTransactionCodeArrayOne    = array();

	$this->mItemAttemptsTypeArrayThree    = array();
	$this->mItemAttemptsTransactionCodeArrayThree    = array();

	$this->mItemAttemptsTypeArrayFour    = array();
	$this->mItemAttemptsTransactionCodeArrayFour    = array();
	
	$this->mItemAttemptsTypeArrayFive    = array();
	$this->mItemAttemptsTransactionCodeArrayFive    = array();
	
	$this->mItemAttemptsTypeArraySix    = array();
	$this->mItemAttemptsTransactionCodeArraySix    = array();

	$this->mItemAttemptsTypeArraySeven    = array();
	$this->mItemAttemptsTransactionCodeArraySeven    = array();

	$this->mItemAttemptsTypeArrayEight    = array();
	$this->mItemAttemptsTransactionCodeArrayEight    = array();

	$this->mItemAttemptsTypeArrayNine    = array();
	$this->mItemAttemptsTransactionCodeArrayNine    = array();

	$this->mItemAttemptsTypeArrayTen    = array();
	$this->mItemAttemptsTransactionCodeArrayTen    = array();

	$this->mItemAttemptsTypeArrayTwelve    = array();
	$this->mItemAttemptsTransactionCodeArrayTwelve    = array();
	
	$this->mItemAttemptsTypeArrayThirteen    = array();
	$this->mItemAttemptsTransactionCodeArrayThirteen    = array();
	
	$this->mItemAttemptsTypeArrayFourteen    = array();
	$this->mItemAttemptsTransactionCodeArrayFourteen    = array();
	
	$this->mItemAttemptsTypeArrayFifteen    = array();
	$this->mItemAttemptsTransactionCodeArrayFifteen    = array();
	
	$this->mItemAttemptsTypeArraySixteen    = array();
	$this->mItemAttemptsTransactionCodeArraySixteen    = array();
	
	$this->mItemAttemptsTypeArraySeventeen    = array();
	$this->mItemAttemptsTransactionCodeArraySeventeen    = array();
	
	$this->mItemAttemptsTypeArrayEighteen    = array();
	$this->mItemAttemptsTransactionCodeArrayEighteen    = array();
	
	$this->mItemAttemptsTypeArrayNineteen    = array();
	$this->mItemAttemptsTransactionCodeArrayNineteen    = array();
	
	//add_game_4
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
 
	if (count($this->mItemAttemptsTransactionCodeArrayOne) < 1) //not filled at all get em all....
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
                        $evalID = pg_Result($result,$i,'evaluations_id');
			if ($evalID == 1 || $evalID == 3 || $evalID == 4 || $evalID == 5 || $evalID == 6 || $evalID == 7 || $evalID == 8 || $evalID == 9 || $evalID == 10 || $evalID == 11 || $evalID == 12 || $evalID == 13 || $evalID == 14 || $evalID == 15 || $evalID == 16 || $evalID == 17 || $evalID = 18 || $evalID == 19)
			{
                        	$this->mItemAttemptsTypeArrayOne[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayOne[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 3)
			{
                        	$this->mItemAttemptsTypeArrayThree[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayThree[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 4)
			{
                        	$this->mItemAttemptsTypeArrayFour[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayFour[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 5)
			{
                        	$this->mItemAttemptsTypeArrayFive[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayFive[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 6)
			{
                        	$this->mItemAttemptsTypeArraySix[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArraySix[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 7)
			{
                        	$this->mItemAttemptsTypeArraySeven[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArraySeven[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 8)
			{
                        	$this->mItemAttemptsTypeArrayEight[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayEight[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 9)
			{
                        	$this->mItemAttemptsTypeArrayNine[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayNine[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 10)
			{
                        	$this->mItemAttemptsTypeArrayTen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayTen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 12)
			{
                        	$this->mItemAttemptsTypeArrayTwelve[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayTwelve[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 13)
			{
                        	$this->mItemAttemptsTypeArrayThirteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayThirteen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 14)
			{
                        	$this->mItemAttemptsTypeArrayFourteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayFourteen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 15)
			{
                        	$this->mItemAttemptsTypeArrayFifteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayFifteen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 16)
			{
                        	$this->mItemAttemptsTypeArraySixteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArraySixteen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 17)
			{
                        	$this->mItemAttemptsTypeArraySeventeen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArraySeventeen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 18)
			{
                        	$this->mItemAttemptsTypeArrayEighteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayEighteen[]  = pg_Result($result,$i,'transaction_code');
			}
			if ($evalID == 19)
			{
                        	$this->mItemAttemptsTypeArrayNineteen[] = pg_Result($result,$i,'item_types_id');
                        	$this->mItemAttemptsTransactionCodeArrayNineteen[]  = pg_Result($result,$i,'transaction_code');
			}

			//add_game_5
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
