/*
insert into item_types(id,progression,core_standards_id,description) values ('k.md.a.2_1',0.1801,'k.md.a.2','');
*/
var i_k_md_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
        this.ns = new NameSampler();
        this.mType = 'k.md.a.2_1';
        this.mChopWhiteSpace = false;

        this.setQuestion('' + 'What best describes this shape? Short and wide, long and wide or tall and thin?');
        this.setAnswer('' + 'tall and thin',0);
},

createQuestionShapes: function()
{
        this.addQuestionShape(new Rectangle(10,240,360,10,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false));
	this.addQuestionShape(new Shape    (50,50,300,100,this.mGame,"/images/christmas/snowball.png","",""));
}
});

