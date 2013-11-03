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

<h2>Enter School Information :</h2>
<ul>
<form name="insert" action="school.php" method="POST" >
<h4>Number of Classes:</h4> 
<input type="text" value="10" name="number_of_classes" />
<br>
<h4>Approximate Number of Students Per Class:</h4>
<input type="text" value="30" name="number_of_students" />
<br>
<input type="submit" value="Create School" />
</form>
</ul>

</body>
</html>
