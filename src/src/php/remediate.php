<?php

class Remediate 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{

}
public function remediateback($learningstandard,$typeid)
{
 	$select = "select id, core_standards_id, levels, progression from learning_standards where id = '";
        $select .= $learningstandard;
        $select .= "';";

        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the vars from user table
                $levels = pg_Result($selectResult, 0, 'levels');
                $ref_id = pg_Result($selectResult, 0, 'id');
                $progression = pg_Result($selectResult, 0, 'progression');
                $standard = pg_Result($selectResult, 0, 'core_standards_id');
        	
		$_SESSION["ref_id"] = $ref_id;
		$_SESSION["level"] = 2; 
		$_SESSION["standard"] = $learningstandard;
		$_SESSION["progression"] = $progression;
		$_SESSION["levels"] = $levels;
		$_SESSION["item_type_id_raw_data"] = $typeid;
		$rawData = $_SESSION["item_type_id_raw_data"];
		
                //do the insert...
                $insert = "insert into levelattempts (start_time, user_id,level,learning_standards_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
                $insert .= $_SESSION["user_id"];
                $insert .= ",";
                $insert .= $_SESSION["level"];
                $insert .= ",'";
                $insert .= $_SESSION["ref_id"];
                $insert .= "',3);";

                $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
        }
}

//end of class
}
?>
