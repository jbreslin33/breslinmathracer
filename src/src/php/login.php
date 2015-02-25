<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/sessions.php");

class Login 
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
	$this->mBadUsername = 0;
	$this->mBadPassword = 0;

	$this->process();
}

public function process()
{
	//let's set a var that will be false if there was a problem..
	$problem = "";

        $query = "select username from users where username = '";
        $query .= $_SESSION["username"];
        $query .= "';";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
		$query2 = "select id, password, first_name, last_name, core_standards_id, school_id, room_id, team_id, teacher_id from users where username = '";
        	$query2 .= $_SESSION["username"];
        	$query2 .= "' AND password = '";
        	$query2 .= $_SESSION["password"];
        	$query2 .= "';";
	
		//get db result
        	$result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());

        	//get numer of rows
        	$num2 = pg_num_rows($result2);
        
		if ($num2 > 0)
		{
        		$_SESSION["LOGGED_IN"] = 1;
        		$this->mBadPassword = 0;
        		$this->mBadUsername = 0;

			//get the id from user table
                	$first_name = pg_Result($result2, 0, 'first_name');
                	$last_name = pg_Result($result2, 0, 'last_name');
                	$user_id = pg_Result($result2, 0, 'id');
                	$core_standards_id = pg_Result($result2, 0, 'core_standards_id');
                	$school_id = pg_Result($result2, 0, 'school_id');
                	$teacher_id = pg_Result($result2, 0, 'teacher_id');
                	$room_id = pg_Result($result2, 0, 'room_id');
                	$team_id = pg_Result($result2, 0, 'team_id');

			//set sessions
                	$_SESSION["first_name"] = $first_name;
                	$_SESSION["last_name"] = $last_name;
                	$_SESSION["user_id"] = $user_id;
        		$_SESSION["LOGGED_IN"] = 1;
        		$_SESSION["raw_data"] = NULL; 
                	$_SESSION["core_standards_id"] = $core_standards_id;
                	$_SESSION["school_id"] = $school_id;
                	$_SESSION["teacher_id"] = $teacher_id;
                	$_SESSION["room_id"] = $room_id;
                	$_SESSION["team_id"] = $team_id;

        		//SESSION
        		$sessions = new Sessions();
		}
		else
		{
        		$_SESSION["LOGGED_IN"] = 0;
        		$this->mBadPassword = 1;
        		$this->mBadUsername = 0;
        		$_SESSION["user_id"] = 0;
		}
        }
        else
        {
        	$_SESSION["LOGGED_IN"] = 0;
        	$this->mBadUsername = 1;
        	$this->mBadPassword = 0;
        	$_SESSION["user_id"] = 0;
        }
}

}

?>
