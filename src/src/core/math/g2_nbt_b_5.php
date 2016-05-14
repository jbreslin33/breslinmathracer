
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.5_3',2.1103,'2.nbt.b.5','2x2 carry'); update item_types SET progression = 2.1102 where id = '2.nbt.b.5_3';
*/

var i_2_nbt_b_5__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '2.nbt.b.5_3';
        this.ns = new NameSampler();

        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var x = 0;
	var e = 0;
	var f = 0;

        while ( parseInt(a + c) < 10 || x > 100)
        {
                a = Math.floor(Math.random()*9)+1;
                b = Math.floor(Math.random()*9)+1;
                c = Math.floor(Math.random()*9)+1;
                d = Math.floor(Math.random()*9)+1;

		e = parseInt(b * 10 + a); 
		f = parseInt(d * 10 + c); 
		
                x = parseInt(e + f);
        }

        this.setQuestion(e + ' + ' + f + ' =');

        this.setAnswer('' + x,0);
}
});


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
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.5_1',2.1101,'2.nbt.b.5',''); update item_types SET progression = 2.1101 where id = '2.nbt.b.5_1';
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

