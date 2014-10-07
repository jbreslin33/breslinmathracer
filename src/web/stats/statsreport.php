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

<p><b> STATS REPORT: </p></b>

<?php
$username = $_GET["username"];
$progression_start   = $_GET["progression_start"];
$progression_end     = $_GET["progression_end"];
$progression_counter = $progression_start;

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> StartTime';
        echo '</td>';
        echo '<td> Username';
        echo '</td>';
        echo '<td> Firstname';
        echo '</td>';
        echo '<td> Lastname';
        echo '</td>';
        echo '<td> ItemType';
        echo '</td>';
        echo '<td> Code';
        echo '</td>';
        echo '</tr>';

while ($progression_counter < $progression_end)  
{

$query = "select id, progression from item_types where progression > ";
$query .= $progression_counter;
$query .= " order by progression LIMIT 1";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

$currenttypeid = 0; 

if ($numrows > 0) 
{
        $row = pg_fetch_array($result, 0);
	$currenttypeid = $row[0];
	$progression_counter = $row[1];
}

$query = "select item_attempts.start_time, users.username, users.first_name, users.last_name, item_attempts.item_types_id, item_attempts.transaction_code from item_attempts JOIN item_types ON item_types.id=item_attempts.item_types_id JOIN evaluations_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN users ON evaluations_attempts.user_id=users.id where users.username = '";
$query .= $username;
$query .= "' AND item_types.id = '";
$query .= $currenttypeid;
$query .= "' order by item_attempts.start_time desc;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++) 
{
        $row = pg_fetch_array($result, $i);

        echo '<tr>';
        echo '<td>';
        echo $row[0];
        echo '</td>';
        echo '<td>';
        echo $row[1];
        echo '</td>';
        echo '<td>';
        echo $row[2];
        echo '</td>';
        echo '<td>';
        echo $row[3];
        echo '</td>';
        echo '<td>';
        echo $row[4];
        echo '</td>';
        echo '<td>';
        echo $row[5];
        echo '</td>';
        echo '</tr>';
}
}
pg_free_result($result);
echo '</table>';
?>
</body>
</html>
