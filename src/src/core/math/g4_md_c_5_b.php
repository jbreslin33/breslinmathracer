
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.b_2',4.2902,'4.md.c.5.b',''); update item_types SET progression = 4.0542 where id = '4.md.c.5.b_2';
*/
var i_4_md_c_5_b__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.mRaphael = Raphael(20,20,380,380);
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.b_2';
        this.mChopWhiteSpace = false;

        var f = new Fraction(180,360,false);

        this.setQuestion('What is the turn of this angle in degrees?');
        this.setAnswer('' + '180',0);
        this.setAnswer('' + '180 degrees',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 180;
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.b_1',4.2902,'4.md.c.5.b',''); update item_types SET progression = 4.0541 where id = '4.md.c.5.b_1';
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

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

