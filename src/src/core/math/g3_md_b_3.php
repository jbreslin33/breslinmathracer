
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.md.b.3_1',3.2201,'3.md.b.3','');
*/
var i_3_md_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.md.b.3_1';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*4)+6);
        var b = Math.floor((Math.random()*4)+6);
	var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + a + ' &times __ = ' + c);
        this.setAnswer('' + b,0);
}
});

