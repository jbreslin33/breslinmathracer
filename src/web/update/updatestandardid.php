<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<?php
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
include(getenv("DOCUMENT_ROOT") . "/src/database/set_level_session_variables.php");

//setLevelSessionVariablesRewind($conn,$_SESSION["user_id"]);

$response = "";

//insert into levelattempts (start_time,user_id,level,ref_id,transaction_code) VALUES (CURRENT_TIMESTAMP,7,1,( select ref_id from learning_standards where id = 'k.cc.a.1'),2);

        $insert = "insert into levelattempts (start_time, user_id,level,ref_id,transaction_code) VALUES (CURRENT_TIMESTAMP,";
	$insert .= $_SESSION["user_id"];
	$insert .= ",1,'"; 
	$insert .= "( select ref_id from learning_standards where id = '";
	$insert .= $_POST["standardid"]; 
	$insert .= "'),2);";

        $insertResult = pg_query($conn,$insert) or die('Could not connect: ' . pg_last_error());
        dbErrorCheck($conn,$insertResult);
	
	$response = "Success";
?>
</head>
<body>
<?php
echo $response;
?>
</body>
</html>
