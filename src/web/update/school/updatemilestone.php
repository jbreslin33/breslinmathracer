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

$update = "update users SET room_id = ";
$update .= $_POST["room_id"];
$update .= " where id = '";
$update .= $_POST["user_id"];
$update .= "';";

error_log($update);


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

