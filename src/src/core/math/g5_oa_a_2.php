/*  5.oa.a.2 */

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_11',5.0211,'5.oa.a.2','Write expression based on word problem. Fractions. Words: more than, times that many');
*/

var i_5_oa_a_2__11 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);
		//this.parent(sheet,150,50,125,95,100,50,425,100,100,50,425,175);
 		//this.parent(sheet,150,50,125,95, 100,50,425,100, 100,50,425,175, 100,50,325,100, 100,50,525,100);

                this.mType = '5.oa.a.2_11';
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.a = Math.floor((Math.random()*8)+2);
                this.b = Math.floor((Math.random()*8)+2);
                this.n = Math.floor((Math.random()*8)+2);
                this.d = Math.floor((Math.random()*8)+2);

                this.setQuestion('Write a numerical expression for the phrase ' + this.a + ' more than ' + this.b + ' groups of ' + this.mNameMachine.getNumberName(this.n) + ' ' + this.mNameMachine.getDenominatorName(this.d));

		this.setAnswer(this.a + '+(' + this.b + 'x' +  this.n + '/' + this.d + ')',0);
		this.setAnswer(this.a + '+(' + this.n + '/' +  this.d + 'x' + this.b + ')',1);
		
		this.setAnswer(this.a + '+(' + this.b + '*' +  this.n + '/' + this.d + ')',2);
		this.setAnswer(this.a + '+(' + this.n + '/' +  this.d + '*' + this.b + ')',3);
		
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_10',5.0210,'5.oa.a.2','Write expression based on word problem. Words: more than, times that many');
*/

var i_5_oa_a_2__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_10';
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.x = Math.floor((Math.random()*8)+2);
                this.y = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);

                this.setQuestion(this.ns.mNameOne + ' has ' + this.x + ' more than ' + this.y + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameTwo + ' has ' + this.z + ' times that many ' + this.ns.mThingOne + '. Write an expression that represents this.');

                this.setAnswer('(' + this.x + '+' +  this.y + ')' + this.z,0);
                this.setAnswer('(' + this.y + '+' +  this.x + ')' + this.z,1);
		this.setAnswer(this.z + '(' + this.x + '+' +  this.y + ')',2);
		this.setAnswer(this.z + '(' + this.y + '+' +  this.x + ')',3);
                
		this.setAnswer('(' + this.x + '+' +  this.y + ')x' + this.z,4);
                this.setAnswer('(' + this.y + '+' +  this.x + ')x' + this.z,5);
		this.setAnswer(this.z + 'x(' + this.x + '+' +  this.y + ')',6);
		this.setAnswer(this.z + 'x(' + this.y + '+' +  this.x + ')',7);
		
		this.setAnswer('(' + this.x + '+' +  this.y + ')*' + this.z,8);
                this.setAnswer('(' + this.y + '+' +  this.x + ')*' + this.z,9);
		this.setAnswer(this.z + '*(' + this.x + '+' +  this.y + ')',10);
		this.setAnswer(this.z + '*(' + this.y + '+' +  this.x + ')',11);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_9',5.0209,'5.oa.a.2','Write expression based on word problem. Words: divided, subtracted');
*/

var i_5_oa_a_2__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_9';
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.x = 60; 
                this.y = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);

		this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.y + ' minutes fewer than an hour. ' + this.ns.mNameTwo + ' played for ' + this.z + ' times as long as ' + this.ns.mNameOne + '. Write an expression that represents this.');   
                this.setAnswer('(60-' + this.y + ')' + this.z,0);
                this.setAnswer(this.z + '(60-' + this.y + ')',1);
                
		this.setAnswer('(60-' + this.y + ')x' + this.z,2);
                this.setAnswer(this.z + 'x(60-' + this.y + ')',3);
		
		this.setAnswer('(60-' + this.y + ')*' + this.z,4);
                this.setAnswer(this.z + '*(60-' + this.y + ')',5);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_8',5.0208,'5.oa.a.2','Write expression based on word problem. Words: divided, subtracted ');
*/

