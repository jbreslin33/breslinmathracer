/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_33',5.0633,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__33 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_33';

        this.ns = new NameSampler();

        this.tenths= Math.floor((Math.random()*9)+1);
        this.hundredths= Math.floor((Math.random()*9)+1);
        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

        this.setQuestion('' + this.ns.mNameOne + ' weighs a bug on a scale and it comes to ' + this.tenths_hundredths + ' thousandths of a gram. What is this amount represented as a decimal?',0);

        this.setAnswer('0.0' + this.tenths_hundredths,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_32',5.0632,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__32 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_32';

        this.ns = new NameSampler();

        this.tenths= Math.floor((Math.random()*9)+1);
        this.hundredths= Math.floor((Math.random()*9)+1);
        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

        this.setQuestion('' + this.ns.mNameOne + ' won ' + this.tenths_hundredths + ' ' + this.ns.mPlayedActivityOne + ' games out of 100. What is this amount represented as a decimal?',0);

        this.setAnswer('0.' + this.tenths_hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_31',5.0631,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__31 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_31';

        this.ns = new NameSampler();

        this.thousandths= Math.floor((Math.random()*9)+1);

        this.setQuestion('' + this.ns.mNameOne + ' raced ' + this.ns.mNameTwo + '. ' + this.ns.mNameOne + ' won the race by ' + this.ns.mNameMachine.getNumberName(this.thousandths) + ' thousandths of a second. What is this amount written as a decimal?',0);

        this.setAnswer('0.00' + this.thousandths,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_30',5.0630,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__30 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_30';

 	this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

	this.fraction = new Fraction(this.tenths_hundredths,1000);

        this.setQuestion('' + this.ns.mNameOne + ' has a pokemon card that is ' + this.fraction.getString() + ' of an inch wide. What is this amount written as a decimal?',0);

        this.setAnswer('0.0' + this.tenths_hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_29',5.0629,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__29 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_29';
        this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.thousandths = Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the decimal as you would say it in words: 0.00' + this.thousandths,0);

        this.setAnswer('' + this.ns.getNumberName(this.thousandths) + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_28',5.0628,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__28 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_28';
        this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.tenths = Math.floor((Math.random()*8)+2);
        this.hundredths = Math.floor((Math.random()*8)+2);

        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

        this.setQuestion('Write the decimal as you would say it in words: 0.' + this.tenths + this.hundredths + '0',0);

        this.setAnswer('' + this.ns.getNumberName(this.tenths_hundredths) + ' hundredths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_27',5.0627,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__27 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_27';

        this.ns = new NameMachine();
 	this.mChopWhiteSpace = false;

        this.hundreds = Math.floor((Math.random()*8)+2);
        this.tens = Math.floor((Math.random()*8)+2);
        this.ones = Math.floor((Math.random()*8)+2);
        this.tenths = Math.floor((Math.random()*8)+2);
        this.hundredths = Math.floor((Math.random()*8)+2);
        this.thousandths = Math.floor((Math.random()*8)+2);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);

        this.setQuestion('Write the decimal as you would say it in words: ' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);

        this.setAnswer('' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + ' and ' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.ns.getNumberName(this.hundredths_thousandths) + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_26',5.0626,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__26 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_26';

        this.ns = new NameMachine();
 	this.mChopWhiteSpace = false;

        this.tenths = Math.floor((Math.random()*8)+2);
        this.hundredths = Math.floor((Math.random()*8)+2);
        this.thousandths = Math.floor((Math.random()*8)+2);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);

        this.setQuestion('Write the decimal as you would say it in words: 0.' + this.tenths + this.hundredths + this.thousandths,0);

        this.setAnswer('' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.ns.getNumberName(this.hundredths_thousandths) + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_25',5.0625,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__25 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_25';
        this.ns = new NameMachine();
 	this.mChopWhiteSpace = false;

        this.tens = Math.floor((Math.random()*8)+2);
        this.ones = Math.floor((Math.random()*8)+2);
        this.tenths = 0;
        this.hundredths = Math.floor((Math.random()*8)+2);
        this.thousandths = Math.floor((Math.random()*8)+2);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
	this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);

        this.setQuestion('Write the decimal as you would say it in words: ' + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);

        this.setAnswer('' + this.ns.getNumberName(this.tens_ones) + ' and ' + this.ns.getNumberName(this.hundredths_thousandths) + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_24',5.0624,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__24 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_24';
        this.ns = new NameMachine();
 	this.mChopWhiteSpace = false;

        this.hundredths = Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the decimal as you would say it in words: 0.0' + this.hundredths,0);

        this.setAnswer('' + this.ns.getNumberName(this.hundredths) + ' hundredths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_23',5.0623,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_23';

        this.ns = new NameMachine();

        this.ones = Math.floor((Math.random()*9)+1);
        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
        this.hundredths_thousandths = this.ns.getNumberName(this.hundredths_thousandths);

        this.setQuestion('Convert to a decimal: ' + this.ns.getNumberName(this.ones) + ' and ' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.hundredths_thousandths + ' thousandths',0);

        this.setAnswer('' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_22',5.0622,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_22';

        this.ns = new NameMachine();

        this.hundredths = Math.floor((Math.random()*9)+1);

        this.setQuestion('Convert to a decimal: ' + this.ns.getNumberName(this.hundredths) + ' hundredths ',0);

        this.setAnswer('0.0' + this.hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_21',5.0621,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_21';

        this.ns = new NameMachine();

        this.hundreds = Math.floor((Math.random()*9)+1);
        this.tens = Math.floor((Math.random()*9)+1);
        this.ones = Math.floor((Math.random()*9)+1);
        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
        this.hundredths_thousandths = this.ns.getNumberName(this.hundredths_thousandths);

        this.setQuestion('Convert to a decimal: ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + ' and ' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.hundredths_thousandths + ' thousandths',0);

        this.setAnswer('' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_20',5.0620,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_20';

        this.ns = new NameMachine();

        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
        this.hundredths_thousandths = this.ns.getNumberName(this.hundredths_thousandths);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.tens_ones = this.ns.getNumberName(this.tens_ones);

        this.setQuestion('Convert to a decimal: ' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.hundredths_thousandths + ' thousandths',0);

        this.setAnswer('' + '0.' + this.tenths + this.hundredths + this.thousandths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_19',5.0619,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_19';

        this.ns = new NameMachine();

        this.tens = Math.floor((Math.random()*9)+1);
        this.ones = Math.floor((Math.random()*9)+1);
        this.tenths = 0;
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
        this.hundredths_thousandths = this.ns.getNumberName(this.hundredths_thousandths);
        
	this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.tens_ones = this.ns.getNumberName(this.tens_ones);

        this.setQuestion('Convert to a decimal: ' + this.tens_ones + ' and ' + this.hundredths_thousandths + ' thousandths',0);

        this.setAnswer('' + this.tens + '' + this.ones + '.0' + this.hundredths + this.thousandths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_18',5.0618,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_18';

        this.ns = new NameMachine();

        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);

        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);
	this.tenths_hundredths = this.ns.getNumberName(this.tenths_hundredths);

        this.setQuestion('Convert to a decimal: ' + this.tenths_hundredths + ' hundredths',0);

	this.setAnswer('0.' + this.tenths + this.hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_17',5.0617,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_17';

        this.ns = new NameMachine();

        this.hundreds = Math.floor((Math.random()*9)+1);
        this.tens = Math.floor((Math.random()*9)+1);
        this.ones = Math.floor((Math.random()*9)+1);
        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.tenths_hundredths_thousandths = parseInt(this.tenths * 100 + this.hundredths * 10 + this.thousandths);

        this.fraction = new Fraction(this.tenths_hundredths_thousandths,1000);

        this.setQuestion('Convert to a decimal: ' + this.hundreds + this.tens + this.ones + this.fraction.getString(),0);

        this.setAnswer('' + this.hundreds + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_16',5.0616,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_16';

        this.ns = new NameMachine();

        this.ones = Math.floor((Math.random()*9)+1);
        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*9)+1);

        this.tenths_hundredths_thousandths = parseInt(this.tenths * 100 + this.hundredths * 10 + this.thousandths);

        this.fraction = new Fraction(this.tenths_hundredths_thousandths,1000);

        this.setQuestion('Convert to a decimal: ' + this.ones + this.fraction.getString(),0);

        this.setAnswer('' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_15',5.0615,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_15';

        this.ns = new NameMachine();

        this.ones = Math.floor((Math.random()*9)+1);
        this.tens = Math.floor((Math.random()*9)+1);
        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);

        this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

        this.fraction = new Fraction(this.tenths_hundredths,100);

        this.setQuestion('Convert to a decimal: ' + this.tens + this.ones + this.fraction.getString(),0);

        this.setAnswer('' + this.tens + this.ones + '.' + this.tenths + this.hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_14',5.0614,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_14';

        this.ns = new NameMachine();

        this.tenths = Math.floor((Math.random()*9)+1);
        this.hundredths = Math.floor((Math.random()*9)+1);

	this.tenths_hundredths = parseInt(this.tenths * 10 + this.hundredths);

	this.fraction = new Fraction(this.tenths_hundredths,100); 	

        this.setQuestion('Convert to a decimal: ' + this.fraction.getString(),0);

        this.setAnswer('0.' + this.tenths + this.hundredths,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_13',5.0613,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_13';

        this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.ones =  Math.floor((Math.random()*8)+2);
        this.tenths =  Math.floor((Math.random()*8)+2);
        this.hundredths =  0;
        this.thousandths =  Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the number in words as it would be said aloud: ' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);

        this.ones = this.ns.getNumberName(this.ones);
        this.tenths = '' + this.ns.getNumberName(this.tenths);
        this.thousandths = '' + this.ns.getNumberName(this.thousandths);

        this.setAnswer('' + this.ones + ' and ' + this.tenths + ' hundred ' + this.thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_12',5.0612,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_12';
        this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.ones =  Math.floor((Math.random()*8)+2);
        this.tenths =  Math.floor((Math.random()*8)+2);
        this.hundredths =  0;
        this.thousandths =  Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the number in words as it would be said aloud: ' + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);

        this.ones = this.ns.getNumberName(this.ones);
        this.tenths = '' + this.ns.getNumberName(this.tenths);
	this.thousandths = '' + this.ns.getNumberName(this.thousandths);

        this.setAnswer('' + this.ones + ' and ' + this.tenths + ' hundred ' + this.thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_11',5.0611,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_11';
	this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.hundreds =  Math.floor((Math.random()*8)+2);
        this.tens =  Math.floor((Math.random()*8)+2);
        this.ones =  Math.floor((Math.random()*8)+2);
        this.tenths =  Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the number in words as it would be said aloud: ' + this.hundreds + this.tens + this.ones + '.' + this.tenths,0);

	var tens_ones = parseInt(this.tens * 10 + this.ones);	
	
	tens_ones = this.ns.getNumberName(tens_ones); 

	this.tenths = '' + this.ns.getNumberName(this.tenths); 	

	this.setAnswer('' + this.ns.getNumberName(this.hundreds) + ' hundred ' + tens_ones + ' and ' + this.tenths + ' tenths',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_10',5.0610,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_10';

	this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.hundredths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Write the number in words as it would be said aloud: ' + '0.0' + this.hundredths + this.thousandths,0);

	var hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
	
	hundredths_thousandths = this.ns.getNumberName(hundredths_thousandths); 	

	this.setAnswer('' + hundredths_thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_9',5.0609,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);
 

        this.mType = '5.nbt.a.3.a_9';
	this.ns = new NameMachine();
	this.mChopWhiteSpace = false;

        this.tens =  Math.floor((Math.random()*8)+2);
        this.ones =  Math.floor((Math.random()*8)+2);
        this.tenths =  Math.floor((Math.random()*8)+2);
        this.hundredths =  Math.floor((Math.random()*8)+2);
        this.thousandths =  Math.floor((Math.random()*8)+2);

        this.setQuestion('Write the number in words as it would be said aloud: ' + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);

	var tens_ones = parseInt(this.tens * 10 + this.ones);	
	var hundredths_thousandths = parseInt(this.hundredths * 10 + this.thousandths);
	var tenths_hundredths_thousandths = '';
	
	tens_ones = this.ns.getNumberName(tens_ones); 

	if (this.tenths == 0)
	{
		 tenths_hundredths_thousandths = this.ns.getNumberName(hundredths_thousandths);	
	} 
	else
	{
		 tenths_hundredths_thousandths = '' + this.ns.getNumberName(this.tenths) + ' hundred ' + this.ns.getNumberName(hundredths_thousandths); 	
	}

	this.setAnswer('' + tens_ones + ' and ' + tenths_hundredths_thousandths + ' thousandths',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_8',5.0608,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.a_8';

        this.ns = new NameMachine();

        this.tens =  Math.floor((Math.random()*9)+1);
        this.ones =  Math.floor((Math.random()*9)+1);
        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundredths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

	this.tenths_fraction = new Fraction(1,10);
	this.hundredths_fraction = new Fraction(1,100);
	this.thousandths_fraction = new Fraction(1,1000);

        this.setQuestion('' + 'Evaluate: ' + this.tens + ' &times 10 + ' + this.ones + ' &times 1 + ' + this.tenths + ' &times ' + this.tenths_fraction.getString() + ' + ' + this.hundredths + ' &times ' + this.hundredths_fraction.getString() + ' + ' + this.thousandths + ' &times ' + this.thousandths_fraction.getString(),0);

        this.setAnswer('' + this.tens + this.ones + '.' + this.tenths + this.hundredths + this.thousandths,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_7',5.0607,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,350,50,525,150);

        this.mType = '5.nbt.a.3.a_7';

        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundredths =  Math.floor((Math.random()*9)+1);
        this.thousandths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Write in expanded form using fractions: 0.' + this.tenths + this.hundredths + this.thousandths);
        this.setAnswer('' + this.tenths + 'x' + '1/10+' + this.hundredths + 'x' + '1/100+' + this.thousandths + 'x' + '1/1000',0);
        this.setAnswer('' + this.tenths + '*' + '1/10+' + this.hundredths + '*' + '1/100+' + this.thousandths + 'x' + '1/1000',1);
        this.setAnswer('' + this.tenths + '/10+' + this.hundredths + '/100+' + this.thousandths + '/1000',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_6',5.0606,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_6';

        this.tenths =  Math.floor((Math.random()*9)+1);
        this.hundredths =  Math.floor((Math.random()*9)+1);

        this.setQuestion('Write in expanded form using fractions: 0.' + this.tenths + this.hundredths);
        this.setAnswer('' + this.tenths + 'x' + '1/10+' + this.hundredths + 'x' + '1/100',0);
        this.setAnswer('' + this.tenths + '*' + '1/10+' + this.hundredths + '*' + '1/100',1);
        
        this.setAnswer('' + this.tenths + '/10+' + this.hundredths + '/100',2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_5',5.0605,'5.nbt.a.3.a','add zero');
*/
var i_5_nbt_a_3_a__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_5';

        var n =  Math.floor((Math.random()*9)+1);
        var d = 1000;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form. Do not simplify: ' + fraction.getString());
        this.setAnswer('0.00' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_4',5.0604,'5.nbt.a.3.a','add zero');
*/
var i_5_nbt_a_3_a__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_4';

        var n =  Math.floor((Math.random()*90)+10);
        var d = 1000;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form. Do not simplify: ' + fraction.getString());
        this.setAnswer('0.0' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_3',5.0603,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_3';

	var n =  Math.floor((Math.random()*900)+100);
	var d = 1000;
	
 	var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form. Do not simplify:' + fraction.getString());
        this.setAnswer('0.' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_2',5.0602,'5.nbt.a.3.a','add zero for tenths');
*/
var i_5_nbt_a_3_a__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_2';

        var n =  Math.floor((Math.random()*9)+1);
        var d = 100;

        var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form. Do not simplify: ' + fraction.getString());
        this.setAnswer('0.0' + n,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.a_1',5.0601,'5.nbt.a.3.a','');
*/
var i_5_nbt_a_3_a__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3.a_1';

	var n =  Math.floor((Math.random()*90)+10);
	var d = 100;
	
 	var fraction = new Fraction(n,d);

        this.setQuestion('Write in decimal form. Do not simplify: ' + fraction.getString());
        this.setAnswer('0.' + n,0);
}
});
