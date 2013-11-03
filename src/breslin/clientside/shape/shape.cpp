//header
#include "shape.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//applicationBreslin
#include "../application/applicationBreslin.h"

//game
#include "../game/game.h"

//command
#include "../command/command.h"

//math
#include "../../math/vector3D.h"

//byteBuffer
#include "../bytebuffer/byteBuffer.h"

//ObjectTitle
#include "../billboard/objectTitle.h"

//rotation
#include "../rotation/rotation.h"

//move
#include "../move/move.h"

//animatin
#include "../animation/abilityAnimationOgre.h"

//


Shape::Shape(ApplicationBreslin* application, ByteBuffer* byteBuffer, bool isGhost)
{
	mEntity = NULL;

	mRotation = NULL;
	mMove = NULL;

	mIsGhost = isGhost;

	//applicationBreslin
	mApplication = application;

	//commands
	mServerCommandLast    = new Command();
	mServerCommandCurrent = new Command();
	mCommandToRunOnShape  = new Command();
	//speed
	mSpeed = 0.0f;
	mSpeedMax  = 1.66f;

	mVelocity = new Vector3D();

	//spawn orientation
	mSpawnPosition     = new Vector3D();
	mSpawnRotation     = new Vector3D();

	//process Spawn ByteBuffer
	processSpawnByteBuffer(byteBuffer);

	//animation
	if (mAnimate)
	{
		mAbilityAnimationOgre = new AbilityAnimationOgre(this);
	}
	
	//title
	mObjectTitle = NULL;

	//ghost
	mGhost = NULL;

	if (!mIsGhost) 
	{
		setupTitle();

		//create a ghost for this shape
		mGhost = new Shape(mApplication,byteBuffer,true);
		mGhost->setVisible(false);
	}

}
Shape::~Shape()
{
	LogString("Destructor for Shape:%d",mIndex);
	//delete mServerCommandLast;
	//delete mServerCommandCurrent;
	//delete mCommandToRunOnShape;
}

void Shape::setText(ByteBuffer* byteBuffer)
{
	mText.clear();

        //text
        int length = byteBuffer->ReadByte();
        for (int i = 0; i < length; i++)
        {
                char c =  byteBuffer->ReadByte();
                mText.append(1,c);
        }

        if (mText.compare(mTextLast) != 0)
        {
		clearTitle(); //empty title string so it can be filled anew

        	std::string s;

        	s.append(mStringUsername);
        	s.append(":");
        	s.append(mText);

        	setTitle(s);

                mTextLast = mText;
        }
}

void Shape::setText(std::string string)
{
        mText.clear();
	mText.append(string);
        clearTitle(); //empty title string so it can be filled anew
        appendToTitle(mText);
}

/*********************************
		SPAWN
******************************/

void Shape::processSpawnByteBuffer(ByteBuffer* byteBuffer)
{
	parseSpawnByteBuffer(byteBuffer);
	spawnShape(mSpawnPosition);
}

void Shape::parseSpawnByteBuffer(ByteBuffer* byteBuffer)
{
	byteBuffer->BeginReading();
	byteBuffer->ReadByte(); //should read -103 to add a shape..
	mLocal	=    byteBuffer->ReadByte();
	if (mLocal == 1)
	{
		if (!mIsGhost)
		{
			LogString("mControlObject set..");
			mApplication->mGame->mControlObject = this;
		}
	}	
	mIndex	=    byteBuffer->ReadShort();

	mSpawnPosition->x =   byteBuffer->ReadFloat();
	mSpawnPosition->y =   byteBuffer->ReadFloat();
	mSpawnPosition->z =   byteBuffer->ReadFloat();
	
	mSpawnRotation->x = byteBuffer->ReadFloat();
	mSpawnRotation->z = byteBuffer->ReadFloat();
	
	//mesh
	mMeshCode    = byteBuffer->ReadByte();
	
	//figure out mesh based on code passed in byteBuffer
	mMeshName = getMeshString(mMeshCode);

	//animate
	mAnimate = byteBuffer->ReadByte();

	//username
        int length = byteBuffer->ReadByte();
       	for (int i = 0; i < length; i++)
        {
        	char c =  byteBuffer->ReadByte();
                mStringUsername.append(1,c);
        }

	//set name and score in title
        std::string s;
        s.append(mStringUsername);
        s.append(":");
        s.append(StringConverter::toString(mCommandToRunOnShape->mScore));
        setText(s);

	//should I set the commands mServerCommandLast and mServerCommandCurrent here?
	mServerCommandLast->mPosition->copyValuesFrom(mSpawnPosition);
	mServerCommandCurrent->mPosition->copyValuesFrom(mSpawnPosition);
}

