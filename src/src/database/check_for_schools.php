<?php


function checkForSchools($conn,$school_name)
{

 //----------------check for school existence-----------------------------------
        $taken = false;

        //query string
        $query = "select school_name from schools where school_name = '";
        $query .= $school_name;
        $query .= "';";

        //get db result
        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$result);

        //get numer of rows
        $num = pg_num_rows($result);

        // if there is a row then the username and password pair exists
        if ($num == 1)
        {
                return true;
        }
	else
	{
		return false;
	}


}
?>
