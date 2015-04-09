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
$category = 0;
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

if (isset($_POST["category"]))
{
        $category = $_POST["category"];
}

else if (isset($_GET['category']))
{
        $category = $_GET['category'];
}
else
{

}

error_log($room_id);

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";
?>

<p><b> Select Room and Category: </p></b>

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

<select id="category" name="category" onchange="loadAgain()">
<?php
$category_array = array();
$category_array[] = "score"; 
$category_array[] = "alltime"; 
$category_array[] = "alltimeizzy"; 
$category_array[] = "alltimetwo"; 
$category_array[] = "alltimethree"; 
$category_array[] = "alltimefour"; 
$category_array[] = "alltimefive"; 
$category_array[] = "alltimesix"; 
$category_array[] = "alltimeseven"; 
$category_array[] = "alltimeeight"; 
$category_array[] = "alltimenine"; 
$category_array[] = "alltimekoaa5"; 

echo "<option selected=\"selected\" value=\"0\"> \"Select Category\" </option>";
for($i = 0; $i < sizeof($category_array); $i++)
{
        if ($category_array[$i] == $category)
        {
                echo "<option selected=\"selected\" value=\"$category_array[$i]\"> $category_array[$i] </option>";
        }
        else
        {
                echo "<option value=\"$category_array[$i]\"> $category_array[$i] </option>";
        }
}

?>
</select>

<script>
function loadAgain()
{
    	var x = document.getElementById("room_id").value;
    	var y = document.getElementById("category").value;
	document.location.href = '/web/stats/leaderboards.php?room_id=' + x + '&category=' + y; 
}
</script>


<?php

if ($room_id == 99999)
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


        $query = "select last_activity, first_name, last_name, ";
	$query .= $category;
	$query .= " ,unmastered from users where banned_id = 0 AND school_id = ";
        $query .= $_SESSION["school_id"];
	if ($room_id != 0)
	{
		$query .= " AND room_id = ";
        	$query .= $room_id;
	}
        $query .= " order by ";
	$query .= $category;
        $query .= " desc;";
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
