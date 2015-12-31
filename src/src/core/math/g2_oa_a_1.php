
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_25',2.0225,'2.oa.a.1','Terra Nova 20' );
*/

var i_2_oa_a_1__25 = new Class(
{
Extends: FourButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '2.oa.a.1_25';

        // graph coords
        var startX = 10;
        var endX = 300;
        var startY = 10;
        var endY = 280;
        var width = endX - startX;
        var height = endY - startY;
        var range = [0,10];

        var rX1 = 10;
        var rY1 = 50;
        var rX2 = 350;
        var rY2 = 300;

        this.raphael = Raphael(rX1, rY1, rX2, rY2);

        this.raphaelSizeX = rX2;
        this.raphaelSizeY = rY2;

        this.nm = new NameMachine();
        this.ns = new NameSampler();

        var r = Math.floor(Math.random()*3);
        var l = Math.floor(Math.random()*3)+1;

	var a = 0;
	var b = 0;
	var c = 0;
	var d = 0;
	var e = 0;
	var f = 0;
	var g = 0;
	var h = 0;

	var rx = 0;
	var ry = 0;
	var x = 0;
	var y = 0;
	
	while (e < 30 || e == f || e == g || e == h || f == g || f == h || g == h)
	{
       		a = Math.floor(Math.random()*130)+20;
       		b = Math.floor(Math.random()*130)+20;
       		c = Math.floor(Math.random()*130)+20;
       		d = Math.floor(Math.random()*130)+20;
	
        	rx = Math.floor(Math.random()*4);
        	ry = Math.floor(Math.random()*4);

		if (rx == 0)
		{
			x = a;				
		}
		if (rx == 1)
		{
			x = b;				
		}
		if (rx == 2)
		{
			x = c;				
		}
		if (rx == 3)
		{
			x = d;				
		}
	
		if (ry == 0)
		{
			y = a;				
		}
		if (ry == 1)
		{
			y = b;				
		}
		if (ry == 2)
		{
			y = c;				
		}
		if (ry == 3)
		{
			y = d;				
		}

		e = parseInt(x - y);
       		f = Math.floor(Math.random()*30)+10;
       		g = Math.floor(Math.random()*40)+20;
       		h = Math.floor(Math.random()*50)+30;
	}

        var answer = '' + e;

        // create ratioTable[rows][cols] to pass in to Table
        var ratioTable = [['type of things','number of things'],['type of vegetable','number of vegetables'],['type of fruit','number of fruit']];

        var head1 = ratioTable[r][0];
        var head2 = ratioTable[r][1];

        var tableData   = [[head1,head2],[1,''+a],[2,''+b],[3,''+c],[4,''+d]];
	if (r == 0)
	{
		tableData[1][0] = '' + this.ns.mThingOne;
		tableData[2][0] = '' + this.ns.mThingTwo;
		tableData[3][0] = '' + this.ns.mThingThree;
		tableData[4][0] = '' + this.ns.mThingFour;
	}
	if (r == 1)
	{
		tableData[1][0] = '' + this.ns.mVegetableOne;
		tableData[2][0] = '' + this.ns.mVegetableTwo;
		tableData[3][0] = '' + this.ns.mVegetableThree;
		tableData[4][0] = '' + this.ns.mVegetableFour;
	}
	if (r == 2)
	{
		tableData[1][0] = '' + this.ns.mFruitOne;
		tableData[2][0] = '' + this.ns.mFruitTwo;
		tableData[3][0] = '' + this.ns.mFruitThree;
		tableData[4][0] = '' + this.ns.mFruitFour;
	}

        // create Table object
        var table = new Table (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

        if (r == 0)
        {
                this.setQuestion('' + 'The chart represents the amount of things that ' + this.ns.mNameOne + ' has. How many more ' + tableData[parseInt(rx+1)][0] + ' does ' + this.ns.mNameOne + ' have than ' + tableData[parseInt(ry+1)][0] + '?');
        }
        if (r == 1)
        {
                this.setQuestion('' + 'The chart represents the amount of different vegetables that ' + this.ns.mNameOne + ' plants each year. How many more ' + tableData[parseInt(rx+1)][0] + ' does ' + this.ns.mNameOne + ' plant than ' + tableData[parseInt(ry+1)][0] + '?');
        }
        if (r == 2)
        {
                this.setQuestion('' + 'The chart represents the amount of different fruits that ' + this.ns.mNameOne + ' plants each year. How many more ' + tableData[parseInt(rx+1)][0] + ' does ' + this.ns.mNameOne + ' plant than ' + tableData[parseInt(ry+1)][0] + '?');
        }

        this.setAnswer('' + answer,0);
        this.mButtonA.setAnswer('' + answer);

        this.mButtonB.setAnswer('' + f);
        this.mButtonC.setAnswer('' + g);
        this.mButtonD.setAnswer('' + h);
        
	this.shuffle(10);
  
	this.mQuestionLabel.setPosition(560,155);
	this.mQuestionLabel.setSize(350,200);
//Size( = new Shape(730,50,400,55,this.mSheet.mGame,"","","");

        this.mButtonA.setPosition(450,250);
        this.mButtonB.setPosition(650,250);
        this.mButtonC.setPosition(450,325);
        this.mButtonD.setPosition(650,325);

}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_24',2.0224,'2.oa.a.1','Terra Nova 19' );
*/

var i_2_oa_a_1__24 = new Class(
{
Extends: FourButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '2.oa.a.1_24';

        // graph coords
        var startX = 10;
        var endX = 300;
        var startY = 10;
        var endY = 280;
        var width = endX - startX;
        var height = endY - startY;
        var range = [0,10];

        var rX1 = 10;
        var rY1 = 50;
        var rX2 = 350;
        var rY2 = 300;

        this.raphael = Raphael(rX1, rY1, rX2, rY2);

        this.raphaelSizeX = rX2;
        this.raphaelSizeY = rY2;

        this.nm = new NameMachine();
        this.ns = new NameSampler();

        var r = Math.floor(Math.random()*3);
        var l = Math.floor(Math.random()*3)+1;
        var a = Math.floor(Math.random()*30)+11;
        var b = Math.floor(Math.random()*30)+11;
        var c = Math.floor(Math.random()*30)+11;
        var d = Math.floor(Math.random()*30)+11;
	var e = parseInt(a + b + c + d);

	var f = 0;
	var g = 0;
	var h = 0;

	while (e == f || e == g || e == h || f == g || f == h || g == h)
	{
        	var fr = Math.floor(Math.random()*2);
        	var fn = Math.floor(Math.random()*10)+1;
		if (fr == 0)
		{
			f = parseInt(e - fn);
		}
		else
		{
			f = parseInt(e + fn);
		}

        	var gr = Math.floor(Math.random()*2);
        	var gn = Math.floor(Math.random()*10)+1;
		if (gr == 0)
		{
			g = parseInt(e - gn);
		}
		else
		{
			g = parseInt(e + gn);
		}
        	
		var hr = Math.floor(Math.random()*2);
        	var hn = Math.floor(Math.random()*10)+1;
		if (hr == 0)
		{
			h = parseInt(e - hn);
		}
		else
		{
			h = parseInt(e + hn);
		}
	}
        var answer = '' + e;

        // create ratioTable[rows][cols] to pass in to Table
        var ratioTable = [['type of things','number of things'],['type of vegetable','number of vegetables'],['type of fruit','number of fruit']];

        var head1 = ratioTable[r][0];
        var head2 = ratioTable[r][1];

        var tableData   = [[head1,head2],[1,''+a],[2,''+b],[3,''+c],[4,''+d]];
	if (r == 0)
	{
		tableData[1][0] = '' + this.ns.mThingOne;
		tableData[2][0] = '' + this.ns.mThingTwo;
		tableData[3][0] = '' + this.ns.mThingThree;
		tableData[4][0] = '' + this.ns.mThingFour;
	}
	if (r == 1)
	{
		tableData[1][0] = '' + this.ns.mVegetableOne;
		tableData[2][0] = '' + this.ns.mVegetableTwo;
		tableData[3][0] = '' + this.ns.mVegetableThree;
		tableData[4][0] = '' + this.ns.mVegetableFour;
	}
	if (r == 2)
	{
		tableData[1][0] = '' + this.ns.mFruitOne;
		tableData[2][0] = '' + this.ns.mFruitTwo;
		tableData[3][0] = '' + this.ns.mFruitThree;
		tableData[4][0] = '' + this.ns.mFruitFour;
	}

        // create Table object
        var table = new Table (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

        if (r == 0)
        {
                this.setQuestion('' + 'The chart represents the amount of things that ' + this.ns.mNameOne + ' has. What are the total number of things that ' + this.ns.mNameOne + ' has?');
        }
        if (r == 1)
        {
                this.setQuestion('' + 'The chart represents the amount of different vegetables that ' + this.ns.mNameOne + ' plants each year. What are the total number of vegetables that ' + this.ns.mNameOne + ' has?');
        }
        if (r == 2)
        {
                this.setQuestion('' + 'The chart represents the amount of different fruits that ' + this.ns.mNameOne + ' plants each year. What are the total number of fruits that ' + this.ns.mNameOne + ' has?');
        }

        this.setAnswer('' + answer,0);
        this.mButtonA.setAnswer('' + answer);

        this.mButtonB.setAnswer('' + f);
        this.mButtonC.setAnswer('' + g);
        this.mButtonD.setAnswer('' + h);
        
	this.shuffle(10);
  
	this.mQuestionLabel.setPosition(560,155);
	this.mQuestionLabel.setSize(350,200);
//Size( = new Shape(730,50,400,55,this.mSheet.mGame,"","","");

        this.mButtonA.setPosition(450,250);
        this.mButtonB.setPosition(650,250);
        this.mButtonC.setPosition(450,325);
        this.mButtonD.setPosition(650,325);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_23',2.0123,'2.oa.a.1','Terra Nova 11');
*/

var i_2_oa_a_1__23 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '2.oa.a.1_23';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

		this.mOne = Math.floor(Math.random()*7)+4; 
		this.mTwo = parseInt(this.mOne + 3);
		this.mDays = Math.floor(Math.random()*11)+15; 
		this.a = parseInt(this.mOne + 1) * this.mDays;

		this.ranOne = Math.floor(Math.random()*2); 
		this.ranOne = 0;
		if (this.ranOne == 0)
		{
                	this.setQuestion('' + '' + this.ns.mNameOne + ' spends ' + this.mOne + ' to ' + this.mTwo + ' minutes every school day cleaning ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' classroom for ' + this.ns.mAdultOne + '. What is the best estimate of the time in minutes ' + this.ns.mNameOne + ' spends cleaning in ' + this.mDays + ' school days?');
		}
                this.setAnswer('' + this.a,0);
                this.mButtonD.setAnswer('' + this.a);

		this.ran = Math.floor(Math.random()*4); 
		if (this.ran == 0) //make answer lowest
		{
                	this.mButtonA.setAnswer('' + parseInt(this.mDays * (this.mOne - 1)));
                	this.mButtonB.setAnswer('' + parseInt(this.mDays * (this.mOne - 2)));
                	this.mButtonC.setAnswer('' + parseInt(this.mDays * (this.mOne - 3)));
		}
		else if (this.ran == 1)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.mDays * (this.mOne - 1)));
                	this.mButtonB.setAnswer('' + parseInt(this.mDays * (this.mOne - 2)));
                	this.mButtonC.setAnswer('' + parseInt(this.mDays * (this.mTwo + 1)));
		}
		else if (this.ran == 2)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.mDays * (this.mOne - 1)));
                	this.mButtonB.setAnswer('' + parseInt(this.mDays * (this.mTwo + 2)));
                	this.mButtonC.setAnswer('' + parseInt(this.mDays * (this.mTwo + 1)));
		}
		else if (this.ran == 3)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.mDays * (this.mTwo + 1)));
                	this.mButtonB.setAnswer('' + parseInt(this.mDays * (this.mTwo + 2)));
                	this.mButtonC.setAnswer('' + parseInt(this.mDays * (this.mTwo + 3)));
		}

                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_22',2.0122,'2.oa.a.1','Terra Nova 9');
