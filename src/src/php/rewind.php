<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Rewind 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
	$this->rewindCurrentLearningStandard();

        $levelVar = (int) preg_replace('/[^0-9]/', '', $_SESSION["level"]);
        $this->bumpLevelDown($levelVar);
}

public function rewindCurrentLearningStandard()
{
        //update levelattempts to say we failed. keep in mind transaction_code 2 is same as level bump down.
        $update = "update levelattempts set end_time = CURRENT_TIMESTAMP, transaction_code = 2 WHERE id = ";
        $update .= $_SESSION["attempt_id"];
        $update .=  ";";

        $updateResult = pg_query($this->mDatabaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());
}

public function bumpLevelDown($levelVar)
{
        //you are just going down one level is same learning_standard so just set session vars to reflect that.
        if ($levelVar > 1)
        {
                $levelVar--;
                $_SESSION["level"] = $levelVar;
        }
}


//end of class
}
?>
