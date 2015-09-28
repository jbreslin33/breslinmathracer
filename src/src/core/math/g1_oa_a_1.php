/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_11',1.0111,'1.oa.a.1','TerraNova');
*/

var i_1_oa_a_1__11 = new Class(
{
Extends: FourButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '1.oa.a.1_11';
                this.mChopWhiteSpace = false;
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.a = Math.floor(Math.random()*3)+3;
                this.b = Math.floor(Math.random()*4)+14;
                this.c = parseInt(this.a + this.b);

                this.setQuestion('' + this.ns.mNameOne + ' is buying ' + this.a + ' cases of ' + this.ns.mDrinkOne + '. Each case contains ' + this.b +  ' ' + this.ns.mDrinkOne + ' boxes. How many boxes of ' + this.ns.mDrinkOne + ' is ' + this.ns.mNameOne + ' buying in all?');

                this.r = Math.floor(Math.random()*4);

                this.answer = '';
                if (this.r == 0)
                {
                        this.answer = '' + 'None of these';
                }
                else
                {
                        this.answer = parseInt(this.a * this.b);
                }
                this.setAnswer('' + this.answer,0);

                this.mButtonA.setAnswer('' + this.answer);
                if (this.r == 0)
                {
                        this.mButtonB.setAnswer('' + parseInt(this.a + this.b));
                }
                else
                {
                        this.mButtonB.setAnswer('' + 'None of these');
                }
                this.mButtonC.setAnswer('' + parseInt(this.c / this.b) );
                this.mButtonD.setAnswer('' + parseInt( (this.a - 1)  * this.b) );
                this.shuffle(10);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_10',1.0110,'1.oa.a.1','.How many left.' );
*/

var i_1_oa_a_1__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_10';
         
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mNameOne + ' has a fruit stand. At the beginning of the day ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' had ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' then sold ' + this.b + ' ' + this.ns.mFruitOne + '. How many ' + this.ns.mFruitOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have ' + this.ns.mLeft + '?');        
                this.setAnswer('' + this.c,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_9',1.0109,'1.oa.a.1','How many more.' );
*/

var i_1_oa_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_9';
		
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mNameOne + ' has a fruit stand. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' sold ' + this.b + ' ' + this.ns.mFruitTwo + '. How many more ' + this.ns.mFruitOne + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' sell than ' + this.ns.mFruitTwo + '?');        
                this.setAnswer('' + this.c,0);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_8',1.0108,'1.oa.a.1','.How many left.' );
*/

var i_1_oa_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_8';
         
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
                random = Math.floor(Math.random()*5)+1;
		
		this.setQuestion('The kids were allowed to play a total of ' + this.a + ' ' + this.ns.mTimeIncrementSmall + ' of ' + this.ns.mPlayedActivityOne + '. If they already played for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + ' than how many ' + this.ns.mTimeIncrementSmall + ' do they have ' + this.ns.mLeft + ' to play?');    	
                this.setAnswer('' + this.c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_7',1.0107,'1.oa.a.1','How many more.' );
*/

var i_1_oa_a_1__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_7';
		
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' ' + this.ns.mTimeIncrementSmall + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityTwo + ' for ' + ' ' + this.a + ' ' + this.ns.mTimeIncrementSmall + '. How many more ' + this.ns.mTimeIncrementSmall + ' did ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' play ' + this.ns.mPlayedActivityTwo + ' than ' + this.ns.mPlayedActivityOne + '?');  	
                this.setAnswer('' + this.c,0);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_6',1.0106,'1.oa.a.1','.How many left.' );
*/

var i_1_oa_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_6';
         
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mNameOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + '. If ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' ate ' + this.b + '. How many ' + this.ns.mVegetableOne + ' will '  +  this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have ' + this.ns.mLeft + '?');  	
                this.setAnswer('' + this.c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_5',1.0105,'1.oa.a.1','How many more.' );
*/

var i_1_oa_a_1__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_5';
		
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mNameOne + ' has a garden with ' + this.a + ' ' + this.ns.mVegetableOne + ' and ' + this.b + ' ' + this.ns.mVegetableTwo + '. How many more ' + this.ns.mVegetableOne + ' does ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' have than ' + this.ns.mVegetableTwo + '?');  	
                this.setAnswer('' + this.c,0);
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_4',1.0104,'1.oa.a.1','.How many left.' );
*/

var i_1_oa_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_4';
         
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.b + ' students left ' + this.ns.mSchoolOne + ' and started going to ' + this.ns.mSchoolTwo + '. If ' + this.ns.mSchoolOne + ' had ' + this.a + ' students to begin with than how many students does ' + this.ns.mSchoolOne + ' have ' + this.ns.mLeft + '?'  );    	
                this.setAnswer('' + this.c,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('1.oa.a.1_3',1.0103,'1.oa.a.1','How many more.' );
*/

var i_1_oa_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '1.oa.a.1_3';
		
		this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

               	//variables
                this.a = Math.floor(Math.random()*8)+13;
                this.b = Math.floor(Math.random()*5)+5;
                this.c = parseInt(this.a - this.b);
	
		this.setQuestion(this.ns.mSchoolOne + ' has ' + this.b + ' students. ' + this.ns.mSchoolTwo + ' has ' + this.a + ' students. How many more students does ' + this.ns.mSchoolTwo + ' have than ' + this.ns.mSchoolOne + '?');    	
                this.setAnswer('' + this.c,0);
        }
});
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
	
		this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' gave '  + this.ns.mNameTwo + ' ' + this.b + ' ' + this.ns.mThings + '. How many ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have ' + this.ns.mLeft + '?');    	
                this.setAnswer('' + this.c,0);
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
	
		this.setQuestion(this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThings + '. ' + this.ns.mNameTwo + ' has ' + this.b + ' ' + this.ns.mThings + '. How many more ' + this.ns.mThings + ' does ' + this.ns.mNameOne + ' have than ' + this.ns.mNameTwo + '?');    	
                this.setAnswer('' + this.c,0);
        }
});
