<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");

//start new session
session_start();

//start new so pass 1 as first paremeter.
if (isset($_SESSION["user_id"]))
{
        $normal = new Normal(0);
}

?>

<?php

class Normal 
{

function __construct($startNew)
{
	$this->logs = false; 
	if ($this->logs)
	{
		error_log('normal constructor');
	}

	$this->mDatabaseConnection = new DatabaseConnection();
        
	$this->progression_counter = 0;
	$this->progression_counter_limit = 0;

	//types array	
	$this->item_types_array                = array();
	$this->progression_array       = array();
	$this->core_standards_id_array = array();
	$this->type_mastery_array      = array();

	//attempts array 	
	$this->start_time_array       = array();
	$this->item_attempts_array             = array();
	$this->transaction_code_array = array();
	$this->core_standards_array   = array();

	//tricks
	$this->leastAsked = '';	
	$this->leastPercent = '';	
	$this->leastCorrect = '';	

	//masters
	$this->previous_id_array = array();

	//scores
        $this->score_array = array();
        $this->high_standard = '';
        $this->high_progression = '';
	
	$this->item_types_id_to_ask = '';
	
	if ( isset($_SESSION["evaluations_attempts_id_normal"]) )
	{	
		$this->continueEvaluation();
	}
	else
	{
		$this->newEvaluation();
		$this->continueEvaluation();
	}

	$this->process();
	$this->sendNormal();	
}

public function sendNormal()
{
	//fill php vars
	$returnString = "116,";
	$returnString .= $_SESSION["ref_id"];
	$returnString .= ",";
	$returnString .= $_SESSION["LOGGED_IN"];
	$returnString .= ",";
	$returnString .= $_SESSION["username"];
	$returnString .= ",";
	$returnString .= $_SESSION["first_name"];
	$returnString .= ",";
	$returnString .= $_SESSION["last_name"];
	$returnString .= ",";
	$returnString .= $_SESSION["raw_data"];
	$returnString .= ",";
	$returnString .= $_SESSION["role"];
	echo $returnString;
}

public function newEvaluation()
{
	if ($this->logs)
	{
		error_log('newEvaluation');
	}

	//close old evaluation_attempts.......
	$evaluations_attempts = new EvaluationsAttempts();
	$evaluations_attempts->update();

	$_SESSION["evaluations_id"] = 1;
	$evaluations_attempts->insert();

	//set generic id to normal
	$_SESSION["evaluations_attempts_id_normal"] = $_SESSION["evaluations_attempts_id"];
}

public function continueEvaluation()
{
	if ($this->logs)
	{
		error_log('continueEvaluation');
	}

	//set normal to generic id
      	$_SESSION["evaluations_attempts_id"] = $_SESSION["evaluations_attempts_id_normal"];
}

public function process()
{
	if ($this->logs)
	{
		error_log('process');
	}

	$this->setRawData();
	
	$item_attempt = new ItemAttempt();
       	$item_attempt->insert();

	//i would like to add item_attempt_id to rawdata before we send it out..
	$raw = $_SESSION["raw_data"];
	$raw .= ":";
       	$raw .= $_SESSION["item_attempt_id"];
	$_SESSION["raw_data"] = $raw;
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	if ($this->logs)
	{
		error_log('setRawData');
	}
	
	$this->initializeProgressionCounter();
	$this->fillTypesArray();
	$this->fillAttemptsArray();
	$this->progressions(); //scores standard number which is chapter basically high standards  do this once.. 
	
	$this->item_types_id_to_ask = '';
        
	$this->masters();
	$this->unmasteredCount = $_SESSION["unmastered_count"]; 
        $this->updateScores();
	$this->setEarliestToAsk("wha");	
	$this->goBananas();
	$this->setItemString();
}

//standard to start the base at we get the counter for base questions
public function initializeProgressionCounter()
{
	if ($this->logs)
	{
		error_log('initializeProgressionCunter');
	}

	$query = "select progression from item_types where core_standards_id = '";
	$query .= $_SESSION["core_standards_id"];
	$query .= "' ORDER BY item_types.progression";
        $query .= " LIMIT 1;";
		
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $num = pg_num_rows($result);
        if ($num > 0)
        {
        	//this id is either going in array or not
                $this->progression_counter = pg_Result($result, 0, 'progression');

		//temp hack
		$this->progression_counter = floatval($this->progression_counter) - floatval(0.0001);
		$this->progression_counter_limit = floatval($this->progression_counter + 2);
	}
}

public function fillTypesArray()
{
	if ($this->logs)
	{
		error_log('fillTypesArray');
	}
	//remediate types
	$query = "select item_types.id, item_types.progression, item_types.core_standards_id, item_types.type_mastery from remediate JOIN core_standards ON core_standards.id=remediate.core_standards_id JOIN item_types ON item_types.core_standards_id=remediate.core_standards_id where remediate.user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " AND active_code = 1"; //skip unactive  
	$query .= " order by progression asc;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $numberOfResults = pg_num_rows($result);

        for($i=0; $i < $numberOfResults; $i++)
        {
                $this->item_types_array[]                = pg_Result($result, $i, 'id');
                $this->progression_array[]       = pg_Result($result, $i, 'progression');
                $this->core_standards_id_array[] = pg_Result($result, $i, 'core_standards_id');
                $this->type_mastery_array[]      = pg_Result($result, $i, 'type_mastery');
        }

	//normal base types..
	$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
	$query .= $this->progression_counter; 
	$query .= " AND active_code = 1"; //skip unactive
	$query .= " order by progression asc;";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$this->item_types_array[]                = pg_Result($result, $i, 'id');	
		$this->progression_array[]       = pg_Result($result, $i, 'progression');	
		$this->core_standards_id_array[] = pg_Result($result, $i, 'core_standards_id');
		$this->type_mastery_array[]      = pg_Result($result, $i, 'type_mastery');
	}
}
	
