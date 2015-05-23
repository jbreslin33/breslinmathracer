
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_4',4.0154,'2.g.a.1','' );
*/
var i_2_g_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_4';
                this.setQuestion('' + 'What is the name of a shape with 6 equal faces? A sphere, cylinder, cone or cube?');
                this.setAnswer('' + 'Cube',0);
                this.setAnswer('' + 'A Cube',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_3',4.0153,'2.g.a.1','' );
*/
var i_2_g_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_3';
                this.setQuestion('' + 'What is the name of a shape with 6 faces? A sphere, cylinder, cone or cube?');
                this.setAnswer('' + 'Cube',0);
                this.setAnswer('' + 'A Cube',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_2',4.0152,'2.g.a.1','' );
*/
var i_2_g_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_2';
                this.setQuestion('' + 'What is the name for a shape with 5 sides? A triangle, rectangle, pentagon or hexagon?');
                this.setAnswer('' + 'Pentagon',0);
                this.setAnswer('' + 'A Pentagon',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_1',4.0151,'2.g.a.1','' );
*/
var i_2_g_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_1';
                this.setQuestion('' + 'What is the name for a shape with exactly three angles? A triangle, rectangle, pentagon or hexagon?');
                this.setAnswer('' + 'Triangle',0);
                this.setAnswer('' + 'A Triangle',1);
        }
});


