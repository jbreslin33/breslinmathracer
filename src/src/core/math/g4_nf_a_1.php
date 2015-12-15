/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_12',4.1212,'4.nf.a.1','Terra Nova 18');
*/

var i_4_nf_a_1__12 = new Class(
{
Extends: FourButtonItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mChopWhiteSpace = false;
        this.mType = '4.nf.a.1_12';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mReasonableArray    = new Array();
        this.mNotReasonableArray = new Array();

        this.mReasonableArray.push('Counting number of students in a school yard');
        this.mReasonableArray.push('Counting number of people in an auditorium');
        this.mReasonableArray.push('Counting number of ' + this.ns.mFruitOne + ' in a crate');
        this.mReasonableArray.push('Counting number of ' + this.ns.mVegetableOne + ' in a garden');
        this.mReasonableArray.push('Counting number of pennies in a jar');
        this.mReasonableArray.push('Counting number of diapers in a box at Angry Baby house');
        this.mReasonableArray.push('Counting number of onesies in a drawer at Angry Baby house');

        this.mNotReasonableArray.push('Counting number of binkies to put in Angry Babys mouth');
        this.mNotReasonableArray.push('Counting number of shoes to put on Angry Babys feet');
        this.mNotReasonableArray.push('Counting number of scoops of formula to put in Angry Babys bottle');
        this.mNotReasonableArray.push('Counting number diapers to put on Angry Baby');
        this.mNotReasonableArray.push('Counting number of ' + this.ns.mFruitOne + ' for a pie recipe');
        this.mNotReasonableArray.push('Counting number of spoonfuls of medicine to take');
        this.mNotReasonableArray.push('Counting number of ties ' + this.mNameMachine.getName('boy') + ' should wear today');

        this.n = Math.floor(Math.random()*this.mNotReasonableArray.length);

        this.a = '' + this.mNotReasonableArray[this.n];
        this.setAnswer('' + this.a,0);
        this.mButtonA.setAnswer('' + this.a);

        this.b = '';
        this.c = '';
        this.d = '';

        while (this.b == this.c || this.b == this.d || this.c == this.d)
        {
                this.b = this.mReasonableArray[Math.floor(Math.random()*this.mReasonableArray.length)];
                this.c = this.mReasonableArray[Math.floor(Math.random()*this.mReasonableArray.length)];
                this.d = this.mReasonableArray[Math.floor(Math.random()*this.mReasonableArray.length)];
        }

        this.mButtonB.setAnswer('' + this.b);
        this.mButtonC.setAnswer('' + this.c);
        this.mButtonD.setAnswer('' + this.d);
        this.shuffle(10);
      
	this.setQuestion('Which of these would estimatating be problematic or not make much sense?');
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_11',4.1211,'4.nf.a.1','');
*/

var i_4_nf_a_1__11 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '4.nf.a.1_11';
        this.ns = new NameSampler();

        var n = 0;
        var d = 0;

        while (n == d || d < n)
        {
                n = Math.floor(Math.random()*9)+1;
                d = Math.floor(Math.random()*9)+1;
        }

        var answer = new Fraction(n,d,true);
	
	//a right answer 
	var t = Math.floor(Math.random()*3)+2;
	var fA = new Fraction(parseInt(n*t),parseInt(d*t),false); 

	//b flip it
	var fB = new Fraction(parseInt(d*t),parseInt(n*t),false); 	

	//c sub 1 for denominator
	var fC = new Fraction(fA.mNumerator,parseInt(fA.mDenominator - 1),false); 
	
	//c add 1 to denominator
	var fD = new Fraction(fA.mNumerator,parseInt(fA.mDenominator + 1),false); 

        var r = Math.floor(Math.random()*4);
	r = 3;
	if (r == 0)
	{	
        	this.setQuestion('' + 'In the class that ' + this.ns.mNameOne + ' is in ' + fA.getString() + ' of the students are ' + this.ns.mGenderKidOne + '. What fraction is equivalent to that ' + answer.getString() + ' or ' + fB.getString() + ' or ' + fC.getString() + ' or ' + fD.getString() + '?');
	}
	else if (r == 1)
	{
        	this.setQuestion('' + 'In the class that ' + this.ns.mNameOne + ' is in ' + fA.getString() + ' of the students are ' + this.ns.mGenderKidOne + '. What fraction is equivalent to that ' + fB.getString() + ' or ' + fC.getString() + ' or ' + fD.getString() + ' or ' + answer.getString() + '?');
	}
	else if (r == 2)
	{
        	this.setQuestion('' + 'In the class that ' + this.ns.mNameOne + ' is in ' + fA.getString() + ' of the students are ' + this.ns.mGenderKidOne + '. What fraction is equivalent to that ' + fC.getString() + ' or ' + fD.getString() + ' or ' + answer.getString() + ' or ' + fB.getString() + '?');
	}
	else if (r == 3)
	{
        	this.setQuestion('' + 'In the class that ' + this.ns.mNameOne + ' is in ' + fA.getString() + ' of the students are ' + this.ns.mGenderKidOne + '. What fraction is equivalent to that ' + fD.getString() + ' or ' + answer.getString() + ' or ' + fB.getString() + ' or ' + fC.getString() + '?');
	}
        this.setAnswer('' + answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_10',4.1210,'4.nf.a.1','write equivalent fraction word problem.');
*/

var i_4_nf_a_1__10 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '4.nf.a.1_10';
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;

        while (this.a == this.b || this.a % this.b == 0)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
        }

        this.fractionA = new Fraction(this.a,this.b,true);

        this.setQuestion('' + this.ns.mNameOne + ' is having a birthday and ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' wants to save ' + this.fractionA.getString() + ' of the cake for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' relatives who are coming later. What is another fraction that is equivalent?');
        this.setAnswer('' + this.fractionA.getString(),0);
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
		var fractionB = new Fraction( parseInt(this.fractionA.mNumerator * 2), parseInt(this.fractionA.mDenominator * 2),false);
                this.mCorrectAnswerLabel.setText('' + 'Possible Answer: ' + fractionB.getString());
               	this.mCorrectAnswerLabel.setVisibility(true);
        }
        this.hideAnswerInputs();
        this.showUserAnswer();
}
	
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_9',4.1209,'4.nf.a.1','write equivalent fraction word problem.');
*/

