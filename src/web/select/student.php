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

<br><b><u>My Students:<u><b><br>
<?php
$query = "select id,  username, password, first_name, last_name from users where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by username;";

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
  </tr>

<?php
   // Loop on rows in the result set.

   for($ri = 0; $ri < $numrows; $ri++) {
    echo "<tr>\n";
    $row = pg_fetch_array($result, $ri);
    echo " <td>", $row["id"], "</td>
   <td>", $row["username"], "</td>
   <td>", $row["password"], "</td>
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

