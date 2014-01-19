<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

//i should show a diff page depending on whether you are root
if  ($_SESSION["username"] == "root")
{
include(getenv("DOCUMENT_ROOT") . "/web/select/select_root.php");
}
else
{
include(getenv("DOCUMENT_ROOT") . "/web/select/select_user.php");
}
?>

