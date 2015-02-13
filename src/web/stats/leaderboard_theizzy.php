<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>LEADER BOARD THE IZZY</title>
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

<p><b> LEADER BOARD THE IZZY: </p></b>

<?php

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Rank';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> Score';
        echo '</td>';
        echo '</tr>';

	$lastAnswerTime = '';
	$firstName = '';
	$lastName = '';
	$score = '';
	$unmastered = '';

	$query = "select first_name, last_name, alltimeizzy from users where banned_id = 0 order by alltimeizzy desc;";
	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++) 
	{
        	$row = pg_fetch_array($result, $i);
		$firstName = $row[0];
		$lastName = $row[1];
		$score = $row[2];
       	
		echo '<tr>';
        	echo '<td>';
        	echo $i + 1;
        	echo '</td>';
        	echo '<td>';
        	echo $firstName;
        	echo '</td>';
        	echo '<td>';
        	echo $lastName;
        	echo '</td>';
        	echo '<td>';
        	echo $score;
        	echo '</td>';
        	echo '</tr>';
	}

	pg_free_result($result);
	echo '</table>';
?>
</body>
</html>
