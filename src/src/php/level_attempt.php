<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class LevelAttempt 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
 	$insert = "insert into levelattempts (start_time,user_id,level,learning_standards_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $_SESSION["level"];
        $insert .= ",'";
        $insert .= $_SESSION["ref_id"];
        $insert .= "');";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get attempt id
        $select = "select id from levelattempts where user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " AND level = ";
        $select .= $_SESSION["level"];
        $select .= " AND learning_standards_id = '";
        $select .= $_SESSION["ref_id"];
        $select .= "' ORDER BY start_time DESC;";

        //get db result
        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the attempt_id
                $attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["attempt_id"] = $attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

}

?>
