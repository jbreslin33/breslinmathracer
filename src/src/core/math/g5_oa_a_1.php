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
13: ((a)) 
	14: (b(a)) 
	15: (b(a)c) 
	16: d(b(a)c) 
	17: d(b(a)c)e 



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

                var c1 = Math.floor((Math.random()*10)+1);
                var c2 = Math.floor((Math.random()*10)+1);
                
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
