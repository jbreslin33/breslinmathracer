
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_22',4.0222,'4.oa.a.2','');
*/
var i_4_oa_a_2__22 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_22';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' lives in a city where it snowed ' + a + ' inches. ' + this.ns.mNameTwo + ' lives in a city where it snowed  ' + b + ' times that amount. How many inches did it snow in the city where ' + this.ns.mNameTwo + ' lives?');
                this.setAnswer('' + c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_21',4.0221,'4.oa.a.2','');
*/
var i_4_oa_a_2__21 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_21';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' goes to the zoo. There are ' + a + ' ' + this.ns.mAnimalOne + ' there. There are ' + b + ' times as many ' + this.ns.mAnimalTwo + ' than ' + this.ns.mAnimalOne + '. How many ' + this.ns.mAnimalTwo + ' are there?');
                this.setAnswer('' + c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_20',4.0220,'4.oa.a.2','');
*/
var i_4_oa_a_2__20 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_20';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' plays ' + this.ns.mNameTwo + ' in ' + this.ns.mPointActivityOne + '. ' + this.ns.mNameOne + ' scores ' + a + ' points. ' + this.ns.mNameTwo + ' wins by scoring ' + b + ' times as many points. How many points did ' + this.ns.mNameTwo + ' score in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' winning effort?');
                this.setAnswer('' + c,0);
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_19',4.0219,'4.oa.a.2','');
*/
var i_4_oa_a_2__19 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_19';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' builds a rectangular room in a video game. The room is ' + a + ' ' + this.ns.mDistanceIncrementMedium + ' long. The length of the room is ' + b + ' times the size of the width. What is the length of the room?');
                this.setAnswer('' + c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_18',4.0218,'4.oa.a.2','');
*/
var i_4_oa_a_2__18 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_18';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' is reading a book. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' has read ' + a + ' pages so far. The book has ' + b + ' times as many pages than ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' has read. How many pages does the book have?');
                this.setAnswer('' + c,0);
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_17',4.0217,'4.oa.a.2','');
*/
var i_4_oa_a_2__17 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_17';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' is making a salad. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + a + ' ' + this.ns.mVegetableOne + ' and ' + b + ' times as many ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use?');
                this.setAnswer('' + c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_16',4.0216,'4.oa.a.2','');
*/
var i_4_oa_a_2__16 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_16';
                this.ns = new NameSampler();
		this.mChopWhiteSpace = true;

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('Write an equation to solve for the unknown number: ' + a + ' &times ' + b + ' = c');
                this.setAnswer('' + a + 'x' + b + '=' + c,0);
                this.setAnswer('' + a + '*' + b + '=' + c,1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_15',4.0215,'4.oa.a.2','');
*/
var i_4_oa_a_2__15 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,700,200,365,145,100,50,580,130);

                this.mType = '4.oa.a.2_15';
                this.ns = new NameSampler();
		this.mChopWhiteSpace = true;

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('Write an equation to solve for the unknown number: a &times ' + b + ' = ' + c);
                this.setAnswer('' + c + '/' + b + '=' + a,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_14',4.0214,'4.oa.a.2','');
*/
var i_4_oa_a_2__14 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_14';
                this.ns = new NameSampler();
		this.mChopWhiteSpace = true;

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('Write an equation to solve for the variable: ' + a + ' &times y = ' + c);
                this.setAnswer('' + c + '/' + a + '=' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_13',4.0213,'4.oa.a.2','');
*/
var i_4_oa_a_2__13 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_13';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('Angry Baby weighs ' + a + ' pounds. Her older brother is ' + b + ' times heavier. This makes Angry Baby so mad! How many pounds does her older brother weigh?');
                this.setAnswer('' + c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_12',4.0212,'4.oa.a.2','');
*/
var i_4_oa_a_2__12 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_12';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('For ' + c + ' days ' + this.ns.mNameOne + ' kept track of what days the temperature went above 50 degrees. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' recorded ' + a + ' days that the temperature went above 50. How many times the number of days the temperature was above 50 degrees is the total days recorded by ' + this.ns.mNameOne + '?');
                this.setAnswer('' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_11',4.0211,'4.oa.a.2','');
*/
var i_4_oa_a_2__11 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_11';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' scored ' + c + ' points playing ' + this.ns.mPlayedActivityOne + '. ' + this.ns.mNameOne + ' scored ' + a + ' times as much as ' + this.ns.mNameTwo + '. How many points did ' + this.ns.mNameTwo + ' score?');
                this.setAnswer('' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_10',4.0210,'4.oa.a.2','');
*/
var i_4_oa_a_2__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_10';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);
		var d = parseInt(c - a);

                this.setQuestion('' + this.ns.mNameOne + ' has $' + a + '. ' + this.ns.mNameTwo + ' has $' + c + '. How much more money does ' + this.ns.mNameTwo + ' have?');
                this.setAnswer('$' + d,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_9',4.0209,'4.oa.a.2','');
*/
var i_4_oa_a_2__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,450,200,255,145,100,50,580,100);

                this.mType = '4.oa.a.2_9';
                this.ns = new NameSampler();

                var a = Math.floor(Math.random()*8+2);
                var b = Math.floor(Math.random()*8+2);
                var c = parseInt(a * b);

                this.setQuestion('' + this.ns.mNameOne + ' has $' + a + '. ' + this.ns.mNameTwo + ' has ' + b + ' times as much money as ' + this.ns.mNameOne + '. How much money does ' + this.ns.mNameTwo + ' have?');
                this.setAnswer('$' + c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_8',4.0208,'4.oa.a.2','Word Problem. Division. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_4_oa_a_2__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);              

        this.mType = '4.oa.a.2_8';
 
        this.Xpad = 10;
        this.Ypad = 35;

	//move gui
	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);

        this.mNameMachine = new NameMachine();
        this.mPictureLink = this.mNameMachine.getPictureLink();

        //variables
        this.a = Math.floor(Math.random()*7)+2;
        this.b = Math.floor(Math.random()*7)+2;
        this.c = parseInt(this.a * this.b);
               
	var random = Math.floor(Math.random()*1);
	if (random == 0)
	{	
              	this.setQuestion('Write a division expression that can be used to figure out how many objects are in each grouping.');
	}
	if (random == 1)
	{
               	this.setQuestion('Write a division expression that represents the picture.');
	}

    	this.setAnswer('' + this.c + '/' + this.a ,0);
},

createQuestionShapes: function()
{
	// raphael.clear();
  
    	var y = 135;
    	var x = 0;

	var a = parseInt(this.a); 
	var b = parseInt(this.b); 
    
    	var length = 0;
	
    	for (var i = 0; i < a; i++)
    	{
       		if (i > 4)
          		x = (30*b) + 60;
       		else
          		x = 30;

       		if (i == 5)
          		y = 135;

       		for (var z = 0; z < b; z++)
		{
        		this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
          		x = parseInt(x + 30);
		}
		y = y + 60; 	
	}

	length = (30*b);

    	var test = 0;

    	raphael = Raphael(this.Xpad,this.Ypad,550,360);

    	y = 105 - this.Ypad;
    
    	for (var i = 0; i < a; i++)
    	{               
        	x = 25 - this.Xpad;

        	if (i > 4)
         	x = 30 - this.Xpad + length + 20;

         	if (i == 5)
          	y = 105 - this.Ypad;

        	y = y + 60;

		var box = new Rectangle(length,30,x-5,y-45,this.mSheet.mGame,raphael,.5,.5,.5,"#000",.3,false);

		box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#444444", "stroke-width": 2});

		this.addQuestionShape(box);
    	}
},
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_7',4.0207,'4.oa.a.2','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_4_oa_a_2__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_7';
		
		//move gui
		this.mUserAnswerLabel.setPosition(625,150);
		this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
                
		var random = Math.floor(Math.random()*2);
		if (random == 1)
		{
                	this.setQuestion('Write a number sentence that represents the picture.');
		}
		if (random == 0)
		{
                	this.setQuestion('Write a multiplication expression that represents the picture.');
		}

		this.setAnswer('' + this.a + '*' + this.b ,0);
                this.setAnswer('' + this.b + '*' + this.a ,1);
		this.setAnswer('' + this.b + '*' + this.a + '=' + this.c,2);
		this.setAnswer('' + this.a + '*' + this.b + '=' + this.c,3);
		this.setAnswer('' + this.b + '*' + this.a + '=',4);
		this.setAnswer('' + this.a + '*' + this.b + '=',5);

                this.setAnswer('' + this.a + 'x' + this.b ,6);
                this.setAnswer('' + this.b + 'x' + this.a ,7);
		this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c,8);
		this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c,9);
		this.setAnswer('' + this.b + 'x' + this.a + '=',10);
		this.setAnswer('' + this.a + 'x' + this.b + '=',11);
	},

        createQuestionShapes: function()
        {
                var y = 135;

		var a = parseInt(this.a); 
		var b = parseInt(this.b); 
	
                for (var i = 0; i < a; i++)
                {
			var x = 30; 
                	for (var z = 0; z < b; z++)
			{
                        	this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
                        	x = parseInt(x + 30);
			}
			y = y + 25; 	
                }
        }
});