void Shape::spawnShape(Vector3D* position)
{
	createColourCube();
	//ColourCubematerial
	MaterialPtr material = MaterialManager::getSingleton().create(
        "Test/ColourTest", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME);
	material->getTechnique(0)->getPass(0)->setVertexColourTracking(TVC_AMBIENT);

	/*********  create shape ***************/
	if (mIsGhost)
	{
		mIndex = mIndex * -1;
	}	

	mName         = StringConverter::toString(mIndex);
	mSceneNode    = mApplication->getSceneManager()->getRootSceneNode()->createChildSceneNode();

	//set Starting position of sceneNode, we will attach our mesh to this. this is all that's needed for static shapes. actually we need to add
	//rotation for them
	mSceneNode->setPosition(position->x,position->y,position->z);	
	
	//create mesh
	if (!mEntity)
	{
		mEntity = mApplication->getSceneManager()->createEntity(mName, mMeshName);
	}
	mEntity->setMaterialName("Test/ColourTest");

	//attache mesh to scenenode, henceforward we will use mSceneNode to control shape.
    	mSceneNode->attachObject(mEntity);

	//for scale, won't be needed in future hopefully...
	Vector3D v;
	v.x = mScale;
	v.y = mScale;
	v.z = mScale;
	scale(v);

Ogre::MaterialPtr m_pMat = mEntity->getSubEntity(0)->getMaterial();
m_pMat->getTechnique(0)->getPass(0)->setAmbient(1, 0, 0);
m_pMat->getTechnique(0)->getPass(0)->setDiffuse(1, 0, 0, 0);
mEntity->setMaterialName(m_pMat->getName());

}

/*********************************
		DELTA
******************************/

void Shape::processDeltaByteBuffer(ByteBuffer* byteBuffer)
{
/*
	clearTitle(); //empty title string so it can be filled anew
	
	std::string s;

	s.append(mStringUsername);
	s.append(":");
	s.append(StringConverter::toString(mIndex));
 
	appendToTitle(s);

	//clearTitle();
	//appendToTitle(mText);
*/	

	parseDeltaByteBuffer(byteBuffer);

	if (mAbilityAnimationOgre) 	
	{
		mAbilityAnimationOgre->processTick();	
	}
	mRotation->processTick();
	mMove->processTick();

	//run billboard here for now.
	if (!mIsGhost)
	{
		drawTitle();
	}
}

