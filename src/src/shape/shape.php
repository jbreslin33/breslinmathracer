var Shape = new Class(
{
        initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
               
		//game so you can know of your world
		this.mGame = game;

		//outOfViewPort
		this.mOutOfViewPort = true;

		//animation 
		this.mAnimation;

		//for the mounter
		this.mMounteeArray = new Array();
		this.mMountPointArray = new Array();	
		this.mStartingMountee = 0;

		//for the mountee
		this.mMountable = false;
		this.mMounter = 0;
		this.mMountPoint = 0;
	
		//timeouts	
		this.mTimeoutShape;
		this.mTimeoutCounter = 0;

		//speed
		this.mSpeed = .1;
		
		//src 
		this.mSrc = src;
               
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
                
		//keys
		this.mKey = new Point2D(0,0);
                
		//background
		this.mBackgroundColor = backgroundColor;
                
		//onclick	
		this.mOnClick;
              
                //create the movable div that will be used to move image around.        
		this.mDiv = new Div(this);

		//collision on or off
		this.mCollidable = true;
		this.mCollisionOn = true;

                //collisionDistance
                this.mCollisionDistance = this.mWidth * 6.5;

                this.mMesh;
        
                //create clientImage
                if (this.mSrc)
                {
                        //image to attach to our div "vessel"
                        this.mMesh  = document.createElement("IMG");
                        this.mMesh.src  = this.mSrc;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
                
		if (this.mSrc == "")//create paragraph
                {
                	this.mMesh = document.createElement("p");
                }
		
                //back to div   
                this.mDiv.mDiv.appendChild(this.mMesh);
       
		//message ..this can be used for collisions or whatever
		this.mMessage = message;

		//hide on drop
		this.mHideOnDrop = false; 
        },

	/****** LOGGING ******************/

        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
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

                //if you have a starting mountee then mount it. this is an attempt to fix mountee bug
                this.mount(this.getStartingMountee(),0);
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
                if (this.mPosition.mY < mBounds.mNorth)
                {
                        this.mPosition.mY = mBounds.mNorth;
                }
                if (this.mPosition.mX > mBounds.mEast)
                {
                        this.mPosition.mX = mBounds.mEast;
                }
                if (this.mPosition.mY > mBounds.mSouth)
                {
                        this.mPosition.mY = mBounds.mSouth;
                }
                if (this.mPosition.mX < mBounds.mWest)
                {
                        this.mPosition.mX = mBounds.mWest;
                }
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

	setStartingMountee: function(mountee)
	{
		this.mStartingMountee = mountee;
	},

	getStartingMountee: function()
	{
		return this.mStartingMountee;
	},
	
	mount: function(mountee,slot)
	{
                if (mountee.mMountable)
                {
                        if (this.mMountPointArray[0])
                        {
                                if (this.mMounteeArray[0])
                                {
                                        this.unMount(0);
                                }

        			if (mountee != this.getTimeoutShape())
                		{
                			//first unmount  if you have something
                        		if (this.mMounteeArray[slot])
                        		{
                        			this.unMount(0);
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
		this.mMounteeArray[slot].setTimeoutShape(this);

		if (this.mMounteeArray[slot].mCollidable)
		{
			this.mMounteeArray[slot].mCollisionOn = true;
		}

		if (this.mMounteeArray[slot].getHideOnDrop())
		{
			this.mMounteeArray[slot].mCollision = false;
			this.mMounteeArray[slot].setVisibility(false);
		}

		this.mMounteeArray[slot].mMounter = 0;
		this.mMounteeArray[slot] = 0;	
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

	/********* ANIMATION ******************/

	updateAnimation: function()
	{
		if (this.mAnimation)
		{	
			this.mAnimation.update();        	
		}
	},

	/********* IMAGES ******************/

	setSrc: function(src)
	{
                //create clientImage
                if (this.mSrc)
                {
                        //image to attach to our div "vessel"
			this.mSrc = src;
                        this.mMesh.src  = src;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 
                }
		else
		{
                        //image to attach to our div "vessel"
			this.mSrc = src;
                        this.mMesh  = document.createElement("IMG");
                        this.mMesh.src  = src;
                        this.mMesh.style.width = this.mWidth+'px'; 
                        this.mMesh.style.height = this.mHeight+'px'; 

		}
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
		if (b)
		{
			if (this.mDiv.mDiv.style.visibility != 'visible')
			{
				this.mDiv.mDiv.style.visibility = 'visible';
			}
		}
		else
		{
			if (this.mDiv.mDiv.style.visibility != 'hidden')
			{
				this.mDiv.mDiv.style.visibility = 'hidden';
			}
		}
	
		//how about your mounted shapes	
		if (this.mMounteeArray[0])
		{
			this.mMounteeArray[0].setVisibility(b);
		}
	},		

	getVisibility: function()
	{
		if (this.mDiv.mDiv.style.visibility == 'visible')
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	setHideOnDrop: function(b)
	{
		this.mHideOnDrop = b;
	},

	getHideOnDrop: function()
	{
		return this.mHideOnDrop;
	},

	/********* TEXT ******************/

	setText: function(t)
	{
		if (this.mMesh.innerHTML != t)
		{
			if (this.mSrc == "")
			{
				this.mMesh.innerHTML = t;
			}
		}
	},

	/********* MESSAGE ******************/

	setMessage: function(message)
	{
		this.mMessage = message;
	},

	/********* COLOR ******************/

	setBackgroundColor: function(c)
	{
		this.mBackgroundColor = c;
		this.mDiv.mDiv.style.backgroundColor = c;
	},

	/*********** RENDER *************/
	
	render: function()
	{
        	//center image relative to position set it to mPositionRender
               	this.mPositionRender.mX = this.mPosition.mX - (this.mWidth / 2);
               	this.mPositionRender.mY = this.mPosition.mY - (this.mHeight / 2);

		//check for new values if so change render of div	
		if (this.mPositionRenderOld.mX != this.mPositionRender.mX)
		{
			modx = this.mPositionRender.mX+'px';	
			this.mDiv.mDiv.style.left = modx;
		}	
		if (this.mPositionRenderOld.mY != this.mPositionRender.mY)
		{
			mody = this.mPositionRender.mY+'px';	
			this.mDiv.mDiv.style.top = mody;
		}
	}

 }); 
