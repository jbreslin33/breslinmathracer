var NumberPad  = new Class(
{

Extends: InputPad,

	initialize: function(application)
	{
		this.parent(application)
	},

	//*************possible overides
       	show: function()
        {
		this.parent();
		this.mNumAnswer.mMesh.focus();
        },

        showQuestion: function()
        {
                this.mApplication.log('inputPad.showQuestion');
                this.mApplication.log('question:');
                this.mApplication.log('question:' + this.mApplication.mGame.mQuiz.getQuestion().getQuestion());

                if (this.mApplication.mGame.mQuiz)
                {
                        this.mApplication.log('inputPad.showQuestion there is a quiz');
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
                                this.mApplication.log('inputPad.showQuestion there is a question');
                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                        }
                }
        },

	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value;
			APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value = '';
			APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.innerHTML =  '';
                }
        },

        numPadHit: function()
        {
                if (this.innerHTML == 'Enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value;
                }
                else
                {
                        APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value + '' + this.innerHTML;
                }
        },

	createInputPad: function()
	{
 		//question
                this.mNumQuestion = new Shape(100,50,300,100,this.mGame,"","","");
		this.mInputPadArray.push(this.mNumQuestion);

                //answer
                this.mNumAnswer = new Shape(100,50,400,100,this.mGame,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
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
	}

});
