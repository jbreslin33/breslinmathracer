
<?php
session_start();
//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php");
$conn = dbConnect();

//i should show a diff page depending on whether you are root
if  ($_SESSION["username"] == "root")
{
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_root.php");
echo "<br>";
include(getenv("DOCUMENT_ROOT") . "/web/insert/links.php");

} 
else
{
include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links_user.php");
echo "<br>";
}
?>



