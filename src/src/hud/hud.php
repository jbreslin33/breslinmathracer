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

        this.mHome = new Shape(90, ySize,  0,  yCoord,"","SELECT","#33cc00","boundary");
	this.mHome.mMesh.onchange = this.homeSelected;

        //this.mOrange    = new Shape (75, ySize,90,  yCoord,"","","orange","boundary");
        this.mOrange    = new Shape (75, ySize,90,  yCoord,"","","white","boundary");
       
	//this.mPink = new Shape (75, ySize,165,  yCoord,"","","pink","boundary");
	this.mPink = new Shape (75, ySize,165,  yCoord,"","","#33cc00","boundary");
	
	//this.mYellow = new Shape(75, ySize,240,  yCoord,"","","yellow","boundary");
	this.mYellow = new Shape(75, ySize,240,  yCoord,"","","white","boundary");

        //this.mGreen = new Shape    (75, ySize,315,  yCoord,"","","LawnGreen","boundary");
        this.mGreen = new Shape    (75, ySize,315,  yCoord,"","","#33cc00","boundary");

        //this.mCyan = new Shape    (75, ySize, 390,  yCoord,"","","cyan","boundary");
        this.mCyan = new Shape    (75, ySize, 390,  yCoord,"","","white","boundary");
        
	//this.mViolet = new Shape    (75, ySize, 465,  yCoord,"","","violet","boundary");
	this.mViolet = new Shape    (35, ySize, 465,  yCoord,"","","#33cc00","boundary");
        
	this.mTan = new Shape(115, ySize,  500,  yCoord,"","SELECT","tan","boundary");
	this.mTan.mMesh.onchange = this.tanSelected;

	//this.mUsername = new Shape     (155, ySize,615,  yCoord,"","","#F8CDF8","boundary");
	this.mUsername = new Shape     (155, ySize,615,  yCoord,"","","#33cc00","boundary");

//TABLE BEGIN
	this.mTable = new Shape(400,300,770,100,this,"TABLE","","");

	//rows 
	this.mRowArray = new Array();
	for (i=0; i < 10; i++)
	{	
		this.mRowArray.push(this.mTable.mMesh.insertRow(i));	
	}

	for (i=0; i < 10; i++)
	{
		for (x=0; x < 2; x++)
		{
			this.mRowArray[i].insertCell(x);
		}
	}

//TABLE END
/*	
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","#F8CDF8","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","#F6C0F6","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","#F5B4F5","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","#F3A8F3","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","#F19BF1","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","#F08EF0","boundary");
*/
	eastBounds  = new Shape         ( 10, 50,760, 35,"","","white","boundary");
        eastBounds  = new Shape         ( 10, 50,760, 85,"","","#33cc00","boundary");
        eastBounds  = new Shape         ( 10, 50,760,135,"","","white","boundary");
        eastBounds  = new Shape         ( 10, 50,760,185,"","","#33cc00","boundary");
        eastBounds  = new Shape         ( 10, 50,760,235,"","","white","boundary");
        eastBounds  = new Shape         ( 10, 50,760,285,"","","#33cc00","boundary");
        eastBounds  = new Shape         ( 10, 50,760,335,"","","white","boundary");
        eastBounds  = new Shape         ( 10, 20,760,385,"","","#33cc00","boundary");

        //this.mScroll = new Shape (770, ySize,  0,405,"","","violet","boudary");
        //this.mScroll = new Shape (770, ySize,  0,405,"","","white","boundary");
        this.mScroll = new Shape (770, 70,  0,405,"","","white","");
/*
        westBounds  = new Shape         ( 10, 50,  0, 35,"","","#F8CDF8","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#F6C0F6","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","#F5B4F5","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#F3A8F3","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","#F19BF1","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#F08EF0","boundary");
*/

        westBounds  = new Shape         ( 10, 50,  0, 35,"","","white","boundary");
        westBounds  = new Shape         ( 10, 50,  0, 85,"","","#33cc00","boundary");
        westBounds  = new Shape         ( 10, 50,  0,135,"","","white","boundary");
        westBounds  = new Shape         ( 10, 50,  0,185,"","","#33cc00","boundary");
        westBounds  = new Shape         ( 10, 50,  0,235,"","","white","boundary");
        westBounds  = new Shape         ( 10, 50,  0,285,"","","#33cc00","boundary");
        westBounds  = new Shape         ( 10, 50,  0,335,"","","white","boundary");
        westBounds  = new Shape         ( 10, 20,  0,385,"","","#33cc00","boundary");


	this.fillHomeSelect();
        

        },

	homeSelected: function()
	{
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Main Menu")
		{
			APPLICATION.log('catch me outside how bout that');
			APPLICATION.mEvaluationsID = 41;
		}
/*
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Practice")
		{
			APPLICATION.mGame.mSheet.getItem().fillPracticeSelect();
                        APPLICATION.mGame.mSheet.getItem().mShowPractice = true;
		}
*/
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
			window.open('/web/navigation/student/main_menu.php?type=individual','_blank');
		}
		if (APPLICATION.mHud.mHome.mMesh.options[APPLICATION.mHud.mHome.mMesh.selectedIndex].text == "Sign out")
		{
			window.location.href = "/web/php/logout.php";
		}

		APPLICATION.mHud.mHome.mMesh.value = 'Mathcore';
	},

	tanSelected: function()
	{
		APPLICATION.mTeammateID = APPLICATION.mHud.mTan.mMesh.options[APPLICATION.mHud.mTan.mMesh.selectedIndex].value;
	},
 
	fillHomeSelect: function()
        {
                var homeSelectArray = new Array(); 
		homeSelectArray.push('Mathcore');
		homeSelectArray.push('Main Menu');
		//homeSelectArray.push('Play');
		//homeSelectArray.push('XTables');
		//homeSelectArray.push('Practice');
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

emptyTanSelect: function()
{
	var i;
    	for(i=this.mTan.mMesh.options.length-1;i>=0;i--)
    	{
        	this.mTan.mMesh.remove(i);
	}
},

fillTanSelect: function(v,t)
{
	if (navigator.appName == "Microsoft Internet Explorer")
        {
        	var option = document.createElement("option");
                option.value = v;
                option.text = t;
                this.mTan.mMesh.add(option);
        }
        else
        {
        	var option = document.createElement("option");
                option.value = v;
                option.text = t;
                this.mTan.mMesh.appendChild(option);
        }
},
                
	setCyan: function(t)
	{
        	this.mCyan.setText('<font size="1">' + t + '</font>');
	},
	
	setOrange: function(t)
	{
        	this.mOrange.setText('<font size="1"> ' + t +  '</font>');
	},

	setPink: function(t)
	{
        	this.mPink.setText('<font size="1">' + t +  '</font>');
	},

	setYellow: function(t)
	{
        	this.mYellow.setText('<font size="1">' + t + '</font>');
	},

        getYellow: function()
        {
		//return "hell";
        },
	
	setViolet: function(t)
	{
        	this.mViolet.setText('<font size="1">' + t + '</font>');
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


