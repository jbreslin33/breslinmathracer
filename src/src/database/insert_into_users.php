<?php
function insertIntoUsers($conn,$username,$password,$first_name,$last_name)
{
	$query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
       	$query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
        $query .= "',1";
        $query .= ");";

        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
}
function insertIntoUsersWithSchool($conn,$username,$password,$first_name,$last_name,$school_id)
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
        $query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
        $query .= "',";
        $query .= $school_id;
        $query .= ");";

        $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
}

?>
