/* TYPE_DESCRIPTION: What comes next after a number from 0-99 that does not end in 0 or 9. */
var i_k_cc_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_1';

		var x = Math.floor(Math.random()*100);
		var a = parseInt(x+1);
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: What comes next after a number ending in 9 from 0-99. */
var i_k_cc_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_2';

                var x = Math.floor((Math.random()*10)+1);
		x = parseInt(x * 10);
		x = parseInt(x-1);
		var a = parseInt(x+1);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: What comes next after a number ending in 0 from 0-99. */
var i_k_cc_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_3';

                var x = Math.floor((Math.random()*9)+1);
                x = parseInt(x * 10);
                var a = parseInt(x+1);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: What comes next when counting by ten from numbers that end in zero up to 100. */
var i_k_cc_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.cc.a.1_4';

                var x = Math.floor((Math.random()*9)+1);
                x = parseInt(x * 10);
                var a = parseInt(x+10);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('When couning by tens what comes after ' + x + '?');
                this.setAnswer(parseInt(a),0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});






/* TYPE_DESCRIPTION: This type will ask what 2 numbers come next after a number from 0-99. */
var i_k_cc_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_1';

                var x = Math.floor(Math.random()*98);
                var a = parseInt(x+1);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                a = a + ',' + parseInt(a+1);
                b = b + ',' + parseInt(b+1);
                c = c + ',' + parseInt(c+1);

                this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: This type will ask what 3 numbers come next after a number from 0-99. */
var i_k_cc_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_2';

                var x = Math.floor(Math.random()*98);
		var a = parseInt(x+1);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                a = a + ',' + parseInt(a+1) + ',' + parseInt(a+2);
                b = b + ',' + parseInt(b+1) + ',' + parseInt(b+2);
                c = c + ',' + parseInt(c+1) + ',' + parseInt(c+2);
                
		this.setQuestion('What comes after ' + x + '?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/ *TYPE_DESCRIPTION: This type will ask what the missing number is. e.g. What is the missing number? 1,2,3,_,5,6,7. This will be done up to 100. */
var i_k_cc_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.2_3';

                var a = Math.floor(Math.random()*98);
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('What is the missing number? ' + parseInt(a-3) + ',' + parseInt(a-2) + ',' + parseInt(a-1) + ',_,' + parseInt(a+1) + ',' + parseInt(a+2) + ',' + parseInt(a+3));

                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Count the objects up to 20. */
var i_k_cc_a_3__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.3_1';

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

		var a = Math.floor(Math.random()*21);
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('How many?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 0;
		var y = 300;

		var answer = this.getAnswer(); 
		answer = parseInt(answer);	

		for (var i = 0; i < answer; i++)
		{
			if (i == 10) 
			{
				x = 0;
				y = 375;
			}
                	x = parseInt(x + 70);	
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
		}
	}
});

/* TYPE_DESCRIPTION: Count the objects up to 20. Make answer zero. */
var i_k_cc_a_3__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.3_2';

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                var a = 0;
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('How many?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});
/ * ITEMS: */

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 11-15 */
var i_k_cc_a_3__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.3_3';

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                var a = Math.floor(Math.random()*5)+11;
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('How many?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },

        createQuestionShapes: function()
        {      
                var x = 0;
                var y = 300;

                var answer = this.getAnswer();
                answer = parseInt(answer);     

                for (var i = 0; i < answer; i++)
                {
                        if (i == 10)
                        {
                                x = 0;
                                y = 375;
                        }
                        x = parseInt(x + 70);  
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
                }
        }
});

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 16-20 */

var i_k_cc_a_3__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.a.3_4';

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                var a = Math.floor(Math.random()*5)+16;
                var b = 0;
                var c = 0;

                while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
                {
                        b = Math.floor(Math.random()*7)-3;
                        b = parseInt(a+b);
                        c = Math.floor(Math.random()*7)-3;
                        c = parseInt(a+c);
                }

                this.setQuestion('How many?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },

        createQuestionShapes: function()
        {
                var x = 0;
                var y = 300;

                var answer = this.getAnswer();
                answer = parseInt(answer);

                for (var i = 0; i < answer; i++)
                {
                        if (i == 10)
                        {
                                x = 0;
                                y = 375;
                        }
                        x = parseInt(x + 70); 
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
                }
        }
});

