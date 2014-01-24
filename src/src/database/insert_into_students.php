<?php

function insertIntoStudents($conn,$user_id,$teacher_id)
{
 		//--------------------INSERT INTO STUDENTS----------------
                //query string 
                $query = "INSERT INTO students (id,teacher_id) VALUES (";
                $query .= $user_id;
                $query .= ",";
                $query .= $teacher_id;
                $query .= ");";
                
                // insert into users......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
                
}

?>
