/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.3.c_1',4.1601,'4.nf.b.3.c','');
*/

var i_4_nf_b_3_c__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.3_c_1';

        var a = 0;
        var b = 0;
        var c = 0;
        var d = 0;
        var e = 0;

        a = Math.floor(Math.random()*4)+1;
        b = Math.floor(Math.random()*4)+1;
        c = Math.floor(Math.random()*4)+1;
        d = parseInt(a + b + c);
        e = Math.floor(Math.random()*10)+5;

        var fractionA = new Fraction(a,e,false);
        var fractionB = new Fraction(c,e);
        var fractionC = new Fraction(b,e,false);
        var fractionD = new Fraction(d,e,false);

        this.setQuestion('' + fractionA.getString() + ' + ? ' + fractionC.getString() + ' = ' + fractionD.getString());
        this.setAnswer('' + fractionB.getString(),0);
}
});

