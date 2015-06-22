<?php
error_log("web school crate");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/school_create.php");


$_SESSION["username"] = $_GET["username"];
$_SESSION["password"] = $_GET["password"];
$_SESSION["name"] = $_GET["name"];
$_SESSION["city"] = $_GET["city"];
$_SESSION["state"] = $_GET["state"];
$_SESSION["zip"] = $_GET["zip"];

$zip = $_SESSION["zip"];

error_log($zip);

$create = new SchoolCreate();

if ($_SESSION["LOGGED_IN"] == 1)
{
	error_log('we are logged in next check role');
        if ($_SESSION["role"] == 1)
        {
                error_log('role 1');
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
        }
        if ($_SESSION["role"] == 2)
        {
                error_log('role 2');
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_teacher.php");
        }
        if ($_SESSION["role"] == 3)
        {
                error_log('role 3');
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string_school.php");
        }
}
else
{
/*
        if ($login->mBadUsername == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_username.php");
        }
        if ($login->mBadPassword == 1)
        {
                include_once(getenv("DOCUMENT_ROOT") . "/web/php/return_bad_password.php");
        }
*/
}


?>
