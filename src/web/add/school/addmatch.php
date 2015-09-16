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

$update = "insert into matches (start_time,end_time,school_id) values ('";
$update .= $_POST["start_time"];
$update .= "','";
$update .= $_POST["end_time"];
$update .= "',";
$update .= $_SESSION["school_id"];
$update .= ");";

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
