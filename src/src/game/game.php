var Game = new Class(
{
	initialize: function(application)
        {
		this.mApplication = application;
		
		//logs
		this.mStateLogs = false;
	
		//left over variable from old code but still needed until we make full switch	
		this.mReadyForNormalApplication = false;

		/********* SHAPES *******************/ 
		//shape Array
       		this.mShapeArray = new Array();

		//create control object
                this.mControlObject = 0;

		/************ SCORE *******/
		this.mScore = 0;
		this.mKilled = false;

		/**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
                this.mScrollTime = 0;
		this.mGameTime = 0;

		/********* BOUNDS *******************/ 
                this.mBounds = new Bounds(60,735,380,35);

		/********* KEYS *******************/ 
		this.mKeysOn = true;
	
		/********* STATES *******************/ 
                this.mStateMachine = new StateMachine(this);

                this.mGLOBALGAME                       = new GLOBALGAME       (this);
                this.mINITGAME                         = new INITGAME         (this);
                this.mNORMALGAME                       = new NORMALGAME       (this);
               
                this.mStateMachine.setGlobalState(this.mGLOBALGAME);
                this.mStateMachine.changeState(this.mINITGAME);
        },

	/******************** ADMIN *************/	
	update: function()
        {
		//get time since epoch and set lasttime
                e = new Date();
                this.mLastTimeSinceEpoch = this.mTimeSinceEpoch;
                this.mTimeSinceEpoch = e.getTime();

                //set deltatime as function of timeSinceEpoch and LastTimeSinceEpoch diff
                this.mDeltaTime  = this.mTimeSinceEpoch - this.mLastTimeSinceEpoch;

                if(this.mDeltaTime < 50000)
                {
                        this.mGameTime = this.mGameTime + this.mDeltaTime;
			this.mScrollTime = this.mScrollTime + this.mDeltaTime;
                }
		//getScroll
		if (this.mScrollTime > 5000)
		{
			APPLICATION.getScroll();
			this.mScrollTime = 0;
		}

                //check Keys from application
                if (this.mKeysOn)
                {
                        this.checkKeys();
                }

                if (this.mMouseOn)
                {
                        this.checkMouse();
                }

                //move shapes
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].update(this.mDeltaTime);
                }

                //collision Detection
                this.checkForCollisions();

                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].render();
                }



		//state machine
                this.mStateMachine.update();
        },

	destructor: function()
	{
		//shapes and array
		this.destroyShapes();

		//bounds
		this.mBounds = 0;

		//states
		this.mStateMachine = 0;
		this.mGLOBALGAME = 0;
		this.mINITGAME = 0;
		this.mRESETGAME = 0;
		this.mNORMALGAME = 0;
	},

	reset: function()
        {
                /************ SCORE *******/
                this.setScore(0);
		this.mKilled = false;

                /**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
		this.mScrollTime = 0;
                this.mGameTime = 0;

		this.createShapes();
        },

	/********* SHAPES *******************/ 
	getControlObject: function()
	{
		return this.mControlObject;
	},

	addToShapeArray: function(shape)
	{
		this.mShapeArray.push(shape);
	},
	createShapes: function()
	{
		this.destroyShapes();	
	},
	
	addShape: function(shape)
	{
		this.mShapeArray.push(shape);
	},

        //this will clean up all shapes in this item and it will take this items shapes out of game array
        destroyShapes: function()
        {
                //shapes and array
                while (this.mShapeArray.length > 0)
                {
                        shape = this.mShapeArray[0];

                        //destroy it just once at the local(item) level
                        shape.destructor();

                        //remove from item shape array
                        this.removeShape(shape);
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
        },

        removeShape: function(shape)
        {
                //remove from this shape array
                for (r = 0; r < this.mShapeArray.length; r++)
                {
                        if (shape == this.mShapeArray[r])
                        {
                                //first remove it from array...
                                this.mShapeArray.splice(r,1);
                        }
                }
        },

	gameOver: function()
	{
               	for (i = 0; i < this.mShapeArray.length; i++)
		{
                        this.mShapeArray[i].setVisibility(false);
                        this.mShapeArray[i].mCollidable = false;
                        this.mShapeArray[i].mCollisionOn = false;
		}
	},

	/*************** KEYBOARD **************/
	checkKeys: (function()
        {
                //idle
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = 0;
                        	this.mControlObject.mKey.mY = 0;
			}
                }
                //north
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == true && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = 0;
                        	this.mControlObject.mKey.mY = -1;
			}
                }
                //north_east
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == true && APPLICATION.mKeyUp == true && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = .5;
                        	this.mControlObject.mKey.mY = -.5;
			}
                }
                //east
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == true && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = 1;
                       		this.mControlObject.mKey.mY = 0;
			}
                }
                //south_east
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == true && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == true)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = .5;
                        	this.mControlObject.mKey.mY = .5;
			}
                }
                //south
                if (APPLICATION.mKeyLeft == false && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == true)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = 0;
                        	this.mControlObject.mKey.mY = 1;
			}
                }
                //south_west
                if (APPLICATION.mKeyLeft == true && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == true)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = -.5;
                        	this.mControlObject.mKey.mY = .5;
			}
                }
                //west
                if (APPLICATION.mKeyLeft == true && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == false && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = -1;
                        	this.mControlObject.mKey.mY = 0;
			}
                }
                //north_west
                if (APPLICATION.mKeyLeft == true && APPLICATION.mKeyRight == false && APPLICATION.mKeyUp == true && APPLICATION.mKeyDown == false)
                {
			if (this.mControlObject)
			{
                        	this.mControlObject.mKey.mX = -.5;
                        	this.mControlObject.mKey.mY = -.5;
			}
                }
        }).protect(),

	/********************** MOUSE ************/
	checkMouse: function()
	{
                if (APPLICATION.mLeftMouseDown == true)
		{
		}
	},

	/********************** COLLISIONS ************/
	//this is still ineffiecient because it is checking to see if one coin is colliding with another. when neither is moving.	
	checkForCollisions: (function()
        {
                for (s = 0; s < this.mShapeArray.length; s++)
                {
			col1 = this.mShapeArray[s];

			if (this.mShapeArray[s].mCollisionOn == true)
			{
			   	//this should now only loop the first for loop thru objects that have moved. which i think will improve efficiency 
			    	if (col1.mPosition.mX != col1.mPositionOld.mX || 
			        col1.mPosition.mY != col1.mPositionOld.mY)
			    	{
					for (c = 0; c < this.mShapeArray.length; c++)
					{
						col2 = this.mShapeArray[c];
						if (col2 == col1)
						{
							continue;
						}
						if (col2.mCollsionOn == false)
						{
							continue;
						}
						this.collisionCheck(col1,col2);
					}
			   	}
			}
                }
	}).protect(),

	collisionCheck: function(col1,col2)
	{
		if (col2.mCollisionOn == true)
		{
                	var x1 = col1.mPosition.mX;
                       	var y1 = col1.mPosition.mY;

			var x2 = col2.mPosition.mX;
       			var y2 = col2.mPosition.mY;
                
       			var addend1 = x1 - x2;
			addend1 = addend1 * addend1;

                       	var addend2 = y1 - y2;
			addend2 = addend2 * addend2;

                       	var distSQ = addend1 + addend2;
					
                       	var collisionDistance = col1.mCollisionDistance + col2.mCollisionDistance;

                       	if (distSQ < collisionDistance) 
             
			if (col1.getTimeoutShape() != col2 && col2.getTimeoutShape() != col1)
			{
				col2.onCollision(col1);	
				col1.onCollision(col2);	
			}
              	}
	},
	
	getOpenPoint2D: function(xMin,xMax,yMin,yMax,newShapeWidth,spreadFactor)
        {
                while (true)
                {
                        //let's get a random open space...
                        //get the size of the playing field
                        var xSize = xMax - xMin;
                        var ySize = yMax - yMin;

                        //get point that would fall in the size range from above
                        var randomPoint2D = new Point2D( Math.floor( Math.random()*xSize) , Math.floor(Math.random()*ySize));

                        //now add the left and top bounds so that it is on the games actual field
                        randomPoint2D.mX += xMin;
                        randomPoint2D.mY += yMin;

                        //we now need to see if we can make it thru all shapes without a collision
                        var isCollision = false;
                        for (s = 0; s < this.mShapeArray.length; s++)
                        {
                                if (this.mShapeArray[s].mCollidable == true)
                                {
 					var x1 = this.mShapeArray[s].mPosition.mX;
                                        var y1 = this.mShapeArray[s].mPosition.mY;
 
                                        var x2 = randomPoint2D.mX;              
                                        var y2 = randomPoint2D.mY;              
                
                                        var distSQ = Math.pow(x1-x2,2) + Math.pow(y1-y2,2);
                                        var collisionDistanceOfNewShape = newShapeWidth * 6.5;
                                        var collisionDistance = (this.mShapeArray[s].mCollisionDistance + collisionDistanceOfNewShape) * spreadFactor;
                                                
                                        if (distSQ < collisionDistance) 
                                        {
                                                isCollision = true; 
                                        }
                                }
                        }
                        
                        //we have an open point 
                        if (isCollision == false)
                        {
                                return randomPoint2D;
                        }
                } 
        },

	/********************** SCORE ************/
        getScore: function()
        {
                return this.mScore;
        },

        setScore: function(score)
        {
                this.mScore = score;
		if (this.mScore !=  0)
		{
                	APPLICATION.mHud.mScore.setText('<font size="1">Score: ' + this.mScore + '</font>');
		}
        },

        incrementScore: function()
        {
		if (this.mScore !=  0)
		{
                	APPLICATION.mHud.mScore.setText('<font size="1"> Score : ' + this.mScore + '</font>');
		}
        },
  
	//states
	resetGameEnter: function()
	{
		this.reset();
 		this.mStateMachine.changeState(this.mNORMALGAME);
	}
});
