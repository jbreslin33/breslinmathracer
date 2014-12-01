<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Scroll 
{

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	if (!isset($_SESSION["ref_id"]))
	{
		//do nothing....	
		//	date_default_timezone_set("UTC"); 
		//	$_SESSION["scroll"] = "UTC:".time();
	}
	else
	{
		if ($_SESSION["ref_id"] == 'normal'  )
		{
			$this->setScroll();
		}
		else
		{
			//do nothing
		}
	}
}
public function timesTablesTwo()
{
       	//$_SESSION["scroll"] = "2x2:90 2x3:90 3x2:90 2x4:90 4x2:90 2x5:90 5x2:90 2x6:90 6x2:90 2x7:90 7x2:90 2x8:90 8x2:90 2x9:90 9x2:90 2x10:90 10x2:90";
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
		//found you
		$mark_id = 0;
		if (!isset($_SESSION["user_id"]))
		{
			$mark_id = $id_array[0];
		}
		else
		{
			$mark_id = $_SESSION["user_id"];
		}

		//now check with mark id
		if ($id_array[$i] == $mark_id)
		{
			//first place
			if ($place_array[$i] == 1)
			{
				//$itemString .= "YOUR IN FIRST PLACE!!! ";
			}
			else
			{
				$itemString .= $place_array[intval($i - 1)];
				$itemString .= " ";
				$itemString .= $first_name_array[intval($i - 1)];
				$itemString .= " ";
				$itemString .= $last_name_array[intval($i - 1)];
				$itemString .= "(";
				$itemString .= $score_array[intval($i - 1)];
				$itemString .= ") ";
				$itemString .= " ";
			}
			//2nd place you
			$itemString .= $place_array[$i];
			$itemString .= " ";
			$itemString .= $first_name_array[$i];
			$itemString .= " ";
			$itemString .= $last_name_array[$i];
			$itemString .= "(";
			$itemString .= $score_array[$i];
			$itemString .= ") ";
			$itemString .= " ";
			
			if ($place == $place_array[$i]) //your in last so there is no one else
			{

			}
			else
			{
				if ( intval(count($place_array)) > 2)	
				{
					//3rd
					$itemString .= $place_array[intval($i + 1)];
					$itemString .= " ";
					$itemString .= $first_name_array[intval($i + 1)];
					$itemString .= " ";
					$itemString .= $last_name_array[intval($i + 1)];
					$itemString .= "(";
					$itemString .= $score_array[intval($i + 1)];
					$itemString .= ") ";
					$itemString .= " ";
				}
			}
		}
	}

        $_SESSION["scroll"] = $itemString;
}
//end of class
}
?>
