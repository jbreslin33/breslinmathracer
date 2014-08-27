
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
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThings      = this.mNameMachine.getThing();
                
		this.mSchoolOne      = this.mNameMachine.getSchool();
		this.mSchoolTwo      = this.mNameMachine.getSchool();

		this.mAdultOne = this.mNameMachine.getAdult();
	
		this.mVegetableOne = this.mNameMachine.getVegetable();
		this.mVegetableTwo = this.mNameMachine.getVegetable();
		
		this.mFruitOne = this.mNameMachine.getFruit();
		this.mFruitTwo = this.mNameMachine.getFruit();

		this.mPlayedActivityOne = this.mNameMachine.getPlayedActivity();	
		this.mPlayedActivityTwo = this.mNameMachine.getPlayedActivity();	
		this.mTimeIncrement = this.mNameMachine.getTimeIncrement('seconds','hours');

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' had ' + this.a + ' ' + this.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.mAdultOne,1,0) + ' then sold ' + this.b + ' ' + this.mFruitOne + '. How many ' + this.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have left?');        
		}
		
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.mTimeIncrement + ' of ' + this.mPlayedActivityOne + '. If they already played for ' + this.b + ' ' + this.mTimeIncrement + ' than how many ' + this.mTimeIncrement + ' do they have left to play?');    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.mAdultOne + ' has a garden with ' + this.a + ' ' + this.mVegetableOne + '. If ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' ate ' + this.b + '. How many ' + this.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have left?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.b + ' students left ' + this.mSchoolOne + ' and started going to ' + this.mSchoolTwo + '. If ' + this.mSchoolOne + ' had ' + this.a + ' students to begin with than how many students does ' + this.mSchoolOne + ' have left?'  );    	
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave '  + this.mNameTwo + ' ' + this.b + ' ' + this.mThings + '. How many ' + this.mThings + ' does ' + this.mNameOne + ' have left?');    	
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
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThings      = this.mNameMachine.getThing();
                
		this.mSchoolOne      = this.mNameMachine.getSchool();
		this.mSchoolTwo      = this.mNameMachine.getSchool();

		this.mAdultOne = this.mNameMachine.getAdult();
	
		this.mVegetableOne = this.mNameMachine.getVegetable();
		this.mVegetableTwo = this.mNameMachine.getVegetable();
		
		this.mFruitOne = this.mNameMachine.getFruit();
		this.mFruitTwo = this.mNameMachine.getFruit();

		this.mPlayedActivityOne = this.mNameMachine.getPlayedActivity();	
		this.mPlayedActivityTwo = this.mNameMachine.getPlayedActivity();	
		this.mTimeIncrement = this.mNameMachine.getTimeIncrement('seconds','hours');

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.mFruitTwo + '. How many more ' + this.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' sell than ' + this.mFruitTwo + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivityOne + ' for ' + this.b + ' ' + this.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' played ' + this.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.mTimeIncrement + '. How many more ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' play ' + this.mPlayedActivityTwo + ' than ' + this.mPlayedActivityOne + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.mAdultOne + ' has a garden with ' + this.a + ' ' + this.mVegetableOne + ' and ' + this.b + ' ' + this.mVegetableTwo + '. How many more ' + this.mVegetableOne + ' does ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have than ' + this.mVegetableTwo + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.mSchoolOne + ' has ' + this.b + ' students. ' + this.mSchoolTwo + ' has ' + this.a + ' students. How many more students does ' + this.mSchoolTwo + ' have than ' + this.mSchoolOne + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameTwo + ' has ' + this.b + ' ' + this.mThings + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' have than ' + this.mNameTwo + '?');    	
		}

                this.setAnswer(this.c,0);
        }
});
