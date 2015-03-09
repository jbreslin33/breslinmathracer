<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");

class Normal 
{

function __construct($startNew)
{
	$this->mDatabaseConnection = new DatabaseConnection();
        
	$this->progression_counter = 0;
	$this->progression_counter_limit = 0;

	//types array	
	$this->id_array                = array();
	$this->progression_array       = array();
	$this->core_standards_id_array = array();
	$this->type_mastery_array      = array();

	//attempts array 	
	$this->start_time_array       = array();
	$this->item_array             = array();
	$this->transaction_code_array = array();
	$this->core_standards_array   = array();
	
	$this->item_types_id_to_ask = '';

	if ($startNew == 1)
	{
		//close old evaluation_attempts.......
		$evaluations_attempts = new EvaluationsAttempts();
		$evaluations_attempts->update();

		$_SESSION["evaluations_id"] = 1;
		$evaluations_attempts->insert();
	
		$this->setRawData();
        
		$item_attempt = new ItemAttempt();
        	$item_attempt->insert();
	}
	else
	{

		//check for last evaluation that was a normal type
      		$query = "select id from evaluations_attempts where user_id = ";
        	$query .= $_SESSION["user_id"];
        	$query .= " AND evaluations_id = 1 order by start_time desc limit 1;";

       	 	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        	$num = pg_num_rows($result);

        	if ($num > 0)
        	{
                	//get the attempt_id
                	$evaluations_attempts_id = pg_Result($result, 0, 'id');

                	//set id
                	$_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;
		}
		else
		{
			//this is first visit or you closed the old one
        		$insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        		$insert .= $_SESSION["user_id"];
        		$insert .= ",";
        		$insert .= $_SESSION["evaluations_id"];
        		$insert .= ");";

        		$insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
		}

		// if there is a last unanswered normal then doont insert...just send them back info in full string 
		//get item_attempt id
        	$select = "select item_attempts.id, item_attempts.user_answer from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id where evaluations_attempts.user_id = ";
        	$select .= $_SESSION["user_id"];
		$select .= " AND evaluations_attempts.evaluations_id = 1";	
        	$select .= " ORDER BY item_attempts.start_time DESC LIMIT 1;";

        	//get db result
        	$selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
        	$num = pg_num_rows($selectResult);

        	if ($num > 0 && isset($_SESSION["before_item_type_id"]))
        	{
                	//get the id from user table
                	$item_attempt_id = pg_Result($selectResult, 0, 'id');
                	$user_answer     = pg_Result($selectResult, 0, 'user_answer');


                	//set level_id
                	$_SESSION["item_attempt_id"] = $item_attempt_id;

			//old one available as last unanswered lets grab it
			if (is_null($user_answer))
			{
				//i would like to add item_attempt_id to rawdata before we send it out..
				$raw = $_SESSION["before_item_type_id"];
				$raw .= ":";
        			$raw .= $_SESSION["item_attempt_id"];
				$_SESSION["raw_data"] = $raw;
			}
			else
			{
				$this->setRawData();
		
				$item_attempt = new ItemAttempt();
        			$item_attempt->insert();

				//i would like to add item_attempt_id to rawdata before we send it out..
				$raw = $_SESSION["raw_data"];
				$raw .= ":";
        			$raw .= $_SESSION["item_attempt_id"];
				$_SESSION["raw_data"] = $raw;
			}
	
			//i would like to add item_attempt_id to rawdata before we send it out..
			$raw = $_SESSION["before_item_type_id"];
			$raw .= ":";
        		$raw .= $_SESSION["item_attempt_id"];
			$_SESSION["raw_data"] = $raw;
        	}
        	else
        	{
			$this->setRawData();
		
			$item_attempt = new ItemAttempt();
        		$item_attempt->insert();

			//i would like to add item_attempt_id to rawdata before we send it out..
			$raw = $_SESSION["raw_data"];
			$raw .= ":";
        		$raw .= $_SESSION["item_attempt_id"];
			$_SESSION["raw_data"] = $raw;
        	}
	}
}

//standard to start the base at we get the counter for base questions
public function initializeProgressionCounter()
{

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
	}
	if ($_SESSION["core_standards_id"] == '3.oa.c.7')
	{
		$this->progression_counter_limit = floatval($this->progression_counter + 0.01);
	}	
	else
	{
		$this->progression_counter_limit = floatval($this->progression_counter + 1);
	}
}

