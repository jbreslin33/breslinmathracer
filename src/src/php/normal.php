<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/core_application.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");

//start new session
session_start();
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
        
	$this->mProgressionCounter = 0;

	//types array	
	$this->mItemTypesArray  = array();
	$this->mProgressionArray     = array();
	$this->mCoreStandardsIDArray = array();
	$this->mTypeMasterArray      = array();

	//attempts array 	
	$this->mStartTimeArray       = array();
	$this->mItemAttemptsArray             = array();
	$this->mTransactionCodeArray = array();
	$this->mCoreStandardsArray   = array();

	//tricks
	$this->mLeastAsked = '';	
	$this->mLeastPercent = '';	
	$this->mLeastCorrect = '';	

	//masters
	$this->mPreviousIDArray = array();
	
	$this->mUnmasteredCount = -99;

	//scores
        $this->mScoreArray = array();
        $this->mHighStandard = '';
        $this->mHighProgression = '';
	
	$this->mItemTypesIDToAsk = '';

	$this->mItemTypeLast = 0;
}
	

public function sendNormal()
{
	//fill php vars
	$returnString = "116,";
	$returnString .= $this->mApplication->mRef_id;
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginStudent->mLoggedIn;
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginStudent->mUsername;
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginStudent->mFirstName;
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginStudent->mLastName;
	$returnString .= ",";
	$returnString .= $this->mApplication->mRawData;
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginStudent->mRole;
	echo $returnString;
}

public function handleEvaluation()
{
	if ($this->logs)
	{
		error_log('newEvaluation');
	}

	if ($this->mEvaluationsAttemptsID == 0) //we need new one
	{
		$this->mApplication->mEvaluationsAttempts->mEvaluationsID = 1; //currently normal
		$this->mApplication->mEvaluationsAttempts->insert();
		$this->mEvaluationsAttemptsID = $this->mApplication->mEvaluationsAttempts->mID;
	}
	else
	{

	}
	
	// skip for now	$this->mApplication->mEvaluationsAttempts->update();
}

public function process()
{
	if ($this->logs)
	{
		error_log('process');
	}

	$this->handleEvaluation();
	$this->initializeProgressionCounter();
	$this->fillTypesArray();
	$this->fillAttemptsArray();

	$this->setRawData();


	$this->mApplication->mItemAttempt->insert($this->item_types_id_to_ask);

	//i would like to add item_attempt_id to rawdata before we send it out..
	$raw = $this->mApplication->mRawData;
	$raw .= ":";
       	$raw .= $this->mApplication->mItemAttempt->mID;
	$this->mApplication->mRawData = $raw;

	//finally send it	
	$this->sendNormal();	
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	if ($this->logs)
	{
		error_log('setRawData');
	}
	
	$this->progressions(); //scores standard number which is chapter basically high standards  do this once.. 
	
	$this->item_types_id_to_ask = '';
        
	$this->masters();
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
		error_log('initializeProgressionCounter');
	}

	$query = "select progression from item_types where core_standards_id = '";
	$query .= $this->mApplication->mLoginStudent->mCoreStandardsID;
	$query .= "' ORDER BY item_types.progression";
        $query .= " LIMIT 1;";
		
        $db = new DatabaseConnection();
	$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());

        $num = pg_num_rows($result);
        if ($num > 0)
        {
        	//this id is either going in array or not
                $this->mProgressionCounter = pg_Result($result, 0, 'progression');

		//temp hack
		$this->mProgressionCounter = floatval($this->mProgressionCounter) - floatval(0.0001);
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
        $query .= $this->mApplication->mLoginStudent->mUserID;
	$query .= " AND active_code = 1"; //skip unactive  
	$query .= " order by progression asc;";

        $db = new DatabaseConnection();
        $result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
        $numberOfResults = pg_num_rows($result);

        for($i=0; $i < $numberOfResults; $i++)
        {
                $this->mItemTypesArray[]       = pg_Result($result, $i, 'id');
                $this->mProgressionArray[]     = pg_Result($result, $i, 'progression');
                $this->mCoreStandardsIDArray[] = pg_Result($result, $i, 'core_standards_id');
                $this->mTypeMasteryArray[]     = pg_Result($result, $i, 'type_mastery');
        }

	//normal base types..
	$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
	$query .= $this->mProgressionCounter; 
	$query .= " AND active_code = 1"; //skip unactive
	$query .= " order by progression asc;";

        $db = new DatabaseConnection();
	$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$this->mItemTypesArray[]       = pg_Result($result, $i, 'id');	
		$this->mProgressionArray[]     = pg_Result($result, $i, 'progression');	
		$this->mCoreStandardsIDArray[] = pg_Result($result, $i, 'core_standards_id');
		$this->mTypeMasteryArray[]     = pg_Result($result, $i, 'type_mastery');
	}
}

