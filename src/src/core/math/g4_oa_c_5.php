
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_2',4.0502,'4.oa.c.5','');
*/
var i_4_oa_c_5__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_2';
        this.ns = new NameSampler();

        var a = Math.floor(Math.random()*8+3);
        var b = Math.floor(Math.random()*8+3);
        var answer  = '';
        var total = a;

        for (var i = 1; i < 7; i++)
        {
                if (answer.length == 0)  //first one no comma
                {
                        total = parseInt(b + total);
                        answer = '' + total;
                }
                else
                {
                        total = parseInt(total + b);
                        answer = '' + answer + ',' + total;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' wants to save money for ' + this.ns.mPurchaseOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' already has $' + a + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' plans to add $' + b + ' per week to that total. Write ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' weekly totals for the first 6 weeks seperated by commas. For example: 2,4,6,8,10,12');
        this.setAnswer('' + answer,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_1',4.0501,'4.oa.c.5','');
*/
var i_4_oa_c_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_1';
 	this.ns = new NameSampler();

        var a = Math.floor(Math.random()*8+3);
        var b = Math.floor(Math.random()*8+3);
        var answer  = '';
        var total = a;

        for (var i = 1; i < 7; i++)
        {
                if (answer.length == 0)  //first one no comma
                {
			total = parseInt(b + total);
			answer = '' + total; 
                }
                else
                {
			total = parseInt(total + b);
			answer = '' + answer + ',' + total;
                }
        }

        this.setQuestion('' + this.ns.mNameOne + ' wants to save money for ' + this.ns.mPurchaseOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' already has $' + a + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' plans to add $' + b + ' per week to that total. Write ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' weekly totals for the first 6 weeks seperated by commas. For example: 2,4,6,8,10,12');
        this.setAnswer('' + answer,0);
}
});


