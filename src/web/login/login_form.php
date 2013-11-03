<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_for_login_form.php");
echo "<br>";

	//and set Login to NO
	$_SESSION["Login"] = "NO";

      	$mess = $_GET["message"];
	
	if ($mess == "no_periods")
	{
		echo "No Periods";
	}
	if ($mess == "one_period")
	{
		echo "one period";
	}
	if ($mess == "too_many_periods")
	{
		echo "No username should contain 2 periods. Try again.";
	}
	if ($mess == "no_school")
	{
		echo "No School, try again.";
	}
	if ($mess == "no_user")
	{
		echo "No user try again.";
	}
	if ($mess == "user")
	{
		echo "we have a user.";
	}
	if ($mess == "no_admin")
	{
		echo "No admin try again.";
	}
	if ($mess == "no_teacher")
	{
		echo "No teacher try again.";
	}
	if ($mess == "no_student")
	{
		echo "No student try again.";
	}
?>
	<p><b> PLEASE LOGIN: </p></b>
	
	<p><b> Choose School: </p></b>
<?php
$query = "select * from schools;";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);
?>

	<form method="post" action="/web/login/login.php">
<select name="school">

<?php
   	// Loop on rows in the result set.
   	for($ri = 0; $ri < $numrows; $ri++) 
	{
		$row = pg_fetch_array($result, $ri);
		echo "<option value=\"$row[1]\">$row[1]</option>";
   	}
   	pg_close($conn);
?>

</select>

	<p>Username: <input type="text" name="username" /></p>
	<p>Password: <input type="text" name="password" /></p>

	<p><input type="submit" value="Log In" /></p>

	</form>
</body>

</html>

