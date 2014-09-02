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
 	$insert = "insert into levelattempts (start_time,level,learning_standards_attempts_id) VALUES (CURRENT_TIMESTAMP,1,";
        $insert .= $_SESSION["learning_standards_attempts_id"];
        $insert .= ");";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get attempt id
        $select = "select levelattempts.id from levelattempts JOIN learning_standards_attempts ON learning_standards_attempts.id=levelattempts.learning_standards_attempts_id where user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " ORDER BY levelattempts.start_time DESC;";

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
