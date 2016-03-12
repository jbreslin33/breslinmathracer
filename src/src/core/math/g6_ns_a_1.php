
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_6',6.0806,'6.ns.a.1','word problem. divide mixed number by a mixed number'); update item_types set progression = 6.0806 where id = '6.ns.a.1_6';
*/
var i_6_ns_a_1__6 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_6';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

      while (an <= ad || (an % ad) == 0 || (an / ad) < 2)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

     while (bn <= bd || (bn % bd) == 0 || (bn / bd) >= (an / ad))
     {
        bn = Math.floor(Math.random()*11)+2;
        bd = Math.floor(Math.random()*11)+2;
     }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.multiply(fractionB);
	answer.reduce();

        this.setAnswer('' + fractionB.getString(),0);

        this.setShowAnswer(fractionB.getMixedNumber());

        var things = ['painting','poster', 'television'];

        var r = Math.floor(Math.random()*3);

  this.setQuestion('A ' + things[r] + ' is in the shape of a rectangle. The length of the ' + things[r] + ' is ' + fractionA.getMixedNumber() + ' feet. The area of the ' + things[r] + ' is ' + answer.getMixedNumber() + ' square feet. What is the width of the ' + things[r] + '?');

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_5',6.0805,'6.ns.a.1','divide fraction by a mixed number'); update item_types set progression = 6.0805 where id = '6.ns.a.1_5';
*/
var i_6_ns_a_1__5 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_5';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

     while (an <= ad || (an % ad) == 0)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

     while (bn >= bd)
     {
        bn = Math.floor(Math.random()*11)+2;
        bd = Math.floor(Math.random()*11)+2;
     }

        var fractionA = new Fraction(bn,bd,false);
        var fractionB = new Fraction(an,ad,false);

        var answer = fractionA.divide(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);

        this.setShowAnswer(answer.getMixedNumber());

  this.setQuestion('What is ' + fractionA.getMixedNumber() + ' divided by ' + fractionB.getMixedNumber());

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_4',6.0804,'6.ns.a.1','divide mixed number by a fraction'); update item_types set progression = 6.0804 where id = '6.ns.a.1_4';
*/
var i_6_ns_a_1__4 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_4';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

     while (an <= ad || (an % ad) == 0)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

     while (bn >= bd)
     {
        bn = Math.floor(Math.random()*11)+2;
        bd = Math.floor(Math.random()*11)+2;
     }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.divide(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);

        this.setShowAnswer(answer.getMixedNumber());

  this.setQuestion('What is ' + fractionA.getMixedNumber() + ' divided by ' + fractionB.getMixedNumber());

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_3',6.0803,'6.ns.a.1','divide mixed number by a mixed number');update item_types set progression = 6.0803 where id = '6.ns.a.1_3';
*/
var i_6_ns_a_1__3 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_3';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

     while (an <= ad || (an % ad) == 0)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

     while (bn <= bd || (bn % bd) == 0)
     {
        bn = Math.floor(Math.random()*11)+2;
        bd = Math.floor(Math.random()*11)+2;
     }

        var fractionA = new Fraction(bn,bd,false);
        var fractionB = new Fraction(an,ad,false);

        var answer = fractionA.divide(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);

        this.setShowAnswer(answer.getMixedNumber());

  this.setQuestion('What is ' + fractionA.getMixedNumber() + ' divided by ' + fractionB.getMixedNumber());

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_2',6.0802,'6.ns.a.1','divide fraction by a fraction'); update item_types set progression = 6.0802 where id = '6.ns.a.1_2';
*/
var i_6_ns_a_1__2 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_2';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

     while (an >= ad)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

     while (bn >= bd)
     {
        bn = Math.floor(Math.random()*11)+2;
        bd = Math.floor(Math.random()*11)+2;
     }

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);

        var answer = fractionA.divide(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);

        this.setShowAnswer(answer.getMixedNumber());

  this.setQuestion('What is ' + fractionA.getMixedNumber() + ' divided by ' + fractionB.getMixedNumber());

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_1',6.0801,'6.ns.a.1','word problem. divide mixed number by a mixed number'); update item_types set progression = 6.0801 where id = '6.ns.a.1_1';
*/
var i_6_ns_a_1__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_1';
	
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
        this.mNameOne     = this.mNameMachine.getName();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

      while (an <= ad || (an % ad) == 0 || (an / ad) < 2)
      {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
      }
      
      var total = new Fraction(1,1,false);;
      var answer = 0;
      var fractionA;
      var fractionB;
      
      while (total.mDenominator == 1)
      {
        answer = Math.floor(Math.random()*7)+6;

        fractionA = new Fraction(an,ad,false);
        fractionB = new Fraction(answer,1,false);

        total = fractionA.multiply(fractionB);
       }

        this.setAnswer('' + answer,0);

        this.setShowAnswer(answer);

  this.setQuestion(this.mNameOne + ' has a roll of ribbon containing ' + total.getMixedNumber() + ' yards of ribbon. How many pieces of ribbon ' + fractionA.getMixedNumber() + ' yards long can ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' cut from the roll?');

},


	showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                this.mCorrectAnswerLabel.setPosition(425,250);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }


});



