var ButtonChoicePad  = new Class(
{

Extends: InputPad,

	initialize: function(application, game)
	{
		this.parent(application,game);
	},

	createInputPad: function()
	{
		//BUTTONS	
		if (!this.mButtonA)
                {
                        this.mButtonA = new Shape(150,50,300,100,this.mGame,"BUTTON","","");
                        this.mButtonA.mMesh.innerHTML = 'is equal to';
                        this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                        this.mNumberPadArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,300,200,this.mGame,"BUTTON","","");
                        this.mButtonB.mMesh.innerHTML = 'is greater than';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mNumberPadArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,300,300,this.mGame,"BUTTON","","");
                        this.mButtonC.mMesh.innerHTML = 'is less than';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mNumberPadArray.push(this.mButtonC);
                }

                //question bar
                if (!this.mNumQuestion)
                {
                        this.mNumQuestion = new Shape(100,50,300,50,this.mGame,"","","");
                        if (this.mQuiz)
                        {
                                if (this.mQuiz.getQuestion())
                                {
                                        this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                                }
                        }
                        this.mNumberPadArray.push(this.mNumQuestion);
                        this.mNumQuestion.setVisibility(false);
                }

                //answer text box
                if (!this.mNumAnswer)
                {
                        this.mNumAnswer = new Shape(100,50,400,50,this.mGame,"INPUT","","");
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                        this.mNumAnswer.mMesh.focus();
                        this.mNumberPadArray.push(this.mNumAnswer);
                        this.mNumAnswer.setVisibility(false);
                }
	},

	destroy: function()
	{
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        //back to div
                        this.mInputPadArray[i].mDiv.mDiv.removeChild(this.mNumberPadArray[i].mMesh);
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
                for (i = 0; i < this.mNumberPadArray.length; i++)
		{
			this.mInputPadArray[i].setVisibility(true);
		}
               	this.mNumAnswer.mMesh.focus();
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
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumberPad.mNumAnswer.mMesh.value;
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
