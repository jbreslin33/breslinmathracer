/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.4_1',3.0401,'3.oa.a.4','');
*/
var i_3_oa_a_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,575,50,320,75,720,50,380,150);

        this.mType = '3.oa.a.4_1';

        this.ns = new NameSampler();

        var a = Math.floor((Math.random()*4)+6);
        var b = Math.floor((Math.random()*4)+6);
	var c = parseInt(a*b);

        this.setQuestion('Which number makes the equation true? ' + a + ' &times __ = ' + c);
        this.setAnswer('' + b,0);
}
});

