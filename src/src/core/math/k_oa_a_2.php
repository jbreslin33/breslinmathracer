//add here
/* TYPE_DESCRIPTION: Add with sum within 10. */
var i_k_oa_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.2_1';
             
		this.mNameMachine = new NameMachine();
		this.mPictureLink = this.mNameMachine.getPictureLink();
 
		this.a = 0;
		this.b = 0;
		this.c = -1;

		this.x = 0;	 
		this.y = 0;	 

		this.sign = Math.floor(Math.random()*2);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5)
		{
			//variables
                	this.x = Math.floor((Math.random()*5)+1);
                	this.y = Math.floor((Math.random()*5)+1);
			this.c = this.x + this.y;  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion('JeepersSolve.');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        },
        
	createQuestionShapes: function()
        {
                var x = 0;
                var y = 100;
		var space = 50;

		var i = 0;
		while (i < this.x)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
	
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/plus.png","",""));	
		
		i = 0;
		while (i < this.y)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/equal.png","",""));	
        }
});
