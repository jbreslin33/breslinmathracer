/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_1',1.0701,'1.oa.d.7','');
*/

var i_1_oa_d_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.7_1';
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
        
	this.a = Math.floor(Math.random()*9)+1;
        this.b = this.a;

        this.setQuestion('' + 'Help ' + this.ns.mNameOne + ' answer whether ' + this.a + ' = ' + this.b + ' is true of false.');
        this.setAnswer('' + 'true',0);
}
});

