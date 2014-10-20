/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {

          //userAnswer2
		this.mUserAnswer2 = '';

		this.parent(sheet);
	},	
 
	createShapes: function()
        {
		this.parent();
              
    //answer Heading label
                this.mHeadingAnswerLabel = new Shape(100,50,430,30,this.mSheet.mGame,"","","");
                this.addShape(this.mHeadingAnswerLabel);
                this.mHeadingAnswerLabel.mCollidable = false;
                this.mHeadingAnswerLabel.mCollisionOn = false;
                this.mHeadingAnswerLabel.setText(' ');
		            this.mHeadingAnswerLabel.setVisibility(false);

      //answer Heading2 label
                this.mHeadingAnswerLabel2 = new Shape(100,50,530,30,this.mSheet.mGame,"","","");
                this.addShape(this.mHeadingAnswerLabel2);
                this.mHeadingAnswerLabel2.mCollidable = false;
                this.mHeadingAnswerLabel2.mCollisionOn = false;
                this.mHeadingAnswerLabel2.setText(' ');
		            this.mHeadingAnswerLabel2.setVisibility(false);

      //answer Input2
                this.mAnswerTextBox2 = new Shape(100,50,525,100,this.mSheet.mGame,"INPUT","","");
                this.mAnswerTextBox2.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mAnswerTextBox2.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mAnswerTextBox2.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.addShape(this.mAnswerTextBox2);

        },

	inputKeyHit: function(e)
        {
            //this.parent(e);          

                if (e.key == 'enter')
                {
                    //APPLICATION.mGame.mUserAnswer2 = APPLICATION.mGame.mAnswerTextBox2.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value); 
            APPLICATION.mGame.mSheet.getItem().setUserAnswer2(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox2.mMesh.value); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
            //this.parent(e);

                if (e.keyCode == 13)
                {
                    //APPLICATION.mGame.mUserAnswer2 = APPLICATION.mGame.mAnswerTextBox2.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value); 
            APPLICATION.mGame.mSheet.getItem().setUserAnswer2(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox2.mMesh.value); 
					}
				}
			}
                }
        },


	setUserAnswer2: function(userAnswer2)
	{
		this.mUserAnswer2 = userAnswer2;
	},
	
	checkUserAnswer: function()
	{
		correctAnswerFound = false;
		
			if (this.mUserAnswer == this.mAnswerArray[0] && this.mUserAnswer2 == this.mAnswerArray[1])
			{
				correctAnswerFound = true;	
			} 
		
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},


	//virtual functions that can show and hide buttons??	
	showAnswerInputs: function()
	{
    this.parent();
  
    if (this.mAnswerTextBox2)
		{
			this.mAnswerTextBox2.setVisibility(true);
		}

    if (this.mHeadingAnswerLabel)
		{
			this.mHeadingAnswerLabel.setVisibility(true);
		}

    if (this.mHeadingAnswerLabel2)
		{
			this.mHeadingAnswerLabel2.setVisibility(true);
		}
	},

	hideAnswerInputs: function()
	{

    this.parent();
		
    if (this.mAnswerTextBox2)
		{
			this.mAnswerTextBox2.setVisibility(false);
		}

    if (this.mHeadingAnswerLabel)
		{
			this.mHeadingAnswerLabel.setVisibility(false);
		}    

    if (this.mHeadingAnswerLabel2)
		{
			this.mHeadingAnswerLabel2.setVisibility(false);
		}
	},



showCorrectAnswer: function()
{
	if (this.mCorrectAnswerLabel)
	{	 
        	this.mCorrectAnswerLabel.setSize(500, 100);
		this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.mHeadingAnswerLabel.getText() + ' ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' ' +  this.getAnswerTwo()); 
		this.mCorrectAnswerLabel.setVisibility(true);
	}
}

});
