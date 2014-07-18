<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/standard.php");

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

	$query  = "select levelattempts.transaction_code, levelattempts.learning_standards_id, levelattempts.level from levelattempts INNER JOIN learning_standards ON learning_standards.id=levelattempts.learning_standards_id JOIN core_standards ON core_standards.id=learning_standards.core_standards_id JOIN core_clusters ON core_clusters.id=core_standards.core_clusters_id JOIN core_domains_subjects_grades ON core_domains_subjects_grades.id=core_clusters.core_domains_subjects_grades_id JOIN core_subjects_grades ON core_subjects_grades.id=core_domains_subjects_grades.core_subjects_grades_id JOIN core_subjects ON core_subjects.id=core_subjects_grades.core_subjects_id where user_id = ";
	$query .= $_SESSION["user_id"];
	$query .= " order by start_time desc limit 1;";
	
        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
                
        //get numer of rows
        $num = pg_num_rows($result);

	$ref_id = 0;
	
        if ($num > 0)
        {
                $ref_id           = pg_Result($result, 0, 'learning_standards_id');
       		$transaction_code = pg_Result($result, 0, 'transaction_code');
       		$level            = pg_Result($result, 0, 'level');

                $_SESSION["ref_id"]  = $ref_id;
		$_SESSION["transaction_code"] = $transaction_code;
       		$_SESSION["level"]            = $level;
	
		if ($ref_id == 'evaluation')
		{
			$evaluation = new Evaluation();
		}
		else
		{
			$standard = new Standard();
		}
	}
}
//end class
}
?>
