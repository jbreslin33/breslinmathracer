
/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_4',0.0804,'k.cc.b.5','Count the objects up to 10 in scattered pattern.');
*/

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
        this.setAnswer('' + a,0);

        this.mButtonA.setAnswer('' + a);
        this.mButtonB.setAnswer('' + b);
        this.mButtonC.setAnswer('' + c);
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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_3',0.0803,'k.cc.b.5','Count the objects up to 20 in a circle.');
*/

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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_2',0.0802,'k.cc.b.5','Count the objects up to 20 in a line.');
*/

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
        this.setAnswer('' + a,0);

       	this.mButtonA.setAnswer('' + a);
        this.mButtonB.setAnswer('' + b);
        this.mButtonC.setAnswer('' + c);
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

/*
insert into item_types(id,progression,core_standards_id,description) values ('k.cc.b.5_1',0.0801,'k.cc.b.5','Count the objects up to 20 in a rectangular array.');
*/

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
                this.setAnswer('' + a,0);

                this.mButtonA.setAnswer('' + a);
                this.mButtonB.setAnswer('' + b);
                this.mButtonC.setAnswer('' + c);
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
