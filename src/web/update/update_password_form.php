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
	<p><b> Select Username: </p></b>
	
	<form method="post" action="/web/update/updatepassword.php">

<select name="username">

<?php
$query = "select username, password from users where school_id = ";
$query .= $_SESSION["user_id"];
$query .= ";";
echo "hello query";
echo $query;
$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
      	echo "<option value=\"$row[0]\">$row[0]</option>";
}
?>

</select>
        <p>Password: <input type="text" name="password" /></p>

	<p><input type="submit" value="UPDATE" /></p>

	</form>
	
<p><b> Level History: </p></b>

<?php
$query = "select username, password from users where school_id = ";
$query .= $_SESSION["user_id"];
$query .= ";";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Username';
        echo '</td>';
        echo '<td> Password';
        echo '</td>';
        echo '</tr>';

for($i = 1; $i < $_SESSION["levels"]; $i++)
{
	for($r = 0; $r < $numrows; $r++)
	{
                $row = pg_fetch_array($result, $r);
		echo '<tr>';
                echo '<td>';
                echo $row[0];
                echo '</td>';
                echo '<td>';
                echo $row[1];
                echo '</td>';
                echo '</tr>';
	}
}
pg_free_result($result);

echo '</table>';
?>

</body>
</html>
