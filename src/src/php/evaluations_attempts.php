<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class EvaluationsAttempts
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
 	$insert = "insert into evaluations_attempts (start_time,evaluations_id,user_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["evaluations_id"];
        $insert .= ",";
        $insert .= $_SESSION["user_id"];
        $insert .= ");";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get attempt id
        $select = "select id from evaluations_attempts where user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " ORDER BY start_time DESC LIMIT 1;";

        //get db result
        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the attempt_id
                $attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempt_id"] = $attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

}

?>
