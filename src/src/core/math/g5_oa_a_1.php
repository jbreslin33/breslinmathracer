/*********
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
