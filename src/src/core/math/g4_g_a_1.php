//add
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.1_1',4.3201,'4.g.a.1','');
*/
var i_4_g_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '4.g.a.1_1';
                var a = Math.floor((Math.random()*8)+2);
                var answer = parseInt(a * 1000);

                this.setQuestion('How many grams in ' + a + ' kilograms?');
                this.setAnswer('' + answer,0);
        }
});

