
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_1',4.0150,'2.g.a.1','' );
*/
var i_2_g_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_1';
                this.setQuestion('' + 'What is the name for a shape with exactly three angles?');
                this.setAnswer('' + 'Triangle',0);
        }
});


