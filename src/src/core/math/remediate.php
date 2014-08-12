/* Remediate: 
Ask 3 levels of the same question type. This will mean at most student will get 6 in a row correct which will still leave type available to evaluation.
*/ 

var Remediate = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new s_remediate(this);	
		this.mSheet.createItems();
		this.mSheet.createShapes();
	},

	destructor: function()
	{
		this.parent();
		this.mSheet.destructor();
	},

	update: function()
	{
		this.parent();
	
		if (this.mSheet)
		{	
			this.mSheet.update();
		}
	}
});

/* SHEET: */

var s_remediate = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
                this.parent(game);
		
		this.mLearningStandard = 'remediate';

                this.mPicker      = new Picker(this);
                this.mPickerBrian = new PickerBrian(this);
                this.mPickerJim   = new PickerJim(this);
        },

        createItems: function()
        {
                this.parent();
               
		//lets get the item. There will be only one for remediate but we will add up to 3 times depending on score needed. 
		var itemIDArray = APPLICATION.mRawData.split(":");
                for (var i = 0; i < this.getScoreNeeded(); i++)
		{
			//check generic
                	var pick = this.mPicker.getItem(itemIDArray[0]);
		
			//check brian
                	if (pick == 0)
                	{
                        	pick = this.mPickerBrian.getItem(itemIDArray[0]);
			}
			
			//check jim
                	if (pick == 0)
                	{
                        	pick = this.mPickerJim.getItem(itemIDArray[0]);
			}

			//by now we should have an item...
			if (pick) 
			{
                		this.addItem(pick);
			}
			else
			{
				APPLICATION.log('no item picked by pickers!');
			}
		}
        }
});
