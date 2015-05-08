
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_28',4.3328,'4.g.a.2','');
*/
var i_4_g_a_2__28 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_28';
	
	this.mRandom = Math.floor(Math.random()*3)+1;

	if (this.mRandom == 1)
	{
        	this.setQuestion('What kind of quadralateral is the shape below?');
        	this.setAnswer('' + 'Parallelogram',0);
	}
	if (this.mRandom == 2)
	{
        	this.setQuestion('The shape below has only 1 pair of parallel sides. What is it called?');
        	this.setAnswer('' + 'Trapezoid',0);
        	this.setAnswer('' + 'A Trapezoid',1);
	}
	if (this.mRandom == 3)
	{
        	this.setQuestion('What is the name of the figure below?');
        	this.setAnswer('' + 'Rhombus',0);
        	this.setAnswer('' + 'A Rhombus',1);
	}
},

createQuestionShapes: function()
{
	if (this.mRandom == 1)
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
	if (this.mRandom == 2)
	{
        	var x = parseInt(this.mRaphael.width/2);
        	var y = parseInt(this.mRaphael.height/2);

        	var trapezoid = new Trapezoid(this.mSheet.mGame,this.mRaphael,
                	parseInt(x-175),parseInt(y-150),
                	parseInt(x+135),parseInt(y-150),
                	parseInt(x+250),parseInt(y+25),
                	parseInt(x-200),parseInt(y+25),
                	.5,.5,.5,"#000",1,false);
        	this.addQuestionShape(trapezoid);
	}
	if (this.mRandom == 3)
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

        	var lineB = new LineOne (parseInt(x+69.5),parseInt(y-32.5),parseInt(x+57.5),parseInt(y-42.5),this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineB);

        	var lineC = new LineOne (parseInt(x-67.5),parseInt(y-35.5),parseInt(x-57.5),parseInt(y-42.5),this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineC);

        	var lineD = new LineOne (parseInt(x-57.5),parseInt(y-110.5),parseInt(x-67.5),parseInt(y-117.5),this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineD);
	}
	if (this.mRandom == 4)
	{

	}
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_27',4.3327,'4.g.a.2','');
*/
var i_4_g_a_2__27 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_27';

        this.setQuestion('What kind of triangle is the shape below?');

	this.mRandom = Math.floor(Math.random()*4)+1;
	
	if (this.mRandom == 1)
	{
        	this.setAnswer('' + 'Right',0);
        	this.setAnswer('' + 'Right triangle',1);
	}
	if (this.mRandom == 2)
	{
        	this.setQuestion('What kind of triangle is the shape below?');
        	this.setAnswer('' + 'acute',0);
        	this.setAnswer('' + 'acute triangle',1);
	}
	if (this.mRandom == 3)
	{
        	this.setQuestion('What kind of triangle is the shape below?');
        	this.setAnswer('' + 'obtuse',0);
        	this.setAnswer('' + 'obtuse triangle',1);
	}
	if (this.mRandom == 4)
	{
        	this.setQuestion('What kind of triangle is the shape below?');
        	this.setAnswer('' + 'equilateral',0);
        	this.setAnswer('' + 'equilateral triangle',1);
	}
},

