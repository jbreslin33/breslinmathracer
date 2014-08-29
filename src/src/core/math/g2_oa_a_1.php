
/*
prerequisites:
none finished
*/

var TwoStepPuttingTogether = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*20)+11;
                this.b = Math.floor(Math.random()*20)+11;
                this.c = Math.floor(Math.random()*20)+11;
                this.d = parseInt(this.a + this.b + this.c);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekOne + ', ' + this.b + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekTwo + ' and ' + this.c + ' on ' + this.ns.mDayOfWeekThree + '. How many ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell ' + this.mSum + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrement + ', ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrement + ' and ' + this.ns.mPlayedActivityThree + ' for ' + this.c + ' ' + this.ns.mTimeIncrement + '. How long did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.mSum + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + ', ' + this.b + ' ' + this.ns.mVegetableTwo + ' and ' + this.c + ' ' + this.ns.mVegetableThree + '. How many vegetables did ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' plant ' + this.mSum + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' students, ' + this.ns.mSchoolTwo + ' has ' + this.a + ' and ' + this.ns.mSchoolThree + ' has ' + this.c + ' how many students do the schools have ' + this.mSum + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + ' and ' + this.ns.mNameThree + ' has ' + this.c + ' ' + this.ns.mThings + '  . How many ' + this.ns.mThings + ' do they have ' + this.mSum + '?');    	
		}

                this.setAnswer(this.d,0);
        }
});

var OneStepPuttingTogether = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*20)+30;
                this.b = Math.floor(Math.random()*20)+30;
                this.c = parseInt(this.a + this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitOne + ' on ' + this.ns.mDayOfWeekTwo + '. How many ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell ' + this.mSum + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrement + '. How long did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.mSum + '?');  	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. How many vegetables did he plant ' + this.mSum + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' girls and ' + this.a + ' boys. How many students does ' + this.ns.mSchoolTwo + ' have ' + this.mSum + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' do they have ' + this.mSum + '?');    	
		}
                this.setAnswer(this.c,0);
        }
});

var OneStepTakingFrom = new Class(
{
Extends: TextItem,
        initialize: function(sheet,left)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mLeft = left; 

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.ns.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' had ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,1,0) + ' then sold ' + this.b + ' ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.mLeft + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrement + ' of ' + this.ns.mPlayedActivityOne + '. If they already played for ' + this.b + ' ' + this.ns.mTimeIncrement + ' than how many ' + this.ns.mTimeIncrement + ' do they have ' + this.mLeft + ' to play?');    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' ate ' + this.b + '. How many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.mLeft + '?');  	
		}
		
		if (random == 2)
		{
			this.setQuestion(this.b + ' students left ' + this.ns.mSchoolOne + ' and started going to ' + this.ns.mSchoolTwo + '. If ' + this.ns.mSchoolOne + ' had ' + this.a + ' students to begin with than how many students does ' + this.ns.mSchoolOne + ' have ' + this.mLeft + '?'  );    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' gave '  + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.mLeft + '?');    	
		}

                this.setAnswer(this.c,0);
        }
});

