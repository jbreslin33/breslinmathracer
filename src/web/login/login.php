<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/login.php");

//start new session
session_start();

$_SESSION["subject_id"] = $_GET["subjectid"];

if ($_SESSION["subject_id"] == "")
{
        header("Location: /index.html");
}

$_SESSION["password"] = $_POST["password"];
$_SESSION["username"] = $_POST["username"];
$_SESSION["school_id"] = "1";

$login = new Login();
?>
