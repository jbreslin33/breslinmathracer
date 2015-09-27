/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.a.1_1',1.1801,'1.md.a.1','');
*/
var i_1_md_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,750,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = '1.md.a.1_1';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;
     	this.x3 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to arrange the rectangles from shortest to longest left to right. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,this.x1,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(150,50,this.x2,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
	
	this.r3 = new Rectangle(200,50,this.x3,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r3);
},

checkUserAnswer: function()
{
	if (this.r1.mPosition.mX < this.r2.mPosition.mX && this.r2.mPosition.mX < this.r3.mPosition.mX)
	{
        	return true;
	}
	else
	{
        	this.mSheet.setTypeWrong(this.mType);
        	return false;
	}
}
});


