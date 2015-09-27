/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.a.2_1',1.1901,'1.md.a.2','');
*/
var i_1_md_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,750,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '1.md.a.2_1';
  	
     	this.x = Math.floor(Math.random()*9)+3;
	this.x1 = parseInt(this.x * 50);

        this.setQuestion('' + this.ns.mNameOne + ' wants to find out how many squares long the rectangle is. Help ' + this.ns.mNameOne + ' do this.');
	this.setAnswer('' + this.x,0); 

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(this.x1,50,25,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,50,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
	
	this.r3 = new Rectangle(50,50,50,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r3);
	
	this.r4 = new Rectangle(50,50,125,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r4);
	
	this.r5 = new Rectangle(50,50,125,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r5);
	
	this.r6 = new Rectangle(50,50,200,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r6);
	
	this.r7 = new Rectangle(50,50,200,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r7);
	
	this.r8 = new Rectangle(50,50,275,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r8);
	
	this.r9 = new Rectangle(50,50,275,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r9);
	
	this.r10 = new Rectangle(50,50,350,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r10);
	
	this.r11 = new Rectangle(50,50,350,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r11);
	
	this.r12 = new Rectangle(50,50,425,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r12);
	
	this.r13 = new Rectangle(50,50,425,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r13);
}
});
