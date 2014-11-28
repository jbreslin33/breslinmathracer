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

	$itemString = "hello i love you"; 
        $_SESSION["scroll"] = $itemString;
}
/*
public function fillTypesArray()
{
	$query = "select id, progression, type_mastery, core_standards_id from item_types where progression > "; 
	$query .= $this->progression_counter; 
	$query .= " AND progression < "; //stay in grade 
	$query .= $this->progression_counter_limit; 
	$query .= " AND active_code = 1 AND speed = 0"; //skip unactive and speed standards
	$query .= " order by progression asc;";

	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       	$numberOfResults = pg_num_rows($result);
                
	for($i=0; $i < $numberOfResults; $i++)
        {
		$this->id_array[]              = pg_Result($result, $i, 'id');	
		$this->progression_array[]     = pg_Result($result, $i, 'progression');	
		$this->core_standards_id_array = pg_Result($result, $i, 'core_standards_id');
		$this->type_mastery_array      = pg_Result($result, $i, 'type_mastery');
	}
}
*/	
/*	
	//pink
        $itemString =  $this->item_types_id_to_ask; //ask this one

	//blue
        $itemString .= ":";
        $itemString .= "L=";
        $itemString .= "$high_progression";
        $itemString .= " U=";
	$itemString .= count($unmastered_array);

	//yellow	
        $itemString .= ":";
        $itemString .= "$high_standard";

	//green
        $itemString .= ":";
        $itemString .= intval(count($score_array)); 

        $_SESSION["raw_data"] = $itemString;
        $_SESSION["item_types_id"] = $this->item_types_id_to_ask;
        $_SESSION["item_types_id_progressed"] = $this->item_types_id_to_ask;
}
*/
//end of class
}
?>
