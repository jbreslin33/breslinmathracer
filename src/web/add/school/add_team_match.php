<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>ADD TEAM TO MATCH</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> ADD TEAM TO MATCH: </p></b>
	
	<form method="post" action="/web/add/school/addteammatch.php">
<select name="match_id">

<?php
$query = "select id, start_time, end_time from matches where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by start_time desc;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        echo "<option value=\"$row[0]\">$row[0]</option>";
}
?>

</select>
<select name="team_id">

<?php
$query = "select id, name from teams where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result); 

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
