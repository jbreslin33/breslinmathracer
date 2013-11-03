var BATTLE_OFF = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(gamePartido)
{
	for (i = 0; i < gamePartido.mShapeVector.length; i++)
	{
		gamePartido.mShapeVector[i].setVisible(true);
	}
},

execute: function(gamePartido)
{
	if (gamePartido.mControlObject.mCommandToRunOnShape.mDeltaCode == gamePartido.mMessageBattleStart)
        {
		this.log('hellllllllllllllllllllllll');
                gamePartido.mPartidoStateMachine.changeState(gamePartido.mANSWER_QUESTION);
        }
},	

exit: function(gamePartido)
{
	for (i = 0; i < gamePartido.mShapeVector.length; i++)
	{
		gamePartido.mShapeVector[i].setVisible(false);
	}
}

});

var ANSWER_QUESTION = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(gamePartido)
{
	//reset text labels	
	gamePartido.mApplicationPartido.mStringAnswer = '';
	gamePartido.mApplicationPartido.mLabelAnswer.value = '';
	gamePartido.mApplicationPartido.mLabelAnswer.focus();
	
	gamePartido.mApplicationPartido.showBattleScreen();

	gamePartido.mApplicationPartido.mAnswerTime = 0;
},

//ANSWER_QUESTION
execute: function(gamePartido)
{
/*
	if (gamePartido.mApplicationPartido.mAnswerTime > 2) //overtime....
        {
                gamePartido.mApplicationPartido.mLabelAnswer.value = 'oot';
                gamePartido.mApplicationPartido.sendAnswer();
		gamePartido.mApplicationPartido.mAnswerTime = 0;
        }
*/

	gamePartido.mApplicationPartido.mLabelAnswer.focus();
  	
	if (gamePartido.mControlObject.mCommandToRunOnShape.mDeltaCode == gamePartido.mMessageBattleEnd)
        {
                gamePartido.mPartidoStateMachine.changeState(gamePartido.mBATTLE_OFF);
        }

	if (gamePartido.mCorrectAnswerStart)
        {
		//this.log('ANSWER_QUESTION: gamePartido.mCorrectAnswerStart == true');
                gamePartido.mPartidoStateMachine.changeState(gamePartido.mSHOWCORRECTANSWER_PARTIDO_GAME);
        }

	//for enter
   	if (gamePartido.mApplicationPartido.mLabelAnswer == document.activeElement)
       	{ 
		if (gamePartido.mApplicationPartido.mKey_enter == true)
		{
        		gamePartido.mApplicationPartido.sendAnswer();
			gamePartido.mApplicationPartido.mKey_enter = false;
		
			//reset text labels	
			gamePartido.mApplicationPartido.mStringAnswer = '';
			gamePartido.mApplicationPartido.mLabelQuestion.value = '';
			gamePartido.mApplicationPartido.mLabelAnswer.value = '';
		}
        }
},	
//ANSWER_QUESTION
exit: function(gamePartido)
{
	gamePartido.mApplicationPartido.mStringAnswer = '';
        gamePartido.mApplicationPartido.hideBattleScreen();
	
	//reset text labels	
	gamePartido.mApplicationPartido.mStringAnswer = '';
	gamePartido.mApplicationPartido.mLabelQuestion.value = '';
	gamePartido.mApplicationPartido.mLabelAnswer.value = '';
}

});

var SHOWCORRECTANSWER_PARTIDO_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(gamePartido)
{
	gamePartido.mApplicationPartido.showCorrectAnswerScreen();
        gamePartido.mCorrectAnswerStart = false;
},

execute: function(gamePartido)
{
	if (gamePartido.mControlObject.mCommandToRunOnShape.mDeltaCode == gamePartido.mMessageBattleEnd)
        {
                gamePartido.mPartidoStateMachine.changeState(gamePartido.mBATTLE_OFF);
        }

 	if (gamePartido.mCorrectAnswerEnd)
        {
                gamePartido.mPartidoStateMachine.changeState(gamePartido.mANSWER_QUESTION);
        }
},	

exit: function(gamePartido)
{
	//this.log('SHOWCORRECTANSWER_PARTIDO_GAME:exit');
 	gamePartido.mApplicationPartido.hideCorrectAnswerScreen();
        gamePartido.mCorrectAnswerStart = false;
        gamePartido.mCorrectAnswerEnd   = false;

        //reset text box
        gamePartido.mApplicationPartido.mStringCorrectAnswer = '';
        gamePartido.mApplicationPartido.mLabelCorrectAnswer.value = '';
}

});
