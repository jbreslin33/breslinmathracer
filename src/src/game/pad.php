var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">DUNGEON</font>');
	},

	update: function()
	{
		this.parent()
		if( this.mQuiz)
		{
			this.mQuiz.update();
		}
	},

	createWorld: function()
	{
		this.mScoreNeeded = this.mQuiz.mQuestionArray.length;

		this.createNumberPad();
		
		scoreText = '<font size="2"> Needed :' +  this.mScoreNeeded + '</font>';
		this.mApplication.mHud.mScoreNeeded.setText(scoreText);
	},

	createNumberPad: function()
	{
		//question bar
                this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
                this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                this.mNumQuestion.mMesh.mGame = this;

                //answer text box
                this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.mGame = this;
                this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                this.mNumAnswer.mMesh.focus();

                //Lock
                this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                this.mNumLock.mMesh.innerHTML = 'Lock';
                this.mNumLock.mMesh.mGame = this;
                this.mNumLock.mMesh.addEvent('click',this.numPadHit);

	}
});

