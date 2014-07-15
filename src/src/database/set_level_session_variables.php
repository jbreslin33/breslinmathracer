<?php

function getLevelsReport($conn,$user_id)
{
	$returnString = "101";
	$standardsArray = array();
	$levelsArray = array();
	$progressionArray = array();

  	$select = "select progression, id, levels from learning_standards order by progression;";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

	for ($i = 0; $i < $num; $i++) 
        {
                //get the vars from user table
                $progression = pg_Result($selectResult, $i, 'progression');
                $id     = pg_Result($selectResult, $i, 'id');
                $levels = pg_Result($selectResult, $i, 'levels');
		array_push($standardsArray, $id);
		array_push($progressionArray, $progression);
		array_push($levelsArray, $levels);
        }
	
	$lengthOfStandardsArray = count($standardsArray);

        $progression      = "";
        $id               = "";
 	$start_time       = "";
        $transaction_code = "";
        $level            = "";
        $levels           = "";

	for ($i = 0; $i < $lengthOfStandardsArray; $i++) 
	{
		$select = "select start_time, level, transaction_code, progression, levels from levelattempts JOIN learning_standards ON learning_standards.id=levelattempts.learning_standards_id where user_id = ";
        	$select .= $_POST["usernameid"];
		$select .= "and learning_standards.id = '";
		$select .= $standardsArray[$i]; 
		$select .= "' order by progression asc, start_time desc limit 1;";

        	$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
        	$num = pg_num_rows($selectResult);

		if ($num)
        	{
                	//get the vars from user table
                	$progression      = pg_Result($selectResult, 0, 'progression');
                	$id               = $standardsArray[$i];
                	$start_time       = pg_Result($selectResult, 0, 'start_time');
                	$transaction_code = pg_Result($selectResult, 0, 'transaction_code');
                	$level            = pg_Result($selectResult, 0, 'level');
                	$levels           = pg_Result($selectResult, 0, 'levels');
        	}
		else 
        	{
                	//get the vars from user table
                	$progression      = $progressionArray[$i];
                	$id               = $standardsArray[$i];
                	$start_time       = "";
                	$transaction_code = "2";
                	$level            = "1";
                	$levels		  = $levelsArray[$i];;
        	}
		$returnString .= ",";
		$returnString .= $progression;
		$returnString .= ",";
		$returnString .= $id;
		$returnString .= ",";
		$returnString .= $start_time;
		$returnString .= ",";
		$returnString .= $transaction_code;
		$returnString .= ",";
		$returnString .= $level;
		$returnString .= ",";
		$returnString .= $levels;
	}
	return $returnString;
}

function getLevels($conn,$user_id)
{
	$select = "select levels from learning_standards where id = '";
        $select .= $_POST["standardid"];
        $select .= "';";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the vars from user table
                $levels = pg_Result($selectResult, 0, 'levels');
		return $levels;
	}
	else
	{
		return $select;
	}
}

function remediate($conn,$user_id,$learningstandard,$typeid)
{
 	$select = "select id, core_standards_id, levels, progression from learning_standards where id = '";
        $select .= $learningstandard;
        $select .= "';";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the vars from user table
                $levels = pg_Result($selectResult, 0, 'levels');
                $ref_id = pg_Result($selectResult, 0, 'id');
                $progression = pg_Result($selectResult, 0, 'progression');
                $standard = pg_Result($selectResult, 0, 'core_standards_id');
        	
		$_SESSION["ref_id"] = $ref_id;
		$_SESSION["level"] = 2; 
		$_SESSION["standard"] = $learningstandard;
		$_SESSION["progression"] = $progression;
		$_SESSION["levels"] = $levels;
		$_SESSION["item_type_id_raw_data"] = $typeid;
		$rawData = $_SESSION["item_type_id_raw_data"];
		
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'a','$rawData');";
  		$result = pg_query($conn,$equery);
	
		
                //do the insert...
                $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
                $insert .= $_SESSION["user_id"];
                $insert .= ",";
                $insert .= $_SESSION["level"];
                $insert .= ",'";
                $insert .= $_SESSION["ref_id"];
                $insert .= "',3);";

                $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        }
}

