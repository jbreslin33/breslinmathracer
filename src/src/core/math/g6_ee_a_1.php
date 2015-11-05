/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.a.1_1',6.2301,'6.ee.a.1','');
*/
var i_6_ee_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.a.1_1';

        this.ones = Math.floor(Math.random()*10);
        this.tens = Math.floor(Math.random()*10);
        this.hundreds = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + 'In the number ' + this.hundreds + '' + this.tens + '' + this.ones + ' how many ones are in the ones place?');
        this.setAnswer('' + this.ones,0);
}
});


