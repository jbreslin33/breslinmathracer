<?php 
//start session
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php"); 
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/get_random_password.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/get_next_usernumber.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_users.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/select_user_id.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_teachers.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_students.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_first_level_transaction.php"); 

$i = 0;

$file_handle = fopen("viso.txt", "r");

while (!feof($file_handle))
{
	$line = fgets($file_handle);
	$pieces = explode(",",$line); 

	echo $pieces[0];
	echo $pieces[1];

	insertIntoUsers($conn,$pieces[0], $pieces[1], $_SESSION["school_id"]);

	$new_student_id = selectUserID($conn, $_SESSION["school_id"],$pieces[0],$pieces[1]);

	insertIntoStudents($conn,$new_student_id,1);

	insertFirstLevelTransaction($conn,$new_student_id);

	$i++;
}

fclose($file_handle);

//go to success page
//header("Location: /web/select/student.php");

?>

