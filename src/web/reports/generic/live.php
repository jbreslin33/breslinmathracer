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
        $category = 'score';
}
echo "<br>";
?>



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
	$query .= " where transaction_code = 2 order by start_time desc LIMIT 30;";
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
