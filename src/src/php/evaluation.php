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
        $nextID = 'evaluation';

        //do the insert...
        $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= 1;
        $insert .= ",'";
        $insert .= $nextID;
        $insert .= "',3);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
        //update session vars with some hard coding
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 1;
        $_SESSION["progression"] = 2;
        $_SESSION["standard"] = 'evaluation';
        $_SESSION["ref_id"] = 'evaluation';

        $this->setRawData();
}
//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	//right here you need to query db to get rawdata for questions.
	$progression_counter = 0;
	
	$itemArray = array();
	$good = true;
	while($good)	
	{
		$query = "select item_types_id, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id where progression > ";
		$query .= $progression_counter; 
		$query .= " AND user_id = ";
		$query .= $_SESSION["user_id"];
		$query .= " order by progression asc limit 1;";
	
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
		
		$num = pg_num_rows($result);
        
		if ($num > 0)
        	{
			//set the progression counter for the next loop thru
               		$progression_counter = pg_Result($result, 0, 'progression');

               		//get the id from user table to use in next query
               		$item_types_id = pg_Result($result, 0, 'item_types_id');
               
			//now do another query with on just the item_type and user_id and just grab the last 10 by start_time	
			$query2 = "select item_attempts.start_time, item_types_id, item_attempts.transaction_code, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id JOIN levelattempts ON levelattempts.id=item_attempts.levelattempts_id where item_types_id = ";
			$query2 .= $item_types_id;
			$query2 .= " AND user_id = ";
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
		$itemString .= ":";
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
       	$rawData = $_SESSION["raw_data"]; 

  	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$rawData','rawData');";
  	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
  
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