int Shape::parseDeltaByteBuffer(ByteBuffer *mes)
{
        int flags = 0;

        bool moveXChanged = true;
        bool moveYChanged = true;
        bool moveZChanged = true;

        // Flags
        flags = mes->ReadByte();

        // Origin
        if(flags & mCommandOriginX)
        {
                mServerCommandLast->mPosition->x = mServerCommandCurrent->mPosition->x;
                mServerCommandCurrent->mPosition->x = mes->ReadFloat();         
        }
        else
        {
                moveXChanged = false;
        }

        if(flags & mCommandOriginY)
        {
                mServerCommandLast->mPosition->y = mServerCommandCurrent->mPosition->y;
                mServerCommandCurrent->mPosition->y = mes->ReadFloat();
        }
        else
        {
                moveYChanged = false;
        }

        if(flags & mCommandOriginZ)
        {
                mServerCommandLast->mPosition->z = mServerCommandCurrent->mPosition->z;
                mServerCommandCurrent->mPosition->z = mes->ReadFloat(); 
        }
        else
        {
                moveZChanged = false;
        }

        //rotation
        if(flags & mCommandRotationX)
        {
                mServerCommandLast->mRotation->x = mServerCommandCurrent->mRotation->x;
                mServerCommandCurrent->mRotation->x = mes->ReadFloat();
		
        }

        if(flags & mCommandRotationZ)
        {
                mServerCommandLast->mRotation->z = mServerCommandCurrent->mRotation->z;
                mServerCommandCurrent->mRotation->z = mes->ReadFloat();
        }

        //frame time
       // if (flags & mApplication->mGame->mCommandFrameTime)
        //{
                mServerCommandCurrent->mFrameTime = mApplication->mGame->mFrameTimeServer;
                mCommandToRunOnShape->mFrameTime = mServerCommandCurrent->mFrameTime;
       // }

	if (flags & mCommandScore)
	{
                mServerCommandCurrent->mScore = mes->ReadByte();
		mCommandToRunOnShape->mScore = mServerCommandCurrent->mScore;
	
		 //set name and score in title
                std::string s;
                s.append(mStringUsername);
                s.append(":");
                s.append(StringConverter::toString(mCommandToRunOnShape->mScore));
                setText(s);
	}
	if (flags & mCommandDeltaCode)
	{
		mServerCommandCurrent->mDeltaCode = mes->ReadByte();
		mCommandToRunOnShape->mDeltaCode = mServerCommandCurrent->mDeltaCode;
		if (mCommandToRunOnShape->mDeltaCode == mApplication->mMessageGameStart)
		{
			LogString("mMessageGameStart FOUND!!!!!!!!!!");
		}
		if (mCommandToRunOnShape->mDeltaCode == mApplication->mMessageGameEnd)
		{
			LogString("mMessageGameEnd FOUND!!!!!!!!!!");
		}
	}
	
        if (mServerCommandCurrent->mFrameTime != 0) 
        {
                //position
                if (moveXChanged)
                {
                        mServerCommandCurrent->mVelocity->x = mServerCommandCurrent->mPosition->x - mServerCommandLast->mPosition->x;
	       }
                else
                {
                        mServerCommandCurrent->mVelocity->x = 0.0;
                }
                
                if (moveYChanged)
                {
                        mServerCommandCurrent->mVelocity->y = mServerCommandCurrent->mPosition->y - mServerCommandLast->mPosition->y;
                }
                else
                {
                        mServerCommandCurrent->mVelocity->y = 0.0;
                }

                if (moveZChanged)
                {
                        mServerCommandCurrent->mVelocity->z = mServerCommandCurrent->mPosition->z - mServerCommandLast->mPosition->z;
                }
                else
                {
                        mServerCommandCurrent->mVelocity->z = 0.0;
                }
        }
	
	mCommandToRunOnShape->mVelocity->copyValuesFrom(mServerCommandCurrent->mVelocity);

       //	LogString("x:%f",mServerCommandCurrent->mVelocity->x);         
       	//LogString("z:%f",mServerCommandCurrent->mVelocity->z);         

        return flags;
}

void Shape::interpolateTick(float renderTime)
{
	if (mAnimate)
	{	
		mAbilityAnimationOgre->interpolateTick(renderTime);
	}
	mRotation->interpolateTick(renderTime);
	mMove->interpolateTick(renderTime);
}

void Shape::moveGhostShape()
{
	Vector3D transVector;

	transVector.x = mServerCommandCurrent->mPosition->x;
	transVector.y = 0;
	transVector.z = mServerCommandCurrent->mPosition->z;

	if (mGhost)
	{
		mGhost->setPosition(transVector);
	}
}
/********************************************************
*
*		OGRE_SPECIFIC PRIVATE
*
*********************************************************/

void Shape::setupTitle()
{
	/*********  setup title/billboard ***************/
	const Ogre::String& titlename = "tn" + StringConverter::toString(mIndex);
	const Ogre::String& title = "ti" + StringConverter::toString(mIndex);
	const Ogre::String& fontName = "SdkTrays/Caption";
	const Ogre::ColourValue& color = Ogre::ColourValue::White;
	mObjectTitle = new ObjectTitle
	(titlename, mEntity, mApplication->getSceneManager()->getCamera("PlayerCam"), title,
    fontName, color);
}

void Shape::scale(Vector3D scaleVector)
{
	getSceneNode()->scale(scaleVector.x, scaleVector.y, scaleVector.z);
}

void Shape::checkExtents(Vector3D min)
{

	Ogre::Vector3 max;
	max = Ogre::Vector3::UNIT_SCALE;

	assert( (min.x <= max.x && min.y <= max.y && min.z <= max.z) &&
                "you have a problem with a vector maybe dividing by zero or a garbage value!" );

			//mExtent = EXTENT_FINITE;
			//mMinimum = min;
			//mMaximum = max;
}
void Shape::setRotation(Vector3D* vector3D)
{
	Vector3 vec;
	vec.x = vector3D->x;
	vec.y = vector3D->y;
	vec.z = vector3D->z;
	getSceneNode()->setDirection(vec,Ogre::Node::TS_WORLD);
}

