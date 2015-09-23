/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_3',1.1203,'1.nbt.b.2.b','');
*/
var i_1_nbt_b_2_b__3 = new Class(
{

Extends: TextItem2,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mType = '1.nbt.b.2.b_3';
        this.ns = new NameSampler();

        var totalDigits = 6;

        this.mAnswerTextBox.setPosition(425,140);
        this.mAnswerTextBox2.setPosition(595,140);
        this.mAnswerTextBox.setSize(75,25);
        this.mAnswerTextBox2.setSize(75,25);

        this.mHeadingAnswerLabel.setText('Blue<br> Digit<br> Value');
        this.mHeadingAnswerLabel2.setText('Red<br> Digit<br> Value');
        this.mHeadingAnswerLabel.setPosition(425,70);
        this.mHeadingAnswerLabel2.setPosition(595,70);
        this.mHeadingAnswerLabel.setSize(50,50);
        this.mHeadingAnswerLabel2.setSize(50,50);

        this.mQuestionLabel.setSize(220,250);
        this.mQuestionLabel.setPosition(225,180);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_2',1.1202,'1.nbt.b.2.b','' );
*/
var i_1_nbt_b_2_b__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.b_2';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many tens are in the tens place in ' + this.a + '?');
        this.setAnswer('' + '1',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_1',1.1201,'1.nbt.b.2.b','' );
*/
var i_1_nbt_b_2_b__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.b_1';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many ones are in the ones place in ' + this.a + '?');
        this.setAnswer('' + this.ones,0);
}
});
