
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_55',4.0755,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__55 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_55';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = 0;
        this.thousands        = 0;
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + 'thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_54',4.0754,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__54 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_54';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = 0;
        this.thousands        = 0;
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + 'thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});

//52,53

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_51',4.0751,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__51 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_51';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = 0;
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_50',4.0750,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__50 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_50';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = 0;
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//48,49

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_48',4.0748,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__48 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_48';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = 0;
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);
   
	this.setQuestion('Write the number in standard form: ' + parseInt(this.hundredthousands * 100000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_47',4.0747,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__47 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_47';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = 0;
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_46',4.0746,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__46 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_46';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = 0;
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});

//44,45

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_45',4.0745,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__45 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_45';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.hundredthousands * 100000) + '+' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_44',4.0744,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__44 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_44';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.hundredthousands * 100000) + '+' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_43',4.0743,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__43 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_43';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_42',4.0742,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__42 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_42';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = 0;
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});

//40,41

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_41',4.0741,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__41 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_41';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in extended form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.hundredthousands * 100000) + '+' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' +  parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_40',4.0740,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__40 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_40';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.hundredthousands * 100000) + '+' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' +  parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_39',4.0739,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__39 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_39';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_38',4.0738,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__38 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_38';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor((Math.random()*8)+1);
        this.tenthousands     = Math.floor((Math.random()*8)+1);
        this.thousands        = Math.floor((Math.random()*8)+1);
        this.hundreds         = Math.floor((Math.random()*8)+1);
        this.tens             = Math.floor((Math.random()*8)+1);
        this.ones             = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundredthousands) + ' hundred ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//36,37

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_37',4.0737,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__37 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_37';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands  = Math.floor((Math.random()*8)+1);
        this.thousands     = 0;
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_36',4.0736,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__36 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_36';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands  = Math.floor((Math.random()*8)+1);
        this.thousands     = 0;
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_35',4.0735,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__35 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_35';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.tenthousands  = Math.floor((Math.random()*8)+1);
        this.thousands     = 0;
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_34',4.0734,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__34 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_34';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands  = Math.floor((Math.random()*8)+1);
        this.thousands     = 0;
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//32,33

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_33',4.0733,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__33 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_33';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = 0;
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_32',4.0732,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__32 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_32';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = 0;
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
	this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_31',4.0731,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__31 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_31';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = 0;
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_30',4.0730,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__30 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_30';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = 0;
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//28,29

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_29',4.0729,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__29 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_29';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands    = Math.floor((Math.random()*8)+1);
        this.hundreds     = Math.floor((Math.random()*8)+1);
        this.tens         = 0;
        this.ones         = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number ,0);
        this.setAnswer('' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_28',4.0728,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__28 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_28';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands    = Math.floor((Math.random()*8)+1);
        this.hundreds     = Math.floor((Math.random()*8)+1);
        this.tens         = 0;
        this.ones         = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_27',4.0727,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__27 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_27';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = 0;
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_26',4.0726,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__26 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_26';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = 0;
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//24,25

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_25',4.0725,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__25 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_25';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_24',4.0724,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__24 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_24';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.tenthousands * 10000) + '+' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones ,0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_23',4.0723,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_23';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_22',4.0722,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_22';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.tenthousands = Math.floor((Math.random()*8)+1);
        this.thousands     = Math.floor((Math.random()*8)+1);
        this.hundreds      = Math.floor((Math.random()*8)+1);
        this.tens          = Math.floor((Math.random()*8)+1);
        this.ones          = Math.floor((Math.random()*8)+1);

        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName( parseInt(this.tenthousands * 10 + this.thousands)) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//20,21

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_21',4.0721,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_21';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = 0;
        this.tens      = Math.floor((Math.random()*8)+1);
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_20',4.0720,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_20';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = 0;
        this.tens      = Math.floor((Math.random()*8)+1);
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number in standard form: ' + parseInt(this.thousands * 1000) + '+' + parseInt(this.tens * 10) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_19',4.0719,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_13';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = 0;
        this.tens      = Math.floor((Math.random()*8)+1);
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.thousands) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_18',4.0718,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_18';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = 0;
        this.tens      = Math.floor((Math.random()*8)+1);
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.thousands) + ' thousand ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});

