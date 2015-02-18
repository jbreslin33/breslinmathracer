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
include(getenv("DOCUMENT_ROOT") . "/src/php/utility.php");

$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_school.php");
echo "<br>";
$user_id = NULL;
$report_type = "small";
$progression_start = 4;
$progression_end = 5;
$user_id_array = array();

if (isset($_POST["user_id"]))
{
        $user_id = $_POST["user_id"];
}
if (isset($_GET["user_id"]))
{
        $user_id = $_POST["user_id"];
}

if (isset($_POST["report_type"]))
{
        $report_type = $_POST["report_type"];
}
if (isset($_GET["report_type"]))
{
        $report_type = $_POST["report_type"];
}

if (isset($_POST["progression_start"]))
{
        $progression_start = $_POST["progression_start"];
}
if (isset($_GET["progression_start"]))
{
        $progression_start = $_GET["progression_start"];
}

if (isset($_POST["progression_end"]))
{
        $progression_end = $_POST["progression_end"];
}
if (isset($_GET["progression_end"]))
{
        $progression_end = $_GET["progression_end"];
}

?>

        <form method="post" action="/web/stats/statsreports.php">

<select id="user_id" name="user_id">

<?php
$query = "select last_name, first_name, username, id, score, unmastered from users where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);
$novalue = "nobody";
$student = "Select Student";
echo "<option selected=\"selected\" value=\"$novalue\"> $student </option>";
for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        $s = $row[0];
        $s .= ",";
        $s .= $row[1];
        $s .= ",";
        $s .= $row[2];
        $s .= ",";
        $s .= $row[3];
        $s .= ",";
        $s .= $row[4];
        $s .= ",";
        $s .= $row[5];
        if ($row[3] == $user_id)
	{
                echo "<option selected=\"selected\" value=\"$row[3]\"> $s </option>";
	}
	else
	{
        	echo "<option value=\"$row[3]\"> $s </option>";
	}
	$user_id_array[] = $row[3];
}
?>
</select>

<select name="report_type">
<?php
if ($report_type == "small")
{
	echo "<option value=\"small\" selected>\"small\"</option>";
	echo "<option value=\"large\">\"large\"</option>";
}
else if ($report_type == "large")
{
	echo "<option value=\"small\">\"small\"</option>";
	echo "<option value=\"large\" selected>\"large\"</option>";
}
?>
</select>


<select name="progression_start">
<?php
for ($i=0; $i < 9; $i++)
{
        if ($i == $progression_start)
	{
                echo "<option selected=\"selected\" value=\"$i\"> $i </option>";
	}
	else
	{
        	echo "<option value=\"$i\"> $i </option>";
	}
}
?>
</select>

<select name="progression_end">
<?php
for ($i=0; $i < 9; $i++)
{
        if ($i == $progression_end)
	{
                echo "<option selected=\"selected\" value=\"$i\"> $i </option>";
	}
	else
	{
        	echo "<option value=\"$i\"> $i </option>";
	}
}
?>
</select>


        <p><input type="submit" value="UPDATE" /></p>

        </form>



<p id="statsreport"><b> STATS REPORT: </p></b>
<?php
if ($user_id == NULL)
{

}
else if ($user_id == "nobody")
{

}
else if ($report_type == "small")
{ 
	$progression_counter = $progression_start;

	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Type';
        echo '</td>';
        echo '<td> Question';
        echo '</td>';
        echo '<td> Answers';
        echo '</td>';
        echo '<td> User Answer';
        echo '</td>';
        echo '</tr>';

	while ($progression_counter < $progression_end)  
	{
		$wrong = 0;
		$paintMe = '';
		$question = '';
		$answers = '';
		$user_answer = '';

		$query = "select id, progression, description from item_types where progression > ";
		$query .= $progression_counter;
		$query .= " AND active_code = 1";
		$query .= " order by progression LIMIT 1";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		$currenttypeid = 0; 

		if ($numrows > 0) 
		{
        		$row = pg_fetch_array($result, 0);
			$currenttypeid = $row[0];
			$progression_counter = $row[1];
			$description = $row[2];
		}
	
		$query = "select item_attempts.transaction_code, item_attempts.question, item_attempts.answers, item_attempts.user_answer from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.id = ";
		$query .= $user_id;
		$query .= " AND item_attempts.item_types_id = '";
		$query .= $currenttypeid;
		$query .= "' order by item_attempts.start_time desc LIMIT 2;";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		for($i = 0; $i < $numrows; $i++) 
		{
        		$row = pg_fetch_array($result, $i);
			$transaction_code = $row[0];

			if ($transaction_code == 2)
			{
				if ($wrong > 0)
				{

				}
				else
				{
					$wrong++;
					$question = $row[1];
					$answers  = $row[2];
					$user_answer  = $row[3];
					
					$user_answer = convertToWeb($user_answer);
				}
			}
		}
		if ($wrong > 0)
		{
			$paintMe .= $currenttypeid;
		}	
		if ($wrong > 0)
		{
       			echo '<tr>';
        		echo '<td>';
        		echo $paintMe;
        		echo '</td>';
        		echo '<td>';
        		echo $question;
        		echo '</td>';
        		echo '<td>';
        		echo $answers;
        		echo '</td>';
        		echo '<td>';
			echo '<font color="red">';
        		echo $user_answer;
			echo '</font>';
        		echo '</td>';
       	 		echo '</tr>';
		}
	}
	pg_free_result($result);
	echo '</table>';
}

