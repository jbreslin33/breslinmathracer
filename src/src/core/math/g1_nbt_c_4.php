
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.nbt.c.4_1',1.1501,'1.nbt.c.4','' );
*/
var i_1_nbt_c_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
       	this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.mType = '1.nbt.c.4_1';

	this.a = 0;	
	this.b = 0;	
	while (this.a <= this.b)	
	{
      		this.a = Math.floor(Math.random()*9)+1;
       		this.b = Math.floor(Math.random()*9)+1;
	}
	this.c = parseInt(this.a - this.b);        

        this.setQuestion('' + this.ns.mNameOne + ' is trying to solve ' + this.a + ' - ' + this.b + '. Write an addition expression that will help ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' solve it.');
        this.setAnswer('' + this.b + '+' + this.c,0);
        this.setAnswer('' + this.c + '+' + this.b,1);
}
});