var i_5_oa_a_2__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_8';
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.factor = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);
                this.y = Math.floor((Math.random()*8)+2)
                this.x = parseInt( (this.factor * this.z) + this.y );

                this.setQuestion('Before lunch the cafeteria at ' + this.ns.mSchoolOne + ' had ' + this.x + ' ' + this.ns.mFruitOne + '. After lunch the cafeteria had ' + this.y + ' less. The remaining were divided among the ' + this.z + ' players on the ' + this.ns.mPlayedActivityOne + ' team. Write an expression that represents this.');

                this.setAnswer('('+this.x+'-'+this.y+')/'+this.z,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_7',5.0207,'5.oa.a.2','');
*/

var i_5_oa_a_2__7 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_7';
		this.mNameMachine = new NameMachine(); 
                this.ns = new NameSampler();

		this.factor = Math.floor((Math.random()*8)+2);
		this.z = Math.floor((Math.random()*8)+2);
		this.y = Math.floor((Math.random()*8)+2) 		
		this.x = parseInt( (this.factor * this.z) + this.y );

                this.setQuestion(this.ns.mNameOne + ' had ' + this.x + ' ' + this.ns.mFruitOne + ', ' + this.y + ' of them were rotten so ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0) + ' threw them out. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1) + ' gave the rest out evenly to ' + this.z + ' friends. Write an expression that represents this.');
                
		this.setAnswer('('+this.x+'-'+this.y+')/'+this.z,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_6',5.0206,'5.oa.a.2','Write expression based off sentence expression. Words used: product of , seven less.');
*/

var i_5_oa_a_2__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_6';

               	var f = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var a = parseInt(b*f);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: The quotient of ' + a + ' and ' + b + ' increased by ' + c  );
                this.setAnswer(a + '/' + b + '+' + c,0);
                this.setAnswer(c + '+' + a + '/' + b,1);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_5',5.0205,'5.oa.a.2','Write expression based off sentence expression. Words used: product of , seven less.');
*/

var i_5_oa_a_2__5 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_5';

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: The product of ' + a + ' and ' + b + ' decreased by ' + c  );
                this.setAnswer(a + 'x' + b + '-' + c,0);
                this.setAnswer(a + 'x' + b + '-' + c,1);
                
		this.setAnswer(b + '*' + a + '-' + c,2);
                this.setAnswer(b + '*' + a + '-' + c,3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_4',5.0204,'5.oa.a.2','Write expression based off sentence expression. Words used: product of , seven less.');
*/

var i_5_oa_a_2__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_4';

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: ' + a + ' less than the product of ' + b + ' and ' + c  );
                this.setAnswer(b + 'x' + c + '-' + a,0);
                this.setAnswer(b + '*' + c + '-' + a,1);
                
		this.setAnswer(c + 'x' + b + '-' + a,2);
                this.setAnswer(c + '*' + b + '-' + a,3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_3',5.0203,'5.oa.a.2','Write expression based off sentence expression. Words used: difference, times .');
*/

var i_5_oa_a_2__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_3';

               	var a = Math.floor(Math.random()*5+6);
               	var b = Math.floor(Math.random()*5+1);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: The difference of ' + a + ' and ' + b + ' times ' + c );
                this.setAnswer('(' + a + '-' + b + ')' + c,0);
                this.setAnswer(c + '(' + a + '-' + b + ')',1);
                
		this.setAnswer('(' + a + '-' + b + ')x' + c,2);
                this.setAnswer(c + 'x(' + a + '-' + b + ')',3);
		
		this.setAnswer('(' + a + '-' + b + ')*' + c,4);
                this.setAnswer(c + '*(' + a + '-' + b + ')',5);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_2',5.0202,'5.oa.a.2','Write expression based off sentence expression. Words used: times, sum.');
*/

var i_5_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_2';

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: ' + a + ' times the sum of  ' + a + ' and ' + b + '.');
                this.setAnswer('(' + a + '+' + b + ')' + c,0);
                this.setAnswer(c + '(' + a + '+' + b + ')',1);
                this.setAnswer('(' + b + '+' + a + ')' + c,2);
                this.setAnswer(c + '(' + b + '+' + a + ')',3);
                
		this.setAnswer('(' + a + '+' + b + ')x' + c,0);
                this.setAnswer(c + 'x(' + a + '+' + b + ')',1);
                this.setAnswer('(' + b + '+' + a + ')x' + c,2);
                this.setAnswer(c + 'x(' + b + '+' + a + ')',3);
		
		this.setAnswer('(' + a + '+' + b + ')*' + c,0);
                this.setAnswer(c + '*(' + a + '+' + b + ')',1);
                this.setAnswer('(' + b + '+' + a + ')*' + c,2);
                this.setAnswer(c + '*(' + b + '+' + a + ')',3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_1',5.0201,'5.oa.a.2','Write expression based off sentence expression. Words used add, multiply.');
*/

var i_5_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,450,50,250,95, 200,50,625,100);

                this.mType = '5.oa.a.2_1';
        	this.mQuestionLabel.setSize(325,50);
        	this.mQuestionLabel.setPosition(200,95);
        	this.mAnswerTextBox.setPosition(525,100);

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: Add ' + a + ' and ' + b + ' then multiply by ' + c + '.');
                this.setAnswer('(' + a + '+' + b + ')' + c,0);
                this.setAnswer(c + '(' + a + '+' + b + ')',1);
                this.setAnswer('(' + b + '+' + a + ')' + c,2);
                this.setAnswer(c + '(' + b + '+' + a + ')',3);

                this.setAnswer('(' + a + '+' + b + ')x' + c,4);
                this.setAnswer(c + 'x(' + a + '+' + b + ')',5);
                this.setAnswer('(' + b + '+' + a + ')x' + c,6);
                this.setAnswer(c + 'x(' + b + '+' + a + ')',7);

                this.setAnswer('(' + a + '+' + b + ')*' + c,8);
                this.setAnswer(c + '*(' + a + '+' + b + ')',9);
                this.setAnswer('(' + b + '+' + a + ')*' + c,10);
                this.setAnswer(c + '*(' + b + '+' + a + ')',11);
        }
});

