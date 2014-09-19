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
		this.setAnswer('' + this.bm,2);
		this.setAnswer('' + this.bm + 'per lb',3);
        }
});
