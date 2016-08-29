<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
?>

<?php

class SignupSchool 
{
	private $mDatabaseConnection;

function __construct($application)
{
        $this->logs = false; 
        if ($this->logs)
        {
                error_log('SignupSchool::SignupSchool');
        }

        $this->mApplication = $application;
        $this->mSignedUp = 0;
        $this->mSchoolExists = false;
        $this->mUserID = 0;
}
public function sendUsernameTaken()
{
	$returnString = "115";
	echo $returnString;
}
public function sendSchoolNameTaken()
{
        $returnString = "120";
        echo $returnString;
}

public function sendLoginSchool()
{
	$returnString = "114,";
	$returnString .= $_SESSION["LOGGED_IN"];
	$returnString .= ",";
	$returnString .= $this->mApplication->mLoginSchool->mUsername;
	$returnString .= ",";
	$returnString .= $_SESSION["role"];
	echo $returnString;
}
public function sendBadPassword()
{
        $returnString = "104";
        echo $returnString;
}

public function process()
{
        $this->mDatabaseConnection = new DatabaseConnection();
        error_log('SignupSchool->process');

	//let's set a var that will be false if there was a problem..
	$problem = "";

        $query = "insert into schools (username,password,name,city,state,zip,email,student_code) values ('";
        $query .= $this->mApplication->mLoginSchool->mUsername;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mPassword;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mName;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mCity;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mState;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mZip;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mEmail;
	$query .= "','";
        $query .= $this->mApplication->mLoginSchool->mStudentCode;
        $query .= "');";
        
	//get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query); // or die('Could not connect: ' . pg_last_error());
	$er = pg_last_error();
	if (strpos($er,'schools_username_key') !== false)
 	{
		$this->sendUsernameTaken();
	}

        if (strpos($er,'schools_name_city_state_zip_key') !== false)
        {
		$this->sendSchoolNameTaken();
        }
	
	//then check login

       	$query = "select username from schools where username = '";
        $query .= $this->mApplication->mLoginSchool->mUsername; 
        $query .= "';";

        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        if ($num > 0)
        {
                $query2 = "select id from schools where username = '";
                $query2 .= $this->mApplication->mLoginSchool->mUsername;
                $query2 .= "' AND password = '";
                $query2 .= $this->mApplication->mLoginSchool->mPassword;
                $query2 .= "';";

                //get db result
                $result2 = pg_query($this->mDatabaseConnection->getConn(),$query2) or die('Could not connect: ' . pg_last_error());

                //get numer of rows
                $num2 = pg_num_rows($result2);

                if ($num2 > 0)
                {
                	$this->mSignedUp = 1;
                        $_SESSION["LOGGED_IN"] = 1;
                        $this->mBadPassword = 0;
                        $this->mBadUsername = 0;

                        //get the id from user table
                        $school_id = pg_Result($result2, 0, 'id');

                        //set sessions
                        $_SESSION["school_name"] = $this->mApplication->mLoginSchool->mName;
                        $_SESSION["school_id"] = $school_id;
                        $_SESSION["LOGGED_IN"] = 1;
                        $_SESSION["role"] = 3;

			//$this->sendLoginSchool();
                }
                else
                {
                	$this->mSignedUp = 0;
                        $_SESSION["LOGGED_IN"] = 0;
                        $this->mBadPassword = 1;
                        $this->mBadUsername = 0;
                        $_SESSION["school_id"] = 0;

			$this->sendBadPassword();
                }
        }
        else
        {
                $this->mSignedUp = 0;
                $_SESSION["LOGGED_IN"] = 0;
                $this->mBadUsername = 1;
                $this->mBadPassword = 0;
                $_SESSION["school_id"] = 0;

		$this->sendUsernameTaken();
        }
}//end function
}// end class
?>

