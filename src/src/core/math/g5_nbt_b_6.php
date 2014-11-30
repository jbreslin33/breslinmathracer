/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_8',5.1008,'5.nbt.b.6','4 d 2 remainder word problem');
*/
var i_5_nbt_b_6__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_8';

        this.ns = new NameSampler();

        this.x = 0;
        this.y = 0;
        this.q = 0;
        this.r = 0;
        while( this.r == 0)
        {
                this.x = Math.floor((Math.random()*90)+10);
                this.y = Math.floor((Math.random()*9000)+1000);
                this.q = Math.floor(this.y/this.x);
                this.r = this.y % this.x;
        }

        this.setQuestion('' + this.ns.mNameOne + ' shared ' + this.y + ' ' + this.ns.mFruitOne + ' equally with ' + this.x + ' people. How many ' + this.ns.mFruitOne + ' are left over?');
        this.setAnswer('' + this.r,0);
        this.setAnswer('' + this.r + ' ' + this.ns.mFruitOne,1);
        this.setAnswer('' + this.r + ' ' + this.ns.mFruitOne + ' left',2);
        this.setAnswer('' + this.r + ' ' + this.ns.mFruitOne + ' left over',3);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_7',5.1007,'5.nbt.b.6','4 d 2 no remainder word problem');
*/
var i_5_nbt_b_6__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_7';

        this.ns = new NameSampler();

        this.x = 0;
        this.y = 0;
        this.z = parseInt(11111);
        while(this.z > 9999 || this.z < 1000 )
        {
                this.x        = Math.floor((Math.random()*90)+10);
                this.y        = Math.floor((Math.random()*900)+100);
                this.z        = parseInt(this.x * this.y);
        }

        this.setQuestion('' + this.ns.mNameOne + ' had ' + this.z + ' flower seeds. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' put ' + this.x + ' each into garden pots. How many garden pots did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' use?');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' pots',1);
        this.setAnswer('' + this.answer + ' garden pots',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_6',5.1006,'5.nbt.b.6','3 d 2 remainder word problem');
*/
var i_5_nbt_b_6__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_6';

        this.ns = new NameSampler();

        this.x = 0;
        this.y = 0;
        this.q = 0;
        this.r = 0;
        while( this.r == 0)
        {
                this.x = Math.floor((Math.random()*90)+10);
                this.y = Math.floor((Math.random()*900)+100);
                this.q = Math.floor(this.y/this.x);
                this.r = this.y % this.x;
        }

        this.setQuestion('' + this.ns.mNameOne + ' divides ' + this.y + ' cards evenly among ' + this.x + ' friends. How many cards are left over?');
        this.setAnswer('' + this.r,0);
        this.setAnswer('' + this.r + ' left over',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_5',5.1005,'5.nbt.b.6','3 d 2 no remainder word problem');
*/
var i_5_nbt_b_6__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_5';

        this.ns = new NameSampler();

        this.x = 0;
        this.y = 0;
        this.z = parseInt(1111);
        while(this.z > 999 || this.z < 100 )
        {
                this.x        = Math.floor((Math.random()*90)+10);
                this.y        = Math.floor((Math.random()*90)+10);
                this.z        = parseInt(this.x * this.y);
        }

        this.setQuestion('In the city where ' + this.ns.mNameOne + ' lives it rained a total of ' + this.z + ' millimeters for ' + this.x + ' days. How many millimeters did it rain on average each day?');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
        this.setAnswer('' + this.answer + ' millimeters',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_4',5.1004,'5.nbt.b.6','4 d 2 remainder');
*/
var i_5_nbt_b_6__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_4';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.q = 0;
	this.r = 0;
	while( this.r == 0)
	{
       		this.x = Math.floor((Math.random()*90)+10);
        	this.y = Math.floor((Math.random()*9000)+1000);
		this.q = Math.floor(this.y/this.x);
		this.r = this.y % this.x;
	}

        this.setQuestion('Find the Quotient: ' + this.y + ' &divide ' + this.x + ' If a remainder exists write in the form 57r3');
        this.setAnswer('' + this.q + 'r' + this.r,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_3',5.1003,'5.nbt.b.6','4 d 2 no remainder');
*/
var i_5_nbt_b_6__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_3';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.z = parseInt(11111); 
	while(this.z > 9999 || this.z < 1000 )
	{ 
        	this.x        = Math.floor((Math.random()*90)+10);
        	this.y        = Math.floor((Math.random()*900)+100);
        	this.z        = parseInt(this.x * this.y);
	}

        this.setQuestion('Find the Quotient: ' + this.z + ' &divide ' + this.x + '');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_2',5.1002,'5.nbt.b.6','3 d 2 remainder');
*/
var i_5_nbt_b_6__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_2';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.q = 0;
	this.r = 0;
	while( this.r == 0)
	{
       		this.x = Math.floor((Math.random()*90)+10);
        	this.y = Math.floor((Math.random()*900)+100);
		this.q = Math.floor(this.y/this.x);
		this.r = this.y % this.x;
	}

        this.setQuestion('Find the Quotient: ' + this.y + ' &divide ' + this.x + ' If a remainder exists write in the form 57r3');
        this.setAnswer('' + this.q + 'r' + this.r,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_1',5.1001,'5.nbt.b.6','3 d 2 no remainder');
*/
var i_5_nbt_b_6__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_1';

        this.ns = new NameSampler();

	this.x = 0;
	this.y = 0;
	this.z = parseInt(1111); 
	while(this.z > 999 || this.z < 100 )
	{ 
        	this.x        = Math.floor((Math.random()*90)+10);
        	this.y        = Math.floor((Math.random()*90)+10);
        	this.z        = parseInt(this.x * this.y);
	}

        this.setQuestion('Find the Quotient: ' + this.z + ' &divide ' + this.x + '');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
}
});

