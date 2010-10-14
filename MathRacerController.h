#ifndef __MATHRACERCONTROLLER_H__
#define __MATHRACERCONTROLLER_H__

#include "Ogre.h"
#include "OIS.h"

#include "SinbadCharacterController.h"

using namespace Ogre;


class MathRacerController : public SinbadCharacterController
{

public:

	MathRacerController(Camera* cam) : SinbadCharacterController(cam)
	{
	}
};

#endif
