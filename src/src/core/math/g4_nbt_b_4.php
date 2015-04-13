
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.b.4_1',4.0901,'4.nbt.b.4','1000+100');
*/

var i_4_nbt_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.b.4_1';          	

	this.mQuestionL
	
	this.mStripCommas = true;

	var a = Math.floor(Math.random()*8999)+1000;
	var b = Math.floor(Math.random()*899)+100;
	
	var answer = parseInt(a + b);

	this.setQuestion('' + a + ' + ' + b + ' = ',0);
	this.setAnswer('' + answer,0);  
}
});
