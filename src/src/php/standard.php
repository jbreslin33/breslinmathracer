<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class Standard 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
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
                $levels = pg_Result($result, 0, 'levels');

                //set level_id
                $_SESSION["standard"] = "none";
                $_SESSION["progression"] = "1";
                $_SESSION["levels"] = $levels;
        }
        else
        {
                echo "error no user";
        }
}
//end of class
}
?>
