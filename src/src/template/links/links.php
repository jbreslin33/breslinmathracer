<?php
  //start new session
  session_start();
?>


<p1>LINKS:<p1>
<br>
<br>

<p1>MAIN PAGE:<p1>
<br>
<a href="../main/main.php">MAIN PAGE</a>
<br>
<br>

<p1>GAMES:<p1>
<br>
<a href="../game/chooser.php">Play Game...this should take you right to game choice page i.e. DUNGEON, Helicopter</a>
<br>
<br>

<?php
if ($_SESSION["username"] == "root")
{
	include("inserts.php");
}
 ?>

<?php
include("selects.php");
 ?>


<?php
include("stats.php");
 ?>


