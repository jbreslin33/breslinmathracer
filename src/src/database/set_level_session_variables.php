<?php

function insertLevelAttempt($conn,$user_id)
{
	//insert into levelattempts (start_time,user_id,level,ref_id) VALUES (CURRENT_TIMESTAMP,1,1,'CA9EE2E34F384E95A5FA26769C5864B8');
	$insert = "insert into levelattempts (start_time,user_id,level,ref_id) VALUES (CURRENT_TIMESTAMP,";
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
	$select .= " AND ref_id = '";	
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

function setLevelSessionVariablesRewind($conn,$user_id)
{
	if ( $_SESSION["level"] == 1)
	{

	}
	else
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
                $ref_id           = pg_Result($result, 0, 'ref_id');
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
        $query = "select * from learning_standards where ref_id = '";
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
                $standard = pg_Result($result, 0, 'id');
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
}

function setLevelSessionVariablesAdvance($conn,$user_id)
{
 	$query = "select levels,progression from learning_standards where ref_id = '";
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

		//update db
                //you need to goto next LearningStandard...
                $query4 = "update users set level = ";
                $query4 .= $_SESSION["level"];
                $query4 .= " where id = ";
                $query4 .= $_SESSION["user_id"];
                $query4 .= ";";

                //get db result
                $result4 = pg_query($conn,$query4) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result4);

		if ($_SESSION["ref_id"] == 'CA9EE2E34F384E95A5FA26769C5864B8' || $_SESSION["ref_id"] == '5E6A3E3B939B4577B104FA8658206E9E')
		{
		}
		else
		{
			//update level attempts
			$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
			$update .= $_SESSION["attempt_id"];
			$update .=  ";"; 
                
			$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
                	dbErrorCheck($conn,$updateResult);
		}
	}
	else
	{
		//go to new ref_id
		//you need to goto next LearningStandard...
 		$query2 = "select ref_id, levels, progression, id from learning_standards where progression > ";
		$query2 .= $_SESSION["progression"];
        	$query2 .= " order by progression asc LIMIT 1;";
											
		//get db result
        	$result2 = pg_query($conn,$query2) or die('Could not connect: ' . pg_last_error());
        	dbErrorCheck($conn,$result2);
        	
		//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
        	{
    			if ($_SESSION["ref_id"] == 'CA9EE2E34F384E95A5FA26769C5864B8' || $_SESSION["ref_id"] == '5E6A3E3B939B4577B104FA8658206E9E')
                	{
                	}
                	else
                	{
				//update level attempts
				$update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
				$update .= $_SESSION["attempt_id"];
				$update .=  ";"; 
                
				$updateResult = pg_query($conn,$update) or die('Could not connect: ' . pg_last_error());
                		dbErrorCheck($conn,$updateResult);
			}

                	//get the id from user table
                	$levels      = pg_Result($result2, 0, 'levels');
                	$ref_id       = pg_Result($result2, 0, 'ref_id');
                	$progression = pg_Result($result2, 0, 'progression');
                	$standard = pg_Result($result2, 0, 'id');
                
			$_SESSION["levels"] = $levels;
			$_SESSION["level"] = 1;
                	$_SESSION["progression"] = $progression;
                	$_SESSION["ref_id"] = $ref_id;
                	$_SESSION["standard"] = $standard;
		
			//update db
			//you need to goto next LearningStandard...
 			$query3 = "update users set level = ";
			$query3 .= $_SESSION["level"];
			$query3 .= ",ref_id='";
			$query3 .= $_SESSION["ref_id"];
			$query3 .= "' where id = ";
			$query3 .= $_SESSION["user_id"]; 
        		$query3 .= ";";
		
			//get db result
        		$result3 = pg_query($conn,$query3) or die('Could not connect: ' . pg_last_error());
        		dbErrorCheck($conn,$result3);
		}
		else
		{
			//no results
		} 
	} 

}

function setLevelSessionVariablesBreslin($conn,$user_id)
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
                $ref_id           = pg_Result($result, 0, 'ref_id');
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
	$query = "select * from learning_standards where ref_id = '";
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
                $standard = pg_Result($result, 0, 'id');
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

