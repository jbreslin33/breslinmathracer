
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.6_2',2.1202,'2.nbt.b.6',''); update item_types SET progression = 2.1202 where id = '2.nbt.b.6_2';
*/

var i_2_nbt_b_6__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '2.nbt.b.6_2';
        this.ns = new NameSampler();
                
	a = Math.floor(Math.random()*89)+11;
	b = Math.floor(Math.random()*89)+11;
	c = Math.floor(Math.random()*89)+11;
	d = Math.floor(Math.random()*89)+11;

        x = parseInt(a+b+c+d);

        this.setQuestion(a + ' + ' + b + ' + ' + c + ' + ' + d + ' = ');

        this.setAnswer('' + x,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.6_1',2.1201,'2.nbt.b.6',''); update item_types SET progression = 2.1201 where id = '2.nbt.b.6_1';
*/

var i_2_nbt_b_6__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '2.nbt.b.6_1';
        this.ns = new NameSampler();
                
	a = Math.floor(Math.random()*89)+11;
	b = Math.floor(Math.random()*89)+11;
	c = Math.floor(Math.random()*89)+11;

        x = parseInt(a+b+c);

        this.setQuestion(a + ' + ' + b + ' + ' + c + ' = ');

        this.setAnswer('' + x,0);
}
});
