<?php
session_start();
?>

var GameSimple = new Class(
{
	initialize: function()
        {
     		/************** On_Off **********/
                this.mOn = true;
     		
		/**************** TIME ************/
                this.mTimeSinceEpoch = 0;
                this.mLastTimeSinceEpoch = 0;
                this.mDeltaTime = 0;
                this.mGameTime = 0;

		document.body.style.cursor = 'crosshair';
        },
 	
	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },
				
	//brian - update score in games_attempts table		
	updateScore: function()
	{
	},
	
	checkTime: function()
	{
	},

 	resetGame: function()
        {
        },

	createQuestions: function()
        {
                for (i = 0; i < scoreNeeded; i++)
                {
                        var question = new Question(questions[i],answers[i]);
                        this.mQuiz.mQuestionArray.push(question);
                }
        },

	/*********************** PUBLIC ***************************/
	getControlObject: function()
	{
//		return this.mControlObject;
	},

	/**************** ADD METHODS *************/
	addToShapeArray: function(shape)
	{
//		this.mShapeArray.push(shape);
	},
	
        update: function()
        {
		if (this.mOn)
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
			//this.log('mGameTime:' + this.mGameTime)
			//this.log('mDeltaTime:' + this.mDeltaTime)
		
//			for ( i = 0; i < questions
		}
        },

	/****************************** PROTECTED ***************************************/
	

	checkKeys: (function()
        {
        }).protect(),

	//CHECK MOUSE
	checkMouse: function()
	{
	},

	click: function(event)
	{
	},

	mousedown: function(event)
	{
		GAME.mLeftMouseDown = true;	
	},

	mouseup: function(event)
	{
		GAME.mLeftMouseDown = false;	
	},
	
	mouseMove: function(event)
	{
		if (GAME.mMouseMoveOn)
		{	
                	GAME.mControlObject.mPosition.mX = event.page.x;
                	GAME.mControlObject.mPosition.mY = event.page.y;
		}
	},

	mouseDown: function(event)
	{
		if (GAME.mMouseDownOn)
		{	
                	GAME.mControlObject.mPosition.mX = event.page.x;
                	GAME.mControlObject.mPosition.mY = event.page.y;
		}
	},

        saveOldPositions: (function()
        {
        }).protect(),

	//this is still ineffiecient because it is checking to see if one coin is colliding with another. when neither is moving.	
	checkForCollisions: (function()
        {
	}).protect(),

	collisionCheck: function(col1,col2)
	{
	},
	
	getOpenPoint2D: function(xMin,xMax,yMin,yMax,newShapeWidth,spreadFactor)
        {
        },

  	createBounds: function(north,east,south,west)
        {
                mBounds = new Bounds(north,east,south,west);
        },

        getScore: function()
        {
                return this.mScore;
        },

        setScore: function(score)
        {
                this.mScore = score;
                this.mHud.mScore.setText('<font size="2">Score: ' + this.mScore + '</font>');
        },

        incrementScore: function()
        {
                this.mScore++;
                this.mHud.mScore.setText('<font size="2"> Score : ' + this.mScore + '</font>');
        },

	setHud: function(hud)
	{
		this.mHud = hud;
	},

	getHud: function()
	{
		return this.mHud;
	},

	/******************************* CONTROLS  *************/
 	keyDown: function(event)
        {
        },

        keyUp: function(event)
        {
        }


});


