/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.8_1',1.0801,'1.oa.d.8','' );
*/
var i_1_oa_d_8__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mType = '1.oa.d.8_1';

	this.a = Math.floor(Math.random()*9)+1;
	this.b = Math.floor(Math.random()*9)+1;
	this.c = parseInt(this.a + this.b);        

        this.setQuestion('' + 'Determine the unknown number that makes the equation true: ' + this.a + ' + ? = ' + this.c);
        this.setAnswer('' + this.b,0);
}
});
