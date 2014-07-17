/* EVALUATION: If student is correct on all evaluation questions this class will act like all other classes. If a student gets one wrong however we will take action. We will send student back to that standard but will will set a featured type in that learning standard. */ 

var evaluation = new Class(
{

Extends: Game,

	initialize: function(application,rawdata)
	{
       		this.parent(application);
	
		this.mSheet = new s_evaluation(this,rawdata);	
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
        initialize: function(game,rawdata)
        {
                this.parent(game);
		
		this.mLearningStandard = 'evaluation';
		
		APPLICATION.mEvaluationData = rawdata;
        },

        createItems: function()
        {
                this.parent();
	
		var s = APPLICATION.mEvaluationData.split(":");	
		
		this.setScoreNeeded(s.length);
              
		for (var i = 0; i < s.length; i++)
		{	
			if ( s[i] == "1")
			{
				this.addItem(new i_k_cc_a_1_t_1(this));
			}
			if ( s[i] == "2")
			{
				this.addItem(new i_k_cc_a_1_t_2(this));
			}
			if ( s[i] == "3")
			{
				this.addItem(new i_k_cc_a_1_t_3(this));
			}
			if ( s[i] == "4")
			{
				this.addItem(new i_k_cc_a_1_t_4(this));
			}
		}
		//this.randomize(10);
        }
});
