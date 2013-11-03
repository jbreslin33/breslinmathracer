<?php

include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

$q=$_GET["q"];

$startDate = $_SESSION["game_start_time"];
$user_id = $_SESSION["user_id"];

 		//--------------------INSERT INTO STUDENTS----------------
                //query string 
                //$query = "UPDATE games_attempts SET score =" . $score . "WHERE user_id" = . $user_id;
				
				$query = "UPDATE games_attempts SET score = " .  "'" . $q  .  "'" . "WHERE user_id = " .  "'" .  $user_id  .  "'" . "AND game_attempt_time_start = '";
				$query .= $startDate;
                $query .= "';";
                //$query .= $user_id;
                //$query .= ",";
                //$query .= $level_id;
                //$query .= ");";
                
                // insert into users......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
				
               

?>
