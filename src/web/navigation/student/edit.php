<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>EDIT</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<p><b> EDIT </p></b>
<?php

session_start();
?>

<ul>
<li><a href="/web/navigation/student/main_menu.php">Main Menu</a></li>
<li><a href="/web/php/logout.php">Logout</a></li>
<li><a href="/web/update/student/update_school.php">School</a></li>
<li><a href="/web/update/student/update_room.php">Room</a></li>
<li><a href="/web/update/student/update_team.php">Team</a></li>
<li><a href="/web/update/student/update_first_name.php">First Name</a></li>
<li><a href="/web/update/student/update_last_name.php">Last Name</a></li>
<li><a href="/web/update/student/update_password.php">Password</a></li>
</ul>

</body>
</html>
