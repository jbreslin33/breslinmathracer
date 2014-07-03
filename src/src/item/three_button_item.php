var ThreeButtonItem = new Class(
{
Extends: Item,
        initialize: function(sheet)
        {
		this.parent(sheet);
		this.mStandard = 'k.cc.a.1';
		this.mType = 1;
	},

	createShapes: function()
        {
		this.parent();

                //question Label
                this.mQuestionLabel = new Shape(200,50,325,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
		this.mQuestionLabel.setText(this.mQuestion);

		//--------------add buttons here
                //BUTTON A
                this.mButtonA = new ItemButton(150,50,100,250,this.mSheet.mGame,"BUTTON","","");
                this.mButtonA.mMesh.innerHTML = 'A';
                this.addShape(this.mButtonA);

                //BUTTON B 
                this.mButtonB = new ItemButton(150,50,380,250,this.mSheet.mGame,"BUTTON","","");
                this.mButtonB.mMesh.innerHTML = 'B';
                this.addShape(this.mButtonB);

                //BUTTON C 
                this.mButtonC = new ItemButton(150,50,675,250,this.mSheet.mGame,"BUTTON","","");
                this.mButtonC.mMesh.innerHTML = 'C';
                this.addShape(this.mButtonC);
		//-------------end add buttons
		
		//user Answer label
                this.mUserAnswerLabel = new Shape(100,50,425,100,this.mSheet.mGame,"","","");
                this.addShape(this.mUserAnswerLabel);
                this.mUserAnswerLabel.setText(this.mQuestion);
		this.mUserAnswerLabel.setVisibility(false);

		//correctAnswer Label
 		this.mCorrectAnswerLabel = new Shape(100,50,425,200,this.mSheet.mGame,"","","");
                this.addShape(this.mCorrectAnswerLabel);
                this.mCorrectAnswerLabel.setText(this.mQuestion);
		this.mCorrectAnswerLabel.setVisibility(false);
        },

	showQuestion: function()
	{
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setText(this.mQuestion);
			this.mQuestionLabel.setVisibility(true);
		}
	}, 

	hideQuestion: function()
	{
		if (this.mQuestionLabel)
		{
			this.mQuestionLabel.setVisibility(false);
		}
	}, 

	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		if (this.mButtonA)
		{
			this.mButtonA.setVisibility(true);
		}
		if (this.mButtonB)
		{
			this.mButtonB.setVisibility(true);
		}
		if (this.mButtonC)
		{
			this.mButtonC.setVisibility(true);
		}
	},

	hideAnswerInputs: function()
	{
		if (this.mButtonA)
		{
			this.mButtonA.setVisibility(false);
		}
		if (this.mButtonB)
		{
			this.mButtonB.setVisibility(false);
		}
		if (this.mButtonC)
		{
			this.mButtonC.setVisibility(false);
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
        },

        hideCorrectAnswer: function()
        {
		if (this.mCorrectAnswerLabel)
		{
			this.mCorrectAnswerLabel.setVisibility(false);
		}
        }
});
