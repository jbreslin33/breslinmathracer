/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_7',5.2507,'5.md.b.2','graphs');
*/

var i_5_md_b_2__7 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_7';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;
var sum = 71;
//pick starting x for plot
//var a = Math.floor(Math.random()*3 + 1);

while (sum > 30 || sum == 23 || sum == 15 || sum == 7) {

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 7; i++) {

    r = (Math.floor(Math.random()*7) + 1);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  sum = 0;

  for (var j = 0; j < 7; j++) {
    sum = sum + pointsX[j];
  }
}

var fractionA = new Fraction(sum,8);
var fractionB = new Fraction(31,8);
var answer = fractionB.subtract(fractionA);

	//var answer = fractionA;
	answer.reduce();

  this.setAnswer('' + answer.getMixedNumber(),0);

 this.setQuestion('' + this.ns.mNameOne + ' has 7 patches of fabric which are shown in the line plot below. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to make a patchwork sweater, which requires ' + fractionB.getMixedNumber() + ' yards of fabric. How much more fabric will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need?');

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_6',5.2506,'5.md.b.2','graphs');
*/

var i_5_md_b_2__6 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_6';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;
var sum = 71;
//pick starting x for plot
//var a = Math.floor(Math.random()*3 + 1);

while (sum < 24 || sum == 31 || sum == 39 || sum == 47 || sum == 55 || sum == 63 || sum == 71 || sum == 79 || sum == 87 || sum == 95) {

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 7; i++) {

    r = (Math.floor(Math.random()*8) + 1);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  sum = 0;

  for (var j = 0; j < 7; j++) {
    sum = sum + pointsX[j];
  }
}

var fractionA = new Fraction(sum,8);
var fractionB = new Fraction(23,8);
var answer = fractionA.subtract(fractionB);

	//var answer = fractionA;
	answer.reduce();

  this.setAnswer('' + answer.getMixedNumber(),0);

 this.setQuestion('' + this.ns.mNameOne + ' has 7 patches of fabric which are shown in the line plot below. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to make a patchwork sweater, which requires ' + fractionB.getMixedNumber() + ' yards of fabric. How much fabric will be left over?');

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_5',5.2505,'5.md.b.2','graphs');
*/

var i_5_md_b_2__5 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_5';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;

var a = Math.floor(Math.random()*5 + 1);

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 12; i++) {

    r = (Math.floor(Math.random()*6) + a);
    if(r == 8)
      r = 7;
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  var high = 0;

  for (var j = 0; j < 12; j++) {
    if (pointsX[j] > high)
      high = pointsX[j];
  }

var fractionA = new Fraction(high,8);

	var answer = fractionA;
	answer.reduce();

  this.setAnswer('' + answer.getMixedNumber(),0);

 this.setQuestion('Twelve members of the track team ran the distances (in miles) shown in the line plot below. What is the longest distance that any one member ran?');

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_4',5.2504,'5.md.b.2','graphs');
*/

var i_5_md_b_2__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_4';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 10; i++) {

    r = (Math.floor(Math.random()*8) + 2);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  var answer = 0;

  for (var j = 0; j < 10; j++) {
    if (pointsX[j] < 6)
      answer = answer + 1;
  }

 this.setQuestion('The line plot below shows the weights (in pounds) of the bags of strawberries that ' + this.ns.mNameOne + ' sold to customers today. How many bags weighed 5/8 pounds or less?');

  this.setAnswer('' + answer,0);

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_3',5.2503,'5.md.b.2','graphs');
*/

var i_5_md_b_2__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_3';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 10; i++) {

    r = (Math.floor(Math.random()*8) + 1);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  var answer = 0;

  for (var j = 0; j < 10; j++) {
    if (pointsX[j] > 4)
      answer = answer + 1;
  }

 this.setQuestion('The line plot below shows the weights (in pounds) of the bags of grapes that ' + this.ns.mNameOne + ' sold to customers today. How many bags weighed more than 1/2 pounds?');

  this.setAnswer('' + answer,0);

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_2',5.2502,'5.md.b.2','graphs');
*/

var i_5_md_b_2__2 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
    this.parent(sheet,320,100,200,95,100,50,510,137,100,50,625,100, 100,50,625,175,true);


        this.mType = '5.md.b.2_2';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;
var sum = 72;
//pick starting x for plot
var a = Math.floor(Math.random()*3 + 1);

while (sum == 72 || sum == 64 || sum == 32 || sum == 40 || sum == 48 || sum == 56 || sum == 16 || sum == 8 || sum == 24 || sum == 80 || sum == 88 || sum == 96 || sum == 104) {

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 10; i++) {

    r = (Math.floor(Math.random()*8) + a);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  sum = 0;

  for (var j = 0; j < 10; j++) {
    sum = sum + pointsX[j];
  }
}

// Joe has 10 square ceramic tiles. The line plot below shows the side length of each tile in feet. What is the sum of the lengths of the 10 tiles in feet?

 this.setQuestion('' + this.ns.mNameOne + ' has 10 square ceramic tiles. The line plot below shows the side length of each tile in feet. What is the sum of the lengths of the 10 tiles in feet?');

var fractionA = new Fraction(sum,8);

	var answer = fractionA;
	answer.reduce();

  this.setAnswer('' + answer.getMixedNumber(),0);

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});





/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.b.2_1',5.2501,'5.md.b.2','graphs');
*/

var i_5_md_b_2__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
      this.parent(sheet,350,50,200,95,100,50,425,100,100,50,425,175,true);

        this.mType = '5.md.b.2_1';

      this.ns = new NameSampler();

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

var rX1 = 10;
var rY1 = 50;
var rX2 = 330;
var rY2 = 350;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var pointsX = [];
var pointsY = [];
var r = 0;
var sum = 0;
//pick starting x for plot
var a = Math.floor(Math.random()*3 + 1);

while (sum != 72 && sum != 64 && sum != 32 && sum != 40 && sum != 48 && sum != 56) {

  //keep track of how many dots at each x
  var plotX = [0,0,0,0,0,0,0,0,0,0,0];

  //pick random points to make plot
  for (var i = 0; i < 10; i++) {

    r = (Math.floor(Math.random()*8) + a);
    pointsX[i] = r;
    pointsY[i] = plotX[r] + 1;
    plotX[r] = pointsY[i];
  }
  
  sum = 0;

  for (var j = 0; j < 10; j++) {
    sum = sum + pointsX[j];
  }
}

// Joe has 10 bags of peanuts. The line plot below shows the weight of each bag in pounds. He wants to redistribute the almonds so that each bag weighs the same. What will be the weight of each bag?

 this.setQuestion('' + this.ns.mNameOne + ' has 10 bags of peanuts. The line plot below shows the weight of each bag in pounds. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to redistribute the peanuts so that each bag weighs the same. What will be the weight of each bag?');

var fractionA = new Fraction(sum,80);

	var answer = fractionA;
	answer.reduce();

  this.setAnswer('' + answer.getString(),0);

//create line plot
var chart = new LineChartThree (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,pointsX,pointsY,range,rX1,rY1,"#000000",false);

this.addQuestionShape(chart);

this.mQuestionLabel.setSize(300,100);
this.mQuestionLabel.setPosition(180,80);

}

});