var i_4_nf_a_1__9 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '4.nf.a.1_9';
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;

        while (this.a == this.b || this.a % this.b == 0)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
        }

        this.fractionA = new Fraction(this.a,this.b,true);

        this.setQuestion('' + this.ns.mNameOne + ' asked ' + this.ns.mNameTwo + ' for an equivalent fraction of ' + this.fractionA.getString() + '. What is a possible correct answer that ' + this.ns.mNameTwo + ' could have given?');
        this.setAnswer('' + this.fractionA.getString(),0);
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
		var fractionB = new Fraction( parseInt(this.fractionA.mNumerator * 2), parseInt(this.fractionA.mDenominator * 2),false);
                this.mCorrectAnswerLabel.setText('' + 'Possible Answer: ' + fractionB.getString());
               	this.mCorrectAnswerLabel.setVisibility(true);
        }
        this.hideAnswerInputs();
        this.showUserAnswer();
}
	
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_8',4.1208,'4.nf.a.1','write equivalent fraction');
*/

var i_4_nf_a_1__8 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '4.nf.a.1_8';
        this.ns = new NameSampler();

        this.a = 0;
        this.b = 0;

        while (this.a == this.b || this.a % this.b == 0)
        {
                this.a = Math.floor(Math.random()*9)+1;
                this.b = Math.floor(Math.random()*9)+1;
        }

        this.fractionA = new Fraction(this.a,this.b,true);

        this.setQuestion('' + ' What is an equivalent fraction of ' + this.fractionA.getString() + '?');
        this.setAnswer('' + this.fractionA.getString(),0);
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
		var fractionB = new Fraction( parseInt(this.fractionA.mNumerator * 2), parseInt(this.fractionA.mDenominator * 2),false);
                this.mCorrectAnswerLabel.setText('' + 'Possible Answer: ' + fractionB.getString());
               	this.mCorrectAnswerLabel.setVisibility(true);
        }
        this.hideAnswerInputs();
        this.showUserAnswer();
}
	
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.a.1_7',4.1207,'4.nf.a.1','');
*/

var i_4_nf_a_1__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nf.a.1_7';
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

        var a = 2;
        var b = 1;

        while (a == b || a % b == 0)
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

        var a = 2	
        var b = 1;

        while (a == b || a % b == 0)
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
        this.parent(sheet,600,200,325,145,100,50,580,160);

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

