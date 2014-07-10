/* GAME: */

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
		APPLICATION.log('scoreNeeded:' + APPLICATION.mItemTypeIDArray.length);
        },

        createItems: function()
        {
                this.parent();
              
		APPLICATION.log('length:' + APPLICATION.mItemTypeIDArray.length);
		for (var i = 0; i < APPLICATION.mItemTypeIDArray.length; i++)
		{	
			APPLICATION.log('loop APPLICATION.mItemTypeIDArray[i]:' + APPLICATION.mItemTypeIDArray[i]);
			if ( APPLICATION.mItemTypeIDArray[i] == "1")
			{
				APPLICATION.log('create item:1');
				this.addItem(new i_k_cc_a_1_t_1(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "2")
			{
				APPLICATION.log('create item:2');
				this.addItem(new i_k_cc_a_1_t_2(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "3")
			{
				APPLICATION.log('create item:3');
				this.addItem(new i_k_cc_a_1_t_3(this));
			}
			if ( APPLICATION.mItemTypeIDArray[i] == "4")
			{
				APPLICATION.log('create item:4');
				this.addItem(new i_k_cc_a_1_t_4(this));
			}
		}
		//this.randomize(10);
        }
});
