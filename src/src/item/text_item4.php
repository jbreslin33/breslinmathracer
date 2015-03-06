/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem4 = new Class(
{
Extends: TextItem3,

initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
{
	this.parent(sheet,qw,qh,qx,qy,tw,th,tx,ty);

	//userAnswer4
	this.mUserAnswer4 = '';
},	
 
createShapes: function()
{
	this.parent();
              
      	//answer Heading4 label
        this.mHeadingAnswerLabel4 = new Shape(100,50,630,30,this.mSheet.mGame,"","","");
        this.addShape(this.mHeadingAnswerLabel4);
        this.mHeadingAnswerLabel4.mCollidable = false;
        this.mHeadingAnswerLabel4.mCollisionOn = false;
        this.mHeadingAnswerLabel4.setText(' ');
	this.mHeadingAnswerLabel4.setVisibility(false);

      	//answer Input4
        this.mAnswerTextBox4 = new Shape(100,50,625,100,this.mSheet.mGame,"INPUT","","");
        this.mAnswerTextBox4.mMesh.value = '';
        if (navigator.appName == "Microsoft Internet Explorer")
        {
                this.mAnswerTextBox4.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
        }
        else
        {
                this.mAnswerTextBox4.mMesh.addEvent('keypress',this.inputKeyHit);
        }
        this.addShape(this.mAnswerTextBox4);

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
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer2(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox2.mMesh.value); 
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer3(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox3.mMesh.value); 
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer4(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox4.mMesh.value); 
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
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer2(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox2.mMesh.value); 
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer3(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox3.mMesh.value); 
            				APPLICATION.mGame.mSheet.getItem().setUserAnswer4(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox4.mMesh.value); 
				}
			}
		}
	}                
},

setUserAnswer4: function(userAnswer4)
{
	this.mUserAnswer4 = userAnswer4;
},

checkUserAnswer: function()
{
	correctAnswerFound = false;
	
	if (this.mUserAnswer == this.mAnswerArray[0] && this.mUserAnswer2 == this.mAnswerArray[1] && this.mUserAnswer3 == this.mAnswerArray[2] && this.mUserAnswer4 == this.mAnswerArray[3])
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
  
    	if (this.mAnswerTextBox4)
	{
		this.mAnswerTextBox4.setVisibility(true);
	}

    	if (this.mHeadingAnswerLabel4)
	{
		this.mHeadingAnswerLabel4.setVisibility(true);
	}
},

hideAnswerInputs: function()
{
	this.parent();
		
    	if (this.mAnswerTextBox4)
	{
		this.mAnswerTextBox4.setVisibility(false);
	}

    	if (this.mHeadingAnswerLabel4)
	{
		this.mHeadingAnswerLabel4.setVisibility(false);
	}
},

showCorrectAnswer: function()
{
	if (this.mCorrectAnswerLabel)
	{
        	this.mCorrectAnswerLabel.setSize(500, 100);
	  	this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.mHeadingAnswerLabel.getText() + ' ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel2.getText() + ' ' +  this.getAnswer(1) + ' ' + this.mHeadingAnswerLabel3.getText() + ' ' +  this.getAnswer(2) + ' ' + this.mHeadingAnswerLabel4.getText() + ' ' +  this.getAnswer(3)); 
		this.mCorrectAnswerLabel.setVisibility(true);
	 }
}

});
