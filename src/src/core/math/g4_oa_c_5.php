/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.c.5_1',4.0501,'4.oa.c.5','');
*/
var i_4_oa_c_5__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,450,200,255,145,100,50,580,100);

        this.mType = '4.oa.c.5_1';

        var a = Math.floor(Math.random()*8+3);
        var multiples  = '';

        for (var i = 1; i < 7; i++)
        {
                if (multiples.length == 0)  //first one no comma
                {
                        multiples = multiples + '' + a;
                }
                else
                {
                        var nextMultiple = parseInt(a * i);
                        multiples = multiples + ',' + nextMultiple;
                }
        }

        this.setQuestion('Write the first 6 multiples of ' + a + ' seperated by commas. For example the first 6 multiples of 2 would be written: 2,4,6,8,10,12');
        this.setAnswer('' + multiples,0);
}
});

