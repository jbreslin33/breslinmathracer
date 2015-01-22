<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>

<?php
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_for_signup_form.php");
echo "<br>";

	$mess = 0;
      	$mess = isset($_GET["message"]);

	echo $mess;
?>
	<p><b> SIGN UP: </p></b>
	
	<form method="post" action="../signup/signup.php">

	<p>Username: <input type="text" name="username" /></p>
	<p>Password: <input type="text" name="password" /></p>
	<p>First Name: <input type="text" name="firstname" /></p>
	<p>Last Name: <input type="text" name="lastname" /></p>

	<p><input type="submit" value="Sign Up" /></p>

	</form>
	
</body>

</html>

