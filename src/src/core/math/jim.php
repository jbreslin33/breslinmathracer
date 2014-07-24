/* TYPE_DESCRIPTION: This type will ask what comes next after a number from 0-99. */

var i_1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 1;

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

/* TYPE_DESCRIPTION: i_2: This type will ask what comes next after a number ending in 9 from 0-99. */

var i_2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 2;

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

/* TYPE_DESCRIPTION: i_3: This type will ask what comes next after a number ending in 0 from 0-99. */

var i_3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 3;

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

/* TYPE_DESCRIPTION: i_4:  When couning by ten from numbers that end in zero. What comes next. Numbers range from 0-100. */

var i_4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 4;

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

var i_101 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 101;

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

var i_102 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 102;

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

var i_103 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 103;

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

var i_201 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 201;

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

		this.setQuestion('How many kids?');
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
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
		}
	}
});

/* TYPE_DESCRIPTION: Count the objects up to 20. Make answer zero. */

var i_202 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 202;

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

                this.setQuestion('How many kids?');
                this.setAnswer(a,0);

                this.mButtonA.setAnswer(a);
                this.mButtonB.setAnswer(b);
                this.mButtonC.setAnswer(c);
                this.shuffle(10);
        }
});
/ * ITEMS: */

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 11-15 */

var i_203 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 203;

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

                this.setQuestion('How many kids?');
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
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
                }
        }
});

/* TYPE_DESCRIPTION: Count the objects up to 20. make sure answer is between 16-20 */

var i_204 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 204;

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

                this.setQuestion('How many kids?');
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
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
                }
        }
});

var i_604 = new Class(
{
Extends: ThreeButtonItem,
initialize: function(sheet)
{
	this.parent(sheet);
        this.mType = 604;
    
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

	this.setQuestion('How many kids?');
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
		this.addQuestionShape(new Shape(50,50,parseInt(xArray[i]),parseInt(yArray[i]),this.mSheet.mGame,"/images/bus/kid.png","",""));
	}
}
});

var i_603 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 603;
    
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

		this.setQuestion('How many kids?');
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
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+37),parseInt(y-37),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+37),parseInt(y+37),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-37),parseInt(y+37),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-37),parseInt(y-37),this.mSheet.mGame,"/images/bus/kid.png","",""));
			}
			if (answer == 12) 
			{
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-85),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+80),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+80),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+85),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+85),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-80),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-80),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-85),this.mSheet.mGame,"/images/bus/kid.png","",""));
			}
		}
	}
});

var i_602 = new Class(
{
Extends: ThreeButtonItem,
initialize: function(sheet)
{
        this.parent(sheet);
        this.mType = 602;
   
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

	this.setQuestion('How many kids?');
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
		this.addQuestionShape(new Shape(45,45,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
		x = x + 37;
	}
}
});

/* TYPE_DESCRIPTION: Count the objects up to 20 in a rectangular array. */

var i_601 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 601;
    
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

		this.setQuestion('How many kids?');
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
this.addQuestionShape(new Shape(50,50,x,parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),y,this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,x,parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),y,this.mSheet.mGame,"/images/bus/kid.png","",""));
			}	
			if (answer == 8) 
			{
this.addQuestionShape(new Shape(50,50,x,parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),y,this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,x,parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),y,this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
			}
			if (answer == 20) 
			{
this.addQuestionShape(new Shape(50,50,x,parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),y,this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+100),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x+50),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y+100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y+50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y-50),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-100),parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
this.addQuestionShape(new Shape(50,50,parseInt(x-50),parseInt(y-100),this.mSheet.mGame,"/images/bus/kid.png","",""));
			}
		}
	}
});

var i_701 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 701;
    
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
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
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
			this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
			x = x + 50;
		}
	}
});

var i_801 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = 801;
    
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
