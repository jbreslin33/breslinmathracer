
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
