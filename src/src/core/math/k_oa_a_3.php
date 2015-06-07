//add stuff
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_1',0.1301,'k.oa.a.3','');
*/
var i_k_oa_a_3__1 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_1';

 	//this.mHeadingAnswerLabel4 
      	this.mHeadingAnswerLabel.setSize (50,50);
        this.mHeadingAnswerLabel2.setSize(50,50);
        this.mHeadingAnswerLabel3.setSize(50,50);
        this.mHeadingAnswerLabel4.setSize(50,50);

        this.mHeadingAnswerLabel.setPosition (175,150);
        this.mHeadingAnswerLabel2.setPosition(275,150);
        this.mHeadingAnswerLabel3.setPosition(175,250);
        this.mHeadingAnswerLabel4.setPosition(275,250);
        
	this.mHeadingAnswerLabel.setText ('+');
	this.mHeadingAnswerLabel2.setText ('= 2');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 2');


	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);


        this.setQuestion('Make 2 in different ways.');
        this.setAnswer('' + '1+1=2 , 2+0=2',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 2 || b != 2)
	{
		APPLICATION.log('one');
		APPLICATION.log('a:' + a);
		APPLICATION.log('b:' + b);
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		APPLICATION.log('two');
		correctAnswerFound = false;
	}

        if (correctAnswerFound == false)
        {
                this.mSheet.setTypeWrong(this.mType);
        }
        return correctAnswerFound;
},

showCorrectAnswer: function()
{
        if (this.mCorrectAnswerLabel)
        {
                this.mCorrectAnswerLabel.setSize(500, 100);
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: ' + this.mUserAnswer + ' + ' + this.mUserAnswer2 + ' = 2  AND ' + this.mUserAnswer3 + ' + ' + this.mUserAnswer4 + ' = 2');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}

});

