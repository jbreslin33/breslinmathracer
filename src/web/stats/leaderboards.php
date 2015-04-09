<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>LEADER BOARDS</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$room_id = 0;
$id = 0;

if (isset($_POST["room_id"]))
{
	$room_id = $_POST["room_id"];
}

else if (isset($_GET['room_id']))
{
	$room_id = $_GET['room_id'];
}
else
{

}

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";
?>

<p><b> Select Room: </p></b>

<form method="post" action="/web/stats/leaderboards.php">

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= intval($_SESSION["school_id"]);
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);
$id_array = array();

echo "<option selected=\"selected\" value=\"0\"> \"Select Room\" </option>";
for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
	if ($row[0] == $room_id)
	{
        	echo "<option selected=\"selected\" value=\"$row[0]\"> $row[1] </option>";
	}	
	else
	{
        	echo "<option value=\"$row[0]\"> $row[1] </option>";
	}
	$id_array[] = $row[0];
}

?>

</select>

<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
	document.location.href = '/web/stats/leaderboards.php?room_id=' + x; 
}
</script>


<?php

if ($room_id == 0)
{
	//$room_id = $id_array[0];
}

if ($room_id == 0)
{

}
else
{

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
        echo '<td> Unmastered';
        echo '</td>';
        echo '</tr>';

        $lastAnswerTime = '';
        $firstName = '';
        $lastName = '';
        $score = '';
        $unmastered = '';


        $query = "select last_activity, first_name, last_name, score, unmastered from users where banned_id = 0 AND school_id = ";
        $query .= $_SESSION["school_id"];
	$query .= " AND room_id = ";
        $query .= $room_id;
        $query .= " order by score desc;";
        $result = pg_query($conn,$query);
        $numrows = pg_numrows($result);

        for($i = 0; $i < $numrows; $i++)
        {
                $row = pg_fetch_array($result, $i);
                $lastAnswerTime = $row[0];
                $firstName = $row[1];
                $lastName = $row[2];
                $score = $row[3];
                $unmastered = $row[4];

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
                echo '<td>';
                echo $unmastered;
                echo '</td>';
                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
?>


</body>
</html>
