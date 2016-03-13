
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.8_3',6.2203,'6.ns.c.8','Locate points with rational coordinates'); update item_types set progression = 6.2203 where id = '6.ns.c.8_3';
*/
var i_6_ns_c_8__3 = new Class(
{
Extends: GraphItemQuad5,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.8_3';

//BUTTON A
                this.mButtonA.setPosition(530,220);
                this.mButtonB.setPosition(530,280);
                this.mButtonC.setPosition(530,340);

                this.mButtonA.setSize(200,50);
                this.mButtonB.setSize(200,50);
                this.mButtonC.setSize(200,50);
             
                this.setAnswer('|4|+|-8|',0);

                this.mButtonA.setAnswer('|4|+|-8|');
                this.mButtonB.setAnswer('|2|+|-6|');
                this.mButtonC.setAnswer('|-6|+|-4|');

//var a = '|4| + |-8|';
//console.log(a);

clickflag = true;

var x = [-9,-3,-6,-6,4,4,-3, 5];
var y = [ 7, 7, 4,-8,8,2,-3,-3];
var l = ['A','B','C','D','E','F','G','H'];
var x1;
var y1;
var xPos = [];
var yPos = [];

for (j=0;j<4;j++) {

  for (i=0;i<2;i++) {

   var z = j*2;

   x1 = x[i+z]+10;
   y1 = y[i+z]+10;

   this.circles[x1][y1].attr({fill: "white", stroke: "none", opacity: 1}).scale(.2,.2);
   this.circles[x1][y1].data("click", 1);

   yPos[i+z] = this.circles[x1][y1].data("yPos");
   xPos[i+z] = this.circles[x1][y1].data("xPos");

   var letter = new Shape(10,10,xPos[i+z]+10,yPos[i+z]+15,this.mSheet.mGame,"","","");
        
   letter.setText(l[i+z]);

   this.addShape(letter);
  }

  if(yPos[j*2] == yPos[j*2+1])
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'H', xPos[j*2+1]]).attr({
        stroke : 'green',"stroke-width":3
    }).toBack();
  }
  else
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'V', yPos[j*2+1]]).attr({
        stroke : 'green',"stroke-width":2
    }).toBack();

  }

}


if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
//this.setAnswer('32',0);
//this.setAnswer(y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('To find the length of segment CD, you use which calculation?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,120);

//this.mCorrectAnswerLabel.setSize(200, 75);
//this.mCorrectAnswerLabel.setPosition(630,200);

}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.8_2',6.2202,'6.ns.c.8','Locate points with rational coordinates'); update item_types set progression = 6.2202 where id = '6.ns.c.8_2';
*/
var i_6_ns_c_8__2 = new Class(
{
Extends: GraphItemQuad3,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.8_2';


this.mAnswerTextBox.setPosition(575,210);
//this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
//this.mAnswerTextBox2.setSize(50,50);

this.mHeadingAnswerLabel2 = new Shape(100,50,530,30,this.mSheet.mGame,"","","");
 
//this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('units'); 
//this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(620,210); 
//this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

this.addShape(this.mHeadingAnswerLabel2);

clickflag = true;

var x = [-9,-3,-6,-6,4,4,-3, 5];
var y = [ 7, 7, 4,-8,8,2,-3,-3];
var l = ['A','B','C','D','E','F','G','H'];
var x1;
var y1;
var xPos = [];
var yPos = [];

for (j=0;j<4;j++) {

  for (i=0;i<2;i++) {

   var z = j*2;

   x1 = x[i+z]+10;
   y1 = y[i+z]+10;

   this.circles[x1][y1].attr({fill: "white", stroke: "none", opacity: 1}).scale(.2,.2);
   this.circles[x1][y1].data("click", 1);

   yPos[i+z] = this.circles[x1][y1].data("yPos");
   xPos[i+z] = this.circles[x1][y1].data("xPos");

   var letter = new Shape(10,10,xPos[i+z]+10,yPos[i+z]+15,this.mSheet.mGame,"","","");
        
   letter.setText(l[i+z]);

   this.addShape(letter);
  }

  if(yPos[j*2] == yPos[j*2+1])
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'H', xPos[j*2+1]]).attr({
        stroke : 'yellow'
    }).toBack();
  }
  else
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'V', yPos[j*2+1]]).attr({
        stroke : 'yellow'
    }).toBack();

  }

}


if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
this.setAnswer('32',0);
//this.setAnswer(y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('The combined lengths of AB, CD, EF and GH are equal to what value?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,120);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(630,200);

},


 showCorrectAnswer: function()
    {

      this.parent();

      this.mHeadingAnswerLabel2.setVisibility(false);

      this.mUserAnswerLabel.setVisibility(false);

/*
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,300);

			  this.mCorrectAnswerLabel.setText('correct answer = red dot'); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }

*/
    }


});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.8_1',6.2201,'6.ns.c.8','Locate points with rational coordinates'); update item_types set progression = 6.2201 where id = '6.ns.c.8_1';
*/
var i_6_ns_c_8__1 = new Class(
{
Extends: GraphItemQuad3,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.8_1';


this.mAnswerTextBox.setPosition(575,210);
//this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
//this.mAnswerTextBox2.setSize(50,50);

this.mHeadingAnswerLabel2 = new Shape(100,50,530,30,this.mSheet.mGame,"","","");
 
//this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('units'); 
//this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(620,210); 
//this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

this.addShape(this.mHeadingAnswerLabel2);

clickflag = true;

var x = [-9,-3,-6,-6,4,4,-3,5];
var y = [7,7,4,-8,8,2,-3,-3];
var l = ['A','B','C','D','E','F','G','H'];
var x1;
var y1;
var xPos = [];
var yPos = [];

for (j=0;j<4;j++) {

  for (i=0;i<2;i++) {

   var z = j*2;

   x1 = x[i+z]+10;
   y1 = y[i+z]+10;

   this.circles[x1][y1].attr({fill: "white", stroke: "none", opacity: 1}).scale(.2,.2);
   this.circles[x1][y1].data("click", 1);

   yPos[i+z] = this.circles[x1][y1].data("yPos");
   xPos[i+z] = this.circles[x1][y1].data("xPos");

   var letter = new Shape(10,10,xPos[i+z]+10,yPos[i+z]+15,this.mSheet.mGame,"","","");
        
   letter.setText(l[i+z]);

   this.addShape(letter);
  }

  if(yPos[j*2] == yPos[j*2+1])
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'H', xPos[j*2+1]]).attr({
        stroke : 'yellow'
    }).toBack();
  }
  else
  {
    var q = this.raphael.path(['M', xPos[j*2], yPos[j*2], 'V', yPos[j*2+1]]).attr({
        stroke : 'yellow'
    }).toBack();

  }

}


if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
this.setAnswer('6',0);
//this.setAnswer(y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('Two segments have the same length. What is that length?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,120);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(630,200);

}


});


