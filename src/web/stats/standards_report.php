<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>UPDATE STANDARD</title>
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

<p><b> STANDARDS REPORT: </p></b>

<?php

$q = "select id from item_types where progression > 4.99 AND progression < 6 order by progression asc;";
$r = pg_query($conn,$q);
$n = pg_numrows($r);

//loopthru item types for user
for($a = 0; $a < $n; $a++)
{
	$row = pg_fetch_array($result, $j);
        $user_id_array[] = $row[0];
        $last_name_array[] = $row[1];
}

$user_id_array = array();
$first_name_array = array();
$last_name_array = array();

	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Type';
        echo '</td>';
        echo '<td> UserName';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '</tr>';

	$query = "select id, first_name, last_name from users where core_standards_id = '";
	$query .= "5.oa.a.1";
	$query .= "' AND score > 50 order by last_name asc;";

	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++)
	{
        	$row = pg_fetch_array($result, $i);
		$user_id_array[] = $row[0];
		$last_name_array[] = $row[1];
		$first_name_array[] = $row[2];
	}

	for($i = 0; $i < $numrows; $i++)
	{ 

		//lets interject right here....
 		$query = "select id from item_types where progression > 4.99 AND progression < 6 order by progression asc;";
		$result = pg_query($conn,$query);
		$nrows = pg_numrows($result);

		//loopthru item types for user	
		for($j = 0; $j < $nrows; $j++)
		{
        		$row = pg_fetch_array($result, $j);
			$user_id_array[] = $row[0];
			$last_name_array[] = $row[1];
		}


       		echo '<tr>';
        	echo '<td>';
        	echo $user_id_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $user_id_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $last_name_array[$i];
        	echo '</td>';
        	echo '<td>';
        	echo $first_name_array[$i];
        	echo '</td>';
        	echo '</tr>';
	}
pg_free_result($result);
echo '</table>';
?>
</body>
</html>
