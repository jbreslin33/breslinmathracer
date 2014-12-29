/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.3_3',5.1403,'5.nf.b.3','regular fraction');
*/
var i_5_nf_b_3__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.3_3';
	this.ns = new NameSampler();

        var n = 1;
        var d = 0;
        while (n > d)
        {
                n = Math.floor((Math.random()*19)+1);
                d = Math.floor((Math.random()*19)+1);
        }

        var answer = new Fraction(n,d);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('' + this.ns.mNameOne + ' has ' + n + ' ' + this.ns.mDistanceIncrementMedium + ' of ' + this.ns.mRope);
}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.3_2',5.1402,'5.nf.b.3','improper fraction');
*/
var i_5_nf_b_3__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.3_2';

        var n = 0;
        var d = 1; 
        while (d > n)
        {
                n = Math.floor((Math.random()*19)+1);
                d = Math.floor((Math.random()*19)+1);
        }

        var answer = new Fraction(n,d);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Write the quotient as a fraction: ' + n + ' &divide ' + d);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.3_1',5.1401,'5.nf.b.3','regular fraction');
*/
var i_5_nf_b_3__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
        this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.mType = '5.nf.b.3_1';

        var n = 1;
        var d = 0;
        while (n > d)
        {
                n = Math.floor((Math.random()*19)+1);
                d = Math.floor((Math.random()*19)+1);
        }

        var answer = new Fraction(n,d);

        this.setAnswer(answer.getString(),0);
        this.setQuestion('Write the quotient as a fraction: ' + n + ' &divide ' + d);
}
});

