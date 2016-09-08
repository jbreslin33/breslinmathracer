<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class EvaluationsAttempts
{

function __construct($application,$evaluationsID,$datenow)
{
        $this->logs = false;
        if ($this->logs)
        {
		error_log("EvaluationsAttempts::EvaluationsAttempts");
        }

	$this->mApplication = $application;
	$this->mEvaluationsID = $evaluationsID;
	$this->mID = 0;
	$this->mDateNow = $datenow;

	//score		
	$this->mQuestions = 0;
	$this->mScore_needed = 0;
	$this->mScore = 0;

	$this->setScoreNeeded();

	$this->mItemAttemptsArray = array();

	$this->insert();
}

public function setScoreNeeded()
{
	$query = "select questions, score_needed from evaluations where id = ";
        $query .= $this->mEvaluationsID;
        $query .= ";";

	$db = new DatabaseConnection();
        $result = pg_query($db->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $questions = pg_Result($result, 0, 'questions');
                $score_needed = pg_Result($result, 0, 'score_needed');

		$this->mQuestions = $questions;
		$this->mScore_needed = $score_needed;
        }
}

public function insert()
{
	$db = new DatabaseConnection();
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $this->mApplication->mLoginStudent->mUserID;
        $insert .= ",";
        $insert .= $this->mEvaluationsID;
        $insert .= ");";
	
        $insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

	//get the id of one u just put in
        $query = "select id from evaluations_attempts where user_id = ";
        $query .= $this->mApplication->mLoginStudent->mUserID;
        $query .= " order by start_time desc limit 1;";

        $result = pg_query($db->getConn(),$query) or die('Could not connect: ' . pg_last_error());
	
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $this->mID = $evaluations_attempts_id;
        }
}

//might not even use this as it basically closes out the next day. maybe close it on session timeout
public function update()
{
	$insert = '';
        $insert .= "update evaluations_attempts SET end_time = CURRENT_TIMESTAMP";
        $insert .= " WHERE id = ";
        $insert .= $this->mID;
        $insert .= ";";

       	//get db result
	$db = new DatabaseConnection();
       	$insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());
}
}//end class
?>
