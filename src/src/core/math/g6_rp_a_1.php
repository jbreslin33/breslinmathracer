
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_17',6.0117,'6.rp.a.1','' );
*/

var i_6_rp_a_1__17 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_17';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*20)+2);
                var b = Math.floor((Math.random()*20)+1);

                this.setQuestion('' + this.ns.mNameOne + ' has some balls. The ratio of his ' + this.ns.mColorOne + ' balls to ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mColorTwo + ' balls is ' + a + ' to ' + b + '. Write the ratio with a colon of ' + this.ns.mColorOne + ' balls to ' + this.ns.mColorTwo + ' balls.');

                this.setAnswer('' + a + ':' + b ,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_16',6.0116,'6.rp.a.1','' );
*/

var i_6_rp_a_1__16 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_14';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*2)+2);
                var b = Math.floor((Math.random()*10)+30);

                this.setQuestion('' + this.ns.mSchoolOne + ' is going on a field trip. They have ' + a + ' buses for every ' + b + ' students. What is the ratio of buses to students.');

                this.setAnswer('' + a + ':' + b ,0);
                this.setAnswer('' + a + 'to' + b ,1);
                this.setAnswer('' + a + '/' + b,2);
        }
});


var i_6_rp_a_1__picture = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                //move gui
                this.mUserAnswerLabel.setPosition(625,150);
                this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLinkOne = this.mNameMachine.getPictureLink();
                this.mPictureLinkTwo = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('YOU NEED A QUESTION IN CHILD!');

        },

        createQuestionShapes: function()
        {
                var y = 135;

                var a = parseInt(this.a);
                var b = parseInt(this.b);

                var x = 50;
                for (var i = 0; i < a; i++)
                {
                        this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkOne,"",""));
                        x = parseInt(x + 30);
                }

                var x = 400;
                for (var i = 0; i < b; i++)
                {
                        this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkTwo,"",""));
                        x = parseInt(x + 30);
                }
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_15',6.0115,'6.rp.a.1','' );
*/

