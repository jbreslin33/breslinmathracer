<?php

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

	$databaseConnection = new DatabaseConnection();
	$user_id = $databaseConnection->selectUserID($_SESSION["username"], $_SESSION["password"]);

	if ($user_id)
	{
        	//set sessions
        	$_SESSION["user_id"] = $user_id;
        	$_SESSION["Login"] = "YES";

        	//SESSION
        	$sessions = new Sessions();
        	$sessions->setSessionVariables();
		
	}
	else
	{
        	$_SESSION["Login"] = "NO";
        	$problem = "no_user";
        	$_SESSION["user_id"] = 0;
	}

	if ($problem == "")
	{
        	header("Location: /web/home/home.php");
	}
	else
	{
        	if ($_SESSION["subject_id"] == 1)
        	{
                	header("Location: login_form_math.php?message=$problem");
       		}
        	if ($_SESSION["subject_id"] == 2)
        	{
                	header("Location: login_form_ela.php?message=$problem");
        	}
	}
}

}

?>
