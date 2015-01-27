/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.1_1',4.2401,'4.md.a.1','');
*/
var i_4_md_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
               // this.parent(sheet,340,50,190,95, 100,50,425,100, 100,50,425,175,true);
        	this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.1_1';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(4,1,false);

                answer = fractionA.multiply(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' goes to the store for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mFamilyOne + ' to buy ' + fractionA.mNumerator + ' gallons of ' + this.ns.mDrinkOne + '. While there, ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' notices they only sell ' + this.ns.mDrinkOne + ' by the quart. How many quarts should ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' buy?');
                this.setAnswer('' + answer.getString(),0);
                this.setAnswer('' + answer.getString() + ' quarts',1);
        }
});

