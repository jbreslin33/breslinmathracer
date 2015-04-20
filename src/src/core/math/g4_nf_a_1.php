
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_7',4.1207,'4.nf.a.1','');
*/

var i_4_nf_a_1__7 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '4.nf.a.1_7';
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;

        while (this.a == this.b)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(this.a,this.b,false);

        this.setQuestion('' + ' What is an equivalent fraction of ' + fractionA.getString() + '?');
        this.setAnswer('' + fractionA.getString(),0);
},

checkUserAnswer: function()
{
  	var numerator   = APPLICATION.mGame.mSheet.getItem().mNumeratorTextBox.mMesh.value
        var denominator = APPLICATION.mGame.mSheet.getItem().mDenominatorTextBox.mMesh.value

	if (this.a == numerator && this.b == denominator)
	{
		return false;
	}
	
	return this.parent();
},

showCorrectAnswer: function()
{
	var t = '';
        if (this.mCorrectAnswerLabel)
        {
                this.mCorrectAnswerLabel.setText('' + ' Tip: 1/2 is equivalent to 2/4');
               	this.mCorrectAnswerLabel.setVisibility(true);
        }
        this.hideAnswerInputs();
        this.showUserAnswer();
},
	
/*
checkUserAnswer: function()
{
	correctAnswerFound = false;
        for (i = 0; i <  this.mAnswerArray.length; i++)
        {
        	//ignorecase
                if (this.mIgnoreCase == true)
                {
                	if (this.mUserAnswer == this.mAnswerArray[i].toLowerCase())
                        {
                                correctAnswerFound = true;
                 }
                        }
                        else
                        {
                                if (this.mUserAnswer == this.mAnswerArray[i])
                                {
                                        correctAnswerFound = true;
                                }
                        }
                }
                if (correctAnswerFound == false)
                {
                        this.mSheet.setTypeWrong(this.mType);
                }
                return correctAnswerFound;
        },
*/

});

/*
        checkUserAnswer: function()
        {
                correctAnswerFound = false;
                for (i = 0; i <  this.mAnswerArray.length; i++)
                {
                        //ignorecase
                        if (this.mIgnoreCase == true)
                        {
                                if (this.mUserAnswer == this.mAnswerArray[i].toLowerCase())
                                {
                                        correctAnswerFound = true;
                                }
                        }
                        else
                        {
                                if (this.mUserAnswer == this.mAnswerArray[i])
                                {
                                        correctAnswerFound = true;
                                }
                        }
                }
                if (correctAnswerFound == false)
                {
                        this.mSheet.setTypeWrong(this.mType);
                }
                return correctAnswerFound;
        },

*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_6',4.1206,'4.nf.a.1','');
*/

var i_4_nf_a_1__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_6';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 4);
        var d = parseInt(b * 3);

        fractionB = new Fraction(c,d,false);

        this.setQuestion('' + this.ns.mNameOne + ' ran '  + fractionB.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' and ' + this.ns.mNameTwo + ' ran '  + fractionA.getString() + ' ' + this.ns.mDistanceIncrementLarge + '. Did they run the same distance? Answer Yes or No.');
        this.setAnswer('' + 'No',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_6',4.1206,'4.nf.a.1','');
*/

var i_4_nf_a_1__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_6';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 4);
        var d = parseInt(b * 3);

        fractionB = new Fraction(c,d,false);

       	this.setQuestion('' + this.ns.mNameOne + ' ran '  + fractionB.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' and ' + this.ns.mNameTwo + ' ran '  + fractionA.getString() + ' ' + this.ns.mDistanceIncrementLarge + '. Did they run the same distance? Answer Yes or No.');
       	this.setAnswer('' + 'No',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_5',4.1205,'4.nf.a.1','');
*/

var i_4_nf_a_1__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_5';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 3);
        var d = parseInt(b * 3);

        fractionB = new Fraction(c,d,false);
       	
	this.setQuestion('' + this.ns.mNameOne + ' ran '  + fractionB.getString() + ' ' + this.ns.mDistanceIncrementLarge + ' and ' + this.ns.mNameTwo + ' ran '  + fractionA.getString() + ' ' + this.ns.mDistanceIncrementLarge + '. Did they run the same distance? Answer Yes or No.');
       	this.setAnswer('' + 'Yes',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_4',4.1204,'4.nf.a.1','1h');
*/

var i_4_nf_a_1__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_4';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 3);
        var d = parseInt(b * 2);

        fractionB = new Fraction(c,d,false);

	this.setQuestion('' + this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + fractionB.getString() + ' hours. ' + this.ns.mNameTwo + ' played '  + this.ns.mPlayedActivityOne + ' for ' + fractionA.getString() + ' hours. Did they play ' + this.ns.mPlayedActivityOne + ' for the same amount of time? Answer Yes or No.');
       	this.setAnswer('' + 'No',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_3',4.1203,'4.nf.a.1','1h');
*/

var i_4_nf_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_3';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;

        while (a == b)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
        }

        fractionA = new Fraction(a,b,false);

        var c = parseInt(a * 2);
        var d = parseInt(b * 2);

        fractionB = new Fraction(c,d,false);
	
	this.setQuestion('' + this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + fractionB.getString() + ' hours. ' + this.ns.mNameTwo + ' played '  + this.ns.mPlayedActivityOne + ' for ' + fractionA.getString() + ' hours. Did they play ' + this.ns.mPlayedActivityOne + ' for the same amount of time? Answer Yes or No.');
       	this.setAnswer('' + 'Yes',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_2',4.1202,'4.nf.a.1','2x numerator 1x denominator');
*/

var i_4_nf_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

      	this.mType = '4.nf.a.1_2';
	this.mChopWhiteSpace = false;

	var a = 0;
	var b = 0;

	while (a == b)
	{
		a = Math.floor(Math.random()*9)+1;
		b = Math.floor(Math.random()*9)+1;
	}

	fractionA = new Fraction(a,b,false);

	var c = parseInt(a * 2);
	var d = parseInt(b * 3);
	
	fractionB = new Fraction(c,d,false);

        this.setQuestion('Compare ' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('not equal',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_1',4.1201,'4.nf.a.1','2x');
*/

var i_4_nf_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

      	this.mType = '4.nf.a.1_1';
	this.mChopWhiteSpace = false;

	var a = 0;
	var b = 0;

	while (a == b)
	{
		a = Math.floor(Math.random()*9)+1;
		b = Math.floor(Math.random()*9)+1;
	}

	fractionA = new Fraction(a,b,false);

	var c = parseInt(a * 2);
	var d = parseInt(b * 2);
	
	fractionB = new Fraction(c,d,false);

        this.setQuestion('' + fractionA.getString() + ' and ' + fractionB.getString() + '. Write equal or not equal.');
        this.setAnswer('equal',0);
}
});

