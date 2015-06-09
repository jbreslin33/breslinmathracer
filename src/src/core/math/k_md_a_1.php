/*
insert into item_types(id,progression,core_standards_id,description) values ('k.md.a.1_1',0.1701,'k.md.a.1','');
*/
var i_k_md_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
        this.ns = new NameSampler();
        this.mType = 'k.md.a.1_1';
	this.mChopWhiteSpace = false;

        this.setQuestion('' + 'What best describes this shape? Short and wide, long and wide or tall and skinny?');
	this.setAnswer('' + 'tall and skinny',0);
},

createQuestionShapes: function()
{
	this.addQuestionShape(new Rectangle(10,240,360,10,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));	
}
});
