/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.4.a_1',5.1601,'5.nf.b.4.a','');
*/

var i_5_nf_b_4_a__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.nf.b.4.a_1';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*8)+2;
                var a2 = Math.floor(Math.random()*8)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*5)+16);
                var c2 = Math.floor((Math.random()*5)+10);

                var a12 = parseInt(  a1 + a2 );
                var b12 = parseInt(  b1 + b2 );
                r = a12 % b12;

                x = parseInt( c1 - c2 + (a1 + a2) / (  b1 + b2 )  );

                this.setQuestion('' + c1 + ' - ' + c2 + ' + ' + '(' + a1 + ' + ' + a2 + ') / (' + b1 + ' + ' + b2 + ') Evaluate' );
                this.setAnswer(x,0);
        }
}
});

