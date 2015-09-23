
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2.b_1',1.1201,'1.nbt.b.2.b','' );
*/
var i_1_nbt_b_2_b__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2.b_1';

        this.setQuestion('' + 'What is the word form of 10?');
        this.setAnswer('' + 'tent',0);
}
});
