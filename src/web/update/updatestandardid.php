<!DOCTYPE html>

<html>

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<?php
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
?>

<?php

$response = "";

$select = "select * from learning_standards where id = '";
$select .= $_POST["standardid"];
$select .= "';";
        
//get db result
$selectResult = pg_query($conn,$select) or die('Could not connect: ' . pg_last_error());
dbErrorCheck($conn,$selectResult);

//get numer of rows
$num = pg_num_rows($selectResult);

if ($num > 0)
{
	$update = "update users SET failed_attempts=0, level = 1,ref_id = ( select ref_id from learning_standards where id = '";
	$update .= $_POST["standardid"];
	$update .= "') where username = '";
	$update .= $_SESSION["username"];
	$update .= "';";

	$updateResult = pg_query($conn,$update);
	$errorCheck = dbErrorCheck($conn,$updateResult);
	
	$response = "Success";
	
	//setLevelSessionVariables($conn,$_SESSION["user_id"]);
}
else
{
	$response = "Standard does not exist";
}

pg_close($conn);
?>

</head>

<body>

<?php
echo $response;
?>


</body>

</html>

