
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.a.3_1',5.0601,'5.nbt.a.3','');
*/
var i_5_nbt_a_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.nbt.a.3_1';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.thousands = Math.floor((Math.random()*8)+1);
        this.a = parseInt(this.thousands * 1000);
        this.hundreds = Math.floor((Math.random()*8)+1);
        this.b = parseInt(this.hundreds * 100);
        this.tens = Math.floor((Math.random()*8)+1);
        this.c = parseInt(this.tens * 10);
        this.ones = Math.floor((Math.random()*8)+1);
        this.d = this.ones;

        this.setQuestion('Evaluate: ' + this.thousands + ' &times 1,000 + ' + this.hundreds + ' &times 100 + ' + this.tens + ' &times 10 + ' + this.ones);

        this.setAnswer(parseInt(this.a + this.b + this.c + this.d),0);
}
});

