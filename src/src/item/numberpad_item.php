
var NumberPadItem = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.parent(sheet,50,50,370,75,50,50,425,75);
        this.mThresholdTime = 5000;
        this.mClock = new ClockTimer(APPLICATION);

	this.mCorrectAnswerLabel.setPosition(600,75);
	this.mUserAnswerLabel.setPosition(120,75);
	this.mContinueCorrectButton.setPosition(678,394);
	this.mContinueIncorrectButton.setPosition(678,394);
	
	this.mQuestionLabel.setPosition(280,75);
	this.mAnswerTextBox.setPosition(325,75);

	//1	
	this.mOneA = new Shape(100, 40,  150, 130,this.mSheet.mGame,"DIV","#EFEFFB","");
	this.mOneA.mMesh.onclick = this.hitOne;
        this.addShape(this.mOneA);
        this.mOneA.mCollidable = false;
        this.mOneA.mCollisionOn = false;
	
	this.mOneB = new Shape(100, 60,  150, 170,this.mSheet.mGame,"DIV","#EFEFFB","");
        this.addShape(this.mOneB);
	this.mOneB.mMesh.innerHTML = '1';
	this.mOneB.mMesh.onclick = this.hitOne;
	this.mOneB.mMesh.style.textAlign="center";	
	
	//2	
	this.mTwoA = new Shape(100, 40,  250, 130,this.mSheet.mGame,"DIV","#E0E0F8","");
        this.addShape(this.mTwoA);
	this.mTwoA.mMesh.onclick = this.hitTwo;

	this.mTwoB = new Shape(100, 60,  250, 170,this.mSheet.mGame,"DIV","#E0E0F8","");
        this.addShape(this.mTwoB);
	this.mTwoB.mMesh.innerHTML = '2';
	this.mTwoB.mMesh.onclick = this.hitTwo;
	this.mTwoB.mMesh.style.textAlign="center";	
	
	//3	
	this.mThreeA = new Shape(100, 40,  350, 130,this.mSheet.mGame,"DIV","#CECEF6","");
        this.addShape(this.mThreeA);
	this.mThreeA.mMesh.onclick = this.hitThree;

	this.mThreeB = new Shape(100, 60,  350, 170,this.mSheet.mGame,"DIV","#CECEF6","");
        this.addShape(this.mThreeB);
	this.mThreeB.mMesh.innerHTML = '3';
	this.mThreeB.mMesh.onclick = this.hitThree;
	this.mThreeB.mMesh.style.textAlign="center";	
	
	//4	
	this.mFourA = new Shape(100, 40,  150, 220,this.mSheet.mGame,"DIV","#A9A9F5","");
        this.addShape(this.mFourA);
	this.mFourA.mMesh.onclick = this.hitFour;

	this.mFourB = new Shape(100, 60,  150, 260,this.mSheet.mGame,"DIV","#A9A9F5","");
        this.addShape(this.mFourB);
	this.mFourB.mMesh.innerHTML = '4';
	this.mFourB.mMesh.onclick = this.hitFour;
	this.mFourB.mMesh.style.textAlign="center";	
	
	//5	
	this.mFiveA = new Shape(100, 40, 250, 220,this.mSheet.mGame,"DIV","#8181F7","");
        this.addShape(this.mFiveA);
	this.mFiveA.mMesh.onclick = this.hitFive;

	this.mFiveB = new Shape(100, 60, 250, 260,this.mSheet.mGame,"DIV","#8181F7","");
        this.addShape(this.mFiveB);
	this.mFiveB.mMesh.innerHTML = '5';
	this.mFiveB.mMesh.onclick = this.hitFive;
	this.mFiveB.mMesh.style.textAlign="center";	
	
	//6	
	this.mSixA = new Shape(100, 40,  350, 220,this.mSheet.mGame,"DIV","#5858FA","");
        this.addShape(this.mSixA);
	this.mSixA.mMesh.onclick = this.hitSix;

	this.mSixB = new Shape(100, 60,  350, 260,this.mSheet.mGame,"DIV","#5858FA","");
        this.addShape(this.mSixB);
	this.mSixB.mMesh.innerHTML = '6';
	this.mSixB.mMesh.onclick = this.hitSix;
	this.mSixB.mMesh.style.textAlign="center";	
	
	//7
	this.mSevenA = new Shape(100, 40,  150, 310,this.mSheet.mGame,"DIV","#2E2EFE","");
        this.addShape(this.mSevenA);
	this.mSevenA.mMesh.onclick = this.hitSeven;

	this.mSevenB = new Shape(100, 60,  150, 350,this.mSheet.mGame,"DIV","#2E2EFE","");
        this.addShape(this.mSevenB);
	this.mSevenB.mMesh.innerHTML = '7';
	this.mSevenB.mMesh.onclick = this.hitSeven;
	this.mSevenB.mMesh.style.textAlign="center";	
	
	//8
	this.mEightA = new Shape(100, 40,  250, 310,this.mSheet.mGame,"DIV","#0000FF","");
        this.addShape(this.mEightA);
	this.mEightA.mMesh.onclick = this.hitEight;

	this.mEightB = new Shape(100, 60,  250, 350,this.mSheet.mGame,"DIV","#0000FF","");
        this.addShape(this.mEightB);
	this.mEightB.mMesh.innerHTML = '8';
	this.mEightB.mMesh.onclick = this.hitEight;
	this.mEightB.mMesh.style.textAlign="center";	
	
	//9
	this.mNineA = new Shape(100, 40,  350, 310,this.mSheet.mGame,"DIV","#0101DF","");
        this.addShape(this.mNineA);
	this.mNineA.mMesh.onclick = this.hitNine;

	this.mNineB = new Shape(100, 60,  350, 350,this.mSheet.mGame,"DIV","#0101DF","");
        this.addShape(this.mNineB);
	this.mNineB.mMesh.innerHTML = '9';
	this.mNineB.mMesh.onclick = this.hitNine;
	this.mNineB.mMesh.style.textAlign="center";	
	
	//0
	this.mZeroA = new Shape(100, 40,  450, 310,this.mSheet.mGame,"DIV","#0404B4","");
        this.addShape(this.mZeroA);
	this.mZeroA.mMesh.onclick = this.hitZero;

	this.mZeroB = new Shape(100, 60,  450, 350,this.mSheet.mGame,"DIV","#0404B4","");
        this.addShape(this.mZeroB);
	this.mZeroB.mMesh.innerHTML = '0';
	this.mZeroB.mMesh.onclick = this.hitZero;
	this.mZeroB.mMesh.style.textAlign="center";	

	this.mKeyPadArray = new Array()
	this.mKeyPadArray.push(this.mOneA);
	this.mKeyPadArray.push(this.mOneB);
	this.mKeyPadArray.push(this.mTwoA);
	this.mKeyPadArray.push(this.mTwoB);
	this.mKeyPadArray.push(this.mThreeA);
	this.mKeyPadArray.push(this.mThreeB);
	this.mKeyPadArray.push(this.mFourA);
	this.mKeyPadArray.push(this.mFourB);
	this.mKeyPadArray.push(this.mFiveA);
	this.mKeyPadArray.push(this.mFiveB);
	this.mKeyPadArray.push(this.mSixA);
	this.mKeyPadArray.push(this.mSixB);
	this.mKeyPadArray.push(this.mSevenA);
	this.mKeyPadArray.push(this.mSevenB);
	this.mKeyPadArray.push(this.mEightA);
	this.mKeyPadArray.push(this.mEightB);
	this.mKeyPadArray.push(this.mNineA);
	this.mKeyPadArray.push(this.mNineB);
	this.mKeyPadArray.push(this.mZeroA);
	this.mKeyPadArray.push(this.mZeroB);

},

