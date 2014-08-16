
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_1',0.1601,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

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

		this.xa = Math.floor((Math.random()*10)+1);
		this.ya = Math.floor((Math.random()*10)+1);
		this.xb = Math.floor((Math.random()*10)+1);
		this.yb = Math.floor((Math.random()*10)+1);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5 || this.x > 10 || this.a < 0 || this.b < 0 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
		{
			//variables
                	this.x = Math.floor((Math.random()*9)+1);
                	this.y = 10; 
			this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;  
	
			//wrong answers 
			this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;  
			this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;  
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
