
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_2',0.1502,'k.oa.a.5','Subtract within 5.');
*/

var i_k_oa_a_5__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.5_2';
             
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

                this.setQuestion(this.x + ' - ' + this.y + ' =');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.5_1',0.1501,'k.oa.a.5','Add within 5.');
*/

var i_k_oa_a_5__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.5_1';
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c > 5 || this.a < 0 || this.b < 0)
		{
			//variables
                	this.x = Math.floor(Math.random()*6);
                	this.y = Math.floor(Math.random()*6);
			this.c = parseInt(this.x + this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion(this.x + ' + ' + this.y + ' =');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

