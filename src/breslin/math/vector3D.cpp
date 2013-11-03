#include "vector3D.h"

//log
#include "../clientside/tdreamsock/dreamSockLog.h"

#include <math.h>

Vector3D::Vector3D()
{
	x = 0;
	y = 0;
	z = 0;

	mQuaternion = new Quaternion; 
}

Vector3D::Vector3D(float x1, float y1, float z1)
{
	x = x1;
	y = y1;
	z = z1;
}

Vector3D::~Vector3D()
{
}

void Vector3D::truncate(float max)
{
	if (this->length() > max)
  	{
    		this->normalise();
    		this->multiply(max);
  	} 	
}

float Vector3D::length()
{
	return sqrt(x*x + y*y + z*z);
}

bool Vector3D::isZero()
{
	if (x == 0.0 && y == 0.0 && z == 0.0)
	{
		return true;
	}
	else 
	{
		return false;
	}
}

void Vector3D::printValues()
{
	LogString("x:%f",x);
	LogString("z:%f",z);
}

void Vector3D::zero()
{
	x = 0;
	y = 0;
	z = 0;
}

void Vector3D::normalise()
{
	float len = length();
	if (len == 0)
		return;
	x /= len;
	y /= len;
	z /= len;
}

//multiply this vector by a scalar
void Vector3D::multiply(float num)
{
	x = x * num;
	y = y * num;
	z = z * num;
}

//add another vector to this one
void Vector3D::add(Vector3D* vectorToAddtoThisOne)
{
	x = x + vectorToAddtoThisOne->x;
	y = y + vectorToAddtoThisOne->y;
	z = z + vectorToAddtoThisOne->z;
}

void Vector3D::add(Vector3D* add1, Vector3D* add2)
{
	x = add1->x - add2->x;
	y = add1->y - add2->y;
	z = add1->z - add2->z;	
}

//subtract another vector from this one
void Vector3D::subtract(Vector3D* vectorToSubtract)
{
	x = x - vectorToSubtract->x;
	y = y - vectorToSubtract->y;
	z = z - vectorToSubtract->z;
}

void Vector3D::subtract(Vector3D* sub1, Vector3D* sub2)
{
	x = sub1->x - sub2->x;
	y = sub1->y - sub2->y;
	z = sub1->z - sub2->z;	
}

//copy values
void Vector3D::copyValuesFrom(Vector3D* copyFrom)
{
	x = copyFrom->x;
	y = copyFrom->y;
	z = copyFrom->z;
}

float Vector3D::dot(Vector3D* v2)
{
	float d = x * v2->x + y * v2->y + z * v2->z;
	return d;
}


Vector3 Vector3D::convertToVector3()
{
	Vector3 vector3;
	vector3.x = x;
	vector3.y = y;
	vector3.z = z;

	return vector3;
}


Quaternion* Vector3D::getRotationTo(Vector3D* to)
{
	Vector3D fallbackAxis;

	Vector3D v0;
	Vector3D v1;
	v0.copyValuesFrom(this);
	v1.copyValuesFrom(to);

	v0.normalise();	
	v1.normalise();

	float d = v0.dot(&v1);

    	// If dot == 1, vectors are the same
    	if (d >= 1.0f)
    	{
		mQuaternion = new Quaternion(1.0,0.0,0.0,0.0);
		return mQuaternion;
    	}
			
	if (d < (1e-6f - 1.0f))
	{
		// rotate 180 degrees about the fallback axis
		Vector3 fb;
		fb.x = fallbackAxis.x;
		fb.y = fallbackAxis.y;
		fb.z = fallbackAxis.z;
		
		// rotate 180 degrees about the fallback axis
		mQuaternion->FromAngleAxis(Radian(Math::PI), fb);
	}
	else
	{
		Real s = Math::Sqrt( (1+d)*2 );
        	Real invs = 1 / s;

		Vector3D c;
		c = v0.crossProduct(v1);

   	    	mQuaternion->x = c.x * invs;
       		mQuaternion->y = c.y * invs;
        	mQuaternion->z = c.z * invs;
        	mQuaternion->w = s * 0.5f;
		mQuaternion->normalise();
	}
	return mQuaternion;
}

Vector3D Vector3D::crossProduct(Vector3D b)
{
	Vector3D c;
	c.x = this->y * b.z - this->z * b.x;
	c.y = this->z * b.x - this->x * b.z;
	c.z = this->x * b.y - this->y * b.x;

	return c;
}


//calculate how far off we are from some vector
float Vector3D::getDegreesToSomething(Vector3D* to)
{
	mQuaternion = this->getRotationTo(to);
	
    	// convert to degrees
    	Real degreesToSomething = mQuaternion->getYaw().valueDegrees();
	return degreesToSomething;
}

Vector3 Vector3D::getVector3()
{
	Vector3 vector3;
	vector3.x = x;
	vector3.y = y;
	vector3.z = z;
	return vector3;
}

void Vector3D::convertFromVector3(Vector3 vector3)
{
	x = vector3.x;
	y = vector3.y;
	z = vector3.z;

}
Vector3D Vector3D::getVectorOffset(float offset, bool degrees)
{
	//get the sine and cosine of 90degrees

	double cs;
	double sn;

	if (degrees)
	{
        	cs = cos( offset * 3.14f / 180.0f);
        	sn = sin( offset * 3.14f / 180.0f);
	}
	else
	{
        	cs = cos(offset);
        	sn = sin(offset);
	}

        Vector3D offsetVelocity;

        offsetVelocity.x = this->x * cs - this->z * sn;
        offsetVelocity.z = this->x * sn + this->z * cs;

	return offsetVelocity;
}

