<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>MY MILESTONES DEGREE</title>
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

$id = $_SESSION["user_id"];
$room_id = 1; 

echo "<br>";

//------------------EVALUATIONS------------------------------
$query_e = "select * from evaluations where progression > 0.9 AND progression < 1000 order by progression asc;";
$result_e = pg_query($conn,$query_e);
$numrows_e = pg_numrows($result_e);
//------------------END EVALUATIONS------------------------------

?>
<p><b> MY Milestones</p></b>

<?php

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td>k<br>c<br>c';
        echo '</td>';
        echo '<td>k<br>o<br>a<br>a<br>4';
        echo '</td>';
        echo '<td>k<br>o<br>a<br>a<br>5';
        echo '</td>';
        echo '<td>1<br> o<br>a<br> b<br> 3';
        echo '</td>';
        echo '<td>1<br> o<br>a<br> c<br> 6';
        
        echo '</td>';
        echo '<td>1<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>9<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>8<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>7<br>s';
        echo '</td>';
        echo '<td>b<br>a<br>b<br>y<br>6<br>s';
        echo '</td>';
        echo '<td>2<br> o<br>a<br> b<br> 2';
        echo '</td>';
        echo '<td>2<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>5';
        echo '</td>';
        echo '<td>2';
        echo '</td>';
        echo '<td>4';
        echo '</td>';
        echo '<td>8';
        echo '</td>';
        echo '<td>3';
        echo '</td>';
        echo '<td>6';
        echo '</td>';
        echo '<td>9';
        echo '</td>';
        echo '<td>7';
        echo '</td>';
        //echo '<td>T<br>h<br>e<br><br> I<br>z<br>z<br>y<br><br> 3<br> oa<br> c<br> 7';
	echo '<td>3<br> o<br>a<br> c<br> 7';
        echo '</td>';
        echo '<td>3<br> n<br>b<br>t';
        echo '</td>';
        echo '<td>4<br> o<br>a<br> b<br> 4';
        echo '</td>';
        echo '<td>4<br> n<br>b<br>t<br> b<br> 4';
        echo '</td>';
        echo '<td>4 <br>n<br>b<br>t<br> b <br>5';
        echo '</td>';
        echo '<td>4<br> n<br>b<br>t <br>b<br> 6';
        echo '</td>';
        echo '<td>4<br> n<br>f<br> b<br> 3<br> c';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t <br>b<br> 5';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t<br> b <br>6';
        echo '</td>';
        echo '<td>5<br> n<br>b<br>t<br> b<br> 7';
        echo '</td>';
        echo '<td>D<br>D';
        echo '</td>';
        echo '<td>5<br> n<br>f<br> a<br> 1';
        echo '</td>';
        echo '</tr>';

        //------------------MILESTONES------------------------------
	$query_m = "select sub.description, sub.inner_grade FROM ( select evaluations.description, evaluations.progression, evaluations.score_needed, COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) as not_answered,  COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as incorrect,
COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as correct, COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as total_answered,";

	$query_m .= " COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) / (COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END))::float * 100 as inner_grade   from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '2017-09-10 09:28:27.777635' AND evaluations_attempts.evaluations_id != 1 "; 

	if ($room_id != 0)
	{
		$query_m .= " AND users.id = ";
        	$query_m .= $_SESSION["user_id"];
	}

	$query_m .= " AND evaluations.progression > 0.9 AND evaluations_attempts.teammate_id is NULL group by evaluations_attempts, evaluations.progression, evaluations.description, evaluations.score_needed) sub WHERE sub.total_answered >= sub.score_needed order by sub.progression;";

	//error_log($query_m);
        $result_m = pg_query($conn,$query_m);
        $numrows_m = pg_numrows($result_m);

        //------------------END MILESTONES------------------------------

	$row = array();

	for($r = 5; $r < 38; $r++)
	{
		$row[] = 0;
	}

	for($m = 0; $m < $numrows_m; $m++)
	{
               	$row_m = pg_fetch_array($result_m, $m);
		$row_m[1] = intval($row_m[1]);
	
		for ($p = 0; $p < $numrows_e; $p++)
		{
               		$row_e = pg_fetch_array($result_e, $p);
			if ($row_m[0] == $row_e[1]) //do we have a user and ms match?
			{
				if ($row[$p] < $row_m[1]) //less than new comming in
				{
					$row[$p] = $row_m[1];
				}
			}
		}	
	}
        echo '<tr>';
	for ($e = 0; $e < $numrows_e; $e++)
	{
               	$row_e = pg_fetch_array($result_e, $e);
		//100 90 80
		if ($row[$e] >= $row_e[6])    
		{
 			echo '<td bgcolor="green">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
		else if ($row[$e] >= $row_e[7])    
		{
 			echo '<td bgcolor="lime">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
		else if ($row[$e] >= $row_e[8])    
		{
 			echo '<td bgcolor="yellow">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
		else if ($row[$e] >= $row_e[9])    
		{
 			echo '<td bgcolor="orange">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
		else if ($row[$e] >= $row_e[10])    
		{
 			echo '<td bgcolor="pink">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
		else    
		{
	 		echo '<td bgcolor="red">';
			echo $row[$e];
               		echo '';
               		echo '</td>';
		}
        }
        pg_free_result($result_m);
        pg_free_result($result_e);
        echo '</table>';
?>
</body>
</html>
