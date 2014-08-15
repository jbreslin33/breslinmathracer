<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
/*
This class should allow student to feel confident. First levels should go to infinity... or not exist at all. 2nd should we remediate as soon as a student gets one wrong??? well we do ask it on next level... what about 3 levels??? i think we need another table... we need a one to track when you were sent to a learning standard then we still use levelattempts table.:wq:wq:wq
--scratch that except for the confidence and infinity stuff.

*/
class Normal 
{
    private $mDatabaseConnection;
//pass parameter startNew 0 or 1
function __construct($startNew)
{
	$this->mDatabaseConnection = new DatabaseConnection();

	if ($startNew == 1)
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
        $insert .= ",'normal');";

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
        $_SESSION["ref_id"] = 'normal';
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 10;
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
}

public function continueAttempt()
{
        $_SESSION["ref_id"] = 'normal';

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
		///there are no levelattempts so act like signup for just this one.
        	//set sessions for signup
        	$_SESSION["ref_id"] = 'normal';
        	$_SESSION["level"] = 1;
        	$_SESSION["levels"] = 10;
        	$_SESSION["subject_id"] = 1;

        	$this->setRawData();
        }
        //END NEW CODE
   
        //update session vars with some hard coding
        $_SESSION["levels"] = 10; //normal is always 10 levels....

        $this->setRawData();
}
//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
        $progression_counter = 0;

	//lets get the progression of proper grade...
	$query = "select item_types.progression from item_types JOIN core_standards ON item_types.core_standards_id=core_standards.id JOIN core_clusters ON core_standards.core_clusters_id=core_clusters.id JOIN core_domains_subjects_grades ON core_clusters.core_domains_subjects_grades_id=core_domains_subjects_grades.id JOIN core_subjects_grades ON core_domains_subjects_grades.core_subjects_grades_id=core_subjects_grades.id JOIN core_grades ON core_subjects_grades.core_grades_id=core_grades.id WHERE core_grades.id = ";
	$query .= $_SESSION["core_grades_id"];
        $query .= " LIMIT 1;";
		
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $num = pg_num_rows($result);
        if ($num > 0)
        {
        	//this id is either going in array or not
                $progression_counter = pg_Result($result, 0, 'progression');
	}

        $itemArray = array();

	$firstTime = true;

	while ( count($itemArray) < 11)
	{
		$query = '';	
		if ($firstTime)
		{
			$query .= "select id, progression from item_types where progression = "; 
			$firstTime = false;
		}
		else
		{
			$query .= "select id, progression from item_types where progression > "; 
		}
		$query .= $progression_counter; 
		$query .= " order by progression asc limit 1;";
 
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                $numberOfResults = pg_num_rows($result);

                if ($numberOfResults > 0)
                {
                        //this id is either going in array or not
                        $item_types_id = pg_Result($result, 0, 'id');
                        $progression_counter = pg_Result($result, 0, 'progression');
		
			$query = "select item_attempts.item_types_id, item_attempts.transaction_code from levelattempts JOIN item_attempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON learning_standards_attempts.id=levelattempts.learning_standards_attempts_id where item_attempts.item_types_id = '"; 
			$query .= $item_types_id; 
			$query .= "' AND learning_standards_attempts.user_id = ";
        		$query .= $_SESSION["user_id"];
			$query .= " AND learning_standards_attempts.learning_standards_id != 'practice'";
			$query .= " order by item_attempts.start_time asc limit 10;";
		
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                	$num = pg_num_rows($result);

    			//if we have 10 lets check if we mastered all ten
			$streak = 0;
                        for ($i = 0; $i < $num; $i++)
                        {
                        	$transaction_code = pg_Result($result, 0, 'transaction_code');
                                if ($transaction_code != 1)
                                {
                                	$streak = 0;
                                }
				else
				{
					$streak++;
				}
                        }
                       	if ($streak < 10) 
                        {
                                array_push($itemArray,"$item_types_id");
                                array_push($itemArray,"$streak");
                        }
		}
	}	
        $itemString = "";

        if (count($itemArray) > 0)
        {
                $itemString .= $itemArray[0];
                if (count($itemArray) > 1)
                {
                        $itemString .= ":";
                }
        }

        $totalCount = count($itemArray);

        for ($i = 1; $i < $totalCount; $i++)
        {
                $itemString .= $itemArray[$i];
                if ($i < $totalCount - 1)
                {
                        $itemString .= ":";
                }
        }

        $_SESSION["raw_data"] = $itemString;
}
//end of class
}
?>