*/

var i_2_oa_a_1__22 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '2.oa.a.1_22';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.m = 0; 
		this.d = 0;
		this.a = 0;
		this.r = 10;
		this.a = 0;
		
		this.daysOne = 0;
		this.daysTwo = 0;

		while (this.r > 3)
		{
                	this.m = Math.floor(Math.random()*11)+2; //month from 2 to 12
			this.d = parseInt(this.m * 30); //days total 
			this.daysOne = Math.floor(Math.random()*11)+2; 
			this.daysTwo = parseInt(this.daysOne + 1);
			this.r = this.d % this.daysOne;
			this.a = parseInt(this.d / this.daysOne);
		}

		this.ranOne = Math.floor(Math.random()*2); 
		if (this.ranOne == 0)
		{
                	this.setQuestion('' + 'One pound of ' + this.ns.mFruitOne + ' will last ' + this.ns.mNameOne + ' ' + this.daysOne + ' to ' + this.daysTwo + ' days. About how many pounds of ' + this.ns.mFruitOne + ' will ' +  this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need so they last ' + this.m + ' months?');
		}
		if (this.ranOne = 1)
		{
                	this.setQuestion('' + 'One pound of ' + this.ns.mVegetableOne + ' will last ' + this.ns.mNameOne + ' ' + this.daysOne + ' to ' + this.daysTwo + ' days. About how many pounds of ' + this.ns.mVegetableOne + ' will ' +  this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need so they last ' + this.m + ' months?');

		}
                this.setAnswer('' + this.a,0);
	
		this.offset = parseInt(this.a / 2);
                this.mButtonD.setAnswer('' + this.a);

		this.ran = Math.floor(Math.random()*4); 
		if (this.ran == 0) //make answer lowest
		{
                	this.mButtonA.setAnswer('' + parseInt(this.a + this.offset));
			this.mButtonB.setAnswer('' + parseInt(this.a + this.offset + parseInt(this.offset / 2)));
                	this.mButtonC.setAnswer('' + parseInt(this.a + this.offset + this.offset));
		}
		else if (this.ran == 1)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.a - this.offset));
                	this.mButtonB.setAnswer('' + parseInt(this.a + this.offset));
			this.mButtonC.setAnswer('' + parseInt(this.a + this.offset + parseInt(this.offset / 2)));
		}
		else if (this.ran == 2)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.a - this.offset - parseInt(this.offset / 2)));
                	this.mButtonB.setAnswer('' + parseInt(this.a - this.offset));
                	this.mButtonC.setAnswer('' + parseInt(this.a + this.offset));
		}
		else if (this.ran == 3)
		{
                	this.mButtonA.setAnswer('' + parseInt(this.a - this.offset - parseInt(this.offset / 2)) );
                	this.mButtonB.setAnswer('' + parseInt(this.a - this.offset - parseInt(this.offset / 3)) );
                	this.mButtonC.setAnswer('' + parseInt(this.a - this.offset) );
		}

                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_21',2.0121,'2.oa.a.1','Terra Nova 1');
