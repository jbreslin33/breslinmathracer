/* GAME: */

var evaluation = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new s_evalutation(this);	
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
        },

        createItems: function()
        {
                this.parent();
              
		if (APPLICATION.mLevel > APPLICATION.mLevels)
		{
			this.setScoreNeeded(APPLICATION.mLevels); 
		}
		else
		{
			this.setScoreNeeded(APPLICATION.mLevel); 
		}

		this.addItem(new i_k_cc_a_1_t_1(this));
		this.addItem(new i_k_cc_a_1_t_2(this));
		this.addItem(new i_k_cc_a_1_t_3(this));
		this.addItem(new i_k_cc_a_1_t_4(this));
		
		this.randomize(10);
        }
});
