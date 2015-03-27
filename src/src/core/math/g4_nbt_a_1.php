
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_25',4.0625,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__25 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nbt.a.1_25';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;
        var place = Math.floor(Math.random()*parseInt(totalDigits-1))+1;
        var exponent = parseInt(place);
        var a = 0;
        var b = Math.pow(10,exponent);

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == place)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                        a = placeArray[i];
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }
        var c = parseInt(a * b);
        c = parseInt(c / 10);

        this.setQuestion('In the number ' + numberString + ' the blue digit value is 10 times the value of __.');
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_24',4.0624,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__24 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,200,325,145,100,50,580,130);

        this.mType = '4.nbt.a.1_24';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;
        var place = Math.floor(Math.random()*parseInt(totalDigits-1))+1;
        var exponent = parseInt(place);
        var a = 0;
        var b = Math.pow(10,exponent);

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == place)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                        a = placeArray[i];
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }
        var c = parseInt(a * b);
	c = parseInt(c / 10);

        this.setQuestion('In the number ' + numberString + ' the blue digit value is __ times the value of = ' + c + '.');
        this.setAnswer('' + '10',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_23',4.0623,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__23 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,550,200,300,145,100,50,580,130);

        this.mType = '4.nbt.a.1_23';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;
        var place = Math.floor(Math.random()*totalDigits);
        var exponent = parseInt(place);
        var a = 0;
        var b = Math.pow(10,exponent);

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == place)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                        a = placeArray[i];
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }
        var c = parseInt(a * b);

        this.setQuestion('In the number ' + numberString + ' the blue digit value is ' + a + ' &times __ = ' + c + '.');
        this.setAnswer('' + b,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_22',4.0622,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__22 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,550,200,300,145,100,50,580,130);

        this.mType = '4.nbt.a.1_22';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;
        var place = Math.floor(Math.random()*totalDigits);
        var exponent = parseInt(place);
        var a = 0;
        var b = Math.pow(10,exponent);

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == place)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                        a = placeArray[i];
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }
        var c = parseInt(a * b);

        this.setQuestion('In the number ' + numberString + ' the blue digit value is ' + a + ' &times ' + b + ' = __.');
        this.setAnswer('' + c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_21',4.0621,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__21 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,550,200,300,145,100,50,580,130);

        this.mType = '4.nbt.a.1_21';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;
        var place = Math.floor(Math.random()*totalDigits);
	var exponent = parseInt(place);	
	var a = 0;
	var b = Math.pow(10,exponent);	

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == place)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
			a = placeArray[i];
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }
	var c = parseInt(a * b);

        this.setQuestion('In the number ' + numberString + ' the blue digit value is __ &times ' + b + ' = ' + c + '.');
        this.setAnswer('' + a,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_20',4.0620,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__20 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_20';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 5)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'hundred thousands',0);
        this.setAnswer('' + 'hundred thousands place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_19',4.0619,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__19 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_19';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 4)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'ten thousands',0);
        this.setAnswer('' + 'ten thousands place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_18',4.0618,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__18 = new Class(
{

Extends: TextItem, 
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_18';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 3)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'thousands',0);
        this.setAnswer('' + 'thousands place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_17',4.0617,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__17 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_17';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 2)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'hundreds',0);
        this.setAnswer('' + 'hundreds place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_16',4.0616,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__16 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_16';
        this.mChopWhiteSpace = false;
        this.ns = new NameSampler();

        var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 1)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'tens',0);
        this.setAnswer('' + 'tens place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_15',4.0615,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__15 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
  	this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_15';
	this.mChopWhiteSpace = false;
        this.ns = new NameSampler();
        
	var totalDigits = 6;

        var placeArray = new Array();
        for (var i = 0; i < totalDigits; i++)
        {
                placeArray.unshift(Math.floor(Math.random()*8)+2);
        }

        var numberString = '';
        for (var i = 5; i > -1; i--)
        {
                if (i == 0)
                {
                        numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>';
                }
                else
                {
                        numberString = numberString + '' + placeArray[i];
                }
        }

        this.setQuestion('In the number ' + numberString + ' the blue digit is in what place value?');
        this.setAnswer('' + 'ones',0);
        this.setAnswer('' + 'ones place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_14',4.0614,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__14 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
  	this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_14';
        this.ns = new NameSampler();

	var digitValue = Math.floor(Math.random()*9)+1;
	var bigDigits = Math.floor(Math.random()*4)+2;
	var number = '';

	for (var i = 0; i < bigDigits; i++)
	{
		number = '' + number + '' + digitValue;	
	} 

	this.setQuestion('' + 'If ' + this.ns.mNameOne + ' takes the value of any of the digits in the number ' + number + ' and divides by the value of the digit to the right what will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' quotient be?');

	this.setAnswer('' + '10',0);   
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_13',4.0613,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__13 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
  	this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_13';
        this.ns = new NameSampler();

	var bigDigits = Math.floor(Math.random()*4)+2;
	var littleDigits = parseInt(bigDigits - 1);
  
	var digitValue = Math.floor(Math.random()*9)+1;

	var bigMultiplier = parseInt(Math.pow(10,bigDigits));	
	var littleMultiplier = parseInt(Math.pow(10,littleDigits));	

	var bigNumber = parseInt(digitValue * bigMultiplier);
	var littleNumber = parseInt(digitValue * littleMultiplier);

	this.setQuestion('' + this.ns.mNameOne + ' was playing ' + this.ns.mVideoGameOne + ' and it glitched out. It showed ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' score incorrectly as ' + bigNumber + ' instead of ' + littleNumber + '. How many times greater did ' + this.ns.mVideoGameOne + ' show the score than it should have?');

	this.setAnswer('' + '10',0);   
	this.setAnswer('' + '10 times greater',1);   
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.1_12',4.0612,'4.nbt.a.1','');
*/
var i_4_nbt_a_1__12 = new Class(
{

Extends: TextItem,
initialize: function(sheet)
{
  	this.parent(sheet,450,200,255,145,200,50,580,100);

        this.mType = '4.nbt.a.1_12';
        this.ns = new NameSampler();

	var totalDigits = 6;

	var placeArray = new Array();
	for (var i = 0; i < totalDigits; i++)
	{
        	placeArray.unshift(Math.floor(Math.random()*8)+2);
	}
  
	fromElement = Math.floor(Math.random()*5)+1;
        var toElement = parseInt(fromElement - 1);

        placeArray[toElement] = placeArray[fromElement];

	var numberString = '';
	for (var i = 5; i > -1; i--)
	{
		if (i == fromElement) 
		{
			numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>'; 				
		}
		else if (i == toElement) 
		{
			numberString = numberString + '<span style="color: #f00;">' + placeArray[i] + '</span>'; 				
		}
		else
		{
			numberString = numberString + '' + placeArray[i]; 				
		}
	}

	this.setQuestion('Write a division equation that shows the relationship between the red and blue digit values in the number: ' + numberString);
	var blueMultiplier = parseInt(fromElement);
	bm = Math.pow(10,blueMultiplier);

	var redMultiplier  = parseInt(toElement);
	rm = Math.pow(10,redMultiplier);

	var blueValue = parseInt(placeArray[fromElement] * bm); 	
	var redValue = parseInt(placeArray[toElement] * rm); 	

	if (blueValue > redValue)
	{
		var answerOne = parseInt(blueValue / redValue);   
		this.setAnswer('' + blueValue + '/' + redValue + '=' + answerOne,0);   
		this.setAnswer('' + blueValue + '/' + answerOne + '=' + redValue,1);   
	}
	else
	{
		var answerOne = parseInt(redValue / blueValue);   
		this.setAnswer('' + redValue + '/' + blueValue + '=' + answerOne,0);   
		this.setAnswer('' + redValue + '/' + answerOne + '=' + blueValue,1);   
	}
}
});

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

	var totalDigits = 6;

        this.mAnswerTextBox.setPosition(425,140);
        this.mAnswerTextBox2.setPosition(595,140);
        this.mAnswerTextBox.setSize(75,25);
        this.mAnswerTextBox2.setSize(75,25);

        this.mHeadingAnswerLabel.setText('Blue<br> Digit<br> Value');
        this.mHeadingAnswerLabel2.setText('Red<br> Digit<br> Value');
        this.mHeadingAnswerLabel.setPosition(425,70);
        this.mHeadingAnswerLabel2.setPosition(595,70);
        this.mHeadingAnswerLabel.setSize(50,50);
        this.mHeadingAnswerLabel2.setSize(50,50);

        this.mQuestionLabel.setSize(220,250);
        this.mQuestionLabel.setPosition(225,180);
	
	var placeArray = new Array();
	for (var i = 0; i < totalDigits; i++)
	{
        	placeArray.unshift(Math.floor(Math.random()*8)+2);
	}

	fromElement = Math.floor(Math.random()*5)+1;	 
	var toElement = parseInt(fromElement - 1);	
	
	placeArray[toElement] = placeArray[fromElement];	

	var numberString = '';
	for (var i = 5; i > -1; i--)
	{
		if (i == fromElement) 
		{
			numberString = numberString + '<span style="color: #2E2EFE;">' + placeArray[i] + '</span>'; 				
		}
		else if (i == toElement) 
		{
			numberString = numberString + '<span style="color: #f00;">' + placeArray[i] + '</span>'; 				
		}
		else
		{
			numberString = numberString + '' + placeArray[i]; 				
		}
	}

	this.setQuestion('What is the value of the red and blue digits in the number: ' + numberString);
	var blueMultiplier = parseInt(fromElement);
	bm = Math.pow(10,blueMultiplier);

	var redMultiplier  = parseInt(toElement);
	rm = Math.pow(10,redMultiplier);
		
        this.setAnswer('' + parseInt( placeArray[toElement] * bm) ,0);
        this.setAnswer('' + parseInt( placeArray[fromElement]   * rm) ,1);
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