*/

var i_2_oa_a_1__21 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '2.oa.a.1_21';
                this.mChopWhiteSpace = false;
		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();
                
		this.a = Math.floor(Math.random()*2)+4;
		this.a = 4;
		this.d = Math.floor(Math.random()*99)+1;
		var decimalA = new Decimal('' + this.a + '.' + this.d);

                this.setQuestion('' + this.ns.mNameOne + ' bought ' + this.a + ' ' + this.ns.mPlayedActivityOne + ' tickets for $' + decimalA.getMoney() + ' each. Which of these shows how to find the total cost of the ' + this.a + ' tickets?');
                var answer = '' + '$' + decimalA.getMoney() + ' + ' + '$' + decimalA.getMoney() + ' + ' + '$' + decimalA.getMoney() + ' + ' + '$' + decimalA.getMoney();
                this.setAnswer('' + answer,0);

                this.mButtonA.setAnswer('' + this.a + ' + $' + decimalA.getMoney());
                this.mButtonB.setAnswer('' + '$' + decimalA.getMoney() + ' &divide ' + this.a);
                this.mButtonC.setAnswer('' + '$' + decimalA.getMoney() + ' - ' + this.a + ' - ' + this.a + ' - ' + this.a + ' - ' + this.a);
                this.mButtonD.setAnswer('' + answer);
                this.shuffle(10);
        }
});

