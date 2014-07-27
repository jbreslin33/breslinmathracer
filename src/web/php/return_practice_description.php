<?php
//fill php vars
$returnString = "108,";

//lets hardcode for testing...
$_SESSION["practice_description"] = 'k.cc.a.1_1:k.cc.a.1_2:k.cc.a.1_3:k.cc.a.1_4:k.cc.a.2_1:k.cc.a.3_2:k.cc.a.3_3:k.cc.a.3_1:k.cc.a.3_2:k.cc.a.3_3';
$returnString .= $_SESSION["practice_description"];
echo $returnString;
?>
