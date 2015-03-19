<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>REMEDIATE</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$core_standard_id = 0;
$room_id = 0;
$id = 0;

if (isset($_POST["core_standard_id"]))
{
	$core_standard_id = $_POST["core_standard_id"];
}

else if (isset($_GET['core_standard_id']))
{
	$core_standard_id = $_GET['core_standard_id'];
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

if (isset($_POST["id"]))
{
        $id = $_POST["id"];

	if (isset($_POST["add_remove"]))
	{
        	$add_remove = $_POST["add_remove"];
		$sql = "";
		if ($add_remove == 1)
		{
			$sql .= "insert into remediate (core_standards_id,user_id) values ('";
			$sql .= $core_standard_id;
			$sql .= "',";
			$sql .= $id;
			$sql .= ");";

		}
		else if ($add_remove == 2)
		{
			$sql .= "delete from remediate where core_standards_id = '"; 
			$sql .= $core_standard_id;
			$sql .= "' AND user_id = ";
			$sql .= $id;
			$sql .= ";";

		}
		else
		{
			$sql .= "insert into remediate (core_standards_id,user_id) values ('";
			$sql .= $core_standard_id;
			$sql .= "',";
			$sql .= $id;
			$sql .= ");";
		}
		$result = pg_query($conn,$sql);
	}
}


include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_school.php");
echo "<br>";
?>

        <p><b> Select Username: </p></b>

        <form method="post" action="/web/stats/remediate.php">

<select id="core_standard_id" name="core_standard_id" onchange="loadAgain()">
<?php
$query = "select id from core_standards order by id asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
	if ($row[0] == $core_standard_id)
	{
        	echo "<option selected=\"selected\" value=\"$row[0]\"> $row[0] </option>";
	}	
	else
	{
        	echo "<option value=\"$row[0]\"> $row[0] </option>";
	}
}
?>
</select>

<select id="room_id" name="room_id" onchange="loadAgain()">
<?php
$query = "select id, name from rooms where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " order by name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

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


<script>
function loadAgain()
{
    	var c = document.getElementById("core_standard_id").value;
    	var r = document.getElementById("room_id").value;
	document.location.href = '/web/stats/remediate.php?core_standard_id=' + c + '&room_id=' + r; 
}
</script>


<select name="id">

<?php
$query = "select last_name, first_name, username, id, score, unmastered from users where school_id = ";
$query .= $_SESSION["school_id"];
$query .= " and room_id = ";
$query .= $room_id;
$query .= " order by last_name asc;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

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
        echo "<option value=\"$row[3]\"> $s </option>";
}
?>

</select>

<select name="add_remove">
<option value="1">ADD</option> 
<option value="2">REMOVE</option> 

</select>


        <p><input type="submit" value="UPDATE" /></p>

        </form>

<p><b> REMEDIATE: </p></b>

<?php
	echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Last Name';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Username';
        echo '</td>';
        echo '<td> ID';
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

	$query = "select users.id, users.username, users.first_name, users.last_name, score, unmastered from remediate JOIN users ON users.id=remediate.user_id AND remediate.core_standards_id = '";
	$query .= $core_standard_id;
	$query .= "' AND school_id = ";
	$query .= $_SESSION["school_id"];
	$query .= " AND room_id = ";
	$query .= $room_id;
	$query .= " order by last_name asc;";
	$result = pg_query($conn,$query);
	$numrows = pg_numrows($result);

	for($i = 0; $i < $numrows; $i++) 
	{
        	$row = pg_fetch_array($result, $i);
		$id = $row[0];
		$username = $row[1];
		$firstName = $row[2];
		$lastName = $row[3];
		$score = $row[4];
		$unmastered = $row[5];
       	
		echo '<tr>';
        	echo '<td>';
        	echo $lastName;
        	echo '</td>';
        	echo '<td>';
        	echo $firstName;
        	echo '</td>';
        	echo '<td>';
        	echo $username;
        	echo '</td>';
        	echo '<td>';
        	echo $id;
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
?>
</body>
</html>
