
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.c.7_1',3.0701,'3.oa.c.7','Multiply.');
*/

var i_3_oa_c_7__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '3.oa.c.7_1';

        this.mChopWhiteSpace = false;

        this.setQuestion('What dddis the name for a mathematical phrase containing only numbers and one or more operation symbols?');
        this.setAnswer('numerical expression',0);
}
});

