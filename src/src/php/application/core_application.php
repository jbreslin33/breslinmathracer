<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state_machine.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/states/core_application_states.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
//temp
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_student.php");
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
if ($APPLICATION->mCode == 117)
{
	$APPLICATION->mDataArray[] = "117";
	$APPLICATION->mDataArray[] = $_GET["username"];
	$APPLICATION->mDataArray[] = $_GET["password"];
}

if ($APPLICATION->mCode == 1 || $APPLICATION->mCode == 3 || $APPLICATION->mCode == 4 || $APPLICATION->mCode == 5 || $APPLICATION->mCode == 6 || $APPLICATION->mCode == 7 || $APPLICATION->mCode == 8 || $APPLICATION->mCode == 9 || $APPLICATION->mCode == 10 || $APPLICATION->mCode == 12 || $APPLICATION->mCode == 13)
{
        $APPLICATION->mDataArray[] = $code;
        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["datenow"];
        $APPLICATION->mDataArray[] = $_GET["score"];
}
if ($APPLICATION->mCode == 2)
{
        $APPLICATION->mDataArray[] = "2";
        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["datenow"];
}
if ($APPLICATION->mCode == 3)
{
        $APPLICATION->mDataArray[] = "3";
        $APPLICATION->mDataArray[] = $_GET["itemtypesid"];
        $APPLICATION->mDataArray[] = $_GET["question"];
        $APPLICATION->mDataArray[] = $_GET["answers"];
        $APPLICATION->mDataArray[] = $_GET["datenow"];
        $APPLICATION->mDataArray[] = $_GET["score"]; //this should be most number in a row of an evaluation ie a timestables2 evaluation
}
if ($APPLICATION->mCode == 101)
{
        $APPLICATION->mDataArray[] = "101";
        $APPLICATION->mDataArray[] = $_GET["itemattemptid"];
        $APPLICATION->mDataArray[] = $_GET["transactioncode"];
        $APPLICATION->mDataArray[] = $_GET["answer"];
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
	//big vars
	$this->mRef_id = 'login';

	$this->mInitialized = 0;
	$this->mEvaluationsID = 1;
	$this->mEvaluationsAttempt = 0;

	$this->mDataArray = array();
	$this->mCode = 0;
	$this->mRawData = 0;
	$this->mLogs = true;
	$this->mCoreStateMachine = new StateMachine($this);
        
	//admin
       	$this->mGLOBAL_CORE_APPLICATION   = new GLOBAL_CORE_APPLICATION        ($this);
        $this->mINIT_CORE_APPLICATION     = new INIT_CORE_APPLICATION          ($this);
        $this->mWAIT_CORE_APPLICATION     = new WAIT_CORE_APPLICATION          ($this);
        $this->mLOGIN_STUDENT_APPLICATION = new LOGIN_STUDENT_APPLICATION      ($this);
        $this->mWAIT_GAME_APPLICATION     = new WAIT_GAME_APPLICATION      ($this);
        $this->mNORMAL_CORE_APPLICATION   = new NORMAL_CORE_APPLICATION        ($this);
        $this->mPRACTICE_APPLICATION      = new PRACTICE_APPLICATION        ($this);
        $this->mTIMES_TABLES_TWO_APPLICATION = new TIMES_TABLES_TWO_APPLICATION        ($this);
        $this->mTIMES_TABLES_THREE_APPLICATION = new TIMES_TABLES_THREE_APPLICATION        ($this);
        $this->mTIMES_TABLES_FOUR_APPLICATION = new TIMES_TABLES_FOUR_APPLICATION        ($this);
        $this->mTIMES_TABLES_FIVE_APPLICATION = new TIMES_TABLES_FIVE_APPLICATION        ($this);
        $this->mTIMES_TABLES_SIX_APPLICATION = new TIMES_TABLES_SIX_APPLICATION        ($this);
        $this->mTIMES_TABLES_SEVEN_APPLICATION = new TIMES_TABLES_SEVEN_APPLICATION        ($this);
        $this->mTIMES_TABLES_EIGHT_APPLICATION = new TIMES_TABLES_EIGHT_APPLICATION        ($this);
        $this->mTIMES_TABLES_NINE_APPLICATION = new TIMES_TABLES_NINE_APPLICATION        ($this);
        $this->mTIMES_TABLES_THE_IZZY_APPLICATION = new TIMES_TABLES_THE_IZZY_APPLICATION        ($this);
        $this->mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION = new TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION        ($this);

        $this->mCoreStateMachine->setGlobalState($this->mGLOBAL_CORE_APPLICATION);
        $this->mCoreStateMachine->changeState($this->mINIT_CORE_APPLICATION);
	
	$this->mNormal = new Normal($this);	
	$this->mLoginStudent = new LoginStudent($this);	
	
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
