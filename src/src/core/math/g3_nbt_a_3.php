/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.3_1',3.1201,'3.nbt.a.3',''); update item_types SET progression = 3.1201 where id = '3.nbt.a.3_1';
*/

var i_3_nbt_a_3__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '3.nbt.a.3_1';
        this.ns = new NameSampler();

	var x = Math.floor(Math.random()*8)+2;
	x = x * 10;
	var y = Math.floor(Math.random()*8)+2;

	var z = x * y;	

        this.setQuestion('' + x + ' x ' + y + ' =');

        this.setAnswer('' + z,0);
}
});

