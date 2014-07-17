<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		//logging
		this.mStateLogs = false;

		/********* GAME *******************/ 
		this.mGame = 0;
		this.mGameName = "";

		//KEYS
		if (this.mGame)
		{
        		this.mGame.mKeysOn = true;
		}
        	document.addEvent("keydown", this.keyDown);
        	document.addEvent("keyup", this.keyUp);

        	//MOUSE
        	this.mMouseOn     = true;
        	this.mMouseMoveOn = true;
        	this.mMouseDownOn = true;

		this.mMouseMoveX = 0;
		this.mMouseMoveY = 0;
		this.mMouseDownX = 0;
		this.mMouseDownY = 0;
		this.mMouseUpX = 0;
		this.mMouseUpY = 0;

		/********** OLD APPLICATION STUFF ***********/
                //window size
                this.mWindow = window.getSize();

                //key pressed
                this.mKeyLeft = false;
                this.mKeyRight = false;
                this.mKeyUp = false;
                this.mKeyDown = false;
                this.mKeyStop = false;

                //mouse clicked or moved
                this.mMouseOn = false;
                this.mLeftMouseDown = false;
                this.mRightMouseDown = false;

                this.mMousePosition = new Point2D(0,0);
                this.mMouseMoveEvent = 0;

                document.addEvent("mousemove", this.mouseMove);
                document.addEvent("mousedown", this.mouseDown);

		//states
		this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_APPLICATION  = new GLOBAL_APPLICATION       (this);
                this.mINIT_APPLICATION    = new INIT_APPLICATION         (this);
                this.mNORMAL_APPLICATION  = new NORMAL_APPLICATION         (this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_APPLICATION);
                this.mStateMachine.changeState(this.mINIT_APPLICATION);

        	//START UPDATING
        	var t=setInterval("APPLICATION.update()",32)
        },
 	
	log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	update: function()
	{
		this.mStateMachine.update();
	},				

	isOdd: function(num)
 	{
 		return num % 2;
	},

	newGame: function()
	{
		this.mGame = 0;	
	},

   	/******************************* CONTROLS  *************/
        keyDown: function(event)
        {
                if (event.key == 'left')
                {
                        APPLICATION.mKeyLeft = true;
                }
                if (event.key == 'right')
                {
                        APPLICATION.mKeyRight = true;
                }
                if (event.key == 'up')
                {
                        APPLICATION.mKeyUp = true;
                }
                if (event.key == 'down')
                {
                        APPLICATION.mKeyDown = true;
                }
        },
    	
	keyUp: function(event)
        {
                if (event.key == 'left')
                {
                        APPLICATION.mKeyLeft = false;
                }
                if (event.key == 'right')
                {
                        APPLICATION.mKeyRight = false;
                }
                if (event.key == 'up')
                {
                        APPLICATION.mKeyUp = false;
                }
                if (event.key == 'down')
                {
                        APPLICATION.mKeyDown = false;
                }
                if (event.key == 'space')
                {
                        APPLICATION.mKeySpace = false;
                }
        },

        click: function(event)
        {
        },

        mouseup: function(event)
        {
                APPLICATION.mLeftMouseDown = false;
        },

        mouseMove: function(event)
        {
		APPLICATION.mMouseMoveX = event.page.x;
		APPLICATION.mMouseMoveY = event.page.y;
	},

        mouseDown: function(event)
        {
		APPLICATION.mMouseDownX = event.page.x;
		APPLICATION.mMouseDownY = event.page.y;
        },

	/**************** GAME DECIDER *******/
	// are we running the right game??
	gameDecider: function()
	{

	}
});

