<?php

include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");

//start new session
session_start();

$conn = dbConnect();

$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];

$user_id = $_SESSION["user_id"];

 		//--------------------INSERT INTO STUDENTS----------------
                //query string 
                //$query = "UPDATE games_attempts SET score =" . $score . "WHERE user_id" = . $user_id;
				
				$query = "UPDATE users SET first_name = " .  "'" .  $firstname  .  "'" . " ,last_name = " .  "'" .  $lastname  .  "'" . " WHERE id = " .  "'" .  $user_id  .  "';";
                
                // insert into users......
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);
				
               

?>


<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
echo "<br>";echo "<br>";
include(getenv("DOCUMENT_ROOT") . "/web/select/links.php");
?>

<br><br><br><br><br><br>

<h1>Update Successful</h1>

</body>

</html>
