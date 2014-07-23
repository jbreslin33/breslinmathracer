/* GAME: */

var k_cc_c_7 = new Class(
{

Extends: GameSheet,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new sk_cc_c_7(this);	
                this.mSheet.createItems();
                this.mSheet.createShapes();
	}
});

/* SHEET: */ 

var sk_cc_c_7 = new Class(
{
Extends: Sheet,
	initialize: function(game)
        {
                this.parent(game);
        },

        createItems: function()
        {
                this.parent();
              
		this.addItem(new i_801(this));
		
		this.randomize(10);
        }
});

/ * ITEMS: */

var i_801 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 801;
    
		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*10+1);
		this.b = Math.floor(Math.random()*10+1);

		this.setQuestion('Compare.');
		if (this.a > this.b)
		{
                	this.setAnswer('Is greater than.',0);
		}
		if (this.a == this.b)
		{
                	this.setAnswer('Is equal to.',0);
 		}
		if (this.a < this.b)
		{
                	this.setAnswer('Is less than.',0);
		}

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var shapeA = new Shape(50,50,240,200,this.mSheet.mGame,"","","");
		var shapeB = new Shape(50,50,530,200,this.mSheet.mGame,"","","");
	
		shapeA.setText(this.a);
		shapeB.setText(this.b);

		this.addQuestionShape(shapeA);	
		this.addQuestionShape(shapeB);	
	}
});
