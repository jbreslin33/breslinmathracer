<?php
function setLevelSessionVariablesAdvance($conn,$user_id)
{
 	$query = "select levels,progression from LearningStandards where RefID = '";
	$query .= $_SESSION["RefID"];
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
		//go up one level in same RefID
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
	}
	else
	{
		//go to new RefID
		//you need to goto next LearningStandard...
 		$query2 = "select RefID, levels, progression from LearningStandards where progression > ";
		$query2 .= $_SESSION["progression"];
        	$query2 .= " order by progression asc LIMIT 1;";
											
		//get db result
        	$result2 = pg_query($conn,$query2) or die('Could not connect: ' . pg_last_error());
        	dbErrorCheck($conn,$result2);
        	
		//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
        	{
                	//get the id from user table
                	$levels      = pg_Result($result, 0, 'levels');
                	$RefID       = pg_Result($result, 0, 'RefID');
                	$progression = pg_Result($result, 0, 'progression');
                
			$_SESSION["levels"] = $levels;
			$_SESSION["level"] = 1;
                	$_SESSION["progression"] = $progression;
                	$_SESSION["RefID"] = $RefID;
		
			//update db
			//you need to goto next LearningStandard...
 			$query3 = "update users set level = ";
			$query3 .= $_SESSION["level"];
			$query3 .= ",RefID=";
			$query3 .= $_SESSION["RefID"];
			$query3 .= " where id = ";
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
function setLevelSessionVariables($conn,$user_id)
{
	$user_id = selectUserID($conn, $_SESSION["school_id"],$_SESSION["username"],$_SESSION["password"]);

 	$query = "select RefID, level from users where id = ";
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
                $RefID = pg_Result($result, 0, 'RefID');
                $level = pg_Result($result, 0, 'level');

                //set level_id
                $_SESSION["RefID"] = $RefID;
                $_SESSION["level"] = $level;
        }
        else
        {
                echo "error no user";
        }
	
/*
 	$query = "select RefID, advancement_time, level_id from levels_transactions where user_id = ";
        $query .= $user_id;
        $query .= " ORDER BY advancement_time DESC LIMIT 1";
        $query .= ";";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $last_level_id = pg_Result($result, 0, 'level_id');

                //set level_id
                $_SESSION["last_level_id"] = $last_level_id;
        }
        else
        {
                // no transaction in level_transactions so set level_id to 1
                echo "error no transactions";
        }
*/
}

function setLevelSessionVariablesOLD($conn,$user_id)
{

	$query = "select advancement_time, level_id from levels_transactions where user_id = ";
	$query .= $user_id;
	$query .= " ORDER BY advancement_time DESC LIMIT 1";
	$query .= ";";

	//get db result
	$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
        	//get the id from user table
                $last_level_id = pg_Result($result, 0, 'level_id');

                //set level_id
                $_SESSION["last_level_id"] = $last_level_id;
        }
        else
	{
        	// no transaction in level_transactions so set level_id to 1
                echo "error no transactions";
        }

	/***get the last_level using last_level_id ************/
	$query = "select id from levels where id = ";
	$query .= $_SESSION["last_level_id"];
	$query .= ";";

 	$result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
      		//get the id from user table
                $last_level = pg_Result($result, 0, 'id'); 
                //set level_id
                $_SESSION["last_level"] = $last_level;
        }
      	else
        {
                // no transaction in level_transactions so set level_id to 1
       	        echo "error no transactions";
        }

  	//---------------- GET next level id and level and game_id using last_level_id----------------------------------------------

	$query = "select game_id, level_id from games_levels where level_id > ";

        $query .= $_SESSION["last_level"];
        $query .= " order by level_id ASC LIMIT 1;";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
        	//get the id and level
                $next_level_id = pg_Result($result, 0, 'level_id');
                $next_level_game_id = pg_Result($result, 0, 'game_id');

               	//set session
                $_SESSION["next_level_id"] = $next_level_id;
                $_SESSION["next_level_game_id"] = $next_level_game_id;
        }
        else
        {
                echo "error no results";
        }
}
?>
