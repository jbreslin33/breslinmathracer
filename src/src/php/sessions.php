<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/standard.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");

//this class is for when you first login or signup it is not used other wise 
class Sessions
{
    private $mDatabaseConnection;

function __construct()
{
  	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}
public function process()
{
	if (isset($_SESSION["subject_id"]) == false)
	{
		$_SESSION["subject_id"] = 1;
	}
//wei is not getting a value here becuase he finished the latest evaluation attempts
	//get the latest evaluations_attempts one that is not complete
	$query = "select evaluations_attempts.id, evaluations.description from evaluations_attempts JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.end_time is null AND user_id = ";
	$query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";
	
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

	//$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'sessions_a','');";
	//$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
                
        $num = pg_num_rows($result);

        if ($num > 0)
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'old normal','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);

                $evaluations_attempts_id = pg_Result($result, 0, 'id');
                $ref_id                  = pg_Result($result, 0, 'description');

		$_SESSION["evaluations_attempts_id"] = $evaluations_attempts_id;
                $_SESSION["ref_id"]  = $ref_id;

		if ($ref_id == 'normal')
		{
			$normal = new Normal(0);
		}
		if ($ref_id == 'practice')
		{
			$practice = new Practice('',0,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(2,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(3,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(4,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(5,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(6,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(7,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(8,1,0);
		}
		if ($ref_id == 'timestables_2')
		{
			$timestables = new TimesTables(9,1,0);
		}
		if ($ref_id == 'timestables')
		{
			$timestables = new TimesTables(2,1,0);
		}
	}
	else
	{
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'new normal','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		$normal = new Normal(1);
	}
}
//end class
}
?>
