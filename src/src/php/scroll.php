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

	$place_array = array();
	$id_array = array();
	$first_name_array = array();
	$last_name_array = array();
	$score_array = array();

	$query = "select id, first_name, last_name, score from users order by score desc";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);

	$itemString = ""; 

	$place = 1;
	for($i=0; $i < $numberOfResults; $i++)
        {
		$place_array[]      = $place;
		$id_array[] = pg_Result($result, $i, 'id');	
		$first_name_array[] = pg_Result($result, $i, 'first_name');	
		$last_name_array[]  = pg_Result($result, $i, 'last_name');	
		$score_array[]  = pg_Result($result, $i, 'score');	
		$place++;
	}
	
	for($i=0; $i < intval(count($place_array)); $i++)
	{
		if ($id_array[$i] == $_SESSION["user_id"])
		{
			$itemString .= $place_array[$i];
			$itemString .= $first_name_array[$i];
		}
	}


        $_SESSION["scroll"] = $itemString;
}
//end of class
}
?>
