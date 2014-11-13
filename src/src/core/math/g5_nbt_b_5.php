/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.5_1',5.0901,'5.nbt.b.5','');
*/
var i_5_nbt_b_5__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.5_1';

        this.ns = new NameSampler();

        this.tens        = Math.floor((Math.random()*9)+1);
        this.ones        = Math.floor((Math.random()*9)+1);
        this.tenths      = 9;
        this.hundreths   = Math.floor((Math.random()*5)+5);
        this.thousandths = Math.floor((Math.random()*9)+1);
        this.tenths_hundreths_thousandths = parseInt(this.tenths * 100 + this.hundreths * 10 + this.thousandths);

        this.setQuestion('Round to the nearest tenth: ' + this.tens + this.ones + '.' + this.tenths_hundreths_thousandths);
        this.tenths = parseInt(0);
        this.ones = parseInt(this.ones);
        this.ones++;

        answer = parseInt(this.tens * 10 + this.ones);
        answer = '' + answer;

        this.setAnswer('' + answer,0);
}
});

