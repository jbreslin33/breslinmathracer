/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.2_1',4.0161,'2.g.a.2','' );
*/
var i_2_g_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.g.a.2_1';

        this.setQuestion('What kind of triangle is the shape below?');
        this.setAnswer('' + 'equilateral',0);
        this.setAnswer('' + 'equilateral triangle',1);
},

createQuestionShapes: function()
{
        var triangle = new Triangle (20,200, 100,100, 180,200, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        this.addQuestionShape(triangle);

        var textA = new RaphaelText(40,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
        this.addQuestionShape(textA);

        var textB = new RaphaelText(100,120,this,0,0,1,"#000000",.5,false,"" + "60",16);
        this.addQuestionShape(textB);

        var textC = new RaphaelText(160,190,this,0,0,1,"#000000",.5,false,"" + "60",16);
        this.addQuestionShape(textC);
}
});

