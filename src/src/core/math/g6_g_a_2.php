/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_9',6.3709,'6.g.a.2',''); update item_types SET progression = 6.3709 where id = '6.g.a.2_9';
*/
var i_6_g_a_2__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_9';
    	this.mStripCommas = true;

  var rx = 10;
  var ry = 120;
  this.mRaphael = Raphael(rx,ry,550,600);
        
  	// position of rubix cube
	var x = 35;
	var y = 220;

	// dimensions of a single cube
	var w1 = 40;
	var h1 = 40;
	var d1 = 40;

	// dimensions of rubix cube
	var w2 = 3; //Math.floor(Math.random()*3+2);
	var h2 = 3; //Math.floor(Math.random()*3+2);
	var d2 = 3; //Math.floor(Math.random()*3+2);

	var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

  var fractionA = new Fraction(1,3,false);

  var w1 = 40;
	var h1 = 40;
	var d1 = 40;

  this.setQuestion('' + 'Small cubes with edges ' + fractionA.getString() + ' yard long are stacked so there are ' + h2 + ' layers of cubes. Each layer is ' + d2 + ' cubes long and ' + w2 + ' cubes wide. What is the volume of the stack in cubic yards?');

  this.setAnswer('1',0);
  
},

showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.answer);
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                //this.showUserAnswer();
        },

});




/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_8',6.3708,'6.g.a.2',''); update item_types SET progression = 6.3708 where id = '6.g.a.2_8';
*/
var i_6_g_a_2__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_8';

        this.mChopWhiteSpace = false;

        this.mAnswerTextBox.setSize(50,50);
			  this.mAnswerTextBox.setPosition(170,230);

        this.mQuestionLabel2 = new Shape(100,50,100,250,this.mSheet.mGame,"","","");
        this.addShape(this.mQuestionLabel2);
        //this.mQuestionLabel2.mCollidable = false;
        //this.mQuestionLabel2.mCollisionOn = false;
		    this.mQuestionLabel2.setText('The volume is ');

        this.mQuestionLabel3 = new Shape(100,50,250,250,this.mSheet.mGame,"","","");
        this.addShape(this.mQuestionLabel3);
       // this.mQuestionLabel3.mCollidable = false;
        //this.mQuestionLabel3.mCollisionOn = false;
		    this.mQuestionLabel3.setText('times as great ');


        this.setQuestion('How does doubling each dimension of a rectangular prism affect the volume?');
        this.setAnswer('' + '8',0);
        //this.setAnswer('' + this.answer,1);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_7',6.3707,'6.g.a.2',''); update item_types SET progression = 6.3707 where id = '6.g.a.2_7';
*/
var i_6_g_a_2__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_7';

        this.mChopWhiteSpace = false;
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

	// position of rubix cube
	var x = 35;
	var y = 90;

	// dimensions of a single cube
	var w1 = 5; //Math.floor(Math.random()*4)+1;
	var h1 = 4; //Math.floor(Math.random()*4)+1;
	var d1 = 2; //Math.floor(Math.random()*4)+1;

 // w1 = w1.toFixed(1); 
 // h1 = h1.toFixed(1);
 // d1 = d1.toFixed(1);
       
	this.answer = w1*h1*d1; //Math.floor(Math.random()*3+1);
 
  //console.log(answer);

  w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);

  var hLabelUnits = '' + '2x';
  cube.hLabel.setText(hLabelUnits);

  var wLabelUnits = '' + '2x + 1';
  cube.wLabel.setText(wLabelUnits);

  var dLabelUnits = '' + 'x';
  cube.dLabel.setText(dLabelUnits);


        this.setQuestion('If x = 2cm, what is the volume of the right rectangular prism in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + this.answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},

});