var TwoStepTakingFrom = new Class(
{
Extends: TextItem,
        initialize: function(sheet,left)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

		this.mLeft = left;

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = Math.floor(Math.random()*28)+12;
                this.d = parseInt(this.a - this.b - this.c);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion('For Breakfast ' + this.ns.mAnimalOne + ' ate '  + this.b + ' ' + this.ns.mFruitOne + '. For Lunch the ' + this.ns.mAnimalOne + ' ate ' + this.c + ' ' + this.ns.mFruitOne + '. If they started the day with ' + this.a + ' ' + this.ns.mFruitOne + ' then how many ' + this.ns.mFruitOne + ' do the ' + this.ns.mAnimalOne + ' have ' + this.ns.mLeft + ' for dinner?');        
		}
		
		if (random == 4)
		{
			this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrement + ' of ' + this.ns.mPlayedActivityOne + '. They already played for ' + this.b + ' ' + this.ns.mTimeIncrement + ' on ' + this.ns.mDayOfWeekOne + ' and ' + this.c + ' ' + this.ns.mTimeIncrement + ' on ' + this.ns.mDayOfWeekTwo + '. How many ' + this.ns.mTimeIncrement + ' do they have ' + this.ns.mLeft + ' to play?');    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a farm with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.ns.mAnimalOne +  ' ate ' + this.b + ' ' + this.ns.mVegetableOne + ' and ' + this.ns.mAnimalTwo + ' ate ' + this.c + ' than how many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have ' + this.ns.mLeft + '?');  	
		}
		
		if (random == 2)
		{
                	this.d = parseInt(this.a - this.b + this.c);
			this.setQuestion(this.ns.mSchoolOne + ' had ' + this.a + ' students. ' + this.b + ' students leave ' + this.ns.mSchoolOne + '  and go to ' + this.ns.mSchoolTwo + '. ' + this.c + ' students leave ' + this.ns.mSchoolThree + ' and come to ' +  this.ns.mSchoolOne + '. How many students will ' + this.ns.mSchoolOne + ' have ' + this.ns.mLeft + '?');    	
		}

		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' gave ' + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + ' and ' + this.ns.mNameThree + ' ' + this.c + ' ' + this.ns.mThings + '. Before he gave away ' + this.ns.mThings + ' ' + this.ns.mNameOne + ' had ' + this.a + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.ns.mLeft + '?');    	
		}

                this.setAnswer(this.d,0);
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
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*50)+35;
                this.b = Math.floor(Math.random()*8)+6;
                this.c = Math.floor(Math.random()*18)+10;
                this.d = parseInt(this.a + this.b - this.c);
	
                random = Math.floor(Math.random()*5)+1;
	
		//bca	
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitOne + ', ' + this.c + ' ' + this.ns.mFruitTwo + ' and ' + this.a + ' ' + this.ns.mFruitThree + '. How many more ' + this.ns.mFruitOne + ' and ' + this.ns.mFruitThree + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitTwo + '?');        
		}
		//cba	
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.c + ' ' + this.ns.mTimeIncrement + ', ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.b + ' ' + this.ns.mTimeIncrement + ' and ' + this.ns.mPlayedActivityThree + ' for ' + this.a + ' ' + this.ns.mTimeIncrement + '. How many more ' + this.ns.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityTwo + ' and ' + this.ns.mPlayedActivityThree + ' than ' + this.ns.mPlayedActivityOne + '?');  	
		}
		//acb	
		if (random == 3)
		{
			this.setQuestion(this.ns.mAdultOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + ', ' + this.c + ' ' + this.ns.mVegetableTwo + ' and ' + this.b + ' ' + this.ns.mVegetableThree + '. How many more ' + this.ns.mVegetableOne + ' and ' + this.ns.mVegetableThree + ' does ' + this.mNameMachine.getPronoun(this.ns.mAdultOne,0,0) + ' have than ' + this.ns.mVegetableTwo + '?');  	
		}
		//cab	
		if (random == 2)
		{
			this.setQuestion(this.ns.mSchoolOne + ' has ' + this.c + ' students, ' + this.ns.mSchoolTwo + ' has ' + this.a + ' and ' + this.ns.mSchoolThree + ' has ' + this.b  + '. How many more students does ' + this.ns.mSchoolTwo + ' and ' + this.ns.mSchoolThree + ' have than ' + this.ns.mSchoolOne + '?');    	
		}
		//abc
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + ', ' + this.ns.mNameTwo + ' has ' + this.b + ' and ' + this.ns.mNameThree + ' has ' + this.c + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' have than ' + this.ns.mNameThree + '?');    	
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
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitTwo + '. How many more ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitTwo + '?');        
		}
		
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrement + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrement + '. How many more ' + this.ns.mTimeIncrement + ' did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityTwo + ' than ' + this.ns.mPlayedActivityOne + '?');  	

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

var TwoStepApApB = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*15)+15;
                this.b = Math.floor(Math.random()*15)+15;
                this.c = parseInt(this.a + this.a + this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mAnimalOne + '. There are ' + this.b + ' more ' + this.ns.mAnimalTwo + ' than ' + this.ns.mAnimalOne + '. How many animals are there ' + ' ' + this.mSum + '?');        
		}
		if (random == 4)
		{
			this.setQuestion(this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' are on the same team called the ' + this.ns.mAnimalOne + '. ' + this.ns.mNameOne + ' scored ' + ' ' + this.a + ' points. ' + this.ns.mNameTwo + ' scored ' + this.b + ' more points than ' + this.ns.mNameOne + '. How many points did ' + this.ns.mAnimalOne + ' score ' + this.mSum + '?'     ) ;    	
		}
	
		if (random == 3)
		{
			this.setQuestion(this.ns.mNameOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameTwo + ' planted ' + this.b + ' more ' + this.ns.mVegetableOne + ' than ' + this.ns.mNameOne + '. How many ' + this.ns.mVegetableOne + ' did they plant in ' + this.mSum + '?' );  	
		}
		
		if (random == 2)
		{
			this.setQuestion('There are ' + this.a + ' ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. There are ' + this.b + ' more ' + this.ns.mColorTwo + ' ' + this.ns.mThings + ' than ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' are there ' + this.mSum + '?');    	
		}
		if (random == 1)
		{
			this.setQuestion(this.ns.mNameOne + ' spent ' + this.a + ' ' + this.ns.mTimeIncrement + ' playing ' + this.ns.mPlayedActivityOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' spent ' + this.b + ' ' + this.ns.mTimeIncrement + ' more playing ' + this.ns.mPlayedActivityTwo + '. How many ' + this.ns.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend playing ' + this.mSum + '?'); 	
		}
                this.setAnswer(this.c,0);
        }
});

