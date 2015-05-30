
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.2_3',4.0184,'3.nbt.a.2','');
*/

var i_3_nbt_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,400,50,280,75,100,50,500,180);

        this.mType = '3.nbt.a.2_3';
        this.ns = new NameSampler();

        var x = 0;
        var y = 0;
        var z = 1001;

        while (z > 999)
        {
                x = Math.floor(Math.random()*899)+100;
                y = Math.floor(Math.random()*899)+100;
                z = parseInt(x + y);
        }

        this.setQuestion('' + this.ns.mNameOne + ' dropped some ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' picked up ' + x + ' and ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' friend ' + this.ns.mNameTwo + ' picked up ' + y + '. ' + this.ns.mNameOne + ' used mental math to figure out how many ' + this.ns.mThingOne + ' ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' dropped. How many did ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' drop?');

        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.2_2',4.0184,'3.nbt.a.2','');
*/

var i_3_nbt_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '3.nbt.a.2_2';
        this.ns = new NameSampler();

        var x = 0;
        var y = 0;
        var z = parseInt(-1);

        while (z < 1)
        {
        	x = Math.floor(Math.random()*899)+100;
        	y = Math.floor(Math.random()*899)+100;
                z = parseInt(x - y);
        }

        this.setQuestion(x + ' - ' + y + ' =');

        this.setAnswer('' + z,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.2_1',4.0183,'3.nbt.a.2','');
*/

var i_3_nbt_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,200,50,380,75,100,50,500,80);

        this.mType = '3.nbt.a.2_1';
	this.ns = new NameSampler(); 

        var x = 0;
        var y = 0;
	var z = 1001;

	while (z > 999)
	{
        	x = Math.floor(Math.random()*899)+100;
        	y = Math.floor(Math.random()*899)+100;
		z = parseInt(x + y);	
	}

        this.setQuestion(x + ' + ' + y + ' =');

        this.setAnswer('' + z,0);
}
});

