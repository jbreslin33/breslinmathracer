/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nbt.b.6_1',5.1001,'5.nbt.b.6','3 d 2 no remainder');
*/
var i_5_nbt_b_6__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '5.nbt.b.6_1';

        this.ns = new NameSampler();

        this.x        = Math.floor((Math.random()*90)+10);
        this.y        = Math.floor((Math.random()*900)+100);
        this.z        = parseInt(this.x * this.y);

        this.setQuestion('Find the Quotient: ' + this.z + ' &divide ' + this.x + '');
        this.answer = parseInt(this.y);

        this.setAnswer('' + this.answer,0);
}
});