public function fillAttemptsArray()
{
	if ($this->logs)
	{
		error_log('fillAttemptsArray');
	}
	//fill remediate attempts

	//fill normal attempts
	$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " AND item_types.active_code = 1"; 
        $query .= " order by item_attempts.start_time desc;";
													
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
		
        $num = pg_num_rows($result);

	//fill arrays
  	for ($i = 0; $i < $num; $i++)
	{
		$this->start_time_array[]       = pg_Result($result, $i, 'start_time');
		$this->item_attempts_array[]             = pg_Result($result, $i, 'item_types_id');
		$this->transaction_code_array[] = pg_Result($result, $i, 'transaction_code');
		$this->core_standards_array[]   = pg_Result($result, $i, 'core_standards_id');
	}
}
public function masters()
{
	if ($this->logs)
	{
		error_log('masters');
	}

	//do we have an initial count...
	if (!isset($_SESSION["unmastered_count"]))
	{
		$unmastered_count = 0;
        	//loop thru item array until you reach end
        	$i = 0;
        	while ($i <= intval(count($this->item_types_array) - 1))
        	{
                	$mini_transaction_code_array = array();

                	$c = 0;

                	while ($c <= intval(count($this->item_attempts_array) - 1))
                	{
                        	//check for match of ids if so add to code array
                        	if ($this->item_types_array[$i] == $this->item_attempts_array[$c])
                        	{
                                	$mini_transaction_code_array[] = $this->transaction_code_array[$c];
                        	}
                        	$c++; //increment for typearrays
                	}

                	//analysis
                	if ( intval(count($mini_transaction_code_array)) == 1 )
               		{
				$unmastered_count++;
               		}
                	if ( intval(count($mini_transaction_code_array)) > 1 )
                	{
                        	//if either is not 1 then its not type mastered so make it ask type
                        	if ($mini_transaction_code_array[0] != 1 || $mini_transaction_code_array[1] != 1)
                        	{
					$unmastered_count++;
				}
                	}
                	$i++;
        	}
		$_SESSION["unmastered_count"] = $unmastered_count;
	}
	else
	{

		//get the last item_type
		$item_type_last = 'none';
		if (isset($_SESSION["item_type_last"]))
		{
			$item_type_last = $_SESSION["item_type_last"];
		}

		$master_query = "select type_mastery from item_types where id = '";
		$master_query .= $item_type_last;  
		$master_query .= "';";
		
		$master_result = pg_query($this->mDatabaseConnection->getConn(),$master_query) or die('no connection: ' . pg_last_error());
        	
		$master_num = pg_num_rows($master_result);

		$type_mastery = 0;	
		if ($master_num > 0)
		{
                	$type_mastery = pg_Result($master_result,0,'type_mastery');
		}
		$type_mastery_and_one = intval($type_mastery + 1);  

		//get the last 3 attempts for last_item_type	
		$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        	$query .= $_SESSION["user_id"];
        	$query .= " AND item_attempts.item_types_id = '";
		$query .= $item_type_last;
		$query .= "' order by item_attempts.start_time desc";
		$query .= " LIMIT ";
		$query .= $type_mastery_and_one;
		$query .= ";";
		
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());

        	$num = pg_num_rows($result);

		$trans_code_array = array();
        
		for ($i = 0; $i < $num; $i++)
        	{
                	$trans_code_array[] = pg_Result($result, $i, 'transaction_code');
        	}
	
		//check before latest...	
		$latest_mastered = true;
		$mastered = true;	

		//if count less than 3 you could not have mastered from earlier
		if ( count($trans_code_array) < $type_mastery_and_one)
		{
			$latest_mastered = false;
		}
		else //lets loop 
		{
			for ($i = 1; $i < count($trans_code_array); $i++) //skip top one as its new
			{
				if ($trans_code_array[$i] != 1)
				{
					$latest_mastered = false;			
				} 
			}
		}


		if ( count($trans_code_array) < intval($type_mastery_and_one - 1) )
		{
			$mastered = false;
		}
		else
		{
			//actually check for mastery amount up skipping back end cause its out of date 
       			for ($i = 0; $i < intval(count($trans_code_array) - 1); $i++)
                	{
                       		if ($trans_code_array[$i] != 1)
                       		{
                               		$mastered = false;   
                       		}
                	}
		}

		if ($mastered == true && $latest_mastered == false)
		{
        		$unmastered_count = $_SESSION["unmastered_count"];
				
			if ($unmastered_count > 0)  
			{
				$unmastered_count = intval($unmastered_count - 1);
        			$_SESSION["unmastered_count"] = $unmastered_count;
			}
	
			//lets help out score function here 
			$this->score_array = $_SESSION["score_array"];	
                        $this->score_array[] = $item_type_last;
			$_SESSION["score_array"] = $this->score_array;	
		}

                if ($mastered == false && $latest_mastered == true)
                {
                        $unmastered_count = $_SESSION["unmastered_count"];
                        $unmastered_count = intval($unmastered_count + 1);
                        $_SESSION["unmastered_count"] = $unmastered_count;
                }

	}
}

