/* 
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.5_1',1.1601,'1.nbt.c.5','');
*/
var i_1_nbt_c_5__1 = new Class(
{
Extends: NumberPadItem,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '1.nbt.c.5_1';

        this.mThresholdTime = 10000;

        this.setQuestion('0+0=');
        this.setAnswer('' + '0',0);
}
});

