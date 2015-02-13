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
        <p><b> Type date in form of: 2014-10-06 15:00:00 </p></b>
        <form method="get" action="/web/stats/playing.php">
Homework report start time: <input type="text" name="timefrom"><br>
        <p><input type="submit" value="UPDATE" /></p>
        </form>
</body>
</html>
