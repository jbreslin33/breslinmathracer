<?php

class DatabaseConnection
{
    private $connection;

function __construct()
{
	$connectionString = "host=localhost dbname=jamesanthonybreslin user=postgres password=mibesfat";
        $this->connection = pg_connect($connectionString);
}

function __destruct()
{

}

public function getConn()
{
        return $this->connection;
}

public function selectUserID($username,$password)
{
        $query = "select id from users where username = '";
        $query .= $username;
        $query .= "' and password = '";
        $query .= $password;
        $query .= "';";

        //get db result
        $result = pg_query($this->connection,$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        // if there is a row then the username and password pair exists
        if ($num > 0)
        {
                //get the id from user table
                $id = pg_Result($result, 0, 'id');
                return $id;
        }
        else
        {
                return 0;
        }
}

}
?>