//virtual functions that can show and hide buttons??
showAnswerInputs: function()
{
	this.parent();

	if (this.mOneA)
        {
        	this.mOneA.setVisibility(true);
        }
	if (this.mOneB)
        {
        	this.mOneB.setVisibility(true);
        }
        if (this.mTwoA)
        {
                this.mTwoA.setVisibility(true);
        }
        if (this.mTwoB)
        {
                this.mTwoB.setVisibility(true);
        }
        if (this.mThreeA)
        {
                this.mThreeA.setVisibility(true);
        }
        if (this.mThreeB)
        {
                this.mThreeB.setVisibility(true);
        }
        if (this.mFourA)
        {
                this.mFourA.setVisibility(true);
        }
        if (this.mFourB)
        {
                this.mFourB.setVisibility(true);
        }
        if (this.mFiveA)
        {
                this.mFiveA.setVisibility(true);
        }
        if (this.mFiveB)
        {
                this.mFiveB.setVisibility(true);
        }
        if (this.mSixA)
        {
                this.mSixA.setVisibility(true);
        }
        if (this.mSixB)
        {
                this.mSixB.setVisibility(true);
        }
        if (this.mSevenA)
        {
                this.mSevenA.setVisibility(true);
        }
        if (this.mSevenB)
        {
                this.mSevenB.setVisibility(true);
        }
        if (this.mEightA)
        {
                this.mEightA.setVisibility(true);
        }
        if (this.mEightB)
        {
                this.mEightB.setVisibility(true);
        }
        if (this.mNineA)
        {
                this.mNineA.setVisibility(true);
        }
        if (this.mNineB)
        {
                this.mNineB.setVisibility(true);
        }
        if (this.mZeroA)
        {
                this.mZeroA.setVisibility(true);
        }
        if (this.mZeroB)
        {
                this.mZeroB.setVisibility(true);
        }
},