var TwoStepPuttingTogether = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*20)+11;
                this.b = Math.floor(Math.random()*20)+11;
                this.c = Math.floor(Math.random()*20)+11;
                this.d = parseInt(this.a + this.b + this.c);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekOne + ', ' + this.b + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekTwo + ' and ' + this.c + ' on ' + this.ns.mDayOfWeekThree + '. How many ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell ' + this.mSum + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ', ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' and ' + this.ns.mPlayedActivityThree + ' for ' + this.c + ' ' + this.ns.mTimeIncrementSmall + '. How long did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.mSum + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + ', ' + this.b + ' ' + this.ns.mVegetableTwo + ' and ' + this.c + ' ' + this.ns.mVegetableThree + '. How many vegetables did ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' plant ' + this.mSum + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' students, ' + this.ns.mSchoolTwo + ' has ' + this.a + ' and ' + this.ns.mSchoolThree + ' has ' + this.c + ' how many students do the schools have ' + this.mSum + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + ' and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mThings + '  . How many ' + this.ns.mThings + ' do they have ' + this.mSum + '?');    	
		}

                this.setAnswer('' + this.d,0);
        }
});

var OneStepPuttingTogether = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*20)+30;
                this.b = Math.floor(Math.random()*20)+30;
                this.c = parseInt(this.a + this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekTwo + '. How many ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell ' + this.mSum + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrementSmall + '. How long did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.mSum + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. How many vegetables did he plant ' + this.mSum + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' girls and ' + this.a + ' boys. How many students does ' + this.ns.mSchoolTwo + ' have ' + this.mSum + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' do they have ' + this.mSum + '?');    	
		}
                this.setAnswer('' + this.c,0);
        }
});

