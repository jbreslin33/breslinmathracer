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

		this.mVictoryShape1 = 0; 
		this.mVictoryShape2 = 0; 
		this.mVictoryShape3 = 0; 

		APPLICATION.mHud.setScoreNeeded(5);

		this.createItems(); 
		this.createShapes();
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
		
		//this.mItem7 = new TextItem(this,'buf','buf');
                //this.addItem(this.mItem7);
	},
   
	createVictoryShapes: function()
        {
                //victory shapes
                this.mVictoryShape1 = new ShapeVictory(50,50,100,300,this.mGame,"/images/bus/kid.png","","");
                this.addShape(this.mVictoryShape1);
                this.mVictoryShape2 = new ShapeVictory(50,50,150,300,this.mGame,"/images/bus/kid.png","","");
                this.addShape(this.mVictoryShape2);
                this.mVictoryShape3 = new ShapeVictory(50,50,200,300,this.mGame,"/images/bus/kid.png","","");
                this.addShape(this.mVictoryShape3);
		
		this.hideVictoryShapes();
        },

        hideVictoryShapes: function()
        {
		this.mVictoryShape1.setVisibility(false);
		this.mVictoryShape2.setVisibility(false);
		this.mVictoryShape3.setVisibility(false);
        },

        showVictoryShapes: function()
        {
		this.mVictoryShape1.setVisibility(true);
		this.mVictoryShape2.setVisibility(true);
		this.mVictoryShape3.setVisibility(true);
        }
});
