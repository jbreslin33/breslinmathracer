/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_k_cc_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
		this.parent(game);

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

		this.addItem(new TextItem(this,'0','1'));     
		this.addItem(new TextItem(this,'1','2'));     
		this.addItem(new TextItem(this,'2','3'));     
		this.addItem(new TextItem(this,'3','4'));     
		this.addItem(new TextItem(this,'4','5'));     
		this.addItem(new TextItem(this,'5','6'));     
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