var OneStepTakingFrom = new Class(
{
Extends: TextItem,
        initialize: function(sheet,left)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mLeft = left; 

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.ns.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' had ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,1,0) + ' then sold ' + this.b + ' ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.mLeft + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' of ' + this.ns.mPlayedActivityOne + '. If they already played for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' than how many ' + this.ns.mTimeIncrementSmall + ' do they have ' + this.mLeft + ' to play?');    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' ate ' + this.b + '. How many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.mLeft + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.b + ' students left ' + this.ns.mSchoolOne + ' and started going to ' + this.ns.mSchoolTwo + '. If ' + this.ns.mSchoolOne + ' had ' + this.a + ' students to begin with than how many students does ' + this.ns.mSchoolOne + ' have ' + this.mLeft + '?'  );    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' gave '  + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.mLeft + '?');    	
		}

                this.setAnswer('' + this.c,0);
        }
});

var TwoStepTakingFromAndAddingTo = new Class(
{
Extends: TextItem,
        initialize: function(sheet,left)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

		this.mLeft = left;

               	//variables
		this.a = -1;
		this.b = -1;
		this.c = -1;
		this.d = -1;
		this.v = -1;

		while (this.d < 0 || this.v < 0) 
		{
                	this.a = Math.floor(Math.random()*50)+25;
                	this.b = Math.floor(Math.random()*28)+12;
                	this.c = Math.floor(Math.random()*28)+12;
                	this.d = parseInt(this.a - this.b + this.c);
			this.v = parseInt(this.a - this.b);
		}
	
                random = Math.floor(Math.random()*5)+1;
		random = 3;
		
		if (random == 5)
		{
			this.setQuestion('For Breakfast the ' + this.ns.mAnimalOne + ' ate '  + this.b + ' ' + this.ns.mFruitOne + '. After breakfast ' + this.ns.mAnimalTwo + ' gave ' + this.c + ' ' + this.ns.mFruitOne + ' to the ' + this.ns.mAnimalOne + '. If they started the day with ' + this.a + ' ' + this.ns.mFruitOne + ' then how many ' + this.ns.mFruitOne + ' do the ' + this.ns.mAnimalOne + ' have ' + this.ns.mLeft + ' for dinner?');        
		}
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' of ' + this.ns.mPlayedActivityOne + '. They played for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' on ' + this.ns.mDayOfWeekOne + ' . Then on ' + this.ns.mDayOfWeekTwo + ' because they were good they gained an extra ' + this.c + ' ' + this.ns.mTimeIncrementSmall + '. How many ' + this.ns.mTimeIncrementSmall + ' do they have ' + this.ns.mLeft + ' to play?');    	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a farm with ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.b + ' of the ' + this.ns.mVegetableOne + ' were eaten by ' + this.ns.mAnimalOne + '. ' + this.ns.mAdultOne + ' grew ' + this.c + ' more ' + this.ns.mVegetableOne + '. How many ' + this.ns.mVegetableOne + ' will '  +  this.ns.mAdultOne + ' have ' + this.ns.mLeft + '?');  	
		}
		if (random == 2)
		{
                	this.d = parseInt(this.a - this.b + this.c);
			this.setQuestion(this.ns.mSchoolOne + ' had ' + this.a + ' students. ' + this.b + ' students leave ' + this.ns.mSchoolOne + '  and go to ' + this.ns.mSchoolTwo + '. ' + this.c + ' students leave ' + this.ns.mSchoolThree + ' and come to ' +  this.ns.mSchoolOne + '. How many students will ' + this.ns.mSchoolOne + ' have ' + this.ns.mLeft + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' gave ' + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + ' and ' + this.ns.mNameThree + ' ' + this.c + ' ' + this.ns.mThings + '. Before he gave away ' + this.ns.mThings + ' ' + this.ns.mNameOne + ' had ' + this.a + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.ns.mLeft + '?');    	
		}
                this.setAnswer('' + this.d,0);
        }
});