Vector3D* Shape::getRotation()
{
	Vector3D* vector3D = new Vector3D();
	vector3D->convertFromVector3(getSceneNode()->getOrientation().zAxis());
	
	return vector3D;
}

void Shape::yaw(float amountToYaw, bool convertToDegree)
{
	if (convertToDegree)
	{
		getSceneNode()->yaw(Degree(amountToYaw));
		//1 = due west, -1 = due east, 0 = due south, -2 due east, 2 = due west
		Vector3 direction;
		direction.x = 1; //southwest
		direction.y = 0;
		direction.z = -1; 

		direction.normalise();
	}
}



void Shape::translate(Vector3D* translateVector, int perspective)
{
	if (perspective == 1)
	{
		getSceneNode()->translate(translateVector->convertToVector3(), Ogre::Node::TS_WORLD);
	}
	if (perspective == 2)
	{
		getSceneNode()->translate(translateVector->convertToVector3(), Ogre::Node::TS_LOCAL);
	}
}

void Shape::setPosition(Vector3D position)
{
	getSceneNode()->setPosition(position.convertToVector3());
}

void Shape::setPosition(float x, float y, float z)
{
	getSceneNode()->setPosition(x,y,z);
}

Vector3D* Shape::getPosition()
{
	Vector3D* position = new Vector3D();
	position->x = getSceneNode()->getPosition().x;
	position->y = getSceneNode()->getPosition().y;
	position->z = getSceneNode()->getPosition().z;
	return position;
}

void Shape::setVisible(bool visible)
{
	getSceneNode()->setVisible(visible);
	if (mObjectTitle)
	{
		mObjectTitle->setVisible(visible);
	}
}

//title

void Shape::drawTitle()
{
	mObjectTitle->setTitle(mObjectTitleString); 
	mObjectTitle->update();
}
void Shape::appendToTitle(std::string appendage)
{
	mObjectTitleString.append(appendage);
}

void Shape::appendToTitle(int appendage)
{
	mObjectTitleString.append(StringConverter::toString(appendage));
}

void Shape::setTitle(std::string title)
{
	mObjectTitleString.clear();
	mObjectTitleString.append(title);
}

void Shape::clearTitle()
{
	mObjectTitleString.clear();
}

