<!DOCTYPE html>

<html>

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<?php
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");
?>

<?php

$response = "";

$update = "update users SET username = '";
$update .= $_POST["username"];
$update .= "' where id = '";
$update .= $_POST["id"];
$update .= "';";

$updateResult = pg_query($conn,$update);
$errorCheck = dbErrorCheck($conn,$updateResult);
	
$response = "Success";

?>

</head>

<body>

<?php
echo $response;
?>

</body>

</html>

