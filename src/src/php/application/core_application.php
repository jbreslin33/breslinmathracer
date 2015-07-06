<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state_machine.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/application/states/core_application_states.php");
include_once(getenv("DOCUMENT_ROOT") . "/src/php/database_connection.php");

//start new session
session_start();
error_log('calling app from client');

if (!isset($_SESSION["APPLICATION"]))
{
        $APPLICATION = new CoreApplication();
	$_SESSION["APPLICATION"] = $APPLICATION;
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

	
	error_log('const app');
	$this->update();
}
public function update()
{
	$this->mCoreStateMachine->update();
	//$this->update();
}

//end of class
}
?>
