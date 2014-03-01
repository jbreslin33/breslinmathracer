<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE STANDARD</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";
?>

<?php
$query = "select levels from learning_standards where ref_id = '";
$query .= $_SESSION["ref_id"]; 
$query .= "';"; 

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>
	<p><b> Select Level: </p></b>
	
	<form method="post" action="/web/update/updatelevel.php">

<select name="levels">

<?php
	if ($numrows > 0)
	{
                $row = pg_fetch_array($result, $ri);
                $levels = $row[0];

        	for($i = 0; $i < $levels; $i++) 
        	{
                	echo "<option value=\"$i\">$i</option>";
        	}
	}
?>

</select>

	<p><input type="submit" value="UPDATE" /></p>

	</form>

</body>
</html>
