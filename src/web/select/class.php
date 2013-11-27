<!DOCTYPE html>

<html>

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

$query = "select students.id,  users.username, users.password, users.first_name, users.last_name from students join users on students.id = users.id where users.school_id = ";
$query .= $_SESSION["school_id"];
$query .= ";";

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

