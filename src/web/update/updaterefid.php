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
$query = "update users SET ref_id = '";
$query .= $_POST["refid"];
$query .= "', level=1 where username = '";
$query .= $_SESSION["username"];
$query .= "';";

$result = pg_query($conn,$query);
pg_close($conn);
?>

</head>

<body>

<br><b><u>Student Leaders:<u><b><br>
<?php
echo $query;
?>


</body>

</html>

