var ClockTimer  = new Class(
{

Extends: Timer,

	initialize: function(application)
	{
		this.parent(application)
		this.mElapsedTime = 0;	
	},

	update: function()
	{
		this.parent();
		this.mApplication.mGame.mElapsedTime = this.mApplication.mGame.mTimeSinceEpoch - this.mApplication.mGame.mQuestionStartTime;	
		this.setTimer();
	},

	destroy: function()
	{
		canvas.remove();
	},

        createTimer: function()
        {
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
	},

	setTimer: function()
	{
  		//reset transforms
                this.minute_hand.transform("");

		//find value of 1 second of threshold time in degrees 
                //this.minute_hand.transform("r" + parseInt(6*minutes) + ",100,100");
		var rotateDegree = parseInt(this.mApplication.mGame.mThresholdTime/1000);
		this.mApplication.log('rotateDegree:' + rotateDegree);
                //this.minute_hand.transform("r" + rotateDegree + ",100,100");
	}
});
