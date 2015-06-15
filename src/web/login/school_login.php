<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>School Login mathcore.org</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>

<?php

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_for_school_login_form.php");
?>
	
	<form method="post" action="/web/php/school_login.php">

	Username: <input type="text" name="username" required> <br>
	Password: <input type="password" name="password" required> <br>

	<input type="submit" value="login">

	</form>
<br>
<br>
---OR---
<br>
<br>
        <form method="post" action="/web/php/school_create.php">

	Username: <input type="text" name="username" required> <br>
        Password: <input type="password" name="password" required> <br>
        Enter Password again: <input type="password" name="password" required> <br>
	School: <input type="text" name="name" required> <br>
	City : <input type="text" name="city" required> <br>
	State : <input type="text" name="state" required> <br>
	Zip : <input type="text" name="zip" required> <br>

        <input type="submit" value="create school account">

        </form>

</body>
</html>
