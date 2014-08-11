/*********
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
	1: b(a)  //+ 
	2: (a)b  
	3: b(a)c  
2 p
	4: (a)(b) //mix 
	5: c(a)(b) 
	6: (a)c(b)   
	7: (a)(b)c //x 
	
	8: c(a)d(b) 
	9: (a)c(b)d   
	10: c(a)(b)d  //+ 

	11: c(a)d(b)e 
2p INNERS
	12: [(a)b]c   
	13: (c(a)b)d //mix 
	14: c[(a)b]d
	15: c[b(a)]   
	16: d[b(a)c] //x 
	17: d(b(a)c)e  
3 inners
   	18:  e{d[b(a)c]} 
   	19:  (d(b(a)c))e //+ 
   	20:  e{[(b(a)c]d}  
   	21:  ((b(a)c)d)e   
	22:  f{d[b(a)c]e}g  //mix 

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
/* TYPE_DESCRIPTION:   f(d(b(a)c)e)g */
var i_5_oa_a_1__22 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_22';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion(              f1 + '{' + d1 + '[' + b1 + ' - ' + b2 + '(' + a1 + ' - ' + a2 + ')' + c1 + ']' + e1 + '}' + g1          );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION:  ((b(a)c)d)e  */
var i_5_oa_a_1__21 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_21';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion(   '((' + b1 + '(' + a1 + ' + ' + a2 + ')' + c1 + ') - ' + d1 + ') + ' + e1 + ' - ' + e2          );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION:    e((b(a)c)d)  */
var i_5_oa_a_1__20 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_20';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion(   e1 + '{[' + b1 + '(' + a1 + ' - ' + a2 + ') /' + c1 + ']' + d1 + '}'       );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:    (d(b(a)c))e  */
var i_5_oa_a_1__19 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_19';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion(  '(' + d1 + ' + ' + '(' + b1 + ' - (' + a1 + ' + ' + a2 + ')' + c1 + '))' + e1          );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:   e(d(b(a)c))  */
var i_5_oa_a_1__18 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_18';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion(  e1 + ' - ' + '{' + d1 + ' + [' + b1 + ' + (' + a1 + ' - ' + a2 + ')' + c1 + ']}'     );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  d(b(a)c)e  */
var i_5_oa_a_1__17 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_17';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( d1 + ' - ' + '(' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ') - ' + e1    );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:   d(b(a)c) */
var i_5_oa_a_1__16 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_16';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

        var x = 0;
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+6;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*50)+50);

                x = parseInt(   d1 - (b1 * (a1 - a2) + c1)   );

                this.setQuestion( d1 + ' - ' + '[' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ']'   );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  c(b(a)) */
var i_5_oa_a_1__15 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_15';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( c1 + '(' + b1 + ' / (' + a1 + '-' + a2 + '))' );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  c((a)b)d */
var i_5_oa_a_1__14 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_14';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

        var x = 0;
        
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*100)+900);
                
		var d1 = Math.floor((Math.random()*8)+2);

                x = parseInt(   c1 - ( (a1 + a2) * b1) - d1     );

                this.setQuestion( c1 + ' - ' + '[(' + a1 + ' + ' + a2 + ') ' + b1 + '] - ' + d1 );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  (c(a)b)d  */
var i_5_oa_a_1__13 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_13';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( '(' + c1 + ' - ' + '(' + a1 + ' + ' + a2 + ') + ' + b1 + ' / ' + d1 + ')'  );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  ((a)b)c  */
//this might be marked as huge multiplication...in db
var i_5_oa_a_1__12 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_12';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

        var x = 0;
        
	while (x < 1)
        {
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
                x = parseInt( ((a1 + a2) * b1) * c1   );

                this.setQuestion( '[(' + a1 + ' + ' + a2 + ') ' + b1 + '] ' + c1 );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: c(a)d(b)e  */
//this might be marked as huge multiplication...in db
var i_5_oa_a_1__11 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_11';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( c1 + ' (' + a1 + ' - ' + a2 + ') ' + d1 + ' (' + b1 + ' + ' + b2 + ') / ' + e1 );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: c(a)(b)d */
var i_5_oa_a_1__10 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_10';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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
                var d2 = Math.floor((Math.random()*5)+1);

		var a12b12d1 = parseInt( (a1 - a2) * (b1 + b2) * d1 );  

                r = c1 % a12b12d1;
                
                x = parseInt( c1 / ((a1 - a2) * (b1 + b2) * d1) - d2 );

                this.setQuestion( c1 + ' / (' + a1 + ' - ' + a2 + ') (' + b1 + ' + ' + b2 + ') ' + d1 + ' - ' + d2 );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION: (a)c(b)d */

var i_5_oa_a_1__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_9';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( '(' + a1 + ' - ' + a2 + ') /' + c1 + ' + ' + c2 + '(' + b1 + ' + ' + b2 + ')' + d1 + ' - ' + d2 + ')');
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: c(a)d(b) */
var i_5_oa_a_1__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_8';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

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

                this.setQuestion( c1 + ' - ' + c2 + ' (' + a1 + ' + ' + a2 + ') - ' +  d1 + ' + ' + d2 + ' (' + b1 + ' + ' + b2 + ') + ' + c1 + ' / ' + c2  );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: c(a)(b) */
