
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_6',6.0206,'6.rp.a.2','' );
*/
var i_6_rp_a_2__6 = new Class(
{
Extends: TextItemMixedNumber,
initialize: function(sheet)
{
        this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.mType = '6.rp.a.2_6';
        this.ns = new NameSampler();
        this.mChopWhiteSpace = false;

        var a = 4;
        var b = 2;
        while (a % b == 0 || a == b || a > 20 || b > 20)
        {
               a = Math.floor((Math.random()*98)+2);
               b = Math.floor((Math.random()*98)+2);
        }
        var f = new Fraction(a,b);

        this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a unit rate.');
        this.setAnswer('' + f.getString(),0);
},
createQuestionShapes: function()
{
        var txt = new Shape(150,50,600,240,this.mSheet.mGame,"","","");
        this.addQuestionShape(txt);
        txt.setText('' + this.ns.mThingOne + ' per ' + this.ns.mNameMachine.getSingular(this.ns.mThingTwo));
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.2_4',6.0204,'6.rp.a.2','' );
*/
var i_6_rp_a_2__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.2_4';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = 3;
                var b = 2;
                while (a % b != 0 || a == b || a > 20 || b > 20)
                {
                        a = Math.floor((Math.random()*98)+2);
                        b = Math.floor((Math.random()*98)+2);
                }
                c = parseInt( a / b );
                this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a unit rate.');
                this.setAnswer('' + c,0);
                this.setAnswer('' + c + ' ' + this.ns.mThingOne + ' per ' + this.ns.mNameMachine.getSingular(this.ns.mThingTwo),1);
                this.setAnswer('' + c + ':1',2);
                this.setAnswer('' + c + '/1',3);
                this.setAnswer('' + c + 'to1',4);
        }
});

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
        this.setAnswer('' + this.mFraction.getString(),0);
        this.setAnswer('' + this.mFraction.getString() + ' points per minute ',1);
        this.setAnswer('' + this.mFraction.getString() + ' points per minute of ' + this.ns.mPointActivityOne,2);
        this.setAnswer('' + this.mFraction.getString() + ':1',3);
        this.setAnswer('' + this.mFraction.getString() + ' points : 1 minute',4);
        this.setAnswer('' + this.mFraction.getString() + ' points : 1 minute of ' + this.ns.mPointActivityOne,5);
        this.setAnswer(this.mFraction.getString() + ' points : minute',6);
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

	this.setQuestion(this.ns.mNameOne + ' traveled ' + this.c + ' ' + this.ns.mDistanceIncrementLarge + ' in ' + this.b + ' ' + this.ns.mTimeIncrementSmall + '. What is '  + this.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' average speed per ' + this.mNameMachine.getSingular(this.ns.mTimeIncrementSmall) + '?'); 	

	this.setAnswer('' + this.a,0);
	this.setAnswer('' + this.a + ' per',1);
	this.setAnswer('' + this.a + ' per ' + this.mNameMachine.getSingular(this.ns.mTimeIncrementSmall),2);
	this.setAnswer('' + this.a + ' ' + this.ns.mDistanceIncrementLarge + ' per',3);
	this.setAnswer('' + this.a + ' ' + this.ns.mDistanceIncrementLarge + ' per ' + this.mNameMachine.getSingular(this.ns.mTimeIncrementSmall),4);
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

