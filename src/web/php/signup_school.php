<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/signup_school.php");


$_SESSION["username"] = $_GET["username"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["name"] = $_GET["name"];
$_SESSION["city"] = $_GET["city"];
$_SESSION["state"] = $_GET["state"];
$_SESSION["zip"] = $_GET["zip"];
$_SESSION["email"] = $_GET["email"];
$_SESSION["student_code"] = $_GET["student_code"];

$signupSchool = new SignupSchool();

if ($_SESSION["LOGGED_IN"] == 1)
{
        if ($_SESSION["role"] == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
        }
        if ($_SESSION["role"] == 2)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_teacher.php");
        }
        if ($_SESSION["role"] == 3)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_login_school.php");
        }
}
else
{
        if ($signupSchool->mUsernameExists == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_school_username_taken.php");
        }
        if ($signupSchool->mNameCityStateZipExists == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_school_name_taken.php");
        }
/*
        if ($signupSchool->mBadPassword == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_password.php");
        }
*/
}

?>
