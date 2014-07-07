<?php

function getLevelsReport($conn,$user_id)
{
	$returnString = "101";
	$standardsArray = array();
	$levelsArray = array();
	$progressionArray = array();

  	$select = "select progression, id, levels from learning_standards order by progression;";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$selectResult);

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
        	dbErrorCheck($conn,$selectResult);

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
        dbErrorCheck($conn,$selectResult);

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

function changeLevel($conn,$user_id)
{
 	$select = "select id, core_standards_id, levels, progression from learning_standards where id = '";
        $select .= $_POST["standardid"];
        $select .= "';";

        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$selectResult);

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
                $insert .= "',2);";
		
                $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$insertResult);
	}
}

function setLevelSessionVariablesChange($conn,$user_id)
{
	$select = "select id, levels, progression from learning_standards where id = '";
	$select .= $_POST["standardid"];
	$select .= "';";
	
	$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
	dbErrorCheck($conn,$selectResult);

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
		//select level, transaction_code from levelattempts where user_id = 7 and ref_id = '695A7607FE8A4E27AB80652C45C84FA8' order by start_time desc;
		$select = "select level, transaction_code from levelattempts where user_id = ";	
		$select .= $_SESSION["user_id"];
		$select .= " and learning_standards_id = '";
		$select .= $_SESSION["ref_id"];	
		$select .= "' order by start_time desc limit 1;";
	
		$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
		dbErrorCheck($conn,$selectResult);
       		$num = pg_num_rows($selectResult);
        
		if ($num > 0)
		{
			//student played this standard before lets get his level and code
               		$level = pg_Result($selectResult, 0, 'level');
               		$transaction_code = pg_Result($selectResult, 0, 'transaction_code');

			$_SESSION["level"] = $level;
			$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
			$_SESSION["transaction_code"] = $transaction_code;

			if ($transaction_code == 0 && $levelVar > 1)
			{
				//the last time this standard was played student failed the level so lets bump him down 
				$levelVar--;
				$_SESSION["level"] = $levelVar;
			} 
			if ($transaction_code == 1)
			{
				//the last time this standard was played student passed the level so lets bump him up 
				$levelVar++;
				$_SESSION["level"] = $levelVar;
			} 
			if ($transaction_code == 2)
			{
				//the last time this standard updated with update standard button 
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
		$insert .= "',2);";
	
		$insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
		dbErrorCheck($conn,$insertResult);

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
function insertLevelAttempt($conn,$user_id)
{
        //insert into levelattempts (start_time,user_id,level,ref_id) VALUES (CURRENT_TIMESTAMP,1,1,'CA9EE2E34F384E95A5FA26769C5864B8');
        $insert = "insert into levelattempts (start_time,user_id,level,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $_SESSION["level"];
        $insert .= ",'";
        $insert .= $_SESSION["ref_id"];
        $insert .= "');";

        //get db result
        $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$insertResult);

        //get attempt id
        $select = "select id from levelattempts where user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " AND level = ";
        $select .= $_SESSION["level"];
        $select .= " AND learning_standards_id = '";
        $select .= $_SESSION["ref_id"];
        $select .= "' ORDER BY start_time DESC;";

        //get db result
        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$selectResult);

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["attempt_id"] = $attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

function insertItemAttempt($conn,$user_id)
{
	$insert = "insert into item_attempts (start_time,levelattempts_id,transaction_code,type_id) VALUES (CURRENT_TIMESTAMP,";
  	$insert .= $_SESSION["attempt_id"];
	$insert .= ",";	
  	$insert .= $_SESSION["item_transaction_code"];
	$insert .= ",";	
  	$insert .= $_SESSION["type_id"];
	$insert .= ");";	

        //get db result
        $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$insertResult);

	//get level_attempt id
  	$select = "select id from item_attempts where level_attempts_id = ";
        $select .= $_SESSION["attempt_id"];
	$select .= "' ORDER BY start_time DESC;";	

        //get db result
        $selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$selectResult);
	
        //get numer of rows
        $num = pg_num_rows($selectResult);
   
	if ($num > 0)
        {
                //get the id from user table
                $level_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["level_attempt_id"] = $level_attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

function updateFailedAttempts($conn,$user_id)
{
        if ( $_SESSION["level"] == 1)
        {

        }
        else
        {
                //go back
                //update users SET level = 2, failed_attempts=4 where username = 'v1401';
                $failedAttemptsVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["failed_attempts"]);
                $failedAttemptsVar++;
                $_SESSION["failed_attempts"] = $failedAttemptsVar;

                $query = "update users set failed_attempts = ";
                $query .= $_SESSION["failed_attempts"];
                $query .= " where id = ";
                $query .= $_SESSION["user_id"];
                $query .= ";";

                //get db result
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
        }
}

function setLevelSessionVariablesAdvance($conn,$user_id)
{
 	$query = "select levels, progression from learning_standards where id = '";
	$query .= $_SESSION["ref_id"];
        $query .= "';";

	//get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

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
	$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
	$levelsVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["levels"]);

       	if ($levelVar < $levelsVar)
	{
		//go up one level in same ref_id
		$levelVar++;
		$_SESSION["level"] = $levelVar;
	
		$attemptid = $_SESSTION["attempt_id"];
	
		//update level attempts
		$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
		$update .= $_SESSION["attempt_id"];
		$update .=  ";"; 
                
		$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
               	dbErrorCheck($conn,$updateResult);
	}
	/* else you finished the standard.
		at this point we will do a test....
		this way we can still allow the overide of a standard... 			
		if you pass the whole test we send you to the earliest standard you have not completed in db. 	
		if you fail the test then we send to where you failed and stick you at boss level which is just one level back in theory.	

		how do we get in test mode???
		easy way might be to simply insert a record with no end_time...until you provide an end time you are in test mode.....which may mean 
		starting over??? to soften the blow amongst other reasons of starting a test over maybe they should be chunked. 
		So check the last test record
		
		once in test mode it will only test you on things you have completed. and maybe not even all of them.	
	
		ok the test:
		first we need to see where you are in db....
		scenario 1: ok i see that you have finished progession 2 which means you are not done the whole cluster 	
		this calls for a standards test. which will be on standard 1 and 2. 

		scenario 2: ok i see that you hae finished progression 3 which is and end of cluster standard its time for a 
		cluster test.

		scenario 3: ok i see that you have finished k.cc.c.7 which is an end of domain standard so its time for a domain test...

		scenario 4: ok i see that you have finished k.g.b.6 which is the last standard of the grade its time for a grade test.	
		

		these test will need a way to be strung together...I would say do it by standard......	
		tables for this
		
		issue a grade test by entering a record in db.
		then you can check for any 	
			
				
		grade_test: id,grade_id,start_time,end_time, 
		domain_test
		cluster_test: 

				id, start_time, end_time, user_id, level, learning_standards_id, transaction_code, score, score_needed 


		don't rest till its done once issued. it's triggered after completing a standard(any standard) for instance even if you jumped to 4th grade
		we are still gonna test you on standard_test or other cluster etc test based on where you currently are in db. meaning have many learning_standards have you completed in succession.	

		learning_standards_test : id, start_time, end_time, user_id,        learning_standards_id, transaction_code 
		item_attempt:wq
	

		in theory a cluster test could be 1 to 7 standard_tests 
		cluster_test:   id, start_time, end_time, user_id,        clusters_id,           transaction_code 

		clusters: id, description 	
		grade: id, description
		domain: id, description
				

		clusters: id, progression, 	
id     | progression | levels | core_standards_id
				

		see what the last test was on		


		--trashing all of the above:
		how about if we query db for 10 questions.
		we take select question types which have not been answered correct x(10) times in a row 
		question. do we use all item_attempts? or do we create a new table? 
		if we use old table we can use inserts we have already used no need to create init insert.
	 	we could just have a g_evaluation game. this game would then call a s_evaluation sheet.
		which would then contain every single type in whole application.
		it would then select accordingly. if you got one wrong it would take you back a level on that game and send you there.	then the learning_standard the item_attempts would point to would be g_evaluation which could simple be first gamee!!!! then it would send you there its levelneeded is 1. it would then knock down a level on a higher progression or when finished it would simply select bump you up naturally......	

	to do this i think we need a types table....then have item_itempts point to that..
	*/
	
	else
	{
		//go to new ref_id
		//you need to goto next LearningStandard...
 		$query2 = "select id, core_standards_id, levels, progression from learning_standards where progression > ";
		$query2 .= $_SESSION["progression"];
        	$query2 .= " order by progression asc LIMIT 1;";
											
		//get db result
        	$result2 = pg_query($conn,$query2) or die('Could not connect: ' . pg_last_error());
        	dbErrorCheck($conn,$result2);
		
		//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
        	{
			//update level attempts to say we passed
			$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
			$update .= $_SESSION["attempt_id"];
			$update .=  ";"; 
                
			$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
                	dbErrorCheck($conn,$updateResult);
			
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
                	dbErrorCheck($conn,$selectLastLevelAttemptResult);
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
        		dbErrorCheck($conn,$insertResult);
		}
		else
		{
			//no results
		} 
	} 

}

