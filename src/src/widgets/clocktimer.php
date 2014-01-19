var ClockTimer  = new Class(
{

Extends: Timer,

	initialize: function(application)
	{
		this.parent(application)
	},

	update: function()
	{
		this.parent();
//		this.mApplication.log('mThresholdTime:' + this.mApplication.mGame.mThresholdTime);
//		this.mApplication.log('mTimeSinceEpoch:' + this.mApplication.mGame.mTimeSinceEpoch);
//		this.mApplication.log('mQuestionStartTime:' + this.mApplication.mGame.mQuestionStartTime);
//this.mTimeSinceEpoch > this.mQuestionStartTime + this.mThresholdTime

		
	},

	callThis: function()
	{

	},

        createTimer: function()
        {

		//  this.mClock = new Shape(200,200,400,400,"","","#F6C0F6","boundary");
 		//this.mClock = new Shape(200,200,400,400,this,"","","");
               // this.mTimerArray.push(this.mClock);
                var canvas = Raphael(200,200,200,200);
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
	}
});
