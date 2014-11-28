<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Scroll 
{

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->setScroll();
}
public function setScroll()
{
	$query = "select first_name, last_name from users order by score desc";
	
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);

	$itemString = "Leader Board-- "; 

	$place = 1;
	for($i=0; $i < $numberOfResults; $i++)
        {
		$itemString .= "$place-- ";
		$itemString .= pg_Result($result, $i, 'first_name');	
		$itemString .= pg_Result($result, $i, 'last_name');	
		$place++;
		
		$itemString .= "--";
	}

        $_SESSION["scroll"] = $itemString;
}
//end of class
}
?>
