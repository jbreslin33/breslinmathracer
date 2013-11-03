#ifndef VECTOR3D_H
#define VECTOR3D_H
/******************************************************
*				INCLUDES
********************************************************/
//Ogre headers
#include "Ogre.h"
using namespace Ogre;

/******************************************************
*				CLASS
********************************************************/

class Vector3D
{

public:
Vector3D();
Vector3D(float x, float y, float z);
~Vector3D();

/******************************************************
*				VARIABLES
********************************************************/
float x;
float y;
float z;

/******************************************************
*				METHODS
********************************************************/
float length();
bool isZero();
void zero();

void printValues();

void normalise();
void truncate(float max);
void multiply(float num);
void add     (Vector3D* vectorToAddtoThisOne);
void add     (Vector3D* add1, Vector3D* add2);
void subtract(Vector3D* vectorToAddtoThisOne);
void subtract(Vector3D* sub1, Vector3D* sub2);
void copyValuesFrom(Vector3D* copyFrom);
float dot(Vector3D* v2);
Vector3D crossProduct(Vector3D b);
Vector3 convertToVector3();
Vector3 getVector3();
void convertFromVector3(Vector3 vector3);

Quaternion* getRotationTo(Vector3D* to);
Quaternion* mQuaternion;
float getDegreesToSomething(Vector3D* to);

Vector3D getVectorOffset(float offset, bool degrees);


};
#endif