public function progressions()
{
	if ($this->logs)	
	{
		error_log('progressions');
	}

	if ( !isset($_SESSION["high_standard"]) )
	{
        	//score
        	$i = 0;
        	while ($i <= intval(count($this->item_types_array) - 1))
        	{
                	$c = 0;
                	$exists = false;
                	while ($c <= intval(count($this->item_attempts_array) - 1) && $exists == false)
                	{
                        	if ($this->item_types_array[$i] == $this->item_attempts_array[$c])
                        	{
                               		$this->high_standard = $this->item_types_array[$i];
					$_SESSION["high_standard"] = $this->high_standard;	

                                	$this->high_progression = $this->progression_array[$i];
					$_SESSION["high_progression"] = $this->high_progression;	
        				
					$this->score_array[] = $this->item_types_array[$i];
					$_SESSION["score_array"] = $this->score_array;	

                                	$exists = true;
                        	}
                        	$c++;
                	}
                	$i++;
		}
        }
	else //we have session vars set so set temp class vars
	{
		$this->high_standard = $_SESSION["high_standard"];	
		$this->high_progression = $_SESSION["high_progression"];	
		$this->score_array = $_SESSION["score_array"];	
	}
        //trim progression
        $this->high_progression = substr($this->high_progression,2,2);
}

public function updateScores()
{
	if ($this->logs)	
	{
		error_log('updateScores');
		error_log( (string) intval (count($this->score_array) ));	
	}
        /*********************  for teacher real time data  *************/
        $update = "update users SET last_activity = CURRENT_TIMESTAMP, score = ";
        $update .= intval(count($this->score_array));
        $update .= ", unmastered = ";
        $update .= $_SESSION["unmastered_count"];
        $update .= " WHERE id = ";
        $update .= $_SESSION["user_id"];
        $update .= ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}


