
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_5',4.0205,'4.oa.a.2','Multiplicative or Additive Comparison. Neither.');
*/

var i_4_oa_a_2__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_5';

                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThingOne  = this.mNameMachine.getThing();
                this.mThingTwo = this.mNameMachine.getThing();
                this.mColorOne  = this.mNameMachine.getColor();
                this.mColorTwo  = this.mNameMachine.getColor();

                this.setQuestion(this.mNameOne + ' has ' + this.mColorOne + ' ' + this.mThingOne + ' and ' + this.mNameTwo + ' has ' + this.mColorTwo + ' ' + this.mThingTwo + ' is an example of:');
                this.setAnswer('Neither',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_4',4.0204,'4.oa.a.2','Multiplicative or Additive Comparison. Additive comparison.');
*/

var i_4_oa_a_2__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_4';

                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThings  = this.mNameMachine.getThing();

                this.a = Math.floor(Math.random()*8+2);

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' more ' + this.mThings + ' than ' + this.mNameTwo + ' is an example of:');
                this.setAnswer('Additive Comparison',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_3',4.0203,'4.oa.a.2','Multiplicative or Additive Comparison. Multiplicative comparison.');
*/

var i_4_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '4.oa.a.2_3';

		this.mNameMachine = new NameMachine();
		this.mNameOne = this.mNameMachine.getName();
		this.mNameTwo = this.mNameMachine.getName();
		this.mThings  = this.mNameMachine.getThing();

                this.a = Math.floor(Math.random()*8+2);

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' times more ' + this.mThings + ' than ' + this.mNameTwo + ' is an example of:');
                this.setAnswer('Multiplicative Comparison',0);

                this.mButtonC.setAnswer('Additive Comparison');
                this.mButtonB.setAnswer('Neither');
                this.mButtonA.setAnswer('Multiplicative Comparison');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_2',4.0202,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Division operation.' );
*/

var i_4_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 
                
		this.mAdult     = this.mNameMachine.getAdult();

		this.a = 0;
		this.b = 0;
		this.c = 0;
		this.r = 1;

		while (this.r != 0)
		{	
                	//variables
                	this.a = Math.floor(Math.random()*90)+10;
                	this.b = Math.floor(Math.random()*8)+2;
                	this.c = parseInt(this.a / this.b);
			this.r = this.a % this.b;
		}
						
                this.random = Math.floor(Math.random()*2);
		this.random = 2;
		
		if (this.random == 2) 
		{
			this.setQuestion(this.mAdult + ' had a garden. In the garden ' + this.mNameMachine.getPronoun(this.mAdult,0) + ' had ' + this.a + ' '  + this.mVegetableOne + ' which represents ' + this.b + ' times the amount of ' + this.mVegetableTwo +  ' in ' + this.mNameMachine.getPronoun(this.mAdult,0,1) + ' garden. Write an equation that can be used to solve how many ' + this.mVegetableTwo +  ' are in the garden. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12')     
		}
		
		if (this.random == 1)
		{
                	this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day. ' + this.mNameTwo + ' played ' + this.mPlayedActivity + ' for ' + this.b + ' times less minutes a day. Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');
		}
		
		if (this.random == 0)
		{
                	this.setQuestion('At ' + this.mSchool + ' room ' + this.mRoomOne + ' ate ' + this.a + ' ' + this.mFruit + '. Room '  + this.mRoomOne + ' ate ' + this.b + ' times as many ' + this.mFruit + ' as room ' + this.mRoomTwo + '. How many ' + this.mFruit + ' did room ' + this.mRoomTwo + ' eat? Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');

		}

                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_1',4.0201,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Multiplication operation.' );
*/

var i_4_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);
		this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThing       = this.mNameMachine.getThing();
                this.mOwned       = this.mNameMachine.getOwned();

               	//variables
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write an equation that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12'); 

                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,3);
        }
});


