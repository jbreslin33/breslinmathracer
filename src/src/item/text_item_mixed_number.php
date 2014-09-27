/*
TextItemMixedNumber: this class input of mixed numbers for answers.
*/
var TextItemMixedNumber = new Class(
{
Extends: Item,
        initialize: function(sheet,qw,qh,qx,qy,iw,ih,ix,iy,nw,nh,nx,ny,dw,dh,dx,dy)
        {
		this.parent(sheet);

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,95);
		
			this.mIntegerTextBox.setSize(100,50);
			this.mIntegerTextBox.setPosition(425,100);
			
			this.mNumeratorTextBox.setSize(100,50);
			this.mNumeratorTextBox.setPosition(550,100);
			
			this.mDenominatorTextBox.setSize(100,50);
			this.mDenominatorTextBox.setPosition(550,225);
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
                this.mIntegerTextBox = new Shape(100,50,425,100,this.mSheet.mGame,"INPUT","","");
                this.mIntegerTextBox.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mIntegerTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mIntegerTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.addShape(this.mIntegerTextBox);



		
		//user Answer label
                this.mUserAnswerLabel = new Shape(100,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.mCollidable = false;
                this.mUserAnswerLabel.mCollisionOn = false;
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(100,50,425,200,this.mSheet.mGame,"","","");
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
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mAnswerTextBox.mMesh.value;
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
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getAnswer()); 
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
