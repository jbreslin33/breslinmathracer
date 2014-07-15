<?php

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
        $insert .= "',2);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
        //update session vars with some hard coding
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 1;
        $_SESSION["progression"] = 2;
        $_SESSION["standard"] = 'evaluation';
        $_SESSION["ref_id"] = 'evaluation';

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
		$query = "select item_types_id, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id where progression > ";
		$query .= $progression_counter; 
		$query .= " order by progression asc limit 1;";
                
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
        	
		$num = pg_num_rows($result);
        
		if ($num > 0)
        	{
               		//get the id from user table
               		$item_types_id = pg_Result($result, 0, 'item_types_id');
               		$progression_counter = pg_Result($result, 0, 'progression');
                
			//now do another query with type	
			$query2 = "select start_time, item_types_id, transaction_code, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id where item_types_id = ";
			$query2 .= $item_types_id;
			$query2 .= " order by start_time asc limit 10;";		
		
			$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());
        	
			$num2 = pg_num_rows($result2);

			if ($num2 > 0)
			{
				if ($num2 > 9) //more than 9 so check
				{
					$mastered = true;		
				
					for ($i = 0; $i < $num2; $i++)
					{	
               					$transaction_code = pg_Result($result2, 0, 'transaction_code');
						if ($transaction_code != 1)
						{
							$mastered = false;		
						} 	
					}
					if (!$mastered)
					{
						array_push($itemArray,"$item_types_id");
					}
				}
				else //less than 10 so just add it
				{
					array_push($itemArray,"$item_types_id");
				}
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
	}
	for ($i = 1; $i < count($itemArray); $i++)
	{
		$itemString .= ":";
		$itemString .= $itemArray[$i];
	} 
	
       	$_SESSION["item_type_id_raw_data"] = $itemString; 
       	$rawData = $_SESSION["item_type_id_raw_data"]; 

	//if you have no questions say that you did an evaluation and send back thru setLevelSessionVariablesAdvance
	if (count($itemArray) < 1)
	{
       		$_SESSION["ref_id"] = 'evaluation'; 
		$this->setLevelSessionVariablesAdvance();
	}
}


//end of class
}
?>
