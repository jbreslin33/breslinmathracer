/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.1_1',2.0501,'2.nbt.a.1','');
*/
var i_2_nbt_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '2.nbt.a.1_1';

        this.ones = Math.floor(Math.random()*10);
        this.tens = Math.floor(Math.random()*10);
        this.hundreds = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + 'In the number ' + this.hundreds + '' + this.tens + '' + this.ones + ' how many ones are in the ones place?');
        this.setAnswer('' + this.ones,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.1_2',2.0502,'2.nbt.a.1','');
*/
var i_2_nbt_a_1__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '2.nbt.a.1_2';

        this.ones = Math.floor(Math.random()*10);
        this.tens = Math.floor(Math.random()*10);
        this.hundreds = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + 'In the number ' + this.hundreds + '' + this.tens + '' + this.ones + ' how many tens are in the tens place?');
        this.setAnswer('' + this.tens,0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.a.1_3',2.0503,'2.nbt.a.1','');
*/
var i_2_nbt_a_1__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '2.nbt.a.1_3';

        this.ones = Math.floor(Math.random()*10);
        this.tens = Math.floor(Math.random()*10);
        this.hundreds = Math.floor(Math.random()*9)+1;

        this.setQuestion('' + 'In the number ' + this.hundreds + '' + this.tens + '' + this.ones + ' how many hundreds are in the hundreds place?');
        this.setAnswer('' + this.hundreds,0);
}
});

