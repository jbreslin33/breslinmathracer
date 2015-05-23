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
},

createQuestionShapes: function()
{
	
	var a1 = new Rectangle(50,25,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a1);
	var a2 = new Rectangle(50,25,100,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a2);
	var a3 = new Rectangle(50,25,100,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a3);
        var textA = new RaphaelText(80,30,this,0,0,1,"#000000",.5,false,"" + "A.",16);
        this.addQuestionShape(textA);
	
	var b1 = new Rectangle(25,75,300,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b1);
	var b2 = new Rectangle(25,75,325,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b2);
	var textB = new RaphaelText(280,30,this,0,0,1,"#000000",.5,false,"" + "B.",16);
        this.addQuestionShape(textB);

        
}
});

