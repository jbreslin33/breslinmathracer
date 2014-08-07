/*********
1 p
1: (a) = (7*2) = (6/2) = (34+9)
	2: b(a) = 7(3) = 8 + 6(5+8) = 13 - 8(15/3) 
	3: (a)b = (14-3)3 + 4 = (7 - 3) - 5 / 5 
	4: b(a)c = 10-3(14-3)3 + 4 = 3+7(7 - 3) - 5 / 5 



2 p
5: (a)(b) 
	6: c(a)(b) 
	7: (a)c(b) 
	8: (a)(b)c 
	
	9: c(a)d(b) 
	10: (a)c(b)d 
	11: c(a)(b)d 

	12: c(a)d(b)e
2p INNERS
//13: ((a)) 
	//14: (b(a)) 
	//15: (b(a)c) 
	13: ((a)b)c 
	14: (c(a)b)d 
	15: c((a)b)d
	16: c(b(a)) 
	17: d(b(a)c) 
	18: d(b(a)c)e 

3 inners

   	19:  e(d(b(a)c)) 
   	20:  (d(b(a)c))e 

   	21:  e((b(a)c)d) 
   	22:  ((b(a)c)d)e 

   	23:  f(d(b(a)c)e)g

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
/* TYPE_DESCRIPTION:  */
   	//21:  e((b(a)c)d) 
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
        var r = 1;
	while (x < 1 || r != 0)
        {
   		//21:  e((b(a)c)d) 
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*10)+200);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*8)+2);
	
                var e1 = Math.floor(Math.random()*10)+5;
                var e2 = Math.floor(Math.random()*4)+1;

                x = parseInt(           e1 - e2 * (  ( b1 * ( a1 - a2) / c1 )    + d1 )               );
		var b1a12 = parseInt( b1 * ( a1 - a2) );

		r = b1a12 % c1; 

                this.setQuestion(  '(' + d1 + ' + ' + '(' + b1 + ' - (' + a1 + ' + ' + a2 + ')' + c1 + '))' + e1          );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
var i_5_oa_a_1__20 = new Class(
{
   	//20:  (d(b(a)c))e 
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_20';
        this.mQuestionLabel.setSize(325,50);
        this.mQuestionLabel.setPosition(200,95);
	this.mAnswerTextBox.setPosition(525,100);

        var x = 0;
	while (x < 1)
        {
   		//20:  (d(b(a)c))e 
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

/* TYPE_DESCRIPTION:  */
   	//19:  e(d(b(a)c)) 
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
   		//19:  e(d(b(a)c)) 
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*250)+50);
	
		var e1 = Math.floor((Math.random()*100)+900);

                x = parseInt(    e1 - ( d1 + ( b1 + (a1 - a2) * c1 ))      );

                this.setQuestion(  e1 + ' - ' + '(' + d1 + ' + (' + b1 + ' + (' + a1 + ' - ' + a2 + ')' + c1 + '))'     );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
	//18: d(b(a)c)e 
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
	
		var e1 = Math.floor((Math.random()*10)+1);

                x = parseInt(   d1 - (b1 * (a1 - a2) + c1) - e1   );

                this.setQuestion( d1 + ' - ' + '(' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ') - ' + e1    );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
	//17: d(b(a)c) 
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
		//17: d(b(a)c) 
                var a1 = Math.floor(Math.random()*5)+6;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
		var d1 = Math.floor((Math.random()*50)+50);

                x = parseInt(   d1 - (b1 * (a1 - a2) + c1)   );

                this.setQuestion( d1 + ' - ' + '(' + b1 + '(' + a1 + ' - ' + a2 + ') + ' + c1 + ')'   );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
	//16: c(b(a)) 
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
       	var r = 1; 
	while (x < 1 || r != 0)
        {
		//16: c(b(a)) 
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

/* TYPE_DESCRIPTION:  */
	//15: c((a)b)d
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
        
	while (x < 1)
        {
		//15: c((a)b)d
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*100)+900);
                
		var d1 = Math.floor((Math.random()*8)+2);

                x = parseInt(   c1 - ( (a1 + a2) * b1) - d1     );

                this.setQuestion( '(' + c1 + ' - ' + '((' + a1 + ' + ' + a2 + ') ' + b1 + ') - ' + d1 );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
//	14: (c(a)b)d 
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
        var r = 1;
        
	while (x < 1 || r != 0)
        {
		//14: (c(a)b)d 
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

/* TYPE_DESCRIPTION:  */
//this might be marked as huge multiplication...in db
	//13: ((a)b)c 
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
        
	while (x < 1)
        {
		//13: ((a)b)c 
                var a1 = Math.floor(Math.random()*5)+1;
                var a2 = Math.floor(Math.random()*5)+1;

                var b1 = Math.floor((Math.random()*8)+2);

                var c1 = Math.floor((Math.random()*8)+2);
                
                x = parseInt( ((a1 + a2) * b1) * c1   );

                this.setQuestion( '((' + a1 + ' + ' + a2 + ') ' + b1 + ') ' + c1 );
                this.setAnswer(x,0);
        }
}
});

/* TYPE_DESCRIPTION:  */
	//12: c(a)d(b)e
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
        var r = 1;

        while (x < 1 || r != 0)
        {
		//12: c(a)d(b)e
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

/* TYPE_DESCRIPTION: c(a)d(b) */
var i_5_oa_a_1__11 = new Class(
	//11: c(a)(b)d 
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
		//11: c(a)(b)d 
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
/* TYPE_DESCRIPTION: c(a)d(b) */
	//10: (a)c(b)d 
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
var i_5_oa_a_1__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_8';
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
var i_5_oa_a_1__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet);

        this.mType = '5.oa.a.1_3';
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

/* TYPE_DESCRIPTION: (a) */
var i_5_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_1';
		
                var a1 = Math.floor(Math.random()*10);
                var a2 = Math.floor(Math.random()*10);
               	var x = parseInt(a1 * a2);

                this.setQuestion( '(' + a1 + ' x ' + a2 + ')'  );
                this.setAnswer(x,0);
        }
});
