

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.6_1',1.0601,'1.oa.c.6','' );
*/
var i_1_oa_c_6__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.6_1';
        this.mThresholdTime = 15000;
/*
        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);
        
	this.mUserAnswerLabel.setPosition(220,150);

    	this.mAnswerTextBox.setPosition(370,75);
    	this.mAnswerTextBox.setSize(100,50);
*/

        this.setQuestion('' + '1 + _ = 10');
        this.setAnswer('' + '9',0);
}
});
