/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.b_1',4.2908,'4.md.c.5.b','');
*/
var i_4_md_c_5_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.mRaphael = Raphael(20,20,380,380);
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.b_1';
        this.mChopWhiteSpace = false;

        var f = new Fraction(90,360,false);

        this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle.');
        this.setAnswer('' + 'right angle',0);
        this.setAnswer('' + 'a right angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 90;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

