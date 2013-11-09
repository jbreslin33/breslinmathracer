<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		/************ questions array from server db  later this need come in ajax*****/
		this.mQuestions = new Array();
		this.mAnswers   = new Array();
		this.mScoreNeeded = 0; 
/*
		this.mScoreNeeded = scoreNeeded; 
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mQuestions[i] = questions[i];
			this.mAnswers  [i] = answers  [i];
		} 
*/
		this.mWait = false;
		this.mEnteredDoor = false;
		this.mUsername = username;
		
		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		/************** On_Off **********/
                this.mOn = true;

		this.mGame = 0;

		//KEYS
        	this.mGame.mKeysOn = true;
        	document.addEvent("keydown", this.keyDown);
        	document.addEvent("keyup", this.keyUp);

        	//MOUSE
        	this.mMouseOn     = true;
        	this.mMouseMoveOn = true;
        	this.mMouseDownOn = true;

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
                //document.addEvent("click", this.click);
                //document.addEvent("mousedown", this.mouseDown);
                //document.addEvent("mouseup", this.mouseup);
                //document.addEvent("mousemove", this.mouseMove);
                //document.addEvent("keyup", this.keyup);
                document.body.style.cursor = 'crosshair';

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
                if (this.mOn)
                {
			//if no game get one....
			if (this.mGame ==  0);
			{
				this.getGameFromServer();	
			}


			//if (this.mWait == true && this.mWaiting = false)
			if (this.mEnteredDoor == true && this.mWait == false)
			{
				//run ajax function to get new db stuff then set mWaiting to true  	
				this.mWait = true;
				this.getNewStuff();
			}	
			else
			{
				this.mGame.update();
			}
		}
        },
 
	getGameFromServer: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        console.log('gameID:' + xmlhttp.responseText);
                        //this.mWait = false;

                }
                xmlhttp.open("GET","../../web/game/ajax_games_query.php",true);
                xmlhttp.send();
                this.timeWarning = true;
        },

 
	getNewStuff: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        console.log(xmlhttp.responseText);
			//this.mWait = false;
				
		}
                xmlhttp.open("GET","../../web/game/standard_question_query2.php",true);
                xmlhttp.send();
                this.timeWarning = true;
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

        mousedown: function(event)
        {
                APPLICATION.mLeftMouseDown = true;
        },

        mouseup: function(event)
        {
                APPLICATION.mLeftMouseDown = false;
        },

        mouseMove: function(event)
        {
                if (APPLICATION.mMouseMoveOn)
                {
                        if (APPLICATION.mGame)
			{
                        	if (APPLICATION.mGame.mControlObject);
				{
                        		APPLICATION.mGame.mControlObject.mPosition.mX = event.page.x;
                        		APPLICATION.mGame.mControlObject.mPosition.mY = event.page.y;
				}
			}
                }
        },

        mouseDown: function(event)
        {
                if (APPLICATION.mMouseDownOn)
                {      
                        if (APPLICATION.mGame)
			{
                        	if (APPLICATION.mGame.mControlObject);
				{
                        		APPLICATION.mControlObject.mPosition.mX = event.page.x;
                        		APPLICATION.mControlObject.mPosition.mY = event.page.y;
				}
			}
                }
        }
});
