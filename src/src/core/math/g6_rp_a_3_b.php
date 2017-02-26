
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_6',6.0506,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0506 where id = '6.rp.a.3.b_6';
*/

var i_6_rp_a_3_b__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_6'; 

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();

var m;              
var a = Math.floor(Math.random()*2)+2;
var m = Math.floor(Math.random()*2)+2;
var b = a * m;
var m = Math.floor(Math.random()*2)+2;
var c = b * m;

var answer = c / (b/a);

var r = Math.floor(Math.random()*3);


if(r == 0)
{
this.setQuestion(this.ns.mNameOne + ' took a total of ' + b + ' quizzes over the course of ' + a + ' weeks. How many weeks of school will ' + this.ns.mNameOne + ' have to attend this quarter before ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will have taken a total of ' + c + ' quizzes? Solve using unit rates.');  
}
if(r == 1)
{
this.setQuestion(this.ns.mNameOne + ' earned a total of ' + b + ' dollars by selling ' + a + ' cups of lemonade. How many cups of lemonade does ' + this.ns.mNameOne + ' need to sell in all to earn ' + c + ' dollars? Solve using unit rates.');
}
if(r == 2)
{
this.setQuestion(this.ns.mNameOne + ' read a total of ' + b + ' books over ' + a + ' months. How many months will it take ' + this.ns.mNameOne + ' to read ' + c + ' books? Solve using unit rates.');  
}

this.setAnswer('' + answer,0);

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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_5',6.0505,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0505 where id = '6.rp.a.3.b_5';
*/

var i_6_rp_a_3_b__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_5'; 
              
var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer;

    this.a = Math.floor(Math.random()*3)+2;
    this.b = Math.floor(Math.random()*3)+2;
    this.c = this.a * this.b;

    var things = [['laps','days','day'],['seats','rows','row'],['deliveries','hours','hour']];

    var r = Math.floor(Math.random()*3);

    this.thing1 = things[r][0];
    this.thing2 = things[r][1];
    this.thing3 = things[r][2];

  this.setQuestion('Find the unit rate. <br><br>' + this.c + ' ' + this.thing1 + ' in ' + this.b + ' ' + this.thing2 + ' = ? ' + this.thing1 + ' per ' + this.thing3); 

answer = this.a;  

this.setAnswer('' + answer,0);

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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_4',6.0504,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0504 where id = '6.rp.a.3.b_4';
*/

var i_6_rp_a_3_b__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_4';               

var answer;

var r = Math.floor(Math.random()*2);

    this.a = Math.floor(Math.random()*3)+2;
    this.c = (Math.random()*1)+1;
    this.c = this.c.toFixed(2);
    this.b = this.c*this.a*4;
    this.b = this.b.toFixed(2);

    this.d = Math.floor(Math.random()*3)+1;
    this.e = this.a * this.d;

    answer = this.c; 
    this.setAnswer('' + answer,0);

var r = Math.floor(Math.random()*3);

if (r == 0)
{
  this.setQuestion('A ' + this.a + ' gallon bottle of bleach costs $' + this.b + '. What is the price per quart?'); 
}
if (r == 1)
{
this.setQuestion('A ' + this.a + ' quart carton of juice costs $' + this.b + '. What is the price per cup?'); 
}
if (r == 2)
{
this.b = this.b*4; 

this.setQuestion('A ' + this.a + ' pound bag of fruit costs $' + this.b + '. What is the price per ounce?'); 
}

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_3',6.0503,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0503 where id = '6.rp.a.3.b_3';
*/

var i_6_rp_a_3_b__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_3';               

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();
		this.mFruit     = this.mNameMachine.getFruit();

var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer;

var r = Math.floor(Math.random()*2);


    this.mNameMachine = new NameMachine();
    
    this.ns = new NameSampler();
   
		this.mFruit     = this.mNameMachine.getFruit();


    this.a = (Math.floor(Math.random()*2)+3)*3;
    this.b = Math.floor(Math.random()*4)+2;
    this.c = this.a / this.b;
    this.d = Math.floor(Math.random()*3)+1;
    this.e = this.a * this.d;

this.b = new Fraction('1',this.b,false);

  this.setQuestion('At the market, ' + this.mFruit + ' cost $' + this.a + ' per pound. ' + this.ns.mNameOne + ' bought ' + this.d + this.b.getString() + ' pounds of ' + this.mFruit + '. How much did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend?'); 

answer = this.c + this.e;  
answer = answer.toFixed(2);


this.setAnswer('' + answer,0);

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_2',6.0502,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0502 where id = '6.rp.a.3.b_2';
*/

var i_6_rp_a_3_b__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_2';               

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();
		this.mFruit     = this.mNameMachine.getFruit();

var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer;

var r = Math.floor(Math.random()*2);

//yogurt       $5 per pound

    this.mNameMachine = new NameMachine();
   
    this.ns = new NameSampler();
   
		this.mVegetable     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();


    this.a = (Math.floor(Math.random()*2)+3)*3;
    //this.b = Math.floor(Math.random()*4)+2;
    this.b = (Math.random()*4)+4;
    this.b = this.b.toFixed(1);
    this.c = this.a * this.b;


  this.setQuestion('At the market, ' + this.mVegetable + ' cost $' + this.a + ' per pound. ' + this.ns.mNameOne + ' bought ' + this.b + ' pounds of ' + this.mVegetable + '. How much did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend?'); 

answer = this.c.toFixed(2);   


this.setAnswer('' + answer,0);

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);
},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_1',6.0501,'6.rp.a.3.b','Table. Ratio. ' ); update item_types set progression = 6.0501 where id = '6.rp.a.3.b_1';
*/

var i_6_rp_a_3_b__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_1';               

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();
		this.mFruit     = this.mNameMachine.getFruit();

var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer;

var r = Math.floor(Math.random()*2);

//yogurt       $5 per pound

    this.mNameMachine = new NameMachine();
   
    this.ns = new NameSampler();
   
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();


	this.a = (Math.floor(Math.random()*2)+3)*3;
	this.fa = new Fraction(this.a,1,false);

    	this.b = Math.floor(Math.random()*4)+2;
	this.fb = new Fraction(1,this.b,false);

	this.fc = this.fa.multiply(this.fb);

	var f = parseFloat(this.fc.mNumerator / this.fc.mDenominator);
	var answer = new Decimal(f);
	
		
  this.setQuestion('At the market, ' + this.mFruit + ' cost $' + this.a + ' per pound. ' + this.ns.mNameOne + ' bought ' + this.fb.getString() + ' of a pound of ' + this.mFruit + '. How much did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend?'); 

this.setAnswer('' + answer.getMoney(),0);

this.mQuestionLabel.setSize(280,250);
this.mQuestionLabel.setPosition(180,200);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(380,110);
this.mAnswerTextBox.setSize(50,50);

this.mHeadingAnswerLabel = new Shape(25,25,355,95,this.mSheet.mGame,"","","");
this.mHeadingAnswerLabel.setText('$');
this.addQuestionShape(this.mHeadingAnswerLabel);


},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: ' + '$' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + '$' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});

