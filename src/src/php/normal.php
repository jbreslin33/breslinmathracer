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
		//$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'normal_new','');";
		//$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

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
		//$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'normal_old','');";
		//$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
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

	$type_mastery_array = array();
	$type_array = array();
	
	/*********get type_id to be evaluated for mastery also grab standard,cluster,domain,grade ************/	
	//eventually this should only be done once!
	$query = "select id, progression, type_mastery from item_types where progression > "; 
	$query .= $this->progression_counter; 
	$query .= ' AND active_code = 1 AND speed = 0'; //skip unactive and speed standards
	$query .= " order by progression asc;";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$type_mastery = pg_Result($result, $i, 'type_mastery');
		$type_mastery_array[] = intval($type_mastery);

		$type_array[] = pg_Result($result, $i, 'id');
	}

	$query = "select item_attempts.start_time, item_attempts.item_types_id, item_attempts.transaction_code, item_types.core_standards_id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN item_types ON item_types.id=item_attempts.item_types_id AND evaluations_attempts.evaluations_id = 1 AND evaluations_attempts.user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " order by item_attempts.start_time desc;";
													
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
		
        $num = pg_num_rows($result);

	if ($num > 0)
	{
  		for ($i = 0; $i < $num; $i++)
		{
/*
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
*/
		}
		$item_types_id_progressed = $type_id_array[$t];	
	}
	
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


