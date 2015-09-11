<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MAIN MENU</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<p><b> Main Menu </p></b>
<?php

session_start();
?>

<ul>
<li><a href="/web/php/logout.php">Logout</a></li>
<li><a href="/web/navigation/school/reports.php">Reports</a></li>
</ul>

</body>
</html>
