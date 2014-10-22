/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_1',5.0501,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
  	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.nbt.a.2_1';

	this.mBase = Math.floor(Math.random()*7)+2;
	this.mExponent = Math.floor(Math.random()*9)+1;

	this.setQuestion(this.mBase + '<sup>' + this.mExponent + '</sup>' + ' is a power of 10. Write an equivalent mulitiplication expression using only tens.');

	var answerOne = '10';	
	for (i=1; i < parseInt(this.mExponent); i++)
	{
		var str = 'x10'; 
		answerOne = answerOne.concat(str);
	}
        
	this.setAnswer('' + answerOne,0);
}
});
