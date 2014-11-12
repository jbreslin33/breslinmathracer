
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_1',5.0801,'5.nbt.a.4','no nines');
*/
var i_5_nbt_a_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_1';

        this.ns = new NameSampler();

        this.tens      = Math.floor((Math.random()*9)+1);
        this.ones      = Math.floor((Math.random()*8)+1);
        this.tenths      = Math.floor((Math.random()*9)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths = Math.floor((Math.random()*5)+5);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

        this.setQuestion('' + this.ns.mNameOne + ' weighed some ' + this.ns.mThingOne  + '. The scale read ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths + ' grams. Round the total to the nearest gram.',0);

        this.setAnswer('no',0);
}
});

