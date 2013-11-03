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

      	$mess = $_GET["message"];

	if ($mess == "name_taken")
        {
                echo "That username is taken, Please try another.";
        }
        if ($mess == "no_numbers")
        {
                echo "You cannot use numbers in username. Please try again.";
        }
        if ($mess == "no_periods")
        {
                echo "You cannot use periods in signup. Please try again.";
        }
        if ($mess == "no_name")
        {
                echo "You forgot a username. Please fill one out.";
        }
        if ($mess == "no_spaces")
        {
                echo "You cannot have spaces in username. Please try again.";
        }
?>
	<p><b> SIGN UP: </p></b>
	
	<form method="post" action="../signup/signup.php">

	<p>Username: <input type="text" name="schoolname" /></p>
	<p>Password: <input type="text" name="password" /></p>

	<p><input type="submit" value="Sign Up" /></p>

	</form>
	
</body>

</html>

