
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_1',0.0901,'k.cc.c.6','Compare 10 objects with greater than.');
*/

var i_k_cc_c_6__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.6_1';

	        this.mNameMachine = new NameMachine();
        	this.mPictureLinkLeft = this.mNameMachine.getPictureLink();
        	this.mPictureLinkRight = this.mNameMachine.getPictureLink();
 
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

                this.setAnswer('Is greater than.',0);

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var x = 40;
		var y = 100;
		for (var i = 0; i < this.a; i++)
		{
			if (i == 5) 
			{
				x = 40;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkLeft,"",""));
			x = x + 50;
		}
		var x = 500;
		var y = 100;
		for (var i = 0; i < this.b; i++)
		{
			if (i == 5) 
			{
				x = 500;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkRight,"",""));
			x = x + 50;
		}
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_2',0.0902,'k.cc.c.6','Compare 10 objects with equal to.');
*/

var i_k_cc_c_6__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.6_1';

	        this.mNameMachine = new NameMachine();
        	this.mPictureLinkLeft = this.mNameMachine.getPictureLink();
        	this.mPictureLinkRight = this.mNameMachine.getPictureLink();
 
		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*10+1);
		this.b = this.a;

                this.setAnswer('Is equal to.',0);

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var x = 40;
		var y = 100;
		for (var i = 0; i < this.a; i++)
		{
			if (i == 5) 
			{
				x = 40;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkLeft,"",""));
			x = x + 50;
		}
		var x = 500;
		var y = 100;
		for (var i = 0; i < this.b; i++)
		{
			if (i == 5) 
			{
				x = 500;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkRight,"",""));
			x = x + 50;
		}
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.c.6_3',0.0903,'k.cc.c.6','Compare 10 objects with less than.');
*/

var i_k_cc_c_6__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.6_3';

	        this.mNameMachine = new NameMachine();
        	this.mPictureLinkLeft = this.mNameMachine.getPictureLink();
        	this.mPictureLinkRight = this.mNameMachine.getPictureLink();
 
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

                this.setAnswer('Is less than.',0);

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var x = 40;
		var y = 100;
		for (var i = 0; i < this.a; i++)
		{
			if (i == 5) 
			{
				x = 40;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkLeft,"",""));
			x = x + 50;
		}
		var x = 500;
		var y = 100;
		for (var i = 0; i < this.b; i++)
		{
			if (i == 5) 
			{
				x = 500;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkRight,"",""));
			x = x + 50;
		}
	}
});