//can you continue to fill this array without db? or is that not neccesary	
public function fillAttemptsArray()
{
	if ($this->logs)
	{
		error_log('fillAttemptsArray');
	}
	//fill normal attempts
	$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        $query .= $this->mApplication->mLoginStudent->mUserID;
	$query .= " AND item_types.active_code = 1"; 
        $query .= " order by item_attempts.start_time desc;";
													
        $db = new DatabaseConnection();
	$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());
		
        $num = pg_num_rows($result);

	//fill arrays
  	for ($i = 0; $i < $num; $i++)
	{
		$this->mStartTimeArray[]       = pg_Result($result, $i, 'start_time');
		$this->mItemAttemptsArray[]             = pg_Result($result, $i, 'item_types_id');
		$this->mTransactionCodeArray[] = pg_Result($result, $i, 'transaction_code');
		$this->mCoreStandardsArray[]   = pg_Result($result, $i, 'core_standards_id');
	}
}

public function masters()
{
	if ($this->logs)
	{
		error_log('masters');
	}

	//do we have an initial count...
	if ($this->mUnmasteredCount == -99)
	{
        	//loop thru item array until you reach end
        	$i = 0;
        	while ($i <= intval(count($this->mItemTypesArray) - 1))
        	{
                	$mini_transaction_code_array = array();

                	$c = 0;

                	while ($c <= intval(count($this->mItemAttemptsArray) - 1))
                	{
                        	//check for match of ids if so add to code array
                        	if ($this->mItemTypesArray[$i] == $this->mItemAttemptsArray[$c])
                        	{
                                	$mini_transaction_code_array[] = $this->mTransactionCodeArray[$c];
                        	}
                        	$c++; //increment for typearrays
                	}

                	//analysis
                	if ( intval(count($mini_transaction_code_array)) == 1 )
               		{
				$this->mUnmasteredCount++;
               		}
                	if ( intval(count($mini_transaction_code_array)) > 1 )
                	{
                        	//if either is not 1 then its not type mastered so make it ask type
                        	if ($mini_transaction_code_array[0] != 1 || $mini_transaction_code_array[1] != 1)
                        	{
					$this->mUnmasteredCount++;
				}
                	}
                	$i++;
        	}
	}
	else
	{
		$master_query = "select type_mastery from item_types where id = '";
		$master_query .= $this->mItemTypeLast;  
		$master_query .= "';";
		
        	$db = new DatabaseConnection();
		$master_result = pg_query($db->getConn(),$master_query) or die('no connection: ' . pg_last_error());
        	
		$master_num = pg_num_rows($master_result);

		$type_mastery = 0;	
		if ($master_num > 0)
		{
                	$type_mastery = pg_Result($master_result,0,'type_mastery');
		}
		$type_mastery_and_one = intval($type_mastery + 1);  

		//get the last 3 attempts for last_item_type	
		$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
 		$query .= $this->mApplication->mLoginStudent->mUserID;
        	$query .= " AND item_attempts.item_types_id = '";
		$query .= $this->mItemTypeLast;
		$query .= "' order by item_attempts.start_time desc";
		$query .= " LIMIT ";
		$query .= $type_mastery_and_one;
		$query .= ";";
		
        	$db = new DatabaseConnection();
		$result = pg_query($db->getConn(),$query) or die('no connection: ' . pg_last_error());

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
				$this->mUnmasteredCount = intval($this->mUnmasteredCount - 1);
			}
	
			//lets help out score function here 
/*
			$this->mScoreArray = $_SESSION["score_array"];	
                        $this->score_array[] = $item_type_last;
			$_SESSION["score_array"] = $this->score_array;	
*/
		}

                if ($mastered == false && $latest_mastered == true)
                {
                        $this->mUnmasteredCount = intval($unmastered_count + 1);
                }

	}
}

