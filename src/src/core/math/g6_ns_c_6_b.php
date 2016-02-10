/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.b_4',6.1304,'6.ns.c.6.b','Locate points with rational coordinates');
*/
var i_6_ns_c_6_b__4 = new Class(
{
Extends: GraphItemQuad2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.b_4';


this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

clickflag = true;

var x = Math.floor(Math.random()*19+1);
var y = Math.floor(Math.random()*19+1);

if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
this.setAnswer(-x1,0);
this.setAnswer(-y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('If the graphed point is reflected over the x-axis and then also reflected over the y-axis, what would be its new location?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,280);

 this.circles[x][y].attr({fill: "white", stroke: "none", opacity: 1}).scale(.5,.5);
          this.circles[x][y].data("click", 1);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(630,200);

}

});






/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.b_1',6.1301,'6.ns.c.6.b','Locate points with rational coordinates');
*/
var i_6_ns_c_6_b__1 = new Class(
{
Extends: GraphItemQuad2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.b_1';


this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

clickflag = true;

var x = Math.floor(Math.random()*19+1);
var y = Math.floor(Math.random()*19+1);

if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
this.setAnswer(-x1,0);
this.setAnswer(y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('If the graphed point is reflected over the y-axis, what would be its new location?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,280);

 this.circles[x][y].attr({fill: "white", stroke: "none", opacity: 1}).scale(.5,.5);
          this.circles[x][y].data("click", 1);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(630,200);

}


});








/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.b_2',6.1302,'6.ns.c.6.b','Locate points with rational coordinates');
*/
var i_6_ns_c_6_b__2 = new Class(
{
Extends: GraphItemQuad2,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.b_2';


this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox2.setPosition(635,110);
this.mAnswerTextBox.setSize(50,50);
this.mAnswerTextBox2.setSize(50,50);
 
this.mHeadingAnswerLabel.setText('X');
this.mHeadingAnswerLabel2.setText('Y'); 
this.mHeadingAnswerLabel.setPosition(580,55);
this.mHeadingAnswerLabel2.setPosition(640,55); 
this.mHeadingAnswerLabel.setSize(25,25);
this.mHeadingAnswerLabel2.setSize(25,25); 

clickflag = true;

var x = Math.floor(Math.random()*19+1);
var y = Math.floor(Math.random()*19+1);

if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;


var answer = '' + x1 + ' ' + y1;
 
this.setAnswer(x1,0);
this.setAnswer(-y1,1);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('If the graphed point is reflected over the x-axis, what would be its new location?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,280);

 this.circles[x][y].attr({fill: "white", stroke: "none", opacity: 1}).scale(.5,.5);
          this.circles[x][y].data("click", 1);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(630,200);

}

});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.6.b_3',6.1303,'6.ns.c.6.b','Locate points with rational coordinates');
*/
var i_6_ns_c_6_b__3 = new Class(
{
Extends: GraphItemQuad3,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '6.ns.c.6.b_3';

this.mIgnoreCase = false;

this.mAnswerTextBox.setPosition(575,110);
this.mAnswerTextBox.setSize(50,50);

clickflag = true;

var x = Math.floor(Math.random()*19+1);
var y = Math.floor(Math.random()*19+1);

if (x == 10)
  x = 11;

var x1 = x-10;

if (y == 10)
  y = 11;

var y1 = y-10;

var quad;

if(y1 > 0)
{
  if(x1 > 0)
    quad = 1;
  else
    quad = 2;
}
else
{
  if(x1 > 0)
    quad = 4;
  else
    quad = 3;
}

var answer = '' + x1 + ' ' + y1;
 
this.setAnswer(quad,0);

var answer2 = '('+x1+','+y1+')';

this.pointsX = [2,3,5,7,8];
this.pointsY = [8,3,6,3,8];
  // this.setAnswer('W',0);
  // this.setAnswer('w',1);
   
this.setQuestion('The graphed point is located in which quadrant?');

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(625,280);

 this.circles[x][y].attr({fill: "white", stroke: "none", opacity: 1}).scale(.5,.5);
          this.circles[x][y].data("click", 1);

},


 showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
         this.mCorrectAnswerLabel.setSize(200, 75);
        this.mCorrectAnswerLabel.setPosition(630,200);

        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);

		  }
    }


});

