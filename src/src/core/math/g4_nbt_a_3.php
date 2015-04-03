
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_3',4.0803,'4.nbt.a.3','');
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

        this.tenthousands = Math.floor(Math.random()*10);
        this.thousandsA   = Math.floor(Math.random()*10);
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

        this.setQuestion('' + 'Round ' + this.numberA + ' to the thousands place.',0);
        this.setAnswer('' + this.numberB,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_2',4.0802,'4.nbt.a.3','');
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
insert into item_types(id,progression,core_standards_id,description) values ('4.nbt.a.3_1',4.0801,'4.nbt.a.3','');
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

        this.hundredthousandsA = Math.floor((Math.random()*9)+1);
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
        this.numberB    = parseInt(this.hundredthousandsB * 100000);

        this.setQuestion('' + this.ns.mNameOne + ' made a youtube video with some ' + this.ns.mAnimalOne + ' in it that has ' + this.numberA + ' views. Estimate the views.',0);
        this.setAnswer('' + this.numberB,0);
}
});


