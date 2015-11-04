/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.2_1',2.0601,'2.nbt.a.2','');
*/
var i_2_nbt_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '2.nbt.a.2_1';

        this.ones = Math.floor(Math.random()*10);
        this.tens = Math.floor(Math.random()*10);
        this.hundreds = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + 'In the number ' + this.hundreds + '' + this.tens + '' + this.ones + ' how many ones are in the ones place?');
        this.setAnswer('' + this.ones,0);
}
});
