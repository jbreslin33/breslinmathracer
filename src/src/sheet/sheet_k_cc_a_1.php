/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet_k_cc_a_1 = new Class(
{
Extends: Sheet,
        initialize: function(game)
        {
		this.parent(game);

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
                this.addVictoryShape(new ShapeVictory(50,50,100,300,this.mGame,"/images/bus/kid.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,300,300,this.mGame,"/images/bus/kid.png","",""));
                this.addVictoryShape(new ShapeVictory(50,50,500,300,this.mGame,"/images/bus/kid.png","",""));
		
		this.hideVictoryShapes();
        },

        hideVictoryShapes: function()
        {
		for (i = 0; i < this.mVictoryShapeArray.length; i++)
		{
			this.mVictoryShapeArray[i].setVisibility(false);
		}
        },

        showVictoryShapes: function()
        {
		for (i = 0; i < this.mVictoryShapeArray.length; i++)
		{
			this.mVictoryShapeArray[i].setVisibility(true);
		}
        }
});
