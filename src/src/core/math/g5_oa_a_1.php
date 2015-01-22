/*********
prerequisites from 4th grade:

OA:
------

4.oa.a.2 : Multiply or divide to solve word problems involving multiplicative comparison, e.g., by using drawings and equations with a symbol for the unknown number to represent the problem, distinguishing multiplicative comparison from additive comparison. 

4.oa.a.3 : Solve multistep word problems posed with whole numbers and having whole-number answers using the four operations, including problems in which remainders must be interpreted. Represent these problems using equations with a letter standing for the unknown quantity. Assess the reasonableness of answers using mental computation and estimation strategies including rounding.


NBT:
-------

4.nbt.a.3 : Use place value understanding to round multi-digit whole numbers to any place.

4.nbt.b.4 :
Fluently add and subtract multi-digit whole numbers using the standard algorithm.

4.nbt.b.5 :
Multiply a whole number of up to four digits by a one-digit whole number, and multiply two two-digit numbers, using strategies based on place value and the properties of operations. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.

4.nbt.b.6 :
Find whole-number quotients and remainders with up to four-digit dividends and one-digit divisors, using strategies based on place value, the properties of operations, and/or the relationship between multiplication and division. Illustrate and explain the calculation by using equations, rectangular arrays, and/or area models.


NF:
-----
4.nf.b.3.a : Understand addition and subtraction of fractions as joining and separating parts referring to the same whole. 

4.nf.b.3.c : Add and subtract mixed numbers with like denominators, e.g., by replacing each mixed number with an equivalent fraction, and/or by using properties of operations and the relationship between addition and subtraction.  

4.nf.b.3.d : Solve word problems involving addition and subtraction of fractions referring to the same whole and having like denominators, e.g., by using visual fraction models and equations to represent the problem.

4.nf.b.4.b : Understand a multiple of a/b as a multiple of 1/b, and use this understanding to multiply a fraction by a whole number. For example, use a visual fraction model to express 3 × (2/5) as 6 × (1/5), recognizing this product as 6/5. (In general, n × (a/b) = (n × a)/b.)

4.nf.b.4.b : Solve word problems involving multiplication of a fraction by a whole number, e.g., by using visual fraction models and equations to represent the problem. For example, if each person at a party will eat 3/8 of a pound of roast beef, and there will be 5 people at the party, how many pounds of roast beef will be needed? Between what two whole numbers does your answer lie? 




NOTES: if i where to add something it would be braces and brackets, the question is do i add them to existing items or create some new ones?
ok took care of that....
but what about fractions???
the workbook has fractions the standard states:
Use parentheses, brackets, or braces in numerical expressions, and evaluate expressions with these symbols.
so would that include fractions???
I think using fractions could be a check on whether or not fractions are known. so i think they are fair game.
//maybe make every 3rd type have fractions. Or maybe even types???? or how bout divisible by 3?? maybe 4 as that  would preclude braces...
//use only 4th grade fractions....
1 p
	1: b(a)   
	2: (a)b  
	3: b(a)c  
2 p
	4: (a)(b)  
	5: c(a)(b) 
	6: (a)c(b)   
	7: (a)(b)c  
	
	8: c(a)d(b) 
	9: (a)c(b)d   
	10: c(a)(b)d   

	11: c(a)d(b)e 
2p INNERS
	12: [(a)b]c   
	13: (c(a)b)d  
	14: c[(a)b]d
	15: c[b(a)]   
	16: d[b(a)c]  
	17: d(b(a)c)e  
3 inners
   	18:  e{d[b(a)c]} 
   	19:  (d(b(a)c))e  
   	20:  e{[(b(a)c]d}  
   	21:  ((b(a)c)d)e   
	22:  f{d[b(a)c]e}g   

   	//with braces and brackets	
   	

inner needs to be done.. i dont think i need so many of the 2p type.... or it might not do any harm to have them...

3 p 1 inner
: ((a)) 
	: (b(a))
	: (b(a)c)
	: d(b(a)c)

2p should be overlayed with another parens or bracket etc and that would give us 3 p.

this might be toughest i need to give maybe through in one with braces and brackets.... make a couple with inner 3 deep inner parens...
: e((b(a)c)d)


********/

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_22',5.0122,'5.oa.a.1','f(d(b(a)c)e)g',2);
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_22','4.nbt.b.5_1');
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_22','4.nbt.b.5_2');
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_22','4.nbt.b.5_3');
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_22','4.nbt.b.5_4');
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_22','4.nbt.b.5_5');
*/

