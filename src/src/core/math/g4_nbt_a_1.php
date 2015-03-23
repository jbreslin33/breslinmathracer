/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_11',4.0611,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__11 = new Class(
{

Extends: TextItem2,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mType = '4.nbt.a.1_11';
        this.ns = new NameSampler();

        this.mAnswerTextBox.setPosition(475,140);
        this.mAnswerTextBox2.setPosition(555,140);
        this.mAnswerTextBox.setSize(50,25);
        this.mAnswerTextBox2.setSize(50,25);

        this.mHeadingAnswerLabel.setText('Blue<br> Digit Value');
        this.mHeadingAnswerLabel2.setText('Red<br> Digit Value');
        this.mHeadingAnswerLabel.setPosition(475,70);
        this.mHeadingAnswerLabel2.setPosition(555,70);
        this.mHeadingAnswerLabel.setSize(50,50);
        this.mHeadingAnswerLabel2.setSize(50,50);

        this.mQuestionLabel.setSize(220,250);
        this.mQuestionLabel.setPosition(225,180);

        var a = Math.floor(Math.random()*21)+20;

        var b = Math.floor(Math.random()*3);
        b = b + 2.5;

        var answer = (a*16) / b;
        var answer1 = Math.floor(answer);
        var answer2 = (a*16) % b;
        //this.setQuestion('A serving of cheese weighs ' + b + ' ounces. How many whole servings of cheese are there in a ' + a + '-pound wheel of cheese? How much is left over?');
	//this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + '<span style="color: #f00;">' + this.tenthousands + '</span>' + '' + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths + this.tenthousandths + this.hundredthousandths);
//	this.setQuestion('What is the value value of the red digit called in the number ' + this.hundredthousands + '<span style="color: #f00;">' + this.tenthousands + '</span>' + '' + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths + this.tenthousandths + this.hundredthousandths);


        this.setAnswer('' + answer1,0);
        this.setAnswer('' + answer2,1);
},

showCorrectAnswer: function()
{
        if (this.mCorrectAnswerLabel)
        {
                this.mCorrectAnswerLabel.setSize(200, 75);
                this.mCorrectAnswerLabel.setPosition(330,200);
                this.mCorrectAnswerLabel.setText('CORRECT ANSWER:</br> ' + this.mHeadingAnswerLabel.getText() + ' = ' +  this.getAnswer()  + '</br> ' + this.mHeadingAnswerLabel2.getText() + ' = ' +  this.getAnswerTwo());
                this.mCorrectAnswerLabel.setVisibility(true);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_10',4.0610,'4.nbt.a.1','This type will give tens and ask for ones');
*/

var i_4_nbt_a_1__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_10';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'tens';
		varC = 'ones';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_9',4.0609,'4.nbt.a.1','This type will give hundreds and ask for ones');
*/

var i_4_nbt_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_9';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'ones';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_8',4.0608,'4.nbt.a.1','This type will give hundreds and ask for tens');
*/

var i_4_nbt_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_8';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'hundreds';
		varC = 'tens';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_7',4.0607,'4.nbt.a.1','This type will give thousands and ask for ones');
*/

var i_4_nbt_a_1__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_7';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'ones';

		answer = varA * 1000;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_6',4.0606,'4.nbt.a.1','This type will give thousands and ask for tens');
*/

var i_4_nbt_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_6';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'tens';

		answer = varA * 100;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_5',4.0605,'4.nbt.a.1','This type will give thousands and ask for hundreds');
*/

var i_4_nbt_a_1__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_5';

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var answer = 0;

		varA = 1 + Math.floor(Math.random()*9);
		varB = 'thousands';
		varC = 'hundreds';

		answer = varA * 10;
                  
		this.setQuestion('' + varA + ' ' + varB + ' = ? ' + varC);
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_4',4.0604,'4.nbt.a.1','This type will ask which digit is in the thousands column');
*/

var i_4_nbt_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_4';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'thousands';
		answer = thousands;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_3',4.0603,'4.nbt.a.1','This type will ask which digit is in the hundreds column');
*/

var i_4_nbt_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_3';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'hundreds';
		answer = hundreds;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer('' + answer,0);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_2',4.0602,'4.nbt.a.1','This type will ask which digit is in the tens column');
*/

var i_4_nbt_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_2';

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'tens';
		answer = tens;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer('' + answer,0);

        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_1',4.0601,'4.nbt.a.1','This type will ask which digit is in the ones column');
*/

var i_4_nbt_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.1_1';          

		var place = 0;

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = 0;
		var rand = 0;

		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		rand = 1 + Math.floor((Math.random()*4));
				
		place = 'ones';
		answer = ones;

		number = '' + thousands + ',' + hundreds + tens + ones;
                  
		this.setQuestion('In the number ' + number + ' which digit is in the ' + place + ' column?');
                this.setAnswer('' + answer,0);

                //this.mButtonA.setAnswer(a);
                //this.mButtonB.setAnswer(b);
                //this.mButtonC.setAnswer(c);
                //this.shuffle(10);
        }
});







