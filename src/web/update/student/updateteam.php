<!DOCTYPE html>

<html>

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<?php
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$response = "";

$update = "update users SET team_id = ";
$update .= $_POST["team_id"];
$update .= " where id = '";
$update .= $_SESSION["user_id"];
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

