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
                
		var itemIDArray = APPLICATION.mRawData.split(":");

                for (var i = 0; i < itemIDArray.length; i++)
                {
                        var pick = this.mPicker.getItem(itemIDArray[i]);
                        if (pick != 0)
                        {
                                this.addItem(pick);
                        }

                        var brianPick = this.mPickerBrian.getItem(itemIDArray[i]);
                        if (brianPick != 0)
                        {
                                this.addItem(brianPick);
                        }

                        var jimPick = this.mPickerJim.getItem(itemIDArray[i]);
                        if (jimPick != 0)
                        {
                                this.addItem(jimPick);
                        }
                }
        }
});
