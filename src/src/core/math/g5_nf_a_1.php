/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.a.1_1',5.1201,'5.nf.a.1','');
*/
var i_5_nf_a_1__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.nf.a.1_1';

        var a1 = Math.floor((Math.random()*3)+1);
        var a2 = Math.floor((Math.random()*4)+1);
        var ad = Math.floor((Math.random()*3)+8);

        var b1 = Math.floor(Math.random()*8)+2;

        var n = parseInt(  b1 * (  a1 + a2 )   );

        var a1d = new Fraction(a1,ad);
        var a2d = new Fraction(a2,ad);
        var answer = new Fraction(n,ad);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' +  b1 + '(' + a1d.getString() + ' + ' + a2d.getString() + ') Evaluate. Do not Simplify.');
}
});

