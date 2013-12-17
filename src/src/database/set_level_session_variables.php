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
                	$levels      = pg_Result($result2, 0, 'levels');
                	$RefID       = pg_Result($result2, 0, 'RefID');
                	$progression = pg_Result($result2, 0, 'progression');
                
			$_SESSION["levels"] = $levels;
			$_SESSION["level"] = 1;
                	$_SESSION["progression"] = $progression;
                	$_SESSION["RefID"] = $RefID;
		
			//update db
			//you need to goto next LearningStandard...
 			$query3 = "update users set level = ";
			$query3 .= $_SESSION["level"];
			$query3 .= ",RefID='";
			$query3 .= $_SESSION["RefID"];
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
}
?>