var i_k_cc_b_5__4 = new Class(
{
Extends: ThreeButtonItem,
initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = 'k.cc.b.5_4';

        this.mNameMachine = new NameMachine();
        this.mPictureLink = this.mNameMachine.getPictureLink();
 
	//BUTTON A
       	this.mButtonA.setPosition(100,100);
        this.mButtonB.setPosition(380,100);
        this.mButtonC.setPosition(675,100);

	var a = Math.floor(Math.random()*11);
	var b = 0;
	var c = 0; 

	while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
	{
		b = Math.floor(Math.random()*7)-3;
		b = parseInt(a+b);
		c = Math.floor(Math.random()*7)-3;
		c = parseInt(a+c);
	}

	this.setQuestion('How many?');
        this.setAnswer(a,0);

        this.mButtonA.setAnswer(a);
        this.mButtonB.setAnswer(b);
        this.mButtonC.setAnswer(c);
        this.shuffle(10);
},
    	
createQuestionShapes: function()
{	
	var answer = this.getAnswer(); 
	answer = parseInt(answer);	
	
	xArray = new Array();
	yArray = new Array();

	xArray.push(400);
	yArray.push(200);

	xArray.push(150);
	yArray.push(200);
	
	xArray.push(350);
	yArray.push(150);

	xArray.push(200);
	yArray.push(250);
	
	xArray.push(300);
	yArray.push(300);
	
	xArray.push(250);
	yArray.push(300);
	
	xArray.push(50);
	yArray.push(200);
	
	xArray.push(300);
	yArray.push(150);
	
	xArray.push(450);
	yArray.push(250);
	
	xArray.push(550);
	yArray.push(350);
	
	xArray.push(500);
	yArray.push(100);

	for (var i = 0; i < answer; i++)
	{
		this.addQuestionShape(new Shape(50,50,parseInt(xArray[i]),parseInt(yArray[i]),this.mSheet.mGame,this.mPictureLink,"",""));
	}
}
});

var i_k_cc_b_5__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.b.5_3';
   
                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();
 
		//BUTTON A
                this.mButtonA.setPosition(100,100);
                this.mButtonB.setPosition(380,100);
                this.mButtonC.setPosition(675,100);

		var a = Math.floor(Math.random()*2);
		if (a == 0)
		{
			a = 8;
		}
		if (a == 1)
		{
			a = 12;
		}
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('How many');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 400;
		var y = 260;

		var answer = this.getAnswer(); 
		answer = parseInt(answer);	

		for (var i = 0; i < answer; i++)
		{
			if (answer == 8) 
			{
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+37),parseInt(y-37),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+37),parseInt(y+37),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-37),parseInt(y+37),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-37),parseInt(y-37),this.mSheet.mGame,this.mPictureLink,"",""));
			}
			if (answer == 12) 
			{
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-85),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+80),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+80),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+85),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+85),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-80),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-80),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-85),this.mSheet.mGame,this.mPictureLink,"",""));
			}
		}
	}
});

