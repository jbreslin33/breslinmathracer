var ButtonChoicePad  = new Class(
{

Extends: InputPad,

	initialize: function(application)
	{
		this.parent(application);
	},

	createInputPad: function()
	{
		this.createNumQuestion(); 

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
	},
      
	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(100,50,100,100,this.mGame,"","","");
                this.mInputPadArray.push(this.mNumQuestion);
        },

	show: function()
	{
 		//shapes and array
                for (i = 0; i < this.mInputPadArray.length; i++)
                {
                        this.mInputPadArray[i].setVisibility(true);
                }
	},

        showQuestion: function()
        {
                if (this.mApplication.mGame.mQuiz)
                {
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
                                this.mNumQuestion.mMesh.innerHTML = this.mApplication.mGame.mQuiz.getQuestion().getQuestion();
                        }
                }
        },

        numPadHit: function()
        {
                APPLICATION.mGame.mUserAnswer = this.innerHTML;
        }
});
