
/*
prerequisites:
none finished
*/

var i_4_oa_a_1__word = new Class(
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
        }
});


var i_4_oa_a_1__word_communative = new Class(
{
Extends: i_4_oa_a_1__word,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

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
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_5',4.0105,'4.oa.a.1','Word Problem. Multiplication. Communative Property. ' );
*/

var i_4_oa_a_1__5 = new Class(
{
Extends: i_4_oa_a_1__word_communative,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_5';

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThingOne + '. ' + this.mNameMachine.getPronoun(this.mName,0) + ' friend has ' + this.b + ' times as many ' + this.mThingOne + ' than ' + this.mNameOne + '. They wrote the multiplication expression : ' + this.a + 'x' + this.b + ' to represent how many ' + this.mThingOne + ' they had altogether. What is another way to represent using multiplication how many ' + this.mThingOne + ' they have altogether.');
                this.setAnswer(this.b + 'x' + this.a ,0);
                this.setAnswer(this.b + 'X' + this.a ,0);
                this.setAnswer(this.b + '*' + this.a ,0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_4',4.0104,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication equation as a comparison. ' );
*/

var i_4_oa_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_4';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.a + '*' + this.b + '=' + this.c + ' means that ' + this.c + ' is ' + this.b + ' times greater than what number?');
                this.setAnswer(this.a ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_3',4.0103,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication equation as a comparison. ' );
*/

var i_4_oa_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_3';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.a + '*' + this.b + '=' + this.c + ' means that ' + this.c + ' is ' + this.a + ' times greater than what number?');
                this.setAnswer(this.b ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_2',4.0102,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication comparison. ' );
*/

var i_4_oa_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('The equation: ' + this.c + '=' + this.a + '*' + this.b + ' means that ' + this.c + ' is ' + this.b + ' times greater than what number?');
                this.setAnswer(this.a,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_1',4.0101,'4.oa.a.1','Word Problem. Multiplication. Interprete a multiplication comparison. ' );
*/

var i_4_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);

               	//variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);
	
		this.setQuestion('The equation: ' + this.c + '=' + this.a + '*' + this.b + ' means that ' + this.c + ' is ' + this.a + ' times greater than what number?');			 
                this.setAnswer(this.b ,0);
        }
});




