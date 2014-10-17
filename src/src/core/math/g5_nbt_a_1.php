var PlaceValueWholeNumberColors = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

	this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor(Math.random()*9)+1;
        this.tenthousands = Math.floor(Math.random()*9)+1;
        this.thousands = Math.floor(Math.random()*9)+1;
        this.hundreds = Math.floor(Math.random()*9)+1;
        this.tens = Math.floor(Math.random()*9)+1;
        this.ones = Math.floor(Math.random()*9)+1;
        this.tenths = Math.floor(Math.random()*9)+1;
        this.hundreths = Math.floor(Math.random()*9)+1;
        this.thousandths = Math.floor(Math.random()*9)+1;
        this.tenthousandths = Math.floor(Math.random()*9)+1;
        this.hundredthousandths = Math.floor(Math.random()*9)+1;
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_20',5.0420,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__20 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_20';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + '<span style="color: #f00;">' + this.thousands + '</span>' + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        var answer = parseInt(this.thousands * 1000);
        this.setAnswer('' + answer,0);
        this.setAnswer('' + this.thousands + ',000',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_19',5.0419,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__19 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_19';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + '<span style="color: #f00;">' + this.tenthousands + '</span>' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        var answer = parseInt(this.tenthousands * 10000);
        this.setAnswer('' + answer,0);
        this.setAnswer('' + this.tenthousands + '0,000',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_18',5.0418,'5.nbt.a.1','hundred thousand');
*/
var i_5_nbt_a_1__18 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_18';

        this.setQuestion('What is the numerical value of the red digit in the number ' + '<span style="color: #f00;">' + this.hundredthousands + '</span>' + this.tenthousands + '' + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
       
	var answer = parseInt(this.hundredthousands * 100000); 
	this.setAnswer('' + answer,0);
	this.setAnswer('' + this.hundredthousands + '00,000',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_17',5.0417,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__17 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        //this.parent(sheet);
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nbt.a.1_17';

        var n = 1;
        var d = 10;

        var fraction = new Fraction(1,100);
        var answer = new Fraction(n,d);

        this.setQuestion('Write the simplest fraction that is ten times more than ' + fraction.getString());
        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_16',5.0416,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.nbt.a.1_16';

        var fraction = new Fraction(1,100);
        this.setQuestion('Write the decimal that is ten times more than ' + fraction.getString());

        this.setAnswer('.01',0);
        this.setAnswer('0.01',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_15',5.0415,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.nbt.a.1_15';

        var fraction = new Fraction(1,10);
        this.setQuestion('Write the decimal that is ten times less than ' + fraction.getString());

        this.setAnswer('.001',0);
        this.setAnswer('0.001',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_14',5.0414,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__14 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        //this.parent(sheet);
	this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nbt.a.1_14';

	
	var n = 1;
	var d = 100;

        var fraction = new Fraction(1,10);
        var answer = new Fraction(n,d);

	this.setQuestion('Write the simplest fraction that is ten times less than ' + fraction.getString()); 
        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_13',5.0413,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.nbt.a.1_13';

        this.setQuestion('Write the decimal that is ten times less than 1.');

        this.setAnswer('.1',0);
        this.setAnswer('0.1',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_12',5.0412,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__12 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        //this.parent(sheet);
	this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nbt.a.1_12';

	this.setQuestion('Write the simplest fraction that is ten times less than 1.'); 
	
	var n = 1;
	var d = 10;

        var answer = new Fraction(n,d);
        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_11',5.0411,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__11 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_11';

        this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + '<span style="color: #f00;">' + this.hundredthousandths + '</span>' + '');
        this.setAnswer('hundred thousandths',0);
        this.setAnswer('hundred thousandths place',1);
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

        this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + '<span style="color: #f00;">' + this.tenthousandths + '</span>' + '' + this.hundredthousandths);
        this.setAnswer('ten thousandths',0);
        this.setAnswer('ten thousandths place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_9',5.0409,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__9 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_9';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + '<span style="color: #f00;">' + this.thousandths + '</span>' + '' + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('thousandths',0);
        this.setAnswer('thousandths place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_8',5.0408,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__8 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_8';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + '<span style="color: #f00;">' + this.hundreths + '</span>' + '' + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('hundreths',0);
        this.setAnswer('hundreths place',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_7',5.0407,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__7 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_7';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + '<span style="color: #f00;">' + this.tenths + '</span>' + '' + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('tenths',0);
        this.setAnswer('tenths place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_6',5.0406,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__6 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_6';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + '<span style="color: #f00;">' + this.ones + '</span>' + '' + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('ones',0);
        this.setAnswer('ones place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_5',5.0405,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__5 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_5';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + '<span style="color: #f00;">' + this.tens + '</span>' + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('tens',0);
        this.setAnswer('tens place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_4',5.0404,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__4 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_4';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + '<span style="color: #f00;">' + this.hundreds + '</span>' + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('hundreds',0);
        this.setAnswer('hundreds place',1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_3',5.0403,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__3 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_3';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + this.tenthousands + '' + '<span style="color: #f00;">' + this.thousands + '</span>' + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('thousands',0);
        this.setAnswer('thousands place',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_2',5.0402,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__2 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_2';

   	this.setQuestion('What is the place value of the red digit called in the number ' + this.hundredthousands + '<span style="color: #f00;">' + this.tenthousands + '</span>' + '' + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
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
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_1';

   	this.setQuestion('What is the place value of the red digit called in the number ' + '<span style="color: #f00;">' + this.hundredthousands + '</span>' + this.tenthousands + '' + '' + this.thousands + ',' + this.hundreds + '' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);
        this.setAnswer('hundred thousands',0);
        this.setAnswer('hundred thousands place',1);
        this.setAnswer('hundred thousand',2);
        this.setAnswer('hundred thousand place',3);
}
});
