<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>HOME WORK</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$school_id = 0;
$room_id = 0;
$category = 0;
$id = 0;

if (isset($_POST["school_id"]))
{
        $school_id = $_POST["school_id"];
}

else if (isset($_GET['school_id']))
{
        $school_id = $_GET['school_id'];
}
else
{

}

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
	$category = 'score';
}
echo "<br>";
?>

<p><b> HOME WORK </p></b>

<ul>
<li><a href="/web/navigation/main_menu_school.php">Main Menu</a></li>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>


<p><b> Select Room and Category: </p></b>

<form method="post" action="/web/stats/homework.php">

<select id="school_id" name="school_id" onchange="loadAgain()">
<?php
$query = "select * from schools";
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"All Schools\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $school_id)
        {
                echo "<option selected=\"selected\" value=\"$row[0]\"> $row[1] </option>";
        }      
        else
        {
                echo "<option value=\"$row[0]\"> $row[1] </option>";
        }
}
?>
</select>


<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $school_id;
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"Entire School\" </option>";

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
$category_array[] = "unmastered"; 

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
    	var x = document.getElementById("school_id").value;
    	var y = document.getElementById("room_id").value;
    	var z = document.getElementById("category").value;
	document.location.href = '/web/stats/homework.php?school_id=' + x + '&room_id=' + y + '&category=' + z; 
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
        echo '<td> user_id';
        echo '</td>';
        echo '<td> start_time';
        echo '</td>';
        echo '<td> type';
        echo '</td>';
        echo '<td> mark';
        echo '</td>';
        echo '</tr>';

        $score = '';

	$queryUsers = "select username, last_name, first_name from users where school_id = ";
        $queryUsers .= $school_id;
	if ($room_id != 0)
	{
		$queryUsers .= " AND room_id = ";
        	$queryUsers .= $room_id;
	}
 	$queryUsers .= " order by username asc;";
        $resultUsers = pg_query($conn,$queryUsers);
        $numrowsUsers = pg_numrows($resultUsers);
        $fetchAllUsers = pg_fetch_all($resultUsers);

	
        for($i = 0; $i < $numrowsUsers; $i++)
	{
		$query = "select count(item_attempts.transaction_code) from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id JOIN users ON evaluations_attempts.user_id=users.id where item_attempts.start_time > '2015-09-08 15:00:00' AND username = '";
		$query .= $fetchAllUsers[$i]['username'];
		$query .= "';";

        	$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

        	$row = pg_fetch_array($result, 0);

                echo '<tr>';
                echo '<td>';
                echo $fetchAllUsers[$i]['username'];
                echo '</td>';
                echo '<td>';
                echo $fetchAllUsers[$i]['last_name'];
                echo '</td>';
                echo '<td>';
                echo $fetchAllUsers[$i]['first_name'];
                echo '</td>';
                echo '<td>';
                echo $row[0];
                echo '</td>';
                echo '</tr>';
        }

        pg_free_result($result);
        echo '</table>';
}
?>

</body>
</html>
