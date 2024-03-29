
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_8',3.0308,'3.oa.a.3','Terra Nova 25' );
*/

var i_3_oa_a_3__8 = new Class(
{
Extends: FourButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '3.oa.a.3_8';

        this.nm = new NameMachine();
        this.ns = new NameSampler();
 	this.mChopWhiteSpace = false;

        var r = Math.floor(Math.random()*2);

	var x = 0; 
        var y = 0;
        var z = 0;

	while (y == z)
	{
        	y = Math.floor(Math.random()*11)+2;
        	z = Math.floor(Math.random()*11)+2;
        	x = parseInt(y * z);
	}

        var a = 'a';
        var b = 'b';
        var c = 'c';
        var d = 'd';

	//a = '' + 'n &times ' + y + ' = ' + x;  
	a = '' + 'n X ' + y + ' = ' + x;  
	b = '' + y + ' + n = ' + x;  
	c = '' + x + ' - n = ' + y;  
	d = '' + 'n &divide ' + y + ' = ' + x;  

        if (r == 0)
        {
                this.setQuestion('' + this.ns.mNameOne + ' has ' + x + ' ' + this.ns.mVegetableOne + ' to make gift baskets. Each basket can hold ' + y + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameOne + ' used the equation ' + x + ' &divide ' + y + ' = n to find the number of baskets ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will need to fill with ' + this.ns.mVegetableOne + '. Which equation can ' + this.ns.mNameOne + ' use to check ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' answer?');
        }
        if (r == 1)
        {
                this.setQuestion('' + this.ns.mNameOne + ' has ' + x + ' ' + this.ns.mFruitOne + ' to make gift baskets. Each basket can hold ' + y + ' ' + this.ns.mFruitOne + '. ' + this.ns.mNameOne + ' used the equation ' + x + ' &divide ' + y + ' = n to find the number of baskets ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will need to fill with ' + this.ns.mFruitOne + '. Which equation can ' + this.ns.mNameOne + ' use to check ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' answer?');
        }

        this.setAnswer('' + a,0);
        this.mButtonA.setAnswer('' + a);

        this.mButtonB.setAnswer('' + b);
        this.mButtonC.setAnswer('' + c);
        this.mButtonD.setAnswer('' + d);

        this.shuffle(10);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_7',3.0307,'3.oa.a.3','Terra Nova 24' );
*/

var i_3_oa_a_3__7 = new Class(
{
Extends: FourButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '3.oa.a.3_7';

        this.nm = new NameMachine();
        this.ns = new NameSampler();

        var r = Math.floor(Math.random()*2);

        var m = Math.floor(Math.random()*30)+20;
        m = m * 2;

        var n = Math.floor(Math.random()*13)+7;
        var x = parseInt(m + n);
        var y = parseInt(m - n);

        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;

        while (a == b || a == c || a == d || b == c || b == d || c == d || a < 1 || b < 1 || c < 1 || d < 1)
        {
                a = n;

                var rb = Math.floor(Math.random()*2);
                var nb = Math.floor(Math.random()*9)+1;
                if (rb == 0)
                {
                        b = parseInt(a + nb);
                }
                else
                {
                        b = parseInt(a - nb);
                }

                var rc = Math.floor(Math.random()*2);
                var nc = Math.floor(Math.random()*9)+1;
                if (rc == 0)
                {
                        c = parseInt(a + nc);
                }
                else
                {
                        c = parseInt(a - nc);
                }

                var rd = Math.floor(Math.random()*2);
                var nd = Math.floor(Math.random()*9)+1;
                if (rd == 0)
                {
                        d = parseInt(a + nd);
                }
                else
                {
                        d = parseInt(a - nd);
                }
        }

        if (r == 0)
        {
                this.setQuestion('' + this.ns.mNameOne + ' puts ' + x + ' ' + this.ns.mVegetableOne + ' in a basket. ' + this.ns.mNameTwo + ' put ' + y + ' ' + this.ns.mVegetableOne + ' in another basket. How many ' + this.ns.mVegetableOne + ' would have to be moved from one basket to another so there would be the same amount of ' + this.ns.mVegetableOne + ' in each basket?');
        }
        if (r == 1)
        {
                this.setQuestion('' + this.ns.mNameOne + ' puts ' + x + ' ' + this.ns.mFruitOne + ' in a basket. ' + this.ns.mNameTwo + ' put ' + y + ' ' + this.ns.mFruitOne + ' in another basket. How many ' + this.ns.mFruitOne + ' would have to be moved from one basket to another so there would be the same amount of ' + this.ns.mFruitOne + ' in each basket?');
        }

        this.setAnswer('' + a,0);
        this.mButtonA.setAnswer('' + a);

        this.mButtonB.setAnswer('' + b);
        this.mButtonC.setAnswer('' + c);
        this.mButtonD.setAnswer('' + d);

        this.shuffle(10);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_6',3.0306,'3.oa.a.3','Terra Nova 2');
*/

var i_3_oa_a_3__6 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '3.oa.a.3_6';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.a = Math.floor(Math.random()*3)+3;
                this.b = Math.floor(Math.random()*4)+14;
		this.c = parseInt(this.a + this.b);

                this.setQuestion('' + this.ns.mNameOne + ' is buying ' + this.a + ' cases of ' + this.ns.mDrinkOne + '. Each case contains ' + this.b +  ' ' + this.ns.mDrinkOne + ' boxes. How many boxes of ' + this.ns.mDrinkOne + ' is ' + this.ns.mNameOne + ' buying in all?');

                this.r = Math.floor(Math.random()*4);
		
		this.answer = '';	
		if (this.r == 0)
		{
                	this.answer = '' + 'None of these';
		}
		else	
		{
			this.answer = parseInt(this.a * this.b);
		}
		this.setAnswer('' + this.answer,0);

                this.mButtonA.setAnswer('' + this.answer);
		if (this.r == 0)
		{
                	this.mButtonB.setAnswer('' + parseInt(this.a + this.b));
		}
		else
		{
                	this.mButtonB.setAnswer('' + 'None of these');
		}
                this.mButtonC.setAnswer('' + parseInt(this.c / this.b) );
                this.mButtonD.setAnswer('' + parseInt( (this.a - 1)  * this.b) );
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_5',3.0305,'3.oa.a.3','' );
*/
var i_3_oa_a_3__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '3.oa.a.3_5';
  	
	this.s = 7; 
	this.r = 3; 
	this.a = 0;

	while( this.s % this.r != 0)
	{
		this.s = Math.floor( (Math.random()*21)+4);
		this.r = Math.floor( (Math.random()*3)+2);
		this.a = parseInt(this.s / this.r);
		
	} 
	
        this.setQuestion('' + this.ns.mNameOne + ' has ' + this.s + ' squares. Divide them evenly into ' + this.r + ' rectangles. You can drag squares with mouse. Type anything in textbox then enter when finised.');

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

	this.r3 = new Rectangle(200,100,25,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r3);
	
	this.r4 = new Rectangle(200,100,350,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r4);

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
	APPLICATION.log('rectangleOneTotal:' + rectangleOneTotal);

        //rectangle 2 
        var rectangleTwoTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 25 && this.mSquareArray[i].mPosition.mY < 125 )
                {
                        rectangleTwoTotal++;
                }
        }
	if (rectangleTwoTotal == this.a)
	{
		this.gotCount++;	
	}
        APPLICATION.log('rectangleTwoTotal:' + rectangleTwoTotal);

        //rectangle 3 
        var rectangleThreeTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 25 && this.mSquareArray[i].mPosition.mX < 200 && this.mSquareArray[i].mPosition.mY > 150 && this.mSquareArray[i].mPosition.mY < 250 )
                {
                        rectangleThreeTotal++;
                }
        }
	if (rectangleThreeTotal == this.a)
	{
		this.gotCount++;	
	}
        APPLICATION.log('rectangleThreeTotal:' + rectangleThreeTotal);

        //rectangle 4 
        var rectangleFourTotal = 0;
        for (var i = 0; i < this.mSquareArray.length; i++)
        {
                if (this.mSquareArray[i].mPosition.mX > 350 && this.mSquareArray[i].mPosition.mX < 525 && this.mSquareArray[i].mPosition.mY > 150 && this.mSquareArray[i].mPosition.mY < 250 )
                {
                        rectangleFourTotal++;
                }
        }
	if (rectangleFourTotal == this.a)
	{
		this.gotCount++;	
	}
        APPLICATION.log('rectangleFourTotal:' + rectangleFourTotal);

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
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_4',3.0304,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_4';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

		this.setQuestion(this.ns.mNameOne + ' had a garden. In the garden ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' had ' + this.a + ' '  + this.ns.mVegetableOne + ' which represents ' + this.b + ' times the amount of ' + this.ns.mVegetableTwo +  ' in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' garden. Write an expression that can be used to solve how many ' + this.ns.mVegetableTwo +  ' are in the garden. ' + this.ns.mNameMachine.getOperationInstructionEquation())     
                this.setAnswer('' + this.a + '/' + this.b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_3',3.0303,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_3';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

                this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' minutes a day. ' + this.ns.mNameTwo + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' times less minutes a day. Write an expression that can be used to solve how many minutes ' + this.ns.mNameTwo + ' played a day. ' + this.ns.mNameMachine.getOperationInstructionEquation());
		
                this.setAnswer('' + this.a + '/' + this.b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_2',3.0302,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);
	
		this.x = 0;		
		this.y = 0;		
		while(this.x == this.y)
		{
                	this.x = Math.floor(Math.random()*98)+2;
                	this.y = Math.floor(Math.random()*98)+2;
		}

                this.setQuestion('At ' + this.ns.mSchoolOne + ' room ' + this.x + ' ate ' + this.a + ' ' + this.ns.mFruitOne + '. Room '  + this.x + ' ate ' + this.b + ' times as many ' + this.ns.mFruitOne + ' as room ' + this.y + '. Write an expression that can be used to solve how many ' + this.ns.mFruitOne + ' room ' + this.y + ' ate. ' + this.ns.mNameMachine.getOperationInstructionEquation());

                this.setAnswer('' + this.a + '/' + this.b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_1',3.0301,'3.oa.a.3','Word problem. Multiplication. Factors between 1-10.' );
*/

var i_3_oa_a_3__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);
		this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThing       = this.mNameMachine.getThing();
                this.mOwned       = this.mNameMachine.getOwned();

               	//variables
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

	 	
                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write an expression that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. ' + this.mNameMachine.getOperationInstructionEquation()); 

                this.setAnswer('' + this.a + '*' + this.b,0);
                this.setAnswer('' + this.b + '*' + this.a,1);
                this.setAnswer('' + this.a + 'x' + this.b,2);
                this.setAnswer('' + this.b + 'x' + this.a,3);
        }
});