/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_6',6.3706,'6.g.a.2',''); update item_types SET progression = 6.3706 where id = '6.g.a.2_6';
*/
var i_6_g_a_2__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_6';
  
        this.mChopWhiteSpace = false;
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

 var w1 = 2; //Math.floor(Math.random()*4)+2;
 var h1 = 2; //Math.floor(Math.random()*2)+1;
 var d1 = 2; //Math.floor(Math.random()*3)+1;      

	this.answer1 = w1*h1*d1; //Math.floor(Math.random()*3+1);

  w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

  var offset = h1;

  // position of rubix cube
	var x = 35;
	var y = 170;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);

  var hLabelUnits = '' + h1/40 + ' ' + this.mDist2;
  cube.hLabel.setText(hLabelUnits);

  var wLabelUnits = '' + w1/40 + ' ' + this.mDist2;
  cube.wLabel.setText(wLabelUnits);

  var dLabelUnits = '' + d1/40 + ' ' + this.mDist2;
  cube.dLabel.setText(dLabelUnits);

  x = 35;
  y = 210 - offset;

 w1 = 1; //Math.floor(Math.random()*4)+2;
 h1 = 1; //Math.floor(Math.random()*2)+1;
 d1 = 1; //Math.floor(Math.random()*3)+1;      

	this.answer2 = w1*h1*d1; //Math.floor(Math.random()*3+1);

  w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	var cube2 = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube2);

  var hLabelUnits = '' + h1/40 + ' ' + this.mDist2;
  cube2.hLabel.setText(hLabelUnits);
  //cube2.hLabel.setSize(50,25);
  cube2.hLabel.setPosition(cube2.hLabelPosX,cube2.hLabelPosY - 20);


  var wLabelUnits = '' + w1/40 + ' ' + this.mDist2;
  cube2.wLabel.setText(wLabelUnits);
 // cube2.wLabel.setSize(50,25);
  cube2.wLabel.setPosition(cube2.wLabelPosX+10,cube2.wLabelPosY);


  var dLabelUnits = '' + d1/40 + ' ' + this.mDist2;
  cube2.dLabel.setText(dLabelUnits);
 // cube2.dLabel.setSize(50,25);
  cube2.dLabel.setPosition(cube2.dLabelPosX,cube2.dLabelPosY - 20);

  this.answer = this.answer1 + this.answer2;


        this.setQuestion('What is the total volume of the figure in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + this.answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},
             
});




/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_5',6.3705,'6.g.a.2',''); update item_types SET progression = 6.3705 where id = '6.g.a.2_5';
*/
var i_6_g_a_2__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_5';

        this.mChopWhiteSpace = false;
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

	// position of rubix cube
	var x = 35;
	var y = 90;

	// dimensions of a single cube
	var w1 = Math.floor(Math.random()*4)+1;
	var h1 = Math.floor(Math.random()*4)+1;
	var d1 = Math.floor(Math.random()*4)+1;

	this.answer = w1*h1*d1; //Math.floor(Math.random()*3+1);

  var base = w1*d1;

  w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40; 

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);

  var hLabelUnits = '' + h1/40 + ' ' + this.mDist2;
  cube.hLabel.setText(hLabelUnits);

  var wLabelUnits = 'Area of Base = ' + base + ' square  ' + this.mDist2;
  cube.wLabel.setText(wLabelUnits);
  cube.wLabel.setSize(200,25);
  cube.wLabel.setPosition(cube.wLabelPosX + 50,cube.wLabelPosY);

  var dLabelUnits = '' + d1/40 + ' ' + this.mDist2;
  cube.dLabel.setText('');


        this.setQuestion('What is the volume of the right rectangular prism in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + this.answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},

             
});





/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_4',6.3704,'6.g.a.2',''); update item_types SET progression = 6.3704 where id = '6.g.a.2_4';
*/
var i_6_g_a_2__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_4';

        this.mChopWhiteSpace = false;
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

	// position of rubix cube
	var x = 35;
	var y = 90;

	// dimensions of a single cube
	var w1 = Math.floor(Math.random()*4)+1;
	var h1 = Math.floor(Math.random()*4)+1;
	var d1 = Math.floor(Math.random()*4)+1;

  //var den = Math.floor(Math.random()*3)+2;

  var w1 = Math.random()*3+1;
  var h1 = Math.random()*3+1;
  var d1 = Math.random()*3+1;

  w1 = w1.toFixed(1); 
  h1 = h1.toFixed(1);
  d1 = d1.toFixed(1);
        
 // var c = 1.0*a * 1.0*b;
 // c = c.toFixed(2); 

	this.answer = w1*h1*d1; //Math.floor(Math.random()*3+1);
  this.answer = this.answer.toFixed(3);

  //console.log(answer);

  //this.fractionD = new Fraction(w1*h1*d1,den*den*den,false);
  //this.fractionD.reduce();