/*
prerequisites:
Since this standard only deals with multiplicative comparison we will only deal with 3rd grade multiplication and division standards

3.oa.a.3 : Use multiplication and division within 100 to solve word problems in situations involving equal groups, arrays, and measurement quantities, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem.

3.nbt.a.1 : Use place value understanding to round whole numbers to the nearest 10 or 100.

3.nbt.a.3 : Multiply one-digit whole numbers by multiples of 10 in the range 10-90 (e.g., 9 × 80, 5 × 60) using strategies based on place value and properties of operations. 


*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_5',4.0205,'4.oa.a.2','Multiplicative or Additive Comparison. Neither.');
*/

var i_4_oa_a_2__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_5';

                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThingOne  = this.mNameMachine.getThing();
                this.mThingTwo = this.mNameMachine.getThing();
                this.mColorOne  = this.mNameMachine.getColor();
                this.mColorTwo  = this.mNameMachine.getColor();

                this.setQuestion(this.mNameOne + ' has ' + this.mColorOne + ' ' + this.mThingOne + ' and ' + this.mNameTwo + ' has ' + this.mColorTwo + ' ' + this.mThingTwo + ' is an example of:');
                this.setAnswer('Neither',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_4',4.0204,'4.oa.a.2','Multiplicative or Additive Comparison. Additive comparison.');
*/

var i_4_oa_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_4';

                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThings  = this.mNameMachine.getThing();

                this.a = Math.floor(Math.random()*8+2);

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' more ' + this.mThings + ' than ' + this.mNameTwo + ' is an example of:');
                this.setAnswer('Additive Comparison',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_3',4.0203,'4.oa.a.2','Multiplicative or Additive Comparison. Multiplicative comparison.');
*/

var i_4_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_3';

		this.mNameMachine = new NameMachine();
		this.mNameOne = this.mNameMachine.getName();
		this.mNameTwo = this.mNameMachine.getName();
		this.mThings  = this.mNameMachine.getThing();

                this.a = Math.floor(Math.random()*8+2);

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' times more ' + this.mThings + ' than ' + this.mNameTwo + ' is an example of:');
                this.setAnswer('Multiplicative Comparison',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_2',4.0202,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Division operation.' );
