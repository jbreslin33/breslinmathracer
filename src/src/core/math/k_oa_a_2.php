
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_4',0.1204,'k.oa.a.2','Subtraction word problems within 10.');
*/

var i_k_oa_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.2_4';

		this.mNameMachine = new NameMachine();
		this.mNameOne = this.mNameMachine.getName();
		this.mNameTwo = this.mNameMachine.getName();
		this.mThing = this.mNameMachine.getThing();
		this.mOwned = this.mNameMachine.getOwned();
		this.mAdded = this.mNameMachine.getAdded();
		this.mSubtracted = this.mNameMachine.getSubtracted();
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c > 10 || this.a < 0 || this.b < 0 || this.x > 10)
		{
			//variables
                	this.x = Math.floor(Math.random()*9)+2;
                	this.y = Math.floor(Math.random()*9)+2;
			this.c = parseInt(this.x - this.y);  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*5)+parseInt(this.c-3);
			this.b = Math.floor(Math.random()*5)+parseInt(this.c-3);
                }

                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);

                var roll = Math.floor(Math.random()*11);
		roll = 0;
		if (roll == 0)
		{
                	this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.x + ' ' + this.mThing + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' ' + this.mSubtracted + ' ' + this.y + ' ' + this.mThing  + '. How many ' + this.mThing + ' does ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' have now?');
		}


                this.shuffle(10);
        }
});

/*        
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_3',0.1203,'k.oa.a.2','Addition word problems within 10.');
*/

var i_k_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.2_3';

		this.mNameMachine = new NameMachine();
		this.mNameOne = this.mNameMachine.getName();
		this.mNameTwo = this.mNameMachine.getName();
		this.mThing = this.mNameMachine.getThing();
		this.mOwned = this.mNameMachine.getOwned();
		this.mAdded = this.mNameMachine.getAdded();
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c > 10 || this.a < 0 || this.b < 0)
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

                var roll = Math.floor(Math.random()*11);
		roll = 0;
		if (roll == 0)
		{
                	this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.x + ' ' + this.mThing + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' ' + this.mAdded + ' ' + this.y + ' more ' + this.mThing  + '. How many ' + this.mThing + ' does ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' have now?');
		}


                this.shuffle(10);
        }
});

/*        
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_2',0.1202,'k.oa.a.2','Subtract within 10.');
*/

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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.2_1',0.1201,'k.oa.a.2','Add within 10.');
*/

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

