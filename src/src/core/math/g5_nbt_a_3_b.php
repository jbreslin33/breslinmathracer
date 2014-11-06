/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3.b_1',5.0701,'5.nbt.a.3.b','');
*/
var i_5_nbt_a_3_b__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.3.b_1';

        this.ns = new NameSampler();

        this.tenths= Math.floor((Math.random()*9)+1);
        this.hundreths= Math.floor((Math.random()*9)+1);
        this.tenths_hundreths = parseInt(this.tenths * 10 + this.hundreths);

        this.setQuestion('' + this.ns.mNameOne + ' weighs a bug on a scale and it comes to ' + this.tenths_hundreths + ' thousandths of a gram. What is this amount represented as a decimal?',0);

        this.setAnswer('0.0' + this.tenths_hundreths,0);
}
});

