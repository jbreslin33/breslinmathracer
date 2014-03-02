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

<select name="level">

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

<?php
$query = "select end_time, level from levelattempts where passed = 't' and user_id = ";
$query .= $_SESSION["user_id"];
$query .= " and ref_id = '";
$query .= $_SESSION["ref_id"];
$query .= "' order by level;";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);

echo '<table border=\"1\">';
for($i = 0; $i < $_SESSION["levels"]; $i++)
{
	$match = false;
	//lets loop and see if we have a level match from resultset
	for($r = 0; $r < $numrows; $r++)
	{
        	$row = pg_fetch_array($result, $r);
		if ($row[1] == $i)
		{
			$match = true;
        		echo '<tr bgcolor="#00FF00">';
        		echo '<td>';
        		echo $row[0];
        		echo '</td>';
        		echo '<td>';
        		echo $row[1];
        		echo '</td>';
        		echo '</tr>';
		} 
	}
	//if no match lets make it red
	if ($match == false)
	{
        	echo '<tr bgcolor="#FF0000">';
        	echo '<td>';
        	echo 'Incomplete';
        	echo '</td>';
        	echo '<td>';
        	echo $i;
        	echo '</td>';
        	echo '</tr>';
	}
}
pg_free_result($result);

echo '</table>';
?>

</body>
</html>