std::string Shape::getMeshString(int meshCode)
{
	if (meshCode == 0)
		
	{
		//this cube is exactly 1 ogre world unit. Which I take to be 1 meter.
		mScale = .07f;
		return "cube.mesh";
	}
	if (meshCode == 1)
	{
		mScale = 1.50f;
		return "sinbad.mesh";
	}
	if (meshCode == 2)
	{
		mScale = .035f;
		return "ColourCube";
	}
	return "cube.mesh";
}
void Shape::createColourCube()
{
    /// Create the mesh via the MeshManager
    Ogre::MeshPtr msh = MeshManager::getSingleton().createManual("ColourCube", "General");
 
    /// Create one submesh
    SubMesh* sub = msh->createSubMesh();
 
    const float sqrt13 = 0.577350269f; /* sqrt(1/3) */
 
    /// Define the vertices (8 vertices, each consisting of 2 groups of 3 floats
    const size_t nVertices = 8;
    const size_t vbufCount = 3*2*nVertices;
    float vertices[vbufCount] = {
            -100.0,100.0,-100.0,        //0 position
            -sqrt13,sqrt13,-sqrt13,     //0 normal
            100.0,100.0,-100.0,         //1 position
            sqrt13,sqrt13,-sqrt13,      //1 normal
            100.0,-100.0,-100.0,        //2 position
            sqrt13,-sqrt13,-sqrt13,     //2 normal
            -100.0,-100.0,-100.0,       //3 position
            -sqrt13,-sqrt13,-sqrt13,    //3 normal
            -100.0,100.0,100.0,         //4 position
            -sqrt13,sqrt13,sqrt13,      //4 normal
            100.0,100.0,100.0,          //5 position
            sqrt13,sqrt13,sqrt13,       //5 normal
            100.0,-100.0,100.0,         //6 position
            sqrt13,-sqrt13,sqrt13,      //6 normal
            -100.0,-100.0,100.0,        //7 position
            -sqrt13,-sqrt13,sqrt13,     //7 normal
    };
 
    RenderSystem* rs = Root::getSingleton().getRenderSystem();
    RGBA colours[nVertices];
    RGBA *pColour = colours;
    // Use render system to convert colour value since colour packing varies
   // rs->convertColourValue(ColourValue(1.0,0.0,0.0), pColour++); //0 colour

//    rs->convertColourValue(ColourValue(1.0,1.0,0.0), pColour++); //1 colour
  //  rs->convertColourValue(ColourValue(0.0,1.0,0.0), pColour++); //2 colour
   // rs->convertColourValue(ColourValue(0.0,0.0,0.0), pColour++); //3 colour
    //rs->convertColourValue(ColourValue(1.0,0.0,1.0), pColour++); //4 colour
    //rs->convertColourValue(ColourValue(1.0,1.0,1.0), pColour++); //5 colour
    //rs->convertColourValue(ColourValue(0.0,1.0,1.0), pColour++); //6 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour
    rs->convertColourValue(ColourValue(0.0,0.0,1.0), pColour++); //7 colour

    /// Define 12 triangles (two triangles per cube face)
    /// The values in this table refer to vertices in the above table
    const size_t ibufCount = 36;
    unsigned short faces[ibufCount] = {
            0,2,3,
            0,1,2,
            1,6,2,
            1,5,6,
            4,6,5,
            4,7,6,
            0,7,4,
            0,3,7,
            0,5,1,
            0,4,5,
            2,7,3,
            2,6,7
    };
 
    /// Create vertex data structure for 8 vertices shared between submeshes
    msh->sharedVertexData = new VertexData();
    msh->sharedVertexData->vertexCount = nVertices;
 
    /// Create declaration (memory format) of vertex data
    VertexDeclaration* decl = msh->sharedVertexData->vertexDeclaration;
    size_t offset = 0;
    // 1st buffer
    decl->addElement(0, offset, VET_FLOAT3, VES_POSITION);
    offset += VertexElement::getTypeSize(VET_FLOAT3);
    decl->addElement(0, offset, VET_FLOAT3, VES_NORMAL);
    offset += VertexElement::getTypeSize(VET_FLOAT3);
    /// Allocate vertex buffer of the requested number of vertices (vertexCount) 
    /// and bytes per vertex (offset)
    HardwareVertexBufferSharedPtr vbuf = 
        HardwareBufferManager::getSingleton().createVertexBuffer(
        offset, msh->sharedVertexData->vertexCount, HardwareBuffer::HBU_STATIC_WRITE_ONLY);
    /// Upload the vertex data to the card
    vbuf->writeData(0, vbuf->getSizeInBytes(), vertices, true);
 
    /// Set vertex buffer binding so buffer 0 is bound to our vertex buffer
    VertexBufferBinding* bind = msh->sharedVertexData->vertexBufferBinding; 
    bind->setBinding(0, vbuf);
 
    // 2nd buffer
    offset = 0;
    decl->addElement(1, offset, VET_COLOUR, VES_DIFFUSE);
    offset += VertexElement::getTypeSize(VET_COLOUR);
    /// Allocate vertex buffer of the requested number of vertices (vertexCount) 
    /// and bytes per vertex (offset)
    vbuf = HardwareBufferManager::getSingleton().createVertexBuffer(
        offset, msh->sharedVertexData->vertexCount, HardwareBuffer::HBU_STATIC_WRITE_ONLY);
    /// Upload the vertex data to the card
    vbuf->writeData(0, vbuf->getSizeInBytes(), colours, true);
 
    /// Set vertex buffer binding so buffer 1 is bound to our colour buffer
    bind->setBinding(1, vbuf);
 
    /// Allocate index buffer of the requested number of vertices (ibufCount) 
    HardwareIndexBufferSharedPtr ibuf = HardwareBufferManager::getSingleton().
        createIndexBuffer(
        HardwareIndexBuffer::IT_16BIT, 
        ibufCount, 
        HardwareBuffer::HBU_STATIC_WRITE_ONLY);
 
    /// Upload the index data to the card
    ibuf->writeData(0, ibuf->getSizeInBytes(), faces, true);
 
    /// Set parameters of the submesh
    sub->useSharedVertices = true;
    sub->indexData->indexBuffer = ibuf;
    sub->indexData->indexCount = ibufCount;
    sub->indexData->indexStart = 0;
 
    /// Set bounding information (for culling)
    msh->_setBounds(AxisAlignedBox(-100,-100,-100,100,100,100));
    msh->_setBoundingSphereRadius(Math::Sqrt(3*100*100));
 
    /// Notify -Mesh object that it has been loaded
    msh->load();
}
