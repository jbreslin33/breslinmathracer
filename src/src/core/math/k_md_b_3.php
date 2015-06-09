
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
	this.a = 9;
	this.b = 10;
	
        this.setQuestion('' + this.ns.mNameOne + ' wants to make 19 by putting 10 squares in the rectangle at left and 1 inside the rectangle on the right. Help ' + this.ns.mNameOne + '.');

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
