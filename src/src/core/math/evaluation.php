/* EVALUATION: If student is correct on all evaluation questions this class will act like all other classes. If a student gets one wrong however we will take action. We will send student back to that standard but will will set a featured type in that learning standard. */ 

var evaluation = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new s_evaluation(this);	
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
		this.setScoreNeeded(APPLICATION.mItemTypeIDArray.length);
		this.mLearningStandard = 'evaluation';
        },

        createItems: function()
        {
                this.parent();
              
		for (var i = 0; i < APPLICATION.mItemTypeIDArray.length; i++)
		{	
			if ( APPLICATION.mItemTypeIDArray[i] == "1")
			{
				this.addItem(new i_k_cc_a_1_t_1(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "2")
			{
				this.addItem(new i_k_cc_a_1_t_2(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "3")
			{
				this.addItem(new i_k_cc_a_1_t_3(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "4")
			{
				this.addItem(new i_k_cc_a_1_t_4(this));
			}
		}
		//this.randomize(10);
        }
});
