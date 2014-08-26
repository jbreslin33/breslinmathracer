
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_4',2.0104,'2.oa.a.1','How many left. Two step.' );
*/

var i_2_oa_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '2.oa.a.1_4';

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
	
                random = Math.floor(Math.random()*5)+1;
		random = 5; 
		
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
			this.setQuestion(this.mSchoolOne + ' has ' + this.a + ' students. If ' + this.b + ' leave and go to ' + this.mSchoolTwo + ' than how many students will ' + this.mSchoolOne + ' have left?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave '  + this.mNameTwo + ' ' + this.b + ' ' + this.mThings + '. How many ' + this.mThings + ' does ' + this.mNameOne + ' have left?');    	
		}

                this.setAnswer(this.c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_3',2.0103,'2.oa.a.1','How many left. One step.' );
*/

var i_2_oa_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '2.oa.a.1_3';

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
	
                random = Math.floor(Math.random()*5)+1;
		random = 2; 
		
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
			//this.setQuestion(this.mSchoolOne + ' has ' + this.a + ' students. If ' + this.b + ' leave and go to ' + this.mSchoolTwo + ' than how many students will ' + this.mSchoolOne + ' have left?');    	
			this.setQuestion(this.b + ' students left ' + this.mSchoolOne + ' and started going to ' + this.mSchoolTwo + '. If ' + this.mSchoolOne + ' had ' + this.a + ' students to begin with than how many does ' + this.mSchoolOne + ' have left?'  );    	
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave '  + this.mNameTwo + ' ' + this.b + ' ' + this.mThings + '. How many ' + this.mThings + ' does ' + this.mNameOne + ' have left?');    	
		}

                this.setAnswer(this.c,0);
        }
});

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
		this.mSchoolThree      = this.mNameMachine.getSchool();

		this.mAdultOne = this.mNameMachine.getAdult();
	
		this.mVegetableOne = this.mNameMachine.getVegetable();
		this.mVegetableTwo = this.mNameMachine.getVegetable();
		this.mVegetableThree = this.mNameMachine.getVegetable();
		
		this.mFruitOne = this.mNameMachine.getFruit();
		this.mFruitTwo = this.mNameMachine.getFruit();
		this.mFruitThree = this.mNameMachine.getFruit();

		this.mPlayedActivityOne = this.mNameMachine.getPlayedActivity();	
		this.mPlayedActivityTwo = this.mNameMachine.getPlayedActivity();	
		this.mPlayedActivityThree = this.mNameMachine.getPlayedActivity();	
		this.mTimeIncrement = this.mNameMachine.getTimeIncrement('seconds','hours');

               	//variables
                this.a = Math.floor(Math.random()*50)+35;
                this.b = Math.floor(Math.random()*8)+6;
                this.c = Math.floor(Math.random()*18)+10;
                this.d = parseInt(this.a + this.b - this.c);
	
                random = Math.floor(Math.random()*5)+1;
	
		//bca	
		if (random == 5)
		{
			this.setQuestion(this.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.mFruitOne + ', ' + this.c + ' ' + this.mFruitTwo + ' and ' + this.a + ' ' + this.mFruitThree + '. How many more ' + this.mFruitOne + ' and ' + this.mFruitThree + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' sell than ' + this.mFruitTwo + '?');        
		}
		//cba	
		if (random == 4)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivityOne + ' for ' + this.c + ' ' + this.mTimeIncrement + ', ' + this.mPlayedActivityTwo + ' for ' + ' ' + this.b + ' ' + this.mTimeIncrement + ' and ' + this.mPlayedActivityThree + ' for ' + this.a + ' ' + this.mTimeIncrement + '. How many more ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' play ' + this.mPlayedActivityTwo + ' and ' + this.mPlayedActivityThree + ' than ' + this.mPlayedActivityOne + '?');  	
		}
		//acb	
		if (random == 3)
		{
			this.setQuestion(this.mAdultOne + ' has a garden with ' + this.a + ' ' + this.mVegetableOne + ', ' + this.c + ' ' + this.mVegetableTwo + ' and ' + this.b + ' ' + this.mVegetableThree + '. How many more ' + this.mVegetableOne + ' and ' + this.mVegetableThree + ' does ' + this.mNameMachine.getPronoun(this.mAdultOne,0,0) + ' have than ' + this.mVegetableTwo + '?');  	
		}
		//cab	
		if (random == 2)
		{
			this.setQuestion(this.mSchoolOne + ' has ' + this.c + ' students, ' + this.mSchoolTwo + ' has ' + this.a + ' and ' + this.mSchoolThree + ' has ' + this.b  + '. How many more students does ' + this.mSchoolTwo + ' and ' + this.mSchoolThree + ' have than ' + this.mSchoolOne + '?');    	
		}
		//abc
		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + ', ' + this.mNameTwo + ' has ' + this.b + ' and ' + this.mNameThree + ' has ' + this.c + '. How many more ' + this.mThings + ' does ' + this.mNameOne + ' and ' + this.mNameTwo + ' have than ' + this.mNameThree + '?');    	
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
