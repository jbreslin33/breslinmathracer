<?php

class Signup
{
    private $mDatabaseConnection;

function __construct()
{
	$this->mDatabaseConnection = new DatabaseConnection();
}

function __destruct()
{


}

public function fireUp()
{
	$userNameString = $_SESSION["username"];

	$space = checkForSpaces($userNameString);
	$taken = $this->checkForUser($_SESSION["username"]);

        //insert user
        $this->insertIntoUsers($_SESSION["username"], $_SESSION["password"], $_SESSION["first_name"], $_SESSION["last_name"]);
        $databaseConnection = new DatabaseConnection();
        $user_id = $databaseConnection->selectUserID($_SESSION["username"], $_SESSION["password"]);
        if ($user_id)
        {
                //set sessions
                $_SESSION["user_id"] = $user_id;
        }
        else
        {
                $_SESSION["Login"] = "NO";
        }

        //set session levels

        $sessions = new Sessions();
        $sessions->setSessionVariables();

        $_SESSION["Login"] = "YES";
        header("Location: /web/home/home.php");
}

public function checkInput()
{

if ($taken || $space || $_SESSION["username"] == '')
{
        if ($taken)
        {
                header("Location: /web/signup/signup_form.php?message=name_taken");
        }
        if ($space)
        {
                header("Location: /web/signup/signup_form.php?message=no_spaces");
        }
        if ($_SESSION["username"] == '')
        {
                header("Location: /web/signup/signup_form.php?message=no_name");
        }
        if ($_SESSION["first_name"] == '')
        {
                header("Location: /web/signup/signup_form.php?message=no_first_name");
        }
        if ($_SESSION["last_name"] == '')
        {
                header("Location: /web/signup/signup_form.php?message=no_last_name");
        }
}
	return true;
}

public function insertIntoUsers($username,$password,$first_name,$last_name)
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
        $query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
        $query .= "',1";
        $query .= ");";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
}

public function insertIntoUsersWithSchool($username,$password,$first_name,$last_name,$school_id)
{
        $query = "INSERT INTO users (username, password, first_name, last_name, school_id) VALUES ('";
        $query .= $username;
        $query .= "','";
        $query .= $password;
        $query .= "','";
        $query .= $first_name;
        $query .= "','";
        $query .= $last_name;
        $query .= "',";
        $query .= $school_id;
        $query .= ");";

        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());
}

public function checkForUser($username)
{
        //query string
        $query = "select username from users where username = '";
        $query .= $username;
        $query .= "';";

        //get db result
        $result = pg_query($this->mDatabaseConnection->getConn(),$query) or die('Could not connect: ' . pg_last_error());

        //get numer of rows
        $num = pg_num_rows($result);

        // if there is a row then the username and password pair exists
        if ($num == 1)
        {
                return true;
        }
        else
        {
                return false;
        }
}

}

?>
