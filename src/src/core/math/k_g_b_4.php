
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_9',0.2409,'k.g.b.4','');
*/
var i_k_g_b_4__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_9';
 	this.mAnswerTextBox.setSize(200,50);

        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'three-dimensional',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.addQuestionShape(new Shape    (50,50,100,250,this.mSheet.mGame,"/images/shapes/sphere.png","",""));
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_8',0.2408,'k.g.b.4','');
*/
var i_k_g_b_4__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_8';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'three-dimensional',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.addQuestionShape(new Shape    (50,50,100,250,this.mSheet.mGame,"/images/shapes/cylinder.png","",""));
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_7',0.2407,'k.g.b.4','');
*/
var i_k_g_b_4__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_7';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'three-dimensional',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.addQuestionShape(new Shape    (50,50,100,250,this.mSheet.mGame,"/images/shapes/cone.png","",""));
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_6',0.2406,'k.g.b.4','');
*/
var i_k_g_b_4__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.rx = 10;
        this.ry = 120;
        this.mRaphael = Raphael(this.rx,this.ry,400,600);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_6';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'three-dimensional',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	// position of rubix cube
	var x = 35;
	var y = 90;

	// dimensions of a single cube
	var w1 = Math.floor(Math.random()*4)+1;
	var h1 = Math.floor(Math.random()*4)+1;
	var d1 = Math.floor(Math.random()*4)+1;

	var volume = w1*h1*d1; //Math.floor(Math.random()*3+1);

	w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	this.mCube = new Cube(this,this.mSheet.mGame,this.mRaphael,this.rx,this.ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,'feet');
        this.addQuestionShape(this.mCube);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_5',0.2405,'k.g.b.4','');
*/
var i_k_g_b_4__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_5';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'lying in a plane',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.mHexagon = new Hexagon (this.mSheet.mGame,this.mRaphael,140, 90, 125,125, 140,160, 185,160, 200,125, 185,90,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(this.mHexagon);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_4',0.2404,'k.g.b.4','');
*/
var i_k_g_b_4__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_4';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'lying in a plane',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.mRectangle = new Rectangle(200,100,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.mRectangle);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_3',0.2403,'k.g.b.4','');
*/
var i_k_g_b_4__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_3';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'lying in a plane',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.mTriangle = new Triangle(20,200,100,100,180,200,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(this.mTriangle);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_2',0.2402,'k.g.b.4','');
*/
var i_k_g_b_4__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_2';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'lying in a plane',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.mCircle = new Circle(50,100,100,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.mCircle);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.b.4_1',0.2401,'k.g.b.4','');
*/
var i_k_g_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.b.4_1';
 	this.mAnswerTextBox.setSize(200,50);
  	
        this.setQuestion('' + 'Is this lying in a plane or three-dimensional?');
	this.setAnswer('' + 'lying in a plane',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.mSquare = new Rectangle(100,100,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.mSquare);
}
});


