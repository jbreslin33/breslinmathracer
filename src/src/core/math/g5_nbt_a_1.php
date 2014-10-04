var PlaceValueWholeNumberColors = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.hundredthousands = Math.floor(Math.random()*9)+1;
        this.tenthousands = Math.floor(Math.random()*9)+1;
        this.thousands = Math.floor(Math.random()*9)+1;
        this.hundreds = Math.floor(Math.random()*9)+1;
        this.tens = Math.floor(Math.random()*9)+1;
        this.ones = Math.floor(Math.random()*9)+1;
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_10',5.0410,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__10 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_10';

	var answer = parseInt(100000 * this.hundredthousands); 
        
	this.setQuestion('What is the value of the red digit in the number ' + '<span style="color: #f00;">' + this.hundredthousands + '</span>' + '' + this.tenthousands + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones);

        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_9',5.0409,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_9';

        this.setQuestion('In the number 123456.789 what is the place with the digit 9 in it called?');
        this.setAnswer('thousandths',0);
        this.setAnswer('thousandths place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_8',5.0408,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_8';

        this.setQuestion('In the number 123456.789 what is the place with the digit 8 in it called?');
        this.setAnswer('hundreths',0);
        this.setAnswer('hundreths place',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_7',5.0407,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_7';

        this.setQuestion('In the number 123456.789 what is the place with the digit 7 in it called?');
        this.setAnswer('tenths',0);
        this.setAnswer('tenths place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_6',5.0406,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_6';

        this.setQuestion('In the number 123456.789 what is the place with the digit 6 in it called?');
        this.setAnswer('ones',0);
        this.setAnswer('ones place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_5',5.0405,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_5';

        this.setQuestion('In the number 123456.789 what is the place with the digit 5 in it called?');
        this.setAnswer('tens',0);
        this.setAnswer('tens place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_4',5.0404,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_4';

        this.setQuestion('In the number 123456.789 what is the place with the digit 4 in it called?');
        this.setAnswer('hundreds',0);
        this.setAnswer('hundreds place',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_3',5.0403,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_3';

        this.setQuestion('In the number 123456.789 what is the place with the digit 3 in it called?');
        this.setAnswer('thousands',0);
        this.setAnswer('thousands place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_2',5.0402,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_2';

        this.setQuestion('In the number 123456.789 what is the place with the digit 2 in it called?');
        this.setAnswer('ten thousands',0);
        this.setAnswer('ten thousands place',1);
        this.setAnswer('ten thousand',2);
        this.setAnswer('ten thousand place',3);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_1',5.0401,'5.nbt.a.1','hundred thousand');
*/
var i_5_nbt_a_1__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.1_1';

        this.setQuestion('In the number 123456.789 what is the place with the digit 1 in it called?');
        this.setAnswer('hundred thousands',0);
        this.setAnswer('hundred thousands place',1);
        this.setAnswer('hundred thousand',2);
        this.setAnswer('hundred thousand place',3);
}
});


