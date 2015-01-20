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
        echo '<td> mark';
        echo '</td>';
        echo '<td> Question';
        echo '</td>';
        echo '<td> Answers';
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
       	
		echo '<tr>';
        	echo '<td>';
        	echo $start_time;
        	echo '</td>';
        	echo '<td>';
        	echo $item_types_id;
        	echo '</td>';
        	echo '<td>';
        	echo $transaction_code;
        	echo '</td>';
        	echo '<td>';
        	echo $question;
        	echo '</td>';
        	echo '<td>';
        	echo $answers;
        	echo '</td>';
        	echo '</tr>';
	}

	pg_free_result($result);
	echo '</table>';
echo '<font color="red">Jefferson Delorbe has been temporarily banned from leader board.</font>';
?>
</body>
</html>
