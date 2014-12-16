/*
TextItemFraction: this class input of fractions for answers.
*/
var TextItemFraction = new Class(
{
Extends: Item,
        initialize: function(sheet,qw,qh,qx,qy,nw,nh,nx,ny,dw,dh,dx,dy,autoreduce)
        {
		this.mRaphael = Raphael(350,137,150,5);
		this.parent(sheet);

		this.mAutoReduce = true;
		if (autoreduce == true)		
		{
			APPLICATION.log('autoreduce:true')	
			this.mAutoReduce = true;
		}
		else
		{
			APPLICATION.log('autoreduce:false')	
			this.mAutoReduce = false;
		}

		if (qw == '')
		{
			this.mQuestionLabel.setSize(100,50);
			this.mQuestionLabel.setPosition(325,95);
		
			this.mNumeratorTextBox.setSize(100,50);
			this.mNumeratorTextBox.setPosition(550,100);
			
			this.mDenominatorTextBox.setSize(100,50);
			this.mDenominatorTextBox.setPosition(550,225);
		}
		else
		{
			this.mQuestionLabel.setSize(qw,qh);
			this.mQuestionLabel.setPosition(qx,qy);
		
			this.mNumeratorTextBox.setSize(nw,nh);
			this.mNumeratorTextBox.setPosition(nx,ny);
			
			this.mDenominatorTextBox.setSize(dw,dh);
			this.mDenominatorTextBox.setPosition(dx,dy);
		}
	},

	setTheFocus: function()
	{
		this.mNumeratorTextBox.mMesh.focus();
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

 		//numeratorTextBox 
                this.mNumeratorTextBox = new Shape(100,50,425,100,this.mSheet.mGame,"INPUT","","");
                this.mNumeratorTextBox.mMesh.value = '';
                this.addShape(this.mNumeratorTextBox);

 		//denominatorTextBox 
                this.mDenominatorTextBox = new Shape(100,50,425,100,this.mSheet.mGame,"INPUT","","");
                this.mDenominatorTextBox.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mDenominatorTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mDenominatorTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.addShape(this.mDenominatorTextBox);
		
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
		
		this.mFractionBar = new LineOne (this.mSheet.mGame,this.mRaphael,0,0,150,0,"#000000",false)
                this.addShape(this.mFractionBar);
		this.mFractionBar.setVisibility(false);
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
						var numerator   = APPLICATION.mGame.mSheet.getItem().mNumeratorTextBox.mMesh.value 	
						var denominator = APPLICATION.mGame.mSheet.getItem().mDenominatorTextBox.mMesh.value	
						if (APPLICATION.mGame.mSheet.getItem().mAutoReduce)
						{
							
							var fraction = new Fraction(numerator,denominator,true);
							numerator = fraction.mNumerator;	
							denominator = fraction.mDenominator;	
							APPLICATION.log('numerator:' + numerator);				
							APPLICATION.log('denominator:' + denominator);				
						}
						var answer = '<sup>' + numerator + '</sup>&frasl;<sub>' + denominator + '</sub>';			
						APPLICATION.mGame.mSheet.getItem().setUserAnswer('' + answer); 
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
						var numerator   = APPLICATION.mGame.mSheet.getItem().mNumeratorTextBox.mMesh.value 	
						var denominator = APPLICATION.mGame.mSheet.getItem().mDenominatorTextBox.mMesh.value	
						if (APPLICATION.mGame.mSheet.getItem().mAutoReduce)
                                                {
                                                        var fraction = new Fraction(numerator,denominator,true);
                                                        numerator = fraction.mNumerator;
                                                        denominator = fraction.mDenominator;
							APPLICATION.log('numerator:' + numerator);				
							APPLICATION.log('denominator:' + denominator);				
                                                }
						var answer = '<sup>' + numerator + '</sup>&frasl;<sub>' + denominator + '</sub>';			
						APPLICATION.mGame.mSheet.getItem().setUserAnswer('' + answer); 
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
		if (this.mNumeratorTextBox)
		{
			this.mNumeratorTextBox.setVisibility(true);
		}
		if (this.mDenominatorTextBox)
		{
			this.mDenominatorTextBox.setVisibility(true);
		}
		if (this.mFractionBar)
		{
			this.mFractionBar.setVisibility(true);
		}
	},

	hideAnswerInputs: function()
	{
		if (this.mNumeratorTextBox)
		{
			this.mNumeratorTextBox.setVisibility(false);
		}
		if (this.mDenominatorTextBox)
		{
			this.mDenominatorTextBox.setVisibility(false);
		}
		if (this.mFractionBar)
		{
			this.mFractionBar.setVisibility(false);
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