function changeLevel($conn,$user_id)
{
 	$select = "select id, core_standards_id, levels, progression from learning_standards where id = '";
        $select .= $_POST["standardid"];
        $select .= "';";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the vars from user table
                $levels = pg_Result($selectResult, 0, 'levels');
                $ref_id = pg_Result($selectResult, 0, 'id');
                $progression = pg_Result($selectResult, 0, 'progression');
                $standard = pg_Result($selectResult, 0, 'core_standards_id');
  
		//do the insert...
                $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
                $insert .= $_POST["id"];
                $insert .= ",";
		$insert .= $_POST["levels"];
                $insert .= ",'";
		$insert .= $ref_id; 
                $insert .= "',3);";
		
                $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
	}
}

function setLevelSessionVariablesChange($conn,$user_id)
{
	$select = "select id, levels, progression from learning_standards where id = '";
	$select .= $_POST["standardid"];
	$select .= "';";
	
	$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());

 	//get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the vars from user table
                $levels = pg_Result($selectResult, 0, 'levels');
                $ref_id = pg_Result($selectResult, 0, 'id');
                $progression = pg_Result($selectResult, 0, 'progression');
        	
		$_SESSION["ref_id"] = $ref_id;
		
		//get the last level
		$select = "select level, transaction_code from levelattempts where user_id = ";	
		$select .= $_SESSION["user_id"];
		$select .= " and learning_standards_id = '";
		$select .= $_SESSION["ref_id"];	
		$select .= "' order by start_time desc limit 1;";
	
		$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
       		$num = pg_num_rows($selectResult);
        
		if ($num > 0)
		{
			//student played this standard before lets get his level and code
               		$level = pg_Result($selectResult, 0, 'level');
               		$transaction_code = pg_Result($selectResult, 0, 'transaction_code');

			$_SESSION["level"] = $level;
			$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
			$_SESSION["transaction_code"] = $transaction_code;

			if ($transaction_code == 2 && $levelVar > 1)
			{
				//the last time this standard was played student failed the level so lets bump him down 
				$levelVar--;
				$_SESSION["level"] = $levelVar;
			} 
			if ($transaction_code == 2)
			{
				//the last time this standard was played student passed the level so lets bump him up 
				$levelVar++;
				$_SESSION["level"] = $levelVar;
			} 
		}
		else
		{
			//no previous transaction at this standard so goto level 1
        		$_SESSION["level"] = 1;
		}

		//do the insert...
		$insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
		$insert .= $_SESSION["user_id"];
		$insert .= ",";
		$insert .= $_SESSION["level"];
		$insert .= ",'";
		$insert .= $ref_id;
		$insert .= "',3);";
	
		$insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());

		//update session vars
        	$_SESSION["levels"] = $levels;
        	$_SESSION["progression"] = $progression;
        	$_SESSION["standard"] = $_POST["standardid"]; 
        }
        else
        {
                echo "error no id in learning_standards";
        }
}

function advanceCurrentLearningStandard($conn,$user_id)
{
	//update levelattempts to say we passed. keep in mind transaction_code 1 is same as level bump.
	$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
	$update .= $_SESSION["attempt_id"];
	$update .=  ";"; 
               
	$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
}

function setLevelsProgression($conn,$user_id)
{
	//get variables from current learning_standard 
 	$query = "select levels, progression from learning_standards where id = '";
	$query .= $_SESSION["ref_id"];
        $query .= "';";

	//get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);
		
        if ($num > 0)
        {
                //get the id from user table
                $levels = pg_Result($result, 0, 'levels');
                $progression = pg_Result($result, 0, 'progression');

                //set level_id
                $_SESSION["levels"] = $levels;
                $_SESSION["progression"] = $progression;
        }
        else
        {
                echo "error no LearningStandard";
        }
}