public function setEarliestToAsk($skip)
{
	if ($this->logs)	
	{
		error_log('setEarliestToAsk');
	}
	
	//ask 1st one that is not mastered
	$i = 0;

	//loop thru id array until you reach end or find a item to ask ..this is why you can grab all attempts regardless of progression as long as they where normal as they will never get checked in following code.

	$found_one = false;
	while ($i <= intval(count($this->item_types_array) - 1) && $found_one == false)
	{ 
		if ($skip == $this->item_types_array[$i])
		{
		}
		else 
		{
			$mini_transaction_code_array = array(); 

			$c = 0;

			//loop attempt array and dump into arrays then you can eval after..need to use mastery 
			while ($c <= intval(count($this->item_attempts_array) - 1) && intval(count($mini_transaction_code_array)) < intval($this->type_mastery_array[$i]))
			{
				//check for match of ids if so add to code array
				if ($this->item_types_array[$i] == $this->item_attempts_array[$c])
				{
					$mini_transaction_code_array[] = $this->transaction_code_array[$c];
				}
				$c++; //increment for typearrays
			}

			//if less than mastery than type has not been asked enuf so make it ask type
			if ( intval(count($mini_transaction_code_array)) < intval($this->type_mastery_array[$i]) )
			{
				$this->item_types_id_to_ask = $this->item_types_array[$i];
				$found_one = true;
			}	 
			else  //we have over mastery to check
			{
				//if any is not 1 then its not type mastered so make it ask type
				for ($t=0; $t < $this->type_mastery_array[$i]; $t++)
				{
					if ($mini_transaction_code_array[$t] != 1)
					{
						$this->item_types_id_to_ask = $this->item_types_array[$i];
						$found_one = true;
					}
				} 
			} 
		}
		$i++;
	}
}

public function trueBananas()
{
	if ($this->logs)	
	{
		error_log('trueBananas');
	}
	$r = rand( 0,intval(count($this->previous_id_array)-1) );
	$this->item_types_id_to_ask = $this->previous_id_array[$r];
}

public function leastAsked()
{
	if ($this->logs)	
	{
		error_log('leastAsked');
	}
	if ( isset($_SESSION["least_asked"]) )
	{
		$item_types_id_to_ask = $_SESSION["least_asked"];
	}
	else
	{

	$least_id = '';
	$leastCount = 9999;
	$currentCount = 0;

	$p = 0;	
	while ($p <= intval(count($this->previous_id_array) - 1))
	{
		$currentCount = 0;
		$i = 0;
		while ($i <= intval(count($this->item_attempts_array) - 1))
		{
			if ($this->previous_id_array[$p] == $this->item_attempts_array[$i])
			{
				$currentCount++;
			}	 
			$i++;
		}
		if ($currentCount < $leastCount) //we have a new chump
		{
			$leastCount = $currentCount;
			$least_id = $this->previous_id_array[$p];				
		} 
		$p++;
	}

	$this->item_types_id_to_ask = $least_id;
	$_SESSION["least_asked"] = $least_id;
	}
}

public function leastCorrect()
{
	if ($this->logs)	
	{
		error_log('leastCorrect');
	}
	if ( isset($_SESSION["least_correct"]) )
	{
		$item_types_id_to_ask = $_SESSION["least_correct"];
	}
	else
	{
	
	$least_id = '';
        $leastCount = 9999;
        $currentCount = 0;

        $p = 0;
        while ($p <= intval(count($this->previous_id_array) - 1))
        {
        	$currentCount = 0;
                $i = 0;
                while ($i <= intval(count($this->item_attempts_array) - 1))
               	{
               		if ($this->previous_id_array[$p] == $this->item_attempts_array[$i])
                        {
				if ($this->transaction_code_array[$i] == 1)
				{
                                      	$currentCount++;
				}
                        }
                        $i++;
                }
               	if ($currentCount < $leastCount) //we have a new chump
               	{
                	$leastCount = $currentCount;
                       	$least_id = $this->previous_id_array[$p];
       		}
        	$p++;
        }
	$this->item_types_id_to_ask = $least_id;
	$_SESSION["least_correct"] = $least_id;
	}
}

