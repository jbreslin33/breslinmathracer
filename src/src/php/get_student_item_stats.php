<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class GetPracticeDescription 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

        //this id is either going in array or not
/*
        $item_types_id = pg_Result($result, 0, 'id');
        $progression_counter = pg_Result($result, 0, 'progression');

        $query = "select item_attempts.item_types_id, item_attempts.transaction_code from levelattempts JOIN item_attempts ON levelattempts.id=item_attempts.levelattempts_id JOIN learning_standards_attempts ON learning_standards_attempts.id=levelattempts.learning_standards_attempts_id where item_attempts.item_types_id = '";
        $query .= $item_types_id;
        $query .= "' AND learning_standards_attempts.user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= "order by item_attempts.start_time asc limit 10;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
        $num = pg_num_rows($result);

     	$query = "select id from item_types order by progression;";

       	//get db result
       	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

       	$num = pg_num_rows($result);
  
	$itemArray = array();

       	if ($num > 0)
       	{
 		for ($i = 0; $i < $num; $i++)
		{
               		$id = pg_Result($result, $i, 'id');
 			array_push($itemArray,"$id");
		}
	}
        $itemString = "";

        if (count($itemArray) > 0)
        {
                $itemString .= $itemArray[0];
                if (count($itemArray) > 1)
                {
                        $itemString .= ":";
                }
        }

        $totalCount = count($itemArray);

        for ($i = 1; $i < $totalCount; $i++)
        {
                $itemString .= $itemArray[$i];
                if ($i < $totalCount - 1)
                {
                        $itemString .= ":";
                }
        }

        $_SESSION["practice_description"] = $itemString;
*/
}
//end of class
}
?>