var i_k_cc_b_5__2 = new Class(
{
Extends: ThreeButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 'k.cc.b.5_2';
  
        this.mNameMachine = new NameMachine();
        this.mPictureLink = this.mNameMachine.getPictureLink();
 
	//BUTTON A
        this.mButtonA.setPosition(100,100);
        this.mButtonB.setPosition(380,100);
        this.mButtonC.setPosition(675,100);

	var a = Math.floor(Math.random()*21);
	var b = 0;
	var c = 0; 

	while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
	{
		b = Math.floor(Math.random()*7)-3;
		b = parseInt(a+b);
		c = Math.floor(Math.random()*7)-3;
		c = parseInt(a+c);
	}

	this.setQuestion('How many?');
        this.setAnswer(a,0);

       	this.mButtonA.setAnswer(a);
        this.mButtonB.setAnswer(b);
        this.mButtonC.setAnswer(c);
	this.shuffle(10);
},
    	
createQuestionShapes: function()
{	
	var x = 35;
	var y = 260;

	var answer = this.getAnswer(); 
	answer = parseInt(answer);	

	for (var i = 0; i < answer; i++)
	{
		this.addQuestionShape(new Shape(45,45,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
		x = x + 37;
	}
}
});

/* TYPE_DESCRIPTION: Count the objects up to 20 in a rectangular array. */

var i_k_cc_b_5__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.b.5_1';
   
                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

		//BUTTON A
                this.mButtonA.setPosition(100,100);
                this.mButtonB.setPosition(380,100);
                this.mButtonC.setPosition(675,100);

		var a = Math.floor(Math.random()*3);
		if (a == 0)
		{
			a = 4;
		}
		if (a == 1)
		{
			a = 8;
		}
		if (a == 2)
		{
			a = 20;
		}
		var b = 0;
		var c = 0; 

		while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
		{
			b = Math.floor(Math.random()*7)-3;
			b = parseInt(a+b);
			c = Math.floor(Math.random()*7)-3;
			c = parseInt(a+c);
		}

		this.setQuestion('How many?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 400;
		var y = 260;

		var answer = this.getAnswer(); 
		answer = parseInt(answer);	

		for (var i = 0; i < answer; i++)
		{
			if (answer == 4)
			{
this.addQuestionShape(new Shape(50,50,x,parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),y,this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,x,parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),y,this.mSheet.mGame,this.mPictureLink,"",""));
			}	
			if (answer == 8) 
			{
this.addQuestionShape(new Shape(50,50,x,parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),y,this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,x,parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),y,this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
			}
			if (answer == 20) 
			{
this.addQuestionShape(new Shape(50,50,x,parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),y,this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y+100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y+50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y-50),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-100),this.mSheet.mGame,this.mPictureLink,"",""));
			}
		}
	}
});

var i_k_cc_c_6__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.6_1';

	        this.mNameMachine = new NameMachine();
        	this.mPictureLinkLeft = this.mNameMachine.getPictureLink();
        	this.mPictureLinkRight = this.mNameMachine.getPictureLink();
 
		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*10+1);
		this.b = Math.floor(Math.random()*10+1);

		this.setQuestion('Compare.');
		if (this.a > this.b)
		{
                	this.setAnswer('Is greater than.',0);
		}
		if (this.a == this.b)
		{
                	this.setAnswer('Is equal to.',0);
 		}
		if (this.a < this.b)
		{
                	this.setAnswer('Is less than.',0);
		}

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var x = 40;
		var y = 100;
		for (var i = 0; i < this.a; i++)
		{
			if (i == 5) 
			{
				x = 40;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkLeft,"",""));
			x = x + 50;
		}
		var x = 500;
		var y = 100;
		for (var i = 0; i < this.b; i++)
		{
			if (i == 5) 
			{
				x = 500;
				var y = 150;
			}
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLinkRight,"",""));
			x = x + 50;
		}
	}
});

var i_k_cc_c_7__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 'k.cc.c.7_1';

		//BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

		this.a = Math.floor(Math.random()*10+1);
		this.b = Math.floor(Math.random()*10+1);

		this.setQuestion('Compare.');
		if (this.a > this.b)
		{
                	this.setAnswer('Is greater than.',0);
		}
		if (this.a == this.b)
		{
                	this.setAnswer('Is equal to.',0);
 		}
		if (this.a < this.b)
		{
                	this.setAnswer('Is less than.',0);
		}

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },
    	
	createQuestionShapes: function()
	{	
		var shapeA = new Shape(50,50,240,200,this.mSheet.mGame,"","","");
		var shapeB = new Shape(50,50,530,200,this.mSheet.mGame,"","","");
	
		shapeA.setText(this.a);
		shapeB.setText(this.b);

		this.addQuestionShape(shapeA);	
		this.addQuestionShape(shapeB);	
	}
});

