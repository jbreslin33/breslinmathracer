<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state_machine.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/states/core_application_states.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
//temp
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_student.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_school.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/signup_student.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/signup_school.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/scroll.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/item_attempt.php");

//start new session
session_start();

if (!isset($_SESSION["APPLICATION"]))
{
        $APPLICATION = new CoreApplication();
	$_SESSION["APPLICATION"] = $APPLICATION;
}
else
{
	$APPLICATION = $_SESSION["APPLICATION"];
}	

if (isset($_GET["code"]))
{
	$APPLICATION->mCode = $_GET["code"];

	if ($APPLICATION->mCode > 0 && $APPLICATION->mCode < 44)
	{
		$APPLICATION->mEvaluationsID = $APPLICATION->mCode;
	}  
        if ($APPLICATION->mCode > 1000 && $APPLICATION->mCode < 1500)
        {
                $APPLICATION->mEvaluationsID = $APPLICATION->mCode;
        }

}

unset($APPLICATION->mDataArray);
$APPLICATION->mDataArray = array();

//parseData
if ($APPLICATION->mCode == 114)
{
        $APPLICATION->mLoginSchool->mUsername = $_GET["username"];
        $APPLICATION->mLoginSchool->mPassword = $_GET["password"];
}
if ($APPLICATION->mCode == 117)
{
	$APPLICATION->mLoginStudent->mUsername = $_GET["username"]; 
	$APPLICATION->mLoginStudent->mPassword = $_GET["password"]; 
}
if ($APPLICATION->mCode == 119)
{
	$APPLICATION->mLoginTeam->mUsername = $_GET["username"]; 
	$APPLICATION->mLoginTeam->mPassword = $_GET["password"]; 
}
if ($APPLICATION->mCode == 217)
{
	$APPLICATION->mLoginStudent->mUsername = $_GET["username"]; 
	$APPLICATION->mLoginStudent->mPassword = $_GET["password"]; 
	$APPLICATION->mLoginStudent->mFirstName = $_GET["first_name"]; 
	$APPLICATION->mLoginStudent->mLastName = $_GET["last_name"]; 
}

if ($APPLICATION->mCode == 218)
{
        $APPLICATION->mLoginSchool->mUsername = $_GET["username"];
        $APPLICATION->mLoginSchool->mPassword = $_GET["password"];
        $APPLICATION->mLoginSchool->mName = $_GET["name"];
        $APPLICATION->mLoginSchool->mCity = $_GET["city"];
        $APPLICATION->mLoginSchool->mState = $_GET["state"];
        $APPLICATION->mLoginSchool->mZip = $_GET["zip"];
        $APPLICATION->mLoginSchool->mEmail = $_GET["email"];
        $APPLICATION->mLoginSchool->mStudentCode = $_GET["student_code"];
}

