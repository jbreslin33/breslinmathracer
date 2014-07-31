

/* TYPE_DESCRIPTION: Subtract with sum and minuend within 10. */
var i_k_oa_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.2_2';
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 10 || this.x > 10 || this.a < 0 || this.b < 0)
		{
			//variables
                	this.x = Math.floor(Math.random()*11);
                	this.y = Math.floor(Math.random()*11);
			this.c = parseInt(this.x - this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*5)+parseInt(this.c-3);
			this.b = Math.floor(Math.random()*5)+parseInt(this.c-3);
                }

                this.setQuestion(this.x + ' - ' + this.y + ' =');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Add with sum within 10. */
var i_k_oa_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.2_1';
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c > 10 || this.a < 0 || this.b < 0)
		{
			//variables
                	this.x = Math.floor(Math.random()*11);
                	this.y = Math.floor(Math.random()*11);
			this.c = parseInt(this.x + this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*5)+parseInt(this.c-3);
			this.b = Math.floor(Math.random()*5)+parseInt(this.c-3);
                }

                this.setQuestion(this.x + ' + ' + this.y + ' =');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

