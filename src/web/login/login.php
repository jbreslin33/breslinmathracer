<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

include(getenv("DOCUMENT_ROOT") . "/src/database/select_user_id.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

$db = new DatabaseConnection();
$conn = $db->getConn();

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

//set user sessions
$user_id = selectUserID($conn, $_SESSION["username"], $_SESSION["password"]);
if ($user_id)
{
	//set sessions
        $_SESSION["user_id"] = $user_id;
      	$_SESSION["Login"] = "YES";
	setLevelSessionVariables($conn,$user_id);
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

pg_close();
?>
