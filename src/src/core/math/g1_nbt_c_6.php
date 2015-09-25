
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