var i_5_oa_a_1__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_22';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*20)+50);
                var b2 = Math.floor((Math.random()*2)+2);

                var c1 = Math.floor((Math.random()*2)+2);
                
		var d1 = Math.floor((Math.random()*2)+2);
                
		var e1 = Math.floor(Math.random()*10)+5;
                var e2 = Math.floor(Math.random()*4)+1;
		
		var f1 = Math.floor(Math.random()*2)+2;
		
		var g1 = Math.floor(Math.random()*2)+2;

                x = parseInt(   f1 * ( d1 * (b1 - b2 * (a1 - a2) * c1) * e1 ) * g1   );

                this.setQuestion('Evalute:' + f1 + '{' + d1 + '[' + b1 + ' - ' + b2 + '(' + a1 + ' - ' + a2 + ')' + c1 + ']' + e1 + '}' + g1 + '='     );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_21',5.0121,'5.oa.a.1','((b(a)c)d)e',2);
*/

var i_5_oa_a_1__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_21';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*2)+8);

                var c1 = Math.floor((Math.random()*2)+2);
                
		var d1 = Math.floor((Math.random()*8)+2);
                
		var e1 = Math.floor(Math.random()*10)+5;
                var e2 = Math.floor(Math.random()*4)+1;

                x = parseInt(    (( b1 * (a1 + a2) * c1 ) - d1 ) + e1 - e2  );

                this.setQuestion('Evaluate: ' + '((' + b1 + '(' + a1 + ' + ' + a2 + ')' + c1 + ') - ' + d1 + ') + ' + e1 + ' - ' + e2          );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_20',5.0120,'5.oa.a.1',' e((b(a)c)d)',2);

*/

var i_5_oa_a_1__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_20';

        var x = 0;
        var r = 1;
	while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*2)+8);

                var c1 = Math.floor((Math.random()*2)+2);
                
		var d1 = Math.floor((Math.random()*8)+2);
	
                var e1 = Math.floor(Math.random()*10)+5;

                x = parseInt(           e1 * (     (b1 * ( a1 - a2) / c1)  * d1 )               );
		var b1a12 = parseInt( b1 * ( a1 - a2) );

		r = b1a12 % c1; 

                this.setQuestion('Evaluate: ' + e1 + '{[' + b1 + '(' + a1 + ' - ' + a2 + ') /' + c1 + ']' + d1 + '}'       );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_19',5.0119,'5.oa.a.1','(d(b(a)c))e',2);
*/

var i_5_oa_a_1__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_19';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*10)+200);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*10)+1);
	
		var e1 = Math.floor((Math.random()*2)+2);

                x = parseInt(  (d1 + (b1 - ( a1 + a2) * c1 )) * e1 );

                this.setQuestion('Evaluate: ' + '(' + d1 + ' + ' + '(' + b1 + ' - (' + a1 + ' + ' + a2 + ')' + c1 + '))' + e1          );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_18',5.0118,'5.oa.a.1','e(d(b(a)c))',2);
*/

var i_5_oa_a_1__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_18';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*250)+50);
	
		var e1 = Math.floor((Math.random()*100)+900);

                x = parseInt(    e1 - ( d1 + ( b1 + (a1 - a2) * c1 ))      );

                this.setQuestion('Evaluate: ' + e1 + ' - ' + '{' + d1 + ' + [' + b1 + ' + (' + a1 + ' - ' + a2 + ')' + c1 + ']}'     );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_17',5.0117,'5.oa.a.1','d(b(a)c)e',2);
