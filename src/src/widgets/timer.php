var Timer  = new Class(
{
	initialize: function(application)
	{
		this.mApplication = application;
	
		//number pad
		this.mTimerArray = new Array();

		this.canvas = 0;
		this.clock = 0;

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
		this.createTimer();	
	},

	//fake virtual
	update: function()
	{
	},

	//fake virtual
	createTimer: function()
	{
	},

	//fake virtual
	reset: function()
	{

	},

      	hide: function()
        {
                //shapes and array
		this.clock.hide();
		for (i=0;i<12;i++)
		{
			this.hour_sign[i].hide();
		}
		this.minute_hand.hide();
		this.pin.hide();
        },

        show: function()
        {
                //shapes and array
		this.clock.show();
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
