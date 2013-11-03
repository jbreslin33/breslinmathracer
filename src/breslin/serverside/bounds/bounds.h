#ifndef BOUNDS_H
#define BOUNDS_H

#include "../../math/vector3D.h"

class Bounds
{
public:

Bounds();
Bounds(Vector3D* a,Vector3D* b,Vector3D* c,Vector3D* d);
~Bounds();

Vector3D* a; 
Vector3D* b; 
Vector3D* c;
Vector3D* d;

};
#endif

