<?php

class ItemAttempt 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
 $insert = "insert into item_attempts (start_time,levelattempts_id,transaction_code,item_types_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["attempt_id"];
        $insert .= ",";
        $insert .= $_SESSION["item_transaction_code"];
        $insert .= ",";
        $insert .= $_SESSION["item_types_id"];
        $insert .= ");";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get item_attempt id
        $select = "select id from item_attempts where levelattempts_id = ";
        $select .= $_SESSION["attempt_id"];
        $select .= " ORDER BY start_time DESC;";
 
        //get db result
        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $level_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["level_attempt_id"] = $level_attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

}

?>
