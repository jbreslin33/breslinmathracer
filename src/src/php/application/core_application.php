<?php
include_once(getenv("DOCUMENT_ROOT") . "/src/php/fsm/state_machine.php");
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
	$this->mCoreStateMachine = new StateMachine($this);
	error_log('const app');
}
public function update()
{
	$this->mCoreStateMachine->update();
}

//end of class
}
?>
