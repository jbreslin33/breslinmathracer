<?php


function setLevelSessionVariables($conn,$user_id)
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
	//$query = "select games.id from games join games_levels on games.id = games_levels.game_id where games_levels.level_id = ";
        //$query = "select id from levels where id > ";

	$query = "select game_id, level_id from games_levels where level_id > ";

        $query .= $_SESSION["last_level"];
        $query .= " order by id ASC LIMIT 1;";

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
