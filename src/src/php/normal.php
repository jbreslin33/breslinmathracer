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

	//types array	
	$this->id_array                = array();
	$this->progression_array       = array();
	$this->core_standards_id_array = array();
	$this->type_mastery_array      = array();

	//attempts array 	
	$this->start_time_array       = array();
	$this->item_array             = array();
	$this->transaction_code_array = array();
	$this->type_mastery_array     = array();
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

public function fillTypesArray()
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
	
public function fillAttemptsArray()
{
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
		$this->start_time_array[]       = pg_Result($result, $i, 'start_time');
		$this->item_array[]             = pg_Result($result, $i, 'item_types_id');
		$this->transaction_code_array[] = pg_Result($result, $i, 'transaction_code');
		//$this->type_mastery_array[]     = pg_Result($result, $i, 'type_mastery');
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

	//loop thru item array until you reach end or find a item to ask
	while ($i <= intval(count($this->id_array) - 1) && $this->item_types_id_to_ask == '')
	{ 
		$mini_transaction_code_array = array(); 

		$c = 0;

		//loop attempt array and dump into arrays then you can eval after 
		while ($c <= intval(count($this->item_array) - 1) && intval(count($mini_transaction_code_array)) < 2 )
		{
			//check for match of ids if so add to code array
			if ($this->id_array[$i] == $this->item_array[$c])
			{
				$mini_transaction_code_array[] = $this->transaction_code_array[$c];
			}
			$c++; //increment for typearrays
		}

		//if less than 2 than type has not been asked enuf so make it ask type
		if ( intval(count($mini_transaction_code_array)) < 2 )
		{
			$this->item_types_id_to_ask = $this->id_array[$i];
		} 
		else  //we have 2 to check
		{
			//if either is not 1 then its not type mastered so make it ask type
			if ($mini_transaction_code_array[0] != 1 || $mini_transaction_code_array[1] != 1)
			{
				$this->item_types_id_to_ask = $this->id_array[$i];
			}
		} 
		$i++;
	}

	//check to see if it was asked last.....
/*
	if ( !isset($_SESSION["item_type_last"]) ) {
		//go with above from earliest unmastered
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
	}
	else if ($_SESSION["item_type_last"] == $this->item_types_id_to_ask) //if  no dup then go bananas
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

		//ok you have an array take size and get a random one
		$r = rand( 0,intval(count($previous_id_array)) );
		$this->item_types_id_to_ask = $previous_id_array[$r];
	}
*/
	//score
        $score_array = array();
        $i = 0;
        while ($i <= intval(count($this->id_array) - 1))
        {
        	$id = $this->id_array[$i];
                $c = 0; 
                $exists = false;
                while ($c <= intval(count($this->item_array) - 1) && $exists == false)
                {
                	if ($this->id_array[$i] == $this->item_array[$c])
                        {
                        	$score_array[] = $this->id_array[$i];
                                $exists = true; 
                        }
                        $c++;   
                }
                $i++;   
	}


	/** anaylse **/

	$_SESSION["item_type_last"] = $this->item_types_id_to_ask; //set this new one to last in sessions
	
	//pink
        $itemString =  $this->item_types_id_to_ask; //ask this one

	//blue
        $itemString .= ":";
        $itemString .= "blue";

	//yellow	
        $itemString .= ":";
        $itemString .= "yellow";

	//green
        $itemString .= ":";
        $itemString .= intval(count($score_array)); 

        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $this->item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $this->item_types_id_to_ask;
}
//end of class
}
/*
        $_SESSION["item_type_last"] = $this->item_types_id_to_ask; //set this new one to last in sessions

        //pink
        $itemString =  $this->item_types_id_to_ask; //ask this one

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
        $_SESSION["item_types_id"] = $this->item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $this->item_types_id_to_ask;

*/
?>


