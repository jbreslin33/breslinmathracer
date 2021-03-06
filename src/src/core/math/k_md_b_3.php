
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.md.b.3_2',0.1902,'k.md.b.3','');
*/
var i_k_md_b_3__2 = new Class(
{
Extends: TextItem2,
initialize: function(sheet)
{
        this.parent(sheet,700,50,375,75,100,50,425,100);
        //this.parent(sheet,300,50,175,75,100,50,425,100);
	//this.parent(sheet);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.md.b.3_2';
  	
	this.s = 19; 
	this.r = 2; 
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to sort the squares with the same color into different rectangles and put totals for each color in text box on top. Please help ' + this.ns.mNameOne + '.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);

	this.mAnswerTextBox.setSize(100,50);
	this.mAnswerTextBox2.setSize(100,50);
	this.mAnswerTextBox.setPosition (130,135);
	this.mAnswerTextBox2.setPosition(450,135);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(200,100,350,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(200,100,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r2);

	//squares	
	this.mSquareArrayOne = new Array();
	this.mSquareArrayTwo = new Array();
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
		var v = Math.floor(Math.random()*2);
		if (v == 0)
		{
			this.mSquareArrayOne.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.9,.9,.9,"#000",.3,true));
		}
		else
		{
			this.mSquareArrayTwo.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.1,.1,.1,"#000",.3,true));
		}
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArrayOne.length; i++)
	{
        	this.addQuestionShape(this.mSquareArrayOne[i]);
	}
	for (var i = 0; i < this.mSquareArrayTwo.length; i++)
	{
        	this.addQuestionShape(this.mSquareArrayTwo[i]);
	}


},

checkUserAnswer: function()
{
	this.setAnswer(this.mSquareArrayOne.length,0);
	this.setAnswer(this.mSquareArrayTwo.length,1);
	this.rectangleOneSquare = '';
	this.rectangleTwoSquare = '';
	
	//rectangle 1
	var squareOneTotal = 0;
	var squareTwoTotal = 0;
	for (var i = 0; i < this.mSquareArrayOne.length; i++)
	{
		if (this.mSquareArrayOne[i].mPosition.mX > 350 && this.mSquareArrayOne[i].mPosition.mX < 525 && this.mSquareArrayOne[i].mPosition.mY > 25 && this.mSquareArrayOne[i].mPosition.mY < 125 ) 
		{
			squareOneTotal++;	
		}
	}	
	if (squareOneTotal == this.mSquareArrayOne.length)
	{
		this.rectangleOneSquare = 'one';	
	}

       	for (var i = 0; i < this.mSquareArrayTwo.length; i++)
        {
                if (this.mSquareArrayTwo[i].mPosition.mX > 350 && this.mSquareArrayTwo[i].mPosition.mX < 525 && this.mSquareArrayTwo[i].mPosition.mY > 25 && this.mSquareArrayTwo[i].mPosition.mY < 125 )
                {
                        squareTwoTotal++;     
                }
        }      

        if (squareTwoTotal == this.mSquareArrayTwo.length)
        {
                this.rectangleOneSquare = 'two';           
        }

        //rectangle 2 
	var squareOneTotal = 0;
	var squareTwoTotal = 0;
        for (var i = 0; i < this.mSquareArrayOne.length; i++)
        {
                if (this.mSquareArrayOne[i].mPosition.mX > 25 && this.mSquareArrayOne[i].mPosition.mX < 200 && this.mSquareArrayOne[i].mPosition.mY > 25 && this.mSquareArrayOne[i].mPosition.mY < 125 )
                {
                        squareOneTotal++;
                }
        }
	if (squareOneTotal == this.mSquareArrayOne.length)
	{
		this.rectangleTwoSquare = 'one';	
	}

        for (var i = 0; i < this.mSquareArrayTwo.length; i++)
        {
                if (this.mSquareArrayTwo[i].mPosition.mX > 25 && this.mSquareArrayTwo[i].mPosition.mX < 200 && this.mSquareArrayTwo[i].mPosition.mY > 25 && this.mSquareArrayTwo[i].mPosition.mY < 125 )
                {
                        squareTwoTotal++;
                }
        }
	if (squareTwoTotal == this.mSquareArrayTwo.length)
	{
		this.rectangleTwoSquare = 'two';	
	}

	if (squareTwoTotal == this.mSquareArrayTwo.length)
        {
                this.rectangleTwoSquare = 'two';   
        }

	if (this.rectangleOneSquare == 'one' && this.rectangleTwoSquare == 'two')
	{
		if (this.mUserAnswer != this.mSquareArrayTwo.length)
		{
        		this.mSheet.setTypeWrong(this.mType);
			return false;	
		}
		if (this.mUserAnswer2 != this.mSquareArrayOne.length)
		{
        		this.mSheet.setTypeWrong(this.mType);
			return false;	
		}
        	return true;
	}

	if (this.rectangleOneSquare == 'two' && this.rectangleTwoSquare == 'one')
	{
		if (this.mUserAnswer != this.mSquareArrayOne.length)
		{
        		this.mSheet.setTypeWrong(this.mType);
			return false;	
		}
		if (this.mUserAnswer2 != this.mSquareArrayTwo.length)
		{
        		this.mSheet.setTypeWrong(this.mType);
			return false;	
		}
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
},

showCorrectAnswer: function()
{
        if (this.mCorrectAnswerLabel)
        {
                this.mCorrectAnswerLabel.setSize(500, 100);
                this.mCorrectAnswerLabel.setText('CORRECT ANSWER: Drag ' + this.getAnswer() + ' squares of one color into one rectangle and ' +  this.getAnswerTwo() + ' squares of the other color into the other rectangle. Put the totals of each in text box on top.');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.md.b.3_1',0.1901,'k.md.b.3','');
*/
var i_k_md_b_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.md.b.3_1';
  	
	this.s = 19; 
	this.r = 2; 
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to sort the squares with the same color into different rectangles. Please help ' + this.ns.mNameOne + '. Type anything in box and hit enter when finished.');

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
	this.mSquareArrayOne = new Array();
	this.mSquareArrayTwo = new Array();
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
		var v = Math.floor(Math.random()*2);
		if (v == 0)
		{
			this.mSquareArrayOne.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.9,.9,.9,"#000",.3,true));
		}
		else
		{
			this.mSquareArrayTwo.push(new Rectangle(25,25,x,y,this.mSheet.mGame,this.mRaphael,.1,.1,.1,"#000",.3,true));
		}
		y = y + 30;
	}
	for (var i = 0; i < this.mSquareArrayOne.length; i++)
	{
        	this.addQuestionShape(this.mSquareArrayOne[i]);
	}
	for (var i = 0; i < this.mSquareArrayTwo.length; i++)
	{
        	this.addQuestionShape(this.mSquareArrayTwo[i]);
	}
},

