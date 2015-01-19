/*
insert into item_types(id,progression,core_standards_id,description) values ('3.nbt.a.3_1',3.1101,'3.nbt.a.3','Multiply one-digit whole numbers by multiples of 10 in the range 10-90 (e.g., 9 × 80, 5 × 60) using strategies based on place value and properties of operations.');
*/

var i_3_nbt_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,100,50,330,75,100,50,400,80);

                this.mType = '3.nbt.a.3_1';

                //variables
                this.a = Math.floor(Math.random()*9)+1;
                this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

		this.setQuestion(this.a + 'x' + this.b + '=');

                this.setAnswer(this.c ,0);
        }
});

