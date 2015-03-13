//add 4.27

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_1',4.2701,'4.md.b.4','');
*/
var i_4_md_b_4__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '4.md.b.4_1';
                var a = Math.floor((Math.random()*8)+2);
                var answer = parseInt(a * 1000);

                this.setQuestion('How many grams in ' + a + ' kilograms?');
                this.setAnswer('' + answer,0);
        }
});

