
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_17',4.0817,'4.nbt.a.3','round to 10,000 place with 9');
*/
var i_4_nbt_a_3__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_17';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor(Math.random()*9);
        this.tenthousandsA   = 9;
        this.tenthousandsB   = this.tenthousandsA;
        this.thousands       = Math.floor(Math.random()*4)+5;
        this.hundreds        = Math.floor(Math.random()*10);
        this.tens            = Math.floor(Math.random()*10);
        this.ones            = Math.floor(Math.random()*10);

        //a
        this.tenthousands_thousands = parseInt(this.tenthousandsA * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB = parseInt( (this.hundredthousands + 1) * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' is planning a trip across the country. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' totals up the miles ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will travel and it comes to ' + this.numberA + '. Round that number to the nearest ten thousands place.',0);
        this.setAnswer('' + this.numberB,0);


}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_15',4.0815,'4.nbt.a.3','middle number');
*/
var i_4_nbt_a_3__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_15';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor(Math.random()*8)+1;
        this.tenthousandsA    = Math.floor(Math.random()*8)+1;
        this.tenthousandsB    = parseInt(this.tenthousandsA + 1);
        this.thousands        = 0;
        this.thousandsC       = 5;
        this.hundreds         = 0;
        this.tens             = 0;
        this.ones             = 0;

        //a
        this.tenthousands_thousands = parseInt(this.tenthousandsA * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);
       
	//b 
	this.tenthousands_thousands = parseInt(this.tenthousandsB * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberB    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);
	
	//c 
	this.tenthousands_thousands = parseInt(this.tenthousandsA * 10000 + this.thousandsC * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberC    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        this.setQuestion('' + 'What number is exactly between ' + this.numberA + ' and ' + this.numberB + '?',0);
        this.setAnswer('' + this.numberC,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_14',4.0814,'4.nbt.a.3','round to 1000 with a 9.');
*/
var i_4_nbt_a_3__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_14';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.tenthousands = Math.floor(Math.random()*8)+1;
        this.thousandsA   = 9;
        this.thousandsB   = this.thousandsA;
        this.hundreds     = Math.floor(Math.random()*4)+5;
        this.tens         = Math.floor(Math.random()*10);
        this.ones         = Math.floor(Math.random()*10);

        //a
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousandsA * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB = parseInt(parseInt(this.tenthousands + 1) * 10000);

        this.setQuestion('' + 'Round ' + this.numberA + ' to the thousands place.',0);
        this.setAnswer('' + this.numberB,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_13',4.0813,'4.nbt.a.3','word problem. round to 1000 place.');
*/
var i_4_nbt_a_3__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_13';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.tenthousands = Math.floor(Math.random()*10);
        this.thousandsA   = Math.floor(Math.random()*9);
        this.thousandsB   = this.thousandsA;
        this.hundreds     = Math.floor(Math.random()*10);
        this.tens         = Math.floor(Math.random()*10);
        this.ones         = Math.floor(Math.random()*10);

        if (this.hundreds > 4)
        {
                this.thousandsB = parseInt(this.thousandsB + 1);
        }

        //a
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousandsA * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB = parseInt(this.tenthousands * 10000 + this.thousandsB * 1000);

        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + this.ns.mVideoGameOne + ' scores. To add faster ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' is rounding to the thousands place. What would ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' round ' + this.numberA + ' to?',0);
        this.setAnswer('' + this.numberB,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_12',4.0812,'4.nbt.a.3','estimate word problem. 10,000');
*/
var i_4_nbt_a_3__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_12';
        this.ns = new NameSampler();
        this.mStripCommas = true;


        this.tenthousandsA     = Math.floor(Math.random()*10);
        this.tenthousandsB     = this.tenthousandsA;
        this.thousands         = Math.floor(Math.random()*10);
        this.hundreds          = Math.floor(Math.random()*10);
        this.tens              = Math.floor(Math.random()*10);
        this.ones              = Math.floor(Math.random()*10);

        if (this.thousands > 4)
        {
                this.tenthousandsB = parseInt(this.tenthousandsB + 1);
        }

        //a
        this.tenthousands_thousands = parseInt(this.tenthousandsA * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB    = parseInt(this.tenthousandsB * 10000);

        this.setQuestion('' + this.ns.mNameOne + ' scored ' + this.numberA + ' points in ' + this.ns.mVideoGameOne + '. Estimate the score.',0);
        this.setAnswer('' + this.numberB,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_23',4.0823,'4.nbt.a.3','round to 10,000 place');
*/
var i_4_nbt_a_3__23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_23';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.hundredthousands = Math.floor(Math.random()*10);
        this.tenthousandsA   = Math.floor(Math.random()*10);
        this.tenthousandsB   = this.tenthousandsA;
        this.thousands       = Math.floor(Math.random()*9);
        this.hundreds        = Math.floor(Math.random()*10);
        this.tens            = Math.floor(Math.random()*10);
        this.ones            = Math.floor(Math.random()*10);

        if (this.thousands > 4)
        {
                this.tenthousandsB = parseInt(this.tenthousandsB + 1);
        }

        //a
        this.tenthousands_thousands = parseInt(this.tenthousandsA * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.hundredthousands * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB = parseInt(this.hundredthousands * 100000 + this.tenthousandsB * 10000);

        this.setQuestion('' + this.ns.mNameOne + ' is planning a trip across the country. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' totals up the miles ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will travel and it comes to ' + this.numberA + '. Round that number to the nearest ten thousands place.',0);
        this.setAnswer('' + this.numberB,0);


}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_43',4.0843,'4.nbt.a.3','round to 100,000 place. less than 100,000');
*/
var i_4_nbt_a_3__43 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_43';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        this.hundredthousandsA = Math.floor(Math.random()*9);
        this.hundredthousandsB = this.hundredthousandsA;
        this.tenthousands      = Math.floor(Math.random()*10);
        this.thousands         = Math.floor(Math.random()*10);
        this.hundreds          = Math.floor(Math.random()*10);
        this.tens              = Math.floor(Math.random()*10);
        this.ones              = Math.floor(Math.random()*10);

        if (this.tenthousands > 4)
        {
                this.hundredthousandsB = parseInt(this.hundredthousandsB + 1);
        }

        //a
        this.tenthousands_thousands = parseInt(this.tenthousands * 10000 + this.thousands * 1000);
        this.tens_ones = parseInt(this.tens * 10 + this.ones);
        this.numberA    = parseInt(this.hundredthousandsA * 100000 + this.tenthousands_thousands + this.hundreds * 100 + this.tens_ones);

        //b
        this.numberB = parseInt(this.hundredthousandsB * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' is planning a trip across the country. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' totals up the miles ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' will travel and it comes to ' + this.numberA + '. Round that number to the nearest hundred thousands place.',0);
        this.setAnswer('' + this.numberB,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_5',4.0805,'4.nbt.a.3','100,000');
*/
var i_4_nbt_a_3__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_5';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        var hundredthousands = Math.floor((Math.random()*8)+1);
        var tenthousands     = Math.floor(Math.random()*4)+5;
        var thousands        = Math.floor(Math.random()*10);
        var hundreds         = Math.floor(Math.random()*10);
        var tens             = Math.floor(Math.random()*10);
        var ones             = Math.floor(Math.random()*10);

        //a
        var tenthousands_thousands = parseInt(tenthousands * 10000 + thousands * 1000);
        var tens_ones              = parseInt(tens * 10 + ones);
        var numberA                = parseInt(hundredthousands * 100000 + tenthousands_thousands + hundreds * 100 + tens_ones);

        //b
        var numberB                = parseInt( (hundredthousands + 1) * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' made a youtube video with some ' + this.ns.mAnimalOne + ' in it that has ' + numberA + ' views. Estimate the views.',0);
        this.setAnswer('' + numberB,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_4',4.0804,'4.nbt.a.3','100,000');
*/
var i_4_nbt_a_3__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_4';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        var hundredthousands = Math.floor((Math.random()*9)+1);
        var tenthousands     = Math.floor(Math.random()*5);
        var thousands        = Math.floor(Math.random()*10);
        var hundreds         = Math.floor(Math.random()*10);
        var tens             = Math.floor(Math.random()*10);
        var ones             = Math.floor(Math.random()*10);

        //a
        var tenthousands_thousands = parseInt(tenthousands * 10000 + thousands * 1000);
        var tens_ones              = parseInt(tens * 10 + ones);
        var numberA                = parseInt(hundredthousands * 100000 + tenthousands_thousands + hundreds * 100 + tens_ones);

        //b
        var numberB                = parseInt(hundredthousands * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' made a youtube video with some ' + this.ns.mAnimalOne + ' in it that has ' + numberA + ' views. Estimate the views.',0);
        this.setAnswer('' + numberB,0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_3',4.0803,'4.nbt.a.3','round to 100,000 place');
*/
var i_4_nbt_a_3__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_3';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        var tenthousands = Math.floor(Math.random()*4)+5;
        var thousands    = Math.floor(Math.random()*10);
        var hundreds     = Math.floor(Math.random()*10);
        var tens         = Math.floor(Math.random()*10);
        var ones         = Math.floor(Math.random()*10);

        var tenthousands_thousands = parseInt(tenthousands * 10000 + thousands * 1000);
        var tens_ones              = parseInt(tens * 10 + ones);
        var numberA                = parseInt(tenthousands_thousands + hundreds * 100 + tens_ones);

        this.setQuestion('' + 'Round ' + numberA + ' to the nearest hundred thousands place.',0);
        this.setAnswer('' + '100000',0);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_2',4.0802,'4.nbt.a.3','round to 100,000 place');
*/
var i_4_nbt_a_3__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_2';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        var tenthousands = Math.floor(Math.random()*4)+1;
        var thousands    = Math.floor(Math.random()*10);
        var hundreds     = Math.floor(Math.random()*10);
        var tens         = Math.floor(Math.random()*10);
        var ones         = Math.floor(Math.random()*10);

        var tenthousands_thousands = parseInt(tenthousands * 10000 + thousands * 1000);
        var tens_ones              = parseInt(tens * 10 + ones);
        var numberA                = parseInt(tenthousands_thousands + hundreds * 100 + tens_ones);

        this.setQuestion('' + 'Round ' + numberA + ' to the nearest hundred thousands place.',0);
        this.setAnswer('' + '0',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_1',4.0801,'4.nbt.a.3','estimate word problem. 100,000');
*/
var i_4_nbt_a_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '4.nbt.a.3_1';
        this.ns = new NameSampler();
        this.mStripCommas = true;

        var hundredthousandsA = Math.floor((Math.random()*9)+1);
        var hundredthousandsB = hundredthousandsA;
        var tenthousands      = Math.floor(Math.random()*10);
        var thousands         = Math.floor(Math.random()*10);
        var hundreds          = Math.floor(Math.random()*10);
        var tens              = Math.floor(Math.random()*10);
        var ones              = Math.floor(Math.random()*10);

	if (tenthousands > 4)
	{
		hundredthousandsB = parseInt(hundredthousandsB + 1);	
	}

	//a
        var tenthousands_thousands = parseInt(tenthousands * 10000 + thousands * 1000);
        var tens_ones              = parseInt(tens * 10 + ones);
        var numberA                = parseInt(hundredthousandsA * 100000 + tenthousands_thousands + hundreds * 100 + tens_ones);
       
	//b 
        var numberB                = parseInt(hundredthousandsB * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' made a youtube video with some ' + this.ns.mAnimalOne + ' in it that has ' + numberA + ' views. Estimate the views.',0);
        this.setAnswer('' + numberB,0);
}
});