createQuestionShapes: function()
{
	if (this.mRandom == 1)
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
	if (this.mRandom == 2)
	{
        	var triangle = new Triangle (20,200, 205,125, 280,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        	this.addQuestionShape(triangle);

        	var textA = new RaphaelText(70,190,this,0,0,1,"#000000",.5,false,"" + "35",16);
        	this.addQuestionShape(textA);

        	var textB = new RaphaelText(200,140,this,0,0,1,"#000000",.5,false,"" + "65",16);
        	this.addQuestionShape(textB);

        	var textC = new RaphaelText(250,190,this,0,0,1,"#000000",.5,false,"" + "80",16);
        	this.addQuestionShape(textC);
	}
	if (this.mRandom == 3)
	{
        	var triangle = new Triangle (20,200, 150,125, 280,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        	this.addQuestionShape(triangle);

        	var textA = new RaphaelText(60,190,this,0,0,1,"#000000",.5,false,"" + "26",16);
        	this.addQuestionShape(textA);

        	var textB = new RaphaelText(150,140,this,0,0,1,"#000000",.5,false,"" + "128",16);
        	this.addQuestionShape(textB);

        	var textC = new RaphaelText(240,190,this,0,0,1,"#000000",.5,false,"" + "26",16);
        	this.addQuestionShape(textC);
	}
	if (this.mRandom == 4)
	{
        	var triangle = new Triangle (20,200, 100,100, 180,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        	this.addQuestionShape(triangle);

        	var textA = new RaphaelText(40,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
        	this.addQuestionShape(textA);

        	var textB = new RaphaelText(100,120,this,0,0,1,"#000000",.5,false,"" + "60",16);
        	this.addQuestionShape(textB);

        	var textC = new RaphaelText(160,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
        	this.addQuestionShape(textC);
	}
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_26',4.3326,'4.g.a.2','');
*/
var i_4_g_a_2__26 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_26';

        this.setQuestion('What kind of triangle is the shape below?');
        this.setAnswer('' + 'acute',0);
        this.setAnswer('' + 'acute triangle',1);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (20,200, 205,125, 280,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);

        var textA = new RaphaelText(70,190,this,0,0,1,"#000000",.5,false,"" + "35",16);
        this.addQuestionShape(textA);

        var textB = new RaphaelText(200,140,this,0,0,1,"#000000",.5,false,"" + "65",16);
        this.addQuestionShape(textB);

        var textC = new RaphaelText(250,190,this,0,0,1,"#000000",.5,false,"" + "80",16);
        this.addQuestionShape(textC);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_25',4.3325,'4.g.a.2','');
*/
var i_4_g_a_2__25 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_25';

        this.setQuestion('What kind of triangle is the shape below?');
        this.setAnswer('' + 'obtuse',0);
        this.setAnswer('' + 'obtuse triangle',1);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (20,200, 150,125, 280,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);

        var textA = new RaphaelText(60,190,this,0,0,1,"#000000",.5,false,"" + "26",16);
        this.addQuestionShape(textA);

        var textB = new RaphaelText(150,140,this,0,0,1,"#000000",.5,false,"" + "128",16);
        this.addQuestionShape(textB);

        var textC = new RaphaelText(240,190,this,0,0,1,"#000000",.5,false,"" + "26",16);
        this.addQuestionShape(textC);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_24',4.3324,'4.g.a.2','');
*/
var i_4_g_a_2__24 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_24';

        this.setQuestion('What kind of triangle is the shape below?');
        this.setAnswer('' + 'equilateral',0);
        this.setAnswer('' + 'equilateral triangle',1);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (20,200, 100,100, 180,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);

	var textA = new RaphaelText(40,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
	this.addQuestionShape(textA);
	
	var textB = new RaphaelText(100,120,this,0,0,1,"#000000",.5,false,"" + "60",16);
	this.addQuestionShape(textB);
	
	var textC = new RaphaelText(160,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
	this.addQuestionShape(textC);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.2_23',4.3323,'4.g.a.2','');
*/
var i_4_g_a_2__23 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.2_23';

        this.setQuestion('The shape below has only 1 pair of parallel sides. What is it called?');
        this.setAnswer('' + 'Trapezoid',0);
        this.setAnswer('' + 'A Trapezoid',1);
},

createQuestionShapes: function()
{
        var x = parseInt(this.mRaphael.width/2);
        var y = parseInt(this.mRaphael.height/2);

        var trapezoid = new Trapezoid(this.mSheet.mGame,this.mRaphael,
		parseInt(x-175),parseInt(y-150),
		parseInt(x+135),parseInt(y-150),
 		parseInt(x+250),parseInt(y+25),
		parseInt(x-200),parseInt(y+25),
		.5,.5,.5,"#000",1,false);
        this.addQuestionShape(trapezoid);
}
});


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
        this.setAnswer('' + 'A Rhombus',1);
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
        
	var lineB = new LineOne (parseInt(x+69.5),parseInt(y-32.5),parseInt(x+57.5),parseInt(y-42.5),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
	
	var lineC = new LineOne (parseInt(x-67.5),parseInt(y-35.5),parseInt(x-57.5),parseInt(y-42.5),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineC);
	
	var lineD = new LineOne (parseInt(x-57.5),parseInt(y-110.5),parseInt(x-67.5),parseInt(y-117.5),this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineD);
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