*/

var i_5_oa_a_1__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_17';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*250)+50);
	
		var e1 = Math.floor((Math.random()*10)+1);

                x = parseInt(   d1 - (b1 * (a1 - a2) + c1) - e1   );

                this.setQuestion('Evaluate: ' + d1 + ' - ' + '(' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ') - ' + e1    );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_16',5.0116,'5.oa.a.1','d(b(a)c)',2);
*/

var i_5_oa_a_1__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_16';

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+6;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*50)+50);

                x = parseInt(   d1 - (b1 * (a1 - a2) + c1)   );

                this.setQuestion('Evaluate: ' + d1 + ' - ' + '[' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ']'   );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_15',5.0115,'5.oa.a.1',' c(b(a))',2);
*/

var i_5_oa_a_1__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_15';

        var x = 0;
       	var r = 1; 
	while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*5)+3;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*8)+2);

                x = parseInt(   c1 * ( b1 / (a1 - a2))    );

		var a12 = parseInt( a1 - a2); 
		
		r = b1 % a12; 

                this.setQuestion('Evaluate: ' + c1 + '(' + b1 + ' / (' + a1 + '-' + a2 + '))' );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_14',5.0114,'5.oa.a.1','c((a)b)d',2);
*/

var i_5_oa_a_1__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_14';

        var x = 0;
        
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*100)+900);
                
		var d1 = Math.floor((Math.random()*8)+2);

                x = parseInt(   c1 - ( (a1 + a2) * b1) - d1     );

                this.setQuestion('Evaluate: ' + c1 + ' - ' + '[(' + a1 + ' + ' + a2 + ') ' + b1 + '] - ' + d1 );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_13',5.0113,'5.oa.a.1','(c(a)b)d',2);
*/

var i_5_oa_a_1__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_13';

        var x = 0;
        var r = 1;
        
	while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*100)+900);
                
		var d1 = Math.floor((Math.random()*8)+2);

		var c1a12b1 = parseInt( (c1 - (a1 + a2) + b1) );  

		r = c1a12b1 % d1;
                
                x = parseInt( (c1 - (a1 + a2) + b1) / d1 );

                this.setQuestion('Evaluate: ' + '(' + c1 + ' - ' + '(' + a1 + ' + ' + a2 + ') + ' + b1 + ' / ' + d1 + ')'  );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_12',5.0112,'5.oa.a.1','((a)b)c',2);
*/

//this might be marked as huge multiplication...in db
var i_5_oa_a_1__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_12';

        var x = 0;
        
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
                x = parseInt( ((a1 + a2) * b1) * c1   );

                this.setQuestion('Evaluate: ' + '[(' + a1 + ' + ' + a2 + ') ' + b1 + '] ' + c1 );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_11',5.0111,'5.oa.a.1','c(a)d(b)e',2);
*/

//this might be marked as huge multiplication...in db
var i_5_oa_a_1__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_11';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*100)+50;
                var a2 = Math.floor(Math.random()*48)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*900)+100);
                
		var d1 = Math.floor((Math.random()*5)+10);
		
		var e1 = Math.floor((Math.random()*5)+10);

		var a12b12c1d1 = parseInt( c1 * (a1 - a2) * d1 * (b1 + b2) );  

                r = a12b12c1d1 % e1;
                
                x = parseInt( c1 * (a1 - a2) * d1 * (b1 + b2) / e1 );

                this.setQuestion('Evaluate: ' + c1 + ' (' + a1 + ' - ' + a2 + ') ' + d1 + ' (' + b1 + ' + ' + b2 + ') / ' + e1 );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_10',5.0110,'5.oa.a.1','c(a)(b)d',2);
*/

