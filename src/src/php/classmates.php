<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Classmates 
{

function __construct()
{
        $this->logs = false;
        if ($this->logs)
        {
                error_log('Classmates::Classmates');
        }
}

public function setClassmates()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
		$db = dbConnect();

		$query = "select id,first_name,last_name from users where room_id = ";
		$query .= $_SESSION["room_id"];
		$query .= " AND school_id = ";
		$query .= $_SESSION["school_id"];
		$query .= ";";
			
        	$result = pg_query($db,$query);
        	$numrows = pg_numrows($result);

		$txt = "";
        	for($i = 0; $i < $numrows; $i++)
        	{
                	$row = pg_fetch_array($result, $i);
			$txt .= ",";	

			$txt .= $row[0];
			$txt .= ":";	
			$txt .= $row[1];
			$txt .= ":";	
			$txt .= $row[2];
		}
		//error_log($txt);
		$_SESSION["classmates"] = $txt;
	}
}	
//end of class
}
?>
