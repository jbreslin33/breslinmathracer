<?php

//brian - insert new record in games_attempts

function insertIntoGamesAttempts($conn,$curDate,$game_id,$user_id,$level_id)
{
 		//--------------------INSERT INTO STUDENTS----------------
                //query string 
				//$curDate = date(DATE_ATOM);
				//echo($curDate);
				
				//$mysqldate = date( 'Y-m-d H:i:s', $curDate );
				//$mysqldate = date('Y-m-d H:i:s');
				
                $query = "INSERT INTO games_attempts (game_attempt_time_start,game_id,user_id,level_id) VALUES ('";
				$query .= $curDate;
                $query .= "',";
				$query .= $game_id;
                $query .= ",";
                $query .= $user_id;
                $query .= ",";
                $query .= $level_id;
                $query .= ");";
                
                // insert into users......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
                
}

?>
