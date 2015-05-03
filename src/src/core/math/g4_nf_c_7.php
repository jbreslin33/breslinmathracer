/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.7_1',4.2101,'4.nf.c.7','');
*/
var i_4_nf_c_7__1 = new Class(
{
Extends: ThreeButtonItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '4.nf.c.7_1';

        //BUTTON A
        this.mButtonA.setPosition(380,100);
        this.mButtonB.setPosition(380,200);
        this.mButtonC.setPosition(380,300);

        var a = 20;
        var b = 20;

	while(a % 10 == 0 || b % 10 == 0)
	{
        	a = Math.floor(Math.random()*89+10);
        	b = Math.floor(Math.random()*89+10);
	}

        this.mDecimalA = new Decimal('0.' + a);
        this.mDecimalB = new Decimal('0.' + b);

        this.setQuestion('Compare.');

	if (a > b)
	{
        	this.setAnswer('&gt;',0);
	}
	else if (a == b)
	{
        	this.setAnswer('=',0);
	}
	else if (a < b)
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

        shapeA.setText('' + this.mDecimalA.getString());
        shapeB.setText('' + this.mDecimalB.getString());

        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
}
});

