<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

class Login 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->process();
}

public function process()
{
	//let's set a var that will be false if there was a problem..
	$problem = "";

        $query = "select id, first_name, last_name, core_standards_id from users where username = '";
        $query .= $_SESSION["username"];
        $query .= "' AND password = '";
        $query .= $_SESSION["password"];
        $query .= "';";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                //get the id from user table
                $first_name = pg_Result($result, 0, 'first_name');
                $last_name = pg_Result($result, 0, 'last_name');
                $user_id = pg_Result($result, 0, 'id');
                $core_standards_id = pg_Result($result, 0, 'core_standards_id');

		//set sessions
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["user_id"] = $user_id;
        	$_SESSION["LOGGED_IN"] = 1;
        	$_SESSION["raw_data"] = NULL; 
                $_SESSION["core_standards_id"] = $core_standards_id;

        	//SESSION
        	$sessions = new Sessions();
        }
        else
        {
        	$_SESSION["LOGGED_IN"] = 0;
        	$problem = "no_user";
        	$_SESSION["user_id"] = 0;
        }
}

}

?>
