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

		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
		this.addItem(new k_cc_a_1_type_1(this));     
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
