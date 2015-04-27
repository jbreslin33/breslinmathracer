
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.a_6',4.1606,'4.nf.b.4.a','');
*/
var i_4_nf_b_4_a__6 = new Class(
{
Extends: TextItem4,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '4.nf.b.4.a_6';
        
	this.ns = new NameSampler();

        var d = Math.floor(Math.random()*8+2);
	var denominatorName = this.ns.mNameMachine.getDenominatorName(d);
	var fraction = new Fraction(1,d,false);
        
	//multiple
	this.setAnswer('' + '2/' + d,0);
	this.setAnswer('' + '4/' + d,1);
	this.setAnswer('' + '6/' + d,2);
	this.setAnswer('' + '8/' + d,3);

	fractionA = new Fraction(1,d,false);
	fractionB = new Fraction(3,d,false);
	fractionC = new Fraction(5,d,false);
	fractionD = new Fraction(7,d,false);
	
	//heading
	this.mHeadingAnswerLabel.setPosition(320,100);
	this.mHeadingAnswerLabel2.setPosition(420,100);
	this.mHeadingAnswerLabel3.setPosition(510,100);
	this.mHeadingAnswerLabel4.setPosition(600,100);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);
	this.mHeadingAnswerLabel4.setSize(25,25);

	this.mHeadingAnswerLabel.setText('' + fractionA.getString() + ',');
	this.mHeadingAnswerLabel2.setText('' + fractionB.getString() + ',');
	this.mHeadingAnswerLabel3.setText('' + fractionC.getString() + ',');
	this.mHeadingAnswerLabel4.setText('' + fractionD.getString() + ',');
	
	//text box
	this.mAnswerTextBox.setPosition(375,110);
	this.mAnswerTextBox2.setPosition(468,110);
	this.mAnswerTextBox3.setPosition(560,110);
	this.mAnswerTextBox4.setPosition(652,110);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);

        this.setQuestion('' + 'Use the rule add ' + fraction.getString() + ' to fill in the missing terms.' );
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

        var d = Math.floor(Math.random()*8+2);
	var denominatorName = this.ns.mNameMachine.getDenominatorName(d);
        
	//multiple
	this.setAnswer('' + '2/' + d,0);
	this.setAnswer('' + '4/' + d,1);
	this.setAnswer('' + '6/' + d,2);
	this.setAnswer('' + '8/' + d,3);

	fractionA = new Fraction(1,d,false);
	fractionB = new Fraction(3,d,false);
	fractionC = new Fraction(5,d,false);
	fractionD = new Fraction(7,d,false);
	
	//heading
	this.mHeadingAnswerLabel.setPosition(320,100);
	this.mHeadingAnswerLabel2.setPosition(420,100);
	this.mHeadingAnswerLabel3.setPosition(510,100);
	this.mHeadingAnswerLabel4.setPosition(600,100);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);
	this.mHeadingAnswerLabel4.setSize(25,25);

	this.mHeadingAnswerLabel.setText('' + fractionA.getString() + ',');
	this.mHeadingAnswerLabel2.setText('' + fractionB.getString() + ',');
	this.mHeadingAnswerLabel3.setText('' + fractionC.getString() + ',');
	this.mHeadingAnswerLabel4.setText('' + fractionD.getString() + ',');
	
	//text box
	this.mAnswerTextBox.setPosition(375,110);
	this.mAnswerTextBox2.setPosition(468,110);
	this.mAnswerTextBox3.setPosition(560,110);
	this.mAnswerTextBox4.setPosition(652,110);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
	this.mAnswerTextBox4.setSize(50,50);

        this.setQuestion('' + 'Fill in the unknown fractions to count by ' + denominatorName + '. Write fractions in numerator/denominator form.' );
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
