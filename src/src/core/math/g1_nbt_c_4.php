
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_12',1.1512,'1.nbt.c.4','2x2 carry' );
*/
var i_1_nbt_c_4__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_12';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (parseInt(this.onesA + this.onesB) < 10 || this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensB + '' + this.onesB + ' + ' + this.tensA + '' + this.onesA + ' =');
        this.setAnswer('' + this.c,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_11',1.1511,'1.nbt.c.4','2x2 carry' );
*/
var i_1_nbt_c_4__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_11';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (parseInt(this.onesA + this.onesB) < 10 || this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.tensB + '' + this.onesB + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_10',1.1510,'1.nbt.c.4','add 10 in 2x2' );
*/
var i_1_nbt_c_4__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_10';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = 0;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensB + '' + this.onesB + ' + ' + this.tensA + '' + this.onesA + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_9',1.1509,'1.nbt.c.4','add 10 in 2x2' );
*/
var i_1_nbt_c_4__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_9';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = 0;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.tensB + '' + this.onesB + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_8',1.1508,'1.nbt.c.4','2x2 no carry' );
*/
var i_1_nbt_c_4__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_8';

	this.onesA = 10;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 10;	
	this.c = 100; 
	
	while (parseInt(this.onesA + this.onesB) > 9 || this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensB + '' + this.onesB + ' + ' + this.tensA + '' + this.onesA + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_7',1.1507,'1.nbt.c.4','2x2 no carry' );
*/
var i_1_nbt_c_4__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_7';

	this.onesA = 10;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 10;	
	this.c = 100; 
	
	while (parseInt(this.onesA + this.onesB) > 9 || this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt( (this.tensA * 10 + this.onesA) + (this.tensB * 10 + this.onesB) );
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.tensB + '' + this.onesB + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_6',1.1506,'1.nbt.c.4','2x2 multiple of 10' );
*/
var i_1_nbt_c_4__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_6';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = 0;
       		this.c = parseInt((this.tensA * 10 + this.onesA) + (this.tensB * 10));
	}

        this.setQuestion('' + this.tensB + '0' + ' + ' +  this.tensA + '' + this.onesA + ' =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_5',1.1505,'1.nbt.c.4','2x2 multiple of 10' );
*/
var i_1_nbt_c_4__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_5';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.onesB = 0;	
	this.c = 100; 
	
	while (this.c > 99)	
	{ 
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensB = Math.floor(Math.random()*9)+1;
		this.onesB = 0;
       		this.c = parseInt((this.tensA * 10 + this.onesA) + (this.tensB * 10));
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.tensB + '0 =');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_4',1.1504,'1.nbt.c.4','2x1 carry with ones' );
*/
var i_1_nbt_c_4__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_4';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.c = 0; 
	
	while (parseInt(this.onesA + this.onesB) < 10 || this.c > 99)	
	{ 
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt(this.tensA * 10 + this.onesA + this.onesB);
	}

        this.setQuestion('' + this.onesB + ' + ' +  this.tensA + '' + this.onesA + ' = ');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_3',1.1503,'1.nbt.c.4','2x1 carry with ones' );
*/
var i_1_nbt_c_4__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_3';

	this.onesA = 0;	
	this.tensA = 0;	
	this.onesB = 0;	
	this.c = 0; 
	
	while (parseInt(this.onesA + this.onesB) < 10 || this.c > 99)	
	{ 
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt(this.tensA * 10 + this.onesA + this.onesB);
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.onesB + ' = ');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_2',1.1502,'1.nbt.c.4','2x1 no carry' );
*/
var i_1_nbt_c_4__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_2';

	this.onesA = 10;	
	this.tensA = 0;	
	this.onesB = 10;	
	this.c = 0; 
	
	while (parseInt(this.onesA + this.onesB) > 10 || this.c > 99)	
	{ 
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt(this.tensA * 10 + this.onesA + this.onesB);
	}

        this.setQuestion('' + this.onesB + ' + ' + this.tensA + '' + this.onesA + ' = ');
        this.setAnswer('' + this.c,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_1',1.1501,'1.nbt.c.4','2x1 no carry' );
*/
var i_1_nbt_c_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_1';

	this.onesA = 10;	
	this.tensA = 0;	
	this.onesB = 10;	
	this.c = 0; 
	
	while (parseInt(this.onesA + this.onesB) > 10 || this.c > 99)	
	{ 
		this.onesA = Math.floor(Math.random()*9)+1;
		this.tensA = Math.floor(Math.random()*9)+1;
		this.onesB = Math.floor(Math.random()*9)+1;
       		this.c = parseInt(this.tensA * 10 + this.onesA + this.onesB);
	}

        this.setQuestion('' + this.tensA + '' + this.onesA + ' + ' + this.onesB + ' = ');
        this.setAnswer('' + this.c,0);
}
});

