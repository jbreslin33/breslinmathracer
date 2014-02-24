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

      	$mess = $_GET["message"];
	
	if ($mess == "no_user")
	{
		echo "No user try again.";
	}
	if ($mess == "user")
	{
		echo "we have a user.";
	}
?>

<?php
$query = "select id from learning_standards order by progression;";
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
        pg_close($conn);
?>

</select>

	<p><input type="submit" value="UPDATE" /></p>

	</form>
</body>
</html>
