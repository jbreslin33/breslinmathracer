
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.g.a.2_1',0.2101,'k.g.a.2','');
*/
var i_k_g_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
	this.ns = new NameSampler();
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.2_1';
  	
     	this.x1 = Math.floor(Math.random()*200)+100;
     	this.x2 = Math.floor(Math.random()*200)+100;

        this.setQuestion('' + this.ns.mNameOne + ' wants to put the square above the rectangle. Help ' + this.ns.mNameOne + ' do this.');

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	//rectangles
	this.r1 = new Rectangle(100,50,this.x1,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r1);

	this.r2 = new Rectangle(50,50,this.x2,100,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.r2);
},

checkUserAnswer: function()
{
	if (this.r1.mPosition.mY > this.r2.mPosition.mY)
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


