<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>Main Menu</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<p><b> Student Main Menu </p></b>
<?php

session_start();
?>

<ul>
<li><a href="/web/php/logout.php">Logout</a></li>
<li><a href="/web/navigation/edit.php">Edit</a></li>
</ul>

</body>
</html>
