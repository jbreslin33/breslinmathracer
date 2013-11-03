package breslin.math;

//std
import java.lang.Math;

//quat
import com.jme3.math.Quaternion;

//vector
import com.jme3.math.Vector3f;

public class Vector3D
{

public float x;
public float y;
public float z;

public Vector3D()
{
	x = 0;
	y = 0;
	z = 0;
}

public Vector3D(float x1, float y1, float z1)
{
	x = x1;
	y = y1;
	z = z1;
}

public double length()
{
	return Math.sqrt(x*x + y*y + z*z);
}

public boolean isZero()
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

public void zero()
{
	x = 0;
	y = 0;
	z = 0;
}

public float dot(Vector3D v2)
{
	float d = x * v2.x + y * v2.y + z * v2.z;
	return d;
}

public void normalise()
{
	double len = length();
	if (len == 0)
		return;
	x /= len;
	y /= len;
	z /= len;
}


//multiply this vector by a scalar
public void multiply(float num)
{
	x = x * num;
	y = y * num;
	z = z * num;
}

//add another vector to this one
public void add(Vector3D vectorToAddtoThisOne)
{
	x = x + vectorToAddtoThisOne.x;
	y = y + vectorToAddtoThisOne.y;
	z = z + vectorToAddtoThisOne.z;
}

//subtract another vector from this one
public void subtract(Vector3D vectorToAddtoThisOne)
{
	x = x - vectorToAddtoThisOne.x;
	y = y - vectorToAddtoThisOne.y;
	z = z - vectorToAddtoThisOne.z;
}

//copy values
public void copyValuesFrom(Vector3D copyFrom)
{
	x = copyFrom.x;
	y = copyFrom.y;
	z = copyFrom.z;
}

public Vector3f getVector3f()
{
	Vector3f v3f = new Vector3f();
	v3f.x = x;
	v3f.y = y;
	v3f.z = z;

	return v3f;

}

public Vector3D crossProduct(Vector3D b)
{
	Vector3D a = new Vector3D();
	a.copyValuesFrom(this);

	Vector3D c = new Vector3D();
	c.x = a.y * b.z - a.z * b.x;
	c.y = a.z * b.x - a.x * b.z;
	c.z = a.x * b.y - a.y * b.x;

	return c;
}

      // Quaternion getRotationTo(const Vector3& dest,
		//	const Vector3& fallbackAxis = Vector3::ZERO) const
public Quaternion getRotationTo(Vector3D dest, Vector3D fallbackAxis)
{

	// Based on Stan Melax's article in Game Programming Gems
    Quaternion q = new Quaternion();

    Vector3D v0 = new Vector3D();
	v0.copyValuesFrom(this);

	Vector3D v1 = new Vector3D();
    v1.copyValuesFrom(dest);
    v0.normalise();
    v1.normalise();

	float d = v0.dot(v1);

    // If dot == 1, vectors are the same
    if (d >= 1.0f)
    {
		Quaternion qIdentity = new Quaternion();
        return qIdentity;
    }

	if (d < (1e-6f - 1.0f))
	{
		// rotate 180 degrees about the fallback axis
		//System.out.println("same");
		//q.fromAngleAxis((float)java.lang.Math.toRadians(Math.PI),fallbackAxis.getVector3f()); //java.lang.Math.PI;
	}
	else
	{

   		float s = (float)java.lang.Math.sqrt((1 + d) * 2);

		float invs = 1 / s;

		Vector3D c = v0.crossProduct(v1);

		float x = c.x * invs;
		float y = c.y * invs;
		float z = c.z * invs;
		float w = s * 0.5f;

		q.set(x,y,z,w);
		q.normalize();
	}
	return q;
}






}

