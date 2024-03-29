
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_10',4.2810,'4.md.c.5.a',''); update item_types SET progression = 4.2810 where id = '4.md.c.5.a_10';
*/
var i_4_md_c_5_a__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.mRaphael = Raphael(20,20,380,380);
       	this.ns = new NameSampler();
        
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.a_10';

        this.setQuestion('What is the name of this angle?');
},

createShapes: function()
{
        this.parent();
	var textOne = this.ns.mUpperLetterOne;
	var textTwo = this.ns.mUpperLetterTwo;
	var textThree = this.ns.mUpperLetterThree;
        
	this.setAnswer('' + textOne + '' + textTwo + '' + textThree,0);
	this.setAnswer('' + textThree + '' + textTwo + '' + textOne,1);
	this.setAnswer('' + textTwo,2);

        var angleOne = 0;
        var angleThree = 0;
	while (parseInt(angleThree - angleOne) < 45)
	{
        	angleOne   = Math.floor(Math.random()*360);
        	angleThree = Math.floor(Math.random()*360);
	}

	var x = parseInt(this.mRaphael.width/2); 
	var y = parseInt(this.mRaphael.height/2); 

	var lengthOne = 100;
	var lengthThree = 100;
      
	// rotatation 
	var rotateAmountOne = '' + 'r' + angleOne + ',' + x + ',' + y;
	var rotateAmountTwo = '' + 'r' + parseFloat( (angleOne + angleThree) / 2) + ',' + x + ',' + y;
	var rotateAmountThree = '' + 'r' + angleThree + ',' + x + ',' + y;

	//rays 
        this.mRayOne = new Ray (x,y,lengthOne,angleOne,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayOne);
        
	this.mRayThree = new Ray (x,y,lengthThree,angleThree,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayThree);
        
	//add a circle 
        this.mPointOne = new Circle (5,parseInt(x + lengthOne - 30),y,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.mPointOne);
        this.mPointOne.mPolygon.transform(rotateAmountOne);
        
	this.mPointThree = new Circle (5,parseInt(x + lengthThree - 30),y,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.mPointThree);
        this.mPointThree.mPolygon.transform(rotateAmountThree);

	//add a letter 
	this.mTextOne = new RaphaelText(parseInt(x + lengthOne + 15),y,this,0,0,1,"#000000",.5,false,"" + textOne,16);
	this.addQuestionShape(this.mTextOne);
        this.mTextOne.mPolygon.transform(rotateAmountOne);
	
	this.mTextTwo = new RaphaelText(parseInt(x - 15),y,this,0,0,1,"#000000",.5,false,"" + textTwo,16);
	this.addQuestionShape(this.mTextTwo);
        this.mTextTwo.mPolygon.transform(rotateAmountTwo);
	
	this.mTextThree = new RaphaelText(parseInt(x + lengthThree + 15),y,this,0,0,1,"#000000",.5,false,"" + textThree,16);
	this.addQuestionShape(this.mTextThree);
        this.mTextThree.mPolygon.transform(rotateAmountThree);
	
	//angle arc
        this.mAngleArc = new AngleArc(x,y,50,parseFloat(angleThree),parseFloat(angleOne),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_9',4.2809,'4.md.c.5.a',''); update item_types SET progression = 4.2809 where id = '4.md.c.5.a_9';
*/
var i_4_md_c_5_a__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.a_9';
	this.mChopWhiteSpace = false;

        var f = new Fraction(180,360,false);

       	this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle. It measures 180&deg.');
        this.setAnswer('' + 'straight angle',0);
        this.setAnswer('' + 'a straight angle',1);
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
        
	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_8',4.2808,'4.md.c.5.a',''); update item_types SET progression = 4.2808 where id = '4.md.c.5.a_8';
*/
var i_4_md_c_5_a__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.a_8';
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
        
	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_7',4.2807,'4.md.c.5.a',''); update item_types SET progression = 4.2807 where id = '4.md.c.5.a_7';
*/
var i_4_md_c_5_a__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.5.a_7';
	this.mChopWhiteSpace = false;

	var f = new Fraction(1,360);

        this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle.');
        this.setAnswer('' + 'one degree angle',0);
        this.setAnswer('' + '1 degree angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 45;
        var angleB = 46;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_6',4.2806,'4.md.c.5.a',''); update item_types SET progression = 4.2806 where id = '4.md.c.5.a_6';
*/
var i_4_md_c_5_a__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.c.5.a_6';

        this.setQuestion('The unit of measure for angles.');
        this.setAnswer('' + 'degree',0);
       	this.setAnswer('' + 'a degree',1);
        this.setAnswer('' + 'degrees',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_5',4.2805,'4.md.c.5.a',''); update item_types SET progression = 4.2805 where id = '4.md.c.5.a_5';
*/
var i_4_md_c_5_a__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.c.5.a_5';

        this.setQuestion('A point where two or more straight lines meet. A corner.');
        this.setAnswer('' + 'vertex',0);
        this.setAnswer('' + 'a vertex',1);
},
createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 0;
        while ( parseInt(angleB - angleA) < 45)
        {
                angleA = Math.floor(Math.random()*360);
                angleB = Math.floor(Math.random()*360);
        }

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_4',4.2804,'4.md.c.5.a',''); update item_types SET progression = 4.2804 where id = '4.md.c.5.a_4';
*/
var i_4_md_c_5_a__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.c.5.a_4';

        this.setQuestion('The amount of turn between two straight lines that have a common end point. Represented by the white arc.');
       	this.setAnswer('' + 'angle',0);
       	this.setAnswer('' + 'an angle',1);
},

createShapes: function()
{
	this.parent();

	var angleA = 0;	
	var angleB = 0;	
	while ( parseInt(angleB - angleA) < 45)
	{ 
 		angleA = Math.floor(Math.random()*360);
 		angleB = Math.floor(Math.random()*360);
	}

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_3',4.2803,'4.md.c.5.a',''); update item_types SET progression = 4.2803 where id = '4.md.c.5.a_3';
*/
var i_4_md_c_5_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
        
	this.mType = '4.md.c.5.a_3';

        this.setQuestion('A point or value that marks the end of a ray or one of the ends of a line segment. The red circle in the picture on left.');
        this.setAnswer('' + 'endpoint',0);
	this.setAnswer('' + 'an endpoint',1);
},

createShapes: function()
{
	this.parent();

        this.mRay = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,334,this,"#000000",.5,false);
        this.addQuestionShape(this.mRay);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_2',4.2802,'4.md.c.5.a',''); update item_types SET progression = 4.2802 where id = '4.md.c.5.a_2';
*/
var i_4_md_c_5_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.c.5.a_2';

        this.setQuestion('A precise location or place on a plane. Usually represented by a dot.');
        this.setAnswer('' + 'point',0);
        this.setAnswer('' + 'a point',1);
},

createShapes: function()
{
	this.parent();
	this.mEndpoint = new Circle(12.5,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
 	this.addQuestionShape(this.mEndpoint);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.5.a_1',4.2801,'4.md.c.5.a',''); update item_types SET progression = 4.2801 where id = '4.md.c.5.a_1';
*/
var i_4_md_c_5_a__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
	
        this.mType = '4.md.c.5.a_1';

        this.setQuestion('A line with a start point but no end point. It goes to infinity.');
        this.setAnswer('' + 'ray',0);
        this.setAnswer('' + 'a ray',1);

},

createShapes: function()
{
	this.parent();
        this.mRay = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,334,this,"#000000",.5,false);
        this.addQuestionShape(this.mRay);
}
});

