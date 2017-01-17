<?php
//fill php vars
$returnString = "139,";
if (isset($_SESSION["milestones"]))
{
	$returnString .= $_SESSION["milestones"];
}
else
{
	$_SESSION["milestones"] = "139,k.cc";
}
error_log($returnString);
echo $returnString;

?>
