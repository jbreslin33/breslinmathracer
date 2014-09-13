<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluations_attempts.php");
/*
This class should allow student to feel confident. First levels should go to infinity... or not exist at all. 2nd should we remediate as soon as a student gets one wrong??? well we do ask it on next level... what about 3 levels??? i think we need another table... we need a one to track when you were sent to a learning standard then we still use levelattempts table.:wq:wq:wq

--scratch that except for the confidence and infinity stuff.

new thinking:
------------
when you get one wrong you go to practice. which resets your percent.
if you get one correct after practice you have 100%. with a 1 confidence level.

none correct in a row is a 0 confidence level.

ask in order of confidence level with progression tie breaker.

never been asked is a -1 confidence level

if no zeros than ask a -1 confidence level which is a new type

so basically on first run you will encounter a never before asked quesiton a -1 so ask it.
if correct.
then 
skip it and ask 2nd type cause its -1
lets say you get it wrong.
then practice
then skip 1 
goto 2 again cause its a 0 confidence level.

unless at any point we roll a 20% in which case we ask the question with the lowest confidence level above 0;


you  are done when we put you on next grade.... 

this is the select for drop down for standard choice.
SELECT  id, core_clusters_id from core_standards order by core_clusters_id, id ;

*/
class Normal 


{
function __construct($startNew)
{
	$this->mDatabaseConnection = new DatabaseConnection();
        
	$this->progression_counter = 0;
	

	if ($startNew == 1)
	{
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'normal','startNew');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

		//close old evaluation_attempts.......
		$evaluations_attempts = new EvaluationsAttempts();
		$evaluations_attempts->update();

		$_SESSION["evaluations_id"] = 1;
		$evaluations_attempts->insert();
	
		$this->setRawData();
        
		$item_attempt = new ItemAttempt();
        	$item_attempt->insert();
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

	$type_mastery = 0;

	//we could store every types stats in arrays
	$type_id_array = array();
	$right_array = array();
	$type_master_array = array();
	$type_master_right_array = array();

	while ($item_types_id_to_ask == '')
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

			$type_id     = pg_Result($result, 0, 'id');
			$type_id_array[]     = $type_id;

                	$this->progression_counter = pg_Result($result, 0, 'progression');

			/********* get the transaction codes of the amount of mastery ******************/
	                $query = "select item_attempts.transaction_code from evaluations_attempts JOIN item_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where item_attempts.item_types_id = '";
       	               	$query .= $type_id;
                       	$query .= "' AND evaluations_attempts.user_id = ";
                       	$query .= $_SESSION["user_id"];
                       	$query .= " AND evaluations_attempts.evaluations_id = 1";  
                       	$query .= " order by item_attempts.start_time desc limit ";
			$query .= $type_mastery; 
			$query .= ";"; 
													
			$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
               		$num = pg_num_rows($result);

			$right = 0;
			$right = intval($right);

			if ($num > 0)
			{
  				for ($i = 0; $i < $num; $i++)
				{
					$transaction_code = pg_Result($result, $i, 'transaction_code');
					$transaction_code = intval($transaction_code);
					if ($transaction_code == 1) 
					{
						$right++;		
					}	
				}
			}
			
			$right_array[] = $right;

			//check for type first cause if we have one just go there...	
 			if ($right < $type_mastery)	
			{
				$item_types_id_to_ask = $type_id;
			}
			else //mastered so add to mastered arrays
			{
				$type_master_array[]       = $type_id; 			
				$type_master_right_array[] = $right; 			
			}
			//generic array for all types looped thru
			$type_id_array[]       = $type_id; 			
			$right_array[] = $right; 			
			
			$randomNumber = rand(0,1);			
			if ($randomNumber == 1)
			{	
				//ok we got one but lets see if we want to ask a mastered one instead
				$count_of_mastered_items = intval(count($type_master_array));

				if ($count_of_mastered_items > 0)
				{	
					//ask mastered one
					$rand_mastered_id = rand(0, intval($count_of_mastered_items - 1));		

					//change this variable and we exit loop with an id to send to client
					$item_types_id_to_ask = $type_master_array[$rand_mastered_id];
					$right = $type_master_right_array[$rand_mastered_id];
				}
			}
		}
	}	
        $itemString = $item_types_id_to_ask;
        $itemString .= ":";
        $itemString .= $right;
        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $item_types_id_to_ask;
}
//end of class
}
?>
