<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>INCORRECT ITEM ATTEMPTS REAL TIME</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<ul>
<?php
session_start();
if ($_SESSION["role"] == 1)
{
        echo "<li><a href=\"/web/navigation/student/main_menu.php\">Main Menu</a></li>";
        echo "<li><a href=\"/web/navigation/student/reports.php\">Reports</a></li>";
}
else
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
        echo "<li><a href=\"/web/navigation/school/reports.php\">Reports</a></li>";
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$room_id = 0;
$user_id = 0;
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

if (isset($_POST["user_id"]))
{
        $user_id = $_POST["user_id"];
}

else if (isset($_GET['user_id']))
{
        $user_id = $_GET['user_id'];
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
?>

<form method="post" action="/web/reports/generic/live.php">

<b>Room:</b>
<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
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

<b>Student:</b>
<select id="user_id" name="user_id" onchange="loadAgain()">
<?php
$query = "select id, first_name, last_name from users ";
if ($room_id != 0)
{
	$query .= " where room_id = ";
	$query .= $room_id;
}
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo "<option selected=\"selected\" value=\"0\"> \"All Students\" </option>";

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        if ($row[0] == $user_id)
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



<b>Answer:</b>

<select id="category" name="category" onchange="loadAgain()">
<?php
$category_array = array();
$category_array[] = "all"; // 012
$category_array[] = "incorrect"; //2
$category_array[] = "correct"; //1

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
        var x = document.getElementById("user_id").value;
        var y = document.getElementById("room_id").value;
        var z = document.getElementById("category").value;
        document.location.href = '/web/reports/generic/live.php?user_id=' + x + '&room_id=' + y + '&category=' + z;
}
</script>



<?php

echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> Start Time';
        echo '</td>';
        
	echo '<td> Name';
        echo '</td>';
	
	echo '<td> Room';
        echo '</td>';

        echo '<td> Item Type ';
        echo '</td>';

        echo '<td> Question';
        echo '</td>';
 
	if ($_SESSION["role"] == 3)
	{
        	echo '<td> Answers';
        	echo '</td>';
	}
        echo '<td> User Answers';
        echo '</td>';

        echo '</tr>';

	$lastAnswerTime = '';
	$firstName = '';
	$lastName = '';
	$score = '';
	$unmastered = '';

	$query = " select item_attempts.start_time, item_types_id, transaction_code, question, answers, user_answer, users.first_name, users.last_name, rooms.name from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id  JOIN users ON evaluations_attempts.user_id=users.id JOIN rooms ON users.room_id=rooms.id";

	//filters

	//room filter
	if ($room_id != 0)
	{
		$query .= " where room_id = ";
		$query .= $room_id;
	}

	//user filter	
	if ($user_id != 0)
	{
		if ($room_id == 0)
		{
			$query .= " where users.id = ";
		}
		else
		{
			$query .= " AND users.id = ";
		}
		$query .= $user_id;
	}

	//transaction code filter
	if ($category == "all")
	{
		$query .= " order by start_time desc LIMIT 30;";
	}
	else if ($category == "correct")
	{
		if ($room_id == 0 && $user_id == 0)
		{
			$query .= " where transaction_code = 1 order by start_time desc LIMIT 30;";
		}
		else
		{
			$query .= " AND transaction_code = 1 order by start_time desc LIMIT 30;";
		}
	}
	else if ($category == "incorrect")
	{
		if ($room_id == 0 && $user_id == 0)
		{
			$query .= " where transaction_code = 2 order by start_time desc LIMIT 30;";
		}
		else
		{
			$query .= " AND transaction_code = 2 order by start_time desc LIMIT 30;";
		}
	}
	else 
	{
		$query .= " order by start_time desc LIMIT 30;";
	}

	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++) 
	{
        	$row = pg_fetch_array($result, $i);
		$start_time = $row[0];
		$item_types_id = $row[1];
		$transaction_code = $row[2];
		$question = $row[3];
		$answers = $row[4];
		$user_answer = $row[5];
		$first_name = $row[6];
		$last_name = $row[7];
		$room = $row[8];
       	
		echo '<tr>';

		$bcolor = 'Green';
		if ($transaction_code == "0")
		{
			$bcolor = 'White';
		}
		if ($transaction_code == "1")
		{
			$bcolor = 'Green';
		}
		if ($transaction_code == "2")
		{
			$bcolor = 'Red';
		}

        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $start_time;
        	echo '</td>';
        	
		echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $first_name;
        	echo " ";
        	echo $last_name;
        	echo '</td>';
        	
		echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $room;
        	echo '</td>';

        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $item_types_id;
        	echo '</td>';

        	echo '<td bgcolor="';
		echo $bcolor;
		echo '"><p>';
        	echo $question;
        	echo '</p></td>';
		
		if ($_SESSION["role"] == 3)
		{
        		echo '<td bgcolor="';
			echo $bcolor;
			echo '">';
        		echo $answers;
        		echo '</td>';
		}

        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $user_answer;
        	echo '</td>';

        	echo '</tr>';
	}

	pg_free_result($result);
	echo '</table>';
?>
</body>
</html>
