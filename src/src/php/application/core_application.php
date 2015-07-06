<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state_machine.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/states/core_application_states.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");
//temp
include_once(getenv("DOCUMENT_ROOT") . "/src/php/login_student.php");

//start new session
session_start();
error_log('calling app from client');

if (!isset($_SESSION["APPLICATION"]))
{
        $APPLICATION = new CoreApplication();
	$_SESSION["APPLICATION"] = $APPLICATION;
}
error_log('after calling app from client');

$code = 0;
if (isset($_GET["code"]))
{
	$code = $_GET["code"];
}

if ($code == 117)
{
	error_log('code 117');
	$username = $_GET["username"];
	$password = $_GET["password"];

	$loginStudent = new LoginStudent($username,$password);	
}
else
{
	error_log('whatev');
}

?>

<?php

class CoreApplication 
{

function __construct()
{
	$this->mLogs = true;
	$this->mCoreStateMachine = new StateMachine($this);
        
	//admin
       	$this->mGLOBAL_CORE_APPLICATION          = new GLOBAL_CORE_APPLICATION       ($this);
        $this->mINIT_CORE_APPLICATION            = new INIT_CORE_APPLICATION         ($this);

        $this->mCoreStateMachine->setGlobalState($this->mGLOBAL_CORE_APPLICATION);
        $this->mCoreStateMachine->changeState($this->mINIT_CORE_APPLICATION);

	$this->update();
}

public function update()
{
	$this->mCoreStateMachine->update();
}

//end of class
}
?>
