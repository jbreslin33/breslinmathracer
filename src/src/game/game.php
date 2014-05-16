<?php
session_start();
?>

var Game = new Class(
{
	initialize: function(application)
        {
		this.mApplication = application;

		//loggin
		this.mStateLogs = false;

		/******* QUIZ **************/
		this.mQuiz = new Quiz(this);
                this.mUserAnswer = '';
	
		/********* SHAPES *******************/ 
		//shape Array
       		this.mShapeArray = new Array();

		//total guiBar
		this.mTotalGuiBars = 0;
		this.mTotalInputBars = 19;
		
		//create control object
                this.mControlObject = 0;

		/************ SCORE *******/
		this.mScore = 0;
		this.setScoreNeeded(20);
		this.mKilled = false;

		// may get rid of later and just use mOn
		this.timeWarning = false;

                //level passed
		this.mReadyForNormalApplication = false;

                this.mShowLevelPassedStartTime = 0;
                this.mShowLevelFailedStartTime = 0;

                this.mShowLevelPassedThresholdTime = 10000;
                this.mShowLevelFailedThresholdTime = 10000;

                this.mFailedAttemptsThreshold = 0;

		this.mFirstTimeAnswer = false;
                
		/**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
		this.mGameTime = 0;

                //answers
                this.mThresholdTime = 0;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;

                //memorize shape
                this.mMemorizeShape = 0;

                //show correct
                this.mCorrectAnswerStartTime = 0;
                this.mCorrectAnswerThresholdTime = 5000;
               
		/********* BOUNDS *******************/ 
                //create bounds
                this.mBounds = new Bounds(60,735,380,35);

		//keys
		this.mKeysOn = true;
	
		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_GAME                       = new GLOBAL_GAME       (this);
                this.mINIT_GAME                         = new INIT_GAME         (this);
                this.mRESET_GAME                        = new RESET_GAME        (this);
                this.mNORMAL_GAME                       = new NORMAL_GAME       (this);
                this.mLEVEL_PASSED                      = new LEVEL_PASSED      (this);
               
		//pad states  
                this.mFIRST_TIME   = new FIRST_TIME(this);
                this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
                this.mCORRECT_ANSWER = new CORRECT_ANSWER(this);
                this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
                this.mOUT_OF_TIME = new OUT_OF_TIME(this);

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

		this.mFirstTimeAnswer = false;

		this.createUniverse();
        },
		
	createUniverse: function()
	{
		this.createQuestions();
                this.createWorld();
	},
	
	createWorld: function()
	{
		this.destroyShapes();	
         
		this.createBlankShapes();      
		this.createFranticClock();      
		this.createForget();      
	},

	createFranticClock: function()
	{
		this.mShapeArray.push(new Shape(197,185,425,300,this,"/images/symbols/clock.jpg","",""));
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].setVisibility(false);
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollidable = false;
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollisionOn = false;
		this.mTotalGuiBars++;
	},
	
	createForget: function()
	{
		this.mShapeArray.push(new Shape(197,185,425,300,this,"/images/symbols/dontforget.gif","",""));
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].setVisibility(false);
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollidable = false;
                this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollisionOn = false;
		this.mTotalGuiBars++;
	}, 

	createBlankShapes: function()
	{
		for (i = 0; i < 8; i++)
		{
			this.mShapeArray.push(new Shape(150,50,-300,-300,this,"","",""));
                	this.mShapeArray[parseInt(this.mShapeArray.length - 1)].setVisibility(false);
                	this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollidable = false;
                	this.mShapeArray[parseInt(this.mShapeArray.length - 1)].mCollisionOn = false;
			this.mTotalGuiBars++;
		}
	},

	createQuestions: function()
	{
		//first reset quiz...before you create any questions...
		this.mQuiz.reset();
	},

	showQuestion: function()
	{
		this.log('Game::showQuestion');
		//set all shapes invisible to start semi-clean
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                //if there is a quiz
		if (this.mQuiz)
		{
			if (this.mQuiz.getQuestion())
			{
                		this.mQuiz.getQuestion().showShapes();
 				this.mQuiz.getQuestion().setChoices();
				if (this.mNumQuestion)
				{
                                	this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
				}
			}
		}
	},

	destroyShapes: function()
	{
		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
			this.mShapeArray[i].destructor();
                	this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
		
		this.mTotalGuiBars = 0;
	},

	update: function()
        {
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

		//state machine
                this.mStateMachine.update();
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
  
	showGuiBar: function()
        {
		for (i = 0; i < this.mTotalGuiBars; i++)
		{
                	this.mShapeArray[i].setVisibility(true);
		}
        },

        hideGuiBar: function()
        {
		for (i = 0; i < this.mTotalGuiBars; i++)
		{
                	this.mShapeArray[i].setVisibility(false);
		}

		this.resetGuiBar();
        },
        
	resetGuiBar: function()
	{
               	for (i = 0; i < this.mTotalGuiBars; i++) 	
		{
        		this.mShapeArray[i].mMesh.innerHTML = '';
		}
	},
	
	//states
	resetGameEnter: function()
	{
		this.reset();
 		this.mStateMachine.changeState(this.mNORMAL_GAME);
	},

	levelPassedEnter: function()
	{
		this.mApplication.mLevelCompleted = true;
	
 		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
	
                //user answer
                this.mUserAnswer = '';

                //times
                this.mQuestionStartTime = this.mTimeSinceEpoch; //restart timer
 		this.mShowLevelPassedStartTime = this.mTimeSinceEpoch;

		//create victory shapes...
		this.createVictoryShapes();

                //gui bar
		if (this.mApplication.mLevel == this.mApplication.mLevels)
		{
                	this.mShapeArray[0].setPosition(400,125);
                	this.mShapeArray[0].mMesh.innerHTML = this.mApplication.mFirstName + ' just beat the whole game!';
                	this.mShapeArray[0].setVisibility(true);
		}
		else
		{
                	this.mShapeArray[0].setPosition(400,125);
                	this.mShapeArray[0].mMesh.innerHTML = this.mApplication.mFirstName + ' just beat level ' + this.mApplication.mLevel + ' of this game!';
                	this.mShapeArray[0].setVisibility(true);
		}
	},
  
	levelPassedExecute: function()
        {
                if (this.mTimeSinceEpoch > this.mShowLevelPassedStartTime + this.mShowLevelPassedThresholdTime)
                {
                        this.mStateMachine.changeState(this.mINIT_GAME);
                }
        },
	
	levelPassedExit: function()
	{
		this.mReadyForNormalApplication = true;
	},

	//old pad states
	
	//showCorrectAnswer
       	showCorrectAnswerEnter: function()
        {
        	this.mApplication.mFailedAttempts++;

        	if (this.mApplication.mFailedAttempts > this.mFailedAttemptsThreshold)
        	{
                	this.mApplication.mFailedAttempts = 0;
			this.mApplication.mStateMachine.changeState(this.mApplication.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION);
        	}
        	else
        	{
                	//just update failed attempts by one on javascript and server and db.
                	this.mApplication.sendFailedAttempt();
        	}
	
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[1].setPosition(400,175);
                this.mShapeArray[1].setVisibility(true);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

                this.mShapeArray[9].setVisibility(true);

		//show question shapes
 		this.mQuiz.getQuestion().showShapes();

		this.tip();
	},
	
	tip: function()
	{
		if (this.mQuiz.getQuestion().mTipArray.length > 0) 
		{
                	//tip header
                	this.mShapeArray[2].setPosition(200,150);
                	this.mShapeArray[2].setVisibility(true);
			if (this.mQuiz.getQuestion().mTipArray.length == 1) 
			{
                		this.mShapeArray[2].mMesh.innerHTML = 'Tip:';
			}
			else 
			{
                		this.mShapeArray[2].mMesh.innerHTML = 'Tips:';
			}

			if (this.mQuiz.getQuestion().mTipArray.length > 0) 
			{
                		this.mShapeArray[3].setPosition(200,200);
                		this.mShapeArray[3].setVisibility(true);
                		this.mShapeArray[3].mMesh.innerHTML = '' + this.mQuiz.getQuestion().mTipArray[0];
			}
			if (this.mQuiz.getQuestion().mTipArray.length > 1) 
			{
                		this.mShapeArray[4].setPosition(200,300);
                		this.mShapeArray[4].setVisibility(true);
                		this.mShapeArray[4].mMesh.innerHTML = '' + this.mQuiz.getQuestion().mTipArray[1];
			}
			if (this.mQuiz.getQuestion().mTipArray.length > 2) 
			{
                		this.mShapeArray[5].setPosition(200,400);
                		this.mShapeArray[5].setVisibility(true);
                		this.mShapeArray[5].mMesh.innerHTML = '' + this.mQuiz.getQuestion().mTipArray[2];
			}
		}
        },

	showCorrectAnswerExit: function()
        {
                this.hideGuiBar();
        },

	//outOfTime
        outOfTimeEnter: function()
        {
		this.mApplication.mStateMachine.changeState(this.mApplication.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION);

 		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[0].setPosition(400,150);
                this.mShapeArray[0].mMesh.innerHTML = 'GO FASTER!';
                this.mShapeArray[0].setVisibility(true);

                this.mShapeArray[1].setPosition(400,175);
                this.mShapeArray[1].setVisibility(true);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

                //frantic clock
                this.mShapeArray[8].setVisibility(true);
		
		//show question shapes
 		this.mQuiz.getQuestion().showShapes();

		this.tip();
        },
        
	outOfTimeExecute: function()
	{
		if (this.mTimeSinceEpoch > this.mCorrectAnswerStartTime + this.mCorrectAnswerThresholdTime)
        	{
               		this.mStateMachine.changeState(this.mRESET_GAME);
        	}
	},

        outOfTimeExit: function()
        {
                this.hideGuiBar();
        },
   
	//waitingOnAnswer 
	waitingOnAnswerEnter: function()
        {
                this.firstTimeEnter();

                //times
                this.mQuestionStartTime = this.mTimeSinceEpoch; //restart timer
        },

        waitingOnAnswerExecute: function()
        {
                this.firstTimeExecute();

                //check time

		if (this.mThresholdTime == 0)
		{
			//no possibility of OUT_OF_TIME
		}
                else if (this.mTimeSinceEpoch > this.mQuestionStartTime + this.mThresholdTime)
                {
                        this.mOutOfTime = true;
                        this.mStateMachine.changeState(this.mOUT_OF_TIME);
                }
        },

	//firstTime 
	firstTimeEnter: function()
        {
                if (this.mNumAnswer)
                {
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.innerHTML =  '';
                }

                //user answer
                this.mUserAnswer = '';

                //numberPad
                if (this.mQuiz)
                {
                        if (!this.mQuiz.getQuestion())
                        {
                                this.log('NO QUESTIONS: calling createQuestions');
                                this.createQuestions();
                        }
                }
                else
                {
                        this.log('NO QUIZ');
                }

                //show question
                this.showQuestion();
        },

        firstTimeExecute: function()
        {
		var correct = false;
                //if you have an answer...
                if (this.mUserAnswer != '')
                {
			if (this.mQuiz == 0)
			{
				return;
			}
			for (i=0; i < this.mQuiz.getQuestion().mAnswerArray.length; i++)
			{
                        	if (this.mUserAnswer == this.mQuiz.getQuestion().mAnswerArray[i])
				{
					correct = true;
                               		this.mStateMachine.changeState(this.mCORRECT_ANSWER);
				}
			}

			if (correct == false)
			{
                                this.mStateMachine.changeState(this.mSHOW_CORRECT_ANSWER);
                        }
			
			if (this.mFirstTimeAnswer == false)
			{
				this.mFirstTimeAnswer = true;
				this.mApplication.sendLevelAttempt();
			}
                }
        }
});
