/*  5.oa.a.2 */

/* TYPE_DESCRIPTION: Match word problem to equation sentence. */
var i_5_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_3';
		this.mNameMachine = new NameMachine(); 
		this.mFruit = this.mNameMachine.getFruit(); 
		this.mSchool = this.mNameMachine.getSchool();
		this.mGrade = this.mNameMachine.getGrade('1st','8th');

                rNum = Math.floor(Math.random()*2);
		rNum = 0;
                if (rNum == 0)
                {
			this.a = '';
			this.b = '';
			this.c = '';

			this.x = Math.floor((Math.random()*5)+18);
			this.y = Math.floor((Math.random()*5)+18);
			this.z = Math.floor((Math.random()*4)+2);

                        this.setQuestion('At ' + this.mSchool + ', there are two ' + this.mGrade + ' grade classes. One has ' + this.x + ' students and the other has ' + this.y + ' students. Mr. Roache wants to give each ' + this.mGrade + ' grader ' + this.z + ' ' + this.mFruit + '. What matches?');
                        this.setAnswer('5(6/2)',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('5/2x6');
                        this.mButtonC.setAnswer('6x2/5');
                }
                if (rNum == 1)
                {
                        this.setQuestion('Which matches this? Divide 45 by 9 then subtract 3.');
                        this.setAnswer('(45/9)/2',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('9x45/2');
                        this.mButtonC.setAnswer('(9x2/45');
                }

                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Match number sentence to equation  */
var i_5_oa_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_2';

                rNum = Math.floor(Math.random()*2);
                if (rNum == 0)
                {
                        this.setQuestion('Which equation matches this?  Divide 6 by 2 then multiply by 5.');
                        this.setAnswer('5(6/2)',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('5/2x6');
                        this.mButtonC.setAnswer('6x2/5');
                }
                if (rNum == 1)
                {
                        this.setQuestion('Which matches this? Divide 45 by 9 then subtract 3.');
                        this.setAnswer('(45/9)/2',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('9x45/2');
                        this.mButtonC.setAnswer('(9x2/45');
                }

                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Match equations to number sentences  */
var i_5_oa_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_1';
                
		rNum = Math.floor(Math.random()*2);
		rNum = 1;

		if (rNum == 0)
		{
                	this.setQuestion('Which matches this?  5(6/2)');
                	this.setAnswer('Divide 6 by 2 then multiply by 5.',0);

                	this.mButtonA.setAnswer(this.getAnswer());
                	this.mButtonB.setAnswer('Add 6 and 2 then multiply by 5');
                	this.mButtonC.setAnswer('Divide 5 by 6 then multiply by 2');
		}
                if (rNum == 1)
                {
                        this.setQuestion('Which matches this?  (45/9)-3');
                        this.setAnswer('Divide 45 by 9 then subtract 3.',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('Add 45 and 9 then subtract 3');
                        this.mButtonC.setAnswer('Subtract 3 then Divide 45 by 9');
                }

                this.shuffle(10);
        }
});


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
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.1_1';

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

                this.setQuestion( '(' + x + ' + ' + y + ') + ' + z + ')' );
                this.setAnswer(c,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});
