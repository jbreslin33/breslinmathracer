var InputPad  = new Class(
{
	initialize: function(application, game)
	{
		this.mApplication = application;
		this.mGame = game;
	
		//number pad
		this.mInputPadArray = new Array();

		//create input pad
		this.createInputPad();	
	},

	createInputPad: function()
	{
 		//question
                this.mNumQuestion = new Shape(100,50,300,100,this.mGame,"","","");
		this.mInputPadArray.push(this.mNumQuestion);
		this.showQuestion();

                //answer
                this.mNumAnswer = new Shape(100,50,400,100,this.mGame,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                this.mNumAnswer.mMesh.focus();
                this.mInputPadArray.push(this.mNumAnswer);
                
		//Lock
                this.mNumLock = new Shape(50,50,300,150,this.mGame,"BUTTON","","");
                this.mNumLock.mMesh.innerHTML = 'Lock';
                this.mNumLock.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumLock);

                //Division
                this.mNumDivision = new Shape(50,50,350,150,this.mGame,"BUTTON","","");
                this.mNumDivision.mMesh.innerHTML = '/';
                this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumDivision);

                //Multiplication
                this.mNumMultiplication= new Shape(50,50,400,150,this.mGame,"BUTTON","","");
                this.mNumMultiplication.mMesh.innerHTML = '*';
                this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumMultiplication);

                //Subtraction
                this.mNumSubtraction = new Shape(50,50,450,150,this.mGame,"BUTTON","","");
                this.mNumSubtraction.mMesh.innerHTML = '-';
                this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumSubtraction);

                //7
                this.mNumSeven = new Shape(50,50,300,200,this.mGame,"BUTTON","","");
                this.mNumSeven.mMesh.innerHTML = '7';
                this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumSeven);

		//8
                this.mNumEight = new Shape(50,50,350,200,this.mGame,"BUTTON","","");
                this.mNumEight.mMesh.innerHTML = '8';
                this.mNumEight.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumEight);

                //9
                this.mNumNine = new Shape(50,50,400,200,this.mGame,"BUTTON","","");
                this.mNumNine.mMesh.innerHTML = '9';
                this.mNumNine.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumNine);

                //Addition
                this.mNumAddition = new Shape(50,100,450,200,this.mGame,"BUTTON","","");
                this.mNumAddition.mMesh.innerHTML = '+';
                this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumAddition);

                //4
                this.mNumFour = new Shape(50,50,300,250,this.mGame,"BUTTON","","");
                this.mNumFour.mMesh.innerHTML = '4';
                this.mNumFour.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumFour);

                //5
	        this.mNumFive = new Shape(50,50,350,250,this.mGame,"BUTTON","","");
                this.mNumFive.mMesh.innerHTML = '5';
                this.mNumFive.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumFive);
 
		//6
                this.mNumSix = new Shape(50,50,400,250,this.mGame,"BUTTON","","");
                this.mNumSix.mMesh.innerHTML = '6';
                this.mNumSix.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumSix);
                
                //1
                this.mNumOne = new Shape(50,50,300,300,this.mGame,"BUTTON","","");
                this.mNumOne.mMesh.innerHTML = '1';
                this.mNumOne.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumOne);

                //2
                this.mNumTwo = new Shape(50,50,350,300,this.mgame,"BUTTON","","");
                this.mNumTwo.mMesh.innerHTML = '2';
                this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumTwo);

                //3
                this.mNumThree = new Shape(50,50,400,300,this.mGame,"BUTTON","","");
                this.mNumThree.mMesh.innerHTML = '3';
                this.mNumThree.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumThree);

                //0
                this.mNumZero = new Shape(100,50,300,350,this.mGame,"BUTTON","","");
                this.mNumZero.mMesh.innerHTML = '0';
                this.mNumZero.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumZero);
	   
		//.
                this.mNumDecimal = new Shape(50,50,400,350,this.mGame,"BUTTON","","");
                this.mNumDecimal.mMesh.innerHTML = '.';
                this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumDecimal);

                //enter
                this.mNumEnter = new Shape(50,100,450,300,this.mGame,"BUTTON","","");
                this.mNumEnter.mMesh.innerHTML = 'Enter';
                this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
                this.mInputPadArray.push(this.mNumEnter);
	},

	destroy: function()
	{
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        //back to div
                        this.mInputPadArray[i].mDiv.mDiv.removeChild(this.mInputPadArray[i].mMesh);
                        document.body.removeChild(this.mInputPadArray[i].mDiv.mDiv);
                        this.mInputPadArray[i] = 0;
                }
                this.mInputPadArray = 0;
        },

	hide: function()
	{
  		//shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
		{
			this.mInputPadArray[i].setVisibility(false);
		}
	},
	
	show: function()
	{
  		//shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
		{
			this.mInputPadArray[i].setVisibility(true);
		}
               	this.mNumAnswer.mMesh.focus();
	},

	//*************possible overides

	showQuestion: function()
	{
                if (this.mGame.mQuiz)
                {
                	if (this.mGame.mQuiz.getQuestion())
                        {
                        	this.mNumQuestion.mMesh.innerHTML = this.mGame.mQuiz.getQuestion().getQuestion();
                       	}
		}
	},
	
	showAnswer: function()
	{

	},
	
	reset: function()
	{ 
		//number pad
        	this.mNumAnswer.mMesh.value = '';
        	this.mNumAnswer.mMesh.innerHTML = '';

        	this.mNumQuestion.mMesh.value = '';
        	this.mNumQuestion.mMesh.innerHTML = '';
	},

	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value;
                }
        },

        numPadHit: function()
        {
                if (this.innerHTML == 'Enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumberPad.mNumAnswer.mMesh.value;
                }
                else
                {
                        APPLICATION.mGame.mNumberPad.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumberPad.mNumAnswer.mMesh.value + '' + this.innerHTML;
                }
        }

});
