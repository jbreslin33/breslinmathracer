
/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_5',2.2605,'2.g.a.1','' ); update item_types SET progression = 2.2605 where id = '2.g.a.1_5';
*/
var i_2_g_a_1__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '2.g.a.1_5';
                this.setQuestion('' + 'What is the name of a shape with 2 equal faces? A sphere, cylinder, cone or cube?');
                this.setAnswer('' + 'Cylinder',0);
                this.setAnswer('' + 'A Cylinder',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_4',2.2604,'2.g.a.1','' ); update item_types SET progression = 2.2604 where id = '2.g.a.1_4';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_3',2.2603,'2.g.a.1','' ); update item_types SET progression = 2.2603 where id = '2.g.a.1_3';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_2',2.2602,'2.g.a.1','' ); update item_types SET progression = 2.2602 where id = '2.g.a.1_2';
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
insert into item_types(id,progression,core_standards_id,description) values ('2.g.a.1_1',2.2601,'2.g.a.1','' ); update item_types SET progression = 2.2601 where id = '2.g.a.1_1';
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


