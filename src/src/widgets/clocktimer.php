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
 		if (this.mApplication.mGame.mSheet.mItem)
		{
			if (this.mApplication.mGame.mSheet.mItem.mStateMachine.mCurrentState == this.mApplication.mGame.mSheet.mItem.mSHOW_CORRECT_ANSWER_ITEM)
                	{
				if (this.mApplication.mGame.mSheet.mItem.mCorrectAnswerThresholdTime == 0)
				{
					this.hide();
				}
				else
				{
					this.show();
					this.mThresh = parseInt(this.mApplication.mGame.mSheet.mItem.mCorrectAnswerThresholdTime/1000);
					this.mValueInSeconds = parseInt(360/this.mThresh); 
					this.mElapsedTime = parseInt(this.mApplication.mGame.mTimeSinceEpoch - parseInt(this.mApplication.mGame.mSheet.mItem.mCorrectAnswerStartTime));	
					this.mElapsedTime  = parseInt(this.mElapsedTime / 1000);
					this.setTimer();
				}
			}
			else if (this.mApplication.mGame.mSheet.mItem.mStateMachine.mCurrentState == this.mApplication.mGame.mOUT_OF_TIME_ITEM)
                	{
				if (this.mApplication.mGame.mSheet.mItem.mCorrectAnswerThresholdTime == 0)
				{	
					this.hide();
				}
				else
				{
					this.show();
					this.mThresh = parseInt(this.mApplication.mGame.mSheet.mItem.mCorrectAnswerThresholdTime/1000);
					this.mValueInSeconds = parseInt(360/this.mThresh); 
					this.mElapsedTime = parseInt(this.mApplication.mGame.mTimeSinceEpoch - parseInt(this.mApplication.mGame.mCorrectAnswerStartTime));	
					this.mElapsedTime  = parseInt(this.mElapsedTime / 1000);
					this.setTimer();
				}
			}
 			else if (this.mApplication.mGame.mSheet.mItem.mStateMachine.mCurrentState == this.mApplication.mGame.mSheet.mItem.mWAITING_ON_ANSWER_ITEM)
                	{
                        	if (this.mApplication.mGame.mSheet.mItem.mThresholdTime == 0)
                        	{
                                	this.hide();
                        	}
                        	else
                       		{
                                	this.show();
                                	this.mFirstTimeWaitingOnAnswer == false;
                                	if (this.mApplication.mGame.mSheet.mItem.mQuestionStartTime > 0)
                                	{
                                        	this.mThresh = parseInt(this.mApplication.mGame.mSheet.mItem.mThresholdTime/1000);
                                        	this.mValueInSeconds = parseInt(360/this.mThresh);

                                        	this.mElapsedTime = parseInt(this.mApplication.mGame.mTimeSinceEpoch - this.mApplication.mGame.mSheet.mItem.mQuestionStartTime);
                                        	this.mElapsedTime  = parseInt(this.mElapsedTime / 1000);
                                        	this.setTimer();
                                	}
                        	}
                	}
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
                this.canvas = Raphael(550,200,200,200);
                this.clock = this.canvas.circle(100,100,95);
                this.clock.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})
                for(i=0;i<12;i++)
                {
                        var start_x = 100+Math.round(80*Math.cos(30*i*Math.PI/180));
                        var start_y = 100+Math.round(80*Math.sin(30*i*Math.PI/180));
                        var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                        var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));
                        this.hour_sign[i] = this.canvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
                }
                this.minute_hand = this.canvas.path("M100 100L100 40");
                this.minute_hand.attr({stroke: "#444444", "stroke-width": 4});

                this.pin = this.canvas.circle(100, 100, 5);
                this.pin.attr("fill", "#000000");

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
