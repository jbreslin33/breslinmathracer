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

	Name:
	 <input type="text" name="username">
	Password:
 	<input type="text" name="password">

	<input type="submit">

	</form>
</body>
</html>
