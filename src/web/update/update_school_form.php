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
	<p><b> Select School: </p></b>
	
	<form method="post" action="/web/update/updateteacher.php">

<select name="id">

<?php
$query = "select id, name from school order by name;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option value=\"0">"Select School"</option>";
for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
      	echo "<option value=\"$row[0]\">$row[1]</option>";
}
?>

</select>
	<p><input type="submit" value="UPDATE" /></p>

	</form>
	
</body>
</html>
