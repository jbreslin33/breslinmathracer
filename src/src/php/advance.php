<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/evaluation.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

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

	$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'$levelVar','$levelsVar');";
	$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
	
        if ($levelVar < $levelsVar)
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'bumpLevelUp','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
                $this->bumpLevelUp($levelVar);
        }
        else
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'newLearningStandard','');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
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

public function newLearningStandard()
{
        if ($_SESSION["ref_id"] == 'evaluation')
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'evaluation','new Normal');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		return new Normal(1);
	}
        if ($_SESSION["ref_id"] == 'remediate')
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'remediate','new Evaluation');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		return new Evaluation();
        }
        if ($_SESSION["ref_id"] == 'normal')
        {
		$equery = "insert into error_log (error_time,error,username) values (CURRENT_TIMESTAMP,'normal','new Evaluation');";
		$eresult = pg_query($this->mDatabaseConnection->getConn(),$equery);
		return new Evaluation();
	}
}

//end of class
}
?>
