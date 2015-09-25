
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

