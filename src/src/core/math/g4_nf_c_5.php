//add 19
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.c.5_1',4.1901,'4.nf.c.5','fraction');
*/
var i_4_nf_c_5__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.c.5_1';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a >= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }

        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);
        this.setAnswer('' + answer.getString(),0);

        this.setQuestion('' + this.ns.mNameOne + ' made strawberry jam and raspberry jam. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' made enough strawberry jam to fill ' + ab.getString() + ' of a jar. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' made ' + c + ' times as much raspberry jam as strawberry jam than how many jars will the raspberry jam fill?');
}
});

