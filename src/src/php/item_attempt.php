<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class ItemAttempt 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
}

public function insert()
{
        $it = $_SESSION["item_types_id"];
 	$insert = "insert into item_attempts (start_time,evaluations_attempts_id,transaction_code,item_types_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["evaluations_attempts_id"];
        $insert .= ",0,'";
        $insert .= $_SESSION["item_types_id"];
        $insert .= "');";

        //get db result
        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get item_attempt id
        $select = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id where evaluations_attempts.user_id = ";
        $select .= $_SESSION["user_id"];
        $select .= " ORDER BY item_attempts.start_time DESC;";
 
        //get db result
        $selectResult = pg_query($this->mDatabaseConnection->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $_SESSION["item_attempt_id"] = $item_attempt_id;
        }
        else
        {
                echo "error no attempt_id";
        }
}

public function update()
{
	//for timestables
	if ($_SESSION["ref_id"] == "timestables")
	{
		if (!isset($_SESSION["timestables_score"]))
		{
			$_SESSION["timestables_score"] = 0;
		}
		if (!isset($_SESSION["timestables_score_today"]))
		{
			$_SESSION["timestables_score_today"] = 0;
		}
			
		$score = intval($_SESSION["timestables_score"]);
		$today = intval($_SESSION["timestables_score_today"]);
		if ($score  > $today)
		{
			$_SESSION["timestables_score_today"] = $_SESSION["timestables_score"];	
		}

        	if (intval($_SESSION["item_transaction_code"]) == 1)
		{
			$score++;
			$_SESSION["timestables_score"] = $score;	
			$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'s1','');";
			$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		}
		else
		{
			$_SESSION["timestables_score"] = 0;	
			$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'s20','');";
			$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		}
		
	}

	$query = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where item_attempts.end_time is null AND user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " order by item_attempts.start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["item_attempt_id"] = $item_attempt_id;

		$insert = "update item_attempts SET end_time = CURRENT_TIMESTAMP, transaction_code = ";
        	$insert .= $_SESSION["item_transaction_code"];
		$insert .= " WHERE id = ";		
        	$insert .= $_SESSION["item_attempt_id"];
        	$insert .= ";";

        	//get db result
        	$insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
	}
}

}

?>
