/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_1',6.0401,'6.rp.a.3.b','Table. Ratio. ' );
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
    this.b = Math.floor(Math.random()*4)+2;
    this.c = this.a / this.b;

this.b = new Fraction('1',this.b,false);

  this.setQuestion('At the market, ' + this.mFruit + ' cost $' + this.a + ' per pound. ' + this.ns.mNameOne + ' bought ' + this.b.getString() + ' of a pound of ' + this.mFruit + '. How much did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend?'); 

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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_2',6.0402,'6.rp.a.3.b','Table. Ratio. ' );
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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_3',6.0403,'6.rp.a.3.b','Table. Ratio. ' );
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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_4',6.0404,'6.rp.a.3.b','Table. Ratio. ' );
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

  this.setQuestion('A ' + this.a + ' gallon bottle of bleach costs $' + this.b + '. What is the price per quart?'); 

answer = this.c;  

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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_5',6.0405,'6.rp.a.3.b','Table. Ratio. ' );
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
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.b_6',6.0406,'6.rp.a.3.b','Table. Ratio. ' );
*/

var i_6_rp_a_3_b__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.b_6'; 
              
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


