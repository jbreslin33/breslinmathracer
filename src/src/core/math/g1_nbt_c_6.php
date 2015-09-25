
/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.6_4',1.1704,'1.nbt.c.6','');
*/
var i_1_nbt_c_6__4 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);
 	this.mThresholdTime = 5000;
        this.mType = '1.nbt.c.6_4';

	this.answer = -1;
	this.tensA = 0;
	this.tensB = 0;

	while (this.answer < 31)
	{
		this.tensA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
        	this.answer = parseInt( (this.tensA * 10) - (this.tensB * 10) );
	}

        this.setQuestion('' + this.tensA + '0' + ' - ' + this.tensB + '0 =');
        this.setAnswer('' + this.answer,0);
}
});

/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.6_3',1.1703,'1.nbt.c.6','');
*/
var i_1_nbt_c_6__3 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);
 	this.mThresholdTime = 5000;
        this.mType = '1.nbt.c.6_3';

	this.answer = -1;
	this.tensA = 0;
	this.tensB = 0;

	while (this.answer < 21)
	{
		this.tensA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
        	this.answer = parseInt( (this.tensA * 10) - (this.tensB * 10) );
	}

        this.setQuestion('' + this.tensA + '0' + ' - ' + this.tensB + '0 =');
        this.setAnswer('' + this.answer,0);
}
});
/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.6_2',1.1702,'1.nbt.c.6','');
*/
var i_1_nbt_c_6__2 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);
 	this.mThresholdTime = 5000;
        this.mType = '1.nbt.c.6_2';

	this.answer = -1;
	this.tensA = 0;
	this.tensB = 0;

	while (this.answer < 11)
	{
		this.tensA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
        	this.answer = parseInt( (this.tensA * 10) - (this.tensB * 10) );
	}

        this.setQuestion('' + this.tensA + '0' + ' - ' + this.tensB + '0 =');
        this.setAnswer('' + this.answer,0);
}
});

/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.6_1',1.1701,'1.nbt.c.6','');
*/
var i_1_nbt_c_6__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);

	this.mQuestionLabel.setSize(100,50);
  	this.mQuestionLabel.setPosition(250,75);
 	this.mThresholdTime = 5000;
        this.mType = '1.nbt.c.6_1';

	this.answer = -1;
	this.tensA = 0;
	this.tensB = 0;

	while (this.answer < 1)
	{
		this.tensA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
        	this.answer = parseInt( (this.tensA * 10) - (this.tensB * 10) );
	}

        this.setQuestion('' + this.tensA + '0' + ' - ' + this.tensB + '0 =');
        this.setAnswer('' + this.answer,0);
}
});