//16,17
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_17',4.0717,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_17';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = Math.floor((Math.random()*8)+1);
        this.tens      = 0;
        this.ones      = Math.floor((Math.random()*8)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_16',4.0716,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_16';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = Math.floor((Math.random()*8)+1);
        this.tens      = 0;
        this.ones      = Math.floor((Math.random()*8)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write in standard form: ' + parseInt(this.thousands * 1000) + '+' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_15',4.0715,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_15';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = Math.floor((Math.random()*8)+1);
        this.tens      = 0;
        this.ones      = Math.floor((Math.random()*8)+1);
	this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.thousands) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_14',4.0714,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_14';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.thousands = Math.floor((Math.random()*8)+1);
        this.hundreds  = Math.floor((Math.random()*8)+1);
        this.tens      = 0;
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number    = parseInt(this.thousands * 1000 + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.thousands) + ' thousand ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});
//12,13

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_13',4.0713,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_13';
        this.ns = new NameMachine();

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = 0;
        this.ones = Math.floor((Math.random()*8)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the following number that is in standard form in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_12',4.0712,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_12';
        this.ns = new NameMachine();

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = 0;
        this.ones = Math.floor((Math.random()*8)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the following number in standard form that is written in expanded form: ' + parseInt(this.hundreds * 100) + '+' + this.ones,0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_11',4.0711,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_11';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = 0;
        this.ones = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_10',4.0710,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_10';
        this.ns = new NameMachine();
        this.mStripCommas = true;

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = 0;
        this.ones = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);
       
        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
	this.setAnswer('' + this.number,0);
}
});
//8,9

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_9',4.0709,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_9';
        this.ns = new NameMachine();
	this.mStripCommas = true;
	
        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = Math.floor((Math.random()*8)+1);
        this.ones = Math.floor((Math.random()*8)+1);

        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the following number in expanded form: ' + this.number,0);
        this.setAnswer('' + parseInt(this.hundreds * 100) + '+' + parseInt(this.tens * 10) + '+' + this.ones ,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_8',4.0708,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_8';
        this.ns = new NameMachine();
	this.mStripCommas = true;

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = Math.floor((Math.random()*8)+1);
        this.ones = Math.floor((Math.random()*8)+1);
        
	this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number represented by the following expanded form: ' + parseInt(this.hundreds * 100) + ' + ' + parseInt(this.tens * 10) + ' + ' + this.ones ,0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_7',4.0707,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_7';
        this.ns = new NameMachine();
        this.mChopWhiteSpace = false;

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = Math.floor((Math.random()*8)+1);
        this.ones = Math.floor((Math.random()*8)+1);
	this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number as you would say it in words: ' + this.number,0);
        this.setAnswer('' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_6',4.0706,'4.nbt.a.2','');
*/
var i_4_nbt_a_2__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.2_6';
        this.ns = new NameMachine();
	this.mStripCommas = true

        this.hundreds = Math.floor((Math.random()*8)+1);
        this.tens = Math.floor((Math.random()*8)+1);
        this.ones = Math.floor((Math.random()*8)+1);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.number = parseInt(this.hundreds * 100 + this.tens_ones);

        this.setQuestion('Write the number: ' + this.ns.getNumberName(this.hundreds) + ' hundred ' + this.ns.getNumberName(this.tens_ones) + '',0);
        this.setAnswer('' + this.number,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_5',4.0705,'4.nbt.a.2','This type will will ask >, <, = based on place value');
*/

var i_4_nbt_a_2__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_5';

		var number = [];

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var answer = ''; 
		
		var rand = 0;

		// pick randon digits for first number
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		number[0] = '' + thousands + ',' + hundreds + tens + ones;

		number[1] = thousands*1000 + hundreds*100 + tens*10 + ones*1;

		// pick randon digits for first number
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		//rand = 1 + Math.floor((Math.random()*9));
		//thousands = rand;

		number[2] = '' + thousands + ',' + hundreds + tens + ones;

		number[3] = thousands*1000 + hundreds*100 + tens*10 + ones*1;

		this.setQuestion(number[0] + ' is ? ' + number[2]);

		if (number[1] > number[3])
			answer = 'greater than';
		else if (number[1] < number[3])
			answer = 'less than';	
		else
			answer = 'equal to';

                this.setAnswer('' + answer,0);

		this.mButtonA.setAnswer('greater than');
                this.mButtonB.setAnswer('less than');
                this.mButtonC.setAnswer('equal to');

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);         

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_4',4.0704,'4.nbt.a.2','This type will give expanded form and ask for number');
*/

var i_4_nbt_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_4';

		var number = [];

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;

		var expanded = 0; 
		
		var rand = 0;
		var rand2 = 0;

		// pick randon digits
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;

		// answer
		number[0] = '' + thousands + ',' + hundreds + tens + ones;

		// put numbers in expanded form
		ones1 = '' + ones;
		tens1 = '' + tens + '0';
		hundreds1 = '' + hundreds + '00';
		thousands1 = '' + thousands + '000';

		// question
		expanded = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		number[1] = '' + thousands + tens + ones;
		number[2] = '' + thousands + hundreds + ones;
		number[3] = '' + thousands + hundreds + tens;

		number[4] = '' + thousands + '0' + ',' + hundreds + tens + ones;
		number[5] = '' + thousands + '00' + ',' + hundreds + tens + ones;
		//number[6] = '' + thousands + '000' + ',' + hundreds + tens + ones;
                  
		this.setQuestion('What is ' + expanded + ' in number form?');
                this.setAnswer('' + number[0],0);

		this.mButtonA.setAnswer('' + number[0]);
		rand = 1 + Math.floor((Math.random()*5));
                this.mButtonB.setAnswer('' + number[rand]);

		do {
    			rand2 = 1 + Math.floor((Math.random()*5));
		}
		while (rand == rand2);		

                this.mButtonC.setAnswer('' + number[rand2]);

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);

                this.shuffle(1);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_3',4.0703,'4.nbt.a.2','This type will give number and ask for expanded form');
*/

var i_4_nbt_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_3';

		var number = '';

		var ones = 0;
		var tens = 0;
		var hundreds = 0;
		var thousands = 0;
		var tenthousands = 0;
		var hundredthousands = 0;
		var tenthousands1 = 0;
		var hundredthousands1 = 0;

		var expanded = []; 
		
		var rand = 0;
		var rand2 = 0;

		// pick randon digits
		rand = 1 + Math.floor((Math.random()*9));
		ones = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tens = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundreds = rand;
		rand = 1 + Math.floor((Math.random()*9));
		thousands = rand;
		rand = 1 + Math.floor((Math.random()*9));
		tenthousands = rand;
		rand = 1 + Math.floor((Math.random()*9));
		hundredthousands = rand;

		// put numbers in expanded form
		ones1 = '' + ones;
		tens1 = '' + tens + '0';
		hundreds1 = '' + hundreds + '00';
		thousands1 = '' + thousands + ',000';
		tenthousands1 = '' + tenthousands + '0,000';
		hundredthousands1 = '' + hundredthousands + '00,000';

	    rand = 1 + Math.floor((Math.random()*2));
	
	    if (rand == 1)
	    {
		number = '' + thousands + ',' + hundreds + tens + ones;	
		
		// answer
		expanded[0] = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		expanded[1] = '' + thousands + '0,000 +' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[2] = '' + thousands1 + '+' + hundreds1 + '0 +' + tens1 + '+' + ones1;
		expanded[3] = '' + thousands1 + '+' + hundreds1 + '+' + tens1 + '0 +' + ones1;

		expanded[4] = '' + thousands + ',' + hundreds + '00 +' + tens1 + '+' + ones1;
		expanded[5] = '' + thousands1 + '+' + hundreds + tens + '0 +' + ones1;
		expanded[6] = '' + thousands1 + '+' + hundreds1 + '+' + tens + ones;
            }
	    if (rand == 2)
	    {
		number = '' + tenthousands + thousands + ',' + hundreds + tens + ones;	
		
		// answer
		expanded[0] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;

		// create wrong answers to choose at random
		expanded[1] = '' + tenthousands + '00,000 +' + thousands1 + '+' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[2] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds + ',000 +' + tens1 + '+' + ones1;
		expanded[3] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens1 + '0 +' + ones1;

		expanded[4] = '' + tenthousands + thousands + ',000 +' + hundreds1 + '+' + tens1 + '+' + ones1;
		expanded[5] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds + tens + '0 +' + ones1;
		expanded[6] = '' + tenthousands1 + '+' + thousands1 + '+' + hundreds1 + '+' + tens + ones;
            }
	   
		this.setQuestion('What is ' + number + ' in expanded form?');
                this.setAnswer('' + expanded[0],0);

		this.mButtonA.setAnswer('' + expanded[0]);
		rand = 1 + Math.floor((Math.random()*6));
                this.mButtonB.setAnswer('' + expanded[rand]);

		do {
    			rand2 = 1 + Math.floor((Math.random()*6));
		}
		while (rand == rand2);		

                this.mButtonC.setAnswer('' + expanded[rand2]);

		this.mButtonA.setSize(175,100);
                this.mButtonB.setSize(175,100);
                this.mButtonC.setSize(175,100);

                this.shuffle(1);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_2',4.0702,'4.nbt.a.2','This type will give the number and ask for name');
*/

var i_4_nbt_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_2';

		var thousands;
		var hundreds;
		var hundreds2;
		var tens;
		var ones;
		var digits;
		var digits1;
		var digits2;
		var words;
		var words1 = '';
		var words2 = '';
		var temp;
		var dash1 = '-';
		var dash2 = '-';

		var hund = 'hundred';
		var thous = 'thousand';
		var hundthous = 'hundred';


		var numbers3 = ['','one','two','three','four','five','six','seven','eight','nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
		var numbers2 = ['', 'one', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy','eighty','ninety'];
		var numbers1 = ['','one','two','three','four','five','six','seven','eight','nine'];


		// create digits
		hundredthousands = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundredthousands = 0;
			hundthous = ' ';
		}
		tenthousands = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tenthousands = 0;
			dash1 = '';
		}
		thousands = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			thousands = 0;
			dash1 = '';
		}
		hundreds = 1 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundreds = 0;
			hund = ' ';
		}
		tens = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tens = 0;
			dash2 = '';
		}
		ones = 1 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			ones = 0;
			dash2 = '';
		}

		// create 4-digit number and 2 wrong answers
		if(thousands == 0)
				thousands = 1 + Math.floor((Math.random()*9));
		digits = '' + thousands + ',' + hundreds + tens + ones;
		digits1 = '' + thousands + '0,' + hundreds + tens + ones;
		digits2 = '' + thousands + '00,' + hundreds + tens + ones;
		// put digits in word form
		words = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		if (hundreds == 0)
		{
			hundreds2 = 1 + Math.floor((Math.random()*9));
		}
		else
		{
			hundreds2 = 1 + hundreds;
		}

		words1 = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds2] + ' ' + 'hundred' + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		if (ones == 0)
		{
			ones2 = 1 + Math.floor((Math.random()*9));
			if (tens > 0)
				dash2 = '-';
		}
		else
		{
			ones2 = 1 + ones;
		}

		words2 = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones2];

		rand = 0 + Math.floor((Math.random()*1));

		// create 5-digit number and 2 wrong answers
		if(rand == 1)
		{
			if(tenthousands == 0)
				tenthousands = 2 + Math.floor((Math.random()*8));
			digits = '' + tenthousands + thousands + ',' + hundreds + tens + ones;
			
			// put digits in word form			
			words = '' + numbers2[tenthousands] + dash1 + words;
			words1 = '' + numbers2[tenthousands] + dash1 + words1;
			words2 = '' + numbers2[tenthousands] + dash1 + words2;
		}
		// create 6-digit number and 2 wrong answers
		if(rand == 2)
		{
			if(hundredthousands == 0)
			{
				hundredthousands = 1 + Math.floor((Math.random()*9));
				hundthous = 'hundred';
			}
			digits = '' + hundredthousands + tenthousands + thousands + ',' + hundreds + tens + ones;
		
			// put digits in word form
			words = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words;
			words1 = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words1;
			words2 = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words2;
		}

		
                // How do you write this number using digits?
		// How do you write this number using words?  
		this.setQuestion('What is ' + digits + ' in word form?');
                this.setAnswer('' + words,0);

                this.mButtonA.setAnswer('' + words);
                this.mButtonB.setAnswer('' + words1);
                this.mButtonC.setAnswer('' + words2);
                this.shuffle(1);

		this.mButtonA.setSize(165,100);
                this.mButtonB.setSize(165,100);
                this.mButtonC.setSize(165,100);

        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.2_1',4.0701,'4.nbt.a.2','This type will give the name and ask for number');
