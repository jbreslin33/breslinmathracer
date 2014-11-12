/*  5.oa.a.2 */

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_12',5.0212,'5.oa.a.2','Write expression based on word problem. Fractions. Words: less than, product');
*/

var i_5_oa_a_2__12 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_12';
                this.mNameMachine = new NameMachine();
                this.ns = new NameSampler();

                this.a = Math.floor((Math.random()*8)+2);
                this.b = Math.floor((Math.random()*8)+2);
                this.n = Math.floor((Math.random()*8)+2);
                this.d = Math.floor((Math.random()*8)+2);

                this.setQuestion('Write a numerical expression for the phrase ' + this.a + ' less than the product of ' + this.b + ' and ' + this.mNameMachine.getNumberName(this.n) + ' ' + this.mNameMachine.getDenominatorName(this.d));

		this.setAnswer('(' + this.b + 'x' +  this.n + '/' + this.d + ')-' + this.a,0);
		this.setAnswer('(' + this.n + '/' +  this.d + 'x' + this.b + ')-' + this.a,1);
		this.setAnswer('(' + this.b + '*' +  this.n + '/' + this.d + ')-' + this.a,2);
		this.setAnswer('(' + this.n + '/' +  this.d + '*' + this.b + ')-' + this.a,3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_11',5.0211,'5.oa.a.2','Write a numerical expression based on word problem. Fractions. Words: groups, more than');
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
		
		this.setAnswer('(' + this.b + 'x' +  this.n + '/' + this.d + ')+' + this.a,4);
		this.setAnswer('(' + this.n + '/' +  this.d + 'x' + this.b + ')+' + this.a,5);
		this.setAnswer('(' + this.b + '*' +  this.n + '/' + this.d + ')+' + this.a,6);
		this.setAnswer('(' + this.n + '/' +  this.d + '*' + this.b + ')+' + this.a,7);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_10',5.0210,'5.oa.a.2','Write a numerical expression based on word problem. Words: more than, times that many');
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

                this.setQuestion(this.ns.mNameOne + ' has ' + this.x + ' more than ' + this.y + ' ' + this.ns.mThingOne + '. ' + this.ns.mNameTwo + ' has ' + this.z + ' times that many ' + this.ns.mThingOne + '. Write a numerical expression that represents this.');

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

		this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.y + ' minutes fewer than an hour. ' + this.ns.mNameTwo + ' played for ' + this.z + ' times as long as ' + this.ns.mNameOne + '. Write a numerical expression that represents this.');   
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

                this.setQuestion('Before lunch the cafeteria at ' + this.ns.mSchoolOne + ' had ' + this.x + ' ' + this.ns.mFruitOne + '. After lunch the cafeteria had ' + this.y + ' less. The remaining were divided among the ' + this.z + ' players on the ' + this.ns.mPlayedActivityOne + ' team. Write a numerical expression that represents this.');

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

                this.setQuestion(this.ns.mNameOne + ' had ' + this.x + ' ' + this.ns.mFruitOne + ', ' + this.y + ' of them were rotten so ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0) + ' threw them out. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1) + ' gave the rest out evenly to ' + this.z + ' friends. Write a numerical expression that represents this.');
                
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

                this.setQuestion('Write a numerical expression that matches this: The quotient of ' + a + ' and ' + b + ' increased by ' + c  );
                this.setAnswer(a + '/' + b + '+' + c,0);
                this.setAnswer(c + '+' + a + '/' + b,1);
                
		this.setAnswer('(' + a + '/' + b + ')+' + c,2);
                this.setAnswer(c + '+(' + a + '/' + b + ')',3);
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

                this.setQuestion('Write a numerical expression that matches this: The product of ' + a + ' and ' + b + ' decreased by ' + c  );
                this.setAnswer(a + 'x' + b + '-' + c,0);
                this.setAnswer(b + 'x' + a + '-' + c,1);
                
		this.setAnswer(b + '*' + a + '-' + c,2);
                this.setAnswer(a + '*' + b + '-' + c,3);
                
		this.setAnswer('(' + a + 'x' + b + ')-' + c,4);
                this.setAnswer('(' + b + 'x' + a + ')-' + c,5);
                
		this.setAnswer('(' + b + '*' + a + ')-' + c,6);
                this.setAnswer('(' + a + '*' + b + ')-' + c,7);
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

                this.setQuestion('Write a numerical expression that matches this: ' + a + ' less than the product of ' + b + ' and ' + c  );
                this.setAnswer(b + 'x' + c + '-' + a,0);
                this.setAnswer(b + '*' + c + '-' + a,1);
                
		this.setAnswer(c + 'x' + b + '-' + a,2);
                this.setAnswer(c + '*' + b + '-' + a,3);
                
		this.setAnswer('(' + b + 'x' + c + ')-' + a,4);
                this.setAnswer('(' + b + '*' + c + ')-' + a,5);
                
		this.setAnswer('(' + c + 'x' + b + ')-' + a,6);
                this.setAnswer('(' + c + '*' + b + ')-' + a,7);
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

                this.setQuestion('Write a numerical expression that matches this: The difference of ' + a + ' and ' + b + ' times ' + c );
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

                this.setQuestion('Write a numerical expression that matches this: ' + c + ' times the sum of  ' + a + ' and ' + b + '.');
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

                this.setQuestion('Write a numerical expression that matches this: Add ' + a + ' and ' + b + ' then multiply by ' + c + '.');
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

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_43',5.020043,'5.oa.a.2','Quotient definition.');
*/

