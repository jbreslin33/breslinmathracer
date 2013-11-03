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

$query = "select games_attempts.game_attempt_time_start, games_attempts.score, games_attempts.time_warning, levels.description, users.first_name, users.last_name from users  join games_attempts on games_attempts.user_id = users.id join levels on levels.id = games_attempts.level_id where users.school_id = ";
$query .= $_SESSION["school_id"];
$query .= "ORDER BY game_attempt_time_start DESC";
$query .= ";";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>

<table border="1">
  <tr>
   <th>TIME</th>
   <th>SCORE</th>
   <th>DESCRIPTION</th>
   <th>FIRST NAME</th>
   <th>LAST NAME</th>
  </tr>

<?php
   // Loop on rows in the result set.

   for($ri = 0; $ri < $numrows; $ri++) {
   
   $row = pg_fetch_array($result, $ri);
   
		if($row["time_warning"] == "f")
		{
			$bg_color = "#EEEEEE";
		}
		else {
			$bg_color = "#FF3300";
		}
		
		echo "<tr bgcolor=", $bg_color, ">\n";
	
    echo " <td>", $row["game_attempt_time_start"], "</td>
   <td>", $row["score"], "</td>
   <td>", $row["description"], "</td>
   <td>", $row["first_name"], "</td>
   <td>", $row["last_name"], "</td>
  </tr>
  ";
   }
   pg_close($conn);
  ?>

  </table>

</body>

</html>

