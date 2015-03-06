/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem = new Class(
{
Extends: Item,
        initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
        {
		this.parent(sheet);

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,95);
		
			this.mAnswerTextBox.setSize(100,50);
			this.mAnswerTextBox.setPosition(425,100);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		
			this.mAnswerTextBox.setSize(tw,th);
			this.mAnswerTextBox.setPosition(tx,ty);
		}
	},

	setTheFocus: function()
	{
		this.mAnswerTextBox.mMesh.focus();
	},
 
	createShapes: function()
        {
		this.parent();
	
                //question Label
                this.mQuestionLabel = new Shape(100,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
                this.mQuestionLabel.mCollidable = false;
                this.mQuestionLabel.mCollisionOn = false;
		this.mQuestionLabel.setText(this.mQuestion);

 		//answer Input
                this.mAnswerTextBox = new Shape(100,50,425,100,this.mSheet.mGame,"INPUT","","");
                this.mAnswerTextBox.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mAnswerTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mAnswerTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.addShape(this.mAnswerTextBox);
		
		//user Answer label
                this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.mCollidable = false;
                this.mCorrectAnswerLabel.mCollisionOn = false;
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);

        },

	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value); 
					}
				}
			}
                }
        },
	
	showQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 
	hideQuestion: function()
	{
		this.parent();
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 

	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		if (this.mAnswerTextBox)
		{
			this.mAnswerTextBox.setVisibility(true);
		}
	},
	hideAnswerInputs: function()
	{
		if (this.mAnswerTextBox)
		{
			this.mAnswerTextBox.setVisibility(false);
		}
	},

	showUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}
	}, 
	
	hideUserAnswer: function()
	{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setVisibility(false);
		}
	}, 

        showCorrectAnswer: function()
        {
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();
        },

        hideCorrectAnswer: function()
        {
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
        }
});
