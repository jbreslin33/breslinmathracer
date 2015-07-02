

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_8',1.0508,'1.oa.c.5','' );
*/
var i_1_oa_c_5__8 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_8';
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

        this.setQuestion('' + 'Count backward by 3 from 10 to 1.');
        this.setAnswer('' + '10741',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_7',1.0507,'1.oa.c.5','' );
*/
var i_1_oa_c_5__7 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_7';
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

        this.setQuestion('' + 'Count backward by 3 from 9 to 0.');
        this.setAnswer('' + '9630',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_6',1.0506,'1.oa.c.5','' );
*/
var i_1_oa_c_5__6 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_6';
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

        this.setQuestion('' + 'Count backward by 2 from 9 to 1.');
        this.setAnswer('' + '97531',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_5',1.0505,'1.oa.c.5','' );
*/
var i_1_oa_c_5__5 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_5';
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

        this.setQuestion('' + 'Count backward by 2 from 10 to 0.');
        this.setAnswer('' + '1086420',0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_4',1.0504,'1.oa.c.5','' );
*/
var i_1_oa_c_5__4 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_4';
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

        this.setQuestion('' + 'Count forward by 3 from 1 to 10.');
        this.setAnswer('' + '14710',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_3',1.0503,'1.oa.c.5','' );
*/
var i_1_oa_c_5__3 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_3';
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

        this.setQuestion('' + 'Count forward by 3 from 0 to 9.');
        this.setAnswer('' + '0369',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.c.5_2',1.0502,'1.oa.c.5','' );
*/
var i_1_oa_c_5__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.c.5_2';
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

        this.setQuestion('' + 'Count forward by 2 from 1 to 9.');
        this.setAnswer('' + '13579',0);
}
});

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
