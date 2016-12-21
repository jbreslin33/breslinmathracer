
/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_7',3.1007,'3.nbt.a.1',''); update item_types SET progression = 3.1007 where id = '3.nbt.a.1_7';
*/

var i_3_nbt_a_1__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_7';

                //round  down the to nearest hundred normal
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 100;
                this.b = Math.floor(Math.random()*49)+1;
		this.c = this.a + this.b;

                this.setQuestion('' + 'Round ' + this.c + ' to the nearest hundred.');

                this.setAnswer('' + this.a,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_6',3.1006,'3.nbt.a.1',''); update item_types SET progression = 3.1006 where id = '3.nbt.a.1_6';
*/

var i_3_nbt_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_6';

                //round 0 down the to nearest ten

                this.setQuestion('' + 'Round 0 to the nearest ten.');

                this.setAnswer('' + '0',0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_5',3.1005,'3.nbt.a.1',''); update item_types SET progression = 3.1005 where id = '3.nbt.a.1_5';
*/

var i_3_nbt_a_1__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_5';

                //round down the below 10 to nearest ten

                //variables
                this.a = Math.floor(Math.random()*4)+1;

                this.setQuestion('' + 'Round ' + this.a + ' to the nearest ten.');

                this.setAnswer('' + '0',0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_4',3.1004,'3.nbt.a.1',''); update item_types SET progression = 3.1004 where id = '3.nbt.a.1_4';
*/

var i_3_nbt_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_4';

                //round up the below 10 to nearest ten

                //variables
                this.a = Math.floor(Math.random()*4)+5;

                this.setQuestion('' + 'Round ' + this.a + ' to the nearest ten.');

                this.setAnswer('' + '10',0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_3',3.1003,'3.nbt.a.1',''); update item_types SET progression = 3.1003 where id = '3.nbt.a.1_3';
*/

var i_3_nbt_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_3';

                //round on the exact number from above 10 to nearest ten

                //variables
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 10;

                this.setQuestion('' + 'Round ' + this.a + ' to the nearest ten.');

                this.setAnswer('' + this.a ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_2',3.1002,'3.nbt.a.1',''); update item_types SET progression = 3.1002 where id = '3.nbt.a.1_2';
*/

var i_3_nbt_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_2';

                //round up from above 10 to nearest ten

                //variables
                this.a = Math.floor(Math.random()*9)+1;
                this.a = this.a * 10;
                this.b = Math.floor(Math.random()*4)+5;
                this.c = parseInt(this.a + this.b);
	
		this.d = this.a + 10;

                this.setQuestion('' + 'Round ' + this.c + ' to the nearest ten.');

                this.setAnswer('' + this.d ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.1_1',3.1001,'3.nbt.a.1',''); update item_types SET progression = 3.1001 where id = '3.nbt.a.1_1';
*/

var i_3_nbt_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,230,75,100,50,400,80);

                this.mType = '3.nbt.a.1_1';

		//round down from above 10 to nearest ten 

                //variables
                this.a = Math.floor(Math.random()*9)+1;
                this.a = this.a * 10;
                this.b = Math.floor(Math.random()*4)+1;
                this.c = parseInt(this.a + this.b);

		this.setQuestion('' + 'Round ' + this.c + ' to the nearest ten.');

                this.setAnswer('' + this.a ,0);
        }
});



