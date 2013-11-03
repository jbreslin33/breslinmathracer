<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

include(getenv("DOCUMENT_ROOT") . "/src/database/select_school_id.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/select_user_id.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/select_student_id.php");

//db connection
$conn = dbConnect();

//start new session
session_start();

$_SESSION["school_name"] = $_POST["school"];

//check to see if it's a school or a regular user logging in
if ($_POST["username"] == $_POST["school"])  
{
	//it's a school
	$_SESSION["username"] = "root";
}
else
{
	//it's a regular user
	$_SESSION["username"] = $_POST["username"];
}
$_SESSION["password"] = $_POST["password"];

//let's set a var that will be false if there was a problem..
$problem = "";

//set school sesssion
$school_id = selectSchoolID($conn,$_SESSION["school_name"]);
if ($school_id)
{
	$_SESSION["school_id"] = $school_id;
}
else
{
	$_SESSION["school_id"] = 0;
        $_SESSION["school_name"] = "";
	$problem = "no_school";	
}

//set user sessions
$user_id = selectUserID($conn, $_SESSION["school_id"],$_SESSION["username"],$_SESSION["password"]);
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
        header("Location: login_form.php?message=$problem");
}

pg_close();
?>

