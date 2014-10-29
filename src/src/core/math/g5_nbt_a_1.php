
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

var PlaceValueWholeNumberColorsFraction = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

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
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_42',5.0442,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__42 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_42';

	this.setQuestion('What digit is in the ten thousands place: ' + this.tenthousands + this.thousands + this.hundreds + this.tens + this.ones + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths + ''); 
        this.setAnswer('' + this.tenthousands,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_41',5.0441,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__41 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_41';
        this.mChopWhiteSpace = true;
        this.number = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + this.number + ' is ____________ the value of ' + '0.' + this.number + ' Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('ten times',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_40',5.0440,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__40 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_40';
        this.mChopWhiteSpace = true;
        this.number = Math.floor(Math.random()*9)+1;

        this.setQuestion('0.' + this.number + ' is ____________ the value of ' + this.number + ' Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('one tenth',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_39',5.0439,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__39 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_39';
        this.mChopWhiteSpace = true;
        this.number = Math.floor(Math.random()*9)+1;

        this.setQuestion('0.' + this.number + ' is ____________ the value of ' + '0.0' + this.number + ' Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('ten times',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_38',5.0438,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__38 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_38';
	this.mChopWhiteSpace = true;
        this.number = Math.floor(Math.random()*9)+1;

        this.setQuestion('0.0' + this.number + ' is ____________ the value of ' + '0.' + this.number + ' Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('one tenth',0);
}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_37',5.0437,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__37 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_37';
	this.mChopWhiteSpace = true;

        this.setQuestion('One tenth is ____________ the value of one . Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('one tenth',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_36',5.0436,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__36 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_36';
	this.mChopWhiteSpace = true;

        this.setQuestion('One is ____________ the value of one tenth. Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('ten times',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_35',5.0435,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__35 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_35';
	this.mChopWhiteSpace = true;

        this.setQuestion('One hundreth is ____________ the value of one tenth. Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('one tenth',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_34',5.0434,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__34 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95, 300,50,525,100);

        this.mType = '5.nbt.a.1_34';
	this.mChopWhiteSpace = true;

        this.setQuestion('One tenth is ____________ the value of one hundreth. Use ' + '<span style="color: #f00;">' + 'one tenth ' + '</span>' + ' or ' + '<span style="color: #f00;">' + ' ten times ' + '</span>' + ' as the answer.');

        this.setAnswer('ten times',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_33',5.0433,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__33 = new Class(
{
Extends: PlaceValueWholeNumberColorsFraction,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_33';

        this.setQuestion('What is the fractional value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + '<span style="color: #f00;">' + this.hundredthousandths + '</span>' + ' Do not simplify.');

        var answer = new Fraction(this.hundredthousandths,100000);

        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_32',5.0432,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__32 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_32';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + '<span style="color: #f00;">' + this.hundredthousandths + '</span>');

        this.setAnswer('.0000' + this.hundredthousandths,0);
        this.setAnswer('0.0000' + this.hundredthousandths,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_31',5.0431,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__31 = new Class(
{
Extends: PlaceValueWholeNumberColorsFraction,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_31';

        this.setQuestion('What is the fractional value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + '<span style="color: #f00;">' + this.tenthousandths + '</span>' + this.hundredthousandths + ' Do not simplify.');

        var answer = new Fraction(this.tenthousandths,10000);

        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_30',5.0430,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__30 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_30';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + '<span style="color: #f00;">' + this.tenthousandths + '</span>' + this.hundredthousandths);

        this.setAnswer('.000' + this.tenthousandths,0);
        this.setAnswer('0.000' + this.tenthousandths,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_29',5.0429,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__29 = new Class(
{
Extends: PlaceValueWholeNumberColorsFraction,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_29';

        this.setQuestion('What is the fractional value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + '<span style="color: #f00;">' + this.thousandths + '</span>' + this.tenthousandths + this.hundredthousandths + ' Do not simplify.');

        var answer = new Fraction(this.thousandths,1000);

        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_28',5.0428,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__28 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_28';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundreths + '<span style="color: #f00;">' + this.thousandths + '</span>' + this.tenthousandths + this.hundredthousandths);

        this.setAnswer('.00' + this.thousandths,0);
        this.setAnswer('0.00' + this.thousandths,1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_27',5.0427,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__27 = new Class(
{
Extends: PlaceValueWholeNumberColorsFraction,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_27';

        this.setQuestion('What is the fractional value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + '<span style="color: #f00;">' + this.hundreths + '</span>' + this.thousandths + this.tenthousandths + this.hundredthousandths + ' Do not simplify.');

        var answer = new Fraction(this.hundreths,100);

        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_26',5.0426,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__26 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_26';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + this.tenths + '<span style="color: #f00;">' + this.hundreths + '</span>' + this.thousandths + this.tenthousandths + this.hundredthousandths);

        this.setAnswer('.0' + this.hundreths,0);
        this.setAnswer('0.0' + this.hundreths,1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_25',5.0425,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__25 = new Class(
{
Extends: PlaceValueWholeNumberColorsFraction,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_25';

        this.setQuestion('What is the simplest fractional value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + '<span style="color: #f00;">' + this.tenths + '</span>' + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths + ' Do not simplify.');
        
	var answer = new Fraction(this.tenths,10);

        this.setAnswer(answer.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_24',5.0424,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__24 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_24';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + this.ones + '.' + '<span style="color: #f00;">' + this.tenths + '</span>' + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        this.setAnswer('.' + this.tenths,0);
        this.setAnswer('0.' + this.tenths,1);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_23',5.0423,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__23 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_23';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + this.tens + '<span style="color: #f00;">' + this.ones + '</span>' + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        this.setAnswer(this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_22',5.0422,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__22 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_22';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + this.hundreds + '<span style="color: #f00;">' + this.tens + '</span>' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        this.setAnswer(this.tens + '0',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.1_21',5.0421,'5.nbt.a.1','');
*/
var i_5_nbt_a_1__21 = new Class(
{
Extends: PlaceValueWholeNumberColors,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.nbt.a.1_21';

        this.setQuestion('What is the numerical value of the red digit in the number ' + this.hundredthousands + this.tenthousands + this.thousands + ',' + '<span style="color: #f00;">' + this.hundreds + '</span>' + this.tens + '' + this.ones + '.' + this.tenths + this.hundreths + this.thousandths + this.tenthousandths + this.hundredthousandths);

        this.setAnswer('' + this.hundreds + '00',0);
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

        this.setAnswer('.01',0);
        this.setAnswer('0.01',1);
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
