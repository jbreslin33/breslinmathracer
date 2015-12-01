/*
insert into item_types(id,progression,core_standards_id,description) values ('3.g.a.1_1',3.3701,'3.g.a.1,'');
*/
var i_3_g_a_1__1 = new Class(
{
Extends: FourButtonItem, 
initialize: function(sheet)
{
        this.parent(sheet);
        this.mRaphael = Raphael(10,50,550,150);
        this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '3.g.a.1_1';

	//var r = Math.floor(Math.random()*this.answerArray.length);
	this.labelArray = new Array();

	this.setAnswer('' + 'a',0);
	this.mButtonA.setAnswer('' + 'a');
	this.mButtonB.setAnswer('' + 'b');
	this.mButtonC.setAnswer('' + 'c');
	this.mButtonD.setAnswer('' + 'd');
        this.shuffle(10);

        this.setQuestion('' + 'Which 2 shapes are congruent?');

        //move buttons
        //this.mContinueIncorrectButton.setPosition(690,400);
        //this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
 
	//labelA
	var x = 100;	
	for (var i = 0; i < 6; i++)
	{
        	this.labelArray.push(new Shape(100,50,x,170,this.mSheet.mGame,"","",""));
		x = x + 100;
	}
	for (var j = 0; j < 6; j++)
	{
        	this.addQuestionShape(this.labelArray[j]);
	}
	
        this.labelArray[0].setText('' + 'A');
        this.labelArray[1].setText('' + 'B');
        this.labelArray[2].setText('' + 'C');
        this.labelArray[3].setText('' + 'D');
        this.labelArray[4].setText('' + 'E');
        this.labelArray[5].setText('' + 'F');
	
	
        //rectangles
        this.r1 = new Rectangle(50,25,10,65,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);
        
	this.circleA = new Circle(6,50,100,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleA);
	
}
});
