<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>LEADER BOARD</title>
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

<p><b> ROOM 33 LEADER BOARD: </p></b>

<?php

echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> Start Time';
        echo '</td>';
        echo '<td> Item Type ';
        echo '</td>';
        echo '<td> Question';
        echo '</td>';
        echo '<td> Answers';
        echo '</td>';
        echo '<td> User Answers';
        echo '</td>';

        echo '</tr>';

	$lastAnswerTime = '';
	$firstName = '';
	$lastName = '';
	$score = '';
	$unmastered = '';

	$query = " select item_attempts.start_time, item_types_id, transaction_code, question, answers, user_answer from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where evaluations_attempts.user_id = 73 order by start_time desc;";
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
        	echo $item_types_id;
        	echo '</td>';
        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $question;
        	echo '</td>';
        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $answers;
        	echo '</td>';
        	echo '<td bgcolor="';
		echo $bcolor;
		echo '">';
        	echo $user_answer;
        	echo '</td>';

        	echo '</tr>';
	}

	pg_free_result($result);
	echo '</table>';
echo '<font color="green">Jefferson Delorbe has been temporarily banned from leader board.</font>';
?>
</body>
</html>
