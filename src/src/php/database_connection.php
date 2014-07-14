<?php

class DatabaseConnection
{
    private $prepared = array();
    private $connection;

function __construct()
{
	$connectionString = "host=localhost dbname=jamesanthonybreslin user=postgres password=mibesfat";
        $this->connection = pg_connect($connectionString);
}

public function getConn()
{
        return $this->connection;
}

}

?>
