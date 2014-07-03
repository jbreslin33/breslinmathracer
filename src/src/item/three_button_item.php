/*
item_description: This abstract class(atleast my javascript version of abstract) will give you 3 buttons straight across and room for a question at the top.
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

                //BUTTON A
                this.mButtonA = new ItemButton(150,50,100,250,this.mSheet.mGame,"BUTTON","","");
                this.addButton(this.mButtonA);

                //BUTTON B 
                this.mButtonB = new ItemButton(150,50,380,250,this.mSheet.mGame,"BUTTON","","");
                this.addButton(this.mButtonB);

                //BUTTON C 
                this.mButtonC = new ItemButton(150,50,675,250,this.mSheet.mGame,"BUTTON","","");
                this.addButton(this.mButtonC);
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

	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
		for (i = 0; i < this.mButtonArray.length; i++)
		{
			this.mButtonArray[i].setVisibility(true);
		}
	},

        showCorrectAnswer: function()
        {
		for (i=0; i < this.mButtonArray.length; i++)
                {
                        if (this.mButtonArray[i].getAnswer() == this.mUserAnswer)
                        {
                                this.mButtonArray[i].setBackGroundColor("red");
                        }
                        if (this.mButtonArray[i].getAnswer() == this.getAnswer())
                        {
                                this.mButtonArray[i].setBackGroundColor("green");
                        }
                }
	}
});
