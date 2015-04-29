/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.b_1',4.2908,'4.md.c.5.b','');
*/
var i_4_md_c_5_b__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
 	this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);
        this.mType = '4.md.c.5.b_1';

        var f = new Fraction(90,360,true);

        this.setQuestion('What fraction of a turn does this angle represent?');
        this.setAnswer('' + f.getString(),0);
},

createShapes: function()
{
        this.parent();

	this.mRaphael.setSize(380,380);

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

