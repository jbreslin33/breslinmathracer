<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Scroll 
{

function __construct()
{
        $this->logs = false;
        if ($this->logs)
        {
                error_log('Scroll::Scroll');
        }

	$this->mDatabaseConnection = new DatabaseConnection();
	$this->setScroll();
}

public function setScroll()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{

		$question_array = array();
		$answer_array = array();

		$query = "select question, user_answer from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where user_id = ";
		$query .= $_SESSION["user_id"];
		$query .= " AND item_attempts.transaction_code != 1 order by item_attempts.start_time desc LIMIT 5";
	
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('no connection: ' . pg_last_error());
       		$numberOfResults = pg_num_rows($result);

		$itemString = ""; 

		for($i=0; $i < $numberOfResults; $i++)
        	{
			$q = trim(pg_Result($result, $i, 'question'));	
			$itemString .= str_replace(",","",$q);	
		
			$a = trim(pg_Result($result, $i, 'user_answer'));	
			$itemString .= str_replace(",","",$a);	
		}
        	$_SESSION["scroll"] = $itemString;
	}
}
//end of class
}
?>
