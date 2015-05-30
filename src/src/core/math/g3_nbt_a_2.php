/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.2_1',4.0183,'3.nbt.a.2','');
*/

var i_3_nbt_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,330,75,100,50,400,80);

                this.mType = '3.nbt.a.2_1';

                //variables
                this.a = Math.floor(Math.random()*9)+1;
                this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion(this.a + 'x' + this.b + '=');

                this.setAnswer('' + this.c ,0);
        }
});