checkUserAnswer: function()
{
	this.rectangleOneSquare = '';
	this.rectangleTwoSquare = '';
	
	//rectangle 1
	var squareOneTotal = 0;
	var squareTwoTotal = 0;
	for (var i = 0; i < this.mSquareArrayOne.length; i++)
	{
		if (this.mSquareArrayOne[i].mPosition.mX > 350 && this.mSquareArrayOne[i].mPosition.mX < 525 && this.mSquareArrayOne[i].mPosition.mY > 25 && this.mSquareArrayOne[i].mPosition.mY < 125 ) 
		{
			squareOneTotal++;	
		}
	}	
	if (squareOneTotal == this.mSquareArrayOne.length)
	{
		this.rectangleOneSquare = 'one';	
	}

       	for (var i = 0; i < this.mSquareArrayTwo.length; i++)
        {
                if (this.mSquareArrayTwo[i].mPosition.mX > 350 && this.mSquareArrayTwo[i].mPosition.mX < 525 && this.mSquareArrayTwo[i].mPosition.mY > 25 && this.mSquareArrayTwo[i].mPosition.mY < 125 )
                {
                        squareTwoTotal++;     
                }
        }      

        if (squareTwoTotal == this.mSquareArrayTwo.length)
        {
                this.rectangleOneSquare = 'two';           
        }

        //rectangle 2 
	var squareOneTotal = 0;
	var squareTwoTotal = 0;
        for (var i = 0; i < this.mSquareArrayOne.length; i++)
        {
                if (this.mSquareArrayOne[i].mPosition.mX > 25 && this.mSquareArrayOne[i].mPosition.mX < 200 && this.mSquareArrayOne[i].mPosition.mY > 25 && this.mSquareArrayOne[i].mPosition.mY < 125 )
                {
                        squareOneTotal++;
                }
        }
	if (squareOneTotal == this.mSquareArrayOne.length)
	{
		this.rectangleTwoSquare = 'one';	
	}

        for (var i = 0; i < this.mSquareArrayTwo.length; i++)
        {
                if (this.mSquareArrayTwo[i].mPosition.mX > 25 && this.mSquareArrayTwo[i].mPosition.mX < 200 && this.mSquareArrayTwo[i].mPosition.mY > 25 && this.mSquareArrayTwo[i].mPosition.mY < 125 )
                {
                        squareTwoTotal++;
                }
        }
	if (squareTwoTotal == this.mSquareArrayTwo.length)
	{
		this.rectangleTwoSquare = 'two';	
	}

	if (squareTwoTotal == this.mSquareArrayTwo.length)
        {
                this.rectangleTwoSquare = 'two';   
        }

	if (this.rectangleTwoSquare == 'two' && this.rectangleOneSquare == 'one')
	{
        	return true;
	}
	else if (this.rectangleTwoSquare == 'one' && this.rectangleOneSquare == 'two')
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
