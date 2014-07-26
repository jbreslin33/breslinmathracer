<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class GetItemDescription 
{
    private $mDatabaseConnection;

function __construct($typeid)
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTypeID = $typeid;

     	$query = "select description from item_types where id = '";
       	$query .= $this->mTypeID;
       	$query .= "';";

	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$query','query');";
  	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

       	//get db result
       	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

       	$num = pg_num_rows($result);

       	if ($num > 0)
       	{
               	$description = pg_Result($result, 0, 'description');
		$_SESSION["item_description"] = $description;
	}
}
//end of class
}
?>