*/

var i_4_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 
                
		this.mAdult     = this.mNameMachine.getAdult();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

                this.random = Math.floor(Math.random()*3);
		
		if (this.random == 2) 
		{
			this.setQuestion(this.mAdult + ' had a garden. In the garden ' + this.mNameMachine.getPronoun(this.mAdult,0) + ' had ' + this.a + ' '  + this.mVegetableOne + ' which represents ' + this.b + ' times the amount of ' + this.mVegetableTwo +  ' in ' + this.mNameMachine.getPronoun(this.mAdult,0,1) + ' garden. Write an equation that can be used to solve how many ' + this.mVegetableTwo +  ' are in the garden.')     
		}
		
		if (this.random == 1)
		{
                	this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day. ' + this.mNameTwo + ' played ' + this.mPlayedActivity + ' for ' + this.b + ' times less minutes a day. Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day.');
		}
		
		if (this.random == 0)
		{
                	this.setQuestion('At ' + this.mSchool + ' room ' + this.mRoomOne + ' ate ' + this.a + ' ' + this.mFruit + '. Room '  + this.mRoomOne + ' ate ' + this.b + ' times as many ' + this.mFruit + ' as room ' + this.mRoomTwo + '. How many ' + this.mFruit + ' did room ' + this.mRoomTwo + ' eat? Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day.');

		}

                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,1);
                this.setAnswer('' + this.a + '/' + this.b + '=' ,2);
                this.setAnswer('' + this.a + '/' + this.b ,3);
},

