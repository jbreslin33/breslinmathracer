<?php
//fill php vars
$returnString = "140";
if (isset($_SESSION["classmates"]))
{
	$returnString .= $_SESSION["classmates"];
}
else
{
	$_SESSION["milestones"] = "140,Tam:Le:74";
}
error_log($returnString);
echo $returnString;

?>
