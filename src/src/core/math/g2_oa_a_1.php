
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_2',2.0102,'2.oa.a.1','How many more. Two step.' );
*/

var i_2_oa_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '2.oa.a.1_2';

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mNameThree     = this.mNameMachine.getName();
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
                this.a = Math.floor(Math.random()*50)+35;
                this.b = Math.floor(Math.random()*8)+6;
                this.c = Math.floor(Math.random()*18)+10;
                this.d = parseInt(this.a + this.b - this.c);
	
                random = Math.floor(Math.random()*2);
		random = 0;
		
		if (random == 4)
		{
			this.setQuestion(this.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.mFruitTwo + '. How many more ' + this.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' sell than ' + this.mFruitTwo + '?');        
		}
		
		if (random == 3)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivityOne + ' for ' + this.b + ' ' + this.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' played ' + this.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.mTimeIncrement + ' how many more ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' play ' + this.mPlayedActivityTwo + ' than ' + this.mPlayedActivityOne + '?');  	
		}
	
		if (random == 2)
		{
			this.setQuestion(this.mAdultOne + ' has a garden with ' + this.a + ' ' + this.mVegetableOne + ' and ' + this.b + ' ' + this.mVegetableTwo + '. How many more ' + this.mVegetableOne + ' does ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have than ' + this.mVegetableTwo + '?');  	
		}
		
		if (random == 1)
		{
			this.setQuestion(this.mSchoolOne + ' has ' + this.b + ' students. ' + this.mSchoolTwo + ' has ' + this.a + ' students. How many more students does ' + this.mSchoolTwo + ' have than ' + this.mSchoolOne + '?');    	
		}

		if (random == 0)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameTwo + ' has ' + this.b + ' ' + this.mThings + '. ' + this.mNameThree + ' has ' + this.c + ' ' + this.mThings + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' and ' + this.mNameTwo + ' have than ' + this.mNameThree + '?');    	
		}

                this.setAnswer(this.d,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_1',2.0101,'2.oa.a.1','How many more. One step.' );
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
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*2);
		
		if (random == 4)
		{
			this.setQuestion(this.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.mFruitTwo + '. How many more ' + this.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' sell than ' + this.mFruitTwo + '?');        
		}
		
		if (random == 3)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivityOne + ' for ' + this.b + ' ' + this.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' played ' + this.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.mTimeIncrement + ' how many more ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' play ' + this.mPlayedActivityTwo + ' than ' + this.mPlayedActivityOne + '?');  	
		}
	
		if (random == 2)
		{
			this.setQuestion(this.mAdultOne + ' has a garden with ' + this.a + ' ' + this.mVegetableOne + ' and ' + this.b + ' ' + this.mVegetableTwo + '. How many more ' + this.mVegetableOne + ' does ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have than ' + this.mVegetableTwo + '?');  	
		}
		
		if (random == 1)
		{
			this.setQuestion(this.mSchoolOne + ' has ' + this.b + ' students. ' + this.mSchoolTwo + ' has ' + this.a + ' students. How many more students does ' + this.mSchoolTwo + ' have than ' + this.mSchoolOne + '?');    	
		}

		if (random == 0)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameTwo + ' has ' + this.b + ' ' + this.mThings + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' have than ' + this.mNameTwo + '?');    	
		}

                this.setAnswer(this.c,0);
        }
});