public function fillTypesArray()
{
	//remediate types
	$query = "select item_types.id, item_types.progression, item_types.core_standards_id, item_types.type_mastery from remediate JOIN core_standards ON core_standards.id=remediate.core_standards_id JOIN item_types ON item_types.core_standards_id=remediate.core_standards_id where remediate.user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " AND active_code = 1 AND speed = 0"; //skip unactive and speed standards
	$query .= " order by progression asc;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $numberOfResults = pg_num_rows($result);

        for($i=0; $i < $numberOfResults; $i++)
        {
                $this->id_array[]                = pg_Result($result, $i, 'id');
                $this->progression_array[]       = pg_Result($result, $i, 'progression');
                $this->core_standards_id_array[] = pg_Result($result, $i, 'core_standards_id');
                $this->type_mastery_array[]      = pg_Result($result, $i, 'type_mastery');
        }

	//normal base types..
	$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
	$query .= $this->progression_counter; 
	$query .= " AND progression < "; //stay in grade 
	$query .= $this->progression_counter_limit; 
	if ($_SESSION["core_standards_id"] == '3.oa.c.7')
	{
		$query .= " AND active_code = 1 AND speed != 0"; //skip unactive and speed standards
	}
	else
	{
		$query .= " AND active_code = 1 AND speed = 0"; //skip unactive and speed standards
	}
	$query .= " order by progression asc;";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$this->id_array[]                = pg_Result($result, $i, 'id');	
		$this->progression_array[]       = pg_Result($result, $i, 'progression');	
		$this->core_standards_id_array[] = pg_Result($result, $i, 'core_standards_id');
		$this->type_mastery_array[]      = pg_Result($result, $i, 'type_mastery');
	}
}
	
