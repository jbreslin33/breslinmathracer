
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_26',4.3226,'4.g.a.1',''); update item_types SET progression = 4.3226 where id = '4.g.a.1_26';
*/
var i_4_g_a_1__26 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_26';

        this.mRandom = Math.floor(Math.random()*2)+1;

        if (this.mRandom == 1)
        {
        	this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        	this.setAnswer('' + 'Obtuse',0);
        	this.setAnswer('' + 'Obtuse angle',1);
        }
        if (this.mRandom == 2)
        {
        	this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        	this.setAnswer('' + 'Acute',0);
        	this.setAnswer('' + 'Acute angle',1);
        }

        if (this.mRandom == 3)
        {
        	this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        	this.setAnswer('' + 'Right',0);
        	this.setAnswer('' + 'Right angle',1);
        }
},

createQuestionShapes: function()
{
        if (this.mRandom == 1)
        {
        	var angleA = Math.floor(Math.random()*30+200);
        	var angleB = 360;

        	this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayA);

        	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayB);

        	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        	this.addQuestionShape(this.mAngleArc);
	}
        if (this.mRandom == 2)
        {
        	var angleA = Math.floor(Math.random()*30+280);
        	var angleB = 360;

        	this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayA);

        	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayB);

        	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        	this.addQuestionShape(this.mAngleArc);
        }
        if (this.mRandom == 3)
        {
        	var angleA = 270;
        	var angleB = 360;

        	this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayA);

        	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        	this.addQuestionShape(this.mRayB);

        	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        	this.addQuestionShape(this.mAngleArc);
        }
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_25',4.3225,'4.g.a.1',''); update item_types SET progression = 4.3225 where id = '4.g.a.1_25';
*/
var i_4_g_a_1__25 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_25';

        this.mRandom = Math.floor(Math.random()*2)+1;

	if (this.mRandom == 1)
	{
        	this.setQuestion('What kind of lines are these parallel or perpendicular?');
        	this.setAnswer('' + 'parallel',0);
	}
	if (this.mRandom == 2)
	{
	        this.setQuestion('What kind of lines are these parallel or perpendicular?');
        	this.setAnswer('' + 'perpendicular',0);
	}
},

createQuestionShapes: function()
{
	if (this.mRandom == 1)
	{
        	var lineA = new LineOne (150,50,150,200,this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineA);

        	var lineB = new LineOne (250,50,250,200,this.mGame,this.mRaphael,"#000",.5,false);
       	 	this.addQuestionShape(lineB);
	}
	if (this.mRandom == 2)
	{
        	var lineA = new LineOne (150,50,150,200,this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineA);

        	var lineB = new LineOne (200,100,350,100,this.mGame,this.mRaphael,"#000",.5,false);
        	this.addQuestionShape(lineB);
	}
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_24',4.3224,'4.g.a.1',''); update item_types SET progression = 4.3224 where id = '4.g.a.1_24';
*/
var i_4_g_a_1__24 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_24';

        this.setAnswer('' + '2',0);
        this.setQuestion('' + 'If you start at A and follow the rectangle perimeter and pass through B C and D then how many right angle turns will you make?');
},

