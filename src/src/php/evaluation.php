<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/advance.php");

class Evaluation 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
       	//insert learning_standard_attempt
        $insert = "insert into learning_standards_attempts (start_time,user_id,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",'evaluation');";

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
        $_SESSION["ref_id"] = 'evaluation';
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 1;
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
}

public function setRawData()
{
	//right here you need to query db to get rawdata for questions.
	$progression_counter = 0;
	
	$itemArray = array();
	$good = true;
	while($good)	
	{
		$query = "select item_types_id, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON levelattempts.learning_standards_attempts_id=learning_standards_attempts.id JOIN learning_standards ON learning_standards.id=learning_standards_attempts.learning_standards_id where learning_standards.id != 'practice' AND learning_standards.id != 'remediate' AND progression > ";
		$query .= $progression_counter; 
		$query .= " AND user_id = ";
		$query .= $_SESSION["user_id"];
		$query .= " order by progression asc limit 1;";

//$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$query','query');";
//$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
	
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
		
		$num = pg_num_rows($result);
        
		if ($num > 0)
        	{
			//set the progression counter for the next loop thru
               		$progression_counter = pg_Result($result, 0, 'progression');

               		//get the id from user table to use in next query
               		$item_types_id = pg_Result($result, 0, 'item_types_id');
               
			//now do another query with on just the item_type and user_id and just grab the last 10 by start_time	
			$query2 = "select item_attempts.start_time, item_types_id, item_attempts.transaction_code, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON levelattempts.learning_standards_attempts_id=learning_standards_attempts.id where item_types_id = '";
			$query2 .= $item_types_id;
			$query2 .= "' AND user_id = ";
			$query2 .= $_SESSION["user_id"];
			$query2 .= " order by start_time asc limit 10;";		
			
			$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());
	
			$num2 = pg_num_rows($result2);

			//if we have 10 lets check if we mastered all ten
			if ($num2 == 10) 
			{
				$masteredAllTen = true;		
				
				for ($i = 0; $i < $num2; $i++)
				{	
               				$transaction_code = pg_Result($result2, 0, 'transaction_code');
					if ($transaction_code != 1)
					{
						$masteredAllTen = false;		
					} 	
				}
				if (!$masteredAllTen)
				{
					array_push($itemArray,"$item_types_id");
				}
			}
			//less than 10 so we could not have mastered 10 so just add it to array.
			else 
			{
				array_push($itemArray,"$item_types_id");
			}	
		}	
		else
		{
			$good = false;
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
  
	//if you have no questions say that you did an evaluation and send back thru setLevelSessionVariablesAdvance
	if (count($itemArray) < 1)
	{
       		$_SESSION["ref_id"] = 'evaluation'; 
		$advance = new Advance();	
	}
}
//end of class
}
?>
