<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/practice.php");

class Advance 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
       	$this->updateLevelAttempt();

        $levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
        $levelsVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["levels"]);

        if ($levelVar < $levelsVar)
        {
                $this->bumpLevelUp($levelVar);
        }
        else
        {
                $newLearningStandard = $this->newLearningStandard();
        }
}

public function updateLevelAttempt()
{
        //update levelattempts to say we passed. keep in mind transaction_code 1 is same as level bump.
        $update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
        $update .= $_SESSION["attempt_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

public function bumpLevelUp($levelVar)
{
        //you are just going up one level is same learning_standard so just set session vars to reflect that.
        $levelVar++;
        $_SESSION["level"] = $levelVar;
}

public function updateLearningStandardsAttempts()
{
        //update levelattempts to say we passed. keep in mind transaction_code 1 is same as level bump.
        $update = "update learning_standards_attempts set end_time = CURRENT_TIMESTAMP, transaction_code = 1 WHERE id = ";
        $update .= $_SESSION["learning_standards_attempts_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

public function newLearningStandard()
{
	$this->updateLearningStandardsAttempts();

        if ($_SESSION["ref_id"] == 'evaluation')
        {
		return new Normal(1);
	}
        if ($_SESSION["ref_id"] == 'remediate')
        {
		return new Evaluation();
        }
        if ($_SESSION["ref_id"] == 'normal')
        {
		return new Evaluation();
	}
	//practice needs to do so work to find out where to go next.
        if ($_SESSION["ref_id"] == 'practice')
        {
		//params of 0,0,1 will tell practice class to figure out where to go based on you last learning standard attempt that wasnt practice
		return new Practice(0,0,1);
	}
}

//end of class
}
?>
