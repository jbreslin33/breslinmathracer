
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_1',0.1001,'k.cc.c.7','Compare 2 numbers with greater than.');
*/

var i_k_cc_c_7__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.7_1';

		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = 0;		
		this.b = 0;		

		while (this.a <= this.b)
		{	
			this.a = Math.floor(Math.random()*10+1);
			this.b = Math.floor(Math.random()*10+1);
		}

		this.setQuestion('Compare.');
                this.setAnswer('Is greater than.',0);

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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_2',0.1002,'k.cc.c.7','Compare 2 numbers with equal to.');
*/

var i_k_cc_c_7__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.7_2';

		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*10+1);
		this.b = this.a;		

		this.setQuestion('Compare.');
                this.setAnswer('Is equal to.',0);

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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.7_3',0.1003,'k.cc.c.7','Compare 2 numbers with less than.');
*/

var i_k_cc_c_7__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.7_3';

		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = 0;		
		this.b = 0;		

		while (this.a >= this.b)
		{	
			this.a = Math.floor(Math.random()*10+1);
			this.b = Math.floor(Math.random()*10+1);
		}

		this.setQuestion('Compare.');
                this.setAnswer('Is less than.',0);

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