var TwoStepTakingFrom = new Class(
{
Extends: TextItem,
        initialize: function(sheet,left)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

		this.mLeft = left;

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = Math.floor(Math.random()*28)+12;
                this.d = parseInt(this.a - this.b - this.c);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion('For Breakfast the ' + this.ns.mAnimalOne + ' ate '  + this.b + ' ' + this.ns.mFruitOne + '. For Lunch the ' + this.ns.mAnimalOne + ' ate ' + this.c + ' ' + this.ns.mFruitOne + '. If they started the day with ' + this.a + ' ' + this.ns.mFruitOne + ' then how many ' + this.ns.mFruitOne + ' do the ' + this.ns.mAnimalOne + ' have ' + this.ns.mLeft + ' for dinner?');        
		}
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' of ' + this.ns.mPlayedActivityOne + '. They already played for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' on ' + this.ns.mDayOfWeekOne + ' and ' + this.c + ' ' + this.ns.mTimeIncrementSmall + ' on ' + this.ns.mDayOfWeekTwo + '. How many ' + this.ns.mTimeIncrementSmall + ' do they have ' + this.ns.mLeft + ' to play?');    	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a farm with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.ns.mAnimalOne +  ' ate ' + this.b + ' ' + this.ns.mVegetableOne + ' and ' + this.ns.mAnimalTwo + ' ate ' + this.c + ' than how many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.ns.mLeft + '?');  	
		}
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' had ' + this.a + ' students. ' + this.b + ' students leave ' + this.ns.mSchoolOne + '  and go to ' + this.ns.mSchoolTwo + '. ' + this.c + ' students leave ' + this.ns.mSchoolOne + ' and go to ' +  this.ns.mSchoolThree + '. How many students will ' + this.ns.mSchoolOne + ' have ' + this.ns.mLeft + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' gave ' + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + ' and ' + this.ns.mNameThree + ' ' + this.c + ' ' + this.ns.mThings + '. Before he gave away ' + this.ns.mThings + ' ' + this.ns.mNameOne + ' had ' + this.a + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.ns.mLeft + '?');    	
		}
                this.setAnswer('' + this.d,0);
        }
});

var TwoStepCompare = new Class(
{
Extends: TextItem,
        initialize: function(sheet,order)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '2.oa.a.1_2';
		
		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();
		
		var a = 0;  
		var b = 0;  
		var c = 0;  

               	this.a = Math.floor(Math.random()*20)+22;
               	this.b = Math.floor(Math.random()*20)+22;
               	this.c = Math.floor(Math.random()*20)+22;

               	//variables
		if (order == 'abmc')		
		{
			APPLICATION.log('abmc');
              	  	this.d = parseInt(this.a + this.b - this.c);
			a = 0;
			b = 1;
			c = 2;
		}
		if (order == 'acmb')		
		{
			APPLICATION.log('acmb');
              	  	this.d = parseInt(this.a + this.c - this.b);
			a = 0;
			b = 2;
			c = 1;
		}
		if (order == 'bcma')		
		{
			APPLICATION.log('bcma');
              	  	this.d = parseInt(this.b + this.c - this.a);
			a = 1;
			b = 2  
			c = 0;
		}

                random = Math.floor(Math.random()*5)+1;
		random = 5;
	
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ', ' + this.b + ' ' + this.ns.mFruitTwo + ' and ' + this.c + ' ' + this.ns.mFruitThree + '. How many more ' + this.ns.mFruitArray[a] + ' and ' + this.ns.mFruitArray[b] + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitArray[c] + '?');        
		}
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ', ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' and ' + this.ns.mPlayedActivityThree + ' for ' + this.c + ' ' + this.ns.mTimeIncrementSmall + '. How many more ' + this.ns.mTimeIncrementSmall + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityArray[a] + ' and ' + this.ns.mPlayedActivityArray[b] + ' than ' + this.ns.mPlayedActivityArray[c] + '?');  	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + ', ' + this.b + ' ' + this.ns.mVegetableTwo + ' and ' + this.c + ' ' + this.ns.mVegetableThree + '. How many more ' + this.ns.mVegetableArray[a] + ' and ' + this.ns.mVegetableArray[b] + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have than ' + this.ns.mVegetableArray[c] + '?');  	
		}
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.a + ' students, ' + this.ns.mSchoolTwo + ' has ' + this.b + ' and ' + this.ns.mSchoolThree + ' has ' + this.c  + '. How many more students does ' + this.ns.mSchoolArray[a] + ' and ' + this.ns.mSchoolArray[b] + ' have than ' + this.ns.mSchoolArray[c] + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' and ' + this.ns.mNameThree + ' has ' + this.c + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameArray[a] + ' and ' + this.ns.mNameArray[b] + ' have than ' + this.ns.mNameArray[c] + '?');    	
		}

                this.setAnswer('' + this.d,0);
        }
});

