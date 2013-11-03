#include "baseEntity.h"
#include <assert.h> 

int BaseEntity::mNextValidID = 0;

BaseEntity::BaseEntity(int id)
{
	setID(id);
}

BaseEntity::~BaseEntity()
{
}

void BaseEntity::setID(int id)
{
	//make sure the val is equal to or greater than the next available ID
  	assert ( (id >= mNextValidID) && "<BaseGameEntity::setID>: invalid ID");
  	mID = id;
  	mNextValidID = mID + 1;

}
