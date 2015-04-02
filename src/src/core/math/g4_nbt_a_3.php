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