var i_5_oa_a_1__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_7';
        this.mQuestionLabel.setSize(225,50);
        this.mQuestionLabel.setPosition(250,95);

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

                this.setQuestion( '(' + a1 + ' - ' + a2 + ')  (' + b1 + ' + ' + b2 + ') + ' + c1 + ' / ' + c2  );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION: c(a)(b) */
var i_5_oa_a_1__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_6';
        this.mQuestionLabel.setSize(225,50);
        this.mQuestionLabel.setPosition(250,95);

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

                x = parseInt( ((a1 - a2) * c1) / (c2 * (  b1 + b2 ))  );

                this.setQuestion( '(' + a1 + ' - ' + a2 + ') ' + c1 + ' / ' + c2 + ' (' + b1 + ' + ' + b2 + ')' );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION: c(a)(b) */
var i_5_oa_a_1__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_5';
        this.mQuestionLabel.setSize(225,50);
        this.mQuestionLabel.setPosition(250,95);

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

                this.setQuestion( c1 + ' - ' + c2 + ' + ' + '(' + a1 + ' + ' + a2 + ') / (' + b1 + ' + ' + b2 + ')' );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION: (a)(b) */
var i_5_oa_a_1__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_4';
        this.mQuestionLabel.setSize(225,50);
        this.mQuestionLabel.setPosition(250,95);

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var a1 = Math.floor(Math.random()*48)+2;
                var a2 = Math.floor(Math.random()*48)+2;

                var b1 = Math.floor((Math.random()*5)+1);
                var b2 = Math.floor((Math.random()*5)+1);

                var a12 = parseInt(  a1 + a2 );
                var b12 = parseInt(  b1 - b2 );
                r = a12 % b12;

                x = parseInt( (a1 + a2) / (  b1 - b2 )  );

                this.setQuestion( '(' + a1 + ' + ' + a2 + ') / (' + b1 + ' - ' + b2 + ')' );
                this.setAnswer(x,0);
        }
}
});
/* TYPE_DESCRIPTION: b(a)c */
var i_5_oa_a_1__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_3';
        this.mQuestionLabel.setSize(225,50);
        this.mQuestionLabel.setPosition(250,95);

        var x = 0;
        var r = 1;

        while (x < 1 || r != 0)
        {
                var c1 = Math.floor(Math.random()*5)+15;
                var c2 = Math.floor(Math.random()*3)+2;

                var b1 = Math.floor(Math.random()*3)+2;
                var b2 = Math.floor(Math.random()*5)+15;

                var a1 = Math.floor((Math.random()*40)+10);
                var a2 = Math.floor((Math.random()*20)+10);

                var a12c2 = parseInt(c2 * (a1 + a2) );
                var b1 = parseInt(b1);
                r = a12c2 % b1;

                x = parseInt( c1 - c2 * (  a1 + a2 ) / b1 + b2 );

                this.setQuestion(c1 + ' - ' + c2 + ' (' + a1 + ' + ' + a2 + ') / ' + b1 + ' + ' +  b2);
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: (a)b */
var i_5_oa_a_1__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_2';
        this.mQuestionLabel.setSize(200,50);
        this.mQuestionLabel.setPosition(300,95);

        var x = 0;
	var r = 1;

        while (x < 1 || r != 0)
        {
                var b1 = Math.floor(Math.random()*3)+2;
                var b2 = Math.floor(Math.random()*5)+15;

                var a1 = Math.floor((Math.random()*40)+10);
                var a2 = Math.floor((Math.random()*20)+10);

		var a3 = parseInt(a1 + a2);
		r = a3 % b1;  

                x = parseInt( (  a1 + a2 ) / b1 + b2 );

                this.setQuestion('(' + a1 + ' + ' + a2 + ') / ' + b1 + ' + ' +  b2);
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION: b(a) */
var i_5_oa_a_1__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet);

        this.mType = '5.oa.a.1_1';
 	this.mQuestionLabel.setSize(200,50);
 	this.mQuestionLabel.setPosition(300,95);
 
	var x = 0;	
	
	while (x < 1)
	{	
               	var b1 = Math.floor(Math.random()*100)+2000;
                var b2 = Math.floor(Math.random()*10)+1;
	
                var a1 = Math.floor((Math.random()*8)+2);
                var a2 = Math.floor((Math.random()*8)+2);
               	x = parseInt(  b1 - b2 * (  a1 + a2 )  );

                this.setQuestion(b1 + ' - ' +  b2 + '(' + a1 + ' + ' + a2 + ')'  );
                this.setAnswer(x,0);
        }
}
});
