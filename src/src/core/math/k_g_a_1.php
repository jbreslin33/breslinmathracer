
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.1_5',0.2005,'k.g.a.1','');
*/
var i_k_g_a_1__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.1_5';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square next to the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,100,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	var xDiff = parseInt(this.r1.mPosition.mX - this.r2.mPosition.mX);
	var xAbs = Math.abs(xDiff);

	var yDiff = parseInt(this.r1.mPosition.mY - this.r2.mPosition.mY);
	var yAbs = Math.abs(yDiff);

	if (yAbs > 25 || xAbs > 25)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.1_4',0.2004,'k.g.a.1','');
*/
var i_k_g_a_1__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.1_4';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square in front of the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,100,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	var xDiff = parseInt(this.r1.mPosition.mX - this.r2.mPosition.mX);
	var xAbs = Math.abs(xDiff);

	var yDiff = parseInt(this.r1.mPosition.mY - this.r2.mPosition.mY);
	var yAbs = Math.abs(yDiff);

	if (yAbs < 25 && xAbs < 25)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.1_3',0.2003,'k.g.a.1','');
*/
var i_k_g_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.1_3';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square beside the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,100,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	var xDiff = parseInt(this.r1.mPosition.mX - this.r2.mPosition.mX);
	var xAbs = Math.abs(xDiff);

	var yDiff = parseInt(this.r1.mPosition.mY - this.r2.mPosition.mY);
	var yAbs = Math.abs(yDiff);

	if (yAbs < 25 && xAbs > 50)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.1_2',0.2002,'k.g.a.1','');
*/
var i_k_g_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.1_2';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square below the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,this.x1,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,this.x2,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	if (this.r1.mPosition.mY < this.r2.mPosition.mY)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.1_1',0.2001,'k.g.a.1','');
*/
var i_k_g_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.1_1';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square above the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,this.x1,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,this.x2,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	if (this.r1.mPosition.mY > this.r2.mPosition.mY)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});


