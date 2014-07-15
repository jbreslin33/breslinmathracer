<?php

class Sessions
{
    private $mDatabaseConnection;

function __construct()
{
  	$this->mDatabaseConnection = new DatabaseConnection();
}

public function setSessionVariables()
{
	if ($_SESSION["subject_id"] == NULL)
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
                $_SESSION["ref_id"]           = $ref_id;
		
		if ($ref_id == 'evaluation')
		{
		
			//do nothing for now
			//setEvaluation($this->mDatabaseConnection->getConn(),$user_id);
		}
		else
		{

       			$transaction_code = pg_Result($result, 0, 'transaction_code');
       			$level            = pg_Result($result, 0, 'level');
			$_SESSION["transaction_code"] = $transaction_code;
       			$_SESSION["level"]            = $level;
	
			$this->setRegularGame();
		}
	}
}

public function setRegularGame()
{
	//passed
	if ($_SESSION["transaction_code"] == 1)
	{
 		$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
		$levelVar++;
               	$_SESSION["level"]            = $levelVar;
       	}
			
	//failed
	if ($_SESSION["transaction_code"] == 2)
	{
		if ($_SESSION["level"] > 1)
		{
 			$levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
			$levelVar--;
                	$_SESSION["level"]            = $levelVar;
		}
       	}
	$ref = $_SESSION["ref_id"];
	
	$query = "select * from learning_standards where id = '";
       	$query .= $_SESSION["ref_id"];
       	$query .= "';";

	//get db result
       	$result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

	//get numer of rows
       	$num = pg_num_rows($result);

       	if ($num > 0)
       	{
       		//get the id from user table
               	$standard = pg_Result($result, 0, 'core_standards_id');
               	$progression = pg_Result($result, 0, 'progression');
               	$levels = pg_Result($result, 0, 'levels');

               	//set level_id
               	$_SESSION["standard"] = $standard;
               	$_SESSION["progression"] = $progression;
               	$_SESSION["levels"] = $levels;
       	}
       	else
       	{
               	echo "error no user";
       	}
}
}
?>
