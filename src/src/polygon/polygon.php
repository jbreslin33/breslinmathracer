var Polygon = new Class(
{
        initialize: function(width,height,spawnX,spawnY,game)
        {
  		//game so you can know of your world
                this.mGame = game;

	        //size
                this.mWidth = width;
                this.mHeight = height;

                //position
                this.mPosition      = new Point2D(spawnX,spawnY);
                this.mPositionOld   = new Point2D(spawnX,spawnY);
                this.mPositionSpawn = new Point2D(spawnX,spawnY);
                this.mPositionRender = new Point2D(spawnX,spawnY);
                this.mPositionRenderOld = new Point2D(spawnX,spawnY);

                //velocity
                this.mVelocity = new Point2D(0,0);

                //speed
                this.mSpeed = .1;

                //keys
                this.mKey = new Point2D(0,0);
  
                //collision on or off
                this.mCollidable = false;
                this.mCollisionOn = false;
		this.mOutOfBoundsCheck = true;
	

                //collisionDistance
                this.mCollisionDistance = this.mWidth * 6.5;

                //for the mounter
                this.mMounteeArray = new Array();
                this.mMountPointArray = new Array();

                //for the mountee
                this.mMountable = false;
                this.mMounter = 0;
                this.mMountPoint = 0;

                //timeouts
                this.mTimeoutShape;
                this.mTimeoutCounter = 0;
        },

	/****** LOGGING ******************/
        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	/****** DESTRUCTOR ******************/
	destructor: function()
	{
		
	},

        /****** RESETTING ******************/
        reset: function()
        {
                //set every shape to spawn position
                this.mPosition.mX = this.mPositionSpawn.mX;
                this.mPosition.mY = this.mPositionSpawn.mY;

                if (this.mCollidable == true)
                {
                        this.mCollisionOn = true;
                        this.setVisibility(true);
                }
        },

	/****** COLLISION ******************/
        onCollision: function(col)
        {
                this.mPosition.mX = this.mPositionOld.mX;
                this.mPosition.mY = this.mPositionOld.mY;

                //try to mount
                this.mount(col,0);
        },

        checkForOutOfBounds: function()
        {
		if (this.mOutOfBoundsCheck)
		{
                	if (this.mPosition.mY < this.mGame.mBounds.mNorth)
                	{
                        	this.mPosition.mY = this.mGame.mBounds.mNorth;
                	}
                	if (this.mPosition.mX > this.mGame.mBounds.mEast)
                	{
                        	this.mPosition.mX = this.mGame.mBounds.mEast;
                	}
                	if (this.mPosition.mY > this.mGame.mBounds.mSouth)
                	{
                        	this.mPosition.mY = this.mGame.mBounds.mSouth;
                	}
                	if (this.mPosition.mX < this.mGame.mBounds.mWest)
                	{
                        	this.mPosition.mX = this.mGame.mBounds.mWest;
                	}
		}
        },

	setOutOfBoundsCheck: function(b)
	{
		this.mOutOfBoundsCheck = b;
	},

	/****** MOUNTING ******************/
        createMountPoint: function(slot,x,y)
        {
                this.mMountPointArray[slot] = new Point2D();

                if (navigator.appName == "Microsoft Internet Explorer" || navigator.appName == "Opera")
                {
                        this.mMountPointArray[slot].mX = x;
                        this.mMountPointArray[slot].mY = y;
                }
                else
                {
                        this.mMountPointArray[slot].mX = x;
                        this.mMountPointArray[slot].mY = y - 17;
                }
        },

        mount: function(mountee,slot)
        {
                if (mountee.mMountable)
                {
                        if (this.mMountPointArray[parseInt(slot)])
                        {
                                if (this.mMounteeArray[parseInt(slot)])
                                {
                                        this.unMount(parseInt(slot));
                                }

                                if (mountee != this.getTimeoutShape())
                                {
                                        //first unmount  if you have something
                                        if (this.mMounteeArray[parseInt(slot)])
                                        {
                                                this.unMount(parseInt(slot));
                                        }

                                        //then mount
                                        this.mMounteeArray[slot] = mountee;
                                        this.mMounteeArray[slot].mountedBy(this,slot);
                                }
                        }
                }
        },

        mountedBy: function(mounter,slot)
        {
                this.mCollisionOn = false;
                this.mMounter = mounter;
                this.mMountPoint = slot;
        },

        unMount: function(slot)
        {
                this.mMounteeArray[parseInt(slot)].setTimeoutShape(this);

                if (this.mMounteeArray[parseInt(slot)].mCollidable)
                {
                        this.mMounteeArray[parseInt(slot)].mCollisionOn = true;
                }

                if (this.mMounteeArray[parseInt(slot)].getHideOnDrop())
                {
                        this.mMounteeArray[parseInt(slot)].mCollision = false;
                        this.mMounteeArray[parseInt(slot)].setVisibility(false);
                }

                this.mMounteeArray[parseInt(slot)].mMounter = 0;
                this.mMounteeArray[parseInt(slot)] = 0;
        },

        setMountable: function(b)
        {
                this.mMountable = b;
        },
     
	/************ UPDATE ****************/
        update: function(delta)
        {
                //IF YOU ARE MOUNTED TURN OFF COLLISION
                if (this.mMounter)
                {
                        this.mCollisionOn = false;
                }

                //IF YOU HAVE TIMED OUT ANOTHER SHAPE....
                if (this.mTimeoutShape)
                {
                        this.mTimeoutCounter++;
                        if (this.mTimeoutCounter > 50)
                        {
                                this.mTimeoutShape = 0;
                                this.mTimeoutCounter = 0;
                        }
                }

                this.updateVelocity(delta);
                this.updatePosition();
                this.updateAnimation();

                //IF YOU ARE NOT MOUNTED BY SOMETHING THEN CHECK FOR OUT OF BOUNDS
                if (this.mMounter == 0)
                {
                        this.checkForOutOfBounds();
                }
        },

        /********* VELOCITY ******************/
        updateVelocity: function(delta)
        {
                //update Velocity
                this.mVelocity.mX = this.mKey.mX * delta * this.mSpeed;
                this.mVelocity.mY = this.mKey.mY * delta * this.mSpeed;
        },

        /********* POSITION ******************/
        updatePosition: function()
        {
                //update position
                this.mPosition.mX += this.mVelocity.mX;
                this.mPosition.mY += this.mVelocity.mY;

                //if you have a mounter then move with the mounter with offset
                if (this.mMounter)
                {
                        //set this shape to position of it's mounter
                        this.mPosition.mX = this.mMounter.mPosition.mX;
                        this.mPosition.mY = this.mMounter.mPosition.mY;

                        //offset
                        this.mPosition.mX += this.mMounter.mMountPointArray[this.mMountPoint].mX;
                        this.mPosition.mY += this.mMounter.mMountPointArray[this.mMountPoint].mY;
                }
        },

        setPosition: function(x,y)
        {
                this.mPosition.mX = x;
                this.mPosition.mY = y;
        },

        setSize: function(w,h)
        {
	
        },

	/********* ANIMATION ******************/
	updateAnimation: function()
	{
	},

	/********* IMAGES ******************/
	setSrc: function(src)
	{
	},

        /********* TIMEOUT ******************/
        setTimeoutShape: function(shape)
        {
                this.mTimeoutShape = shape;
        },

        getTimeoutShape: function()
        {
                return this.mTimeoutShape;
        },

	/********* VISIBILITY ******************/
	setVisibility: function(b)
	{
	},		

	getVisibility: function()
	{
	},

	/********* TEXT ******************/
	setText: function(t)
	{
	},

	/********* MESSAGE ******************/
	setMessage: function(message)
	{
	},

	/********* COLOR ******************/
	setBackgroundColor: function(c)
	{
	},

	/*********** RENDER *************/
	render: function()
	{
	}
 }); 
