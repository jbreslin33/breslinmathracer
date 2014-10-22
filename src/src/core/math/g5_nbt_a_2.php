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

	this.setQuestion('10<sup>3</sup>' + ' is a power of 10. Write an equivalent mulitiplication expression using only tens.');

        this.setAnswer('10x10',0);
}
});
