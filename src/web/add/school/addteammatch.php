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

$update = "insert into teams_matches (matches_id,team_id,score) values (";
$update .= $_POST["match_id"];
$update .= ",";
$update .= $_POST["team_id"];
$update .= ",0);";

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
