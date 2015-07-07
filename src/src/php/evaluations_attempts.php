<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class EvaluationsAttempts
{

function __construct($application)
{
	$this->mApplication = $application;
	$this->mEvaluationsID = 1;
	$this->mID = 0;
}
public function insert()
{
	$db = new DatabaseConnection();
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $this->mApplication->mLoginStudent->mUserID;
        $insert .= ",";
        $insert .= $this->mEvaluationsID;
        $insert .= ");";
	
	error_log($insert);

        $insertResult = pg_query($db->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

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

        //set sessions for signup
}

public function update()
{
	$insert = '';
	error_log('mID next:');
	error_log($this->mID);
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
