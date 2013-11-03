<?php

function selectStudentID($conn,$user_id)
{
                //----------------TEACHER CHECK----------------------------------------------
                //is this user a student ? if so let's set some session vars
                //query string
                $query = "select id from students where id = ";
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
                        $student_id = pg_Result($result, 0, 'id');

			return $student_id;
                }
                else
                {
               		return 0; 
		}
}

?>
