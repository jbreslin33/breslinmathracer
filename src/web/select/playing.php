<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

<html>

<?php
header("Refresh: 10;");
?>

<head>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
echo "<br>";
include(getenv("DOCUMENT_ROOT") . "/web/select/links.php");


echo "<br><b><u>My Students:<u><b><br>";

$query = "select * from users;";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>

<table border="1">
	<tr>
   		<th>ID</th>
   		<th>USERNAME</th>
   		<th>PASSWORD</th>
   		<th>FIRST NAME</th>
   		<th>LAST NAME</th>
   		<th>LEVEL ID</th>
   		<th>START TIME</th>
   		<th>SCORE</th>
  	</tr>
<?php

// Loop on rows in the result set.
for($ri = 0; $ri < $numrows; $ri++)
{
	$row = pg_fetch_array($result, $ri);
	
	$query = "select * from games_attempts where user_id = "; 
	$query .=  $row["id"];
	$query .= " AND game_attempt_time_start >= 'today'";  
	$query .=  " ORDER BY game_attempt_time_start DESC LIMIT 1";
	$query .= ";";

	$resultInner = pg_query($conn,$query);
	dbErrorCheck($conn,$resultInner);
	$numrowsInner = pg_numrows($resultInner);

	for($i = 0; $i < $numrowsInner; $i++)
	{
		//1 row with data		
		echo "<tr bgcolor=", $bg_color, ">\n";
    		echo " <td>", $row["id"], "</td>
   		<td>", $row["username"], "</td>
   		<td>", $row["password"], "</td>
   		<td>", $row["first_name"], "</td>
   		<td>", $row["last_name"], "</td>";
		$rowInner = pg_fetch_array($resultInner, $i);
   		echo "<td>", $rowInner["level_id"], "</td>";
   		echo "<td>", $rowInner["game_attempt_time_start"], "</td>";
   		echo "<td>", $rowInner["score"], "</td>";
	}	
  	
	echo "</tr>
  	";
}

pg_close($conn);
?>

</table>

</body>

</html>

