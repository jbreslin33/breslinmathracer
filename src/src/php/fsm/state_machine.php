<?php

class StateMachine
{

function __construct($owner)
{
	$this->mOwner = $owner;
	$this->mCurrentState = 0;
	$this->mPreviousState = 0;
	$this->mGlobalState = 0;
}

public function setCurrentState($s)
{
	$this->mCurrentState = $s;
}
public function setGlobalState($s)
{
	$this->mGlobalState = $s;
}
public function setPreviousState($s)
{
	$this->mPreviousState = $s;
}
/*
update: function()
{
        if(this.mGlobalState)
        {
                this.mGlobalState.execute(this.mOwner);
        }
        if (this.mCurrentState)
        {
                this.mCurrentState.execute(this.mOwner);
        }
},
*/
public function update()
{
	if ($this->mGlobalState)
	{
		$this->mGlobalState->execute($this->mOwner);
	}
	if ($this->mCurrentState)
	{
		$this->mCurrentState->execute($this->mOwner);
	}
}

public function changeState($pNewState)
{
	$this->mPreviousState = $this->mCurrentState;

	if ($this->mCurrentState)
	{
		$this->mCurrentState->bexit($this->mOwner);
	}

	$this->mCurrentState = $pNewState;

	if ($this->mCurrentState)
	{
		$this->mCurrentState->enter($this->mOwner);
	}
}
public function currentState()
{
	return $this->mCurrentState;
}

}//end class
