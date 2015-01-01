<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class GetCoreDescription 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
        $_SESSION["core_description"] = "3.oa.c.7:5.oa.a.1";
}

public function querydb()
{

     	$query = "select id from core_standards order by core_clusters_id, id;";

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

        $_SESSION["core_description"] = $itemString;
}
//end of class
}
?>
