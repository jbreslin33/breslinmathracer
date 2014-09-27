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

