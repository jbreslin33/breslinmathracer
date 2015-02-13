
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
		
		while(this.a == this.b)
		{
                	this.a = Math.floor(Math.random()*8)+2;
                	this.b = Math.floor(Math.random()*8)+2;
		}
               	this.c = parseInt(this.a * this.b);

		this.setAnswer(this.b + 'x' + this.a ,0);
               	this.setAnswer(this.b + 'X' + this.a ,1);
               	this.setAnswer(this.b + '*' + this.a ,2);
        }
});

var i_4_oa_a_1__word_equation = new Class(
{
Extends: i_4_oa_a_1__word,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);
                
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c,0);
                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c,1);
		this.setAnswer('' + this.c + '=' + this.b + '*' + this.a,2);
		this.setAnswer('' + this.c + '=' + this.a + '*' + this.b,3);
                this.setAnswer('' + this.b + 'x' + this.a + '=' + this.c,4);
                this.setAnswer('' + this.a + 'x' + this.b + '=' + this.c,5);
		this.setAnswer('' + this.c + '=' + this.b + 'x' + this.a,6);
		this.setAnswer('' + this.c + '=' + this.a + 'x' + this.b,7);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_14',4.0114,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__14 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_14';
                this.ns = new NameSampler();

                this.setQuestion('' + this.mNameOne + ' has ' + this.a + ' ' + this.ns.mColorOne + ' crayons. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' has ' + this.b + ' times that many ' + this.ns.mColorTwo + ' crayons. Write a multiplication equation to represent the comparison.');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_13',4.0113,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__13 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_13';
                this.ns = new NameSampler();

                this.setQuestion(this.mNameOne + ' has read ' + this.a + ' pages of a chapter of ' + this.ns.mBookOne + '. There are ' + this.b + ' times that many pages left in the chapter. Write a multiplication equation to represent the total amount of pages in the chapter.');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_12',4.0112,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__12 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_12';
                this.ns = new NameSampler();

                this.setQuestion(this.mNameOne + ' wants to buy ' + this.ns.mPurchaseOne + ' that cost ' + this.c + '$. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' has ' + this.a + '$. Write a multiplication equation to represent this.');
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_11',4.0111,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__11 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_11';
                this.ns = new NameSampler();

                this.setQuestion(this.mNameOne + ' scored ' + this.a + ' points playing ' + this.ns.mPointActivityOne + ' on ' + this.ns.mDayOfWeekOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' scored ' + this.b + ' times as many points playing ' + this.ns.mPointActivityOne + ' on ' + this.ns.mDayOfWeekTwo + '. Write a multiplication equation to represent this.');
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_10',4.0110,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__10 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_10';
                this.ns = new NameSampler();

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.ns.mVegetableOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' has ' + this.b + ' times as many ' + this.ns.mFruitTwo + '. Write a multiplication equation to represent this.');
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_9',4.0109,'4.oa.a.1','' );
*/

var i_4_oa_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,220,80);

                this.mType = '4.oa.a.1_9';

                //variables
                var a = Math.floor(Math.random()*8)+2;
                var b = Math.floor(Math.random()*8)+2;
                var c = parseInt(a * b);

                this.setQuestion('' + c + ' =  __ ' + ' &times ' + a);
                this.setAnswer('' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_8',4.0108,'4.oa.a.1','' );
*/

var i_4_oa_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,420,80);

                this.mType = '4.oa.a.1_8';

                //variables
                var a = Math.floor(Math.random()*8)+2;
                var b = Math.floor(Math.random()*8)+2;
                var c = parseInt(a * b);

                this.setQuestion('' + c + ' is __ times as many as ' + a);
                this.setAnswer('' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_7',4.0107,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__7 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_7';
        	this.ns = new NameSampler();

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.ns.mFruitOne + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' has ' + this.c + '  ' + this.ns.mFruitTwo + '. Write a multiplication equation to represent the comparison.');
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.1_6',4.0106,'4.oa.a.1','Word Problem. Multiplication. Put in equation form. ' );
*/

var i_4_oa_a_1__6 = new Class(
{
Extends: i_4_oa_a_1__word_equation,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.1_6';

                this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThing + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,1) + ' friend has ' + this.b + ' times as many ' + this.mThing + ' than ' + this.mNameOne + '. Write a multiplication equation to represent how many ' + this.mThing + ' they have altogether.');
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
		this.ns = new NameSampler();

                this.setQuestion('' + this.ns.mNameOne + ' has ' + this.a + ' ' + this.ns.mThingOne + '. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' friend ' + this.ns.mNameTwo + ' has ' + this.b + ' times as many ' + this.ns.mThingOne + ' as ' + this.ns.mNameOne + '. They wrote the multiplication expression  ' + this.a + 'x' + this.b + ' to represent how many more ' + this.ns.mThingOne + ' ' + this.ns.mNameTwo + ' has than ' +  this.ns.mNameOne + '. Using the communative property of multiplication what is another way to represent how many times more ' + this.ns.mThingOne + ' ' + this.ns.mNameTwo + ' has than ' + this.ns.mNameOne + '?');
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
                this.setAnswer('' + this.a ,0);
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
                this.setAnswer('' + this.b ,0);
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
                this.setAnswer('' + this.a,0);
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
                this.setAnswer('' + this.b ,0);
        }
});
