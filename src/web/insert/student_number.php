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
include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_students.php"); 

//get a password
$password = getRandomPassword($conn);

//get a username
$newUsername = getNextUsernumber($conn);

//let's actually add the user
insertIntoUsers($conn,$newUsername, $password, $_SESSION["school_id"]);

//get new user id
$new_user_id = selectUserID($conn, $_SESSION["school_id"],$newUsername,$password);

//insert student
insertIntoStudents($conn,$new_user_id,0);

//go to success page
header("Location: /web/select/student.php");

?>

