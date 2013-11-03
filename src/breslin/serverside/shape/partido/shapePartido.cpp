#include "shapePartido.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//game
#include "../../network/network.h"

//game
#include "../../server/partido/serverPartido.h"

//game
#include "../../game/partido/gamePartido.h"

//client
#include "../../client/robust/partido/clientPartido.h"

//math
#include "../../../math/vector3D.h"

//states
#include "states/shapePartidoStates.h"

//move
#include "../../move/move.h"

//computerPartido
#include "../../computer/partido/computerPartido.h"

//postgresql
#include <stdio.h>
#include <postgresql/libpq-fe.h>

ShapePartido::ShapePartido(unsigned int index, GamePartido* gamePartido, ClientPartido* clientPartido, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
			 bool animated ,bool collidable, float collisionRadius, int meshCode, bool ai)
	:
		Shape(index, gamePartido,clientPartido,position,velocity,rotation,root,animated,collidable,collisionRadius,meshCode,ai)

{
	mGamePartido   = gamePartido;
	mClientPartido = clientPartido;
	mOpponent     = NULL;
	mOpponentLast = NULL;

        //register with shapePartido vector
        mGamePartido->mShapePartidoVector.push_back(this);

	//computer abilitys
  	mComputerPartido = new ComputerPartido(this);
        addComputerAbility(mComputerPartido);

	//statemachine
	mShapePartidoStateMachine =  new StateMachine<ShapePartido>(this);
        mShapePartidoStateMachine->setGlobalState      (GLOBAL_SHAPE_PARTIDO::Instance());
        mShapePartidoStateMachine->setCurrentState      (GAME_SHAPE_PARTIDO::Instance());
        mShapePartidoStateMachine->setPreviousState      (GAME_SHAPE_PARTIDO::Instance());
}

ShapePartido::~ShapePartido()
{
	delete mShapePartidoStateMachine;
	delete mComputerPartido;
}

void ShapePartido::update()
{
	//up the collision timeout...
/*
	mCollisionTimeoutCounter -= mGamePartido->mServer->mGameTime;
	if (mCollisionTimeoutCounter < 0) 
	{
		mCollidable = true;
	}
	else
	{
		mCollidable = false;
	}
*/
   	mMove->mPositionBeforeCollision->x = mSceneNode->getPosition().x;
        mMove->mPositionBeforeCollision->y = mSceneNode->getPosition().y;
        mMove->mPositionBeforeCollision->z = mSceneNode->getPosition().z;
        
	for (unsigned int i = 0; i < mComputerAbilityVector.size(); i++)
        {
                mComputerAbilityVector.at(i)->update();
        }

        for (unsigned int i = 0; i < mSteeringAbilityVector.size(); i++)
        {
                mSteeringAbilityVector.at(i)->update();
        }
	
	mShapePartidoStateMachine->update();
        
	//process ticks on abilitys
        for (unsigned int i = 0; i < mAbilityVector.size(); i++)
        {
                mAbilityVector.at(i)->update();
        }


        if (mText.compare(mTextLast) != 0)
        {
                sendText();
                mTextLast = mText;
        }
}

bool ShapePartido::handleLetter(Letter* letter)
{
	return Shape::handleLetter(letter);
}

//no real collision just detection for battles...this way no one can get stuck
void ShapePartido::collision(Shape* shape)
{
	mTimeoutShape = shape;
}

