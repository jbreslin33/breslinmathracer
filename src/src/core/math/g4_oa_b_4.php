
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.b.4_1',4.0401,'4.oa.b.4','');
*/
var i_4_oa_b_4__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.b.4_1';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*10+5);
	var count = 0; 

	for (var i = 0; i <= a; i++)
        {
		if (parseInt(a % i) == 0)
		{
			count++;
		}
        }

        this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants to put them in rows. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants each row to have the same amount of ' + this.ns.mThingOne + '. How many different ways can ' + this.ns.mNameOne + ' arrange ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mThingOne + ' while still making sure that all the rows have an equal amount of ' + this.ns.mThingOne + '?');
        this.setAnswer('' + count,0);
}
});

