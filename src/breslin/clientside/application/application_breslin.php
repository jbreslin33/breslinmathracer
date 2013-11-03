var ApplicationBreslin = new Class(
{

initialize: function(serverIP, serverPort)
{

	//keys 
	this.mKeyArray = new Array();
	for (i = 0; i < 256; i++)
	{
		this.mKeyArray[i] = false;
	}

	//position offsets
	this.mScreenCenter = new Vector3D();
	this.mScreenCenter.x = 380;
        this.mScreenCenter.y = 0;
        this.mScreenCenter.z = 185;

	//timers
	this.mTimeSinceLastServerTick = 0;
	this.mIntervalCount = 0;
	this.mIntervalCountLast = 0;
	//StartLog ...don't need to just need log function	

	//constants
	this.mMessageServerExit = 3;
	this.mMessageConnected   = -90; //browser code
	this.mMessageConnect     = -111; //browser code
	this.mMessageDisconnect  = -112; //browser code

	this.mAddSchool          = -109;
	this.mMessageLogin       = -125; //broswer
	this.mMessageLogout      = -126; //browser
	this.mMessageLoggedIn    = -113; 
	this.mMessageLoggedOut   = -114; 

	this.mMessageJoinGame    = -117; //browser
	this.mMessageLeaveGame   = -99; //from server
	this.mMessageLeaveGameBrowswer   = -45; //browser
	this.mSentLeaveGame      = false; 
	this.mMessageGameEnd     = -58
	this.mMessageGameStart   = -57

	//network
	this.mNetwork = new Network(this,serverIP,serverPort);
        
	//state transition variables
        this.mSetup = false;
	this.mConnected = false;
        this.mPlayingGame = false;
	this.mConnectSent = false;
	this.mLoggedIn = false;	
	this.mLeaveGame = false;	

        //time
        this.mRenderTime = 0.0;
        this.mTimeSinceEpoch = 0;
        this.mLastTimeSinceEpoch = 0;

        //game
        this.mGame = 0;

	/*****GUI******/
	//all
	this.mButtonHit = 0;
	this.mSelectMenuHit = 0;
	this.mLabelHit = 0;
	this.mButtonExit = 0;

	//loading
	this.mButtonLoading = 0;

	//main screen
	this.mButtonJoinGameA = 0;
	this.mButtonLogout = 0;

	//login	
	this.mSelectMenuSchool = 0;
	this.mLabelUsername = 0;
	this.mLabelPassword = 0;
	this.mButtonLogin = 0;
	this.mButtonExit = 0;
	this.mStringUsername = '';
	this.mStringPassword = '';

	//reset
	this.mLabelReset = 0;
	this.mStringReset = 'Reset:';

	//border
	this.mNorthBorder = 0;
	this.mEastBorder  = 0;
	this.mSouthBorder = 0;
	this.mWestBorder  = 0;

        //state machine (Menus)
        this.mStateMachine = new StateMachine(this);

	//input
	this.mKey_up = false;
	this.mKey_down = false;
	this.mKey_right = false;
	this.mKey_left = false;
	this.mKey_counterclockwise = false;
	this.mKey_clockwise = false;
	this.mKey_esc = false;
	this.mKey_q = false;
	this.mKey_enter = false;
	this.mKey_backspace = false;

	this.sendConnect();	

	//prep loginScreen for selectMenu
	this.createLoginScreen();
	this.hideLoginScreen();

	//show something while waiting for server
 	this.createLoadingScreen();
        this.showLoadingScreen();

},

log: function(msg)
{
	setTimeout(function()
        {
        	throw new Error(msg);
        }, 0);
},

//game
setGame: function(game)
{
	this.mGame = game;
},

getGame: function()
{
	return this.mGame;
},

//states
createStates: function()
{
 	this.mApplicationGlobal     = new ApplicationGlobal    (this);
        this.mApplicationInitialize = new ApplicationInitialize(this);
        this.mApplicationLogin      = new ApplicationLogin     (this);
        this.mApplicationMain       = new ApplicationMain      (this);
        this.mApplicationPlay       = new ApplicationPlay      (this);
},

setStates: function()
{
        this.mStateMachine.setGlobalState (this.mApplicationGlobal);
        this.mStateMachine.setCurrentState(this.mApplicationInitialize);
        this.mStateMachine.changeState(this.mApplicationInitialize);
},

/*********************************
                        update
**********************************/
processUpdate: function()
{
	//get time since epoch and set lasttime
        e = new Date();
        this.mLastTimeSinceEpoch = this.mTimeSinceEpoch;
        this.mTimeSinceEpoch = e.getTime();

        //set RenderTime as function of timeSinceEpoch and LastTimeSinceEpoch diff
        this.mRenderTime = this.mTimeSinceEpoch - this.mLastTimeSinceEpoch;
	this.mTimeSinceLastServerTick += this.mRenderTime;
	if (this.getGame())
	{
		if (this.getGame().mStateMachine.currentState() == this.getGame().mRESET_GAME)
		{

		}
		else if (this.mTimeSinceLastServerTick > 1000)
		{
			//this.log('not getting updates since: ' + this.mTimeSinceLastServerTick + ' ms');	
		}
	}
	this.mRenderTime = this.mRenderTime / 1000;
        this.mStateMachine.update();
},



/*********************************
        ADMIN
**********************************/

shutdown: function()
{

},

/*********************************
                NETWORK
**********************************/
sendConnect: function()
{
	this.mNetwork.sendConnect();
},

sendLogin: function()
{
 	var username = this.mLabelUsername.value;
 	var password = this.mLabelPassword.value;
	message = username + ' ' + password;
	this.mNetwork.mSocket.emit('send_login', message);
},

sendLogout: function()
{
	message = '';
	this.mNetwork.mSocket.emit('send_logout', message);
},

sendJoinGame: function(gameID)
{
	message = '' + gameID;
	this.mNetwork.mSocket.emit('send_join_game', message);
},



/*********************************

*               TIME
***********************************/

getRenderTime: function()
{
	return this.mRenderTime;
},

/*******************************

******************************/
setup: function()
{
	return true;
},

/*********************************
                GUI
**********************************/
//CREATE BUTTON CONVIENCE FUNCTION
createButton: function(x,z,w,h,b,i)
{
	e = document.createElement("BUTTON");
	e.style.position = "absolute";
	e.style.left = x;
	e.style.top = z;
	e.style.width = w;
	e.style.height = h;
	e.style.background = b;
	var t=document.createTextNode(i);
	e.appendChild(t);
	document.body.appendChild(e);
	
	e.onclick = function()
	{
		mApplication.mButtonHit = e;	
	};

	return e;
},

//CREATE SELECTMenu CONVIENCE FUNCTION
createSelectMenu: function(x,z,w,h,b,i)
{
        e = document.createElement("SELECT");
        e.style.position = "absolute";
        e.style.left = x;
        e.style.top = z;
        e.style.width = w;
        e.style.height = h;
        e.style.background = b;
        document.body.appendChild(e);

        e.onclick = function()
        {
                mApplication.mSelectMenuHit = e;     
        };

        return e;
},

//CREATE Label CONVIENCE FUNCTION
createLabel: function(x,z,w,h,b,i)
{
        e = document.createElement("INPUT");
        e.style.position = "absolute";
        e.style.left = x;
        e.style.top = z;
        e.style.width = w;
        e.style.height = h;
        e.style.background = b;
        document.body.appendChild(e);

        e.onclick = function()
        {
                mApplication.mLabelHit = e;
        };

        return e;
},


//BORDERS
createBorder: function(x,z,w,h,b,i)
{
	border = document.createElement("div");
	border.style.position = "absolute";
	border.style.width = w;
	border.style.height = h;
	border.style.background = b;
	border.style.color = "white";
	border.innerHTML = i;
	border.style.left = x;
	border.style.top = z;
	
	document.body.appendChild(border);

	return border;
},

createBorders: function()
{
	this.mNorthBorder = this.createBorder("0px","0px","760px","30px","blue","");
	this.mEastBorder  = this.createBorder("760px","0px","10px","400px","blue","");
	this.mSouthBorder = this.createBorder("0px","370px","760px","30px","blue","");
	this.mWestBorder  = this.createBorder("0px","0px","10px","400px","blue","");
},

showBorders: function()
{

},

hideBorders: function()
{

},

//LOADING SCREEN
createLoadingScreen: function()
{
 	if (this.mButtonLoading == 0)
        {
                this.mButtonLoading = this.createButton(100,100,300,300,"blue","Loading");
        }
},

showLoadingScreen: function()
{
        this.mButtonLoading.style.display="block";
},

hideLoadingScreen: function()
{
        this.mButtonLoading.style.display="none";
},


//LOGIN SCREEN
createLoginScreen: function()
{
  	if (this.mSelectMenuSchool == 0)
        {
                this.mSelectMenuSchool = this.createSelectMenu(300,50,100,25,"yellow","Schools");
	}

  	if (this.mLabelUsername == 0)
	{
                this.mLabelUsername = this.createLabel(300,75,100,25,"yellow","Username");
		this.mLabelUsername.focus();
	}

  	if (this.mLabelPassword == 0)
	{
                this.mLabelPassword = this.createLabel(300,100,100,25,"yellow","Password");
	}

	if (this.mButtonLogin == 0)
	{
        	this.mButtonLogin = this.createButton(300,125,100,50,"green","Login");
        	this.mButtonLogin.onclick = function()
        	{
                	mApplication.mButtonHit = mApplication.mButtonLogin;
        	};
	}
 	if (this.mButtonExit == 0)
        {
                this.mButtonExit = this.createButton(300,175,100,50,"red","Exit");
                this.mButtonExit.onclick = function()
                {
                        mApplication.mButtonHit = mApplication.mButtonExit;
                };
        }

},

showLoginScreen: function()
{       
        this.mSelectMenuSchool.style.display="block";
        this.mLabelUsername.style.display="block";
        this.mLabelPassword.style.display="block";
        this.mButtonLogin.style.display="block";
        this.mButtonExit.style.display="block";

	//clear it
	this.mStringUsername = '';
	this.mStringPassword = '';

	this.mLabelUsername.value = '';
	this.mLabelPassword.value = '';
},

hideLoginScreen: function()
{       
        this.mSelectMenuSchool.style.display="none";
        this.mLabelUsername.style.display="none";
        this.mLabelPassword.style.display="none";
        this.mButtonLogin.style.display="none";
        this.mButtonExit.style.display="none";
	
	//clear it
/*
	this.mStringUsername = '';
	this.mStringPassword = '';

	this.mLabelUsername.value = '';
	this.mLabelPassword.value = '';
*/
},


//MAIN SCREEN
createMainScreen: function()
{
	//join game A
	if (this.mButtonJoinGameA == 0)
	{
		this.mButtonJoinGameA = this.createButton(300,100,100,50,"green","Join Game A");
		this.mButtonJoinGameA.onclick = function()
		{
			mApplication.mButtonHit = mApplication.mButtonJoinGameA;	
		};
	}
	
	//logout 
	if (this.mButtonLogout == 0)
	{
		this.mButtonLogout = this.createButton(300,200,100,50,"green","Logout");
		this.mButtonLogout.onclick = function()
		{
			mApplication.mButtonHit = mApplication.mButtonLogout;	
		};
	}

	//create Borders	
	this.createBorders();
},

showMainScreen: function()
{
	this.mButtonJoinGameA.style.display="block";
	this.mButtonJoinGameB.style.display="block";
	this.mButtonLogout.style.display="block";
},

hideMainScreen: function()
{
	this.mButtonJoinGameA.style.display="none";
	this.mButtonJoinGameB.style.display="none";
	this.mButtonLogout.style.display="none";
},

//RESET SCREEN
createResetScreen: function()
{
        if (this.mLabelReset == 0)
        {
                this.mLabelReset = this.createLabel(300,75,100,25,"yellow","Reset");
                this.mLabelReset.focus();
        }
},

showResetScreen: function()
{      
        this.mLabelReset.style.display="block";

        //clear it
        this.mStringReset = '';

        this.mLabelReset.value = '';
},

hideResetScreen: function()
{      
        this.mLabelReset.style.display="none";
},

/*********************************
                GRAPHICS
**********************************/
runGraphics: function()
{
	//no idea what to do here for browser code so i will leave blank since it's called from states
},

/*********************************
                INPUT 
**********************************/
keyDown: function(event)
{
	//escape
        if (event.key == 'esc')
        {
		mApplication.log('hit escape!!!!!!!!');
		event.preventDefault();
                mApplication.mKey_esc = true;
	}

	//this.mKeyArray[event.keyCode] = true;	
	mApplication.mKeyArray[event.code] = true;	

	//left
        if (event.key == 'left')
        {
        	mApplication.mKey_left = true;
        }
        if (event.key == 'a')
        {
        	mApplication.mKey_left = true;
        }

        //right
        if (event.key == 'right')
        {
                mApplication.mKey_right = true;
        }
        if (event.key == 'd')
        {
                mApplication.mKey_right = true;
        }

        //up
        if (event.key == 'up')
        {
                mApplication.mKey_up = true;
        }
        if (event.key == 'w')
        {
                mApplication.mKey_up = true;
        }

        //down
        if (event.key == 'down')
        {
                mApplication.mKey_down = true;
        }
        if (event.key == 's')
        {
                mApplication.mKey_down = true;
        }

	//counterclockwise
        if (event.key == 'z')
        {
                mApplication.mKey_counterclockwise = true;
	}

	//clockwise
        if (event.key == 'x')
        {
                mApplication.mKey_clockwise = true;
	}
	
	//enter
	if (event.key == 'enter')
	{
                mApplication.mKey_enter = true;
	}

},

keyUp: function(event)
{
	mApplication.mKeyArray[event.code] = false;	
	
	//left
        if (event.key == 'left')
        {
                mApplication.mKey_left = false;
        }
        if (event.key == 'a')
        {
                mApplication.mKey_left = false;
        }

        //right
        if (event.key == 'right')
        {
                mApplication.mKey_right = false;
        }
        if (event.key == 'd')
        {
                mApplication.mKey_right = false;
        }

        //up
        if (event.key == 'up')
        {
                mApplication.mKey_up = false;
        }
        if (event.key == 'w')
        {
                mApplication.mKey_up = false;
        }

        //down
        if (event.key == 'down')
        {
                mApplication.mKey_down = false;
        }
        if (event.key == 's')
        {
                mApplication.mKey_down = false;
        }
        
	//counterclockwise
        if (event.key == 'z')
        {
                mApplication.mKey_counterclockwise = false;
	}

	//clockwise
        if (event.key == 'x')
        {
                mApplication.mKey_clockwise = false;
	}
	
	//escape
        if (event.key == 'esc')
        {
                mApplication.mKey_esc = false;
		event.preventDefault();
	}

	//enter	
	if (event.key == 'enter')
	{
                mApplication.mKey_enter = false;
	}
}


});

