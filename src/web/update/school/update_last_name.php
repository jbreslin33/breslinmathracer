<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE LAST NAME</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<ul>

<?php
session_start();
if ($_SESSION["role"] == 1)
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
        echo "<li><a href=\"/web/navigation/school/edit.php\">Edit</a></li>";
}
else
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> Select Student: </p></b>
	
	<form method="post" action="/web/update/school/updatelast_name.php">

<select name="user_id">

<?php
$query = "select id, username, first_name, last_name, score from users where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by last_name;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);


for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
	$string = $row[0];
	$string .= " ";
	$string .= $row[1];
	$string .= " ";
	$string .= $row[2];
	$string .= " ";
	$string .= $row[3];
	$string .= " ";
	$string .= $row[4];
      	echo "<option value=\"$row[0]\">$string</option>";
}
?>
</select>

<p><b> FIRST NAME: </p></b>


<input type="text" name="last_name">

</select>

	<p><input type="submit" value="UPDATE" /></p>

	</form>
	

</body>
</html>