public function fillAttemptsArray()
{
	//fill remediate attempts

	//fill normal attempts
	$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        $query .= $_SESSION["user_id"];
	if ($_SESSION["core_standards_id"] == '3.oa.c.7')
	{
		$query .= " AND item_types.active_code = 1 AND item_types.speed != 0";  
	}
	else
	{
		$query .= " AND item_types.active_code = 1 AND item_types.speed = 0"; 
	}
        $query .= " order by item_attempts.start_time desc;";
													
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
		
        $num = pg_num_rows($result);

	//fill arrays
  	for ($i = 0; $i < $num; $i++)
	{
		$this->start_time_array[]       = pg_Result($result, $i, 'start_time');
		$this->item_array[]             = pg_Result($result, $i, 'item_types_id');
		$this->transaction_code_array[] = pg_Result($result, $i, 'transaction_code');
		$this->core_standards_array[]   = pg_Result($result, $i, 'core_standards_id');
	}
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	$this->initializeProgressionCounter();
	$this->fillTypesArray();
	$this->fillAttemptsArray();
	
	$this->item_types_id_to_ask = '';
	

	//ask 1st one that is not mastered

	$i = 0;

	//loop thru id array until you reach end or find a item to ask ..this is why you can grab all attempts regardless of progression as long as they where normal as they will never get checked in following code.

	while ($i <= intval(count($this->id_array) - 1) && $this->item_types_id_to_ask == '')
	{ 
		$mini_transaction_code_array = array(); 

		$c = 0;

		//loop attempt array and dump into arrays then you can eval after..need to use mastery 
		while ($c <= intval(count($this->item_array) - 1) && intval(count($mini_transaction_code_array)) < intval($this->type_mastery_array[$i]))
		{
			//check for match of ids if so add to code array
			if ($this->id_array[$i] == $this->item_array[$c])
			{
				$mini_transaction_code_array[] = $this->transaction_code_array[$c];
			}
			$c++; //increment for typearrays
		}

		//if less than mastery than type has not been asked enuf so make it ask type
		if ( intval(count($mini_transaction_code_array)) < intval($this->type_mastery_array[$i]) )
		{
			$this->item_types_id_to_ask = $this->id_array[$i];
		} 
		else  //we have over mastery to check
		{
			//if any is not 1 then its not type mastered so make it ask type
			for ($t=0; $t < $this->type_mastery_array[$i]; $t++)
			{
				if ($mini_transaction_code_array[$t] != 1)
				{
					$this->item_types_id_to_ask = $this->id_array[$i];
				}
			} 
		} 
		$i++;
	}

	//check to see if it was asked last.....

	if ( !isset($_SESSION["item_type_last"]) ) {
		//go with above from earliest unmastered
	}
	else if ($_SESSION["item_type_last"] == $this->item_types_id_to_ask) //if dup then go bananas
	{
	//while should be here...
	//while ($_SESSION["item_type_last"] == $this->item_types_id_to_ask) 
	//{
		//go bananas lets get all previously asked questions....in normal
		$previous_id_array = array();
 		$i = 0;
		while ($i <= intval(count($this->id_array) - 1))
        	{
			$c = 0;
			$exists = false;
			while ($c <= intval(count($this->item_array) - 1) && $exists == false)
			{
				if ($this->id_array[$i] == $this->item_array[$c])
				{
					$previous_id_array[] = $this->id_array[$i];
					$exists = true;
				}
				$c++;
			}
			$i++;
		}

		$bananas = rand( 0,100);
		$bananas = intval($bananas);
	
		//true bananas
		if ($bananas > -1 && $bananas <= 25)
		{ 
			$r = rand( 0,intval(count($previous_id_array)-1) );
			$this->item_types_id_to_ask = $previous_id_array[$r];
		}

		// this should be least asked
		if ($bananas > 25 && $bananas <= 50)
		{
			$least_id = '';
			$leastCount = 9999;
			$currentCount = 0;

			$p = 0;	
			while ($p <= intval(count($previous_id_array) - 1))
			{
				$currentCount = 0;
				$i = 0;
				while ($i <= intval(count($this->item_array) - 1))
				{
					if ($previous_id_array[$p] == $this->item_array[$i])
					{
						$currentCount++;
					}	 
					$i++;
				}
				if ($currentCount < $leastCount) //we have a new chump
				{
					$leastCount = $currentCount;
					$least_id = $previous_id_array[$p];				
				} 
				$p++;
			}
			$this->item_types_id_to_ask = $least_id;
		}

		// this should be least correct
		if ($bananas > 50 && $bananas <= 75)
		{
			$least_id = '';
                        $leastCount = 9999;
                        $currentCount = 0;

                        $p = 0;
                        while ($p <= intval(count($previous_id_array) - 1))
                        {
                                $currentCount = 0;
                                $i = 0;
                                while ($i <= intval(count($this->item_array) - 1))
                                {
                                        if ($previous_id_array[$p] == $this->item_array[$i])
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
                                        $least_id = $previous_id_array[$p];
                                }
                                $p++;
                        }
                        $this->item_types_id_to_ask = $least_id;
		}

		// this should be least percent correct
		if ($bananas > 75 && $bananas <= 100)
		{
			$least_id = '';
                        $leastPercent = 1000;
                        $currentPercent = 0;
			$right = 0;
			$wrong = 0;

                        $p = 0;
                        while ($p <= intval(count($previous_id_array) - 1))
                        {
                                $currentPercent = 0;
				$right = 0; 
				$wrong = 0; 

                                $i = 0;
                                while ($i <= intval(count($this->item_array) - 1))
                                {
                                        if ($previous_id_array[$p] == $this->item_array[$i])
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
                                        $least_id = $previous_id_array[$p];
                                }
                                $p++;
                        }
                        $this->item_types_id_to_ask = $least_id;
		}
	//}
	}
	
	//score
        $score_array = array();
        $i = 0;
	$high_standard = '';
	$high_progression = '';
        while ($i <= intval(count($this->id_array) - 1))
        {
                $c = 0; 
                $exists = false;
                while ($c <= intval(count($this->item_array) - 1) && $exists == false)
                {
                	if ($this->id_array[$i] == $this->item_array[$c])
                        {
        			$high_standard = $this->id_array[$i];
        			$high_progression = $this->progression_array[$i];
                        	$score_array[] = $this->id_array[$i];
                                $exists = true; 
                        }
                        $c++;   
                }
                $i++;   
	}

	//trim progression
	$high_progression = substr($high_progression,2,2);

	/*** cleanup ****/

	$mastered_array = array();
	$unmastered_array = array();
	$unasked_array = array();

 	//loop thru item array until you reach end
	$i = 0;
        while ($i <= intval(count($this->id_array) - 1))
	{
		$mini_transaction_code_array = array();

                $c = 0;

                //loop attempt array and dump into arrays then you can eval after
                while ($c <= intval(count($this->item_array) - 1))
                {
                        //check for match of ids if so add to code array
                        if ($this->id_array[$i] == $this->item_array[$c])
                        {
                                $mini_transaction_code_array[] = $this->transaction_code_array[$c];
                        }
                        $c++; //increment for typearrays
                }
		
		//analysis
                if ( intval(count($mini_transaction_code_array)) == 0 )
		{
			$unasked_array[] = $this->id_array[$i];	
		}
                if ( intval(count($mini_transaction_code_array)) == 1 )
                {
			$unmastered_array[] = $this->id_array[$i];	
                }
                if ( intval(count($mini_transaction_code_array)) > 1 )
                {
                        //if either is not 1 then its not type mastered so make it ask type
                        if ($mini_transaction_code_array[0] != 1 || $mini_transaction_code_array[1] != 1)
                        {
				$unmastered_array[] = $this->id_array[$i];	
                        }
			else //mastered
			{
				$mastered_array[] = $this->id_array[$i];	
			}
                }
                $i++;
	}
	
	/*********************  for teacher real time data  *************/
	
	$update = "update users SET last_activity = CURRENT_TIMESTAMP, score = ";
	$update .= intval(count($score_array)); 
	$update .= ", unmastered = "; 
	$update .= count($unmastered_array);
        $update .= " WHERE id = ";
        $update .= $_SESSION["user_id"];
        $update .= ";";

	$updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
	
	/** anaylse **/

	$_SESSION["item_type_last"] = $this->item_types_id_to_ask; //set this new one to last in sessions
	
	//pink
        $itemString =  $this->item_types_id_to_ask; //ask this one

	//blue
        $itemString .= ":";
        $itemString .= "L=";
        $itemString .= "$high_progression";
        $itemString .= " U=";
	$itemString .= count($unmastered_array);

	//yellow	
        $itemString .= ":";
        $itemString .= "$high_standard";

	//green
        $itemString .= ":";
        $itemString .= intval(count($score_array)); 
       
        $_SESSION["before_item_type_id"] = $itemString;
        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $this->item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $this->item_types_id_to_ask;
}
//end of class
}
?>
