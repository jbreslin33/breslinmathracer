
/*  
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_1',0.1101,'k.oa.a.1','Add within 5 with pictures to help.');
*/

var i_k_oa_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_1';
             
		this.mNameMachine = new NameMachine();
		this.mPictureLink = this.mNameMachine.getPictureLink();
 
		this.a = 0;
		this.b = 0;
		this.c = -1;

		this.x = 0;	 
		this.y = 0;	 

		this.sign = Math.floor(Math.random()*2);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5)
		{
			//variables
                	this.x = Math.floor((Math.random()*5)+1);
                	this.y = Math.floor((Math.random()*5)+1);
			this.c = this.x + this.y;  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion('Solve.');
                this.setAnswer('' + parseInt(this.c),0);

                this.mButtonA.setAnswer('' + this.a);
                this.mButtonB.setAnswer('' + this.b);
                this.mButtonC.setAnswer('' + this.c);
                this.shuffle(10);
        },
        
	createQuestionShapes: function()
        {
                var x = 0;
                var y = 100;
		var space = 50;

		var i = 0;
		while (i < this.x)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
	
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/plus.png","",""));	
		
		i = 0;
		while (i < this.y)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/equal.png","",""));	
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.oa.a.1_2',0.1102,'k.oa.a.1','Subtract within 5 with pictures to help');
*/

var i_k_oa_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_2';
             
		this.mNameMachine = new NameMachine();
		this.mPictureLink = this.mNameMachine.getPictureLink();
 
		this.a = 0;
		this.b = 0;
		this.c = -1;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5)
		{
			//variables
                	this.x = Math.floor((Math.random()*5)+1);
                	this.y = Math.floor((Math.random()*5)+1);
			this.c = this.x - this.y;  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion('Solve.');
                this.setAnswer('' + parseInt(this.c),0);

                this.mButtonA.setAnswer('' + this.a);
                this.mButtonB.setAnswer('' + this.b);
                this.mButtonC.setAnswer('' + this.c);
                this.shuffle(10);
        },
        
	createQuestionShapes: function()
        {
                var x = 0;
                var y = 100;
		var space = 50;

		var i = 0;
		APPLICATION.log(this.x + ':' + this.y + '=' + this.c);
		while (i < this.x)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
	
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/minus.png","",""));	
		
		i = 0;
		while (i < this.y)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/equal.png","",""));	
        }
});

var i_k_oa_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_3';

                this.mNameMachine = new NameMachine();
                this.mName = this.mNameMachine.getName('girl');
                this.mNameTwo = this.mNameMachine.getName('girl');
                this.mThing = this.mNameMachine.getThing();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();
		this.mDayOfWeekOne = this.mNameMachine.getDayOfWeek();
		this.mDayOfWeekTwo = this.mNameMachine.getDayOfWeek();
		this.mTimeIncrement = this.mNameMachine.getTimeIncrement('minutes','hours');

                this.a = '';
                this.b = '';
                this.c = '';

                this.x = 0;
                this.y = 0;
                this.z = -1;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.z < 0 || this.z > 10)
                {
                        //variables
                        this.x = Math.floor((Math.random()*7)+2);
                        this.y = Math.floor((Math.random()*7)+2);
			this.z = this.x + this.y;

                        //wrong answers
                        this.a = this.x + ' = ' + this.y + ' + ' + ' _' 
                        this.b = this.y + ' = ' + this.x + ' + ' + ' _' 
                	this.c = this.z + ' = ' + this.x + ' + ' + ' _';
                }

		//adding more variety		
                var randomProblem = Math.floor(Math.random()*2);
		if (randomProblem == 0)
		{	
                	this.setQuestion(this.mName + ' grew ' + this.z + ' inches in two years. ' + this.mNameMachine.getPronoun(this.mName,1) + ' grew ' + this.x + ' inches the first year. How many inches did she grow the second year? Which equation shows this problem?');
		}
		if (randomProblem == 1)
		{
			this.setQuestion(this.mName + ' played ' + this.mPlayedActivity + ' a total of ' + this.z + ' ' + this.mTimeIncrement + ' on ' + this.mDayOfWeekOne + ' and ' + this.mDayOfWeekTwo + '. ' +  this.mNameMachine.getPronoun(this.mName,1) + ' played ' + this.mPlayedActivity + ' for ' + this.x + ' ' + this.mTimeIncrement + ' on ' + this.mDayOfWeekOne + '. How many ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mName,0) + ' play on ' + this.mDayOfWeekTwo + '? Which equation shows this problem?');   
		}
		this.setAnswer('' + this.c,0);

                this.mButtonA.setAnswer('' + this.a);
                this.mButtonB.setAnswer('' + this.b);
                this.mButtonC.setAnswer('' + this.c);
                this.shuffle(10);
        }
});

var i_k_oa_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_4';

                this.mNameMachine = new NameMachine();
                this.mName = this.mNameMachine.getName('girl');
                this.mNameTwo = this.mNameMachine.getName('boy');
                this.mDayOne = this.mNameMachine.getDayOfWeek();
                this.mDayTwo = this.mNameMachine.getDayOfWeek();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();
                this.mTimeIncrement = this.mNameMachine.getTimeIncrement('minutes','hours');
                this.mFruit = this.mNameMachine.getFruit();
                this.mThing = this.mNameMachine.getThing();

                this.a = '';
                this.b = '';
                this.c = '';

                this.x = 0;
                this.y = 0;
                this.z = -1;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.z < 0 || this.z > 10)
                {
                        //variables
                        this.x = Math.floor((Math.random()*7)+2);
                        this.y = Math.floor((Math.random()*7)+2);
                        this.z = this.x - this.y;

                        //wrong answers
                        this.a = this.x + ' + ' + this.y + ' = ' + ' _'
                        this.b = this.y + ' - ' + this.x + ' = ' + ' _'
                        this.c = this.x + ' - ' + this.y + ' = ' + ' _';
                }

		//adding more variety		
                var randomProblem = Math.floor(Math.random()*3);
		if (randomProblem == 0)
		{	
                	this.setQuestion(this.mName + ' played ' + this.mPlayedActivity + ' for ' + this.x + ' ' + this.mTimeIncrement + ' on ' + this.mDayOne + ' and '  + this.y + ' ' + this.mTimeIncrement + ' on ' + this.mDayTwo + '. How many more ' + this.mTimeIncrement + ' does ' + this.mNameMachine.getPronoun(this.mName) + ' play on ' + this.mDayOne + ' than ' + this.mDayTwo + '? Which equation shows this problem?');
		}

		//john ate 7 strawberries and sam ate 5 strawberries. How may more strawberries did john eat than sam? Which equati.....
		if (randomProblem == 1) 
		{
                	this.setQuestion(this.mName + ' ate ' + this.x + ' ' + this.mFruit + ' and ' + this.mNameTwo + ' ate ' + this.y + ' ' + this.mFruit + '. How many more pieces of fruit did ' + this.mName + ' eat than ' + this.mNameTwo + '? Which equation shows this problem?');
		}
		if (randomProblem == 2) 
		{
                	this.setQuestion(this.mName + ' has ' + this.x + ' ' + this.mThing + ' and ' + this.mNameTwo + ' has ' + this.y + ' ' + this.mThing + '. How many more ' + this.mThing + ' does ' + this.mName + ' have than ' + this.mNameTwo + '? Which equation shows this problem?');
		}


                this.setAnswer('' + this.c,0);

                this.mButtonA.setAnswer('' + this.a);
                this.mButtonB.setAnswer('' + this.b);
                this.mButtonC.setAnswer('' + this.c);
                this.shuffle(10);
        }
});
