var Timer  = new Class(
{
	initialize: function(application)
	{
		this.mApplication = application;
	
		//number pad
		this.mTimerArray = new Array();

		//create input pad
		this.createTimer();	
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
                for (i = 0; i < this.mTimerArray.length; i++)
                {
                        this.mTimerArray[i].setVisibility(false);
                }
        },

	showQuestion: function()
        {
        },

        show: function()
        {
                //shapes and array
                for (i = 0; i < this.mTimerArray.length; i++)
                {
                        this.mTimerArray[i].setVisibility(true);
                }
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