function setLevelSessionVariablesRewind($conn,$user_id)
{
        $query = "select first_name, last_name from users where id = ";
	$query .= $_SESSION["user_id"]; 
        $query .= ";";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);
	
        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $first_name = pg_Result($result, 0, 'first_name');
                $last_name = pg_Result($result, 0, 'last_name');

                //set level_id
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["user_id"] = $user_id;
        }
        else
        {
                echo "error no user";
        }
   
	$query  = "select * from levelattempts where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " order by start_time desc limit 1;";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);
		
        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $transaction_code = pg_Result($result, 0, 'transaction_code');
                $ref_id           = pg_Result($result, 0, 'learning_standards_id');
                $level            = pg_Result($result, 0, 'level');

                $_SESSION["ref_id"]           = $ref_id;
                $_SESSION["transaction_code"] = $transaction_code;
                $_SESSION["level"]            = $level;
        }
        else
        {
                echo "error no user";
        }

        //passed
        if ($_SESSION["transaction_code"] == 1)
        {
                $levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
                $levelVar++;
                $_SESSION["level"]            = $levelVar;
        }
        //failed
        if ($_SESSION["transaction_code"] == 0)
        {
                if ($_SESSION["level"] > 1)
                {
                        $levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
                        $levelVar--;
                        $_SESSION["level"]            = $levelVar;
                }
        }
	
        $query = "select * from learning_standards where id = '";
        $query .= $_SESSION["ref_id"];
        $query .= "';";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);
		
        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $standard = pg_Result($result, 0, 'core_standards_id');
                $progression = pg_Result($result, 0, 'progression');
                $levels = pg_Result($result, 0, 'levels');

                //set level_id
                $_SESSION["standard"] = $standard;
                $_SESSION["progression"] = $progression;
                $_SESSION["levels"] = $levels;
        }
        else
        {
                echo "error no user";
        }
}