console.log(w1);
console.log(h1);
console.log(d1);

  w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);

  var hLabelUnits = '' + h1/40 + ' ' + this.mDist2;
  cube.hLabel.setText(hLabelUnits);

  var wLabelUnits = '' + w1/40 + ' ' + this.mDist2;
  cube.wLabel.setText(wLabelUnits);

  var dLabelUnits = '' + d1/40 + ' ' + this.mDist2;
  cube.dLabel.setText(dLabelUnits);


        this.setQuestion('What is the volume of the right rectangular prism in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + this.answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},



showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.answer);
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                //this.showUserAnswer();
        },




checkUserAnswer: function()
	{
console.log('xxxxxxxxxxx');
			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 

  console.log(userAnswer);
  console.log(correctAnswer);
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},



});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_3',6.3703,'6.g.a.2',''); update item_types SET progression = 6.3703 where id = '6.g.a.2_3';
*/
var i_6_g_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_3';

        this.mChopWhiteSpace = false;
     
        this.mNameMachine = new NameMachine();
        this.mDist1     = this.mNameMachine.getDistanceIncrement();
        this.mDist2     = this.mNameMachine.getDistanceAbbreviation(this.mDist1);

        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,400,600);

	// position of rubix cube
	var x = 35;
	var y = 90;

	// dimensions of a single cube
	var w1 = Math.floor(Math.random()*4)+1;
	var h1 = Math.floor(Math.random()*4)+1;
	var d1 = Math.floor(Math.random()*4)+1;

  var den = Math.floor(Math.random()*3)+2;

	answer = (w1*h1*d1)/(den*den*den); //Math.floor(Math.random()*3+1);

  //console.log(answer);

  this.fractionD = new Fraction(w1*h1*d1,den*den*den,false);
  this.fractionD.reduce();

	w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);



  this.fractionA = new Fraction(h1/40,den,false);

  this.fractionA.reduce();

  var hLabelUnits = '' + this.fractionA.getMixedNumber() + ' ' + this.mDist2;
  cube.hLabel.setText(hLabelUnits);



  this.fractionB = new Fraction(w1/40,den,false);

  this.fractionB.reduce();

  var wLabelUnits = '' + this.fractionB.getMixedNumber() + ' ' + this.mDist2;
  cube.wLabel.setText(wLabelUnits);



  this.fractionC = new Fraction(d1/40,den,false);

  this.fractionC.reduce();

  var dLabelUnits = '' + this.fractionC.getMixedNumber() + ' ' + this.mDist2;
  cube.dLabel.setText(dLabelUnits);



        this.setQuestion('What is the volume of the right rectangular prism in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
},



showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.fractionD.getMixedNumber());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                //this.showUserAnswer();
        },




checkUserAnswer: function()
	{
console.log('xxxxxxxxxxx');
			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 

  console.log(userAnswer);
  console.log(correctAnswer);
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},



});





/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_2',6.3702,'6.g.a.2',''); update item_types SET progression = 6.3702 where id = '6.g.a.2_2';
*/
var i_6_g_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_2';
    	this.mStripCommas = true;

  //this.mQuestionLabel.setSize(300,50);
  //this.mQuestionLabel.setPosition(170,75);

  this.mQuestionLabel.setSize(300,250);
  this.mQuestionLabel.setPosition(500,170);

  this.mAnswerTextBox.setSize(75,50);
	this.mAnswerTextBox.setPosition(500,300);

  var rx = 10;
  var ry = 120;
  this.mRaphael = Raphael(rx,ry,450,600);
        
  	// position of rubix cube
	var x = 35;
	var y = 220;

	// dimensions of a single cube
	var w1 = 40;
	var h1 = 40;
	var d1 = 40;

	// dimensions of rubix cube
	var w2 = Math.floor(Math.random()*3+2);
	var h2 = Math.floor(Math.random()*3+2);
	var d2 = Math.floor(Math.random()*3+2);

	var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

