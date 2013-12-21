<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		/************ questions array from server db  later this need come in ajax*****/
		this.mEnteredDoor = false;


		//personal info
		this.mUsername = username;
		this.mFirstName = firstname;
		this.mLastName = lastname;

		/*********** LEVEL *******************
		this.mRef_id = ref_id;
		this.mLevel = level;
		this.mProgression = progression;
		this.mStandard = standard;

		this.mLevelCompleted = false;
		this.mWaitingOnLevelData = false;
		this.mAdvanceToNextLevelConfirmation = false;
		
		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

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

		//states
		this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_APPLICATION                = new GLOBAL_APPLICATION       (this);
                this.mINIT_APPLICATION                  = new INIT_APPLICATION         (this);
                this.mNORMAL_APPLICATION                = new NORMAL_APPLICATION       (this);
                this.mGET_LEVEL_DATA_APPLICATION        = new GET_LEVEL_DATA_APPLICATION(this);
                this.mADVANCE_TO_NEXT_LEVEL_APPLICATION = new ADVANCE_TO_NEXT_LEVEL_APPLICATION(this);

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

	newGame: function()
	{
		this.mGame = 0;	
	},

	getLevelData: function()
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
                        var response = xmlhttp.responseText; 
			//APPLICATION.log('getLevelData response:' + response);
			var responseArray = response.split(","); 
			var code = responseArray[0];

			if (code == "100")
			{
				APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mLevel = responseArray[2];
				APPLICATION.mHud.setLevel(APPLICATION.mLevel);
				APPLICATION.mWaitingOnLevelData = false;
                	}
		}
                xmlhttp.open("GET","../../web/application/level_query.php",true);
                xmlhttp.send();
        },

	// are we running the right game??
	gameDecider: function()
	{
		if (this.mRef_id == 0)
		{
			//this.log('no level yet');
		}
		if (this.mRef_id == 'CA9EE2E34F384E95A5FA26769C5864B8')
		{ 
             		if (this.mGameName != "k_cc_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_a_1";
                               	this.mGame = new k_cc_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '5E6A3E3B939B4577B104FA8658206E9E')
		{ 
             		if (this.mGameName != "k_cc_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_a_2";
                               	this.mGame = new k_cc_a_2(APPLICATION);
			}
                }
		if (this.mRef_id == 'C11F30815A9C49B9A83B61A285EA11F9')
		{ 
             		if (this.mGameName != "k_cc_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_a_3";
                               	this.mGame = new k_cc_a_3(APPLICATION);
			}
                }
		if (this.mRef_id == '66626D8AEE4E474B8CFEC8A4B68AA51C')
		{ 
             		if (this.mGameName != "k_cc_c_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_c_6";
                               	this.mGame = new k_cc_c_6(APPLICATION);
			}
		}
		if (this.mRef_id == 'C9B9CAD5BDE84CE2A7A0C441A3DF1A2D')
		{ 
             		if (this.mGameName != "k_cc_c_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_c_7";
                               	this.mGame = new k_cc_c_7(APPLICATION);
			}
		}
		if (this.mRef_id == '695A7607FE8A4E27AB80652C45C84FA8')
		{ 
             		if (this.mGameName != "k_oa_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_oa_a_2";
                               	this.mGame = new k_oa_a_2(APPLICATION);
			}
		}
		if (this.mRef_id == '0CFFCBC851984A4281C23D34FC400445')
		{ 
             		if (this.mGameName != "k_oa_a_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_oa_a_4";
                               	this.mGame = new k_oa_a_4(APPLICATION);
			}
		}
		if (this.mRef_id == '1353E9D5614D460FA32E67853B6BA6D8')
		{ 
             		if (this.mGameName != "k_oa_a_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_oa_a_5";
                               	this.mGame = new k_oa_a_5(APPLICATION);
			}
                }
		if (this.mRef_id == 'ED150B29EFD14FF8B655FA3F2CA4FE6D')
		{ 
             		if (this.mGameName != "k_nbt_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_nbt_a_1";
                               	this.mGame = new k_nbt_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == 'C712BAA86FEF4BFAB703AD2EB402B2DD')
		{ 
             		if (this.mGameName != "g1_oa_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_a_1";
                               	this.mGame = new g1_oa_a_1(APPLICATION);
			}
                }


		if (this.mRef_id == '6C33D2BEC1AC431C8FC4BF9FD4DD3DCA')
		{ 
             		if (this.mGameName != "g1_oa_c_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_c_6";
                               	this.mGame = new g1_oa_c_6(APPLICATION);
			}
                }
		if (this.mRef_id == '800715566B824BB3A5A8C464E961C2B4')
		{ 
             		if (this.mGameName != "g2_oa_b_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2";
                               	this.mGame = new g2_oa_b_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '3D384CB2349B41299A3B5A133AB9E3F8')
		{ 
             		if (this.mGameName != "g3_oa_c_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7";
                               	this.mGame = new g3_oa_c_7(APPLICATION);
			}	
		}
	},
	
	isOdd: function(num)
 	{
 		return num % 2;
	},

	advanceToNextLevel: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        var response = xmlhttp.responseText; 
			//APPLICATION.log('advanceToNextLevel response:' + response);
			var responseArray = response.split(","); 
			var code = responseArray[0];

			if (code == "101")
			{
				APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mLevel = responseArray[2];
				APPLICATION.mStandard = responseArray[3];
				APPLICATION.mHud.setStandard(APPLICATION.mStandard);
				APPLICATION.mProgression = responseArray[4];
				APPLICATION.mHud.setProgression(APPLICATION.mProgression);
				APPLICATION.mAdvanceToNextLevelConfirmation = true;
			}
                }
                xmlhttp.open("GET","../../src/database/goto_next_level_ajax.php",true);
                xmlhttp.send();
        },
 	
	sendGameTimeEnd: function()
        {
                var xmlhttp;

                if (window.XMLHttpRequest)
                {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                }
                xmlhttp.open("GET","../../src/database/set_game_end_time.php",true);
                xmlhttp.send();
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
/*
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
*/
        }
});
