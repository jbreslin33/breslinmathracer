package breslin.clientside.command;


/**********************************
*          INCLUDES
**********************************/
//math
import breslin.math.Vector3D;

public class Command
{

public Command()
{
	mPosition     = new Vector3D();
	mRotation = new Vector3D();
	mVelocity          = new Vector3D();
	mRotationSpeed = 0.0f;
	mFrameTime = 0;
}

/**************************************************
*			VARIABLES
**************************************************/
public Vector3D mPosition;
public Vector3D mRotation;
public Vector3D mVelocity;	
public float mRotationSpeed;
public int mFrameTime;
/**************************************************
*			METHODS
**************************************************/

}
