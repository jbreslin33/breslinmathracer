/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_1',1.2001,'1.md.b.3','' );
*/
var i_1_md_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_1';

        this.onesA = 10;
        this.tensA = 0;
        this.onesB = 10;
        this.c = 0;

        while (parseInt(this.onesA + this.onesB) > 10 || this.c > 99)
        {
                this.onesA = Math.floor(Math.random()*9)+1;
                this.tensA = Math.floor(Math.random()*9)+1;
                this.onesB = Math.floor(Math.random()*9)+1;
                this.c = parseInt(this.tensA * 10 + this.onesA + this.onesB);
        }

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.onesB + ' = ');
        this.setAnswer('' + this.c,0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	

/*
	var shapeA = new Shape(50,50,240,200,this.mSheet.mGame,"","","");
        var shapeB = new Shape(50,50,530,200,this.mSheet.mGame,"","","");
        shapeA.setText(this.a);
        shapeB.setText(this.b);
        this.addQuestionShape(shapeA);
        this.addQuestionShape(shapeB);
*/
}
});
