<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<?php
session_start();

include(getenv("DOCUMENT_ROOT") . "/web/navigation/top_links.php");
echo "<br>";
include(getenv("DOCUMENT_ROOT") . "/web/insert/links.php");
?>

<?php
$allowedExts = array("jpg", "jpeg", "txt", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "text/plain")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
    	{
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    	}
  	else
    	{
    		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    		echo "Type: " . $_FILES["file"]["type"] . "<br>";
    		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    		//if (file_exists("upload/" . $_FILES["file"]["name"]))
      		//{
      		//	echo $_FILES["file"]["name"] . " already exists. ";
      		//}
    		//else
      		//{
      			move_uploaded_file($_FILES["file"]["tmp_name"],
      			"upload/" . $_FILES["file"]["name"]);
      			echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
//			include(getenv("DOCUMENT_ROOT") . "/web/insert/class_bulk.php?userfile=$_FILES["file"]["name"]");
			$userfile = $_FILES["file"]["name"];
			header("Location: class_bulk.php?userfile=$userfile");

      		//}
    	}
}
else
{
	echo "Invalid file";
}
?>

</body>
</html>


