<?php

class Advance 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
       	$this->advanceCurrentLearningStandard();
        $this->setLevelsProgression();

        $levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
        $levelsVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["levels"]);

        if ($levelVar < $levelsVar)
        {
                $this->bumpLevelUp($levelVar);
        }
        else
        {
                $this->newLearningStandard();
        }
}

public function advanceCurrentLearningStandard()
{
        //update levelattempts to say we passed. keep in mind transaction_code 1 is same as level bump.
        $update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
        $update .= $_SESSION["attempt_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

public function setLevelsProgression()
{
        //get variables from current learning_standard
        $query = "select levels, progression from learning_standards where id = '";
        $query .= $_SESSION["ref_id"];
        $query .= "';";

        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

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

public function bumpLevelUp($levelVar)
{
        //you are just going up one level is same learning_standard so just set session vars to reflect that.
        $levelVar++;
        $_SESSION["level"] = $levelVar;
}

public function newLearningStandard()
{
        $_SESSION["progression_counter"] = 0;

        $nextID = '';

        if ($_SESSION["ref_id"] == 'evaluation')
        {
                while ($nextID == '')
                {
                        $nextID = $this->getNextNotMasteredLearningStandard();
                }

                $query2 = "select id, core_standards_id, levels, progression from learning_standards where id = '";
                $query2 .= $nextID;
                $query2 .= "' order by progression asc LIMIT 1;";

                //get db result
                $result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());
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

                        $selectLastLevelAttemptResult = pg_query($this->mDatabaseConnection->getConn(),$selectLastLevelAttempt) or die('Could not connect: ' . pg_last_error());
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
                        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
                }
        }
        else
        {
                $this->setEvaluation();
        }

}

public function getNextNotMasteredLearningStandard()
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
                $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

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
                $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

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

public function setEvaluation()
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
