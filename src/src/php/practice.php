<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

class Practice 
{
    private $mDatabaseConnection;

function __construct($typeid, $startNew, $leavePractice)
{
        $this->logs = true;
        if ($this->logs)
        {
                error_log('Practice::Practice');
        }

	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mTypeID = $typeid;

	if ($this->mTypeID == '')
	{
        	//get learning_standard_attempt id
		$query = "select item_attempts.item_types_id from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where user_id = ";
		$query .= $_SESSION["user_id"];
        	$query .= " order by item_attempts.start_time desc limit 1;";
        
		$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
        
		$num = pg_num_rows($result);

        	if ($num > 0)
        	{
                	//get the attempt_id
                	$this->mTypeID = pg_Result($result, 0, 'item_types_id');

                	//set level_id
                	$_SESSION["item_types_id"] = $this->mTypeID;
        	}
	}

//need to check typeid if null get one
	if ($leavePractice)
	{
		$this->leavePractice();
	}
	else
	{
		if ($startNew)
		{
                	$this->insertNewAttempt();
		}
		else
		{
                	$this->continueAttempt();
		}
	}
}

public function insertNewAttempt()
{
      	//insert learning_standard_attempt
        $insert = "insert into evaluations_attempts (start_time,user_id,evaluations_id) VALUES (CURRENT_TIMESTAMP,";
        $insert .= $_SESSION["user_id"];
        $insert .= ",2);";

        $insertResult = pg_query($this->mDatabaseConnection->getConn(),$insert) or die('Could not connect: ' . pg_last_error());

        //get learning_standard_attempt id
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
        $_SESSION["ref_id"] = 'practice';
        $_SESSION["subject_id"] = 1;

        $this->setRawData();
 
	$item_attempt = new ItemAttempt();
        $item_attempt->insert();

}

public function continueAttempt()
{
//right here......is alexis sanchez error i think...
        $_SESSION["ref_id"] = 'practice';

        $this->setRawData();
	
	$item_attempt = new ItemAttempt();
        $item_attempt->insert();
}

//you are not using user id in selects that is why it skipped eval....
public function setRawData()
{
	//tables hack

        $query = "select core_standards_id from item_types where id = '";
        $query .= $this->mTypeID;
        $query .= "';";
        
	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
	$num = pg_num_rows($result);

	$core_standards_id = '';

        if ($num > 0)
        {
                $core_standards_id = pg_Result($result, 0, 'core_standards_id');
	}

	if ($core_standards_id == '3.oa.c.7')
	{
		//lets randomize ....
		$randomNumber = rand(1,81);
		$randid = $core_standards_id;
		$randid .= "_"; 
		$randid .= $randomNumber; 
		$this->mTypeID = $randid;
	}

	$_SESSION["item_types_id"] = $this->mTypeID;
	$raw = $this->mTypeID; 
	$raw .= ":";
	$raw .= "0";
       	$_SESSION["raw_data"] = $raw; 
}

public function leavePractice()
{
	// lets close out this practice
        $update = "update evaluations_attempts set end_time = CURRENT_TIMESTAMP WHERE id = ";
        $update .= $_SESSION["evaluations_attempts_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

  	//get evaluations_attempts id
        $query = "select evaluations_attempts.id, evaluations.description from evaluations_attempts JOIN evaluations ON evaluations_attempts.evaluations_id=evaluations.id where user_id = ";
        $query .= $_SESSION["user_id"];
        $query .= " AND evaluations_id != 2 order by start_time desc limit 1;";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the attempt_id
                $evaluations_attempts_id = pg_Result($result, 0, 'id');

                //set level_id
                $_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;

                $ref_id                                       = pg_Result($result, 0, 'description');
                $_SESSION["ref_id"]  = $ref_id;

                if ($ref_id == 'normal')
                {
                        $normal = new Normal();
                }
        }
}
//end of class
}
?>
