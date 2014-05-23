var NumberPad = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	},

        showQuestion: function()
        {
              	//set all shapes invisible to start semi-clean
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                if (this.mApplication.mGame.mQuiz)
                {
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
                                this.mQuiz.getQuestion().showShapes();
                                this.mQuiz.getQuestion().setChoices();
                                this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                        }
                }
               
		//show input pad 
		for (i = this.mTotalGuiBars; i < parseInt(this.mTotalGuiBars + this.mTotalInputBars); i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }
		
		if (this.mNumAnswer)
		{
                	this.mNumAnswer.mMesh.focus();
		}
        },

        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                }
        },
 
	createWorld: function()
        {
		this.parent();

		this.createInput();
	},
        
	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(100,50,325,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createInput: function()
	{
                //question
                this.createNumQuestion();

                //answer
                this.mNumAnswer = new Shape(100,50,425,100,this,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumAnswer.mMesh.attachEvent("onkeypress",this.inputKeyHit);
		}
		else
		{
                	this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
		}	
                this.mShapeArray.push(this.mNumAnswer);

                //Lock
                this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                this.mNumLock.mMesh.innerHTML = 'Lock';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumLock.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumLock.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumLock);

                //Division
                this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                this.mNumDivision.mMesh.innerHTML = '/';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumDivision.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumDivision);

                //Multiplication
                this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                this.mNumMultiplication.mMesh.innerHTML = '*';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumMultiplication.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
		}		
                this.mShapeArray.push(this.mNumMultiplication);

                //Subtraction
                this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                this.mNumSubtraction.mMesh.innerHTML = '-';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumSubtraction.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
		}
               	this.mShapeArray.push(this.mNumSubtraction);

                //7
                this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                this.mNumSeven.mMesh.innerHTML = '7';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumSeven.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumSeven);

                //8
                this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                this.mNumEight.mMesh.innerHTML = '8';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumEight.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumEight.mMesh.addEvent('click',this.numPadHit);
		}		
                this.mShapeArray.push(this.mNumEight);

                //9
                this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                this.mNumNine.mMesh.innerHTML = '9';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumNine.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumNine.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumNine);

                //Addition
                this.mNumAddition = new Shape(50,100,450,225,this,"BUTTON","","");
                this.mNumAddition.mMesh.innerHTML = '+';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumAddition.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
		}
               	this.mShapeArray.push(this.mNumAddition);

                //4
                this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                this.mNumFour.mMesh.innerHTML = '4';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumFour.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumFour.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumFour);

                //5
                this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                this.mNumFive.mMesh.innerHTML = '5';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumFive.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumFive.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumFive);

                //6
                this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                this.mNumSix.mMesh.innerHTML = '6';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumSix.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumSix.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumSix);

                //1
                this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                this.mNumOne.mMesh.innerHTML = '1';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumOne.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumOne.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumOne);

                //2
                this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                this.mNumTwo.mMesh.innerHTML = '2';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumTwo.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumTwo);

                //3
                this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                this.mNumThree.mMesh.innerHTML = '3';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumThree.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumThree.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumThree);

                //0
                this.mNumZero = new Shape(100,50,325,350,this,"BUTTON","","");
                this.mNumZero.mMesh.innerHTML = '0';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumZero.mMesh.attachEvent('click',this.numPadHit);
		}
		else
		{
                	this.mNumZero.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumZero);

                //.
                this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                this.mNumDecimal.mMesh.innerHTML = '.';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumDecimal.mMesh.attachEvent('click',this.numPadHit);
		}
		else	
		{
                	this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumDecimal);

                //enter
                this.mNumEnter = new Shape(50,100,450,325,this,"BUTTON","","");
                this.mNumEnter.mMesh.innerHTML = 'Enter';
		if (navigator.appName == "Microsoft Internet Explorer")
		{
                	this.mNumEnter.mMesh.attachEvent("onclick",this.numPadHitEnter);
		}
		else
		{
                	this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
		}
                this.mShapeArray.push(this.mNumEnter);

		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;

                //set all pad shapes invisible to start semi-clean
                for (i = this.mTotalGuiBars; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                        this.mShapeArray[i].mCollidable = false;
                        this.mShapeArray[i].mCollisionOn = false;
                }
        }
});
