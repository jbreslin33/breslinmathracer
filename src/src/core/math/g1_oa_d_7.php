/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.d.7_1',1.0701,'1.oa.d.7','');
*/

var i_1_oa_d_7__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.d.7_1';

                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                //variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);

                this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have than ' + this.ns.mNameTwo + '?');
                this.setAnswer('' + this.c,0);
        }
});

