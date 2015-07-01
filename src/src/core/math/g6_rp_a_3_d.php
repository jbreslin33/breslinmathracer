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

var answer;

var r = Math.floor(Math.random()*2);

    var things = ['camera','watch','sofa'];

    var r = Math.floor(Math.random()*3);

    this.thing = things[r];

    this.a = Math.floor(Math.random()*9)+2;
    this.b = 10;
    this.c = Math.floor(Math.random()*20)+20;
    this.d = this.a * this.c;

    while (this.b >= this.a) {
      this.a = Math.floor(Math.random()*8)+2;
    }

answer = this.b * this.c;
this.setAnswer('' + answer,0);

var r = 0; //Math.floor(Math.random()*3);

/*
On the test today, Joe answered 5 questions correctly for every 1 question he answered incorrectly. There were 42 questions on the test. How many correct answers did Joe have?

In a survey 3 out of 7 people liked Brand A better than Brand B. If 210 people were in the survey, how many people preferred Brand A?
*/

if(r == 0)
{
  this.setQuestion('In a survey' + this.b + 'out of ' + this.a + ' people. liked Brand A better than Brand B. If ' + this.d + ' people were in the survey, how many people preferred Brand A?'); 
}
if(r == 1)
{
this.setQuestion(this.e + '% of the total number of points scored is ' + answer + ' points. What is the total number of points scored?'); 
}
if(r == 2)
{
this.setQuestion(this.e + '% of the total number of cars in the parking lot is ' + answer + ' cars. What is the total number of cars in the parking lot?'); 
}

this.setQuestion('test'); 

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



