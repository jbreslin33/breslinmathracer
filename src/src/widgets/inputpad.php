var InputPad  = new Class(
{
	initialize: function(application)
	{
		this.mApplication = application;
	
		//number pad
		this.mInputPadArray = new Array();

		//create input pad
		this.createInputPad();	
	},

	createInputPad: function()
	{
	},

      	hide: function()
        {
                //shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        this.mInputPadArray[i].setVisibility(false);
                }
        },

        show: function()
        {
                //shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        this.mInputPadArray[i].setVisibility(true);
                }
        },

	destroy: function()
	{
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        //back to div
                        this.mInputPadArray[i].mDiv.mDiv.removeChild(this.mInputPadArray[i].mMesh);
                        document.body.removeChild(this.mInputPadArray[i].mDiv.mDiv);
                        this.mInputPadArray[i] = 0;
                }
                this.mInputPadArray = 0;
        }

	//*************possible overides
});
