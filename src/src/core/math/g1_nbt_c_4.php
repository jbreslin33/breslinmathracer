
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_2',1.1502,'1.nbt.c.4','2x1 carry with ones' );
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

