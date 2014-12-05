<?php
//fill php vars
$returnString = "112,";
if (isset($_SESSION["scroll"]))
{
	$returnString .= $_SESSION["scroll"];
}
else
{
	$_SESSION["scroll"] = "practicing";
}
echo $returnString;
?>
