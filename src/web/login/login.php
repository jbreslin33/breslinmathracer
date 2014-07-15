<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

//start new session
session_start();

$_SESSION["subject_id"] = $_GET["subjectid"];

if ($_SESSION["subject_id"] == "")
{
        header("Location: /index.html");
}

//let's set a var that will be false if there was a problem..
$problem = "";

$_SESSION["password"] = $_POST["password"];
$_SESSION["username"] = $_POST["username"];
$_SESSION["school_id"] = "1";
$_SESSION["school_name"] = "visitationbvm";

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
?>
