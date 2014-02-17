<!DOCTYPE html>

<html>

<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<?php
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
?>

</head>

<body>

<br><b><u>Student Leaders:<u><b><br>

<?php
$query = "select users.username, users.first_name, users.last_name, learning_standards.progression, users.level, learning_standards.levels from users join learning_standards on learning_standards.ref_id = users.ref_id where users.school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by learning_standards.progression desc, users.level desc;";


$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>

<table border="1">
  <tr>
   <th>Username</th>
   <th>FirstName</th>
   <th>LastName</th>
   <th>Progression</th>
   <th>Level</th>
   <th>Levels</th>
  </tr>

<?php
   // Loop on rows in the result set.

   for($ri = 0; $ri < $numrows; $ri++) {
    echo "<tr>\n";
    $row = pg_fetch_array($result, $ri);
    echo " <td>", $row["username"], "</td>
   <td>", $row["first_name"], "</td>
   <td>", $row["last_name"], "</td>
   <td>", $row["progression"], "</td>
   <td>", $row["level"], "</td>
   <td>", $row["levels"], "</td>
  </tr>
  ";
   }
   pg_close($conn);
  ?>

  </table>


</body>

</html>

