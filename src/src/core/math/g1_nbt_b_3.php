
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.3_3',1.1403,'1.nbt.b.3','');
*/
var i_1_nbt_b_3__3 = new Class(
{
Extends: ThreeButtonItem,

initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = '1.nbt.b.3_3';

        //BUTTON A
        this.mButtonA.setPosition(380,100);
        this.mButtonB.setPosition(380,200);
        this.mButtonC.setPosition(380,300);

	this.onesA = 10;
	this.tensA = 9;
	this.onesB = 9;  
	this.tensB = 10;  
        
	while (this.tensA <= this.tensB || this.onesA >= this.onesB)
	{	
		this.onesA = Math.floor(Math.random()*9+1);
		this.tensA = Math.floor(Math.random()*9+1);
		this.onesB = Math.floor(Math.random()*9+1);
		this.tensB = Math.floor(Math.random()*9+1);
	}
	this.a = (parseInt(this.tensA * 10 + this.onesA));
	this.b = (parseInt(this.tensB * 10 + this.onesB));

        this.setQuestion('Compare.');
	if (this.a > this.b) 	
	{
        	this.setAnswer('&gt;',0);
	}
	if (this.a == this.b) 	
	{
        	this.setAnswer('=',0);
	}
	if (this.a < this.b) 	
	{
        	this.setAnswer('&lt;',0);
	}

        this.mButtonA.setAnswer('&gt;');
        this.mButtonB.setAnswer('=');
        this.mButtonC.setAnswer('&lt;');
},

createQuestionShapes: function()
{
	var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
        var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

        shapeA.setText('' + this.a);
        shapeB.setText('' + this.b);

        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.3_2',1.1402,'1.nbt.b.3','');
*/
var i_1_nbt_b_3__2 = new Class(
{
Extends: ThreeButtonItem,

initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = '1.nbt.b.3_2';

        //BUTTON A
        this.mButtonA.setPosition(380,100);
        this.mButtonB.setPosition(380,200);
        this.mButtonC.setPosition(380,300);
        	
	this.a = Math.floor(Math.random()*10);
	this.b = Math.floor(Math.random()*10);
	this.c = Math.floor(Math.random()*9+1);
	this.a = (this.c * 10 + this.a);
	this.b = (this.c * 10 + this.b);

        this.setQuestion('Compare.');
	if (this.a > this.b) 	
	{
        	this.setAnswer('&gt;',0);
	}
	if (this.a == this.b) 	
	{
        	this.setAnswer('=',0);
	}
	if (this.a < this.b) 	
	{
        	this.setAnswer('&lt;',0);
	}

        this.mButtonA.setAnswer('&gt;');
        this.mButtonB.setAnswer('=');
        this.mButtonC.setAnswer('&lt;');
},

createQuestionShapes: function()
{
	var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
        var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

        shapeA.setText('' + this.a);
        shapeB.setText('' + this.b);

        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.3_1',1.1401,'1.nbt.b.3','');
*/
var i_1_nbt_b_3__1 = new Class(
{
Extends: ThreeButtonItem,

initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = '1.nbt.b.3_1';

        //BUTTON A
        this.mButtonA.setPosition(380,100);
        this.mButtonB.setPosition(380,200);
        this.mButtonC.setPosition(380,300);
        	
	this.a = Math.floor(Math.random()*89+10);
	this.b = Math.floor(Math.random()*89+10);

        this.setQuestion('Compare.');
	if (this.a > this.b) 	
	{
        	this.setAnswer('&gt;',0);
	}
	if (this.a == this.b) 	
	{
        	this.setAnswer('=',0);
	}
	if (this.a < this.b) 	
	{
        	this.setAnswer('&lt;',0);
	}

        this.mButtonA.setAnswer('&gt;');
        this.mButtonB.setAnswer('=');
        this.mButtonC.setAnswer('&lt;');
},

createQuestionShapes: function()
{
	var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
        var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

        shapeA.setText('' + this.a);
        shapeB.setText('' + this.b);

        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
}
});
