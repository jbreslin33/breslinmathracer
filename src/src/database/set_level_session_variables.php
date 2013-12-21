<?php
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
function setLevelSessionVariables($conn,$user_id)
{
	$user_id = selectUserID($conn, $_SESSION["school_id"],$_SESSION["username"],$_SESSION["password"]);
	
	$query = "select users.ref_id, users.level, users.first_name, users.last_name, learning_standards.id, learning_standards.progression from users INNER JOIN learning_standards ON users.ref_id=learning_standards.ref_id WHERE users.id = ";
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
                $ref_id = pg_Result($result, 0, 'ref_id');
                $level = pg_Result($result, 0, 'level');
                $first_name = pg_Result($result, 0, 'first_name');
                $last_name = pg_Result($result, 0, 'last_name');
                $standard = pg_Result($result, 0, 'id');
                $progression = pg_Result($result, 0, 'progression');

                //set level_id
                $_SESSION["ref_id"] = $ref_id;
                $_SESSION["level"] = $level;
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["standard"] = $standard;
                $_SESSION["progression"] = $progression;
        }
        else
        {
                echo "error no user";
        }
}
?>
