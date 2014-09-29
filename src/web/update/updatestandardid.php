<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

//start new session
session_start();
$standardid = $_GET["standardid"];

$databaseConnection = new DatabaseConnection();

$update = "update users SET core_standards_id = '";
$update .= $standardid;
$update .= "';";

$updateResult = pg_query($databaseConnection->getConn(),$update) or die('Could not connect: ' . pg_last_error());

header("Location: /web/home/home.php");

?>
