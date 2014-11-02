/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_12',5.0612,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3_12';

        this.ns = new NameMachine();

        this.ones =  Math.floor((Math.random()*9)+1);
        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundreths =  0;
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' Write the previus number in words as it would be said aloud.',0);

        this.ones = this.ns.getNumberName(this.ones);
        this.tenths = '' + this.ns.getNumberName(this.tenths);
	this.thousandths = '' + this.ns.getNumberName(this.thousandths);

        this.setAnswer('' + this.ones + ' and ' + this.tenths + ' hundred ' + this.thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_11',5.0611,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3_11';

	this.ns = new NameMachine();

        this.hundreds =  Math.floor((Math.random()*9)+1);
        this.tens =  Math.floor((Math.random()*9)+1);
        this.ones =  Math.floor((Math.random()*9)+1);
        this.tenths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('' + this.hundreds + this.tens + this.ones + '.' + this.tenths + ' Write the previus number in words as it would be said aloud.',0);

	var tens_ones = parseInt(this.tens * 10 + this.ones);	
	
	tens_ones = this.ns.getNumberName(tens_ones); 

	this.tenths = '' + this.ns.getNumberName(this.tenths); 	

	this.setAnswer('' + this.ns.getNumberName(this.hundreds) + ' hundred ' + tens_ones + ' and ' + this.tenths + ' tenths',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_10',5.0610,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3_10';

	this.ns = new NameMachine();

        this.hundreths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('0.0' + this.hundreths + this.thousandths + ' Write the previous number in words as it would be said aloud.',0);

	var hundreths_thousandths = parseInt(this.hundreths * 10 + this.thousandths);
	
	hundreths_thousandths = this.ns.getNumberName(hundreths_thousandths); 	

	this.setAnswer('' + hundreths_thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_9',5.0609,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3_9';

	this.ns = new NameMachine();

        this.tens =  Math.floor((Math.random()*9)+1);
        this.ones =  Math.floor((Math.random()*9)+1);
        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundreths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('' + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + ' Write the previus number in words as it would be said aloud.',0);

	var tens_ones = parseInt(this.tens * 10 + this.ones);	
	var hundreths_thousandths = parseInt(this.hundreths * 10 + this.thousandths);
	var tenths_hundreths_thousandths = '';
	
	tens_ones = this.ns.getNumberName(tens_ones); 

	if (this.tenths == 0)
	{
		 tenths_hundreths_thousandths = this.ns.getNumberName(hundreths_thousandths);	
	} 
	else
	{
		 tenths_hundreths_thousandths = '' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.ns.getNumberName(hundreths_thousandths); 	
	}

	this.setAnswer('' + tens_ones + ' and ' + tenths_hundreths_thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_8',5.0608,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,120,50,670,100);

        this.mType = '5.nbt.a.3_8';

        this.tens =  Math.floor((Math.random()*9)+1);
        this.ones =  Math.floor((Math.random()*9)+1);
        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundreths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Evaluate: ' + this.tens + ' &times ' + ' 10 + ' + this.ones + ' &times ' + ' 1 + ' + this.tenths + ' &times ' + ' 1/10 + ' + this.hundreths + ' &times ' + ' 1/100 + ' + this.thousandths + ' &times 1/1000');

	this.setAnswer('' + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths,0); 
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_7',5.0607,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_7';

        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundreths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Write in expanded form using fractions: 0.' + this.tenths + this.hundreths + this.thousandths);
        this.setAnswer('' + this.tenths + ' x ' + '1/10 + ' + this.hundreths + ' x ' + '1/100 + ' + this.thousandths + ' x ' + '1/1000',0);
        this.setAnswer('' + this.tenths + ' * ' + '1/10 + ' + this.hundreths + ' * ' + '1/100 + ' + this.thousandths + ' x ' + '1/1000',1);
        
        this.setAnswer('' + this.tenths + '/10 + ' + this.hundreths + '/100 + ' + this.thousandths + '/1000',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_6',5.0606,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_6';

        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundreths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Write in expanded form using fractions: 0.' + this.tenths + this.hundreths);
        this.setAnswer('' + this.tenths + ' x ' + '1/10 + ' + this.hundreths + ' x ' + '1/100',0);
        this.setAnswer('' + this.tenths + ' * ' + '1/10 + ' + this.hundreths + ' * ' + '1/100',1);
        
        this.setAnswer('' + this.tenths + '/10 + ' + this.hundreths + '/100',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_5',5.0605,'5.nbt.a.3','add zero');
*/
var i_5_nbt_a_3__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_5';

        var n =  Math.floor((Math.random()*9)+1);
        var d = 1000;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.00' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_4',5.0604,'5.nbt.a.3','add zero');
*/
var i_5_nbt_a_3__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_4';

        var n =  Math.floor((Math.random()*90)+10);
        var d = 1000;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.0' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_3',5.0603,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_3';

	var n =  Math.floor((Math.random()*900)+100);
	var d = 1000;
	
 	var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_2',5.0602,'5.nbt.a.3','add zero for tenths');
*/
var i_5_nbt_a_3__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_2';

        var n =  Math.floor((Math.random()*9)+1);
        var d = 100;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.0' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_1',5.0601,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_1';

	var n =  Math.floor((Math.random()*90)+10);
	var d = 100;
	
 	var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form: ' + fraction.getString());
        this.setAnswer('0.' + n,0);
}
});
