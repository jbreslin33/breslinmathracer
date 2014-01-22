<?php
session_start();
?>

var Game = new Class(
{
	initialize: function(application)
        {
		this.mApplication = application;

		/******* QUIZ **************/
		this.mQuiz = new Quiz(this);
                this.mUserAnswer = '';
	
		/********* SHAPES *******************/ 
		//shape Array
       		this.mShapeArray = new Array();
		
		//create control object
                this.mControlObject = 0;

		/************ SCORE *******/
		this.mScore = 0;
		this.mScoreNeeded = 0;
		this.mKilled = false;

		// may get rid of later and just use mOn
		this.timeWarning = false;

		//bar
              	this.mCorrectAnswerBarHeader = 0;
                this.mCorrectAnswerBar = 0;

                //level passed
                this.mShowLevelPassedStartTime = 0;
                this.mShowLevelPassedThresholdTime = 10000;
                
		/**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
		this.mGameTime = 0;

                //answers
                this.mThresholdTime = 3000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;

		//clock shape
                this.mClockShape = 0;

                //memorize shape
                this.mMemorizeShape = 0;

                //show correct
                this.mCorrectAnswerStartTime = 0;
                this.mCorrectAnswerThresholdTime = 10000;

		/********* BOUNDS *******************/ 
                //create bounds
                this.mBounds = new Bounds(60,735,380,35);

		//keys
		this.mKeysOn = true;
	
		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_GAME                       = new GLOBAL_GAME       (this);
                this.mINIT_GAME                         = new INIT_GAME         (this);
                this.mNORMAL_GAME                       = new NORMAL_GAME       (this);
                this.mLEVEL_PASSED                      = new LEVEL_PASSED      (this);
                this.mSHOW_LEVEL_PASSED                 = new SHOW_LEVEL_PASSED (this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_GAME);
                this.mStateMachine.changeState(this.mINIT_GAME);

        },
 	
	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	destructor: function()
	{
		//shapes and array
		this.destroyShapes();
	
		//correctanswerbar
		this.destroyCorrectAnswerBar();
	
		//bounds
		this.mBounds = 0;

		//states
		this.mStateMachine = 0;
		this.mGLOBAL_GAME = 0;
		this.mINIT_GAME = 0;
		this.mNORMAL_GAME = 0;
	},

	reset: function()
        {
                /************ SCORE *******/
                this.setScore(0);
		this.mKilled = false;

                /**************** TIME ************/
                this.timeWarning = false;
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
                this.mGameTime = 0;

		this.createQuestions();
                this.createWorld();
        },

	createQuestions: function()
	{
		//first reset quiz...before you create any questions...
		this.mQuiz.reset();

		this.createQuestionShapes();

	},

	createQuestionShapes: function()
	{
		//fake virtual	
	},

	showQuestion: function()
	{
                if (this.mInputPad)
                {
                        this.mInputPad.showQuestion();
                }

  		//should this go higher up the chain..will it be standard...
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                //if any shapes...
		if (this.mQuiz)
		{
			if (this.mQuiz.getQuestion())
			{
                		this.mQuiz.getQuestion().showShapes();
			}
		}
	},

	destroyShapes: function()
	{
		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //back to div
                        this.mShapeArray[i].mDiv.mDiv.removeChild(this.mShapeArray[i].mMesh);
                        document.body.removeChild(this.mShapeArray[i].mDiv.mDiv);
                	this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
	},

	update: function()
        {
                this.mStateMachine.update();
        },

	createWorld: function()
	{
		//correctAnswerBar
		this.createCorrectAnswerBar();
	},

	createVictoryShapes: function()
	{
 		//victory shapes
                this.mVictoryShape_0 = new ShapeVictory(50,50,100,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_0);

                this.mVictoryShape_1 = new ShapeVictory(50,50,100,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_1);

                this.mVictoryShape_2 = new ShapeVictory(50,50,150,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_2);

                this.mVictoryShape_3 = new ShapeVictory(50,50,200,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_3);

                this.mVictoryShape_4 = new ShapeVictory(50,50,250,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_4);

                this.mVictoryShape_5 = new ShapeVictory(50,50,300,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_5);

                this.mVictoryShape_6 = new ShapeVictory(50,50,350,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_6);

                this.mVictoryShape_7 = new ShapeVictory(50,50,400,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_7);

                this.mVictoryShape_8 = new ShapeVictory(50,50,450,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_8);

                this.mVictoryShape_9 = new ShapeVictory(50,50,500,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_9);

                this.mVictoryShape_10 = new ShapeVictory(50,50,550,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_10);

                this.mVictoryShape_11 = new ShapeVictory(50,50,600,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_11);
  
		this.mVictoryShape_12 = new ShapeVictory(50,50,650,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_12);

                this.mVictoryShape_13 = new ShapeVictory(50,50,700,300,this,"/images/bus/kid.png","","");
                this.mShapeArray.push(this.mVictoryShape_13);
	},
			
	/*********************** PUBLIC ***************************/
	getControlObject: function()
	{
		return this.mControlObject;
	},

	/**************** ADD METHODS *************/
	addToShapeArray: function(shape)
	{
		this.mShapeArray.push(shape);
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

	/****************************** PROTECTED ***************************************/
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

	//CHECK MOUSE
	checkMouse: function()
	{
                if (APPLICATION.mLeftMouseDown == true)
		{
		}
	},

        saveOldPositions: (function()
        {
                //save old positions
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //record old position to use for collisions or whatever you fancy
                        this.mShapeArray[i].mPositionOld.mX = this.mShapeArray[i].mPosition.mX;
                        this.mShapeArray[i].mPositionOld.mY = this.mShapeArray[i].mPosition.mY;
                        this.mShapeArray[i].mPositionRenderOld.mX = this.mShapeArray[i].mPositionRender.mX;
                        this.mShapeArray[i].mPositionRenderOld.mY = this.mShapeArray[i].mPositionRender.mY;
                }
        }).protect(),

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

        getScore: function()
        {
                return this.mScore;
        },

        setScore: function(score)
        {
                this.mScore = score;
                APPLICATION.mHud.mScore.setText('<font size="2">Score: ' + this.mScore + '</font>');
        },

	setScoreNeeded: function(scoreNeeded)
	{
		this.mScoreNeeded = scoreNeeded;	
                this.mApplication.mHud.setScoreNeeded(scoreNeeded);
	},

        incrementScore: function()
        {
                this.mScore++;
                APPLICATION.mHud.mScore.setText('<font size="2"> Score : ' + this.mScore + '</font>');
        },
  
	showCorrectAnswerBar: function()
        {
                this.mCorrectAnswerBarHeader.setVisibility(true);
                this.mCorrectAnswerBar.setVisibility(true);
        },

        hideCorrectAnswerBar: function()
        {
                this.mCorrectAnswerBar.setVisibility(false);
                this.mCorrectAnswerBarHeader.setVisibility(false);

		this.resetCorrectAnswerBar();
        },
        
	resetCorrectAnswerBar: function()
	{
 		this.mCorrectAnswerBarHeader.mMesh.value = '';
        	this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        	this.mCorrectAnswerBar.mMesh.value = '';
        	this.mCorrectAnswerBar.mMesh.innerHTML = '';
	},

        destroyCorrectAnswerBar: function()
        {
		if (this.mCorrectAnswerBarHeader)
		{
                	this.mCorrectAnswerBarHeader.mDiv.mDiv.removeChild(this.mCorrectAnswerBarHeader.mMesh);
                	document.body.removeChild(this.mCorrectAnswerBarHeader.mDiv.mDiv);
                	this.mCorrectAnswerBarHeader = 0;
		}
		if (this.mCorrectAnswerBar)
		{
                	this.mCorrectAnswerBar.mDiv.mDiv.removeChild(this.mCorrectAnswerBar.mMesh);
                	document.body.removeChild(this.mCorrectAnswerBar.mDiv.mDiv);
                	this.mCorrectAnswerBar = 0;
		}
        },
 
	createCorrectAnswerBar: function()
        {
                //question bar header
		if (!this.mCorrectAnswerBarHeader)
		{
                	this.mCorrectAnswerBarHeader = new Shape(150,50,300,50,this,"","","");
                	this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
		}

                //question bar
		if (!this.mCorrectAnswerBar)
		{
                	this.mCorrectAnswerBar = new Shape(150,50,300,100,this,"","","");
                	this.mCorrectAnswerBar.mMesh.innerHTML = '';
		}
       	},

	showClockShape: function()
	{
		this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'GO FASTER!';
        	this.mClockShape.setVisibility(true);
	},

	levelPassedEnter: function()
	{

	},

	levelPassedExecute: function()
	{

	},
	
	levelPassedExit: function()
	{

	},
		
	showLevelPassedEnter: function()
	{
 		this.mShowLevelPassedStartTime = this.mTimeSinceEpoch;

		//get rid of everything...
		this.destroyShapes();

		//create victory shapes...
		this.createVictoryShapes();

                //correctAnswer
                this.mCorrectAnswerBarHeader.mMesh.value = '';
                this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
                this.mCorrectAnswerBar.mMesh.value = '';
                this.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';
                this.showCorrectAnswerBar();
	},
	showLevelPassedExecute: function()
	{

	},
	showLevelPassedExit: function()
	{
		
		//lets get a fresh start with shapes.
		this.destroyShapes();
		
		this.hideCorrectAnswerBar();
                this.mCorrectAnswerBarHeader.mMesh.value = '';
                this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
                this.mCorrectAnswerBar.mMesh.value = '';
                this.mCorrectAnswerBar.mMesh.innerHTML = '';
	},

	normalGameExecute: function()
	{
		//states
       		//get time since epoch and set lasttime
        	e = new Date();
        	this.mLastTimeSinceEpoch = this.mTimeSinceEpoch;
        	this.mTimeSinceEpoch = e.getTime();

        	//set deltatime as function of timeSinceEpoch and LastTimeSinceEpoch diff
        	this.mDeltaTime = this.mTimeSinceEpoch - this.mLastTimeSinceEpoch;

        	if(this.mDeltaTime < 50000)
        	{
                	this.mGameTime = this.mGameTime + this.mDeltaTime;
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

        	//save old positions
        	this.saveOldPositions();
	}

});
