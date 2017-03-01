<?php
//fill php vars
$returnString = "140,";
if (isset($_SESSION["classmates"]))
{
	$returnString .= $_SESSION["classmates"];
}
else
{
	$_SESSION["milestones"] = "140,Tam:Le:74";
}
echo $returnString;

?>
