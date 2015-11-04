/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.1_1',2.0501,'2.nbt.a.1','');
*/
var i_2_nbt_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '2.nbt.a.1_1';

        this.x = Math.floor(Math.random()*4)+2;
        this.y = Math.floor(Math.random()*4)+2;

        this.setQuestion('' + 'How many little squares are there?');
        this.setAnswer('' + parseInt(this.x * this.y),0);

}
});
