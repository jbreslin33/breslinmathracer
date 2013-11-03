


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

echo "<p1>STATS:<p1>";
echo "<br>";
echo "<br>";

echo "school_id: ";
echo $_SESSION["school_id"];
echo "<br>";

echo "school_name: ";
echo $_SESSION["school_name"];
echo "<br>";
echo "<br>";


echo "user_id: ";
echo $_SESSION["user_id"];
echo "<br>";

echo "username: ";
echo $_SESSION["username"];
echo "<br>";

echo "password: ";
echo $_SESSION["password"];
echo "<br>";

echo "first_name: ";
echo $_SESSION["first_name"];
echo "<br>";

echo "last_name: ";
echo $_SESSION["last_name"];
echo "<br>";
echo "<br>";


echo "last_level_id: ";
echo $_SESSION["last_level_id"];
echo "<br>";

echo "last_level: ";
echo $_SESSION["last_level"];
echo "<br>";

echo "next_level_id: ";
echo $_SESSION["next_level_id"];
echo "<br>";

echo "next_level: ";
echo $_SESSION["next_level"];
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
</body>

</html>

