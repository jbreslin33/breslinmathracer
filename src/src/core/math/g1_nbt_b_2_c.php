/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.c_3',1.1303,'1.nbt.b.2.c','');
*/
var i_1_nbt_b_2_c__3 = new Class(
{

Extends: TextItem2,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mType = '1.nbt.b.2.c_3';

        this.mAnswerTextBox.setPosition(425,160);
        this.mAnswerTextBox2.setPosition(595,160);
        this.mAnswerTextBox.setSize(75,25);
        this.mAnswerTextBox2.setSize(75,25);

        this.mHeadingAnswerLabel.setText('Tens<br>In Tens<br>Place');
        this.mHeadingAnswerLabel2.setText('Ones<br>In Ones<br>Place');
        this.mHeadingAnswerLabel.setPosition(425,70);
        this.mHeadingAnswerLabel2.setPosition(595,70);
        this.mHeadingAnswerLabel.setSize(50,50);
        this.mHeadingAnswerLabel2.setSize(50,50);

        this.mQuestionLabel.setSize(220,250);
        this.mQuestionLabel.setPosition(225,180);
        
        this.tens = Math.floor(Math.random()*9)+1;
	this.ones = 0;
        this.a = parseInt(this.tens * 10);
 
	this.setQuestion('How many tens in the tens place and how many ones in the ones place in ' + this.a + '?');
        this.setAnswer('' + this.tens,0);
        this.setAnswer('' + '0',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.c_2',1.1302,'1.nbt.b.2.c','' );
*/
var i_1_nbt_b_2_c__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.c_2';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many tens are in the tens place in ' + this.a + '?');
        this.setAnswer('' + '1',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.c_1',1.1301,'1.nbt.b.2.c','' );
*/
var i_1_nbt_b_2_c__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.c_1';

        this.tens = 1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.a = parseInt(10 + this.ones);

        this.setQuestion('' + 'How many ones are in the ones place in ' + this.a + '?');
        this.setAnswer('' + this.ones,0);
}
});