*/

var i_4_nbt_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.nbt.a.2_1';

		var thousands;
		var hundreds;
		var tens;
		var ones;
		var digits;
		var digits1;
		var digits2;
		var words;
		var temp;
		var dash1 = '-';
		var dash2 = '-';

		var hund = 'hundred';
		var thous = 'thousand';
		var hundthous = 'hundred';


		var numbers3 = ['','one','two','three','four','five','six','seven','eight','nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
		var numbers2 = ['', 'one', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy','eighty','ninety'];
		var numbers1 = ['','one','two','three','four','five','six','seven','eight','nine'];


		// create digits
		hundredthousands = 1 + Math.floor((Math.random()*9));
		//rand = 1 + Math.floor((Math.random()*3));
		//if (rand == 1)
		//{
			//hundredthousands = 0;
			//hundthous = ' ';
		//}
		tenthousands = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tenthousands = 0;
			dash1 = '';
		}
		thousands = 1 + Math.floor((Math.random()*9));
		
		hundreds = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			hundreds = 0;
			hund = ' ';
		}
		tens = 2 + Math.floor((Math.random()*8));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			tens = 0;
			dash2 = '';
		}
		ones = 1 + Math.floor((Math.random()*9));
		rand = 1 + Math.floor((Math.random()*3));
		if (rand == 1)
		{
			ones = 0;
			dash2 = '';
		}

		// create 4-digit number and 2 wrong answers
		digits = '' + thousands + ',' + hundreds + tens + ones;
		digits1 = '' + thousands + '0,' + hundreds + tens + ones;
		digits2 = '' + thousands + '00,' + hundreds + tens + ones;
		// put digits in word form
		words = '' + numbers1[thousands] + ' ' + thous + ' ' + numbers1[hundreds] + ' ' + hund + ' ' +  numbers2[tens] + dash2 + numbers1[ones];

		rand = 1 + Math.floor((Math.random()*3));

		// create 5-digit number and 2 wrong answers
		if(rand == 1)
		{

			if(tenthousands == 0)
			{
				tenthousands = 2 + Math.floor((Math.random()*8));
				dash1 = '-';
			}			

			digits = '' + tenthousands + thousands + ',' + hundreds + tens + ones;
			digits1 = '' + tenthousands + ',' + hundreds + tens + ones;
			digits2 = '' + tenthousands + thousands + '0,' + hundreds + tens + ones;
			// put digits in word form			
			words = '' + numbers2[tenthousands] + dash1 + words;
		}
		// create 6-digit number and 2 wrong answers
		if(rand == 2)
		{
			digits = '' + hundredthousands + tenthousands + thousands + ',' + hundreds + tens + ones;
			digits1 = '' + hundredthousands + thousands + ',' + hundreds + tens + ones;
			digits2 = '' + hundredthousands + tenthousands + ',' + hundreds + tens + ones;
			// put digits in word form
			words = '' + numbers1[hundredthousands] + ' ' + hundthous + ' ' + numbers2[tenthousands] + dash1 + words;
		}

		
                // How do you write this number using digits?
		// How do you write this number using words?  
		this.setQuestion('What is ' + words + ' in number form?');
                this.setAnswer('' + digits,0);

                this.mButtonA.setAnswer('' + digits);
                this.mButtonB.setAnswer('' + digits1);
                this.mButtonC.setAnswer('' + digits2);
                this.shuffle(1);
        }
});




