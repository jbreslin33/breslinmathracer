<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/remediate.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/standard.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

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
	$query = "select id, learning_standards_id from learning_standards_attempts where user_id = ";
	$query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";
	
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
                
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                $learning_standards_attempts_id               = pg_Result($result, 0, 'id');
                $ref_id                                       = pg_Result($result, 0, 'learning_standards_id');

		$_SESSION["learning_standards_attempts_id"] = $learning_standards_attempts_id;
                $_SESSION["ref_id"]  = $ref_id;

		if ($ref_id == 'evaluation')
		{
			$evaluation = new Evaluation();
		}
		if ($ref_id == 'remediate')
		{
			$remediate = new Remediate(0);
		}
		if ($ref_id == 'normal')
		{
			$normal = new Normal();
		}
	}
}
//end class
}
?>
