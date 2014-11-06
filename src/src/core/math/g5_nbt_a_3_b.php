
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

        this.tenths_a      = Math.floor((Math.random()*9)+1);
        this.hundreths_a   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.thousandths_a * 100 + this.tenths_a * 10 + this.hundreths_a);
        
	this.tenths_b      = Math.floor((Math.random()*9)+1);
        this.hundreths_b   = Math.floor((Math.random()*9)+1);
        this.thousandths_b = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_thousandths_b = parseInt(this.thousandths_b * 100 + this.tenths_b * 10 + this.hundreths_b);

        this.setQuestion('' + this.ns.mNameOne + ' has a batting average of 0.' + this.tenths_hundreths_thousandths_a + ' and ' + this.ns.mNameTwo + ' who has the higher batting average?',0);

        this.setAnswer('0.0' + this.tenths_hundreths,0);
}
});
