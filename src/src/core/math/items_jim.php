/*  5.oa.a.1 */

/* TYPE_DESCRIPTION: one set of paranthesis and a subtraction multiplication (a+b) + c */
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
