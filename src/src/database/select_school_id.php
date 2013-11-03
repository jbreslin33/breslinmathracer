<?php


function selectSchoolID($conn,$school_name)
{
                //----------------SCHOOL CHECK----------------------------------------------
                //query string
                $query = "select id from schools where school_name = '";
                $query .= $school_name;
                $query .= "';";

                //get db result
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);

                //get numer of rows
                $num = pg_num_rows($result);

                if ($num > 0)
                {
                        //get the id from user table
                        $school_id = pg_Result($result, 0, 'id');

			return $school_id;

                }
                else
                {
			return 0;
                }
}
?>
