<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE ROOM</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<ul>

<?php
session_start();

if ($_SESSION["role"] == 1)
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
        echo "<li><a href=\"/web/navigation/school/edit.php\">Edit</a></li>";
}
else
{
        echo "<li><a href=\"/web/navigation/school/main_menu.php\">Main Menu</a></li>";
}
?>
<li><a href="/web/php/logout.php">Logout</a></li>
</ul>

<?php
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

$original_room_id = 0;

if (isset($_POST["original_room_id"]))
{
        $original_room_id = $_POST["original_room_id"];
}

else if (isset($_GET['original_room_id']))
{
        $original_room_id = $_GET['original_room_id'];
}
else
{

}
?>


<p><b> Select Room: </p></b>

<form method="post" action="/web/update/school/update_milestone.php">

<select id="original_room_id" name="original_room_id" onchange="loadAgain()">
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
        if ($row[0] == $original_room_id)
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
</form>
<script>
function loadAgain()
{
        var y = document.getElementById("original_room_id").value;
        document.location.href = '/web/update/school/update_milestone.php?original_room_id=' + y;
}
</script>



	<p><b> Select Student: </p></b>
	
	<form method="post" action="/web/update/school/updatemilestone.php">

<select name="user_id">

<?php
$query = 0;
if ($original_room_id == 9999)
{
	$query = "select username, first_name, last_name, score, last_activity, id from users where school_id = ";
	$query .= $_SESSION["school_id"];
	$query .= " order by username;";
}
else
{
	$query = "select username, first_name, last_name, score, last_activity, id from users where school_id = ";
	$query .= $_SESSION["school_id"];
	$query .= " AND room_id = ";
	$query .= $original_room_id;
	$query .= " order by username;";
}	

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
	$string = $row[0];
	$string .= " ";
	$string .= $row[1];
	$string .= " ";
	$string .= $row[2];
	$string .= " ";
	$string .= $row[3];
	$string .= " ";
	$string .= $row[4];
      	echo "<option value=\"$row[5]\">$string</option>";
}
?>
</select>
	<p><b> Select Milestone: </p></b>


<select name="milestone_value">
<?php
echo "<option value=\"0\">0</option>";
echo "<option value=\"1\">1</option>";
?>
</select>

<select name="milestone_id">
<?php
echo "<option value=\"k_cc\">k_cc</option>";
echo "<option value=\"k_oa_a_4\">k_oa_a_4</option>";
echo "<option value=\"k_oa_a_5\">k_oa_a_5</option>";
echo "<option value=\"g1_oa_b_3\">g1_oa_b_3</option>";
echo "<option value=\"g1_oa_c_6\">g1_oa_c_6</option>";
echo "<option value=\"g1_nbt\">g1_nbt</option>";
echo "<option value=\"g2_oa_b_2\">g2_oa_b_2</option>";
echo "<option value=\"g2_nbt\">g2_nbt</option>";

echo "<option value=\"alltimetwo\">2</option>";
echo "<option value=\"alltimethree\">3</option>";
echo "<option value=\"alltimefour\">4</option>";
echo "<option value=\"alltimefive\">5</option>";
echo "<option value=\"alltimesix\">6</option>";
echo "<option value=\"alltimeseven\">7</option>";
echo "<option value=\"alltimeeight\">8</option>";
echo "<option value=\"alltimenine\">9</option>";

echo "<option value=\"g3_oa_c_7\">g3_oa_c_7</option>";

echo "<option value=\"g3_nbt\">g3_nbt</option>";
echo "<option value=\"g4_oa_b_4\">g4_oa_b_4</option>";
echo "<option value=\"g4_nbt_b_4\">g4_nbt_b_4</option>";
echo "<option value=\"g4_nbt_b_5\">g4_nbt_b_5</option>";
echo "<option value=\"g4_nbt_b_6\">g4_nbt_b_6</option>";
echo "<option value=\"g4_nf_b_3_c\">g4_nf_b_3_c</option>";
echo "<option value=\"g5_oa_a_1\">g5_oa_a_1</option>";
echo "<option value=\"g5_nbt_b_5\">g5_nbt_b_5</option>";
echo "<option value=\"g5_nbt_b_6\">g5_nbt_b_6</option>";
echo "<option value=\"g5_nbt_b_7\">g5_nbt_b_7</option>";
echo "<option value=\"g5_nf_a_1\">g5_nf_a_1</option>";
echo "<option value=\"g6_rp\">g6_rp</option>";
echo "<option value=\"g6_ns\">g6_ns</option>";
echo "<option value=\"g6_ee\">g6_ee</option>";
echo "<option value=\"g6_g\">g6_g</option>";
echo "<option value=\"g6_sp\">g6_sp</option>";
?>
</select>


	<p><input type="submit" value="UPDATE" /></p>
</form>

</body>
</html>