createQuestionShapes: function()
{
	var rectangle = new Rectangle(200,150,200,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(rectangle);

	var textA = new RaphaelText(380,50,this,0,0,1,"#000000",.5,false,"" + "A",16);
	this.addQuestionShape(textA);

	var textB = new RaphaelText(200,80,this,0,0,1,"#000000",.5,false,"" + "B",16);
	this.addQuestionShape(textB);
	
	var textC = new RaphaelText(200,160,this,0,0,1,"#000000",.5,false,"" + "C",16);
	this.addQuestionShape(textC);
	
	var textD = new RaphaelText(300,200,this,0,0,1,"#000000",.5,false,"" + "D",16);
	this.addQuestionShape(textD);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_23',4.3223,'4.g.a.1',''); update item_types SET progression = 4.3223 where id = '4.g.a.1_23';
*/
var i_4_g_a_1__23 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_23';

        this.setQuestion('How many acute angles appear to be inside the drawing below?');
        this.setAnswer('' + '2',0);
},

createQuestionShapes: function()
{
	var lineA = new LineOne (400,50,300,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
	
	var lineB = new LineOne (300,100,350,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
	
	var lineC = new LineOne (350,100,350,150,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineC);
	
	var lineD = new LineOne (350,150,150,150,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineD);
	
	var lineE = new LineOne (150,150,150,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineE);
	
	var lineF = new LineOne (150,200,450,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineF);
	
	var lineG = new LineOne (450,200,450,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineG);
	
	var lineH = new LineOne (450,100,500,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineH);
	
	var lineI = new LineOne (500,100,400,50,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineI);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_22',4.3222,'4.g.a.1',''); update item_types SET progression = 4.3222 where id = '4.g.a.1_22';
*/
var i_4_g_a_1__22 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_22';

        this.setQuestion('How many obtuse angles appear to be inside the drawing below?');
        this.setAnswer('' + '18',0);
},

createQuestionShapes: function()
{
        var hexagonA = new Hexagon (this.mSheet.mGame,this.mRaphael,140, 90, 125,125, 140,160, 185,160, 200,125, 185,90,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(hexagonA);

        var hexagonB = new Hexagon (this.mSheet.mGame,this.mRaphael,200,125, 185,160, 200,195, 245,195, 260,160, 245,125,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(hexagonB);
        
	var hexagonC = new Hexagon (this.mSheet.mGame,this.mRaphael,260, 90, 245,125, 260,160, 305,160, 320,125, 305,90,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(hexagonC);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_21',4.3221,'4.g.a.1',''); update item_types SET progression = 4.3221 where id = '4.g.a.1_21';
*/
var i_4_g_a_1__21 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_21';
        
        this.setQuestion('How many angles are inside the drawing below?');
       	this.setAnswer('' + '7',0);
},

createQuestionShapes: function()
{
	var rectangle = new Rectangle(50,50,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(rectangle);

	var triangle = new Triangle (125,125,100,150,150,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(triangle);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_12',4.3212,'4.g.a.1',''); update item_types SET progression = 4.3212 where id = '4.g.a.1_12';
*/
var i_4_g_a_1__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
	this.ns = new NameSampler();
        this.mType = '4.g.a.1_12';

        this.setQuestion('' + this.ns.mNameOne + ' drew the figure below. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to draw one point at each place where the endpoints of the segments meet. How many points will ' + this.ns.mNameOne + ' draw?');
        this.setAnswer('' + '7',0);
        this.setAnswer('' + '7 points',1);
},

createQuestionShapes: function()
{
        var hexagon = new Hexagon (this.mSheet.mGame,this.mRaphael, 260,90, 245,125, 260,160, 305,160, 320,125, 305,90,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(hexagon);
	
	var lineA = new LineOne (260,90, 305,160,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
	
	var lineB = new LineOne (245,125, 320,125,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
	
	var lineC = new LineOne (260,160, 305,90,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineC);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_11',4.3211,'4.g.a.1',''); update item_types SET progression = 4.3211 where id = '4.g.a.1_11';
*/
var i_4_g_a_1__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mType = '4.g.a.1_11';

        this.setQuestion('A point is placed at each vertex of a pentagon. How many points are needed?');
        this.setAnswer('' + '5',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_10',4.3210,'4.g.a.1',''); update item_types SET progression = 4.3210 where id = '4.g.a.1_10';
*/
var i_4_g_a_1__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_10';

        this.setQuestion('How many line segments does the shape below have?');
        this.setAnswer('' + '6',0);
},

createQuestionShapes: function()
{
        var rectangle = new Rectangle(50,50,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(rectangle);

        var triangle = new Triangle (125,125,100,150,150,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_9',4.3209,'4.g.a.1',''); update item_types SET progression = 4.3209 where id = '4.g.a.1_9';
*/
var i_4_g_a_1__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_9';

        this.setQuestion('How many acute angles are inside the shape below?');
        this.setAnswer('' + '2',0);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (100,225, 200,200, 300,225,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_8',4.3208,'4.g.a.1',''); update item_types SET progression = 4.3208 where id = '4.g.a.1_8';
*/
var i_4_g_a_1__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_8';

        this.setQuestion('How many obtuse angles are inside the shape below?');
        this.setAnswer('' + '1',0);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (100,225, 200,200, 300,225,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_7',4.3207,'4.g.a.1',''); update item_types SET progression = 4.3207 where id = '4.g.a.1_7';
*/
var i_4_g_a_1__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_7';

        this.setQuestion('How many acute angles are inside the shape below?');
        this.setAnswer('' + '3',0);
},

createQuestionShapes: function()
{
	var triangle = new Triangle (100,225, 200,0, 300,225,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(triangle);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_6',4.3206,'4.g.a.1',''); update item_types SET progression = 4.3206 where id = '4.g.a.1_6';
*/
var i_4_g_a_1__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_6';

        this.setQuestion('What is this?');
        this.setAnswer('' + 'Line segment',0);
},

createQuestionShapes: function()
{
 	var endPointA = new Circle(8,100,100,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(endPointA);
 	
 	var endPointB = new Circle(8,300,100,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(endPointB);
        
	var lineA = new LineOne (100,100,300,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_5',4.3205,'4.g.a.1',''); update item_types SET progression = 4.3205 where id = '4.g.a.1_5';
*/
var i_4_g_a_1__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_5';

        this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        this.setAnswer('' + 'Obtuse',0);
        this.setAnswer('' + 'Obtuse angle',1);
},

createQuestionShapes: function()
{
        var angleA = Math.floor(Math.random()*30+200);
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_4',4.3204,'4.g.a.1',''); update item_types SET progression = 4.3204 where id = '4.g.a.1_4';
*/
var i_4_g_a_1__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_4';

        this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        this.setAnswer('' + 'Acute',0);
        this.setAnswer('' + 'Acute angle',1);
},

createQuestionShapes: function()
{
	var angleA = Math.floor(Math.random()*30+280);
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_3',4.3203,'4.g.a.1',''); update item_types SET progression = 4.3203 where id = '4.g.a.1_3';
*/
var i_4_g_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
	this.mChopWhiteSpace = false;
        this.mType = '4.g.a.1_3';

        this.setQuestion('What kind of angle is this? Acute or Obtuse or Right?');
        this.setAnswer('' + 'Right',0);
        this.setAnswer('' + 'Right angle',1);
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
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_2',4.3202,'4.g.a.1',''); update item_types SET progression = 4.3202 where id = '4.g.a.1_2';
*/
var i_4_g_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_2';

        this.setQuestion('What kind of lines are these parallel or perpendicular?');
        this.setAnswer('' + 'perpendicular',0);
},

createQuestionShapes: function()
{
        var lineA = new LineOne (150,50,150,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);

        var lineB = new LineOne (200,100,350,100,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_1',4.3201,'4.g.a.1',''); update item_types SET progression = 4.3201 where id = '4.g.a.1_1';
*/
var i_4_g_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_1';

        this.setQuestion('What kind of lines are these parallel or perpendicular?');
        this.setAnswer('' + 'parallel',0);
},

createQuestionShapes: function()
{
	var lineA = new LineOne (150,50,150,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
	
	var lineB = new LineOne (250,50,250,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineB);
}
});

