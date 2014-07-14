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

$update = "update users SET last_name = '";
$update .= $_POST["last_name"];
$update .= "' where id = '";
$update .= $_POST["id"];
$update .= "';";

$updateResult = pg_query($conn,$update);
	
$response = "Success";

?>

</head>

<body>

<?php
echo $response;
?>

</body>

</html>

