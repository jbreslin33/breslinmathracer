
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_2',6.2702,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_2';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Evaluation the expression ' + x + ' - ' + z + ' where ' + x + ' = ' + y);

	var a = parseInt(y - z);
        
	this.setAnswer('' + a,0);
}
});
	
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.2.c_1',6.2701,'6.ee.a.2.c','');
*/
var i_6_ee_a_2_c__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.2.c_1';
        this.ns = new NameSampler();
   
        var x = this.ns.mLowerLetterOne;
	var y = Math.floor(Math.random()*8)+2;
	var z = Math.floor(Math.random()*8)+2;

        this.setQuestion('' + 'Evaluation the expression ' + x + ' + ' + z + ' where ' + x + ' = ' + y);

	var a = parseInt(y + z);
	

        this.setAnswer('' + a,0);
}
});

