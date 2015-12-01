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

	this.setAnswer('' + 'a',0);
	this.mButtonA.setAnswer('' + 'a');
	this.mButtonB.setAnswer('' + 'b');
	this.mButtonC.setAnswer('' + 'c');
	this.mButtonD.setAnswer('' + 'd');
        this.shuffle(10);

        this.setQuestion('' + this.ns.mNameOne + ' holla');

        //move buttons
        //this.mContinueIncorrectButton.setPosition(690,400);
        //this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
        //rectangles
        this.r1 = new Rectangle(160,25,10,85,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);
        
	this.circleA = new Circle(6,50,100,this.mSheet.mGame,this.mRaphael,0,1,1,"none",.5,false);
        this.addQuestionShape(this.circleA);
	
}
});
