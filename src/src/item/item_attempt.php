/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/

var ItemAttempt = new Class(
{
        initialize: function()
        {
		this.mStateLogs = true;		
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM_ATTEMPT   = new GLOBAL_ITEM_ATTEMPT  (this);
                this.mINIT_ITEM_ATTEMPT     = new INIT_ITEM_ATTEMPT    (this);

		this.mSEND_INSERT                  = new SEND_INSERT(this);
                this.mWAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION = new WAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION(this);
                this.mUPDATE_ITEM_ATTEMPT          = new UPDATE_ITEM_ATTEMPT(this);
                this.mWAIT_FOR_UPDATE_CONFIRMATION = new WAIT_FOR_UPDATE_CONFIRMATION(this);
		this.ITEM_ATTEMPT_END              = new ITEM_ATTEMPT_END(this);
		
                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM_ATTEMPT);
                this.mStateMachine.changeState(this.mINIT_ITEM_ATTEMPT);

		this.mDateNow = 0;
		this.mID = 0;
		this.mUserAnswer = '';
		this.mTransactionCode = 0;
		this.mType = 0; 
		this.mUpdateConfirmation = 0;
	},

	sendInsert: function()
	{
	        // strip out problem chars from question
        	var question = '' + APPLICATION.mGame.mSheet.mItem.mQuestion;
        	question = question.replace(/&/g,"breslinampersand");
        	question = question.replace(/\+/g,"breslinaddition");
        	question = question.replace(/#/g,"breslinpound");

        	//get real answers from array
        	var answers = '';
        	for (i=0; i < APPLICATION.mGame.mSheet.mItem.mAnswerArray.length; i++)
        	{
                	if (i == 0)
                	{
                        	answers = '' + answers + APPLICATION.mGame.mSheet.mItem.mAnswerArray[i];
                	}
                	else
                	{
                        	answers = '' + answers + ' OR ' + APPLICATION.mGame.mSheet.mItem.mAnswerArray[i];
                	}
        	}
        	// strip out problem chars from answer
        	answers = answers.replace(/&/g,"breslinampersand");
        	answers = answers.replace(/\+/g,"breslinaddition");
        	answers = answers.replace(/#/g,"breslinpound");

		if (!Date.now)
		{
			this.mDateNow = new Date().getTime();
		}
		else
		{
			APPLICATION.log('datenow:' + Date.now());	
			this.mDateNow = Date.now();
		}

        	APPLICATION.sendItemAttemptInsert(APPLICATION.mGame.mSheet.mItem.mType,question,answers,this.mDateNow);
	},	
	sendUpdate: function()
	{
        	APPLICATION.sendItemAttemptUpdate(this.mID,this.mTransactionCode,this.mUserAnswer); //thats it
	},

	update: function()
        {
                //state machine
                this.mStateMachine.update();
        }
});