public function leastPercent()
{
	if ($this->logs)	
	{
		error_log('leastPercent');
	}
	if ( isset($_SESSION["least_percent"]) )
	{
		$item_types_id_to_ask = $_SESSION["least_percent"];
	}
	else
	{
	$least_id = '';
        $leastPercent = 1000;
        $currentPercent = 0;
	$right = 0;
	$wrong = 0;

        $p = 0;
        while ($p <= intval(count($this->previous_id_array) - 1) && intval($right + $wrong) < 9)
        {
        	$currentPercent = 0;
		$right = 0; 
		$wrong = 0; 

                $i = 0;
                while ($i <= intval(count($this->item_attempts_array) - 1))
                {
                	if ($this->previous_id_array[$p] == $this->item_attempts_array[$i])
                        {
				if ($this->transaction_code_array[$i] == 1)
				{
                                   	$right++;
				}
				if ($this->transaction_code_array[$i] == 2)
				{
                                      	$wrong++;
				}
                         }
                         $i++;
                }

		//calc
		$total = intval($right + $wrong);
		if ($wrong == 0)
		{
			$currentPercent = 100;	
		}
		else
		{
			$currentPercent = floatval($right / $wrong);  
			$currentPercent = round( $currentPercent, 2);
		}
                if ($currentPercent < $leastPercent) //we have a new chump
                {
                	$leastPercent = $currentPercent;
                        $least_id = $this->previous_id_array[$p];
                }
                $p++;
	}
        $this->item_types_id_to_ask = $least_id;
	$_SESSION["least_percent"] = $least_id;
	}
}

public function goBananas()
{
	if ($this->logs)	
	{
		error_log('goBananas');
	}
	//check to see if it was asked last.....

	if ( !isset($_SESSION["item_type_last"]) )
 	{
		//go with above from earliest unmastered
		if ($this->logs)
		{
			error_log('go with last should not happen!!!!');
		}
	}
	else if ($_SESSION["item_type_last"] == $this->item_types_id_to_ask) //if dup then go bananas
	{
		//lets get all previously asked questions....in normal
		if (!isset($_SESSION["previous_id_array"]))
		{
 			$i = 0;
			while ($i <= intval(count($this->item_types_array) - 1))
        		{
 				$c = 0;
				$exists = false;
				while ($c <= intval(count($this->item_attempts_array) - 1) && $exists == false)
				{
					if ($this->item_types_array[$i] == $this->item_attempts_array[$c])
					{
						$this->previous_id_array[] = $this->item_types_array[$i];
						$exists = true;
					}
					$c++;
				}
				$i++;
			}
			$_SESSION["previous_id_array"] = $this->previous_id_array;
		}
		else
		{
			$this->previous_id_array = $_SESSION["previous_id_array"];
		}

		$bananas = rand( 0,100);
		$bananas = intval($bananas);
	
		//true bananas
		if ($bananas > -1 && $bananas <= 25)
		{	 
			if ( intval($this->unmasteredCount) < 7 )   
			{
				$this->trueBananas();
			}
			else
			{
				$r = rand( 0,100);
				if ($r > -1 && $r <= 33)
				{
					$this->leastAsked();
				}
				else if ($r > 33 && $r <= 66)
				{
					$this->leastCorrect();
				}
				else if ($r > 66 && $r <= 100)
				{
					$this->leastPercent();
				}
			}
		}

		// this should be least asked
		else if ($bananas > 25 && $bananas <= 50)
		{
			$this->leastAsked();
		}

		// this should be least correct
		else if ($bananas > 50 && $bananas <= 75)
		{
			$this->leastCorrect();
		}

		// this should be least percent correct
		else if ($bananas > 75 && $bananas <= 100)
		{
			$this->leastPercent();
		}
		else
		{
			if ($this->logs)	
			{
				error_log('else fall thru on bananas should not happen!!!');
			}
		}
		//after all that if you still have a dup fix it by going next
		if ($_SESSION["item_type_last"] == $this->item_types_id_to_ask) //if dup then go bananas
		{
			$this->setEarliestToAsk($this->item_types_id_to_ask);
		}
	}
	else
	{
		if ($this->logs)	
		{
			error_log('no dup'); 
		}
	}
}

public function setItemString()
{
	if ($this->logs)	
	{
		error_log('setItemString');
	}
        $_SESSION["item_type_last"] = $this->item_types_id_to_ask; //set this new one to last in sessions

        //pink
        $itemString =  $this->item_types_id_to_ask; //ask this one

        //blue
        $itemString .= ":";
        $itemString .= "L=";
        $itemString .= "$this->high_progression";
        $itemString .= " U=";
        $itemString .= $_SESSION["unmastered_count"];

        //yellow
        $itemString .= ":";
        $itemString .= "$this->high_standard";

        //green
        $itemString .= ":";
        $itemString .= intval(count($this->score_array));

        $_SESSION["before_item_type_id"] = $itemString;
        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $this->item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $this->item_types_id_to_ask;
}

//end of class
}
?>