/*
var TwoStepApApB = new Class(
{
Extends: TextItem,
        initialize: function(sheet,sum)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

		this.mSum = sum;

		this.mNameMachine = new NameMachine();
		this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*50)+50;
                this.b = Math.floor(Math.random()*28)+12;
                this.c = Math.floor(Math.random()*28)+12;
                this.d = parseInt(this.a - this.b - this.c);
	
                random = Math.floor(Math.random()*5)+1;
		
		if (random == 5)
		{
                	this.d = parseInt(this.b + this.b + this.c);
			this.setQuestion('There are ' + this.b + ' ' + this.ns.mAnimalOne + '. There are ' + this.c + ' ' + this.mCompare + ' ' + this.ns.mAnimalTwo + ' than ' + this.ns.mAnimalOne + '. How many animals are there + ' ' + this.mSum + '?');        
		}
		
		if (random == 4)
		{
                	this.d = parseInt(this.a - this.b);
			this.setQuestion(this.ns.mNameOne + ' and ' + this.ns.mNameTwo + ' are on the same team called the ' + this.ns.mAnimalOne + '. The ' + this.ns.mAnimalOne + ' scored ' + ' ' + this.a + ' points total. ' + this.ns.mNameOne + ' scored ' + this.b + ' points. ' + this.ns.mNameTwo + ' scored the rest of the points for the ' + this.ns.mAnimalOne + '. How many points did ' + this.ns.mNameTwo + ' score.'     ) ;    	
		}
	
		if (random == 3)
		{
                	this.a = Math.floor(Math.random()*20)+30;
                	this.b = Math.floor(Math.random()*20)+15;
                	this.d = parseInt(this.a + this.a - this.b);
			this.setQuestion(this.ns.mNameOne + ' planted ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.ns.mNameTwo + ' planted ' + this.b + ' less ' + this.ns.mVegetableOne + ' than ' + this.ns.mNameOne + '. How many ' + this.ns.mVegetableOne + ' did they plant in total?' );  	
		}
		
		if (random == 2)
		{
                	this.a = Math.floor(Math.random()*10)+20;
                	this.b = Math.floor(Math.random()*20)+15;
                	this.d = parseInt(this.b + this.b + this.a);
			this.setQuestion('There are ' + this.b + ' ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. There are ' + this.a + ' more ' + this.ns.mColorTwo + ' ' + this.ns.mThings + ' than ' + this.ns.mColorOne + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' are there altogether?');    	
		}

		if (random == 1)
		{
                	this.a = Math.floor(Math.random()*20)+35;
                	this.b = Math.floor(Math.random()*10)+20;
                	this.d = parseInt(this.a - this.b + this.a);
			this.setQuestion(this.ns.mNameOne + ' spent ' + this.a + ' ' + this.ns.mTimeIncrement + ' playing ' + this.ns.mPlayedActivityOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' spent ' + this.b + ' ' + this.ns.mTimeIncrement + ' less playing ' + this.ns.mPlayedActivityTwo + '. How many ' + this.ns.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend playing total?'); 	
		}
                this.setAnswer(this.d,0);
        }
});
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_15',2.0115,'2.oa.a.1','Two step. a+a+b');
*/

var i_2_oa_a_1__15 = new Class(
{
Extends: TwoStepApApB,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_15';
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_14',2.0114,'2.oa.a.1','One step. TakingFrom. left' );
*/

var i_2_oa_a_1__14 = new Class(
{
Extends: OneStepTakingFrom,
        initialize: function(sheet)
        {
        	this.parent(sheet,'left');
                this.mType = '2.oa.a.1_14';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_13',2.0113,'2.oa.a.1','Two step. TakingFrom. left' );
*/

var i_2_oa_a_1__13 = new Class(
{
Extends: TwoStepTakingFrom,
        initialize: function(sheet)
        {
        	this.parent(sheet,'left');
                this.mType = '2.oa.a.1_13';
        }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_12',2.0112,'2.oa.a.1','One step. Addition. altogether' );
*/

var i_2_oa_a_1__12 = new Class(
{
Extends: OneStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_12';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_11',2.0111,'2.oa.a.1','Two step. Addition. in all' );
*/

var i_2_oa_a_1__11 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in all');
                this.mType = '2.oa.a.1_11';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_10',2.0110,'2.oa.a.1','Two step. Addition. in total' );
*/

var i_2_oa_a_1__10 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in total');
                this.mType = '2.oa.a.1_10';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_9',2.0109,'2.oa.a.1','Two step. Addition. total' );
*/
var i_2_oa_a_1__9 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'total');
                this.mType = '2.oa.a.1_9';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_8',2.0108,'2.oa.a.1','Two step. Addition. in sum' );
*/
var i_2_oa_a_1__8 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'in sum');
                this.mType = '2.oa.a.1_8';
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.oa.a.1_7',2.0107,'2.oa.a.1','Two step. Addition. Altogether' );
*/
var i_2_oa_a_1__7 = new Class(
{
Extends: TwoStepPuttingTogether,
        initialize: function(sheet)
        {
        	this.parent(sheet,'altogether');
                this.mType = '2.oa.a.1_7';
        }
});



