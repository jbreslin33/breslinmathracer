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
//update users SET ref_id = ( select ref_id from learning_standards where id = 'k.oa.a.2') where username = 'v1401';
$query = "update users SET ref_id = ( select ref_id from learning_standards where id = '";
$query .= $_POST["standardid"];
$query .= "') where username = '";
$query .= $_SESSION["username"];
$query .= "';";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
pg_close($conn);
?>

</head>

<body>

<br><b><u>Sql update:<u><b><br>
<?php
echo $query;
?>


</body>

</html>

