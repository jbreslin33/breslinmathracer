/* TYPE_DESCRIPTION: Match counting sequence with number of objects. */
/*
var i_301 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = 301;

		var a = Math.floor(Math.random()*5)+5;
		var b = 0;
		var c = 0;
		this.mTotal = a;

		var aText = ''
		var bText = ''
		var cText = ''
		var bArray = 0;
		var cArray = 0;

		this.setQuestion('What numbers would you say while couting the kids?');
	
		while (aText == bText || aText == cText || bText == cText)
		{
			aText = '';
			bText = '';
			cText = '';

			for (i = a; i > 0; i--)
			{
				aText = aText + '' + parseInt(a-i+1); 
				if (i > 1)
				{
					aText = aText + ',';
				}	 
			}
			bText = aText;
			cText = aText;

			bText = bText.replace("" + Math.floor(Math.random()*bText.length),"" + Math.floor(Math.random()*bText.length)); 
			cText = cText.replace("" + Math.floor(Math.random()*cText.length),"" + Math.floor(Math.random()*cText.length)); 
		}
		

                this.setAnswer('' + aText,0);
                this.mButtonA.setAnswer(this.getAnswer());
                this.mButtonB.setAnswer(bText);
                this.mButtonC.setAnswer(cText);
                this.shuffle(10);
        },
    	
	createQuestionShapes: function()
	{	
		var x = 0;
		var y = 300;

		for (var i = 0; i < this.mTotal; i++)
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
*/
/* TYPE_DESCRIPTION: When given counting words in order pick the group with that many items. */
/*
var i_302 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                
		this.mType = 302;
		
		//button positions

                this.mButtonA.setPosition(100,200);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(675,200);

                this.a = 0;
                this.b = 0;
                this.c = 0;
                
		while (this.a == this.b || this.a == this.c || this.b == this.c)
                {
                        this.a = Math.floor(Math.random()*11);
                        this.b = Math.floor(Math.random()*11);
                        this.c = Math.floor(Math.random()*11);
                }

		var mNumberNameArray = new Array();
                mNumberNameArray.push('Zero');
                mNumberNameArray.push('One');
                mNumberNameArray.push('One, two');
                mNumberNameArray.push('One, two, three');
                mNumberNameArray.push('One, two, three, four');
                mNumberNameArray.push('One, two, three, four, five');
                mNumberNameArray.push('One, two, three, four, five, six');
                mNumberNameArray.push('One, two, three, four, five, six, seven');
                mNumberNameArray.push('One, two, three, four, five, six, seven, eight');
                mNumberNameArray.push('One, two, three, four, five, six, seven, eight, nine');
                mNumberNameArray.push('One, two, three, four, five, six, seven, eight, nine, ten');
                
		rightLetterIndex = Math.floor(Math.random()*3);
		if (rightLetterIndex == 0)
		{
			if (this.a == 1)
			{ 
               			this.setQuestion(mNumberNameArray[this.a] + ' kid.');
			}
			else
			{
               			this.setQuestion(mNumberNameArray[this.a] + ' kids.');
			}
                	this.setAnswer('A',0);
		}
		if (rightLetterIndex == 1)
		{
			if (this.b == 1)
			{ 
               			this.setQuestion(mNumberNameArray[this.b] + ' kid.');
			}
			else
			{
               			this.setQuestion(mNumberNameArray[this.b] + ' kids.');
			}
                	this.setAnswer('B',0);
		}
		if (rightLetterIndex == 2)
		{
			if (this.c == 1)
			{ 
               			this.setQuestion(mNumberNameArray[this.c] + ' kid.');
			}
			else
			{
               			this.setQuestion(mNumberNameArray[this.c] + ' kids.');
			}
                	this.setAnswer('C',0);
		}
                this.mButtonA.setAnswer('A');
                this.mButtonB.setAnswer('B');
                this.mButtonC.setAnswer('C');
        },

        createQuestionShapes: function()
        {      
                var x = 0;
                var y = 250;
		var bt = 45

		//a
                for (var i = 0; i < this.a; i++)
                {
                        if (i == 4)
                        {
                                x = 0;
                                y = 300;
                        }
                        if (i == 8)
                        {
                                x = 0;
                                y = 350;
                        }
                        x = parseInt(x + bt);  
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
                }
                
		var x = 260;
                var y = 250;
               
		//b 
                for (var i = 0; i < this.b; i++)
                {
                        if (i == 4)
                        {
                                x = 260;
                                y = 300;
                        }
                        if (i == 8)
                        {
                                x = 260;
                                y = 350;
                        }
                        x = parseInt(x + bt); 
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
                }
                var x = 550;
                var y = 250;

                //c
                for (var i = 0; i < this.c; i++)
                {
                        if (i == 4)
                        {
                                x = 550;
                                y = 300;
                        }
                        if (i == 8)
                        {
                                x = 550;
                                y = 350;
                        }
                        x = parseInt(x + bt);
                        this.addQuestionShape(new Shape(50,50,x,y,this.mSheet.mGame,"/images/bus/kid.png","",""));
                }
        }
});
*/
