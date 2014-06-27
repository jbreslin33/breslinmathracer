/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem = new Class(
{
Extends: Item,
        initialize: function(sheet,question,answer)
        {
		this.parent(sheet,question,answer);

                this.createShapes();
                this.hideShapes();
	},

	setTheFocus: function()
	{
		this.mNumAnswer.mMesh.focus();
	},
 
	createShapes: function()
        {
		this.parent();

                //question
                this.mNumQuestion = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
		this.mNumQuestion.setText(this.mQuestion);

 		//answer
                this.mNumAnswer = new Shape(100,50,425,100,this.mSheet.mGame,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mNumAnswer.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.addShape(this.mNumAnswer);

		//correctAnswer
 		this.mCorrectAnswer = new Shape(100,50,425,95,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswer);
                this.mCorrectAnswer.mCollidable = false;
                this.mCorrectAnswer.mCollisionOn = false;
                this.mCorrectAnswer.setText(this.mQuestion);

		//yourAnswer
                this.mYourAnswer = new Shape(100,50,425,195,this.mSheet.mGame,"","","");
                this.addShape(this.mYourAnswer);
                this.mYourAnswer.mCollidable = false;
                this.mYourAnswer.mCollisionOn = false;
                this.mYourAnswer.setText(this.mQuestion);
        },

	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
                       	// APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
					}
				}
			}
                }
        },

        showCorrectAnswer: function()
        {
		this.mCorrectAnswer.setText('QUESTION: ' + this.getQuestion() + ' ANSWER: ' + this.getAnswer()); 
		this.mCorrectAnswer.setVisibility(true);
        },

        hideCorrectAnswer: function()
        {
		this.mCorrectAnswer.setVisibility(false);
        }

});
