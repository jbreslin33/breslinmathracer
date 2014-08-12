<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE STANDARD</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<script>

function getLevels()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
  	{
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
		xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
		var x = document.getElementById("levels");
		var length = x.options.length;
		
		var i;
    		for(i=x.options.length-1;i>=0;i--)
    		{
        		x.remove(i);
    		}		
		
		var levelsTotal = parseInt(xmlhttp.responseText);	
	
		for (i = 1; i <= levelsTotal; i++) 
		{
			var option = document.createElement("option");
			option.text = "" + i;
			x.add(option);
		}
    	}
}
var e = document.getElementById("standardsid");
var str = e.options[e.selectedIndex].value;
xmlhttp.open("POST","/src/database/get_levels.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("standardid=" + str);
}

</script>

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
	<p><b> Select Username: </p></b>
	
	<form method="post" action="/web/update/updatelevel.php">

<select name="id">

<?php
$query = "select id, username, password from users where school_id = ";
$query .= $_SESSION["user_id"];
$query .= " order by username;";
echo "hello query";
echo $query;
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
      	echo "<option value=\"$row[0]\">$row[1]</option>";
}
?>

</select>

<select id="standardsid" name="standardid" onchange="getLevels()">

<?php
$query = "select id from learning_standards";
$query .= " order by progression;";
$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

for($i = 0; $i < $numrows; $i++)
{
        $row = pg_fetch_array($result, $i);
        echo "<option value=\"$row[0]\">$row[0]</option>";
}
?>

</select>

<select id="levels" name="levels">

</select>
        
	<p><input type="submit" value="UPDATE" /></p>

	</form>
	
<p><b> Current Student List: </p></b>

<?php
$query = "select username, password, first_name, last_name from users where school_id = ";
$query .= $_SESSION["user_id"];
$query .= " or id = ";
$query .= $_SESSION["user_id"];
$query .= " order by username;";

$result = pg_query($conn,$query);
$numrows = pg_numrows($result);

echo '<table border=\"1\">';
        echo '<tr>';
        echo '<td> Username';
        echo '</td>';
        echo '<td> Password';
        echo '</td>';
        echo '<td> First Name';
        echo '</td>';
        echo '<td> Last Name';
        echo '</td>';
        echo '</tr>';

	for($r = 0; $r < $numrows; $r++)
	{
                $row = pg_fetch_array($result, $r);
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
                echo '</tr>';
	}
pg_free_result($result);

echo '</table>';
?>

</body>
</html>
