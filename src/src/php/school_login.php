<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

class SchoolLogin 
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

        $query = "select username from schools where username = '";
        $query .= $_SESSION["username"];
        $query .= "';";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
		$query2 = "select id from schools where username = '";
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
                	$school_id = pg_Result($result2, 0, 'id');

			//set sessions
                	$_SESSION["school_name"] = $_SESSION["name"];
                	$_SESSION["school_id"] = $school_id;
        		$_SESSION["LOGGED_IN"] = 1;
		}
		else
		{
        		$_SESSION["LOGGED_IN"] = 0;
        		$this->mBadPassword = 1;
        		$this->mBadUsername = 0;
        		$_SESSION["school_id"] = 0;
		}
        }
        else
        {
        	$_SESSION["LOGGED_IN"] = 0;
        	$this->mBadUsername = 1;
        	$this->mBadPassword = 0;
        	$_SESSION["school_id"] = 0;
        }
}
}

?>
