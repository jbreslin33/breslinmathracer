
/* TYPE_DESCRIPTION: Subtract with sum and minuend within 5. */
var i_k_nbt_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_1';
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5 || this.x > 10 || this.a < 0 || this.b < 0)
		{
			//variables
                	this.x = Math.floor(Math.random()*6);
                	this.y = Math.floor(Math.random()*6);
			this.c = parseInt(this.x - this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                //this.setQuestion(this.x + ' - ' + this.y + ' =');
                this.setQuestion('What is ' + this.c + ' equal to?');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

