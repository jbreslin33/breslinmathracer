/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.4_1',1.0401,'1.oa.b.4','associative' );
*/
var i_1_oa_b_4__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.4_1';
        this.mThresholdTime = 10000;

        this.mQuestionLabel.setPosition(220,75);
        this.mQuestionLabel.setSize(100,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + '9 + 1 + ' + this.a + ' =');
        this.setAnswer('' + this.b,0);
}
});

