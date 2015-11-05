/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.2_1',2.0601,'2.nbt.a.2','');
*/
var i_2_nbt_a_2__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '2.nbt.a.2_1';
        this.mThresholdTime = 30000;

        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);

        this.mUserAnswerLabel.setPosition(220,150);

        this.mAnswerTextBox.setPosition(410,75);
        this.mAnswerTextBox.setSize(180,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + 'Count by 5 from 0 to 50');
        this.setAnswer('' + '05101520253035404550',0);
}
});