var i_6_rp_a_1__15 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_15';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkOne) + ' to total pictures?');
		this.c = parseInt(this.a + this.b);
		

                this.setAnswer('' + this.a + ':' + this.c ,0);
                this.setAnswer('' + this.a + 'to' + this.c ,1);
                this.setAnswer('' + this.a + '/' + this.c,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_14',6.0114,'6.rp.a.1','' );
*/

var i_6_rp_a_1__14 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_14';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*5)+15);
                var b = Math.floor((Math.random()*10)+30);
                var c = parseInt(b - a);

                this.setQuestion('' + this.ns.mNameOne + ' painted ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' rock collection ' + this.ns.mColorOne + ' and ' + ' ' + this.ns.mColorTwo + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' painted ' + a + ' rocks ' + this.ns.mColorOne + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' has a total of ' + b + ' rocks in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' collection. What is the ratio of ' + this.ns.mColorOne + ' rocks to ' + this.ns.mColorTwo + ' rocks in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' collection.');

                this.setAnswer('' + a + ':' + c ,0);
                this.setAnswer('' + a + 'to' + c ,1);
                this.setAnswer('' + a + '/' + c,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_13',6.0113,'6.rp.a.1','' );
*/

var i_6_rp_a_1__13 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_13';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*5)+15);
                var b = Math.floor((Math.random()*10)+30);
                var c = parseInt(b - a);

                this.setQuestion('' + this.ns.mNameOne + ' is making bracelets. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' uses ' + a + ' ' + this.ns.mColorOne + ' and ' + b + ' ' + this.ns.mColorTwo + ' beads for each one ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' makes. What is the ratio of ' + this.ns.mColorOne + ' to ' + this.ns.mColorTwo + ' beads that ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' uses.');

                this.setAnswer('' + a + ':' + b ,0);
                this.setAnswer('' + a + 'to' + b ,1);
                this.setAnswer('' + a + '/' + b,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_12',6.0112,'6.rp.a.1','' );
*/

var i_6_rp_a_1__12 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_12';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*5)+15);
                var b = Math.floor((Math.random()*10)+30);
                var c = parseInt(b - a);

                this.setQuestion('' + 'The ' + this.ns.mNameMachine.getGrade(0,7) + ' grade of ' + this.ns.mSchoolOne + ' went on a field trip to the zoo. At the zoo there was ' + a + ' ' + this.ns.mAnimalOne + ' and ' + b + ' ' +  this.ns.mAnimalTwo + '. Write the ratio of ' + this.ns.mAnimalOne + ' to ' + this.ns.mAnimalTwo + '.');

                this.setAnswer('' + a + ':' + b ,0);
                this.setAnswer('' + a + 'to' + b ,1);
                this.setAnswer('' + a + '/' + b,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_11',6.0111,'6.rp.a.1','' );
*/

var i_6_rp_a_1__11 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_11';
                this.ns = new NameSampler();

                var a = Math.floor((Math.random()*5)+15);
                var b = Math.floor((Math.random()*10)+30);
		var c = parseInt(b - a);

                this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mGenderKidOne + ' in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' ' + this.ns.mSubjectOne + ' class. There are ' + b + ' students total in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' class. Use a colon to write the ratio of ' + this.ns.mGenderKidOne + ' to ' + this.ns.mGenderKidTwo + '.');

                this.setAnswer('' + a + ':' + c ,0);        
	}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_10',6.0110,'6.rp.a.1','' );
*/

var i_6_rp_a_1__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_10';
                this.ns = new NameSampler();
                
		var a = Math.floor((Math.random()*20)+2);
                var b = Math.floor((Math.random()*20)+1);

                this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' ' + this.ns.mThingOne + ' to every ' + b + ' ' + this.ns.mThingTwo + '. What is the ratio of ' + this.ns.mThingOne + ' to ' + this.ns.mThingTwo + ' ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' has?'  );

                this.setAnswer('' + a + ':' + b ,0);
                this.setAnswer('' + a + 'to' + b ,1);
                this.setAnswer('' + a + '/' + b,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_9',6.0109,'6.rp.a.1','' );
*/
var i_6_rp_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_9';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var d = Math.floor((Math.random()*2)+3);
                var c = Math.floor((Math.random()*89)+10);
                var g = Math.floor((Math.random()*10)+20);

                var dc = new Decimal('' + d + '.' + c);
                var gd = new Decimal('' + g);
                var answer = dc.multiply(gd);

                this.setQuestion('' + this.ns.mNameOne + ' drove '  + answer.getString() + ' miles on ' + g + ' gallons of gas. How many miles per gallon does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' get?');
                this.setAnswer('' + dc.getString(),0);
                this.setAnswer('' + dc.getString() + ' mpg',1);
                this.setAnswer('' + dc.getString() + ' miles per gallon',2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_8',6.0108,'6.rp.a.1','' );
*/
var i_6_rp_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_8';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var d = Math.floor((Math.random()*2)+3);
                var c = Math.floor((Math.random()*89)+10);
                var g = Math.floor((Math.random()*10)+20);

                var dc = new Decimal('' + d + '.' + c);
                var gd = new Decimal('' + g);
		var answer = dc.multiply(gd);

                this.setQuestion('' + 'Angry Baby bought gas for her car and it cost $' + answer.getMoney() + ' for ' + g + ' gallons of gas and it makes her so mad!. How much money did Angry Baby pay per gallon of gas?');
                this.setAnswer('$' + dc.getString(),0);
                this.setAnswer('' + dc.getString(),1);
                this.setAnswer('$' + dc.getString() + ' per gallon',2);
                this.setAnswer('$' + dc.getString() + ' per gallon of gas',3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_7',6.0107,'6.rp.a.1','' );
*/
var i_6_rp_a_1__7 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
     	this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);

                this.mType = '6.rp.a.1_7';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = 4;
                var b = 2;
                while (a % b == 0 || a == b || a > 20 || b > 20 || b < a)
                {
                        a = Math.floor((Math.random()*98)+2);
                        b = Math.floor((Math.random()*98)+2);
                }
                var c = new Fraction(a,b);
                this.setQuestion('' + this.ns.mNameOne + ' plans to bike a total of ' + a + ' miles every ' + b + ' days. Write this ratio as a fraction.');
                this.setAnswer('' + c.getString(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_6',6.0106,'6.rp.a.1','' );
*/
var i_6_rp_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_6';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = 4;
                var b = 2;
                while (a % b == 0 || a == b || a > 20 || b > 20 || b < a)
                {
                        a = Math.floor((Math.random()*98)+2);
                        b = Math.floor((Math.random()*98)+2);
                }
                c = parseInt( a / b );
                this.setQuestion('' + 'In baseball ' + this.ns.mNameOne + ' gets a hit ' + a + ' times out of every ' + b + ' attempts. Write the ratio with a colon to represent ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' this.');
                this.setAnswer('' + a + ':' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_3',6.0103,'6.rp.a.1','' );
*/
var i_6_rp_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_3';
               	this.ns = new NameSampler(); 
		this.mChopWhiteSphace = false;
		this.mStripCommas = false;

		var a = Math.floor((Math.random()*15)+2);
		var b = Math.floor((Math.random()*15)+2);

                this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a ratio 3 different ways. Seperate each way by a comma.');
                this.setAnswer('' + a + 'to' + b + ',' + a + ':' + b + ',' + a + '/' + b,0);
                this.setAnswer('' + a + 'to' + b + ',' + a + '/' + b + ',' + a + ':' + b,1);
                
		this.setAnswer('' + a + ':' + b + ',' + a + '/' + b + ',' + a + 'to' + b,2);
		this.setAnswer('' + a + ':' + b + ',' + a + 'to' + b + ',' + a + '/' + b,3);
		
		this.setAnswer('' + a + '/' + b + ',' + a + 'to' + b + ',' + a + ':' + b,4);
		this.setAnswer('' + a + '/' + b + ',' + a + ':' + b + ',' + a + 'to' + b,5);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_2',6.0102,'6.rp.a.1','Word Problem. Ratio. Picure. Flipped Order' );
*/

var i_6_rp_a_1__2 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_2';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkTwo) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkOne) + '?');
                
		this.setAnswer('' + this.b + ':' + this.a ,0);
                this.setAnswer('' + this.b + 'to' + this.a ,1);
                this.setAnswer('' + this.b + '/' + this.a,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_1',6.0101,'6.rp.a.1','Word Problem. Ratio. Picure. Normal Order' );
*/

var i_6_rp_a_1__1 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_1';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkOne) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkTwo) + '?');
                
		this.setAnswer('' + this.a + ':' + this.b ,0);
                this.setAnswer('' + this.a + 'to' + this.b ,1);
                this.setAnswer('' + this.a + '/' + this.b,2);
        }
});
