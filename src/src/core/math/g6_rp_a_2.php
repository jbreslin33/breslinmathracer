/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_1',6.0201,'6.rp.a.2','Word Problem. Ratio. ' );
*/

var i_6_rp_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.2_1';
                
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

		this.a = 1;
		this.b = 2;
		this.c = 3;

                this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' friend has ' + this.b + ' times as many ' + this.ns.mThings + ' than ' + this.ns.mNameOne + '. Write a multiplication equation to represent how many ' + this.ns.mThings + ' they have altogether.');

		this.setAnswer('hhh');
        }
});
