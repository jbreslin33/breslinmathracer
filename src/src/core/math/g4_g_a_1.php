
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_1',4.3201,'4.g.a.1','');
*/
var i_4_g_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '4.g.a.1_1';
        
        this.setQuestion('How many angles are inside the drawing below?');
       	this.setAnswer('' + '7',0);
},

createQuestionShapes: function()
{
	var rectangle = new Rectangle(50,50,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(rectangle);
	var triangle = new Triangle (125,125,100,150,150,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	this.addQuestionShape(triangle);
}
});
