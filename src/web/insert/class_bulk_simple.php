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

//$_FILES["file"]["name"];
//$file_handle = fopen("viso.txt", "r");
$userfile = $_GET["userfile"]; 
$userfile = "upload/" . $userfile;
echo $userfile;
$file_handle = fopen($userfile, "r");
//$file_handle = fopen($_FILES["file"]["name"], "r");
//$file_handle = $_GET["userfile"];

while (!feof($file_handle))
{
        $line = fgets($file_handle);
	echo $line;
	//to protect against end of file for reals
	if (!feof($file_handle))
 	{
        	$pieces = explode(":",$line);

		$newUsername = $pieces[0];
		$password    = trim($pieces[1]);
		$full_name = trim($pieces[4]);

        	$full_name_pieces = explode(" ",$full_name);
		$size = count($full_name_pieces);
		if ($size == 0)
		{
			$first_name = '';
			$middle_name1 = '';
			$middle_name2 = '';
			$middle_name3 = '';
			$last_name = '';
		}
		
		if ($size == 1)
		{
			$first_name = '';
			$middle_name1 = '';
			$middle_name2 = '';
			$middle_name3 = '';
			$last_name = $full_name_pieces[0];
		}
		
		if ($size == 2)
		{
			$first_name = $full_name_pieces[0];
			$middle_name1 = '';
			$middle_name2 = '';
			$middle_name3 = '';
			$last_name = $full_name_pieces[1];
		}
		
		if ($size == 3)
		{
			$first_name = $full_name_pieces[0];
			$middle_name1 = $full_name_pieces[1];
			$middle_name2 = '';
			$middle_name3 = '';
			$last_name = $full_name_pieces[2];
		}
		
		if ($size == 4)
		{
			$first_name = $full_name_pieces[0];
			$middle_name1 = $full_name_pieces[1];
			$middle_name2 = $full_name_pieces[2];
			$middle_name3 = '';
			$last_name = $full_name_pieces[3];
		}
		
		if ($size == 5)
		{
			$first_name = $full_name_pieces[0];
			$middle_name1 = $full_name_pieces[1];
			$middle_name2 = $full_name_pieces[2];
			$middle_name2 = $full_name_pieces[3];
			$last_name = $full_name_pieces[4];
		}

		//let's actually add the user
		insertIntoUsersWithFullName($conn,$newUsername, $password, $_SESSION["school_id"],$first_name,$middle_name1,$middle_name2,$middle_name3,$last_name);

		//get new user id
		$new_student_id = selectUserID($conn, $_SESSION["school_id"],$newUsername,$password);

		//insert student
		insertIntoStudents($conn,$new_student_id,$_SESSION["school_id"]);

		//insert first transaction for levels to lowest level
		insertFirstLevelTransaction($conn,$new_student_id);
	}
}

//go to success page
header("Location: /web/select/student.php");

?>

