var CoreApplication = new Class(
{
Extends: Application,
	initialize: function()
        {
		this.parent();

		//logging
		this.mStateLogs = false; 

		//parse codes
		this.FULL = 101;
		this.NOT_LOGGED_IN = 102;
		this.BAD_USERNAME = 103;
		this.BAD_PASSWORD = 104;
		this.TIMED_OUT = 105;
		this.STANDARD_DESCRIPTION = 106;
		this.ITEM_DESCRIPTION = 107;
		this.PRACTICE_DESCRIPTION = 108;
		this.CORE_DESCRIPTION = 110;
		this.STUDENT_ITEM_STATS = 109;
		this.UPDATED_STANDARD_ID = 111;

		//personal info
		this.mUsername = '';
		this.mFirstName = '';
		this.mLastName = '';

		/*********** LOGIN *******************
		this.mLoggedIn = false;

		/*********** LEVEL *******************
		this.mRef_id = 'login';
		this.mLevel = 0;
		this.mLevels = 0;
		this.mProgression = 0;
		this.mStandard = '';
		this.mRawData = 0;
		this.mType = '';

		this.mLevelCompleted = false;
		this.mLevelFailed = false;
		this.mEvaluationFailed = false;
		this.mGotoPractice = false;
		this.mGotoCore = false;
		this.mGotoTimesTables = false;
		this.mLeavePractice = false;
		this.mWaitForReturn = false;

		this.mWaitingOnLevelData = false;

		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		//states
		this.mCoreStateMachine = new StateMachine(this);

                this.mGLOBAL_CORE_APPLICATION                = new GLOBAL_CORE_APPLICATION       (this);
                this.mINIT_CORE_APPLICATION                  = new INIT_CORE_APPLICATION         (this);
                this.mLOGIN_APPLICATION                  = new LOGIN_APPLICATION         (this);
                this.mSIGNUP_APPLICATION                  = new SIGNUP_APPLICATION         (this);
                this.mNORMAL_CORE_APPLICATION                = new NORMAL_CORE_APPLICATION       (this);
                this.mPRACTICE_APPLICATION                 = new PRACTICE_APPLICATION(this);
                this.mCORE_APPLICATION                 = new CORE_APPLICATION(this);
                this.mLEAVE_PRACTICE_APPLICATION                 = new LEAVE_PRACTICE_APPLICATION(this);
                this.mTIMES_TABLES_APPLICATION                 = new TIMES_TABLES_APPLICATION(this);

                this.mCoreStateMachine.setGlobalState(this.mGLOBAL_CORE_APPLICATION);
                this.mCoreStateMachine.changeState(this.mINIT_CORE_APPLICATION);
        },
 	
        update: function()
        {
		this.mCoreStateMachine.update();
        },
	
	parseResponse: function(response)
	{
                var responseArray = response.split(",");
                var code = responseArray[0];
                var codeNumber = parseInt(code);
		if (codeNumber > 100 && codeNumber < 200)
		{
			if (codeNumber == APPLICATION.NOT_LOGGED_IN)
                        {
				this.mSent = false;		
			}
			if (codeNumber == APPLICATION.BAD_USERNAME)
                        {
				var v = 'BAD USERNAME';
				APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
				this.mSent = false;		
			}
			if (codeNumber == APPLICATION.BAD_PASSWORD)
                        {
				var v = 'BAD PASSWORD';
				APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
				this.mSent = false;		
			}
			if (codeNumber == APPLICATION.TIMED_OUT)
                        {
				var v = 'TIMED OUT PLEASE LOGIN AGAIN';
 				APPLICATION.mCoreStateMachine.changeState(application.mLOGIN_APPLICATION);
				APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
				this.mSent = false;		
			}
        		if (codeNumber == APPLICATION.FULL)
                	{
                		APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
                        	APPLICATION.mLoggedIn = responseArray[2];
                       		APPLICATION.mUsername = responseArray[3];
                        	APPLICATION.mFirstName = responseArray[4];
                        	APPLICATION.mLastName = responseArray[5];
                        	APPLICATION.mRawData = responseArray[6];
		
                        	APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

				APPLICATION.mWaitForReturn = false; 
				this.mSent = false;		
               		}
			if (codeNumber == APPLICATION.STANDARD_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mStandardDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mStandardInfo.setText(responseArray[1]);
                        }
			if (codeNumber == APPLICATION.ITEM_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mItemDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mItemInfo.setText(responseArray[1]);
                        }
			if (codeNumber == APPLICATION.PRACTICE_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mPracticeDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.fillPracticeSelect();
                        }
			if (codeNumber == APPLICATION.CORE_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mCoreDescription = responseArray[1];
                                APPLICATION.mGame.mSheet.mItem.fillCoreSelect();
                        }
			if (codeNumber == APPLICATION.STUDENT_ITEM_STATS)
                        {
                                //APPLICATION.mGame.mSheet.mItem.mPracticeDescription = responseArray[1];
                                //APPLICATION.mGame.mSheet.mItem.fillPracticeSelect();
                        }
			if (codeNumber == APPLICATION.UPDATED_STANDARD_ID)
                        {
				APPLICATION.mWaitForReturn = false; 
                                //APPLICATION.mGame.mSheet.mItem.mCoreDescription = responseArray[1];
                                //APPLICATION.mGame.mSheet.mItem.fillCoreSelect();
                        }
		}
	},

        signup: function(username,password,first_name,last_name,core_standards_id)
        {
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/signup.php?username=" + username + "&password=" + password + "&first_name=" + first_name + "&last_name=" + last_name + "&core_standards_id=" + core_standards_id,true);
                xmlhttp.send();
	},

	checkLogin: function()
	{
               	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
                xmlhttp.open("POST","../../web/php/check_login.php",true);
                xmlhttp.send();
	},

        login: function(username,password)
        {
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/login.php?username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },

	sendItemAttempt: function(itemtypesid,transactioncode)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.open("POST","../../web/php/send_item_attempt.php?itemtypesid=" + itemtypesid + "&transactioncode=" + transactioncode,true);
                xmlhttp.send();
        },

        normal: function()
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/normal.php",true);
                xmlhttp.send();
        },

	practice: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
		}
		if (this.mRef_id == 'practice')
		{
                	xmlhttp.open("POST","../../web/php/practice.php?typeid=" + typeid + "&start_new=0",true);
		}
		else
		{
                	xmlhttp.open("POST","../../web/php/practice.php?typeid=" + typeid + "&start_new=1",true);
		}	
                xmlhttp.send();
        },
       
	core: function(standardid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/update/updatestandardid.php?standardid=" + standardid,true);
                xmlhttp.send();
        },

	timestables: function(tablenumber)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                if (this.mRef_id == 'timestables_2' || this.mRef_id == 'timestables_3' || this.mRef_id == 'timestables_4' || this.mRef_id == 'timestables_5' || this.mRef_id == 'timestables_6' || this.mRef_id == 'timestables_7' || this.mRef_id == 'timestables_8' || this.mRef_id == 'timestables_9' )
                {
                        xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                }
                else
                {
                        xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                }
                xmlhttp.send();
        },

        leavePractice: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/leave_practice.php",true);
                xmlhttp.send();
        },

       	getStandardDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_standard_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },
	
	getItemDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_item_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },

	getPracticeDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_practice_description.php",true);
                xmlhttp.send();
        },
        
	getCoreDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_core_description.php",true);
                xmlhttp.send();
        },
	
	getStudentItemStats: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_student_item_stats.php",true);
                xmlhttp.send();
        },

	/**************** GAME DECIDER *******/
	// are we running the right game??
	gameDecider: function()
	{
		//if already have a game destroy it.
		if (this.mGame)
		{
			this.mGame.destructor();
			this.mGame = 0;
		}
		//make a new one
                this.mGame = new CoreGame(APPLICATION);
	}
});
