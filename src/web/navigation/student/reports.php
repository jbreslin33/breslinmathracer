<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<html>

<head>
        <title>REPORTS</title>
<link rel="stylesheet" type="text/css" href="<?php getenv("DOCUMENT_ROOT")?>/css/green_block.css" />
</head>

<body>
<p><b> Reports </p></b>
<?php

session_start();
?>

<ul>
<li><a href="/web/navigation/student/main_menu.php">Main Menu</a></li>
<li><a href="/web/php/logout.php">Logout</a></li>
<li><a href="/web/reports/student/matches.php">Matches</a></li>
<li><a href="/web/reports/student/teams.php">Teams</a></li>

<li><a href="/web/reports/generic/leaderboards.php">Leader Boards</a></li>
<li><a href="/web/reports/generic/item_attempts_realtime.php">Playing</a></li>
<li><a href="/web/reports/generic/homework.php">Home Work</a></li>
<li><a href="/web/reports/generic/tests.php">Tests</a></li>
<li><a href="/web/reports/generic/grades.php">Grades</a></li>
<li><a href="/web/reports/generic/class_grades.php">Class Grades</a></li>
<li><a href="/web/reports/generic/homeworks.php">Daily Homework</a></li>
<li><a href="/web/reports/generic/homework_grades.php">Homework Grades</a></li>
<li><a href="/web/reports/generic/homework_class_grades.php">Class Homework Grades</a></li>

</ul>

</body>
</html>
