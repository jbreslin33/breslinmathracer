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
                        this.mInputPadArray.push(this.mButtonA);
                }
                if (!this.mButtonB)
                {
                        this.mButtonB = new Shape(150,50,300,200,this.mGame,"BUTTON","","");
                        this.mButtonB.mMesh.innerHTML = 'is greater than';
                        this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonB);
                }
                if (!this.mButtonC)
                {
                        this.mButtonC = new Shape(150,50,300,300,this.mGame,"BUTTON","","");
                        this.mButtonC.mMesh.innerHTML = 'is less than';
                        this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                        this.mInputPadArray.push(this.mButtonC);
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
                        this.mInputPadArray.push(this.mNumQuestion);
                        this.mNumQuestion.setVisibility(false);
                }

                //answer text box
                if (!this.mNumAnswer)
                {
                        this.mNumAnswer = new Shape(100,50,-100,-150,this.mGame,"INPUT","","");
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                        this.mNumAnswer.mMesh.focus();
                        this.mInputPadArray.push(this.mNumAnswer);
                        this.mNumAnswer.setVisibility(false);
                }
	},

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

        numPadHit: function()
        {
                APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value + '' + this.innerHTML;
                APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mInputPad.mNumAnswer.mMesh.value;
        }
});