else if ($report_type == "description_questions_answers_all")
{ 
	$progression_counter = $progression_start;

	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Type';
        echo '</td>';
        echo '<td> Description';
        echo '</td>';
        echo '<td> Question';
        echo '</td>';
        echo '<td> Answers';
        echo '</td>';
        echo '<td> User Answer';
        echo '</td>';
        echo '</tr>';

	while ($progression_counter < $progression_end)  
	{
		$empty = 0;
		$wrong = 0;
		$right = 0;
		$description = 'des';
		$paintMe = '';
		$question = '';
		$answers = '';
		$user_answer = '';

		$query = "select id, progression, description from item_types where progression > ";
		$query .= $progression_counter;
		$query .= " AND active_code = 1";
		$query .= " order by progression LIMIT 1";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		$currenttypeid = 0; 

		if ($numrows > 0) 
		{
        		$row = pg_fetch_array($result, 0);
			$currenttypeid = $row[0];
			$progression_counter = $row[1];
			$description = $row[2];
		}
	
		$query = "select item_attempts.transaction_code, item_attempts.question, item_attempts.answers, item_attempts.user_answer from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.id = ";
		$query .= $user_id;
		$query .= " AND item_attempts.item_types_id = '";
		$query .= $currenttypeid;
		$query .= "' order by item_attempts.start_time desc LIMIT 2;";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		for($i = 0; $i < $numrows; $i++) 
		{
        		$row = pg_fetch_array($result, $i);
			$transaction_code = $row[0];

			if ($transaction_code == 0)
			{
				$empty++;
			}
			if ($transaction_code == 1)
			{
				$right++;
			}
			if ($transaction_code == 2)
			{
				if ($wrong > 0)
				{

				}
				else
				{
					$wrong++;
					$question = $row[1];
					$answers  = $row[2];
					$user_answer  = $row[3];
				}
			}
		}
		if ($wrong > 0)
		{
			$paintMe = '<font color="red">';
			$paintMe .= $currenttypeid;
			$paintMe .= '</font>';		
		}	
		else if ($empty > 0)
		{
			$paintMe = '<font color="black">';
			$paintMe .= $currenttypeid;
			$paintMe .= '</font>';		
		}	
		else if ($right == 2) 
		{
			$paintMe = '<font color="green">';
			$paintMe .= $currenttypeid;
			$paintMe .= '</font>';		
		}	
		else
		{
			$paintMe = '<font color="blue">';
			$paintMe .= $currenttypeid;
			$paintMe .= '</font>';		
		}

       		echo '<tr>';
        	echo '<td>';
        	echo $paintMe;
        	echo '</td>';
        	echo '<td>';
        	echo $description;
        	echo '</td>';
        	echo '<td>';
        	echo $question;
        	echo '</td>';
        	echo '<td>';
        	echo $answers;
        	echo '</td>';
        	echo '<td>';
        	echo $user_answer;
        	echo '</td>';
       	 	echo '</tr>';
	}
	pg_free_result($result);
	echo '</table>';
}

