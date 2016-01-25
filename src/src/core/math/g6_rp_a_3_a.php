/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.a_3',6.0303,'6.rp.a.3.a','Table. Ratio. ' );
*/

var i_6_rp_a_3_a__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.a_3';               

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();
		this.mFruit     = this.mNameMachine.getFruit();

var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer;

var r = Math.floor(Math.random()*2);

if(r == 0)
{
  this.setQuestion('Joan earns $8 for every 2 necklaces she sells. Billy earns $3 for every necklace he sells. Billy sold twice as many necklaces as Joan. How many necklaces must Billy sell so that he earns $20 more than Joan?'); 

  answer = 20;   
}
else
{
  this.setQuestion('Pete earns $10 for every 2 necklaces he sells. Sally earns $4 for every necklace she sells. Sally sold twice as many necklaces as Pete. How many necklaces must Sally sell so that she earns $15 more than Pete?');    

  answer = 10;
}

this.setAnswer('' + answer,0);

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(450,80);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,250);

this.mAnswerTextBox.setPosition(600,110);
this.mAnswerTextBox.setSize(50,50);

},



});





/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.a_2',6.0302,'6.rp.a.3.a','Table. Ratio. ' );
*/

var i_6_rp_a_3_a__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.a_2';               

    this.mNameMachine = new NameMachine();
    this.ns = new NameSampler();
    this.mNameOne     = this.mNameMachine.getName();
		this.mFruit     = this.mNameMachine.getFruit();

var a = Math.floor(Math.random()*2)+4;
var b = Math.floor(Math.random()*2)+2;
var c = a * (Math.floor(Math.random()*2)+3);

var answer = (c/a) * b;

this.setAnswer('' + answer,0);

this.setQuestion(this.ns.mNameOne + ' can pick ' + a + ' baskets of ' + this.mFruit + ' in ' + b + ' hours. How long will it take ' + this.ns.mNameOne + ' to pick ' + c + ' baskets of ' + this.mFruit + '?');    

this.mQuestionLabel.setSize(220,50);
this.mQuestionLabel.setPosition(450,80);

this.mCorrectAnswerLabel.setSize(200, 75);
this.mCorrectAnswerLabel.setPosition(500,300);

this.mUserAnswerLabel.setSize(200, 75);
this.mUserAnswerLabel.setPosition(500,200);

this.mAnswerTextBox.setPosition(600,110);
this.mAnswerTextBox.setSize(50,50);

},



});








/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.3.a_1',6.0301,'6.rp.a.3.a','Table. Ratio. ' );
*/

var i_6_rp_a_3_a__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.3.a_1';
                
	// graph coords
	var startX = 10;
	var endX = 300;
	var startY = 10;
	var endY = 280;
	var width = endX - startX;
	var height = endY - startY;
	var range = [0,10];

	var rX1 = 10;
	var rY1 = 50;
	var rX2 = 420;
	var rY2 = 350;

	this.raphael = Raphael(rX1, rY1, rX2, rY2);

	this.raphaelSizeX = rX2;
	this.raphaelSizeY = rY2;

    	this.mNameMachine = new NameMachine();
    	this.mNameOne     = this.mNameMachine.getName();
    	this.mNameTwo     = this.mNameMachine.getName();
    	this.mTeacherName     = this.mNameMachine.getAdult();
    	this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
	this.mSchool     = this.mNameMachine.getSchool();
	this.mVegetableOne     = this.mNameMachine.getVegetable();
	this.mVegetableTwo     = this.mNameMachine.getVegetable();
	this.mFruit     = this.mNameMachine.getFruit();
	this.mThings     = this.mNameMachine.getThing();
    	this.mSupply     = this.mNameMachine.getSupply();

	this.mRoomOne = Math.floor(Math.random()*10)+40; 
	this.mRoomTwo = Math.floor(Math.random()*10)+20; 
               
	this.mAdult     = this.mNameMachine.getAdult();

	this.setQuestion('What number completes the ratio table?');    

	// create ratioTable[rows][cols] to pass in to Table
	var ratioTable = [['teams','players', 6],['classrooms','desks', 20],['cupcakes','trays', 12]];

	var r = Math.floor(Math.random()*3);

	var head1 = ratioTable[r][0];
	var head2 = ratioTable[r][1];
	var ratio = ratioTable[r][2] + Math.floor(Math.random()*3);

	var start = Math.floor(Math.random()*3) + 1;

	var step = Math.floor(Math.random()*2) + 1;

	var answer = (start+(step*2))*ratio;

	this.setAnswer('' + answer,0);

	var tableData = [[head1,head2],[start,''+start*ratio],[start+(step*1),''+(start+(step*1))*ratio],[start+(step*2),'']];

	// create Table object
	var table = new Table (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

	this.addQuestionShape(table);

	this.mQuestionLabel.setSize(220,50);
	this.mQuestionLabel.setPosition(450,80);

	this.mCorrectAnswerLabel.setSize(200, 75);
	this.mCorrectAnswerLabel.setPosition(500,300);

	this.mUserAnswerLabel.setSize(200, 75);
	this.mUserAnswerLabel.setPosition(500,200);

	this.mAnswerTextBox.setPosition(600,110);
	this.mAnswerTextBox.setSize(50,50);
}
});
