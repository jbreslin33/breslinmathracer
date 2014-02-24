<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_users.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/check_for_spaces.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/check_for_user.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/select_user_id.php"); 

//db connection
$conn = dbConnect();
        
//start new session     
session_start();
	
//set school_name, username and password
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

$userNameString = $_SESSION["username"];

$space = checkForSpaces($userNameString);
$taken = checkForUser($conn,$_SESSION["username"]);

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
}
else	
{
	//insert user
	insertIntoUsers($conn,$_SESSION["username"], $_SESSION["password"]);
	$user_id = selectUserID($conn, $_SESSION["username"], $_SESSION["password"]);
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
	setLevelSessionVariables($conn,$_SESSION["user_id"]);

	$_SESSION["Login"] = "YES";
       	header("Location: /web/home/home.php");
       		
	//close db connection as we have the only var we needed - the id
       	pg_close();
}
?>
