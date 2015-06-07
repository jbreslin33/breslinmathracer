
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_7',0.1307,'k.oa.a.3','');
*/
var i_k_oa_a_3__7 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_7';

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
	this.mHeadingAnswerLabel2.setText ('= 10');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 10');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 10 in different ways.');
        this.setAnswer('' + '5+5=10 , 7+3=10',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 10 || b != 10)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 5 + 4 = 9 AND 6 + 3 = 9');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_6',0.1306,'k.oa.a.3','');
*/
var i_k_oa_a_3__6 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_6';

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
	this.mHeadingAnswerLabel2.setText ('= 9');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 9');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 9 in different ways.');
        this.setAnswer('' + '6+3=9 , 5+4=9',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 9 || b != 9)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 5 + 4 = 9 AND 6 + 3 = 9');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_5',0.1305,'k.oa.a.3','');
*/
var i_k_oa_a_3__5 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_5';

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
	this.mHeadingAnswerLabel2.setText ('= 8');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 8');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 8 in different ways.');
        this.setAnswer('' + '4+4=8 , 5+3=8',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 8 || b != 8)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 4 + 4 = 8 AND 5 + 3 = 8');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_4',0.1304,'k.oa.a.3','');
*/
var i_k_oa_a_3__4 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_4';

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
	this.mHeadingAnswerLabel2.setText ('= 7');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 7');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 7 in different ways.');
        this.setAnswer('' + '4+3=7 , 5+2=7',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 7 || b != 7)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 4 + 3 = 7 AND 5 + 2 = 7');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_3',0.1303,'k.oa.a.3','');
*/
var i_k_oa_a_3__3 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_3';

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
	this.mHeadingAnswerLabel2.setText ('= 6');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 6');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 6 in different ways.');
        this.setAnswer('' + '3+3=5 , 4+2=5',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 6 || b != 6)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 3 + 3 = 6 AND 4 + 2 = 6');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.3_2',0.1302,'k.oa.a.3','');
*/
var i_k_oa_a_3__2 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
        this.parent(sheet,700,200,400,145,100, 50,425,100);
        this.mType = 'k.oa.a.3_2';

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
	this.mHeadingAnswerLabel2.setText ('= 5');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 5');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 5 in different ways.');
        this.setAnswer('' + '3+2=5 , 4+1=5',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 5 || b != 5)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 3 + 2 = 5 AND 4 + 1 = 5');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});
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
	this.mHeadingAnswerLabel2.setText ('= 4');
	this.mHeadingAnswerLabel3.setText ('+');
	this.mHeadingAnswerLabel4.setText ('= 4');

	this.mAnswerTextBox.setSize (50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);
	
	this.mAnswerTextBox.setPosition (100,150);
	this.mAnswerTextBox2.setPosition(200,150);
	this.mAnswerTextBox3.setPosition(100,250);
	this.mAnswerTextBox4.setPosition(200,250);

        this.setQuestion('Make 4 in different ways.');
        this.setAnswer('' + '2+2=4 , 3+1=4',0);
},
checkUserAnswer: function()
{
        correctAnswerFound = true;

	var a = parseInt(parseInt(this.mUserAnswer) + parseInt(this.mUserAnswer2));	
	var b = parseInt(parseInt(this.mUserAnswer3) + parseInt(this.mUserAnswer4));	

	if (a != 4 || b != 4)
	{
		correctAnswerFound = false;
	}

	if (this.mUserAnswer == this.mUserAnswer3 || this.mUserAnswer2 == this.mUserAnswer4)
	{
		correctAnswerFound = false;
	}
	if (this.mUserAnswer == this.mUserAnswer4 || this.mUserAnswer2 == this.mUserAnswer3)
	{
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
                this.mCorrectAnswerLabel.setText('POSSIBLE ANSWER: 2 + 2 = 4 AND 3 + 1 = 4');
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}
});

