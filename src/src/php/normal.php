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
	
	$this->id_array                = array();
	$this->progression_array       = array();
	$this->core_standards_id_array = array();
	$this->type_mastery_array      = array();

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

public function setTypesPoolArray()
{
	$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
	$query .= $this->progression_counter; 
	$query .= ' AND active_code = 1 AND speed = 0'; //skip unactive and speed standards
	$query .= " order by progression asc;";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$this->id_array[]              = pg_Result($result, $i, 'id');	
		$this->progression_array[]     = pg_Result($result, $i, 'progression');	
		$this->core_standards_id_array = pg_Result($result, $i, 'core_standards_id');
		$this->type_mastery_array      = pg_Result($result, $i, 'type_mastery');
	}
}

//i am going to remember the last thing i asked and only ask 1 question at a time.
public function setRawData()
{
	$this->initializeProgressionCounter();
	$this->setTypesPoolArray();
	
	$start_time_array       = array();
	$item_array             = array();
	$transaction_code_array = array();
	$type_mastery_array     = array();
	$core_standards_array   = array();
	
	$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.type_mastery, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        $query .= $_SESSION["user_id"];
	$query .= " AND item_types.active_code = 1 AND item_types.speed = 0 AND item_types.progression > "; 
	$query .= $this->progression_counter; 
        $query .= " order by item_attempts.start_time desc;";
													
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
		
        $num = pg_num_rows($result);

	//fill arrays
  	for ($i = 0; $i < $num; $i++)
	{
		$start_time_array[]       = pg_Result($result, $i, 'start_time');
		$item_array[]             = pg_Result($result, $i, 'item_types_id');
		$transaction_code_array[] = pg_Result($result, $i, 'transaction_code');
		$type_mastery_array[]     = pg_Result($result, $i, 'type_mastery');
		$core_standards_array[]   = pg_Result($result, $i, 'core_standards_id');

	}

	/******    variety ****/ 
	$randomNumber = rand(0,100);

	
	//#1 always ask first unmastered unless it was asked last time
	$unmastered_id = '';
	$i = 0;
	while ($i <= intval(count($this->id_array) - 1) && $unmastered_id == '')
	{ 
		$id = $this->id_array[$i];

		//compare id_array to every all matches of id in attemptarray(which is already in time order 	

		$count = intval(count($start_time_array)); 	
		$done = false;
		$c = 0;
		$found_array = array(); 

		while( $done == false && intval(count($found_array)) < 2 && $unmastered_id == '') 
		{
			if ($id == $item_array[$c])
			{
				$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_array[$c]','$start_time_array[$c]');";
				$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

				if ($transaction_code_array[$c] != 1)
				{
					$unmastered_id = $id;
				}
				
				$found_array[] = $transaction_code_array[$c];
			} 	

			$c++;
			if ($c >= $count)
			{
				$done = true;
			}	 
		}
		$i++;
	}


	//you found something this could be an old one or the most recent either way you advance you chance to advance....
	if ($unmastered_id != '')
	{	
		$item_types_id_to_ask = $unmastered_id;	
	}
	else 
	{
		//chance to do something else like go bannanas
		$item_types_id_to_ask = '5.oa.a.1_0_38';	
	}

	//check to see if it was asked last.....
	if ( !isset($_SESSION["item_type_last"]) )
	{
	}
	else if ($_SESSION["item_type_last"] == $item_types_id_to_ask)
	{
		//go bananas lets get all previously asked questions....in normal
		$previous_id_array = array();
 		$i = 0;
		while ($i <= intval(count($this->id_array) - 1))
        	{
                	$id = $this->id_array[$i];
			$c = 0;
			$exists = false;
			while ($c <= intval(count($item_array) - 1) && $exists == false)
			{
				if ($this->id_array[$i] == $item_array[$c])
				{
					$previous_id_array[] = $this->id_array[$i];
					$exists = true;
				}
				$c++;
			}
			$i++;
		}
	}

	if ($randomNumber >= 0 && $randomNumber < 50)
	{

	}	

	if ($randomNumber >= 50 && $randomNumber <= 100)
	{
	}	

/*	
	for ($i = 0; $i < intval(count($start_time_array)); $i++)
	{
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$item_array[$i]','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
	}
*/
	//$item_types_id_progressed = $type_array[$t];	
	$item_types_id_progressed = '5.oa.a.1_0_38';	


	/** anaylse **/



	$_SESSION["item_type_last"] = $item_types_id_to_ask; //set this new one to last in sessions
	
	//pink
        $itemString =  $item_types_id_to_ask; //ask this one

	//blue
        $itemString .= ":";
        $itemString .= "blue";

	//yellow	
        $itemString .= ":";
        $itemString .= "yellow";

	//green
        $itemString .= ":";
        $itemString .= "green"; 

        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $item_types_id_to_ask;
}
//end of class
}
/*
        $_SESSION["item_type_last"] = $item_types_id_to_ask; //set this new one to last in sessions

        //pink
        $itemString =  $item_types_id_to_ask; //ask this one

        //blue
        $itemString .= ":";
        $itemString .= $standard_score; //score
        $itemString .= "/";
        $itemString .= $count_of_item_types_in_standard;
        $itemString .= "=";
        $itemString .= $progress_percent;
        $itemString .= "%";
        $itemString .= $stats;

        //yellow
        $itemString .= ":";
        $itemString .= $item_types_id_progressed; //progressed

        //green
        $itemString .= ":";
        $itemString .= $count_of_types;

        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $item_types_id_to_ask;

*/
?>