var OneStepCompare = new Class(
{
Extends: TextItem,
        initialize: function(sheet,order)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

		var a = 0;  
		var b = 0;  

               	//variables
		if (order == 'ab')		
		{
                	this.a = Math.floor(Math.random()*50)+50;
                	this.b = Math.floor(Math.random()*28)+12;
              	  	this.c = parseInt(this.a - this.b);
			a = 0;
			b = 1;
		}
		if (order == 'ba')		
		{
                	this.b = Math.floor(Math.random()*50)+50;
                	this.a = Math.floor(Math.random()*28)+12;
              	  	this.c = parseInt(this.b - this.a);
			a = 1;
			b = 0;
		}
	
                random = Math.floor(Math.random()*5)+1;
                random = 4;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitTwo + '. How many more ' + this.ns.mFruitArray[a] + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitArray[b] + '?');        
		}
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' ' + this.ns.mTimeIncrementSmall + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.b + ' ' + this.ns.mTimeIncrementSmall + '. How many more ' + this.ns.mTimeIncrementSmall + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityArray[a] + ' than ' + this.ns.mPlayedActivityArray[b] + '?');  	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. How many more ' + this.ns.mVegetableArray[a] + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have than ' + this.ns.mVegetableArray[b] + '?');  	
		}
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.a + ' students. ' + this.ns.mSchoolTwo + ' has ' + this.b + ' students. How many more students does ' + this.ns.mSchoolArray[a] + ' have than ' + this.ns.mSchoolArray[b] + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameArray[a] + ' have than ' + this.ns.mNameArray[b] + '?');    	
		}
                this.setAnswer('' + this.c,0);
        }
});

var TwoStepApApB = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*15)+15;
                this.b = Math.floor(Math.random()*15)+15;
                this.c = parseInt(this.a + this.a + this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mAnimalOne + '. There are ' + this.b + ' more ' + this.ns.mAnimalTwo + ' than ' + this.ns.mAnimalOne + '. How many animals are there ' + ' ' + this.mSum + '?');        
		}
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' are on the same team called the ' + this.ns.mAnimalOne + '. ' + this.ns.mNameOne + ' scored ' + ' ' + this.a + ' points. ' + this.ns.mNameTwo + ' scored ' + this.b + ' more points than ' + this.ns.mNameOne + '. How many points did ' + this.ns.mAnimalOne + ' score ' + this.mSum + '?'     ) ;    	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mNameOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameTwo + ' planted ' + this.b + ' more ' + this.ns.mVegetableOne + ' than ' + this.ns.mNameOne + '. How many ' + this.ns.mVegetableOne + ' did they plant in ' + this.mSum + '?' );  	
		}
		if (random == 2)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. There are ' + this.b + ' more ' + this.ns.mColorTwo + ' ' + this.ns.mThings + ' than ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' are there ' + this.mSum + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' spent ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' playing ' + this.ns.mPlayedActivityOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' spent ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' more playing ' + this.ns.mPlayedActivityTwo + '. How many ' + this.ns.mTimeIncrementSmall + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend playing ' + this.mSum + '?'); 	
		}
                this.setAnswer('' + this.c,0);
        }
});

