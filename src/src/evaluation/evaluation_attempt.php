
var EvaluationAttempt = new Class(
{
        initialize: function()
        {
		this.mStateLogs = true;		
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_EVALUATION_ATTEMPT   = new GLOBAL_EVALUATION_ATTEMPT  (this);
                this.mINIT_EVALUATION_ATTEMPT     = new INIT_EVALUATION_ATTEMPT    (this);

		this.mSEND_EVALUATION_ATTEMPT_INSERT                  = new SEND_EVALUATION_ATTEMPT_INSERT(this);
                this.mWAIT_FOR_EVALUATION_ATTEMPT_INSERT_CONFIRMATION = new WAIT_FOR_EVALUATION_ATTEMPT_INSERT_CONFIRMATION(this);
		this.mEVALUATION_ATTEMPT__END              = new EVALUATION_ATTEMPT_END(this);
		
                this.mStateMachine.setGlobalState(this.mGLOBAL_EVALUATION_ATTEMPT);
                this.mStateMachine.changeState(this.mINIT_EVALUATION_ATTEMPT);

		this.mDateNow = 0;
		this.mID = 0;

		//timers
		this.mThresholdTime = 5000;
		this.mCounterStartTime = 0;
	},

	sendInsert: function()
	{
		if (this.mDateNow == 0) //we have not sent it
		{
			if (!Date.now)
			{
				this.mDateNow = new Date().getTime();
			}
			else
			{
				this.mDateNow = Date.now();
			}
		}

		//update server
        	APPLICATION.sendEvaluationAttemptInsert(this.mDateNow);
	},	

	update: function()
        {
                //state machine
                this.mStateMachine.update();
        }
});
