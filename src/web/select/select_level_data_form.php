<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
	<title>UPDATE STANDARD</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />

<script>

function getLevelsData()
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
		var response = xmlhttp.responseText;
                var responseArray = response.split(",");
                var code = responseArray[0];
                var codeNumber = parseInt(code);

                if (codeNumber == 101)
		{
			var table = document.getElementById("level_table");
			var i = 1;
	
			while (i < responseArray.length)
			{
				var row = table.insertRow(-1);

				// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);
				var cell6 = row.insertCell(5);
				var cell7 = row.insertCell(6);

				// Add some text to the new cells:
				cell1.innerHTML = "" + responseArray[i];
				i++;
				cell2.innerHTML = "" + responseArray[i];
				i++;
				cell3.innerHTML = "" + responseArray[i];
				i++;
				cell4.innerHTML = "" + responseArray[i];
				i++;
				cell5.innerHTML = "" + responseArray[i];
				i++;
				cell6.innerHTML = "" + responseArray[i];
				i++;
				cell7.innerHTML = "" + responseArray[i];
				i++;
			}
		}
    	}
}
var e = document.getElementById("usernameid");
var str = e.options[e.selectedIndex].value;
xmlhttp.open("POST","/src/database/get_levels_report.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("usernameid=" + str);
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
	
<select id="usernameid" name="id" onchange="getLevelsData()">

<?php
$query = "select id, username, password from users where school_id = ";
$query .= $_SESSION["user_id"];
$query .= " or id = ";
$query .= $_SESSION["user_id"];
$query .= " order by username;";

$result = pg_query($conn,$query);
dbErrorCheck($conn,$result);
$numrows = pg_numrows($result);

echo "<option value=\"all\">all</option>";
for($i = 0; $i < $numrows; $i++) 
{
      	$row = pg_fetch_array($result, $i);
      	echo "<option value=\"$row[0]\">$row[1]</option>";
}
?>

</select>

<p><b> Level Report: </p></b>

<?php
echo '<table id="level_table" border=\"1\">';
        echo '<tr>';
        echo '<td> Start Time';
        echo '</td>';
        echo '<td> End Time';
        echo '</td>';
        echo '<td> Level';
        echo '</td>';
        echo '<td> Transacation Code';
        echo '</td>';
        echo '<td> Standard';
        echo '</td>';
        echo '<td> Game';
        echo '</td>';
        echo '<td> Total Level';
        echo '</td>';
        echo '</tr>';

echo '</table>';
?>

</body>
</html>
