
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.c_4',6.0604,'6.rp.a.3.c','Table. Ratio. ' ); update item_types set progression = 6.0604 where id = '6.rp.a.3.c_4';
*/

var i_6_rp_a_3_c__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.c_4'; 
var answer;

var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*11)+45;
    this.b = this.a * 4; // whole
    this.c = Math.floor(Math.random()*3)+1;
    this.e = this.c * 25; //percent

answer = this.a * this.c; // part

this.setAnswer('' + this.b,0);

var r = Math.floor(Math.random()*3);

if(r == 0)
{
  this.setQuestion(this.e + '% of the total number of people in the store is ' + answer + ' people. What is the total number of people in the store?'); 
}
if(r == 1)
{
this.setQuestion(this.e + '% of the total number of points scored is ' + answer + ' points. What is the total number of points scored?'); 
}
if(r == 2)
{
this.setQuestion(this.e + '% of the total number of cars in the parking lot is ' + answer + ' cars. What is the total number of cars in the parking lot?'); 
}

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.c_3',6.0603,'6.rp.a.3.c','Table. Ratio. ' );update item_types set progression = 6.0603 where id = '6.rp.a.3.c_3';
*/

var i_6_rp_a_3_c__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.c_3'; 

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();

var answer;

var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*11)+45;
    this.b = this.a * 4; // price
    this.c = Math.floor(Math.random()*3)+5; // tax %
    this.e = (this.c * this.b)/100; // tax amount

answer = this.e + this.b;   

this.setAnswer('' + answer.toFixed(2),0);

  this.setQuestion('The sales tax rate is ' + this.c + '%. If ' + this.mNameOne + ' buys a ' + this.thing + ' priced at $' + this.b + ', what will be the total cost including tax?'); 

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.c_2',6.0602,'6.rp.a.3.c','Table. Ratio. ' ); update item_types set progression = 6.0602 where id = '6.rp.a.3.c_2';
*/

var i_6_rp_a_3_c__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.c_2'; 

var answer;

var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*11)+45;
    this.b = this.a * 4;
    this.c = Math.floor(Math.random()*3)+1;
    this.e = this.c * 25;

answer = this.a * (4 - this.c);   

this.setAnswer('' + this.b,0);

  this.setQuestion('All items at the store are ' + this.e + '% off. The sale price of a ' + this.thing + ' is $' + answer + '. What was the original price?'); 

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.c_1',6.0601,'6.rp.a.3.c','Table. Ratio. ' ); update item_types set progression = 6.0601 where id = '6.rp.a.3.c_1';
*/

var i_6_rp_a_3_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.c_1'; 

var answer;

var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*11)+45;
    this.b = this.a * 4;
    this.c = Math.floor(Math.random()*3)+1;
    this.e = this.c * 25;

  this.setQuestion('All items at the store are ' + this.e + '% off. The original price of a ' + this.thing + ' is $' + this.b + '. What is the sale price?'); 

answer = this.a * (4 - this.c);   

this.setAnswer('' + answer,0);

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});


























