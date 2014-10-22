/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.2_1',5.0501,'5.nbt.a.2','');
*/
var i_5_nbt_a_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.2_1';

	this.setQuestion('questionddd');

        this.setAnswer('6',0);
}
});
