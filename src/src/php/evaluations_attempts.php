<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class EvaluationsAttempts
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
}
public function insert()
{
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",";
        $insert .= $_SESSION["evaluations_id"];
        $insert .= ");";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        $query = "select id from evaluations_attempts where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;
        }

        //set sessions for signup
        $_SESSION["ref_id"] = 'normal';
        $_SESSION["subject_id"] = 1;
}

public function update()
{
        $insert = "update evaluations_attempts SET end_time = CURRENT_TIMESTAMP";
        $insert .= " WHERE id = ";
        $insert .= $_SESSION["evaluations_attempts_id"];
        $insert .= ";";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
}
}
?>
