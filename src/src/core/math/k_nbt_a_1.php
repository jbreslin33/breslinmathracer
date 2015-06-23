
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_19',0.1619,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__19 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_19';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 9;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 19 by putting 10 squares in the rectangle at left and 9 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_18',0.1618,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__18 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_18';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 8;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 18 by putting 10 squares in the rectangle at left and 8 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_17',0.1617,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__17 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_17';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 7;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 17 by putting 10 squares in the rectangle at left and 7 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_16',0.1616,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__16 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_16';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 6;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 16 by putting 10 squares in the rectangle at left and 6 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_15',0.1615,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__15 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_15';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 5;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 15 by putting 10 squares in the rectangle at left and 5 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_14',0.1614,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__14 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_14';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 4;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 14 by putting 10 squares in the rectangle at left and 4 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_13',0.1613,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__13 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_13';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 3;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 13 by putting 10 squares in the rectangle at left and 3 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_12',0.1612,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__12 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_12';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 2;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 12 by putting 10 squares in the rectangle at left and 2 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_11',0.1611,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/
var i_k_nbt_a_1__11 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.nbt.a.1_11';
  	
	this.s = 19; 
	this.r = 2; 
	this.a = 1;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 11 by putting 10 squares in the rectangle at left and 1 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArray = new Array();
	var x = 230;	
	var y = 10;	
	for (var i = 0; i < this.s; i++)
	{
		if (i == 8)
		{
			x = x + 30;	
			y = 10;
		}  
		if (i == 16)
		{
			x = x + 30;	
			y = 10;
		}  
		this.mSquareArray.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true));
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
        	this.addQuestionShape(this.mSquareArray[i]);
	}
},

checkUserAnswer: function()
{
	this.gotCount = 0;
	//rectangle 1
	var rectangleOneTotal = 0;
	for (var i = 0; i < this.mSquareArray.length; i++)
	{
		if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 ) 
		{
			rectangleOneTotal++;	
		}
	}	
	if (rectangleOneTotal == this.a)
	{
		this.gotCount++;	
	}

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.b)
	{
		this.gotCount++;	
	}

	if (this.gotCount == this.r)
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
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_21',0.1621,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__21 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_21';
		this.mChopWhiteSpace = false;
             
		this.a = 0;
		this.b = 0;
		this.c = 1000;

		this.x = 0;	 
		this.y = 0;	 

		this.xa = Math.floor((Math.random()*10)+1);
		this.ya = Math.floor((Math.random()*10)+1);
		this.xb = Math.floor((Math.random()*10)+1);
		this.yb = Math.floor((Math.random()*10)+1);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5 || this.x > 10 || this.a < 0 || this.b < 0 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
		{
			//variables
                	this.x = Math.floor((Math.random()*9)+1);
                	this.y = 10; 
			this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;  
	
			//wrong answers 
			this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;  
			this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;  
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_9',0.1609,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__9 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_9';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 9;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_8',0.1608,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__8 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_8';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 8;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_7',0.1607,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__7 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_7';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 7;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_6',0.1606,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__6 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_6';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 6;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_5',0.1605,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_5';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 5;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

                        this.xa = Math.floor((Math.random()*10)+1);
                        this.ya = Math.floor((Math.random()*10)+1);
                        this.xb = Math.floor((Math.random()*10)+1);
                        this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_4',0.1604,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_4';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 4;
                this.y = 0;

                this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
                
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_3',0.1603,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_3';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 3;
                this.y = 0;
        
		this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;

			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_2',0.1602,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_2';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 2;
                this.y = 0;

        	this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
			
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.nbt.a.1_1',0.1601,'k.nbt.a.1','Pick out what equation containing 10 is equal to number.');
*/

var i_k_nbt_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.nbt.a.1_1';
                this.mChopWhiteSpace = false;

                this.a = 0;
                this.b = 0;
                this.c = 1000;

                this.x = 1;
                this.y = 0;

        	this.xa = 0;
                this.ya = 0;
                this.xb = 0;
                this.yb = 0;


                while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.x > 10 || parseInt(this.xa + this.ya) == parseInt(this.x + this.y) || parseInt(this.xb + this.yb) == parseInt(this.x + this.y))
                {
                        //variables
                        //this.x = Math.floor((Math.random()*9)+1);
                        this.y = 10;
                        this.c = parseInt(this.x + this.y) + ' = ' + this.y + ' + ' + this.x;
                
			this.xa = Math.floor((Math.random()*10)+1);
                	this.ya = Math.floor((Math.random()*10)+1);
                	this.xb = Math.floor((Math.random()*10)+1);
                	this.yb = Math.floor((Math.random()*10)+1);

                        //wrong answers
                        this.a = parseInt(this.x + this.y) + ' = ' + this.xa + ' + ' + this.ya;
                        this.b = parseInt(this.x + this.y) + ' = ' + this.xb + ' + ' + this.yb;
                }

                this.setQuestion('What is ' + parseInt(this.x + this.y) + ' equal to?');
                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

