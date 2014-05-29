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


$query = "select first_name, last_name from users where id = ";
$query .= $_SESSION["user_id"];
$query .= ";";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
$row = pg_fetch_array($result, 0);
pg_close($conn);

    if (pg_field_is_null($result, 0, "first_name") == 1)
	{
	    $first = "''";
		
	}
    else
	{
		$first = $row["first_name"];
	}
	
	 if (pg_field_is_null($result, 0, "last_name") == 1)
	{
	    $last = "''";
		
	}
    else
	{
		$last = $row["last_name"];
	}
?>

  
   <p><b> Current Info: </p></b>
	<form method="post" action="/src/database/update_user_info.php">



	<p>First Name: <input type="text" name="firstname" value=<?php echo $row["first_name"] ?> /></p>
	<p>Last Name: <input type="text" name="lastname" value=<?php echo $row["last_name"] ?> /></p>

	<p><input type="submit" value="Update" /></p>

	</form>


</body>

</html>

