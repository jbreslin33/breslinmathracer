/* NORMAL: This class will grab the earliest 10 items that have not yet been mastered and ask them in inverse pyramid form  
it is therefore decoupled from core standards tables. The items will be the only things that are related to core standards

*/ 

var Normal = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new s_evaluation(this);	
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

var s_evaluation = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
                this.parent(game);
		
		this.mLearningStandard = 'evaluation';

		this.picker = new Picker(this);
        },

        createItems: function()
        {
                this.parent();
	
		var itemIDArray = APPLICATION.mRawData.split(":");	
		
		this.setScoreNeeded(itemIDArray.length);
			
		for (var i = 0; i < itemIDArray.length; i++)
		{	
			APPLICATION.log('i:' + itemIDArray[i]);
			this.addItem(this.picker.getItem(itemIDArray[i]));
		}
		//this.randomize(10);
        }
});