var i_5_oa_a_2__0_43 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_43';

        this.setQuestion('What do we call the result of dividing one number from another?');
        this.setAnswer('quotient',0);
        this.setAnswer('a quotient',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_42',5.020042,'5.oa.a.2','Product definition.');
*/

var i_5_oa_a_2__0_42 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_42';

        this.setQuestion('What do we call the result of multiplying one number with another?');
        this.setAnswer('product',0);
        this.setAnswer('a product',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_41',5.020041,'5.oa.a.2','Difference definition.');
*/

var i_5_oa_a_2__0_41 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_41';

        this.setQuestion('What do we call the result of subtracting one number from another?');
        this.setAnswer('difference',0);
        this.setAnswer('a difference',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_40',5.020040,'5.oa.a.2','Sum definition.');
*/

var i_5_oa_a_2__0_40 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);
	this.mChopWhiteSpace = false;

        this.mType = '5.oa.a.2_0_40';

        this.setQuestion('What do we call the result of adding two or more numbers?');
        this.setAnswer('sum',0);
        this.setAnswer('a sum',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_29',5.020029,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_29 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_29';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words quotient of?');
        this.setAnswer('division',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_28',5.020028,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_28 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_28';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word divides?');
        this.setAnswer('division',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_27',5.020027,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_27 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_27';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word divided by?');
        this.setAnswer('division',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_26',5.020026,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_26 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_26';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word divide?');
        this.setAnswer('division',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_25',5.020025,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_25 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_25';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words times the product of?');
        this.setAnswer('multiplication',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_24',5.020024,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_24 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_24';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words times as much as?');
        this.setAnswer('multiplication',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_23',5.020023,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_23 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_23';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word times?');
        this.setAnswer('multiplication',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_22',5.020022,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_22';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word multiplied by?');
        this.setAnswer('multiplication',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_21',5.020021,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_21';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word multiply?');
        this.setAnswer('multiplication',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_20',5.020020,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_20';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word minus?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_19',5.020019,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_19';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words take away?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_18',5.020018,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_18';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words the difference of?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_17',5.020017,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_17';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word less?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_16',5.020016,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_16';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words less than?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_15',5.020015,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_15';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word subtract?');
        this.setAnswer('subtraction',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_14',5.020014,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_14';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word plus?');
        this.setAnswer('addition',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_13',5.020013,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a._0_13';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words the total of?');
        this.setAnswer('addition',0);
}
});
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_12',5.020012,'5.oa.a.2','');
*/

var i_5_oa_a_2__0_12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_12';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words the sum of?');
        this.setAnswer('addition',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_11',5.020011,'5.oa.a.2','add.');
*/

var i_5_oa_a_2__0_11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_11';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the words more than?');
        this.setAnswer('addition',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.2_0_10',5.020010,'5.oa.a.2','add.');
*/

var i_5_oa_a_2__0_10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.2_0_10';

        this.setQuestion('What operation, addition, subtraction, multiplication or division uses the word add?');
        this.setAnswer('addition',0);
}
});