/* TYPE_DESCRIPTION: Add within 5 using pictures and symbols. */
var i_k_oa_a_1__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_1';
             
		this.mNameMachine = new NameMachine();
		this.mPictureLink = this.mNameMachine.getPictureLink();
 
		this.a = 0;
		this.b = 0;
		this.c = -1;

		this.x = 0;	 
		this.y = 0;	 

		this.sign = Math.floor(Math.random()*2);

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5)
		{
			//variables
                	this.x = Math.floor((Math.random()*5)+1);
                	this.y = Math.floor((Math.random()*5)+1);
			this.c = this.x + this.y;  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion('Solve.');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        },
        
	createQuestionShapes: function()
        {
                var x = 0;
                var y = 100;
		var space = 50;

		var i = 0;
		while (i < this.x)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
	
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/plus.png","",""));	
		
		i = 0;
		while (i < this.y)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/equal.png","",""));	
        }
});

/* TYPE_DESCRIPTION: Subtract with 5 using pictures and symbols. */
var i_k_oa_a_1__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_2';
             
		this.mNameMachine = new NameMachine();
		this.mPictureLink = this.mNameMachine.getPictureLink();
 
		this.a = 0;
		this.b = 0;
		this.c = -1;

		this.x = 0;	 
		this.y = 0;	 

		while (this.a == this.b || this.a == this.c || this.b == this.c || this.c < 0 || this.c > 5)
		{
			//variables
                	this.x = Math.floor((Math.random()*5)+1);
                	this.y = Math.floor((Math.random()*5)+1);
			this.c = this.x - this.y;  
	
			//wrong answers 
			this.a = Math.floor(Math.random()*6);
			this.b = Math.floor(Math.random()*6);
                }

                this.setQuestion('Solve.');
                this.setAnswer(parseInt(this.c),0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        },
        
	createQuestionShapes: function()
        {
                var x = 0;
                var y = 100;
		var space = 50;

		var i = 0;
		APPLICATION.log(this.x + ':' + this.y + '=' + this.c);
		while (i < this.x)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
	
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/minus.png","",""));	
		
		i = 0;
		while (i < this.y)
                {
                        x = parseInt(x + space);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
			i++;
                }
                x = parseInt(x + space);
		this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/symbols/equal.png","",""));	
        }
});

/* TYPE_DESCRIPTION: Pick the number sentence that represents the addition word description. Missing addend. */
var i_k_oa_a_1__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_3';

                this.mNameMachine = new NameMachine();
                this.mName = this.mNameMachine.getName('girl');
                this.mNameTwo = this.mNameMachine.getName('girl');
                this.mThing = this.mNameMachine.getThing();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();
		this.mDayOfWeekOne = this.mNameMachine.getDayOfWeek();
		this.mDayOfWeekTwo = this.mNameMachine.getDayOfWeek();
		this.mTimeIncrement = this.mNameMachine.getTimeIncrement('minutes','hours');

                this.a = '';
                this.b = '';
                this.c = '';

                this.x = 0;
                this.y = 0;
                this.z = -1;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.z < 0 || this.z > 10)
                {
                        //variables
                        this.x = Math.floor((Math.random()*7)+2);
                        this.y = Math.floor((Math.random()*7)+2);
			this.z = this.x + this.y;

                        //wrong answers
                        this.a = this.x + ' = ' + this.y + ' + ' + ' _' 
                        this.b = this.y + ' = ' + this.x + ' + ' + ' _' 
                	this.c = this.z + ' = ' + this.x + ' + ' + ' _';
                }

		//adding more variety		
                var randomProblem = Math.floor(Math.random()*2);
		if (randomProblem == 0)
		{	
                	this.setQuestion(this.mName + ' grew ' + this.z + ' inches in two years. ' + this.mNameMachine.getPronoun(this.mName,1) + ' grew ' + this.x + ' inches the first year. How many inches did she grow the second year? Which equation shows this problem?');
		}
		if (randomProblem == 1)
		{
			this.setQuestion(this.mName + ' played ' + this.mPlayedActivity + ' a total of ' + this.z + ' ' + this.mTimeIncrement + ' on ' + this.mDayOfWeekOne + ' and ' + this.mDayOfWeekTwo + '. ' +  this.mNameMachine.getPronoun(this.mName,1) + ' played ' + this.mPlayedActivity + ' for ' + this.x + ' ' + this.mTimeIncrement + ' on ' + this.mDayOfWeekOne + '. How many ' + this.mTimeIncrement + ' did ' + this.mNameMachine.getPronoun(this.mName,0) + ' play on ' + this.mDayOfWeekTwo + '? Which equation shows this problem?');   
		}
		this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION:  */
