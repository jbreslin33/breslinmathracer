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

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.2_2',2.0602,'2.nbt.a.2','');
*/
var i_2_nbt_a_2__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '2.nbt.a.2_2';
        this.mThresholdTime = 30000;

        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);

        this.mUserAnswerLabel.setPosition(220,150);

        this.mAnswerTextBox.setPosition(430,75);
        this.mAnswerTextBox.setSize(220,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + 'Count by 10 from 0 to 100');
        this.setAnswer('' + '0102030405060708090100',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.2_3',2.0603,'2.nbt.a.2','');
*/
var i_2_nbt_a_2__3 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '2.nbt.a.2_3';
        this.mThresholdTime = 30000;

        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);

        this.mUserAnswerLabel.setPosition(220,150);

        this.mAnswerTextBox.setPosition(430,75);
        this.mAnswerTextBox.setSize(220,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + 'Count by 100 from 0 to 500');
        this.setAnswer('' + '0100200300400500',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.2_4',2.0604,'2.nbt.a.2','');
*/
var i_2_nbt_a_2__4 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '2.nbt.a.2_4';
        this.mThresholdTime = 40000;

        this.mQuestionLabel.setPosition(170,75);
        this.mQuestionLabel.setSize(300,50);

        this.mUserAnswerLabel.setPosition(220,150);

        this.mAnswerTextBox.setPosition(430,75);
        this.mAnswerTextBox.setSize(220,50);

        this.a = 0;
        this.b = 0;
        while (this.a == 0 || this.a == 1 || this.a == 9)
        {
                this.a = Math.floor(Math.random()*9)+1;
        }
        this.b = parseInt(10 + this.a);

        this.setQuestion('' + 'Count by 100 from 500 to 1000');
        this.setAnswer('' + '5006007008009001000',0);
}
});