/*	
	//heading
	this.mHeadingAnswerLabel.setPosition(465,50);
	this.mHeadingAnswerLabel2.setPosition(560,50);
	this.mHeadingAnswerLabel3.setPosition(650,50);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);

	
		this.mHeadingAnswerLabel.setText('' + 'length');
		this.mHeadingAnswerLabel2.setText('' + 'width');
		this.mHeadingAnswerLabel3.setText('' + 'height');
	
	//text box
	this.mAnswerTextBox.setPosition(475,110);
	this.mAnswerTextBox2.setPosition(568,110);
	this.mAnswerTextBox3.setPosition(660,110);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);
*/

  var fractionA = new Fraction(1,12,false);

  var w1 = 40;
	var h1 = 40;
	var d1 = 40;

  var w = w2/12;
	var h = h2/12;
	var d = (w2*h2*d2)/12;
  var dd = w2*h2*d2;

  this.fractionB = new Fraction(dd,12,false);
  //this.fractionC = new Fraction(w2,12,false);
  //this.fractionD = new Fraction(h2,12,false);

  this.fractionB.reduce();
  //this.fractionC.reduce();
 // this.fractionD.reduce();

  this.setQuestion('' + 'Small cubes with size ' + fractionA.getString() + ' foot long are stacked so there are ' + h2 + ' layers of cubes. Each layer is ' + d2 + ' cubes long and ' + w2 + ' cubes wide. What are the dimensions of the stack in cubic feet?');

  this.setAnswer('' + d,0);
  //this.setAnswer('' + w,1);
 // this.setAnswer('' + h,2);

},

showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.fractionB.getMixedNumber());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                //this.showUserAnswer();
        },




checkUserAnswer: function()
	{

			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},


});






/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.2_1',6.3701,'6.g.a.2',''); update item_types SET progression = 6.3701 where id = '6.g.a.2_1';
*/
var i_6_g_a_2__1 = new Class(
{
Extends: TextItem3,
initialize: function(sheet)
{
	this.parent(sheet,250,200,150,145,100, 50,425,100);
        this.mType = '6.g.a.2_1';
    	this.mStripCommas = true;

  var rx = 10;
  var ry = 120;
  this.mRaphael = Raphael(rx,ry,550,600);
        
  	// position of rubix cube
	var x = 35;
	var y = 220;

	// dimensions of a single cube
	var w1 = 40;
	var h1 = 40;
	var d1 = 40;

	// dimensions of rubix cube
	var w2 = Math.floor(Math.random()*3+2);
	var h2 = Math.floor(Math.random()*3+2);
	var d2 = Math.floor(Math.random()*3+2);

	var rCube = new RubixCube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,.5,.5,.5,"#000",1,false);

	
	//heading
	this.mHeadingAnswerLabel.setPosition(465,50);
	this.mHeadingAnswerLabel2.setPosition(560,50);
	this.mHeadingAnswerLabel3.setPosition(650,50);

	this.mHeadingAnswerLabel.setSize(25,25);
	this.mHeadingAnswerLabel2.setSize(25,25);
	this.mHeadingAnswerLabel3.setSize(25,25);

	
		this.mHeadingAnswerLabel.setText('' + 'length');
		this.mHeadingAnswerLabel2.setText('' + 'width');
		this.mHeadingAnswerLabel3.setText('' + 'height');
	
	//text box
	this.mAnswerTextBox.setPosition(475,110);
	this.mAnswerTextBox2.setPosition(568,110);
	this.mAnswerTextBox3.setPosition(660,110);

	this.mAnswerTextBox.setSize(50,50);
	this.mAnswerTextBox2.setSize(50,50);
	this.mAnswerTextBox3.setSize(50,50);

  var fractionA = new Fraction(1,12,false);

  var w1 = 40;
	var h1 = 40;
	var d1 = 40;

  var w = w2/12;
	var h = h2/12;
	var d = d2/12;

  this.fractionB = new Fraction(d2,12,false);
  this.fractionC = new Fraction(w2,12,false);
  this.fractionD = new Fraction(h2,12,false);

  this.fractionB.reduce();
  this.fractionC.reduce();
  this.fractionD.reduce();

  this.setQuestion('' + 'Small cubes with size ' + fractionA.getString() + ' foot long are stacked so there are ' + h2 + ' layers of cubes. Each layer is ' + d2 + ' cubes long and ' + w2 + ' cubes wide. What are the dimensions of the stack in feet?');

  this.setAnswer('' + d,0);
  this.setAnswer('' + w,1);
  this.setAnswer('' + h,2);

},

showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.fractionB.getString() + ' ' + this.fractionC.getString() + ' ' + this.fractionD.getString());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                //this.showUserAnswer();
        },




checkUserAnswer: function()
	{

			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},


});