var TwoStepApAmB = new Class(
{
Extends: TextItem,
        initialize: function(sheet,less,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mLess = less;
		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*14)+35;
                this.b = Math.floor(Math.random()*15)+15;
                this.c = parseInt(this.a + this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mAnimalOne + '. There are ' + this.b + ' ' + this.mLess + ' ' + this.ns.mAnimalTwo + ' than ' + this.ns.mAnimalOne + '. How many animals are there ' + ' ' + this.mSum + '?');        
		}
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' are on the same team called the ' + this.ns.mAnimalOne + '. ' + this.ns.mNameOne + ' scored ' + ' ' + this.a + ' points. ' + this.ns.mNameTwo + ' scored ' + this.b + ' ' + this.mLess + ' points than ' + this.ns.mNameOne + '. How many points did ' + this.ns.mAnimalOne + ' score ' + this.mSum + '?'     ) ;    	
		}
		if (random == 3)
		{
			this.setQuestion(this.ns.mNameOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameTwo + ' planted ' + this.b + ' ' + this.mLess + ' ' + this.ns.mVegetableOne + ' than ' + this.ns.mNameOne + '. How many ' + this.ns.mVegetableOne + ' did they plant in ' + this.mSum + '?' );  	
		}
		if (random == 2)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. There are ' + this.b + ' ' + this.mLess + ' ' + this.ns.mColorTwo + ' ' + this.ns.mThings + ' than ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' are there ' + this.mSum + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' spent ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' playing ' + this.ns.mPlayedActivityOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' spent ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' ' + this.mLess + ' playing ' + this.ns.mPlayedActivityTwo + '. How many ' + this.ns.mTimeIncrementSmall + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend playing ' + this.mSum + '?'); 	
		}
                this.setAnswer('' + this.c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_20',2.0120,'2.oa.a.1','Two step. TakdingFrom and Adding To.');
*/

var i_2_oa_a_1__20 = new Class(
{
Extends: TwoStepTakingFromAndAddingTo,
        initialize: function(sheet)
        {
        	this.parent(sheet,'acmb');
                this.mType = '2.oa.a.1_20';
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_19',2.0119,'2.oa.a.1','Two step. Compare. abmc');
*/

var i_2_oa_a_1__19 = new Class(
{
Extends: TwoStepCompare,
        initialize: function(sheet)
        {
        	this.parent(sheet,'acmb');
                this.mType = '2.oa.a.1_19';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_18',2.0118,'2.oa.a.1','One step. Compare. ba');
*/

var i_2_oa_a_1__18 = new Class(
{
Extends: OneStepCompare,
        initialize: function(sheet)
        {
        	this.parent(sheet,'ba');
                this.mType = '2.oa.a.1_18';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_17',2.0117,'2.oa.a.1','One step. Compare. ab');
*/

var i_2_oa_a_1__17 = new Class(
{
Extends: OneStepCompare,
        initialize: function(sheet)
        {
        	this.parent(sheet,'ab');
                this.mType = '2.oa.a.1_17';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_16',2.0116,'2.oa.a.1','Two step. a+a-b');
*/

var i_2_oa_a_1__16 = new Class(
{
Extends: TwoStepApAmB,
        initialize: function(sheet)
        {
        	this.parent(sheet,'less','altogether');
                this.mType = '2.oa.a.1_16';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_15',2.0115,'2.oa.a.1','Two step. a+a+b');
*/

var i_2_oa_a_1__15 = new Class(
{
Extends: TwoStepApApB,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_15';
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_14',2.0114,'2.oa.a.1','One step. TakingFrom. left' );
*/

var i_2_oa_a_1__14 = new Class(
{
Extends: OneStepTakingFrom,
        initialize: function(sheet)
        {
        	this.parent(sheet,'left');
                this.mType = '2.oa.a.1_14';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_13',2.0113,'2.oa.a.1','Two step. TakingFrom. left' );
*/

var i_2_oa_a_1__13 = new Class(
{
Extends: TwoStepTakingFrom,
        initialize: function(sheet)
        {
        	this.parent(sheet,'left');
                this.mType = '2.oa.a.1_13';
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_12',2.0112,'2.oa.a.1','One step. Addition. altogether' );
*/

var i_2_oa_a_1__12 = new Class(
{
Extends: OneStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_12';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_11',2.0111,'2.oa.a.1','Two step. Addition. in all' );
*/

var i_2_oa_a_1__11 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in all');
                this.mType = '2.oa.a.1_11';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_10',2.0110,'2.oa.a.1','Two step. Addition. in total' );
*/

var i_2_oa_a_1__10 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in total');
                this.mType = '2.oa.a.1_10';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_9',2.0109,'2.oa.a.1','Two step. Addition. total' );
*/
var i_2_oa_a_1__9 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'total');
                this.mType = '2.oa.a.1_9';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_8',2.0108,'2.oa.a.1','Two step. Addition. in sum' );
*/
var i_2_oa_a_1__8 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in sum');
                this.mType = '2.oa.a.1_8';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_7',2.0107,'2.oa.a.1','Two step. Addition. Altogether' );
*/
var i_2_oa_a_1__7 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_7';
        }
});