else if ($report_type == "large")
{ 
	$progression_counter = $progression_start;

	//last ones at end
	$type_array = array();
	$right_array = array();
	$wrong_array = array();
	$streak_array = array();

	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Type';
        echo '</td>';
        echo '<td> Streak';
        echo '</td>';
        echo '<td> Right';
        echo '</td>';
        echo '<td> Wrong';
        echo '</td>';
        echo '<td> Last Ten Percent';
        echo '</td>';
        echo '<td> Total Percent';
        echo '</td>';
        echo '<td> LastOne';
        echo '</td>';
        echo '</td>';
        echo '<td> NextToLastOne';
        echo '</td>';
        echo '</tr>';

	while ($progression_counter < $progression_end)  
	{
		$wrong = 0;
		$right = 0;
		$streak = 0;
		$wrong_last_ten = 0;
		$right_last_ten = 0;
		$streak_last_ten = 0;

		$query = "select id, progression from item_types where progression > ";
		$query .= $progression_counter;
		$query .= " AND active_code = 1";
		$query .= " order by progression LIMIT 1";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		$currenttypeid = 0; 
		$lastOne = '';
		$nextToLastOne = '';

		if ($numrows > 0) 
		{
        		$row = pg_fetch_array($result, 0);
			$currenttypeid = $row[0];
			$progression_counter = $row[1];
		}
	
		$query = "select item_attempts.transaction_code from item_attempts JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.id = ";
		$query .= $user_id;
		$query .= " AND item_attempts.item_types_id = '";
		$query .= $currenttypeid;
		$query .= "' order by item_attempts.start_time desc;";

		$result = pg_query($conn,$query);
		$numrows = pg_numrows($result);

		for($i = 0; $i < $numrows; $i++) 
		{
        		$row = pg_fetch_array($result, $i);
			$transaction_code = $row[0];

			if ($transaction_code == 1)
			{
				$right++;
				$streak++;

				if ($i < 10)
				{
					$right_last_ten++;
					$streak_last_ten++;
				}
			}
			if ($transaction_code == 2)
			{
				$wrong++;
				$streak = 0;

				if ($i < 10)
				{
					$wrong_last_ten++;
					$streak_last_ten = 0;
				}
			}

			if ($i == 0)
			{
				if ($transaction_code == 0) 
				{
					$lastOne = '<font color="black">empty</font>';		
				}
				if ($transaction_code == 1) 
				{
					$lastOne = '<font color="green">right</font>';		
				}
				if ($transaction_code == 2) 
				{
					$lastOne = '<font color="red">wrong</font>';		
				}
			}
			if ($i == 1)
			{
				if ($transaction_code == 0) 
				{
					$nextToLastOne = '<font color="black">empty</font>';		
				}
				if ($transaction_code == 1) 
				{
					$nextToLastOne = '<font color="green">right</font>';		
				}
				if ($transaction_code == 2) 
				{
					$nextToLastOne = '<font color="red">wrong</font>';		
				}
			}
		}
		$wrong_array[]  = $wrong;
		$right_array[]  = $right;
		$streak_array[] = $streak;

		$total = intval($right + $wrong);
		$percent = 0;
		if ($total != 0)
		{
			$percent = floatval($right / $total);
       		 	$percent = round( $percent, 2);
			$percent = $percent * 100;
		}

		$total_last_ten = intval($right_last_ten + $wrong_last_ten);
		$percent_last_ten = 0;
		if ($total_last_ten != 0)
		{
        		$percent_last_ten = floatval($right_last_ten / $total_last_ten);
       		 	$percent_last_ten = round( $percent_last_ten, 2);
       		 	$percent_last_ten = $percent_last_ten * 100;
		}
       		echo '<tr>';
        	echo '<td>';
        	echo $currenttypeid;
        	echo '</td>';
        	echo '<td>';
        	echo $streak;
        	echo '</td>';
        	echo '<td>';
        	echo $right;
        	echo '</td>';
        	echo '<td>';
       	 	echo $wrong;
        	echo '</td>';
        	echo '<td>';
        	echo $percent_last_ten;
        	echo '%</td>';
        	echo '<td>';
       	 	echo $percent;
        	echo '%</td>';
       	 	echo '<td>';
        	echo $lastOne;
        	echo '</td>';
        	echo '<td>';
        	echo $nextToLastOne;
      	  	echo '</td>';
       	 	echo '</tr>';
	}
	pg_free_result($result);
	echo '</table>';
}
	?>
</body>
</html>
