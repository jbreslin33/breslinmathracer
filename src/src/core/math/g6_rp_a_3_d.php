/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.d_2',6.0602,'6.rp.a.3.d','Table. Ratio. ' );
*/

var i_6_rp_a_3_d__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.d_2'; 

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();

    var answer;

    var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*6)+5;
    this.b = this.a - (Math.floor(Math.random()*3)+1);
    this.c = Math.floor(Math.random()*20)+20;
    this.d = this.a * this.c;

this.e = this.a-this.b;

answer = this.b * this.c;
this.setAnswer('' + answer,0);

this.setQuestion('On the test today, ' + this.mNameOne + ' answered ' + this.b + ' questions correctly for every ' + this.e + ' question ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' answered incorrectly. There were ' + this.d + ' questions on the test. How many correct answers did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' have?'); 

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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.d_1',6.0601,'6.rp.a.3.d','Table. Ratio. ' );
*/

var i_6_rp_a_3_d__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.d_1'; 

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();

    var answer;

    var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*8)+3;
    this.b = 10;
    this.c = Math.floor(Math.random()*20)+20;
    this.d = this.a * this.c;
    

    while (this.b >= this.a) {
      this.b = Math.floor(Math.random()*8)+2;
    }

answer = this.b * this.c;
this.setAnswer('' + answer,0);

  this.setQuestion('In a survey ' + this.b + ' out of ' + this.a + ' people liked Brand A better than Brand B. If ' + this.d + ' people were in the survey, how many people preferred Brand A?'); 

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


