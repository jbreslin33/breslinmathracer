
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.4_1',5.0801,'5.nbt.a.4','');
*/
var i_5_nbt_a_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.a.4_1';

        this.ns = new NameSampler();

        this.tenths      = Math.floor((Math.random()*3)+1);
        this.hundreths   = Math.floor((Math.random()*9)+1);
        this.thousandths_a = Math.floor((Math.random()*5)+5);
        this.thousandths_b = Math.floor((Math.random()*4)+1);
        this.tenths_hundreths_thousandths_a = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_a);
        this.tenths_hundreths_thousandths_b = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths_b);

        this.setQuestion('' + this.ns.mNameOne  + ' makes a basketball hoop that can fit a ball in it that is 0.' + this.tenths_hundreths_thousandths_b + ' feet in diameter. ' + this.ns.mNameTwo + ' has a ball that is 0.' + this.tenths_hundreths_thousandths_a + ' inches thick in diameter. Will the ball ' + this.ns.mNameTwo + ' has fit in the hoop? Answer yes or no.',0);

        this.setAnswer('no',0);
}
});