//add_game_K
if ($APPLICATION->mCode == 1 || $APPLICATION->mCode == 3 || $APPLICATION->mCode == 4 || $APPLICATION->mCode == 5 || $APPLICATION->mCode == 6 || $APPLICATION->mCode == 7 || $APPLICATION->mCode == 8 || $APPLICATION->mCode == 9 || $APPLICATION->mCode == 10 || $APPLICATION->mCode == 11 || $APPLICATION->mCode == 12 || $APPLICATION->mCode == 13 || $APPLICATION->mCode == 14 || $APPLICATION->mCode == 15 || $APPLICATION->mCode == 16 || $APPLICATION->mCode == 17 || $APPLICATION->mCode == 18 || $APPLICATION->mCode == 19 || $APPLICATION->mCode == 20 || $APPLICATION->mCode == 21 || $APPLICATION->mCode == 22 || $APPLICATION->mCode == 23 || $APPLICATION->mCode == 24 || $APPLICATION->mCode == 25 || $APPLICATION->mCode == 26 || $APPLICATION->mCode == 27 || $APPLICATION->mCode == 28 || $APPLICATION->mCode == 29 || $APPLICATION->mCode == 30 || $APPLICATION->mCode == 31  || $APPLICATION->mCode == 32 || $APPLICATION->mCode == 33 || $APPLICATION->mCode == 34 || $APPLICATION->mCode == 35  || $APPLICATION->mCode == 36  || $APPLICATION->mCode == 37 || $APPLICATION->mCode == 38 || $APPLICATION->mCode == 39 || $APPLICATION->mCode == 40 || $APPLICATION->mCode > 1000)
{
        $APPLICATION->mDataArray[] = $APPLICATION->mCode;
        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["datenow"];
        $APPLICATION->mDataArray[] = $_GET["score"];
        $APPLICATION->mDataArray[] = $_GET["unmastered"];
}
if ($APPLICATION->mCode == 2)
{
        $APPLICATION->mDataArray[] = "2";
        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["datenow"];
}
if ($APPLICATION->mCode == 101)
{
        $APPLICATION->mDataArray[] = "101";
        $APPLICATION->mDataArray[] = $_GET["itemattemptid"];
        $APPLICATION->mDataArray[] = $_GET["transactioncode"];
        $APPLICATION->mDataArray[] = $_GET["answer"];
        $APPLICATION->mDataArray[] = $_GET["highest"];
        $APPLICATION->mDataArray[] = $_GET["teammateid"];
	$APPLICATION->mLoginStudent->mTeammateID = $_GET["teammateid"]; 
}

//update
$APPLICATION->update();	
$APPLICATION->mCode = 0;

?>

<?php

class CoreApplication 
{

function __construct()
{
	//init
	$this->run_once = false;

	//db connection for session

	//big vars
	$this->mRef_id = 'login';

	$this->mInitialized = 0;
	$this->mEvaluationsID = 41;
	$this->mEvaluationsAttempt = 0;

	$this->mDataArray = array();
	$this->mCode = 0;
	$this->mRawData = 0;
	$this->mLogs = false;
	$this->mCoreStateMachine = new StateMachine($this);
        
	//admin
       	$this->mGLOBAL_CORE_APPLICATION   = new GLOBAL_CORE_APPLICATION        ($this);
        $this->mINIT_CORE_APPLICATION     = new INIT_CORE_APPLICATION          ($this);
        $this->mWAIT_CORE_APPLICATION     = new WAIT_CORE_APPLICATION          ($this);
        $this->mLOGIN_STUDENT_APPLICATION = new LOGIN_STUDENT_APPLICATION      ($this);
        $this->mLOGIN_SCHOOL_APPLICATION = new LOGIN_SCHOOL_APPLICATION      ($this);
        $this->mSIGNUP_STUDENT_APPLICATION = new SIGNUP_STUDENT_APPLICATION      ($this);
        $this->mSIGNUP_SCHOOL_APPLICATION = new SIGNUP_SCHOOL_APPLICATION      ($this);
        $this->mWAIT_GAME_APPLICATION     = new WAIT_GAME_APPLICATION      ($this);
        $this->mMAIN_MENU_APPLICATION     = new MAIN_MENU_APPLICATION      ($this);
        $this->mNORMAL_CORE_APPLICATION   = new NORMAL_CORE_APPLICATION        ($this);
        $this->mPRACTICE_APPLICATION      = new PRACTICE_APPLICATION        ($this);
        
        $this->mCoreStateMachine->setGlobalState($this->mGLOBAL_CORE_APPLICATION);
        $this->mCoreStateMachine->changeState($this->mINIT_CORE_APPLICATION);

	$this->mNormal = new Normal($this);	
	$this->mLoginStudent  = new LoginStudent($this);	
	$this->mLoginSchool   = new LoginSchool($this);	
	$this->mSignupStudent = new SignupStudent($this);	
	$this->mSignupSchool  = new SignupSchool($this);	
	
	$this->mScroll = new Scroll();	
	
	$this->mEvaluationsAttemptsArray = array();

	$this->update();
}

public function update()
{
	$this->mCoreStateMachine->update();
}

//end of class
}
?>
