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
        this.mChopWhiteSpace = false;

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

