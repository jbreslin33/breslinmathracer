/***************************************
public methods
----------------

****************************************/

var Hud = new Class(
{
        initialize: function(application)
        {
	
	this.mApplication = application;	
	/******************* BOUNDARY WALLS AND HUD COMBO ***********/
        var ySize = 35;
        var yCoord = 0;
        
	this.mWhite = new Shape(90, ySize,  0,   yCoord,"","","#F8CDF8","boundary");

        this.mHome = new Shape(90, ySize,  0,  yCoord,"","SELECT","#F8CDF8","boundary");
	this.mHome.mMesh.onchange = this.homeSelected;

        this.mOrange    = new Shape (100, ySize,90,  yCoord,"","","orange","boundary");
       
	this.mPink = new Shape (100, ySize,190,  yCoord,"","","pink","boundary");
	
	this.mYellow = new Shape(100, ySize,290,  yCoord,"","","yellow","boundary");

        this.mGreen = new Shape    (100, ySize,390,  yCoord,"","","LawnGreen","boundary");

        this.mCyan = new Shape    (100, ySize, 490,  yCoord,"","","cyan","boundary");

	this.mUsername = new Shape     (180, ySize,590,  yCoord,"","","#F8CDF8","boundary");
        
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","#F8CDF8","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","#F3A8F3","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","#F19BF1","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","#F08EF0","boundary");

        this.mScroll = new Shape (770, ySize,  0,405,"","","violet","boundary");

        westBounds  = new Shape         ( 10, 50,  0, 35,"","","#F8CDF8","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#F3A8F3","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","#F19BF1","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#F08EF0","boundary");

	this.fillHomeSelect();
        

        },

	homeSelected: function()
	{
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Play")
		{
			APPLICATION.mEvaluationsID = 1;
			//APPLICATION.mGame.mSheet.mItem.mStateMachine.changeState(APPLICATION.mGame.mSheet.mItem.mWAITING_ON_ANSWER_ITEM);
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "XTables")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowTimesTables = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Practice")
		{
			APPLICATION.mGame.mSheet.getItem().fillPracticeSelect();
                        APPLICATION.mGame.mSheet.getItem().mShowPractice = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Item description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowItem = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Standard description")
		{
                        APPLICATION.mGame.mSheet.getItem().mShowStandard = true;
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Reports")
		{
			window.open('/web/home/home.php?type=individual','_blank');
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Sign out")
		{
			window.location.href = "/web/php/logout.php";
		}
	},
 
	fillHomeSelect: function()
        {
                var homeSelectArray = new Array(); 
		homeSelectArray.push('Play');
		homeSelectArray.push('XTables');
		homeSelectArray.push('Practice');
		homeSelectArray.push('Item description');
		homeSelectArray.push('Standard description');
		homeSelectArray.push('Reports');
		homeSelectArray.push('Sign out');

                for (var i = 0; i < homeSelectArray.length; i++)
                {
                	if (navigator.appName == "Microsoft Internet Explorer")
			{
                        	var option = document.createElement("option");
                        	option.value = homeSelectArray[i];
                        	option.text = homeSelectArray[i];
                        	this.mHome.mMesh.add(option);
			}
			else
			{
                        	var option = document.createElement("option");
                        	option.value = homeSelectArray[i];
                        	option.text = homeSelectArray[i];
                        	this.mHome.mMesh.appendChild(option);
			}
                }
        },
                
	setCyan: function(streak)
	{
        	this.mCyan.setText('<font size="1">' + streak + '</font>');
	},
	
	setOrange: function(s)
	{
        	this.mOrange.setText('<font size="1"> ' + s +  '</font>');
	},

	setPink: function(p)
	{
        	this.mPink.setText('<font size="1">' + p +  '</font>');
	},

	setYellow: function(type_id)
	{
        	this.mYellow.setText('<font size="1">' + type_id + '</font>');
	},
	
	setUsername: function(firstname,lastname)
	{
  		this.mUsername.setText('<font size="1">User:' + firstname + ' ' + lastname + '</font>');
	},

	setScroll: function(scroll)
	{
        	this.mScroll.setText('<font size="1">'  + scroll + '</font>');
	}
});


