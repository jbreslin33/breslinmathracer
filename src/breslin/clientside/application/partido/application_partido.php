var ApplicationPartido = new Class(
{

Extends: ApplicationBreslin,

initialize: function(serverIP, serverPort)
{
	this.parent(serverIP,serverPort);
	/*****GUI******/

        //main screen
        this.mButtonJoinGameB = 0;

	//battle
        this.mLabelQuestion = 0;
        this.mLabelAnswer = 0;
	this.mStringQuestion = '';
	this.mStringAnswer = '';

	this.createBattleScreen();
	this.showBattleScreen();
	this.hideBattleScreen();
	this.mAnswerTime = 0;
	
	//correctAnswer
	this.mLabelCorrectAnswer = 0;
	this.mStringCorrectAnswer = '';
	this.createCorrectAnswerScreen();
	this.showCorrectAnswerScreen();
	this.hideCorrectAnswerScreen();
	
},


log: function(msg)
{
	setTimeout(function()
        {
        	throw new Error(msg);
        }, 0);
},

processUpdate: function()
{
	this.parent();
	this.mAnswerTime = this.mAnswerTime + this.mRenderTime;   
},

setGame: function(gamePartido)
{
	this.mGamePartido = gamePartido;
	this.mGame = gamePartido;
},

getGame: function()
{
	return this.mGamePartido;
},


createStates: function()
{
	this.mApplicationGlobal     = new ApplicationGlobal     (this);
        this.mApplicationInitialize = new ApplicationInitialize (this);
        this.mApplicationLogin      = new ApplicationLogin      (this);
        this.mApplicationMain       = new ApplicationMainPartido(this);
        this.mApplicationPlay       = new ApplicationPlayPartido(this);
},

setStates: function()
{
	this.mStateMachine.setGlobalState  (this.mApplicationGlobal    );
        this.mStateMachine.changeState     (this.mApplicationInitialize);
        this.mStateMachine.setPreviousState(this.mApplicationInitialize);
},

//MAIN SCREEN
createMainScreen: function()
{
	this.parent();

  	//join game B
        if (this.mButtonJoinGameB == 0)
        {
                this.mButtonJoinGameB = this.createButton(300,150,100,50,"green","Join Game B");
                this.mButtonJoinGameB.onclick = function()
                {
                        mApplication.mButtonHit = mApplication.mButtonJoinGameB;
                };
        }
},

showMainScreen: function()
{
	this.parent();

        this.mButtonJoinGameB.style.display="block";
},

hideMainScreen: function()
{
	this.parent();

        this.mButtonJoinGameB.style.display="none";
},

//battle
createBattleScreen: function()
{
 	if (this.mLabelQuestion == 0)
        {
                this.mLabelQuestion = this.createLabel(300,75,100,25,"yellow","Question:");
        }

        if (this.mLabelAnswer == 0)
        {
                this.mLabelAnswer = this.createLabel(300,100,100,25,"orange","Answer:");
		this.mLabelAnswer.focus();
        }
},

showBattleScreen: function()
{
        this.mLabelQuestion.style.display="block";
        this.mLabelAnswer.style.display="block";
},


hideBattleScreen: function()
{
        this.mLabelQuestion.style.display="none";
        this.mLabelAnswer.style.display="none";
},

//correctAnswer
createCorrectAnswerScreen: function()
{
        if (this.mLabelCorrectAnswer == 0)
        {
                this.mLabelCorrectAnswer = this.createLabel(300,75,100,25,"yellow","CorrectAnswer:");
        }
},

showCorrectAnswerScreen: function()
{
        this.mLabelCorrectAnswer.style.display="block";
},


hideCorrectAnswerScreen: function()
{
        this.mLabelCorrectAnswer.style.display="none";
},

sendAnswer: function()
{
    	var answer = this.mLabelAnswer.value;

	var answerInMS = this.mAnswerTime * 1000;
	var answerInMSRound = Math.round(answerInMS);
        message = answerInMSRound + ' ' + answer;
        this.mNetwork.mSocket.emit('send_answer', message);

	this.mLabelAnswer.value = '';
}

});



/*
*/
