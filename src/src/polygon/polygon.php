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
                this.mCollidable = true;
                this.mCollisionOn = true;

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
	},

	/****** COLLISION ******************/
	onCollision: function(col)
	{
	},

	checkForOutOfBounds: function()
	{
        },

	/****** MOUNTING ******************/
	createMountPoint: function(slot,x,y)
	{
	},	

	mount: function(mountee,slot)
	{
	},

	mountedBy: function(mounter,slot)
	{
	},

	unMount: function(slot)
	{
	},

	setMountable: function(b)
	{
	},

	/************ UPDATE ****************/
	update: function(delta)
	{
	},
 
	/********* VELOCITY ******************/
	updateVelocity: function(delta)
	{
	},
	
	/********* POSITION ******************/
	updatePosition: function()
	{
	},

	setPosition: function(x,y)
	{
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
	},

	getTimeoutShape: function()
	{
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
