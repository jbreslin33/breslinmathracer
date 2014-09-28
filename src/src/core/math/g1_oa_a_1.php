
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_2',1.0102,'1.oa.a.1','.How many left.' );
*/

var i_1_oa_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_2';
         
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' had ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,1,0) + ' then sold ' + this.b + ' ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.ns.mLeft + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrement + ' of ' + this.ns.mPlayedActivityOne + '. If they already played for ' + this.b + ' ' + this.ns.mTimeIncrement + ' than how many ' + this.ns.mTimeIncrement + ' do they have ' + this.ns.mLeft + ' to play?');    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' ate ' + this.b + '. How many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.ns.mLeft + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.b + ' students left ' + this.ns.mSchoolOne + ' and started going to ' + this.ns.mSchoolTwo + '. If ' + this.ns.mSchoolOne + ' had ' + this.a + ' students to begin with than how many students does ' + this.ns.mSchoolOne + ' have ' + this.ns.mLeft + '?'  );    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' gave '  + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.ns.mLeft + '?');    	
		}

                this.setAnswer(this.c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_1',1.0101,'1.oa.a.1','How many more.' );
*/

var i_1_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_1';
		
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitTwo + '. How many more ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitTwo + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrement + '. How many more ' + this.ns.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityTwo + ' than ' + this.ns.mPlayedActivityOne + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. How many more ' + this.ns.mVegetableOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have than ' + this.ns.mVegetableTwo + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' students. ' + this.ns.mSchoolTwo + ' has ' + this.a + ' students. How many more students does ' + this.ns.mSchoolTwo + ' have than ' + this.ns.mSchoolOne + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have than ' + this.ns.mNameTwo + '?');    	
		}

                this.setAnswer(this.c,0);
        }
});
