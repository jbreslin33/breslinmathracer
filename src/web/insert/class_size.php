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
include(getenv("DOCUMENT_ROOT") . "/web/insert/links.php");
?>

<h6> This will create a class and a teacher for that class.</h6>
<h6> Teacher and students will be given a username and password automatically.</h6>
<h6> First and Last names can be filled in later.</h6>

<h2>Enter Class Size:</h2>
<ul>
<form name="insert" action="class.php" method="POST" >
<input type="text" value="35" name="number_of_students" />
<br>
<input type="submit" value="Create Class" />
</form>
</ul>

</body>
</html>
