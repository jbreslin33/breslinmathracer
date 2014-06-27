/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_k_cc_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
		this.parent(game);

		this.mItem1 = 0;		
		this.mItem2 = 0;		
		this.mItem3 = 0;		
		this.mItem4 = 0;		
		this.mItem5 = 0;		

		APPLICATION.mHud.setScoreNeeded(5);

		this.createItems(); 
        },
	
	createItems: function()
	{
		this.parent();

		this.mItem1 = new TextItem(this,'0','1');     
                this.addItem(this.mItem1);

                this.mItem2 = new TextItem(this,'1','2');
                this.addItem(this.mItem2);

                this.mItem3 = new TextItem(this,'2','3');
                this.addItem(this.mItem3);

                this.mItem4 = new TextItem(this,'3','4');
                this.addItem(this.mItem4);

                this.mItem5 = new TextItem(this,'4','5');
                this.addItem(this.mItem5);
                	
		this.mItem6 = new TextItem(this,'5','6');
                this.addItem(this.mItem6);
		
		this.mItem7 = new TextItem(this,'buf','buf');
                this.addItem(this.mItem7);
	}

});
