<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>MY WORK TODAY</title>
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
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

echo "<br>";
?>
	<p><b> MY WORK TODAY: </p></b>
<?php



$q = "select item_attempts.start_time, item_attempts.item_types_id, transaction_code, question, user_answer from item_attempts JOIN evaluations_attempts ON evaluations_attempts.id=item_attempts.evaluations_attempts_id where evaluations_attempts.user_id = ";
$q .= $_SESSION["user_id"];

$q .= " AND item_attempts.start_time > CURRENT_DATE order by item_attempts.start_time desc;";

$r = pg_query($conn,$q);
$n = pg_numrows($r);

//lets grab some data for the top
//$row = pg_fetch_array($r, $n - 1 );
$row_first = pg_fetch_array($r,$n - 1);
$row_last = pg_fetch_array($r,0);
$first_question_time = $row_first[0];
$last_question_time = $row_last[0];

$txt = 'total:';
$txt .= $n;  
$txt .= ' first:'; 
$txt .= $first_question_time; 
$txt .= ' last:'; 
$txt .= $last_question_time; 

echo $txt;

echo '<table border=\"1\">';
        echo '<tr>';

        echo '<td> start_time';
        echo '</td>';
        echo '<td> item type';
        echo '</td>';
        echo '<td> code';
        echo '</td>';
        echo '<td> question';
        echo '</td>';
        echo '<td> user_answer';
        echo '</td>';

        echo '</tr>';






        for($i = 0; $i < $n; $i++)
        {
                $row = pg_fetch_array($r, $i);
                $start_time = $row[0];
                $type_id = $row[1];
                $transaction_code = $row[2];
                $question = $row[3];
                $user_answer = $row[4];

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
                echo '<tr>';

                echo '<td bgcolor="';
                echo $bcolor;
                echo '">';
                echo $start_time;
                echo '</td>';

                echo '<td bgcolor="';
                echo $bcolor;
                echo '">';
                echo $type_id;
                echo '</td>';

                echo '<td bgcolor="';
                echo $bcolor;
                echo '">';
                echo $transaction_code;
                echo '</td>';

                echo '<td bgcolor="';
                echo $bcolor;
                echo '">';
                echo $question;
                echo '</td>';

                echo '<td bgcolor="';
                echo $bcolor;
                echo '">';
                echo $user_answer;
                echo '</td>';
                

                echo '</tr>';
        }

        pg_free_result($r);
        echo '</table>';
?>
</body>
</html>
