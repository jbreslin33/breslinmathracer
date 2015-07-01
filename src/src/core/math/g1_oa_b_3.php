
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.b.3_1',1.0301,'1.oa.b.3','communative' );
*/
var i_1_oa_b_3__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.oa.b.3_1';
        this.mThresholdTime = 10000;
 
	this.mQuestionLabel.setPosition(200,75);
	this.mQuestionLabel.setSize(100,50);

	this.a = 0;
	this.b = 0;
	while (this.a == 0 || this.a == 1 || this.a == 9) 
	{
		this.a = Math.floor(Math.random()*8)+2;
	}
	this.b = parseInt(10 + this.a);

        this.setQuestion('' + this.a + ' + 9 + 1 =');
        this.setAnswer('' + this.b,0);
}
});