var i_k_oa_a_1__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 'k.oa.a.1_4';

                this.mNameMachine = new NameMachine();
                this.mName = this.mNameMachine.getName('girl');
                this.mNameTwo = this.mNameMachine.getName('boy');
                this.mDayOne = this.mNameMachine.getDayOfWeek();
                this.mDayTwo = this.mNameMachine.getDayOfWeek();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();
                this.mTimeIncrement = this.mNameMachine.getTimeIncrement('minutes','hours');
                this.mFruit = this.mNameMachine.getFruit();
                this.mThing = this.mNameMachine.getThing();

                this.a = '';
                this.b = '';
                this.c = '';

                this.x = 0;
                this.y = 0;
                this.z = -1;

                while (this.a == this.b || this.a == this.c || this.b == this.c || this.z < 0 || this.z > 10)
                {
                        //variables
                        this.x = Math.floor((Math.random()*7)+2);
                        this.y = Math.floor((Math.random()*7)+2);
                        this.z = this.x - this.y;

                        //wrong answers
                        this.a = this.x + ' + ' + this.y + ' = ' + ' _'
                        this.b = this.y + ' - ' + this.x + ' = ' + ' _'
                        this.c = this.x + ' - ' + this.y + ' = ' + ' _';
                }

		//adding more variety		
                var randomProblem = Math.floor(Math.random()*3);
		if (randomProblem == 0)
		{	
                	this.setQuestion(this.mName + ' played ' + this.mPlayedActivity + ' for ' + this.x + ' ' + this.mTimeIncrement + ' on ' + this.mDayOne + ' and '  + this.y + ' ' + this.mTimeIncrement + ' on ' + this.mDayTwo + '. How many more ' + this.mTimeIncrement + ' does ' + this.mNameMachine.getPronoun(this.mName) + ' play on ' + this.mDayOne + ' than ' + this.mDayTwo + '? Which equation shows this problem?');
		}

		//john ate 7 strawberries and sam ate 5 strawberries. How may more strawberries did john eat than sam? Which equati.....
		if (randomProblem == 1) 
		{
                	this.setQuestion(this.mName + ' ate ' + this.x + ' ' + this.mFruit + ' and ' + this.mNameTwo + ' ate ' + this.y + ' ' + this.mFruit + '. How many more pieces of fruit did ' + this.mName + ' eat than ' + this.mNameTwo + '? Which equation shows this problem?');
		}
		if (randomProblem == 2) 
		{
                	this.setQuestion(this.mName + ' has ' + this.x + ' ' + this.mThing + ' and ' + this.mNameTwo + ' has ' + this.y + ' ' + this.mThing + '. How many more ' + this.mThing + ' does ' + this.mName + ' have than ' + this.mNameTwo + '? Which equation shows this problem?');
		}


                this.setAnswer(this.c,0);

                this.mButtonA.setAnswer(this.a);
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);
                this.shuffle(10);
        }
});
