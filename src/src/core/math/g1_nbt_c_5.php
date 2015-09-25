
/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.5_2',1.1602,'1.nbt.c.5','');
*/
var i_1_nbt_c_5__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);

        this.mType = '1.nbt.c.5_2';

        this.mThresholdTime = 5000;

	this.a = 0;
	this.b = 10;
	this.answer = -1;
	
	while (this.answer < 1)
	{
		this.a = Math.floor(Math.random()*9)+1;
		this.answer = parseInt(this.a * 10 - 10);
	}

        this.setQuestion('' + this.a + '0' + ' - ' + this.b + ' =');
        this.setAnswer('' + this.answer,0);
}
});

/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.5_1',1.1601,'1.nbt.c.5','');
*/
var i_1_nbt_c_5__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);
        this.mType = '1.nbt.c.5_1';
        this.mThresholdTime = 5000;

	this.answer = 101;
	this.a = 0;
	this.b = 10;

	while (this.answer > 99)
	{
		this.a = Math.floor(Math.random()*9)+1;
        	this.answer = parseInt(this.a * 10 + 10);
	}

        this.setQuestion('' + this.a + '0' + ' + ' + this.b + ' =');
        this.setAnswer('' + this.answer,0);
}
});

