<?php
include(getenv("DOCUMENT_ROOT") . "/src/php/signup_student.php");

//start new session
session_start();

$_SESSION["username"]   = $_GET["username"];
$_SESSION["password"]   = $_GET["password"];
$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"]  = $_GET["last_name"];
$_SESSION["core_standards_id"]  = 'k.cc.a.1';

$signup = new SignupStudent();
error_log('SignupStudent called');
include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_signup_student_string.php");
?>
