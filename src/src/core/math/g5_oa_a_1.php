/*********
TYPE_DESCRIPTION: x - (x+y) 
TYPE_DESCRIPTION: (x+y) - z 
TYPE_DESCRIPTION: x/(y+z) 
TYPE_DESCRIPTION: (y+z)x 
TYPE_DESCRIPTION: x(y+z) 
TYPE_DESCRIPTION: (w+x) + (y+z)
TYPE_DESCRIPTION: x + (y+z) 
TYPE_DESCRIPTION: (x+y) + z 

this does not need be multiple choice..

that is where it stands but....
I would like to do this...
fist do every combination of operation within parenthesis AND another single operation
so..
(x+y) + z
(x+y) - z
(x+y)   z
(x+y) / z

then flip it 
z + (x+y)
z - (x+y)
z   (x+y)
z / (x+y)

that would give us 8 item types 

then we need to do the 4 operations inside the parens that would give us 32 itemtypes  

then we would do the same with parenthesis on both sides of operation 
so now my new thought based on email:
here are the 3 types
(x)
[x]
{x}

((x))
{(x)}
[{(x)}]

1 p
: (a)
	: (a)b 
	: b(a)

2 p
: (a)(b) 
	: c(a)(b) 
		: (c(a))(b) 
		: c((a)(b)) 
	: (a)c(b) 
		: ((a)c)(b) 
		: (a)(c(b)) 
	: (a)(b)c 
		: ((a)(b))c 
		: (a)((b)c) 



: (a)(b)c 
: ((ab))c

: (a)((b)c) 
: (a)(((b)c)(d)) 
: a((b(c)d)e) 


: (a/b) + (cd) 

********/


/*  5.oa.a.1 */

/* TYPE_DESCRIPTION: x - (x+y) */
var i_5_oa_a_1__8 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_8';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt(x - ( y + z));

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( x + ' - (' + y + ' + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});


/* TYPE_DESCRIPTION: (x+y) - z */
var i_5_oa_a_1__7 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_7';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c || c < 0)
                {
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt((x + y) - z);

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( '(' + x + ' + ' + y + ') - ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: x/(y+z) */
var i_5_oa_a_1__6 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_6';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c || c < 0 || y + z > 10 )
                {
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
			
			missingFactor = Math.floor(Math.random()*10); 
			x = missingFactor * (y+z);

                        c = parseInt( x / (y + z ));

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( x + '/(' + y + ' + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: (y+z)x */
var i_5_oa_a_1__5 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_5';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c || x + y > 10)
                {
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt( (x + y ) * z);

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( '(' + x + ' + ' + y + ')' + z  );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});



/* TYPE_DESCRIPTION: x(y+z) */
var i_5_oa_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_4';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c || y + z > 10)
                {
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt( x * (y + z ));

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( x + '(' + y + ' + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});


/* TYPE_DESCRIPTION: (w+x) + (y+z) */
var i_5_oa_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_3';

                var a = '';
                var b = '';
                var c = '';

                var w = 0;
                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c)
                {
                        w = Math.floor(Math.random()*10);
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt( (w + x) + (y + z ));

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                this.setQuestion( '(' + w + ' + ' + x + ') + (' + y + ' + ' + z + ')' );
                //this.setQuestion( x + ' + (' + y + ' + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: x + (y+z) */
var i_5_oa_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_2';

                var a = '';
                var b = '';
                var c = '';

                var x = 0;
                var y = 0;
                var z = 0;

                while (a == b || a == c || b == c)
                {
                        x = Math.floor(Math.random()*10);
                        y = Math.floor(Math.random()*10);
                        z = Math.floor(Math.random()*10);
                        c = parseInt((x + y) + z);

                        a = Math.floor((Math.random()*5)+parseInt(c-3));
                        b = Math.floor((Math.random()*5)+parseInt(c-3));
                }

                //this.setQuestion( '(' + x + ' + ' + y + ') + ' + z + ')' );
                this.setQuestion( x + ' + (' + y + ' + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: (x+y) + z */
var i_5_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_1';

		var c = 0;
		var x = 0;
		var y = 0;
		var z = 0;

                x = Math.floor(Math.random()*10);
                y = Math.floor(Math.random()*10);
                z = Math.floor(Math.random()*10);
                c = parseInt((x + y) + z);

                this.setQuestion( '(' + x + ' + ' + y + ') + ' + z + ')' );
                this.setAnswer(c,0);
        }
});
