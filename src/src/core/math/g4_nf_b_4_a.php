
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_5',4.1605,'4.nf.b.4.a','');
*/
var i_4_nf_b_4_a__5 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '4.nf.b.4.a_5';
        
	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+1);
        var b = 4;
       
	this.mOperation = '';  
	var c = Math.floor(Math.random()*2);
	c = parseInt(c);
	if (c == 0)
	{
		this.mOperation = 'add';				
	}
	else
	{
		this.mOperation = 'subtract';				
	}
        
	var patternArray = new Array();

	for (i=0; i < 7; i++)
	{
		if (i == 0)
		{
			var x = parseInt(a * b); 
			patternArray.push(x);
		}
		else
		{
			var y = parseInt(i + b);  
			var x = parseInt(a * y);
			patternArray.push(x);
		}
	}
	
	//multiple
	this.setAnswer('' + a,3);
	
	//heading
	this.mHeadingAnswerLabel.setPosition(320,100);
	this.mHeadingAnswerLabel2.setPosition(420,100);
	this.mHeadingAnswerLabel3.setPosition(510,100);
	this.mHeadingAnswerLabel4.setPosition(600,100);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);
	this.mHeadingAnswerLabel4.setSize(25,25);

	if (this.mOperation == 'add')	
	{
		this.mHeadingAnswerLabel.setText('' + patternArray[0] + ',');
		this.mHeadingAnswerLabel2.setText(',' + patternArray[2] + ',');
		this.mHeadingAnswerLabel3.setText(',' + patternArray[4] + ',');
		this.mHeadingAnswerLabel4.setText(',' + patternArray[6]);
	}
	else
	{
		this.mHeadingAnswerLabel.setText('' + patternArray[6] + ',');
		this.mHeadingAnswerLabel2.setText(',' + patternArray[4] + ',');
		this.mHeadingAnswerLabel3.setText(',' + patternArray[2] + ',');
		this.mHeadingAnswerLabel4.setText(',' + patternArray[0]);
	}
	
	//text box
	this.mAnswerTextBox.setPosition(375,110);
	this.mAnswerTextBox2.setPosition(468,110);
	this.mAnswerTextBox3.setPosition(560,110);
	this.mAnswerTextBox4.setPosition(652,110);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);

        this.setQuestion('' + 'Use the rule ' + this.mOperation + ' ' + a + ' to fill in the missing parts of the number pattern. Then write below what all the numbers in the pattern are a multiple of.');

	if (this.mOperation == 'add')	
	{
       		this.setAnswer('' + patternArray[1],0);
        	this.setAnswer('' + patternArray[3],1);
        	this.setAnswer('' + patternArray[5],2);
	}
	else
	{
       		this.setAnswer('' + patternArray[5],0);
        	this.setAnswer('' + patternArray[3],1);
        	this.setAnswer('' + patternArray[1],2);
	}
},
showCorrectAnswer: function()
{
        if (this.mCorrectAnswerLabel)
        {
                this.mCorrectAnswerLabel.setSize(500, 100);
                this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.mHeadingAnswerLabel.getText() + ' ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' ' +  this.getAnswer(1) + ' ' + this.mHeadingAnswerLabel3.getText() + ' ' +  this.getAnswer(2) + ' ' + this.mHeadingAnswerLabel4.getText() + ' Multiple: ' +  this.getAnswer(3));
                this.mCorrectAnswerLabel.setVisibility(true);
         }
}

});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_4',4.1604,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '4.nf.b.4.a_4';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;

        while(a >= b)
        {
                a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
        }

        var c = a;
        var d = 1;

        var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + c,0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + ef.getString() + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_3',4.1603,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_3';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;

        while(a >= b)
        {
                a = Math.floor((Math.random()*8)+2);
                b = Math.floor((Math.random()*8)+2);
        }

        var c = a;
        var d = 1;

        var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + ef.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + c + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_3',4.1603,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_3';
        this.ns = new NameSampler();

	var a = 1;
	var b = 0;

	while(a >= b)
	{
		a = Math.floor((Math.random()*8)+2);
		b = Math.floor((Math.random()*8)+2);
	}
	
	var c = a;
        var d = 1;
	
	var e = 1;
        var f = b;

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);
        var ef = new Fraction(e,f,false);

        this.setAnswer('' + ef.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' = ' + c + ' &times ? ');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_2',4.1602,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.a_2';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c)
        {
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + c + ' &times ' + ab.getString() + ' = ');
}

});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_1',4.1601,'4.nf.b.4.a','Multiply unit fractions by whole numbers');
*/

var i_4_nf_b_4_a__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
	this.mType = '4.nf.b.4.a_1';
        this.ns = new NameSampler();

	var a = 1;
	var b = 0;
	var c = 0;
	var d = 1;
	
	while (b == c)
	{
		var b = Math.floor((Math.random()*8)+2);
		var c = Math.floor((Math.random()*8)+2);
	}


	var ab = new Fraction(a,b,false);
	var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' &times ' + c + ' = ');
}

});
