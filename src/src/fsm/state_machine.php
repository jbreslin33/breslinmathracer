var StateMachine = new Class(
{

initialize: function(owner)
{
	this.mOwner = owner;
	this.mCurrentState = 0;
	this.mPreviousState = 0;
	this.mGlobalState = 0;
},

setCurrentState: function(s)
{
	this.mCurrentState = s;
},


setGlobalState: function(s)
{
	this.mGlobalState = s;
},


setPreviousState: function(s)
{
	this.mPreviousState = s;
},

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

changeState: function(pNewState)
{
	this.mPreviousState = this.mCurrentState;

	if(this.mCurrentState)
	{
       		this.mCurrentState.exit(this.mOwner);
	}

	this.mCurrentState = pNewState;

	if(this.mCurrentState)
	{
        	this.mCurrentState.enter(this.mOwner);
	}
},

currentState: function()
{
	return this.mCurrentState;
}

});