public function progressions()
{
	if ($this->logs)	
	{
		error_log('progressions');
	}

	if ( $this->mHighStandard == 0)
	{
        	//score
        	$i = 0;
        	while ($i <= intval(count($this->mItemTypesArray) - 1))
        	{
                	$c = 0;
                	$exists = false;
                	while ($c <= intval(count($this->mItemTypesArray) - 1) && $exists == false)
                	{
                        	if ($this->mItemTypesArray[$i] == $this->mItemTypesArray[$c])
                        	{
                               		$this->mHighStandard = $this->mItemTypesArray[$i];

                                	$this->mHighProgression = $this->mProgressionArray[$i];
        				
					$this->mScoreArray[] = $this->mItemTypesArray[$i];
                                	$exists = true;
                        	}
                        	$c++;
                	}
                	$i++;
		}
        }
        
	//trim progression
        $this->mHighProgression = substr($this->mHighProgression,2,2);
}

public function updateScores()
{
	if ($this->logs)	
	{
		error_log('updateScores');
		//error_log( (string) intval (count($this->score_array) ));	
	}
        /*********************  for teacher real time data  *************/
        $update = "update users SET last_activity = CURRENT_TIMESTAMP, score = ";
        $update .= intval(count($this->mScoreArray));
        $update .= ", unmastered = ";
        $update .= $this->mUnmasteredCount;
        $update .= " WHERE id = ";
 	$update .= $this->mApplication->mLoginStudent->mUserID;
        $update .= ";";

        $db = new DatabaseConnection();
        $updateResult = pg_query($db->getConn(),$update) or die('Could not connect: ' . pg_last_error());
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
	while ($i <= intval(count($this->mItemTypesArray) - 1) && $found_one == false)
	{ 
		if ($skip == $this->mItemTypesArray[$i])
		{
		}
		else 
		{
			$mini_transaction_code_array = array(); 

			$c = 0;

			//loop attempt array and dump into arrays then you can eval after..need to use mastery 
			while ($c <= intval(count($this->mItemAttemptsArray) - 1) && intval(count($mini_transaction_code_array)) < intval($this->mTypeMasteryArray[$i]))
			{
				//check for match of ids if so add to code array
				if ($this->mItemTypesArray[$i] == $this->mItemAttemptsArray[$c])
				{
					$mini_transaction_code_array[] = $this->mTransactionCodeArray[$c];
				}
				$c++; //increment for typearrays
			}

			//if less than mastery than type has not been asked enuf so make it ask type
			if ( intval(count($mini_transaction_code_array)) < intval($this->mTypeMasteryArray[$i]) )
			{
				$this->mItemTypesIDToAsk = $this->mItemTypesArray[$i];
				$found_one = true;
			}	 
			else  //we have over mastery to check
			{
				//if any is not 1 then its not type mastered so make it ask type
				for ($t=0; $t < $this->mTypeMasteryArray[$i]; $t++)
				{
					if ($mini_transaction_code_array[$t] != 1)
					{
						$this->mItemTypesIDToAsk = $this->mItemTypesArray[$i];
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
	$r = rand( 0,intval(count($this->mPreviousIDArray)-1) );
	$this->mItemTypesIDToAsk = $this->mPreviousIDArray[$r];
}

public function leastAsked()
{
	if ($this->logs)	
	{
		error_log('leastAsked');
	}
	if ( isset($_SESSION["least_asked"]) )
	{
		$this->mItemTypesIDToAsk = $this->mLeastAsked;
	}
	else
	{

	$least_id = '';
	$leastCount = 9999;
	$currentCount = 0;

	$p = 0;	
	while ($p <= intval(count($this->mPreviousIDArray) - 1))
	{
		$currentCount = 0;
		$i = 0;
		while ($i <= intval(count($this->mItemAttemptsArray) - 1))
		{
			if ($this->mPreviousIDArray[$p] == $this->mItemAttemptsArray[$i])
			{
				$currentCount++;
			}	 
			$i++;
		}
		if ($currentCount < $leastCount) //we have a new chump
		{
			$leastCount = $currentCount;
			$least_id = $this->mPreviousIDArray[$p];				
		} 
		$p++;
	}

	$this->mItemTypesIDToAsk = $least_id;
	$this->mLeastAsked = $least_id;
	}
}

public function leastCorrect()
{
	if ($this->logs)	
	{
		error_log('leastCorrect');
	}
	if ($this->mLeastCorrect != 0 )
	{
		$this->mItemTypesIDToAsk = $this->mLeastCorrect;
	}
	else
	{
	
	$least_id = '';
        $leastCount = 9999;
        $currentCount = 0;

        $p = 0;
        while ($p <= intval(count($this->mPreviousIDArray) - 1))
        {
        	$currentCount = 0;
                $i = 0;
                while ($i <= intval(count($this->mItemAttemptsArray) - 1))
               	{
               		if ($this->mPreviousIDArray[$p] == $this->mItemAttemptsArray[$i])
                        {
				if ($this->mTransactionCodeArray[$i] == 1)
				{
                                      	$currentCount++;
				}
                        }
                        $i++;
                }
               	if ($currentCount < $leastCount) //we have a new chump
               	{
                	$leastCount = $currentCount;
                       	$least_id = $this->mPreviousIDArray[$p];
       		}
        	$p++;
        }
	$this->mItemTypesIDToAsk = $least_id;
	$this->mLeastCorrect = $least_id;
	}
}

public function leastPercent()
{
	if ($this->logs)	
	{
		error_log('leastPercent');
	}
	if ( $this->mLeastPercent != 0 )
	{
		$this->mItemTypesIDToAsk = $this->mLeastPercent;
	}
	else
	{
	$least_id = '';
        $leastPercent = 1000;
        $currentPercent = 0;
	$right = 0;
	$wrong = 0;

        $p = 0;
        while ($p <= intval(count($this->mPreviousIDArray) - 1) && intval($right + $wrong) < 9)
        {
        	$currentPercent = 0;
		$right = 0; 
		$wrong = 0; 

                $i = 0;
                while ($i <= intval(count($this->mItemAttemptsArray) - 1))
                {
                	if ($this->mPreviousIDArray[$p] == $this->mItemAttemptsArray[$i])
                        {
				if ($this->mTransactionCodeArray[$i] == 1)
				{
                                   	$right++;
				}
				if ($this->mTransactionCodeArray[$i] == 2)
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
                        $least_id = $this->mPreviousIDArray[$p];
                }
                $p++;
	}
        $this->mItemTypesIDToAsk = $least_id;
	$this->mLeastPercent = $least_id;
	}
}

public function goBananas()
{
	if ($this->logs)	
	{
		error_log('goBananas');
	}
	//check to see if it was asked last.....

	if ( $this->mItemTypeLast != 0 )
 	{
		//go with above from earliest unmastered
		if ($this->logs)
		{
			error_log('go with last should not happen!!!!');
		}
	}
	else if ($this->mItemTypeLast == $this->mItemTypesIDToAsk) //if dup then go bananas
	{
		//lets get all previously asked questions....in normal
		if ( intval( count($this->mPreviousIDArray) ) < 1)
		{
 			$i = 0;
			while ($i <= intval(count($this->mItemTypesArray) - 1))
        		{
 				$c = 0;
				$exists = false;
				while ($c <= intval(count($this->mItemAttemptsArray) - 1) && $exists == false)
				{
					if ($this->mItemTypesArray[$i] == $this->mItemAttemptsArray[$c])
					{
						$this->mPreviousIDArray[] = $this->mItemTypesArray[$i];
						$exists = true;
					}
					$c++;
				}
				$i++;
			}
		}

		$bananas = rand( 0,100);
		$bananas = intval($bananas);
	
		//true bananas
		if ($bananas > -1 && $bananas <= 25)
		{	 
			if ( intval($this->mUnmasteredCount) < 7 )   
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
		if ($this->mItemTypeLast == $this->mItemTypesIDToAsk) //if dup then go bananas
		{
			$this->setEarliestToAsk($this->mItemTypesIDToAsk);
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

        //pink
        $itemString =  $this->mItemTypesIDToAsk; //ask this one

        //blue
        $itemString .= ":";
        $itemString .= "L=";
        $itemString .= "$this->mHighProgression";
        $itemString .= " U=";
        $itemString .= $this->mUnmasteredCount;

        //yellow
        $itemString .= ":";
        $itemString .= $this->mHighStandard;

        //green
        $itemString .= ":";
        $itemString .= intval(count($this->mScoreArray));

        $this->mBeforeItemTypeID = $itemString;
        $this->mApplication->mRawData = $itemString;
//needed anymore?
        $this->mItemTypesID = $this->item_types_id_to_ask;
        $this->mItemTypesIDProgressed = $this->mItemTypesIDToAsk;
}

//end of class
}
?>
