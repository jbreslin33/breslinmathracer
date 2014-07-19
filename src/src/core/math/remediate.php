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

		this.picker = new Picker(this);
        },

        createItems: function()
        {
                this.parent();
	
		var itemIDArray = APPLICATION.mRawData.split(":");	
		var itemID = itemIDArray[0];
		
		//this.setScoreNeeded(itemIDArray.length);
		this.setScoreNeeded(APPLICATION.mLevel);
			
		for (var i = 0; i < this.getScoreNeeded(); i++)
		{	
			APPLICATION.log('itemID:' + itemID);
			this.addItem(this.picker.getItem(itemID));
		}
		//this.randomize(10);
        }
});
