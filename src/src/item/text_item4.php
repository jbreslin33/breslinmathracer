/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem4 = new Class(
{
Extends: TextItem2,
        initialize: function(sheet)
        {

          
		this.mUserAnswer3 = '';
		this.mUserAnswer4 = '';

		this.parent(sheet);
	},	
 
	createShapes: function()
        {
		this.parent();
              
    //answer Heading label 3
                this.mHeadingAnswerLabel3 = new Shape(100,50,430,180,this.mSheet.mGame,"","","");
                this.addShape(this.mHeadingAnswerLabel3);
                this.mHeadingAnswerLabel3.mCollidable = false;
                this.mHeadingAnswerLabel3.mCollisionOn = false;
                this.mHeadingAnswerLabel3.setText(' ');
		            this.mHeadingAnswerLabel3.setVisibility(false);

      //answer Heading label 4
                this.mHeadingAnswerLabel4 = new Shape(100,50,530,180,this.mSheet.mGame,"","","");
                this.addShape(this.mHeadingAnswerLabel4);
                this.mHeadingAnswerLabel4.mCollidable = false;
                this.mHeadingAnswerLabel4.mCollisionOn = false;
                this.mHeadingAnswerLabel4.setText(' ');
		            this.mHeadingAnswerLabel4.setVisibility(false);

      //answer Input 3
                this.mAnswerTextBox3 = new Shape(50,50,575,350,this.mSheet.mGame,"INPUT","","");
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

      //answer Input 4
                this.mAnswerTextBox4 = new Shape(50,50,640,350,this.mSheet.mGame,"INPUT","","");
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
            APPLICATION.mGame.mSheet.getItem().setUserAnswer3(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox3.mMesh.value); 
            APPLICATION.mGame.mSheet.getItem().setUserAnswer4(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox4.mMesh.value); 
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
            APPLICATION.mGame.mSheet.getItem().setUserAnswer3(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox3.mMesh.value); 
            APPLICATION.mGame.mSheet.getItem().setUserAnswer4(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox4.mMesh.value); 
					}
				}
			}
                }
        },


	setUserAnswer3: function(userAnswer3)
	{
		this.mUserAnswer3 = userAnswer3;
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
  
    if (this.mAnswerTextBox3)
		{
			this.mAnswerTextBox3.setVisibility(true);
		}

    if (this.mAnswerTextBox4)
		{
			this.mAnswerTextBox4.setVisibility(true);
		}

    if (this.mHeadingAnswerLabel3)
		{
			this.mHeadingAnswerLabel3.setVisibility(true);
		}

    if (this.mHeadingAnswerLabel4)
		{
			this.mHeadingAnswerLabel4.setVisibility(true);
		}

    if (this.mAnswerLabel)
		{
			this.mAnswerLabel.setVisibility(true);
		}

    if (this.mAnswerLabel2)
		{
			this.mAnswerLabel2.setVisibility(true);
		}
	},

	hideAnswerInputs: function()
	{

    this.parent();
		
    if (this.mAnswerTextBox3)
		{
			this.mAnswerTextBox3.setVisibility(false);
		}

    if (this.mAnswerTextBox4)
		{
			this.mAnswerTextBox4.setVisibility(false);
		}

    if (this.mHeadingAnswerLabel3)
		{
			this.mHeadingAnswerLabel3.setVisibility(false);
		}    

    if (this.mHeadingAnswerLabel4)
		{
			this.mHeadingAnswerLabel4.setVisibility(false);
		}

    if (this.mAnswerLabel)
		{
			this.mAnswerLabel.setVisibility(false);
		}

    if (this.mAnswerLabel2)
		{
			this.mAnswerLabel2.setVisibility(false);
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
    },


});
