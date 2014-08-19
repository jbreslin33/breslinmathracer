/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_1',4.0201,'4.oa.a.2','twice as many');
*/

var i_4_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_1';

                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThing = this.mNameMachine.getThing();
                this.mOwned = this.mNameMachine.getOwned();
                this.mAdded = this.mNameMachine.getAdded();
                this.mSubtracted = this.mNameMachine.getSubtracted();

               	//variables
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. How many ' + this.mThing + ' does ' + this.mNameTwo + ' have? Use + for addition, - for subtraction, * for multiplication and / for division.'); 
                //this.setAnswer(this.c,0);
		
                this.setAnswer('' + this.x,0);
        }
});
