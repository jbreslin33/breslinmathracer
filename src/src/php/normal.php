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
		$this->setRawData();
	}
}
//this could just as easily be set to a finer level such as domain, cluster, standard. Then we could start wherever we want.
public function initializeProgressionCounter()
{
        $this->progression_counter = 0;

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
		//round(floatval($result),5);
	}
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	$this->initializeProgressionCounter();
	$item_types_id_to_ask = '';	
	$item_types_id_progressed = '';	
	$core_standards_id_progressed = '';	
	
	$type_array = array();
	$right_array = array();
	$wrong_array = array();

	$type_mastery = 0;
	$type_master_array = array();
	$type_master_right_array = array();
	

	$keep_going = true;
	$streak = 0;
	$right = 0;
	$wrong = 0;
	$score = 0;

	while ($keep_going)
	{
		/*********get type_id to be evaluated for mastery also grab standard,cluster,domain,grade ************/	
		$query = "select id, progression, type_mastery from item_types where progression > "; 
		$query .= $this->progression_counter; 
		$query .= " order by progression asc limit 1;";
 
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
                $numberOfResults = pg_num_rows($result);

                if ($numberOfResults > 0)
                {
			$type_mastery = pg_Result($result, 0, 'type_mastery');
			$type_mastery = intval($type_mastery);

			$type_id      = pg_Result($result, 0, 'id');

                	$this->progression_counter = pg_Result($result, 0, 'progression');

			/********* get the transaction codes of the amount of mastery and the core_standards_id of the highest level to be used later for score ******************/
	                $query = "select item_attempts.transaction_code, item_types.core_standards_id from evaluations_attempts JOIN item_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN item_types ON item_types.id=item_attempts.item_types_id where item_attempts.item_types_id = '";
       	               	$query .= $type_id;
                       	$query .= "' AND evaluations_attempts.user_id = ";
                       	$query .= $_SESSION["user_id"];
                       	$query .= " AND evaluations_attempts.evaluations_id = 1";  
                       	$query .= " order by item_attempts.start_time;";
													
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
               		$num = pg_num_rows($result);

			$streak = 0;
			$streak = intval($streak);
			$right = 0;
			$wrong = 0;

			if ($num > 0)
			{
  				for ($i = 0; $i < $num; $i++)
				{
					$transaction_code = pg_Result($result, $i, 'transaction_code');
					$core_standards_id_progressed = pg_Result($result, $i, 'core_standards_id');
					$transaction_code = intval($transaction_code);
					if ($transaction_code == 1) 
					{
						$streak++;		
						$right++;
					}	
					if ($transaction_code == 2) 
					{
						$streak = 0;		
						$wrong++;
					}	
				}
				$item_types_id_progressed = $type_id;	
			}
			else
			{
				//we got nothing....so we reached in db an item_type never before asked in normal.
				$keep_going = false;
			}
		
			//everyone arrays	
			$type_array[]  = $type_id; 			
			$right_array[] = $right; 			
			$wrong_array[] = $wrong; 			
		
			$streak = intval($streak);

			//if not mastered and we dont have a non mastered type yet so this will give you the oldest unmastered one
 			if ($streak < $type_mastery)	
			{
				if ($item_types_id_to_ask == '')
				{
					$item_types_id_to_ask = $type_id; //keep asking as you have not hit threshold
				}
			}
			else //type mastered so add to mastered arrays
			{
				$type_master_array[]       = $type_id; 			
				$type_master_right_array[] = $streak; 			
			}
		}	
	}			
	
	//ok we are done keeping going so we reached uncharted so.. 
	$count_of_mastered_items = intval(count($type_master_array));
	if ($count_of_mastered_items > 0) //after pump is primed this is where item is decided 
	{
		if ( !isset($_SESSION["item_type_last"]) )
		{

		}
		else if ($_SESSION["item_type_last"] == $item_types_id_to_ask) //if false this is either old one or brand new one we should be ok with that because if its new then game flows and if its old then its a remediation of previusly type mastered item  if we just did that then do this.....  
		{
			$typelast = $_SESSION["item_type_last"];
$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_types_id_to_ask','$typelast');";
$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
			//PICK ITEM FROM ARRAYS
			//bubble sort
			$randomNumber = rand(0,100);
			if ($randomNumber <= 50) //go bananas to add some variety
			{
				$keepon = true;
				while ($keepon)
				{
					$count_of_type_array = intval(count($type_array));
					$randomNumber = rand(0,intval($count_of_type_array-1));
				
					if ($_SESSION["item_type_last"] != $type_array[$randomNumber])
					{
						$item_types_id_to_ask = $type_array[$randomNumber];
						$streak                = 0; //hack
						$keepon = false;
					} 
				}
			}
			else if ($randomNumber > 50) //ask highest progressed 
			{
				if ($item_types_id_progressed == '')
				{
        				$item_types_id_to_ask = $type_array[0]; //default
					$streak                = 0; //hack
				}
				else
				{
        				$item_types_id_to_ask = $item_types_id_progressed; //progressed
					$streak                = 0; //hack
				}

				if ($_SESSION["item_type_last"] == $item_types_id_to_ask) 
				{
 					$keepon = true;
                                	while ($keepon)
                                	{
                                        	$count_of_type_array = intval(count($type_array));
                                        	$randomNumber = rand(0,intval($count_of_type_array-1));

                                        	if ($_SESSION["item_type_last"] != $type_array[$randomNumber])
                                        	{
                                                	$item_types_id_to_ask = $type_array[$randomNumber];
                                                	$streak                = 0; //hack
                                                	$keepon = false;
                                        	}
					}
                                }
			}
		}	
	}

	//STATS	
	$stats = "s";
	$stats .= $streak;
	
	$count_of_types = intval(count($type_array));
	for ($i = 0; $i < $count_of_types; $i++)
	{
		if ($item_types_id_to_ask == $type_array[$i])
		{
			$stats .= "r";
			$stats .= $right_array[$i];
			$stats .= "w";
			$stats .= $wrong_array[$i];

			$total = intval($right_array[$i] + $wrong_array[$i]);	
			$percent = 0;
			if ($total != 0)
			{
				$percent = floatval($right_array[$i] / $total); 
				$percent = round( $percent, 2);
			}
			$stats .= "p";
			$stats .= $percent;
		}		 
	}

	$count_of_item_types_in_standard = 0;
	
	//get denominator for score
 	$query = "select id, progression from item_types where core_standards_id = '";
        $query .= $core_standards_id_progressed;
        $query .= "' ORDER BY progression;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $count_of_item_types_in_standard = pg_num_rows($result);

   	$num = pg_num_rows($result);

	$standard_score_counter = 0;
	$standard_score = 0;
        if ($num > 0)
        {
        	for ($i = 0; $i < $num; $i++)
                {
                	$id = pg_Result($result, $i, 'id');
			$standard_score_counter++;
                        if ($id == $item_types_id_progressed)
                        {
                        	$standard_score = $standard_score_counter;
                        }
		}
	}
	
	//calc score
	$score = intval(count($type_master_array));
		
	$progress_percent = "";	
	if ($count_of_item_types_in_standard != 0)
	{
		$progress_percent = floatval($standard_score / $count_of_item_types_in_standard); 
		$progress_percent = $progress_percent * 100;
		$progress_percent = round($progress_percent, 0, PHP_ROUND_HALF_UP);
	}

	$_SESSION["item_type_last"] = $item_types_id_to_ask; //set this new one to last in sessions
        $itemString =  $item_types_id_to_ask; //ask this one
        $itemString .= ":";
        $itemString .= $stats; 
        $itemString .= ":";
        $itemString .= $item_types_id_progressed; //progressed
        $itemString .= ":";
        $itemString .= $standard_score; //score
        $itemString .= "/";
        $itemString .= $count_of_item_types_in_standard;
        $itemString .= "=";
        $itemString .= $progress_percent;
        $itemString .= "%";
        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $item_types_id_to_ask;
}
//end of class
}
?>
