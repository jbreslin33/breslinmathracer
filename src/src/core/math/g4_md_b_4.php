
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_10',4.2710,'4.md.b.4','');
*/
var i_4_md_b_4__10 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.mRaphael = Raphael(20,20,380,380);
       	this.ns = new NameSampler();
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_10';

        this.setQuestion('What is the name of this angle?');
        this.setAnswer('' + 'abc',0);
        this.setAnswer('' + 'cba',1);
},

createShapes: function()
{
        this.parent();
        //var angletTextA = Math.floor(Math.random()*360);
	var textOne = this.ns.mUpperLetterOne;
	var textTwo = this.ns.mUpperLetterTwo;
	var textThree = this.ns.mUpperLetterThree;

        var angleOne = 45;
        var angleThree = 80;

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
	this.mTextOne = new RaphaelText(parseInt(x + lengthOne + 15),y,this,0,0,1,"#000000",.5,false,"" + textOne);
	this.addQuestionShape(this.mTextOne);
        this.mTextOne.mPolygon.transform(rotateAmountOne);
	
	this.mTextTwo = new RaphaelText(parseInt(x - 15),y,this,0,0,1,"#000000",.5,false,"" + textTwo);
	this.addQuestionShape(this.mTextTwo);
        this.mTextTwo.mPolygon.transform(rotateAmountTwo);
	
	this.mTextThree = new RaphaelText(parseInt(x + lengthThree + 15),y,this,0,0,1,"#000000",.5,false,"" + textThree);
	this.addQuestionShape(this.mTextThree);
        this.mTextThree.mPolygon.transform(rotateAmountThree);
	
	//angle arc
        this.mAngleArc = new AngleArc(x,y,50,parseFloat(angleThree),parseFloat(angleOne),this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_9',4.2709,'4.md.b.4','');
*/
var i_4_md_b_4__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_9';
	this.mChopWhiteSpace = false;

        var f = new Fraction(180,360,false);

       	this.setQuestion('An angle that turns through ' + f.getString() + ' of a circle. It measures 180&deg.');
        this.setAnswer('' + 'straight angle',0);
        this.setAnswer('' + 'a straight angle',1);
},

createShapes: function()
{
        this.parent();

        var angleA = 45;
        var angleB = 80;
	
        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_8',4.2708,'4.md.b.4','');
*/
var i_4_md_b_4__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_8';
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
        
	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_7',4.2707,'4.md.b.4','');
*/
var i_4_md_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.b.4_7';
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
        
	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_6',4.2706,'4.md.b.4','');
*/
var i_4_md_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_6';

        this.setQuestion('The unit of measure for angles.');
        this.setAnswer('' + 'degree',0);
       	this.setAnswer('' + 'a degree',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_5',4.2705,'4.md.b.4','');
*/
var i_4_md_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_5';

        this.setQuestion('A point where two or more straight lines meet. A corner.');
        this.setAnswer('' + 'vertex',0);
        this.setAnswer('' + 'a vertex',1);
},
createShapes: function()
{
        this.parent();

        var angleA = 0;
        var angleB = 0;
        while ( parseInt(Math.abs(angleA - angleB)) < 45)
        {
                angleA = Math.floor(Math.random()*360);
                angleB = Math.floor(Math.random()*360);
        }

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_4',4.2704,'4.md.b.4','');
*/
var i_4_md_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_4';

        this.setQuestion('The amount of turn between two straight lines that have a common end point. Represented by the white arc.');
       	this.setAnswer('' + 'angle',0);
       	this.setAnswer('' + 'an angle',1);
},

createShapes: function()
{
	this.parent();

	var angleA = 0;	
	var angleB = 0;	
	while ( parseInt(Math.abs(angleA - angleB)) < 45)
	{ 
 		angleA = Math.floor(Math.random()*360);
 		angleB = Math.floor(Math.random()*360);
	}

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);
        
	this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mAngleArc = new AngleArc(this,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_3',4.2703,'4.md.b.4','');
*/
var i_4_md_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
        
	this.mType = '4.md.b.4_3';

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
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_2',4.2702,'4.md.b.4','');
*/
var i_4_md_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;

        this.mType = '4.md.b.4_2';

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
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_1',4.2701,'4.md.b.4','');
*/
var i_4_md_b_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
	
        this.mType = '4.md.b.4_1';

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

