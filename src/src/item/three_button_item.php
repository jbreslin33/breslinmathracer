/*
item_description: This virtual class will give you 3 buttons straight across and room for a question at the top.
 */ 
var ThreeButtonItem = new Class(
{
Extends: Item,
        initialize: function(sheet)
        {
		this.mButtonArray = new Array();
		this.parent(sheet);

	},

	createShapes: function()
        {
		this.parent();

                //question Label
                this.mQuestionLabel = new Shape(200,50,225,95,this.mSheet.mGame,"","","");
                this.addShape(this.mQuestionLabel);
		this.mQuestionLabel.setText(this.mQuestion);

		//--------------add buttons here
                //BUTTON A
                this.mButtonA = new ItemButton(150,50,100,250,this.mSheet.mGame,"BUTTON","","");
		//this.mButtonA.setBackGroundColor('red');
                this.addButton(this.mButtonA);

                //BUTTON B 
                this.mButtonB = new ItemButton(150,50,380,250,this.mSheet.mGame,"BUTTON","","");
                this.addButton(this.mButtonB);

                //BUTTON C 
                this.mButtonC = new ItemButton(150,50,675,250,this.mSheet.mGame,"BUTTON","","");
                this.addButton(this.mButtonC);
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
	
	addButton: function(button)
	{
		this.mButtonArray.push(button);
		this.addShape(button);
	},

	shuffle: function(degree)
	{
		for (i=0; i < degree; i++)
		{
        		indexFROM = Math.floor(Math.random()*3);
        		indexTO = Math.floor(Math.random()*3);

			answerFROM = this.mButtonArray[indexFROM].getAnswer();	
			answerTO = this.mButtonArray[indexTO].getAnswer();	
			this.mButtonArray[indexFROM].setAnswer(answerTO); 
			this.mButtonArray[indexTO].setAnswer(answerFROM); 
		}
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
