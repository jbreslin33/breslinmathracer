<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/check_for_spaces.php"); 

include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/signup.php");

session_start();

$signup = new Signup();

//set school_name, username and password
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["first_name"] = $_POST["firstname"];
$_SESSION["last_name"]   = $_POST["lastname"];

$signup->fireUp();

       		
?>
