/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_1',4.3101,'4.md.c.7','');
*/
var i_4_md_c_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.a = Math.floor(Math.random()*45)+30;
        this.b = parseInt(this.d);
        this.c = parseInt(this.d);

        this.mRaphael = Raphael(20,20,380,380);
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.7_1';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setQuestion('What is the turn of this angle in degrees?');
        this.setAnswer('' + parseInt(this.a + this.c),0);
},

createShapes: function()
{
        this.parent();

        var angleA = this.a;
        var angleB = 360;
        var angleC = this.c;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

