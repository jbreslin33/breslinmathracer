
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.a_1',1.1101,'1.nbt.b.2.a','' );
*/
var i_1_nbt_b_2_a__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.a_1';

        this.setQuestion('' + 'What is the word form of 10?');
        this.setAnswer('' + 'ten',0);
}
});
