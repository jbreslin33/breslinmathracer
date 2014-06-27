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
	
		this.createItems(); 
        },
	
	createItems: function()
	{
		this.parent();

		this.mItem1 = new TextItem(this,'5x7=','35');     
                this.addItem(this.mItem1);

                this.mItem2 = new TextItem(this,'7x6=','42');
                this.addItem(this.mItem2);

                this.mItem3 = new TextItem(this,'6x4=','24');
                this.addItem(this.mItem3);

                this.mItem4 = new TextItem(this,'3x4=','12');
                this.addItem(this.mItem4);

                this.mItem5 = new TextItem(this,'8x8=','64');
                this.addItem(this.mItem5);
                	
		this.mItem6 = new TextItem(this,'9x8=','72');
                this.addItem(this.mItem6);
	}

});
