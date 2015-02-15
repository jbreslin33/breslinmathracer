<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>REMEDIATE 33</title>
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

        <p><b> Select Username: </p></b>

        <form method="post" action="/web/stats/remediate_33.php">

<select name="id">

<?php
$query = "select last_name, first_name, username, id from users where room_id = 33 order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
	$s = $row[0];
	$s .= ",";   
	$s .= $row[1];
	$s .= ",";   
	$s .= $row[2];
	$s .= ",";   
	$s .= $row[3];
	$s .= ",";   
	$s .= $row[3];
	$s .= ",";   
	$s .= $row[4];
        echo "<option value=\"$row[0]\"> $s </option>";
}
?>

</select>
        <p><input type="submit" value="UPDATE" /></p>

        </form>

<p><b> REMEDIATE 33: </p></b>

<?php
	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> id';
        echo '</td>';
        echo '<td> username';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> Score';
        echo '</td>';
        echo '<td> Unmastered';
        echo '</td>';
        echo '</tr>';

	$lastAnswerTime = '';
	$firstName = '';
	$lastName = '';
	$score = '';
	$unmastered = '';

	$query = "select id, username, first_name, last_name, score, unmastered from users where room_id = 33 and banned_id = 0 order by score desc;";
	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++) 
	{
        	$row = pg_fetch_array($result, $i);
		$id = $row[0];
		$username = $row[1];
		$firstName = $row[2];
		$lastName = $row[3];
		$score = $row[4];
		$unmastered = $row[5];
       	
		echo '<tr>';
        	echo '<td>';
        	echo $id;
        	echo '</td>';
        	echo '<td>';
        	echo $username;
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
        	echo '<td>';
        	echo $unmastered;
        	echo '</td>';
        	echo '</tr>';
	}

	pg_free_result($result);
	echo '</table>';
?>
</body>
</html>