function bumpLevelUp($conn,$user_id,$levelVar)
{
	//you are just going up one level is same learning_standard so just set session vars to reflect that.
	$levelVar++;
	$_SESSION["level"] = $levelVar;
}

function setLevelSessionVariablesAdvance($conn,$user_id)
{
	advanceCurrentLearningStandard($conn,$user_id);
	setLevelsProgression($conn,$user_id);

	$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
	$levelsVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["levels"]);

       	if ($levelVar < $levelsVar)
	{
		bumpLevelUp($conn,$user_id,$levelVar);
	}
	else
	{
		newLearningStandard($conn,$user_id);
	}
}

function getNextNotMasteredLearningStandard($conn,$user_id)
{
 	$query = "select id from learning_standards where progression > ";
	$query .= $_SESSION["progression_counter"];
        $query .= " order by progression asc LIMIT 1;";
 	
	//get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
	
	$num = pg_num_rows($result);
	
	$id = '';
	$levelVar = 0;
	$levelsVar = 0;
	$transaction_codeVar = 0;
	
	if ($num > 0)
        {
               	//get the id from user table
               	$id       = pg_Result($result, 0, 'id');
		$query  = "select * from levelattempts where learning_standards_id = '";
        	$query .= $id;
		$query .= "' AND user_id = ";  
        	$query .= $_SESSION["user_id"];
        	$query .= " order by start_time desc limit 1;";

        	//get db result
        	$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
       	 	$num = pg_num_rows($result);

        	if ($num > 0)
        	{
                	//get the id from user table
                	$transaction_codeVar = pg_Result($result, 0, 'transaction_code');
                	$levelVar            = pg_Result($result, 0, 'level');

        		//passed
        		if ($transaction_codeVar == 1)
        		{
                		$levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
                		$levelVar++;
        		}
 			//failed
        		if ($transaction_codeVar == 0)
        		{
                		if ($levelVar > 1)
                		{
                        		$levelVar = (int) preg_replace('/[^0-9]/', '', $levelVar);
                        		$levelVar--;
                		}
        		}
        	}

		//ok you should have a levelVar by now so see how many levels you need for this id

        	$query = "select * from learning_standards where id = '";
        	$query .= $id;
        	$query .= "';";

        	//get db result
        	$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
        	$num = pg_num_rows($result);

        	if ($num > 0)
        	{
                	$levelsVar = pg_Result($result, 0, 'levels');
                	$progression = pg_Result($result, 0, 'progression');
               
			//up the counter	
			$_SESSION["progression_counter"] = $progression;
        	}

		if ($levelVar < $levelsVar)
		{
			return $id;
		}
		else
		{
			return '';
		}
	}
	else
	{
	}
}

