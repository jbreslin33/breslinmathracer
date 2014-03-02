var ClockTimer  = new Class(
{

Extends: Timer,

	initialize: function(application)
	{
		this.parent(application)
		this.mElapsedTime = 0;	
		this.mThresh = 0;
		this.mValueInSeconds = 0;
	},

	update: function()
	{
		this.parent();

		APPLICATION.log('mThresholdTime:' + this.mApplication.mGame.mThresholdTime); 
		if (this.mApplication.mGame.mStateMachine.mCurrentState == this.mApplication.mGame.mWAITING_ON_ANSWER)
                {
			this.mFirstTimeWaitingOnAnswer == false; 
			if (this.mApplication.mGame.mQuestionStartTime > 0)
			{
				this.mThresh = parseInt(this.mApplication.mGame.mThresholdTime/1000);
				this.mValueInSeconds = parseInt(360/this.mThresh); 

				this.mElapsedTime = parseInt(this.mApplication.mGame.mTimeSinceEpoch - this.mApplication.mGame.mQuestionStartTime);	
				this.mElapsedTime  = parseInt(this.mElapsedTime / 1000);
				this.setTimer();
			}
		}

		else if (this.mApplication.mGame.mStateMachine.mCurrentState == this.mApplication.mGame.mSHOW_CORRECT_ANSWER)
                {
			this.mThresh = parseInt(this.mApplication.mGame.mCorrectAnswerThresholdTime/1000);
			this.mValueInSeconds = parseInt(360/this.mThresh); 
			this.mElapsedTime = parseInt(this.mApplication.mGame.mTimeSinceEpoch - parseInt(this.mApplication.mGame.mCorrectAnswerStartTime));	
			this.mElapsedTime  = parseInt(this.mElapsedTime / 1000);
			this.setTimer();
		}
		else //just reset clock
		{
                        this.minute_hand.transform("");
		}
	},

	destroy: function()
	{
		canvas.remove();
	},

        createTimer: function()
        {
                var canvas = Raphael(550,200,200,200);
                clock = canvas.circle(100,100,95);
                clock.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})
                var hour_sign;
                for(i=0;i<12;i++)
                {
                        var start_x = 100+Math.round(80*Math.cos(30*i*Math.PI/180));
                        var start_y = 100+Math.round(80*Math.sin(30*i*Math.PI/180));
                        var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                        var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));
                        hour_sign = canvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
                }
                this.minute_hand = canvas.path("M100 100L100 40");
                this.minute_hand.attr({stroke: "#444444", "stroke-width": 4});

                var pin = canvas.circle(100, 100, 5);
                pin.attr("fill", "#000000");

                //reset transforms
                this.minute_hand.transform("");
	},

	setTimer: function()
	{
		//reset transforms
                this.minute_hand.transform("");

		var rot = parseInt(this.mElapsedTime*this.mValueInSeconds); 
                this.minute_hand.transform("r" + rot + ",100,100");
	}
});
