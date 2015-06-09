/*
insert into item_types(id,progression,core_standards_id,description) values ('k.md.a.2_2',0.1802,'k.md.a.2','');
*/
var i_k_md_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,600,350);
        this.ns = new NameSampler();
        this.mType = 'k.md.a.2_2';

        this.setQuestion('' + 'What is the shortest? Snowman, Tree, Santa or Snowball?');
        this.setAnswer('' + 'Snowman',0);
},

createQuestionShapes: function()
{
        this.addQuestionShape(new Shape    (50, 50,100,450,this.mSheet.mGame,"/images/christmas/snowman.png","",""));
        this.addQuestionShape(new Shape    (50,100,200,350,this.mSheet.mGame,"/images/christmas/christmas-tree.png","",""));
        this.addQuestionShape(new Shape    (50,200,300,300,this.mSheet.mGame,"/images/christmas/santa1.png","",""));
        this.addQuestionShape(new Shape    (50,150,400,330,this.mSheet.mGame,"/images/christmas/snowball.png","",""));
}
});

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

        this.setQuestion('' + 'What is the tallest? Snowman, Tree, Santa or Snowball?');
        this.setAnswer('' + 'Santa',0);
},

createQuestionShapes: function()
{
	this.addQuestionShape(new Shape    (50, 50,100,450,this.mSheet.mGame,"/images/christmas/snowman.png","",""));
	this.addQuestionShape(new Shape    (50,100,200,350,this.mSheet.mGame,"/images/christmas/christmas-tree.png","",""));
	this.addQuestionShape(new Shape    (50,200,300,300,this.mSheet.mGame,"/images/christmas/santa1.png","",""));
	this.addQuestionShape(new Shape    (50,150,400,330,this.mSheet.mGame,"/images/christmas/snowball.png","",""));
}
});

