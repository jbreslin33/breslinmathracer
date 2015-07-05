/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.a.1_1',5.701,'6.ns.a.1','subtract mixed number and mixed number');
*/
var i_6_ns_a_1__1 = new Class(
{
Extends: TextItemMixedNumber,

initialize: function(sheet)
{
        //this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175,true);

        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.a.1_1';
	this.ns = new NameSampler();

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

/*
        while (an < ad || an % ad == 0 || bn < bd || bn % bd == 0 || parseInt(an / ad) <= parseInt(bn / bd) || ad == bd)
        {
                an = Math.floor((Math.random()*9)+10);
                ad = Math.floor((Math.random()*9)+1);
                bn = Math.floor((Math.random()*9)+10);
                bd = Math.floor((Math.random()*9)+1);
        }
*/

        an = Math.floor(Math.random()*4)+2;
        ad = Math.floor(Math.random()*4)+2;
        bn = Math.floor(Math.random()*4)+2;
        bd = Math.floor(Math.random()*4)+2;

        var fractionA = new Fraction(an,ad,false);
        var fractionB = new Fraction(bn,bd,false);


        var answer = fractionA.divide(fractionB);
	answer.reduce();

        this.setAnswer('' + answer.getString(),0);

  this.setQuestion('What is ' + fractionA.getString() + ' divided by ' + fractionB.getString());

/*
        this.setQuestion('In a race ' + this.ns.mNameOne + ' has run ' + fractionA.getMixedNumber() + ' laps. ' + this.ns.mNameTwo + ' has run ' + fractionB.getMixedNumber() + ' laps. How much further ahead is ' + this.ns.mNameOne + '?');

*/

}


});
