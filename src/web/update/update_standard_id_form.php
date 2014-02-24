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
$query = "select id,standard from learning_standards order by progression;";
$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>
	<p><b> Select Standard ID: </p></b>
	
	<form method="post" action="/web/update/updatestandardid.php">

<select name="standardid">

<?php
        // Loop on rows in the result set.
        for($ri = 0; $ri < $numrows; $ri++) 
        {
                $row = pg_fetch_array($result, $ri);
                echo "<option value=\"$row[0]\">$row[0]</option>";
        }
        //pg_close($conn);
?>

</select>

	<p><input type="submit" value="UPDATE" /></p>

	</form>
<?php
$query2 = "select id,standard from learning_standards order by progression;";
$result2 = pg_query($conn,$query2);
dbErrorCheck($conn,$result2);
$numrows = pg_numrows($result2);

echo '<table>';
for($i = 0; $i < $numrows; $i++) 
{
        $row = pg_fetch_array($result2, $i);

	echo '<tr>';
	echo '<td>';
	echo $row[0];
	echo '</td>';
	echo '<td>';
	echo $row[1];
	echo '</td>';
	echo '</tr>';
}
pg_free_result($result2);

echo '</table>';
?>

</body>
</html>
