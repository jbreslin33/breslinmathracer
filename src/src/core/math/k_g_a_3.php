
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_9',0.2209,'k.g.a.3','');
*/
var i_k_g_a_3__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_9';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'sphere',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_8',0.2208,'k.g.a.3','');
*/
var i_k_g_a_3__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_8';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'cylinder',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_7',0.2207,'k.g.a.3','');
*/
var i_k_g_a_3__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_7';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'cone',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_6',0.2206,'k.g.a.3','');
*/
var i_k_g_a_3__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.rx = 10;
        this.ry = 120;
        this.mRaphael = Raphael(this.rx,this.ry,400,600);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_6';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'cube',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_5',0.2205,'k.g.a.3','');
*/
var i_k_g_a_3__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_5';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'hexagon',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_4',0.2204,'k.g.a.3','');
*/
var i_k_g_a_3__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_4';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'rectangle',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_3',0.2203,'k.g.a.3','');
*/
var i_k_g_a_3__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_3';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'triangle',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_2',0.2202,'k.g.a.3','');
*/
var i_k_g_a_3__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_2';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'circle',0);

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
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.3_1',0.2201,'k.g.a.3','');
*/
var i_k_g_a_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.3_1';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'square',0);

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


