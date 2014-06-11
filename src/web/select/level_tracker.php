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
  	</tr>
<?php

// Loop on rows in the result set.
for($ri = 0; $ri < $numrows; $ri++)
{
	$row = pg_fetch_array($result, $ri);
   
	//1 row with data		
	echo "<tr bgcolor=", $bg_color, ">\n";
    	echo " <td>", $row["id"], "</td>
   	<td>", $row["username"], "</td>
   	<td>", $row["password"], "</td>
   	<td>", $row["first_name"], "</td>
   	<td>", $row["last_name"], "</td>";
	
	$query = "select * from levels_transactions where user_id = ";
	$query .=  $row["id"];
	$query .= " ORDER BY level_id DESC LIMIT 1;";

	$resultInner = pg_query($conn,$query);
	dbErrorCheck($conn,$resultInner);
	$numrowsInner = pg_numrows($resultInner);

	for($i = 0; $i < $numrowsInner; $i++)
	{
		$rowInner = pg_fetch_array($resultInner, $i);
   		echo "<td>", $rowInner["level_id"], "</td>";
	}	
  	
	echo "</tr>
  	";
}

pg_close($conn);

?>

</table>

</body>

</html>

