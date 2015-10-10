/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.c.4_1',2.0401,'2.oa.c.4','');
*/
var i_2_oa_c_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mRaphael = Raphael(10,150,550,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.oa.c.4_1';

        this.setQuestion('' + 'what is this?');
        this.setAnswer('' + 'rectangle',0);

        //move buttons
        this.mContinueIncorrectButton.setPosition(690,400);
        this.mContinueCorrectButton.setPosition(690,400);
},

createQuestionShapes: function()
{
        this.mRectangle = new Rectangle(200,100,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,true);
        this.addQuestionShape(this.mRectangle);
}
});