function newLearningStandard($conn,$user_id)
{
	$_SESSION["progression_counter"] = 0;

	$nextID = '';

	if ($_SESSION["ref_id"] == 'evaluation')
	{
		while ($nextID == '')
		{
			$nextID = getNextNotMasteredLearningStandard($conn,$user_id);
		}
 	
 		$query2 = "select id, core_standards_id, levels, progression from learning_standards where id = '";
		$query2 .= $nextID;
        	$query2 .= "' order by progression asc LIMIT 1;";
		
		//get db result
        	$result2 = pg_query($conn,$query2) or die('Could not connect: ' . pg_last_error());
		//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
        	{
               		//get the id from user table
               		$levels      = pg_Result($result2, 0, 'levels');
               		$ref_id       = pg_Result($result2, 0, 'id');
               		$progression = pg_Result($result2, 0, 'progression');
               		$standard = pg_Result($result2, 0, 'core_standards_id');
                
			$_SESSION["levels"] = $levels;
               		$_SESSION["progression"] = $progression;
               		$_SESSION["ref_id"] = $ref_id;
               		$_SESSION["standard"] = $standard;
 	
			//BEGIN NEW CODE
			//right here you need to check the level of the ref_id you are about to send them to.
               		$selectLastLevelAttempt = "select level, transaction_code from levelattempts where user_id = ";
               		$selectLastLevelAttempt .= $_SESSION["user_id"];
               		$selectLastLevelAttempt .= " and learning_standards_id = '";
               		$selectLastLevelAttempt .= $_SESSION["ref_id"];
               		$selectLastLevelAttempt .= "' order by start_time desc limit 1;";

               		$selectLastLevelAttemptResult = pg_query($conn,$selectLastLevelAttempt) or die('Could not connect: ' . pg_last_error());
               		$numLastLevelAttemptRows = pg_num_rows($selectLastLevelAttemptResult);
		
			if ($numLastLevelAttemptRows > 0)
			{
               			$level      = pg_Result($selectLastLevelAttemptResult, 0, 'level');
				$_SESSION["level"] = $level;
			}
			else
			{
				$_SESSION["level"] = 1;
			}
			//END NEW CODE
			$userid = $_SESSION["user_id"]; 	
		
			$lev = $_SESSION["level"]; 	
		
			$refid = $_SESSION["ref_id"]; 	
			
 			//insert into level attempts for a jump
        		$insert = "insert into levelattempts (start_time,user_id,level,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        		$insert .= $_SESSION["user_id"];
        		$insert .= ",";
        		$insert .= $_SESSION["level"];
        		$insert .= ",'";
        		$insert .= $_SESSION["ref_id"];
        		$insert .= "');";
			
			//get db result
        		$insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
		} 
	}
	else
	{
		setEvaluation($conn,$user_id);
	}
}

function setEvaluation($conn,$user_id)
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

        $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());

        //update session vars with some hard coding
        $_SESSION["level"] = 1;
        $_SESSION["levels"] = 1;
        $_SESSION["progression"] = 2;
        $_SESSION["standard"] = 'evaluation';
       	$_SESSION["ref_id"] = 'evaluation';
	
	setRawData($conn,$user_id);	
}

function setRawData($conn,$user_id)
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
                
		$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        	
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
		
			$result2 = pg_query($conn,$query2) or die('Could not connect: ' . pg_last_error());
        	
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

	$query = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'b','$rawData');";
  	$result = pg_query($connection,$query);

	//if you have no questions say that you did an evaluation and send back thru setLevelSessionVariablesAdvance
	if (count($itemArray) < 1)
	{
       		$_SESSION["ref_id"] = 'evaluation'; 
		setLevelSessionVariablesAdvance($conn,$user_id);
	}

}

function checkItemProgression($conn,$user_id)
{
//select start_time, item_types_id from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id;
//select start_time, item_types_id, transaction_code, progression from item_attempts INNER JOIN item_types ON item_attempts.item_types_id=item_types.id where progression > 0 order by progression asc limit 1;
	return 2;
} 

function rewindCurrentLearningStandard($conn,$user_id)
{
	//update levelattempts to say we failed. keep in mind transaction_code 2 is same as level bump down.
	$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 2 WHERE id = ";
	$update .= $_SESSION["attempt_id"];
	$update .=  ";"; 
               
	$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
}

function bumpLevelDown($conn,$user_id,$levelVar)
{
	//you are just going down one level is same learning_standard so just set session vars to reflect that.
	if ($levelVar > 1)
	{
		$levelVar--;
		$_SESSION["level"] = $levelVar;
	}
}

function setLevelSessionVariablesRewind($conn,$user_id)
{
	rewindCurrentLearningStandard($conn,$user_id);
	
	$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
	bumpLevelDown($conn,$user_id,$levelVar);
}

function selectLevels($conn,$id)
{
        $query = "select levels from learning_standards where id = '";
        $query .= $id;
        $query .= "';";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        // if there is a row then the username and password pair exists
        if ($num > 0)
        {
                //get the id from user table
                $id = pg_Result($result, 0, 'id');
                return $id;
        }
        else
        {
                return 0;
        }
}
?>