showCorrectAnswer: function()
{
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < 2; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();

   // this.mCorrectAnswerLabel.setPosition(650,230);
   // this.mCorrectAnswerLabel.setSize(200,100);
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_1',4.0201,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Multiplication operation. 1 digit by multiple of 10' );
--insert into prerequisites (item_type_id, prerequisite_id) values ('4.oa.a.1_1','3.nbt.a.3.a_1');
*/

var i_4_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_1';

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

 this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write an equation that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has.'); 

                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,3);

                this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c ,4);
                this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c ,5);
                this.setAnswer('' + this.c + '=' + this.a + 'x' + this.b ,6);
                this.setAnswer('' + this.c + '=' + this.b + 'x' + this.a ,7);

                this.setAnswer('' + this.a + '*' + this.b + '=',8);
                this.setAnswer('' + this.b + '*' + this.a + '=',9);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,10);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,11);

                this.setAnswer('' + this.a + 'x' + this.b + '=',12);
                this.setAnswer('' + this.b + 'x' + this.a + '=',13);
                this.setAnswer('' + this.c + '=' + this.a + 'x' + this.b ,14);
                this.setAnswer('' + this.c + '=' + this.b + 'x' + this.a ,15);
},

showCorrectAnswer: function()
{
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < 2; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();

   // this.mCorrectAnswerLabel.setPosition(650,230);
   // this.mCorrectAnswerLabel.setSize(200,100);
}


});









/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_6',4.0206,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Addition operation. Add numbers up to 100' );
--insert into prerequisites (item_type_id, prerequisite_id) values ('4.oa.a.1_1','3.nbt.a.3.a_1');
*/

var i_4_oa_a_2__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_6';

		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*20)+30;
                this.b = Math.floor(Math.random()*20)+30;
                this.c = parseInt(this.a + this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekTwo + '. Write an equation that can be used to solve how many ' + this.ns.mFruitOne + ' ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sold altogether.');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrement + '. Write an equation that can be used to solve how long ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' played altogether.');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. Write an equation that can be used to solve how many vegetables ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) +  ' planted altogether.');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' girls and ' + this.a + ' boys. Write an equation that can be used to solve how many students are in the school altogether.');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. Write an equation that can be used to solve how many ' + this.ns.mThings + ' they have altogether.');    	
		}
             
                this.setAnswer('' + this.a + '+' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '+' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '+' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '+' + this.a ,3);

                this.setAnswer('' + this.a + '+' + this.b + '=' ,4);
                this.setAnswer('' + this.b + '+' + this.a + '=' ,5);
                
                this.setAnswer('' + this.a + '+' + this.b ,6);
                this.setAnswer('' + this.b + '+' + this.a ,7);
          
},

showCorrectAnswer: function()
{
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < 2; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();

   // this.mCorrectAnswerLabel.setPosition(650,230);
   // this.mCorrectAnswerLabel.setSize(200,100);
}


});



