/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_5_oa_a_1 = new Class(
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

		this.mItem1 = new TextItem(this,'What is the answer of life, the universe and everything?','42');     
                this.addItem(this.mItem1);

                this.mItem2 = new TextItem(this,'What is your favorite color?','green');
                this.addItem(this.mItem2);

                this.mItem3 = new TextItem(this,'What is your best dance move?','backspin');
                this.addItem(this.mItem3);

                this.mItem4 = new TextItem(this,'What is your favorite team?','eagles');
                this.addItem(this.mItem4);

                this.mItem5 = new TextItem(this,'Who sucks?','dallas');
                this.addItem(this.mItem5);
	}

});
