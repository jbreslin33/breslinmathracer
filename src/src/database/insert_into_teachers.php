<?php

function insertIntoTeachers($conn,$user_id)
{
 		//--------------------INSERT INTO TEACHERS----------------
                //query string 
                $query = "INSERT INTO teachers (id) VALUES (";
                $query .= $user_id;
                $query .= ");";
                
                // insert into users......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
}

?>
