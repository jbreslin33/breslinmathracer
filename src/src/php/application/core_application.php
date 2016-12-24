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
if ($APPLICATION->mCode == 1 || $APPLICATION->mCode == 3 || $APPLICATION->mCode == 4 || $APPLICATION->mCode == 5 || $APPLICATION->mCode == 6 || $APPLICATION->mCode == 7 || $APPLICATION->mCode == 8 || $APPLICATION->mCode == 9 || $APPLICATION->mCode == 10 || $APPLICATION->mCode == 11 || $APPLICATION->mCode == 12 || $APPLICATION->mCode == 13 || $APPLICATION->mCode == 14 || $APPLICATION->mCode == 15 || $APPLICATION->mCode == 16 || $APPLICATION->mCode == 17 || $APPLICATION->mCode == 18 || $APPLICATION->mCode == 19 || $APPLICATION->mCode == 20 || $APPLICATION->mCode == 21 || $APPLICATION->mCode == 22 || $APPLICATION->mCode == 23 || $APPLICATION->mCode == 24 || $APPLICATION->mCode == 25 || $APPLICATION->mCode == 26 || $APPLICATION->mCode == 27 || $APPLICATION->mCode == 28 || $APPLICATION->mCode == 29 || $APPLICATION->mCode == 30 || $APPLICATION->mCode == 31  || $APPLICATION->mCode == 32 || $APPLICATION->mCode == 33 || $APPLICATION->mCode == 34 || $APPLICATION->mCode == 35  || $APPLICATION->mCode == 36  || $APPLICATION->mCode == 37 || $APPLICATION->mCode == 38 || $APPLICATION->mCode == 39 || $APPLICATION->mCode == 40)
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
        $this->mNORMAL_CORE_APPLICATION   = new NORMAL_CORE_APPLICATION        ($this);
        $this->mPRACTICE_APPLICATION      = new PRACTICE_APPLICATION        ($this);
        
	//K
        $this->mK_CC_APPLICATION     = new K_CC_APPLICATION    ($this);
        $this->mK_OA_A_4_APPLICATION = new K_OA_A_4_APPLICATION($this);
	$this->mK_OA_A_5_APPLICATION = new K_OA_A_5_APPLICATION($this);


	//1
	$this->mG1_OA_B_3_APPLICATION = new G1_OA_B_3_APPLICATION($this);
	$this->mG1_OA_C_6_APPLICATION = new G1_OA_C_6_APPLICATION($this);
	$this->mG1_NBT_APPLICATION    = new G1_NBT_APPLICATION($this);

	//2	
	$this->mG2_OA_B_2_APPLICATION = new G2_OA_B_2_APPLICATION($this);
	$this->mG2_NBT_APPLICATION = new G2_NBT_APPLICATION($this);

	//3	
	$this->mG3_OA_C_7_APPLICATION = new G3_OA_C_7_APPLICATION($this);
	$this->mG3_NBT_APPLICATION = new G3_NBT_APPLICATION($this);
        
	//4	
	$this->mG4_OA_B_4_APPLICATION   = new G4_OA_B_4_APPLICATION($this);
	$this->mG4_NBT_B_4_APPLICATION  = new G4_NBT_B_4_APPLICATION($this);
	$this->mG4_NBT_B_5_APPLICATION  = new G4_NBT_B_5_APPLICATION($this);
	$this->mG4_NBT_B_6_APPLICATION  = new G4_NBT_B_6_APPLICATION($this);
	$this->mG4_NF_B_3_C_APPLICATION = new G4_NF_B_3_C_APPLICATION($this);

	//5	
	$this->mG5_OA_A_1_APPLICATION  = new G5_OA_A_1_APPLICATION($this);
	$this->mG5_NBT_B_5_APPLICATION = new G5_NBT_B_5_APPLICATION($this);
	$this->mG5_NBT_B_6_APPLICATION = new G5_NBT_B_6_APPLICATION($this);
	$this->mG5_NBT_B_7_APPLICATION = new G5_NBT_B_7_APPLICATION($this);
	$this->mG5_NF_A_1_APPLICATION  = new G5_NF_A_1_APPLICATION($this);

	//6	
	$this->mG6_RP_APPLICATION  = new G6_RP_APPLICATION($this);
	$this->mG6_NS_APPLICATION  = new G6_NS_APPLICATION($this);
	$this->mG6_EE_APPLICATION  = new G6_EE_APPLICATION($this);
	$this->mG6_G_APPLICATION  = new G6_G_APPLICATION($this);
	$this->mG6_SP_APPLICATION  = new G6_SP_APPLICATION($this);


	//TABLES
        $this->mTIMES_TABLES_TWO_APPLICATION = new TIMES_TABLES_TWO_APPLICATION        ($this);
        $this->mTIMES_TABLES_THREE_APPLICATION = new TIMES_TABLES_THREE_APPLICATION        ($this);
        $this->mTIMES_TABLES_FOUR_APPLICATION = new TIMES_TABLES_FOUR_APPLICATION        ($this);
        $this->mTIMES_TABLES_FIVE_APPLICATION = new TIMES_TABLES_FIVE_APPLICATION        ($this);
        $this->mTIMES_TABLES_SIX_APPLICATION = new TIMES_TABLES_SIX_APPLICATION        ($this);
        $this->mTIMES_TABLES_SEVEN_APPLICATION = new TIMES_TABLES_SEVEN_APPLICATION        ($this);
        $this->mTIMES_TABLES_EIGHT_APPLICATION = new TIMES_TABLES_EIGHT_APPLICATION        ($this);
        $this->mTIMES_TABLES_NINE_APPLICATION = new TIMES_TABLES_NINE_APPLICATION        ($this);
        $this->mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION = new TIMES_TABLES_THE_SUPER_IZZY_APPLICATION        ($this);

	//TESTS
        $this->mTERRA_NOVA_APPLICATION = new TERRA_NOVA_APPLICATION        ($this);
        $this->mTEST_APPLICATION = new TEST_APPLICATION        ($this);
        $this->mTERRA_NOVA_TEST_APPLICATION = new TERRA_NOVA_TEST_APPLICATION        ($this);
        $this->mHOMEWORK_APPLICATION = new HOMEWORK_APPLICATION        ($this);
        $this->mTERRA_NOVA_HOMEWORK_APPLICATION = new TERRA_NOVA_HOMEWORK_APPLICATION        ($this);


        $this->mCoreStateMachine->setGlobalState($this->mGLOBAL_CORE_APPLICATION);
        $this->mCoreStateMachine->changeState($this->mINIT_CORE_APPLICATION);

	$this->mNormal = new Normal($this);	
	$this->mLoginStudent  = new LoginStudent($this);	
	$this->mLoginSchool   = new LoginSchool($this);	
	$this->mSignupStudent = new SignupStudent($this);	
	$this->mSignupSchool  = new SignupSchool($this);	
	
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
