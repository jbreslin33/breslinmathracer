<?php
function insertIntoUsers($conn,$username,$password)
{
	$query = "INSERT INTO users (username, password, school_id) VALUES ('";
        $query .= $username;
       	$query .= "','";
        $query .= $password;
        $query .= "',1";
        $query .= ");";

        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
       	dbErrorCheck($conn,$result);
}
?>