hideAnswerInputs: function()
{
	this.parent();

	if (this.mOneA)
        {
        	this.mOneA.setVisibility(false);
        }
	if (this.mOneB)
        {
        	this.mOneB.setVisibility(false);
        }
        if (this.mTwoA)
        {
                this.mTwoA.setVisibility(false);
        }
        if (this.mTwoB)
        {
                this.mTwoB.setVisibility(false);
        }
        if (this.mThreeA)
        {
                this.mThreeA.setVisibility(false);
        }
        if (this.mThreeB)
        {
                this.mThreeB.setVisibility(false);
        }
        if (this.mFourA)
        {
                this.mFourA.setVisibility(false);
        }
        if (this.mFourB)
        {
                this.mFourB.setVisibility(false);
        }
        if (this.mFiveA)
        {
                this.mFiveA.setVisibility(false);
        }
        if (this.mFiveB)
        {
                this.mFiveB.setVisibility(false);
        }
        if (this.mSixA)
        {
                this.mSixA.setVisibility(false);
        }
        if (this.mSixB)
        {
                this.mSixB.setVisibility(false);
        }
        if (this.mSevenA)
        {
                this.mSevenA.setVisibility(false);
        }
        if (this.mSevenB)
        {
                this.mSevenB.setVisibility(false);
        }
        if (this.mEightA)
        {
                this.mEightA.setVisibility(false);
        }
        if (this.mEightB)
        {
                this.mEightB.setVisibility(false);
        }
        if (this.mNineA)
        {
                this.mNineA.setVisibility(false);
        }
        if (this.mNineB)
        {
                this.mNineB.setVisibility(false);
        }
        if (this.mZeroA)
        {
                this.mZeroA.setVisibility(false);
        }
        if (this.mZeroB)
        {
                this.mZeroB.setVisibility(false);
        }
},

isItRightYet: function()
{
	if (APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value == APPLICATION.mGame.mSheet.getItem().mAnswerArray[0])
	{
		//lets submit	
		APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value);
	} 
},

hitOne: function()
{
        if (APPLICATION.mGame)
        {
        	if (APPLICATION.mGame.mSheet)
                {
                	if (APPLICATION.mGame.mSheet.getItem())
                        {
				var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value; 
                               	APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '1';
				APPLICATION.mGame.mSheet.getItem().isItRightYet();	
                        }
                }
	}
},

hitTwo: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '2';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitThree: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '3';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitFour: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '4';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitFive: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '5';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitSix: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '6';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitSeven: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '7';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitEight: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '8';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitNine: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '9';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
},

hitZero: function()
{
        if (APPLICATION.mGame)
        {
                if (APPLICATION.mGame.mSheet)
                {
                        if (APPLICATION.mGame.mSheet.getItem())
                        {
                                var v = APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value;
                                APPLICATION.mGame.mSheet.getItem().mAnswerTextBox.mMesh.value = '' + v + '0';
                                APPLICATION.mGame.mSheet.getItem().isItRightYet();
                        }
                }
        }
}

});
