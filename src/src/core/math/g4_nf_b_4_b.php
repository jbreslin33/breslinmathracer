
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.b_3',4.1703,'4.nf.b.4.b','mixed number');
*/

var i_4_nf_b_4_b__3 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.b_3';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a <= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + ab.getMixedNumber() + ' &times ' + c + ' = ');
}

});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.b_2',4.1702,'4.nf.b.4.b','improper fraction');
*/

var i_4_nf_b_4_b__2 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.b_2';
        this.ns = new NameSampler();

        var a = 1;
        var b = 0;
        var c = 0;
        var d = 1;

        while (b == c || a <= b)
        {
                var a = Math.floor((Math.random()*8)+2);
                var b = Math.floor((Math.random()*8)+2);
                var c = Math.floor((Math.random()*8)+2);
        }


        var ab = new Fraction(a,b,false);
        var cd = new Fraction(c,d,false);

        var answer = ab.multiply(cd);

        this.setAnswer('' + answer.getString(),0);
        this.setQuestion('' + '' + ab.getString() + ' &times ' + c + ' = ');
}

});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.nf.b.4.b_1',4.1701,'4.nf.b.4.b','fraction');
*/

var i_4_nf_b_4_b__1 = new Class(
{
Extends: TextItemFraction,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);
        this.mType = '4.nf.b.4.b_1';
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
        this.setQuestion('' + '' + ab.getString() + ' &times ' + c + ' = ');
}

});
