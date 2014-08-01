
/* TYPE_DESCRIPTION: Find the number that makes ten. */
var i_k_oa_a_4__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.4_1';

		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c != 10 || this.a < 0 || this.b < 0 || this.x > 10)
		{
			//variables
                	this.x = Math.floor(Math.random()*9)+2;
                	this.y = Math.floor(Math.random()*9)+2;
			this.c = parseInt(this.x + this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*5)+parseInt(this.c-3);
			this.b = Math.floor(Math.random()*5)+parseInt(this.c-3);
                }

                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);

		this.setQuestion(this.x + ' + _ = 10'); 
                this.shuffle(10);
        }
});
