var Move = new Class(
{

initialize: function (shapeDynamic)
{
	//shape
    	this.mShape = shapeDynamic;

	/******************************** Process **/
	//processTick StateMachine
        this.mProcessTickStateMachine       = new StateMachine(this);    //setup the state machine

	//processTick states	
	this.mGlobalProcessTickMove  = new GlobalProcessTickMove (this); 
	this.mCatchupProcessTickMove = new CatchupProcessTickMove(this); 
	this.mNormalProcessTickMove  = new NormalProcessTickMove (this); 
        
        this.mProcessTickStateMachine.setCurrentState      (this.mNormalProcessTickMove);
        this.mProcessTickStateMachine.setPreviousState     (this.mNormalProcessTickMove);
        this.mProcessTickStateMachine.setGlobalState       (this.mGlobalProcessTickMove);

	/************************************ Interpolate **/
	//interpolateTick StateMachine
        this.mInterpolateTickStateMachine       = new StateMachine(this);    //setup the state machine

	//interpolate states
	this.mNormalInterpolateTickMove  = new NormalInterpolateTickMove(this); 
       
	//interpolateTick states
        this.mInterpolateTickStateMachine.setCurrentState      (this.mNormalInterpolateTickMove);
        this.mInterpolateTickStateMachine.setPreviousState     (this.mNormalInterpolateTickMove);
        this.mInterpolateTickStateMachine.setGlobalState       (0);
   
	/***************************************** variables **/
	//thresholds
    	this.mPosInterpLimitHigh = parseFloat(.066); //how far away from server till we try to catch up
    	this.mPosInterpFactor    = parseFloat(4.0);
        this.mMaximunVelocity    = parseFloat(.003083); //do not let velocity go above this in any direction.

        //deltas
        this.mDeltaX        = 0.0;
        this.mDeltaY        = 0.0;
        this.mDeltaZ        = 0.0;
        this.mDeltaPosition = 0.0;
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

/******************************************************
*                               UPDATING
********************************************************/
processTick: function()
{
        this.mProcessTickStateMachine.update();
},

interpolateTick: function(renderTime)
{
        this.mInterpolateTickStateMachine.update();
},

/******************************************************
*                               MOVE
********************************************************/
calculateDeltaPosition: function()
{
        this.mDeltaX = this.mShape.mServerCommandCurrent.mPosition.x - this.mShape.getPosition().x;
        this.mDeltaY = this.mShape.mServerCommandCurrent.mPosition.y - this.mShape.getPosition().y;
        this.mDeltaZ = this.mShape.mServerCommandCurrent.mPosition.z - this.mShape.getPosition().z;

        //distance we are off from server
        this.mDeltaPosition = Math.sqrt(Math.pow(this.mDeltaX, 2) + Math.pow(this.mDeltaY, 2) +  Math.pow(this.mDeltaZ, 2));
},

calculateSpeed: function(velocity,frameTime)
{
        speed = Math.sqrt(
        Math.pow(parseFloat(velocity.x), 2) +
        Math.pow(parseFloat(velocity.z), 2)) /
        parseFloat(frameTime);
	
	

        return parseFloat(speed);
}

});
