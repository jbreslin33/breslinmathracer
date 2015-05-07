//new Parallelogram(game,raphael,ax1,ay1,ax2,ay2,bx2,by2,bx1,by1,.5,.5,.5,"#000",1,false);

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_22',4.3322,'4.g.a.2','');
*/
var i_4_g_a_2__22 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_22';

        this.setQuestion('What is the name of the figure below?');
        this.setAnswer('' + 'Rhombus',0);
},

createQuestionShapes: function()
{
        var x = parseInt(this.mRaphael.width/2);
        var y = parseInt(this.mRaphael.height/2);

        var rhombus = new Rhombus(this.mSheet.mGame,this.mRaphael,

 		parseInt(x)    ,parseInt(y-150),
		parseInt(x+125),parseInt(y-75),
	 	parseInt(x)    ,parseInt(y),
		parseInt(x-125),parseInt(y-75),

		.5,.5,.5,"#000",1,false);
        this.addQuestionShape(rhombus);

        var lineA = new LineOne (parseInt(x+67.5),parseInt(y-117.5),parseInt(x+57.5),parseInt(y-110.5),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
        
	var lineB = new LineOne (parseInt(x+67.5),parseInt(y-32.5),parseInt(x+57.5),parseInt(y-42.5),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_21',4.3321,'4.g.a.2','');
*/
var i_4_g_a_2__21 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_21';

        this.setQuestion('What kind of quadralateral is the shape below?');
        this.setAnswer('' + 'Parallelogram',0);
},

createQuestionShapes: function()
{
	var x = parseInt(this.mRaphael.width/2);
	var y = parseInt(this.mRaphael.height/2);

	var parallelogram = new Parallelogram(this.mSheet.mGame,this.mRaphael, parseInt(x-175),parseInt(y-150), parseInt(x+125),parseInt(y-150), parseInt(x+100),parseInt(y+25), parseInt(x-200),parseInt(y+25),.5,.5,.5,"#000",1,false);
        this.addQuestionShape(parallelogram);

	var lineA = new LineOne (parseInt(x-20),parseInt(y-160),parseInt(x-20),parseInt(y-140),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);

	var lineB = new LineOne (parseInt(x+100),parseInt(y-75),parseInt(x+130),parseInt(y-75),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
	
	var lineC = new LineOne (parseInt(x+100),parseInt(y-65),parseInt(x+130),parseInt(y-65),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineC);
	
	var lineD = new LineOne (parseInt(x-20),parseInt(y+15),parseInt(x-20),parseInt(y+35),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineD);

        var lineE = new LineOne (parseInt(x-200),parseInt(y-75),parseInt(x-170),parseInt(y-75),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineE);

        var lineF = new LineOne (parseInt(x-200),parseInt(y-65),parseInt(x-170),parseInt(y-65),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineF);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_20',4.3320,'4.g.a.2','');
*/
var i_4_g_a_2__20 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_20';

        this.setQuestion('What kind of triangle is the shape below?');
        this.setAnswer('' + 'Right',0);
        this.setAnswer('' + 'Right triangle',1);
},

createQuestionShapes: function()
{
        var angleA = 270;
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);

	//right square
	var rectangle = new Rectangle(12,12,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2 - 12),this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(rectangle);
	
	
}
});

