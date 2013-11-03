//header
#include "gamePartido.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//ObjectTitle
#include "../../billboard/objectTitle.h"

//byteBuffer
#include "../../bytebuffer/byteBuffer.h"

//shape
#include "../../shape/shape.h"

//application
#include "../../application/partido/applicationPartido.h"

//states
#include "states/gamePartidoStates.h"

/***************************************
*			          CONSTRUCTORS
***************************************/
GamePartido::GamePartido(ApplicationPartido* applicationPartido) : Game(applicationPartido)
{
	mApplicationPartido = applicationPartido;

	//correctAnswer
	mCorrectAnswerStart = false;
	mCorrectAnswerEnd = false;

	//states
        mPartidoStateMachine =  new StateMachine<GamePartido>(this);
        mPartidoStateMachine->setCurrentState      (BATTLE_OFF::Instance());
        mPartidoStateMachine->setPreviousState     (BATTLE_OFF::Instance());
        mPartidoStateMachine->setGlobalState       (NULL);

	mApplicationPartido->createBattleScreen();
        mApplicationPartido->hideBattleScreen();
        mApplicationPartido->createCorrectAnswerScreen();
        mApplicationPartido->hideCorrectAnswerScreen();
}

GamePartido::~GamePartido()
{
}

void GamePartido::processUpdate()
{
	Game::processUpdate();
       	mPartidoStateMachine->update();
}

void GamePartido::processMoveControls()
{
	if (mPartidoStateMachine->currentState() != BATTLE_OFF::Instance())
	{
		//we are in battle			
	}	
	else
	{
		//not in battle let player move
		Game::processMoveControls();
	}
}

void GamePartido::checkByteBuffer(ByteBuffer* byteBuffer)
{
	Game::checkByteBuffer(byteBuffer);

        byteBuffer->BeginReading();

        int type = byteBuffer->ReadByte();
       
	switch(type)
        {
                case mMessageAskQuestion:
                        askQuestion(byteBuffer);
                        break;

                case mMessageBattleStart:
			mPartidoStateMachine->changeState(ANSWER_QUESTION::Instance());
                        break;

                case mMessageBattleEnd:
 			//mPartidoStateMachine->changeState(BATTLE_OFF::Instance());                        
			break;
                
		case mMessageCorrectAnswerStart:
			mCorrectAnswerStart = true;
                        correctAnswer(byteBuffer);
                        break;
		
		case mMessageCorrectAnswerEnd:
			mCorrectAnswerEnd = true;
                        break;
        }
}

void GamePartido::correctAnswer(ByteBuffer* byteBuffer)
{
        mApplicationPartido->mStringCorrectAnswer.clear();

        int length = byteBuffer->ReadByte();
        for (int i = 0; i < length; i++)
        {
                char c =  byteBuffer->ReadByte();
                mApplicationPartido->mStringCorrectAnswer.append(1,c);
        }
        if (mApplicationPartido->mLabelCorrectAnswer && mApplicationPartido->mStringCorrectAnswer.size() > 0)
        {
                mApplicationPartido->mLabelCorrectAnswer->setCaption(mApplicationPartido->mStringCorrectAnswer);
        }
        else
        {
                LogString("no label or no string");
        }
}

void GamePartido::askQuestion(ByteBuffer* byteBuffer)
{
	//if you get a question should you not change to ANSWER_QUESTION????????
	if (mPartidoStateMachine->currentState() != ANSWER_QUESTION::Instance())
	{	
		mPartidoStateMachine->changeState(ANSWER_QUESTION::Instance());
	}

	mApplicationPartido->mStringQuestion.clear();
        int length = byteBuffer->ReadByte();
        for (int i = 0; i < length; i++)
        {
        	char c =  byteBuffer->ReadByte();
                mApplicationPartido->mStringQuestion.append(1,c);
        }

	if (!mApplicationPartido->mLabelQuestion)
	{
		LogString("GamePartido::askQuestion : no mLabelQuestion exists yet.");
	}
	if (mApplicationPartido->mStringQuestion.size() < 1)
	{
		LogString("GamePartido::askQuestion : mStringQuestion less than 1 in size.");
	}
	if (mApplicationPartido->mLabelQuestion && mApplicationPartido->mStringQuestion.size() > 0)
	{
		mApplicationPartido->mLabelQuestion->setCaption(mApplicationPartido->mStringQuestion);
	}
	else
	{
		LogString("GamePartido::askQuestion : no label or no string");
	}
	
	//reset mAnswerTime	
	mApplicationPartido->mAnswerTime = 0; 
}

void GamePartido::reset()
{
	Game::reset();
      	
	//hide screens 
	mApplicationPartido->hideBattleScreen();
	mApplicationPartido->hideCorrectAnswerScreen();
 	
	//reset text boxes for battle ...actually let's not
        mApplicationPartido->mStringAnswer.clear();
        mApplicationPartido->mLabelQuestion->setCaption("");
        mApplicationPartido->mLabelAnswer->setCaption("");

	//reset text boxes for showCorrectAnswer ...actually let's not
        mApplicationPartido->mLabelCorrectAnswer->setCaption("");
        mApplicationPartido->mStringCorrectAnswer.clear();

	//reset battle vars
        mCorrectAnswerStart = false;

	//reset correctAnswer vars
        mCorrectAnswerStart = false;
        mCorrectAnswerEnd   = false;

	//answer time
        mApplicationPartido->mAnswerTime = 0;
}

