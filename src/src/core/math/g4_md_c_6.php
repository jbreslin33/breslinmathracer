
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.6_2',4.3002,'4.md.c.6','');
*/
var i_4_md_c_6__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.d = Math.floor(Math.random()*45)+30;
        this.a = parseInt(this.d);

        this.mRaphael = Raphael(20,20,380,380);
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.6_2';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setQuestion('What is the turn of this angle in degrees?');
        this.setAnswer('' + parseInt(this.a - 5),0);
        this.setAnswer('' + parseInt(this.a - 4),1);
        this.setAnswer('' + parseInt(this.a - 3),2);
        this.setAnswer('' + parseInt(this.a - 2),3);
        this.setAnswer('' + parseInt(this.a - 1),4);
        this.setAnswer('' + parseInt(this.a),5);
        this.setAnswer('' + parseInt(this.a + 1),6);
        this.setAnswer('' + parseInt(this.a + 2),7);
        this.setAnswer('' + parseInt(this.a + 3),8);
        this.setAnswer('' + parseInt(this.a + 4),9);
        this.setAnswer('' + parseInt(this.a + 5),10);
},

createShapes: function()
{
        this.parent();

        var angleB = this.d;
        var angleA = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.6_1',4.3001,'4.md.c.6','');
*/
var i_4_md_c_6__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
  	this.d = Math.floor(Math.random()*45)+180;
	this.a = parseInt(360 - this.d); 

        this.mRaphael = Raphael(20,20,380,380);
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.6_1';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setQuestion('What is the turn of this angle in degrees?');
        this.setAnswer('' + parseInt(this.a - 5),0);
        this.setAnswer('' + parseInt(this.a - 4),1);
        this.setAnswer('' + parseInt(this.a - 3),2);
        this.setAnswer('' + parseInt(this.a - 2),3);
        this.setAnswer('' + parseInt(this.a - 1),4);
        this.setAnswer('' + parseInt(this.a),5);
        this.setAnswer('' + parseInt(this.a + 1),6);
        this.setAnswer('' + parseInt(this.a + 2),7);
        this.setAnswer('' + parseInt(this.a + 3),8);
        this.setAnswer('' + parseInt(this.a + 4),9);
        this.setAnswer('' + parseInt(this.a + 5),10);

},

createShapes: function()
{
        this.parent();

        var angleA = this.d;
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

