<?php


function insertIntoSchools($conn,$school_name)
{

   //--------------------INSERT INTO SCHOOL----------------
                //query string
                $query = "INSERT INTO schools (school_name) VALUES ('";
                $query .= $school_name;
                $query .= "'";
                $query .= ");";

                // insert into schools......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);


}
?>
