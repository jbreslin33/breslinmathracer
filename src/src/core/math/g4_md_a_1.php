
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.1_3',4.2403,'4.md.a.1','');
*/
var i_4_md_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.1_3';
                this.ns = new NameSampler();

		var fractionA = new Fraction(1,1,true);
                var fractionB = new Fraction(1,1,false);
		var r = 1;
		while (r != 0)
               	{ 
                	fractionA.mNumerator = Math.floor(Math.random()*8+2);

                	fractionB.mNumerator = Math.floor(Math.random()*8+2);

			var seconds = parseInt(fractionB.mNumerator * 60);	
			r = parseInt(seconds % fractionA.mNumerator);
		}
               	
		answer = parseInt(seconds / fractionA.mNumerator);

                this.setQuestion('In a video game ' + this.ns.mNameOne + ' can stack one block every ' + fractionA.mNumerator + ' seconds. How many blocks can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' stack in ' + fractionB.mNumerator + ' minutes?');
                this.setAnswer('' + answer,0);
                this.setAnswer('' + answer + ' blocks',1);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.1_2',4.2402,'4.md.a.1','');
*/
var i_4_md_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,300,50,175,95,100,50,425,100);


                this.mType = '4.md.a.1_2';
                this.ns = new NameSampler();

                var fractionA = new Fraction(1,1,true);
                fractionA.mNumerator = Math.floor(Math.random()*8+2);

                var fractionB = new Fraction(16,1,false);

                answer = fractionA.multiply(fractionB);
                answer.reduce();

                this.setQuestion('' + this.ns.mNameOne + ' has ' + fractionA.mNumerator + ' gallons of ' + this.ns.mDrinkOne + '. How many cups of ' + this.ns.mDrinkOne + ' can ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' pour for ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1)  + ' friends?');
                this.setAnswer('' + answer.getString(),0);
                this.setAnswer('' + answer.getString() + ' cups',1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.a.1_1',4.2401,'4.md.a.1','');
*/
var i_4_md_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
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

