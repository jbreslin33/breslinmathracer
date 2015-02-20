
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.7.c_1',5.2301,'5.nf.b.7.c','');
*/
var i_5_nf_b_7_c__1 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
                this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);

                this.mType = '5.nf.b.7.c_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mDenominator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(1,1,false);
                fractionB.mNumerator = Math.floor(Math.random()*8+2);
                
		var c = Math.floor(Math.random()*8+2);
		var d = Math.floor(Math.random()*90+10);
		var decimal = new Decimal(c,d,1);  
		
		var e = Math.floor(Math.random()*8+2);

                answer = fractionB.divide(fractionA);
                answer.reduce();


		var decimalA = new Decimal(2,2,1);  
		var decimalB = new Decimal(2,2,1);  

		decimalC = decimalA.multiply(decimalB);
		APPLICATION.log('' + decimalA.getString() + '*' + decimalB.getString());
		APPLICATION.log('decimalC:' + decimalC.getString());


                this.setQuestion('' + this.ns.mNameOne + ' is making smoothies for a fund raiser for ' + this.ns.mSchoolOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + fractionA.getString() + ' of a bag of ' + this.ns.mFruitOne + ' for each batch of smoothies. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' makes $' +  decimal.getString() + ' for each batch of smoothies ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sells. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' used ' + e + ' bags of ' + this.ns.mFruitOne + '. How much money did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' raise so far?');

                this.setAnswer('' + answer.getString(),0);
        }
});

