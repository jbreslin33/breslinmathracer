
/*
prerequisites:
none finished
		if (random == 3)
		{
			var nameString = this.mNameMachine.getNameString(this.a);
			
			this.setQuestion(this.mNameOne + ' had friends named ' + nameString + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave each friend ' + this.b + ' ' + this.mFruit + '. Write a multiplication expression that can be used to solve how many ' + this.mFruit + ' ' + this.mNameOne + ' gave to ' + this.mNameMachine.getPronoun(this.mNameOne,0,1) + ' friends.');    	
		}

		if (random == 2)
		{
			this.setQuestion('At ' + this.mSchool + ' in the ' + this.mGrade + ' grade, room ' + this.mRoomOne + ' had ' + this.a + ' rows with ' + this.b + ' students in each row. Write a multiplication number sentence that can be used to solve how many students are in room ' + this.mRoomOne + '.');   
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day for ' + this.b + ' days.  Write a multiplication expression that can be used to solve how many minutes ' + this.mNameOne + ' played ' + this.mPlayedActivity + '.'); 
		} 

		if (random == 0)
		{
                	this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write a multiplication number sentence that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has.'); 
		}
*/

var i_3_oa_a_1__word = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThing       = this.mNameMachine.getThing();
                this.mFruit       = this.mNameMachine.getFruit();
                this.mOwned       = this.mNameMachine.getOwned();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                this.mGrade      = this.mNameMachine.getGrade();
                this.mSchool      = this.mNameMachine.getSchool();
                this.mRoomOne      = Math.floor(Math.random()*90)+9 

               	//variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
	
                this.setAnswer('' + this.a + '*' + this.b ,0);
                this.setAnswer('' + this.b + '*' + this.a ,1);
		this.setAnswer('' + this.b + '*' + this.a + '=' + this.c,2);
		this.setAnswer('' + this.a + '*' + this.b + '=' + this.c,3);
		this.setAnswer('' + this.b + '*' + this.a + '=',4);
		this.setAnswer('' + this.a + '*' + this.b + '=',5);

                this.setAnswer('' + this.a + 'x' + this.b ,6);
                this.setAnswer('' + this.b + 'x' + this.a ,7);
		this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c,8);
		this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c,9);
		this.setAnswer('' + this.b + 'x' + this.a + '=',10);
		this.setAnswer('' + this.a + 'x' + this.b + '=',11);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_5',3.0105,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10.' );
*/

var i_3_oa_a_1__5 = new Class(
{
Extends: i_3_oa_a_1__word,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_5';

		var nameString = this.mNameMachine.getNameString(this.a);
			
		this.setQuestion(this.mNameOne + ' had friends named ' + nameString + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave each friend ' + this.b + ' ' + this.mFruit + '. Write a multiplication expression that can be used to solve how many ' + this.mFruit + ' ' + this.mNameOne + ' gave to ' + this.mNameMachine.getPronoun(this.mNameOne,0,1) + ' friends.');    	
        }
});

var i_3_oa_a_1__repeated = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                
		var random = Math.floor(Math.random()*2);

		this.expression = '';

		for (i = 0; i < this.b; i++)
		{		
			if (i == 0)
			{
				this.expression = this.expression + ' ' + this.a; 	
			}
			if (i > 0)
			{
				this.expression = this.expression + '+' + this.a; 	
			}
		}

                this.setAnswer('' + this.a + '*' + this.b ,0);
                this.setAnswer('' + this.b + '*' + this.a ,1);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c,2);
                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c,3);
                this.setAnswer('' + this.b + '*' + this.a + '=',4);
                this.setAnswer('' + this.a + '*' + this.b + '=',5);

                this.setAnswer('' + this.a + 'x' + this.b ,6);
                this.setAnswer('' + this.b + 'x' + this.a ,7);
                this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c,8);
                this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c,9);
                this.setAnswer('' + this.b + 'x' + this.a + '=',10);
                this.setAnswer('' + this.a + 'x' + this.b + '=',11);

		this.setQuestion('' + this.expression); //this is incomplete
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_4',3.0104,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Repeated addition. Multiplication Expression' );
*/

var i_3_oa_a_1__4 = new Class(
{
Extends: i_3_oa_a_1__repeated,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_4';
                this.question = 'Write a multiplication expression that represents';
		this.setQuestion('' + this.question + this.expression );
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_3',3.0103,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Repeated addition. Multiplication Expression' );
*/

var i_3_oa_a_1__3 = new Class(
{
Extends: i_3_oa_a_1__repeated,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_3';
                this.question = 'Write a multiplication number sentence that represents';
		this.setQuestion('' + this.question + this.expression );
        }
});


var i_3_oa_a_1__picture = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

		//move gui
		this.mUserAnswerLabel.setPosition(625,150);
		this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
                
                this.setQuestion('YOU NEED A QUESTION IN CHILD!');

		this.setAnswer('' + this.a + '*' + this.b ,0);
                this.setAnswer('' + this.b + '*' + this.a ,1);
		this.setAnswer('' + this.b + '*' + this.a + '=' + this.c,2);
		this.setAnswer('' + this.a + '*' + this.b + '=' + this.c,3);
		this.setAnswer('' + this.b + '*' + this.a + '=',4);
		this.setAnswer('' + this.a + '*' + this.b + '=',5);

                this.setAnswer('' + this.a + 'x' + this.b ,6);
                this.setAnswer('' + this.b + 'x' + this.a ,7);
		this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c,8);
		this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c,9);
		this.setAnswer('' + this.b + 'x' + this.a + '=',10);
		this.setAnswer('' + this.a + 'x' + this.b + '=',11);
	},

        createQuestionShapes: function()
        {
                var y = 135;

		var a = parseInt(this.a); 
		var b = parseInt(this.b); 
	
                for (var i = 0; i < a; i++)
                {
			var x = 30; 
                	for (var z = 0; z < b; z++)
			{
                        	this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
                        	x = parseInt(x + 30);
			}
			y = y + 25; 	
                }
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_2',3.0102,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_3_oa_a_1__2 = new Class(
{
Extends: i_3_oa_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_2';
		
                this.setQuestion('Write a number sentence that represents the picture.');
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_1',3.0101,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_3_oa_a_1__1 = new Class(
{
Extends: i_3_oa_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_1';
		
                this.setQuestion('Write a multiplication expression that represents the picture.');
	}
});

