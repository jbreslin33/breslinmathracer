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
: (a) = (7*2) = (6/2) = (34+9)
	: b(a) = 7(3) = 8 + 6(5+8) = 13 - 8(15/3) 
	: (a)b = (14-3)3 + 4 = (7 - 3) - 5 / 5 



2 p
: (a)(b) 
	: c(a)(b) 
	: (a)c(b) 
	: (a)(b)c 
	
	: c(a)d(b) 
	: (a)c(b)d 
	: c(a)(b)d 

	: c(a)d(b)e




********/
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
