var Ruler  = new Class(
{
	initialize: function(application)
	{
		this.mApplication = application;
	
		//number pad
		this.mTimerArray = new Array();

		this.mCanvas = 0;
		this.mRuler = 0;

		this.hour_sign = new Array();
		this.hour_sign[0] = 0;
		this.hour_sign[1] = 0;
		this.hour_sign[2] = 0;
		this.hour_sign[3] = 0;
		this.hour_sign[4] = 0;
		this.hour_sign[5] = 0;
		this.hour_sign[6] = 0;
		this.hour_sign[7] = 0;
		this.hour_sign[8] = 0;
		this.hour_sign[9] = 0;
		this.hour_sign[10] = 0;
		this.hour_sign[11] = 0;
		this.minute_hand = 0;
		this.pin = 0;

		//create input pad
		this.createRuler();	
	},

	//fake virtual
	update: function()
	{
	},

	//fake virtual
	createRuler: function()
	{
                this.mCanvas = Raphael(25,45,50,350);
                this.mRuler = this.mCanvas.rect(0,0,50,350);
                this.mRuler.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})
                for(i=0;i<12;i++)
                {
                        var start_x = 100+Math.round(80*Math.cos(30*i*Math.PI/180));
                        var start_y = 100+Math.round(80*Math.sin(30*i*Math.PI/180));
                        var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                        var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));
                        this.hour_sign[i] = this.mCanvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
                }
                this.minute_hand = this.mCanvas.path("M100 100L100 40");
                this.minute_hand.attr({stroke: "#444444", "stroke-width": 4});

                this.pin = this.mCanvas.circle(100, 100, 5);
                this.pin.attr("fill", "#000000");

                //reset transforms
                this.minute_hand.transform("");
        },


	//fake virtual
	reset: function()
	{

	},

      	hide: function()
        {
                //shapes and array
		this.mRuler.hide();
		for (i=0;i<12;i++)
		{
			this.hour_sign[i].hide();
		}
		this.minute_hand.hide();
		this.pin.hide();
        },

	showQuestion: function()
        {
        },

        show: function()
        {
                //shapes and array
		this.mRuler.show();
		for (i=0;i<12;i++)
		{
			this.hour_sign[i].show();
		}
		this.minute_hand.show();
		this.pin.show();
	},

	destroy: function()
	{
                for (i = 0; i < this.mTimerArray.length; i++)
                {
                        //back to div
                        this.mTimerArray[i].mDiv.mDiv.removeChild(this.mTimerArray[i].mMesh);
                        document.body.removeChild(this.mTimerArray[i].mDiv.mDiv);
                        this.mTimerArray[i] = 0;
                }
                this.mTimerArray = 0;
        }
});
