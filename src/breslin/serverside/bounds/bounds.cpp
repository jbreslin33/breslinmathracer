#include "bounds.h"

Bounds::Bounds()
{
        a = new Vector3D();
        b = new Vector3D();
        c = new Vector3D();
        d = new Vector3D();
}

Bounds::~Bounds()
{
	delete a;
	delete b;
	delete c;
	delete d;
}

