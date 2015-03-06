/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem3 = new Class(
{
Extends: TextItem2,

initialize: function(sheet,qw,qh,qx,qy,tw,th,tx,ty)
{
	this.parent(sheet,qw,qh,qx,qy,tw,th,tx,ty);

	//userAnswer3
	this.mUserAnswer3 = '';
},	
 
createShapes: function()
{
	this.parent();
              
      	//answer Heading3 label
        this.mHeadingAnswerLabel3 = new Shape(100,50,630,30,this.mSheet.mGame,"","","");
        this.addShape(this.mHeadingAnswerLabel3);
        this.mHeadingAnswerLabel3.mCollidable = false;
        this.mHeadingAnswerLabel3.mCollisionOn = false;
        this.mHeadingAnswerLabel3.setText(' ');
	this.mHeadingAnswerLabel3.setVisibility(false);

      	//answer Input3
        this.mAnswerTextBox3 = new Shape(50,50,625,100,this.mSheet.mGame,"INPUT","","");
        this.mAnswerTextBox3.mMesh.value = '';
        if (navigator.appName == "Microsoft Internet Explorer")
        {
                this.mAnswerTextBox3.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
        }
        else
        {
                this.mAnswerTextBox3.mMesh.addEvent('keypress',this.inputKeyHit);
        }
        this.addShape(this.mAnswerTextBox3);

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
				}
			}
		}
	}                
},

setUserAnswer3: function(userAnswer3)
{
	this.mUserAnswer3 = userAnswer3;
},

checkUserAnswer: function()
{
	correctAnswerFound = false;
	
	if (this.mUserAnswer == this.mAnswerArray[0] && this.mUserAnswer2 == this.mAnswerArray[1] && this.mUserAnswer3 == this.mAnswerArray[2])
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
  
    	if (this.mAnswerTextBox3)
	{
		this.mAnswerTextBox3.setVisibility(true);
	}

    	if (this.mHeadingAnswerLabel3)
	{
		this.mHeadingAnswerLabel3.setVisibility(true);
	}
},

hideAnswerInputs: function()
{
	this.parent();
		
    	if (this.mAnswerTextBox3)
	{
		this.mAnswerTextBox3.setVisibility(false);
	}

    	if (this.mHeadingAnswerLabel3)
	{
		this.mHeadingAnswerLabel3.setVisibility(false);
	}
},

showCorrectAnswer: function()
{
	if (this.mCorrectAnswerLabel)
	{
        	this.mCorrectAnswerLabel.setSize(500, 100);
	  	this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.mHeadingAnswerLabel.getText() + ' ' +  this.getAnswer()  + ' ' + this.mHeadingAnswerLabel3.getText() + ' ' +  this.getAnswer(1) + ' ' + this.mHeadingAnswerLabel3.getText() + ' ' +  this.getAnswer(2)); 
		this.mCorrectAnswerLabel.setVisibility(true);
	 }
}

});
