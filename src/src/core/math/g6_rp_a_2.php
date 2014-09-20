/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_3',6.0203,'6.rp.a.2','Word Problem. Ratio. ' );
*/

var i_6_rp_a_2__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '6.rp.a.2_3';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = Math.floor(Math.random()*8)+2;
        this.b = Math.floor(Math.random()*8)+2;
        this.c = parseInt(this.a * this.b);

        this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPointActivityOne + ' for ' + this.c + ' minutes. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' scored ' + this.b + ' points total.  What is the unit rate of minutes to points?');

        this.mFraction = new Fraction(this.c,this.b,1);
        this.setAnswer(this.mFraction.getString(),0);
        this.setAnswer(this.mFraction.getString() + ' points per game ',1);
        this.setAnswer(this.mFraction.getString() + ' points per game of ' + this.ns.mPointActivityOne,2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_2',6.0202,'6.rp.a.2','Word Problem. Ratio. ' );
*/

var i_6_rp_a_2__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);
        this.mType = '6.rp.a.2_2';
                
	this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

	this.a = Math.floor(Math.random()*8)+2;
	this.b = Math.floor(Math.random()*8)+2;
	this.c = parseInt(this.a * this.b);

	this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPointActivityOne + ' for ' + this.c + ' minutes. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' scored ' + this.b + ' points total.  What is the unit rate of minutes to points?'); 	

	this.mFraction = new Fraction(this.c,this.b,1);
	this.setAnswer(this.mFraction.getString(),0);
	this.setAnswer(this.mFraction.getString() + ' points per game ',1);
	this.setAnswer(this.mFraction.getString() + ' points per game of ' + this.ns.mPointActivityOne,2);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_1',6.0201,'6.rp.a.2','Word Problem. Ratio. ' );
*/

var i_6_rp_a_2__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
	this.parent(sheet,600,50,330,75,100,50,685,80);

       	this.mType = '6.rp.a.2_1';
                
	this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

	this.ad = Math.floor(Math.random()*8)+2;
	this.ac = Math.floor(Math.random()*90)+10;
	this.at = '' + this.ad + '.' + this.ac; 
	this.am = parseFloat(this.at);
	this.am = this.am.toFixed(2);

	this.bd = Math.floor(Math.random()*8)+2;
	this.bc = Math.floor(Math.random()*90)+10;
	this.bt = '' + this.bd + '.' + this.bc; 
	this.bm = parseFloat(this.bt);
	this.bm = this.bm.toFixed(2);

	this.c = parseFloat(this.am * this.bm);
	this.c = this.c.toFixed(2);

	this.setQuestion(this.ns.mNameOne + ' spent $' + this.c + ' on ' + this.am + ' lb of ' + this.ns.mFruitOne + '. What is the price per lb of ' + this.ns.mFruitOne + '? Round to the nearest penny.'); 	

	this.setAnswer('$' + this.bm,0);
	this.setAnswer('$' + this.bm + 'per lb',1);
	this.setAnswer('$' + this.bm + 'per pound',2);
	this.setAnswer('' + this.bm,3);
	this.setAnswer('' + this.bm + 'per lb',4);
	this.setAnswer('' + this.bm + 'per pound',5);
}
});
