<?php
//grab buffer
$messageFrame = $_POST["messageframe"];
$clientID = $_POST["clientid"];
$outgoingSequence = $_POST["outgoingsequence"];
$flags = $_POST["flags"];
$keyCurrent = $_POST["keycurrent"];

//have to create this every time because it cannot be save in a session variable as it's a resource
$sock = socket_create(AF_INET, SOCK_DGRAM,0);

$packed = pack("c",$messageFrame); //signed integer
$packed .= pack("c",$clientID); //signed integer
$packed .= pack("s",$outgoingSequence); //signed short mOutgoingSequence
$packed .= pack("c",$flags); //signed integer
$packed .= pack("c",$keyCurrent); //signed integer

$len = strlen($packed);

socket_sendto($sock, $packed, $len, 0, '192.168.2.77', 30004);
socket_close($sock);
echo $clientID;
?>

