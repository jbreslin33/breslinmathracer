/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.b.2_1',2.0201,'2.oa.b.2','' );
*/
var i_2_oa_b_2__1 = new Class(
{
Extends: NumberPadItemBigger,

initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = '2.oa.b.2_1';
        this.setQuestion('' + '9 + 2 =');
        this.setAnswer('' + '11',0);
}
});
