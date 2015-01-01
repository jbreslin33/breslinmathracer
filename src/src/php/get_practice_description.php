<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class GetPracticeDescription 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();

	//skip inactive and speed types as speed types will be done in a special section
     	$query = "select id from item_types WHERE active_code = 1 AND speed = 0 order by progression;";

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
}
//end of class
}
?>
