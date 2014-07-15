<?php

include(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include(getenv("DOCUMENT_ROOT") . "/src/php/session_refresh.php");

//start new session
session_start();

$session_refresh = new SessionRefresh()

?>

