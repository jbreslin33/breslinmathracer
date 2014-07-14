<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/check_for_spaces.php"); 

include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/signup.php");

$db = new DatabaseConnection();
$conn = $db->getConn();

$signup = new Signup();

//start new session     
session_start();
	
//set school_name, username and password
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["first_name"] = $_POST["firstname"];
$_SESSION["last_name"]   = $_POST["lastname"];

$userNameString = $_SESSION["username"];

$space = checkForSpaces($userNameString);
$taken = $signup->checkForUser($_SESSION["username"]);

if ($taken || $space || $_SESSION["username"] == '')
{
	if ($taken)
	{
       		header("Location: /web/signup/signup_form.php?message=name_taken");
	}
	if ($space)
	{
       		header("Location: /web/signup/signup_form.php?message=no_spaces");
	}
	if ($_SESSION["username"] == '')
	{
       		header("Location: /web/signup/signup_form.php?message=no_name");
	}
	if ($_SESSION["first_name"] == '')
	{
       		header("Location: /web/signup/signup_form.php?message=no_first_name");
	}
	if ($_SESSION["last_name"] == '')
	{
       		header("Location: /web/signup/signup_form.php?message=no_last_name");
	}
}
else	
{
	//insert user
	$signup->insertIntoUsers($_SESSION["username"], $_SESSION["password"], $_SESSION["first_name"], $_SESSION["last_name"]);
	$user_id = $db->selectUserID($_SESSION["username"], $_SESSION["password"]);
	if ($user_id)
	{	 
               	//set sessions 
                $_SESSION["user_id"] = $user_id;
	}
	else
	{
               	$_SESSION["Login"] = "NO";
	}
	
	//set session levels

	$sessions = new Sessions($db);
	$sessions->setSessionVariables();

	$_SESSION["Login"] = "YES";
       	header("Location: /web/home/home.php");
       		
	//close db connection as we have the only var we needed - the id
       	pg_close();
}
?>