var i_5_oa_a_1__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_10';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*100)+50;
                var a2 = Math.floor(Math.random()*48)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*900)+900);
                
		var d1 = Math.floor((Math.random()*5)+10);
                var d2 = Math.floor((Math.random()*5)+1);

		var a12b12d1 = parseInt( (a1 - a2) * (b1 + b2) * d1 );  

                r = c1 % a12b12d1;
                
                x = parseInt( c1 / ((a1 - a2) * (b1 + b2) * d1) - d2 );

                this.setQuestion('Evaluate: ' + c1 + ' / (' + a1 + ' - ' + a2 + ') (' + b1 + ' + ' + b2 + ') ' + d1 + ' - ' + d2 );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_9',5.0109,'5.oa.a.1','(a)c(b)d',2);
*/

var i_5_oa_a_1__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_9';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*100)+50;
                var a2 = Math.floor(Math.random()*48)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*8)+2);
                var c2 = Math.floor((Math.random()*10)+1);
                
		var d1 = Math.floor((Math.random()*5)+10);
                var d2 = Math.floor((Math.random()*5)+1);

		var a12 = parseInt( (a1 - a2) );  

                r = a12 % c1;
                
                x = parseInt( (a1 - a2) / c1 + c2 * (b1 + b2) * d1 - d2 );

                this.setQuestion('Evaluate: ' + '(' + a1 + ' - ' + a2 + ') /' + c1 + ' + ' + c2 + '(' + b1 + ' + ' + b2 + ')' + d1 + ' - ' + d2 + ')');
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_8',5.0108,'5.oa.a.1','c(a)d(b)',2);
*/

var i_5_oa_a_1__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_8';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*8)+2;
                var a2 = Math.floor(Math.random()*8)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*10)+5);
                var c2 = Math.floor((Math.random()*4)+1);
                
		var d1 = Math.floor((Math.random()*5)+1);
                var d2 = Math.floor((Math.random()*5)+1);

                r = c1 % c2;
                
                x = parseInt( c1 - c2 * (a1 + a2) - d1 + d2 * (b1 + b2) + c1 / c2 );

                this.setQuestion('Evaluate: ' + c1 + ' - ' + c2 + ' (' + a1 + ' + ' + a2 + ') - ' +  d1 + ' + ' + d2 + ' (' + b1 + ' + ' + b2 + ') + ' + c1 + ' / ' + c2  );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_7',5.0107,'5.oa.a.1','c(a)(b)',2);
*/

var i_5_oa_a_1__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_7';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*8)+2;
                var a2 = Math.floor(Math.random()*8)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*5)+16);
                var c2 = Math.floor((Math.random()*5)+10);

                r = c1 % c2;

                x = parseInt( (a1 - a2) * (b1 + b2) + c1 / c2 );

                this.setQuestion('Evaluate:' + '(' + a1 + ' - ' + a2 + ')  (' + b1 + ' + ' + b2 + ') + ' + c1 + ' / ' + c2  );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description,active_code) values ('5.oa.a.1_6',5.0106,'5.oa.a.1','c(a)(b)',2);
*/

var i_5_oa_a_1__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_6';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*8)+2;
                var a2 = Math.floor(Math.random()*8)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*5)+16);
                var c2 = Math.floor((Math.random()*5)+10);

                var a12c1 = parseInt(  (a1 - a2) * c1 );
                var b12c2 = parseInt(  c2 * (b1 + b2) );
                r = a12c1 % b12c2;

                //x = parseInt( ((a1 - a2) * c1) / (c2 * (  b1 + b2 ))  );
                x = parseInt((a1 - a2) * c1/c2 * (b1 + b2));
                
                this.setQuestion('Evaluate: ' + '(' + a1 + ' - ' + a2 + ') ' + c1 + ' / ' + c2 + ' (' + b1 + ' + ' + b2 + ')' );
                this.setAnswer('' + x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_5',5.0105,'5.oa.a.1','c(a)(b)');
*/

var i_5_oa_a_1__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95,100,50,425,100);

        this.mType = '5.oa.a.1_5';

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*8)+2;
                var a2 = Math.floor(Math.random()*8)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var c1 = Math.floor((Math.random()*5)+16);
                var c2 = Math.floor((Math.random()*5)+10);

                var a12 = parseInt(  a1 + a2 );
                var b12 = parseInt(  b1 + b2 );
                r = a12 % b12;

                x = parseInt( c1 - c2 + (a1 + a2) / (  b1 + b2 )  );

                this.setQuestion('' + c1 + ' - ' + c2 + ' + ' + '(' + a1 + ' + ' + a2 + ') / (' + b1 + ' + ' + b2 + ') Evaluate' );
                this.setAnswer(x,0);
        }
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_4',5.0104,'5.oa.a.1','(a)(b)');
*/

