
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
        this.mChopWhiteSpace = false;
        this.mType = 'k.g.a.2_1';
  	
        this.setQuestion('' + 'What kind of shape is this?');
	this.setAnswer('' + 'square',0);

	//move buttons	
	this.mContinueIncorrectButton.setPosition(690,400);
	this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
	this.square = new Rectangle(100,100,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.square);
}
});


