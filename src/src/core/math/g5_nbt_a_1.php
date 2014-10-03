/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_1',5.0401,'5.nbt.a.1','hundred thousand');
*/
var i_5_nbt_a_1__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nbt.a.1_1';

        //var a = Math.floor((Math.random()*3)+8);
	//123456.789
	this.a = 1

        this.setAnswer('hundred thousands',0);
        this.setQuestion('What is the column with the the digit 1 in it called?');
}
});

