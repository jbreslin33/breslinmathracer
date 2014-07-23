/* EVALUATION: If student is correct on all evaluation questions this class will act like all other classes. If a student gets one wrong however we will take action. We will send student back to that standard but will will set a featured type in that learning standard. */ 

var Evaluation = new Class(
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