function setLevelSessionVariables($conn,$user_id)
{
	$user_id = selectUserID($conn, $_SESSION["username"],$_SESSION["password"]);
	
	$query = "select first_name, last_name from users where id = ";
        $query .= $user_id;
        $query .= ";";

	//get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $first_name = pg_Result($result, 0, 'first_name');
                $last_name = pg_Result($result, 0, 'last_name');

                //set level_id
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["user_id"] = $user_id;
        }
        else
        {
                echo "error no user";
        }

	if ($_SESSION["subject_id"] == NULL)
	{
		$_SESSION["subject_id"] = 1;
	}
        
	$query  = "select levelattempts.transaction_code, levelattempts.learning_standards_id, levelattempts.level from levelattempts INNER JOIN learning_standards ON learning_standards.id=levelattempts.learning_standards_id JOIN core_standards ON core_standards.id=learning_standards.core_standards_id JOIN core_clusters ON core_clusters.id=core_standards.core_clusters_id JOIN core_domains_subjects_grades ON core_domains_subjects_grades.id=core_clusters.core_domains_subjects_grades_id JOIN core_subjects_grades ON core_subjects_grades.id=core_domains_subjects_grades.core_subjects_grades_id JOIN core_subjects ON core_subjects.id=core_subjects_grades.core_subjects_id where user_id = ";
	$query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";
	
        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);
                
        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $transaction_code = pg_Result($result, 0, 'transaction_code');
                $ref_id           = pg_Result($result, 0, 'learning_standards_id');
                $level            = pg_Result($result, 0, 'level');
                
                $_SESSION["ref_id"]           = $ref_id;
		$_SESSION["transaction_code"] = $transaction_code;
                $_SESSION["level"]            = $level;
	}
        else
        {
                echo "error record for query";
        }

	//passed
	if ($_SESSION["transaction_code"] == 1)
	{
 		$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
		$levelVar++;
                $_SESSION["level"]            = $levelVar;
        }
	//failed
	if ($_SESSION["transaction_code"] == 0)
	{
		if ($_SESSION["level"] > 1)
		{
 			$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
			$levelVar--;
                	$_SESSION["level"]            = $levelVar;
		}
        }
	$query = "select * from learning_standards where id = '";
        $query .= $_SESSION["ref_id"];
        $query .= "';";
	
        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $standard = pg_Result($result, 0, 'core_standards_id');
                $progression = pg_Result($result, 0, 'progression');
                $levels = pg_Result($result, 0, 'levels');

                //set level_id
                $_SESSION["standard"] = $standard;
                $_SESSION["progression"] = $progression;
                $_SESSION["levels"] = $levels;
        }
        else
        {
                echo "error no user";
        }
}

function selectLevels($conn,$id)
{
        $query = "select levels from learning_standards where id = '";
        $query .= $id;
        $query .= "';";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

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

