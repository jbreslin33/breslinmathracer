<?php 
//start session
session_start();

//db connection
include(getenv("DOCUMENT_ROOT") . "/src/database/db_connect.php"); 
$conn = dbConnect();

include(getenv("DOCUMENT_ROOT") . "/src/database/insert_into_users.php"); 
include(getenv("DOCUMENT_ROOT") . "/src/database/select_user_id.php"); 

$userfile = $_GET["userfile"]; 
$userfile = "upload/" . $userfile;
echo $userfile;
$file_handle = fopen($userfile, "r");

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

		//right here you should select to see if user exists....
		$tempid = selectUserID($conn, $_SESSION["school_id"],$newUsername,$password);
		if ($tempid != 0)
		{

		}
		else
		{	
			//let's actually add the user
			insertIntoUsersWithSchool($conn, $newUsername, $password, $first_name, $last_name, $_SESSION["user_id"]);
		}
	}
}

//go to success page
//header("Location: /web/select/student.php");

?>

