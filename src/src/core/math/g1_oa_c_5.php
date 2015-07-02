/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_1',1.0501,'1.oa.c.5','' );
*/
var i_1_oa_c_5__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_1';
        this.mThresholdTime = 15000;

        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);
        
	this.mUserAnswerLabel.setPosition(220,150);

    	this.mAnswerTextBox.setPosition(350,75);
    	this.mAnswerTextBox.setSize(100,50);


        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + 'Count forward by 2 from 0 to 10.');
        this.setAnswer('' + '0246810',0);
}
});
