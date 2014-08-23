
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_1',2.0101,'2.oa.a.1','How many more.' );
*/

var i_2_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '2.oa.a.1_1';

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThings      = this.mNameMachine.getThing();

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*2);
		random = 1;
		
		if (random == 0)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameTwo + ' has ' + this.b + ' ' + this.mThings + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' than ' + this.mNameTwo);    	
		}

		if (random == 0)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameTwo + ' has ' + this.b + ' ' + this.mThings + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' than ' + this.mNameTwo);    	
		}

                this.setAnswer(this.c,0);
        }
});
