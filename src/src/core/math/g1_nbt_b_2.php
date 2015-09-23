/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.b.2_1',1.1001,'1.nbt.b.2','' );
*/
var i_1_nbt_b_2__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.nbt.b.2_1';

        this.a = Math.floor(Math.random()*9)+1;
        this.b = Math.floor(Math.random()*9)+1;
        this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ? + ' + this.b + ' = ' + this.c);
        this.setAnswer('' + this.a,0);
}
});
