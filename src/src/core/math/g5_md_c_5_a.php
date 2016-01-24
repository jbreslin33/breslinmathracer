
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_4',5.2804,'5.md.c.5.a','');
*/
var i_5_md_c_5_a__4 = new Class(
{
Extends: TextItem2,
initialize: function(sheet)
{
 	this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.md.c.5.a_4';
        this.ns = new NameSampler();
        var rx = 10;
        var ry = 120;
        this.mRaphael = Raphael(rx,ry,500,600);

	//TextItem2
 	this.mAnswerTextBox.setPosition(225,180);
        this.mAnswerTextBox2.setPosition(550,140);
        this.mAnswerTextBox.setSize(75,25);
        this.mAnswerTextBox2.setSize(75,25);

        this.mHeadingAnswerLabel.setText('Write an expression you can use to check answer.');
        this.mHeadingAnswerLabel.setPosition(525,70);
        this.mHeadingAnswerLabel.setSize(200,50);

        this.mQuestionLabel.setSize(220,250);
        this.mQuestionLabel.setPosition(225,180);


	//----------Prism 1
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

        answer = w2*h2*d2;

        this.setQuestion('The right rectangular prism is made of centimeter cubes. What is the volume of the prism in cubic centimeters?');
        this.setAnswer('' + answer,0);

	//----------Prism 2 
	// position of rubix cube
	var x_b = 300;
	var y_b = 90;

	// dimensions of a single cube
	var w1_b = Math.floor(Math.random()*4)+1;
	var h1_b = Math.floor(Math.random()*4)+1;
	var d1_b = Math.floor(Math.random()*4)+1;

	var volume = w1_b*h1_b*d1_b; //Math.floor(Math.random()*3+1);

	w1_b = w1_b*40;
	h1_b = h1_b*40;
	d1_b = d1_b*40;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x_b,y_b,w1_b,h1_b,d1_b,.5,.5,.5,"#000",1,false,'feet');
	this.addQuestionShape(cube);


	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);

}


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_3',5.2803,'5.md.c.5','');
*/
var i_5_md_c_5_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.a_3';
        this.ns = new NameSampler();
var answer = Math.floor(Math.random()*4+12);
var b = Math.floor(Math.random()*3+2);
var c = answer*b;

this.setQuestion(' A planting bed in the shape of a right rectangular prism has a volume of ' + c + ' cubic feet. A large bag of potting soil contains ' + b + ' cubic feet of soil. How many bags of soil are needed to fill the planting bed?');

this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);

}

             
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_2',5.2802,'5.md.c.5','');
*/
var i_5_md_c_5_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '5.md.c.5.a_2';
        this.ns = new NameSampler();

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

var volume = w1*h1*d1; //Math.floor(Math.random()*3+1);

w1 = w1*40;
h1 = h1*40;
d1 = d1*40;

var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,'feet');
this.addQuestionShape(cube);

     
var a = Math.floor(Math.random()*11+120);
var b = Math.floor(Math.random()*5+8);

answer = volume*62;

this.setQuestion('A water tank is shaped like a right rectangular prism and has the dimensions shown below. If the tank is full and a cubic foot of water weighs 62 pounds, what is the weight of the water in the tank in pounds?');
        this.setAnswer('' + answer,0);

this.mUserAnswerLabel.setPosition(625,150);
this.mCorrectAnswerLabel.setPosition(625,250);
}

             
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.c.5.a_1',5.2801,'5.md.c.5','');
*/
var i_5_md_c_5_a__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);
        this.mType = '5.md.c.5.a_1';
     
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

	answer = w1*h1*d1; //Math.floor(Math.random()*3+1);
	w1 = w1*40;
	h1 = h1*40;
	d1 = d1*40;

	var cube = new Cube(this,this.mSheet.mGame,this.mRaphael,rx,ry,x,y,w1,h1,d1,.5,.5,.5,"#000",1,false,this.mDist2);
	this.addQuestionShape(cube);

        this.setQuestion('What is the volume of the right rectangular prism in cubic ' + this.mDist2 + '?');
        this.setAnswer('' + answer,0);

	this.mUserAnswerLabel.setPosition(625,150);
	this.mCorrectAnswerLabel.setPosition(625,250);
}
});
