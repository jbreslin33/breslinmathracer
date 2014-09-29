<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/normal.php");

//start new session
session_start();
$standardid = $_GET["standardid"];

$databaseConnection = new DatabaseConnection();

$update = "update users SET core_standards_id = '";
$update .= $standardid;
$update .= "';";

$updateResult = pg_query($databaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

//do normal php
$normal = new Normal(1);

include_once(getenv("DOCUMENT_ROOT") . "/web/php/full_return_string.php");
?>
