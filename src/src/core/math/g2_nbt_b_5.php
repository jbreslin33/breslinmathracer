
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.5_2',2.1102,'2.nbt.b.5',''); update item_types SET progression = 2.1102 where id = '2.nbt.b.5_2';
*/

var i_2_nbt_b_5__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '2.nbt.b.5_2';
        this.ns = new NameSampler();

        var x = 0;
        var y = 0;
        var z = parseInt(-1);

        while (z < 1)
        {
        	x = Math.floor(Math.random()*89)+10;
        	y = Math.floor(Math.random()*89)+10;
                z = parseInt(x - y);
        }

        this.setQuestion(x + ' - ' + y + ' =');

        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.2_1',2.1101,'2.nbt.b.2',''); update item_types SET progression = 2.1101 where id = '2.nbt.b.5_1';
*/

var i_2_nbt_b_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '2.nbt.b.5_1';
	this.ns = new NameSampler(); 

        var x = 0;
        var y = 0;
	var z = 1001;

	while (z > 999)
	{
        	x = Math.floor(Math.random()*89)+10;
        	y = Math.floor(Math.random()*89)+10;
		z = parseInt(x + y);	
	}

        this.setQuestion(x + ' + ' + y + ' =');

        this.setAnswer('' + z,0);
}
});

