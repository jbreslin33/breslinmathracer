
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

        var a = 0;
        var b = 0;
	var c = 0;	
	var d = 0;

        while (b <= a || d <= c || parseFloat(a/b) <= parseFloat(c/d))
        {
        	a = Math.floor(Math.random()*9+1);
                b = Math.floor(Math.random()*8+2);
                c = Math.floor(Math.random()*9+1);
                d = Math.floor(Math.random()*8+2);
        }

        this.mFractionA = new Fraction(a,b,false);
        this.mFractionB = new Fraction(c,d,false);

        this.setQuestion('Compare.');
        this.setAnswer('&gt;',0);

        this.mButtonA.setAnswer('&gt;');
        this.mButtonB.setAnswer('=');
        this.mButtonC.setAnswer('&lt;');
},

createQuestionShapes: function()
{
	var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
        var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

        shapeA.setText('' + this.mFractionA.getString());
        shapeB.setText('' + this.mFractionB.getString());

        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
}
});
