<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class ItemAttempt 
{
    private $mDatabaseConnection;

function __construct($application,$itemtypeid,$question,$answers,$datenow)
{
	$this->mApplication = $application;
	$this->mDateNow = $datenow; //key for client and server to be on same page atleast initially until we get an real db id
	$this->mID = 0;
	$this->mItemTypeID = $itemtypeid;
        $this->mTransactionCode = 0;
        $this->mQuestion = $question;
        $this->mAnswers = $answers;
        $this->mAnswer = '';

	$this->insert();
}

public function insert()
{
	$db = new DatabaseConnection();
 	$insert = "insert into item_attempts (start_time,evaluations_attempts_id,transaction_code,item_types_id,question,answers) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $this->mApplication->mEvaluationsAttempt->mID;
        $insert .= ",0,'";
        $insert .= $this->mItemTypeID;
	$insert .= "','";  
	$insert .= $this->mQuestion;  
	$insert .= "','";  
	$insert .= $this->mAnswers;  
        $insert .= "');";

        //get db result
        $insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get item_attempt id
        $select = "select item_attempts.id from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id where evaluations_attempts.user_id = ";
        $select .= $this->mApplication->mLoginStudent->mUserID;
        $select .= " ORDER BY item_attempts.start_time DESC LIMIT 1;";
 
        //get db result
        $selectResult = pg_query($db->getConn(),$select) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($selectResult);

        if ($num > 0)
        {
                //get the id from user table
                $item_attempt_id = pg_Result($selectResult, 0, 'id');

                //set level_id
                $this->mID = $item_attempt_id;

		//fill php vars
        	$returnString = "161,";
        	$returnString .= $this->mDateNow;
        	$returnString .= ",";
        	$returnString .= $this->mID;
		echo $returnString;		
        }
        else
        {
		error_log('no attempt id');
        }
}

public function update($itemattemptid,$transactioncode,$answer)
{
	if ($this->mAnswer == '')
	{
		$db = new DatabaseConnection();
		$this->mID = $itemattemptid;
		$this->mTransactionCode = $transactioncode;
		$this->mAnswer = $answer;
        	$answerTxt = $this->mAnswer;
        	$answerTxt = htmlentities($answerTxt, ENT_QUOTES);

        	$query = "update item_attempts SET end_time = CURRENT_TIMESTAMP, transaction_code = ";
        	$query .= $this->mTransactionCode;
        	$query .= ", user_answer = '";
        	$query .= $answerTxt;
        	$query .= "' WHERE id = ";
        	$query .= $this->mID;
        	$query .= ";";
		
        	$updateResult = pg_query($db->getConn(),$query) or die('Could not connect: ' . pg_last_error());
	}

	$returnString = "162,";
	$returnString .= $this->mID;
	$returnString .= ",1";
	echo $returnString;
}

}

?>