var i_5_oa_a_1__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '5.oa.a.1_4';
        
	var a1 = Math.floor(Math.random()*8)+2;
        var a2 = Math.floor(Math.random()*8)+2;
        var ad = Math.floor((Math.random()*8)+2);
                
	var b1 = Math.floor((Math.random()*8)+3);
        var b2 = Math.floor((Math.random()*2)+1);
              	
	var n = parseInt(    (a1 + a2 ) * (b1 - b2)   );
	
	var fraction = new Fraction(n,ad);	

	var a1_f = new Fraction(a1,ad);	
	var a2_f = new Fraction(a2,ad);	

        this.setQuestion('' + '(' + a1_f.getString() + '+' + a2_f.getString() + ') (' + b1 + ' - ' + b2 + ') Evaluate. Do not simplify:' );
	this.setAnswer(fraction.getString(),0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_3',5.0103,'5.oa.a.1','b(a)c');
*/

var i_5_oa_a_1__3 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
	this.parent(sheet,300,50,175,95, 100,50,425,100,100,50,425,175);

        this.mType = '5.oa.a.1_3';

        var a1 = Math.floor((Math.random()*3)+1);
        var a2 = Math.floor((Math.random()*4)+1);
        var ad = Math.floor((Math.random()*3)+8);
       	
	var b1 = Math.floor(Math.random()*3)+2;
	var c1 = Math.floor(Math.random()*3)+2;

	var n = parseInt( b1 * (  a1 + a2 ) * c1  );
		
	var fraction = new Fraction(n,ad);	
	
	var a1_f = new Fraction(a1,ad);	
	var a2_f = new Fraction(a2,ad);	

	this.setAnswer(fraction.getString(),0);
        this.setQuestion('' + b1 + ' (' + a1_f.getString() + '+' + a2_f.getString() + ') ' + c1 + ' Evaluate. Do not simplify:');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_2',5.0102,'5.oa.a.1','(a)b');
*/

var i_5_oa_a_1__2 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
	this.parent(sheet,250,50,155,95,100,50,425,100,100,50,425,175);

        this.mType = '5.oa.a.1_2';

        var a1 = Math.floor((Math.random()*5)+10);
       	var a2 = Math.floor((Math.random()*5)+1);
       	var ad = Math.floor((Math.random()*3)+8);

       	var b1 = Math.floor(Math.random()*3)+2;
	var n = parseInt(  (  a1 - a2 ) * b1  );
	
	var a1d = new Fraction(a1,ad);	
	var a2d = new Fraction(a2,ad);	
	var answer = new Fraction(n,ad);	
		
	this.setAnswer(answer.getString(),0);
        this.setQuestion('' + b1 + '(' + a1d.getString() + ' - ' + a2d.getString() + ') Evaluate. Do not simplify:'  );
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_1',5.0101,'5.oa.a.1','b(a)');
insert into prerequisites (item_type_id, prerequisite_id) values ('5.oa.a.1_1','4.nf.b.3.a_1');
*/

var i_5_oa_a_1__1 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
	this.parent(sheet,350,50,200,95, 100,50,425,100, 100,50,425,175);

        this.mType = '5.oa.a.1_1';
	
        var a1 = Math.floor((Math.random()*3)+1);
        var a2 = Math.floor((Math.random()*4)+1);
        var ad = Math.floor((Math.random()*3)+8);

        var b1 = Math.floor(Math.random()*8)+2;
               	
	var n = parseInt(  b1 * (  a1 + a2 )   );

	var a1d = new Fraction(a1,ad);	
	var a2d = new Fraction(a2,ad);	
	var answer = new Fraction(n,ad);	
	
	this.setAnswer(answer.getString(),0);
        this.setQuestion('' +  b1 + '(' + a1d.getString() + ' + ' + a2d.getString() + ') Evaluate. Do not Simplify.');
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_52',5.010052,'5.oa.a.1','Write expression based off word description.');
*/
var i_5_oa_a_1__0_52 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_52';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = Math.floor((Math.random()*8)+2);
        this.b = Math.floor((Math.random()*8)+2);
        this.c = Math.floor((Math.random()*8)+2);

	this.d = parseInt(this.a + this.b + this.c);

	this.setQuestion(this.ns.mNameOne + ' studies for ' + this.d + ' minutes a day. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' studies ' + this.ns.mSubjectOne + ' for ' + this.a + ' minutes and ' + this.ns.mSubjectTwo + ' for ' + this.b + ' minutes. The rest of the time ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' studies ' + this.ns.mSubjectThree + '. Write a numerical expression using parenthesis and brackets to find the number of minutes ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' studies ' + this.ns.mSubjectThree + ' during a 5 day school week.');       
//[19-(3+9)]5
        this.setAnswer('[' + this.d + '-(' + this.a + '+' + this.b + ')]5',0);
        this.setAnswer('5[' + this.d + '-(' + this.a + '+' + this.b + ')]',1);

        this.setAnswer('[' + this.d + '-(' + this.b + '+' + this.a + ')]5',2);
        this.setAnswer('5[' + this.d + '-(' + this.b + '+' + this.a + ')]',3);
        
	this.setAnswer('[' + this.d + '-(' + this.a + '+' + this.b + ')]x5',4);
        this.setAnswer('5x[' + this.d + '-(' + this.a + '+' + this.b + ')]',5);

        this.setAnswer('[' + this.d + '-(' + this.b + '+' + this.a + ')]x5',6);
        this.setAnswer('5x[' + this.d + '-(' + this.b + '+' + this.a + ')]',7);
	
	this.setAnswer('[' + this.d + '-(' + this.a + '+' + this.b + ')]*5',8);
        this.setAnswer('5*[' + this.d + '-(' + this.a + '+' + this.b + ')]',9);

        this.setAnswer('[' + this.d + '-(' + this.b + '+' + this.a + ')]*5',10);
        this.setAnswer('5*[' + this.d + '-(' + this.b + '+' + this.a + ')]',11);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_51',5.010051,'5.oa.a.1','Write expression based off word description.');
*/
var i_5_oa_a_1__0_51 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_51';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = Math.floor((Math.random()*8)+2);
        this.b = Math.floor((Math.random()*8)+2);
        this.c = Math.floor((Math.random()*8)+2);

	this.setQuestion(this.ns.mNameOne + ' has a small fruit stand with ' + this.a + ' ' + this.ns.mFruitOne + ' and ' + this.b + ' ' + this.ns.mFruitTwo + '. ' + this.ns.mNameTwo + ' has a large fruit stand with ' + this.c + ' times as many ' + ' ' + this.ns.mFruitOne + ' and ' + this.ns.mFruitTwo + '. Write a numerical expression using parenthesis to show how many more pieces of fruit ' + this.ns.mNameTwo + ' has in ' + this.mNameMachine.getPronoun(this.ns.mNameTwo,0,1) + ' fruit stand.');

        this.setAnswer(this.c + '(' + this.a + '+' + this.b + ')',0);
        this.setAnswer(this.c + 'x(' + this.a + '+' + this.b + ')',1);
        this.setAnswer(this.c + '*(' + this.a + '+' + this.b + ')',2);
        this.setAnswer(this.c + '(' + this.b + '+' + this.a + ')',3);
        this.setAnswer(this.c + 'x(' + this.b + '+' + this.a + ')',4);
        this.setAnswer(this.c + '*(' + this.b + '+' + this.a + ')',5);
        
	this.setAnswer('(' + this.a + '+' + this.b + ')' + this.c,6);
	this.setAnswer('(' + this.a + '+' + this.b + ')x' + this.c,7);
	this.setAnswer('(' + this.a + '+' + this.b + ')*' + this.c,8);
	this.setAnswer('(' + this.b + '+' + this.a + ')' + this.c,9);
	this.setAnswer('(' + this.b + '+' + this.a + ')x' + this.c,10);
	this.setAnswer('(' + this.b + '+' + this.a + ')*' + this.c,11);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_50',5.010050,'5.oa.a.1','Write expression based off word description.');
*/

var i_5_oa_a_1__0_50 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_50';

        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();

        this.a = Math.floor((Math.random()*8)+2);
        this.b = Math.floor((Math.random()*8)+2);
        this.c = Math.floor((Math.random()*8)+2);
        this.d = parseInt( this.a + this.b + this.c);

        this.setQuestion(this.ns.mNameOne + ' played for ' + this.d + ' minutes. ' + this.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' minutes, ' + this.ns.mPlayedActivityTwo + ' for ' + this.b + ' minutes and the rest of the time ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' played ' + this.ns.mPlayedActivityThree + '. Write a numerical expression using parenthesis to find how many minutes ' + this.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' played ' + this.ns.mPlayedActivityThree + '.');

        this.setAnswer(this.d + '-(' + this.a + '+' + this.b + ')',0);
        this.setAnswer(this.d + '-(' + this.b + '+' + this.a + ')',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_45',5.010045,'5.oa.a.1','Braces.');
*/

var i_5_oa_a_1__0_45 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_45';
	
	this.setQuestion('When you need to group part of an expression containing parenthesis and brackets you should use what grouping symbol?'); 
        this.setAnswer('brace',0);
        this.setAnswer('braces',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_44',5.010044,'5.oa.a.1','Brackets.');
*/

var i_5_oa_a_1__0_44 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_44';
	
	this.setQuestion('When you need to group part of an expression containing parenthesis you should use what grouping symbol?'); 
        this.setAnswer('brackets',0);
        this.setAnswer('bracket',1);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_43',5.010043,'5.oa.a.1','Pemdas.');
*/

var i_5_oa_a_1__0_43 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_43';
	
	this.setQuestion('Name the order of operations. Use letters instead of names. For example use m for multiply.'); 
        this.setAnswer('pemdas',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_42',5.010042,'5.oa.a.1','Grouping symbols definition.');
*/

var i_5_oa_a_1__0_42 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_42';
	
	this.mChopWhiteSpace = false;

	this.setQuestion('Parenthesis, brackets and braces are examples of?'); 
        this.setAnswer('grouping symbols',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_41',5.010041,'5.oa.a.1','Evaluate defination');
*/

var i_5_oa_a_1__0_41 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_41';
	
	this.setQuestion('What is the word that means to find the value of an expression?'); 
        this.setAnswer('evaluate',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_40',5.010040,'5.oa.a.1','Numerical expression definition.');
*/

var i_5_oa_a_1__0_40 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_40';
	
	this.mChopWhiteSpace = false;

	this.setQuestion('What is the name for a mathematical phrase containing only numbers and one or more operation symbols?'); 
        this.setAnswer('numerical expression',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_39',5.010039,'5.oa.a.1','Expression definition.');
*/

var i_5_oa_a_1__0_39 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_39';
	
	this.setQuestion('What is the name for a mathematical phrase containing numbers, letters and one or more operation symbols?'); 
        this.setAnswer('expression',0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.a.1_0_38',5.010038,'5.oa.a.1','Equation definition.');
*/

var i_5_oa_a_1__0_38 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,375,50,220,75,150,50,525,100);

        this.mType = '5.oa.a.1_0_38';
	
	this.setQuestion('A written statement indicating the equality of two expressions. It consists of a sequence of symbols that is split into left and right sides joined by an equal sign.'); 
        this.setAnswer('equation',0);
}
});
