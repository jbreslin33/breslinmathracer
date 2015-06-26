var CoreApplication = new Class(
{
Extends: Application,
	initialize: function()
        {
		this.parent();

		//logging
		this.mStateLogs = true; 
		this.mStateLogsExecute = false; 
		this.mStateLogsExit = false; 

		//parse codes
		//login
		this.TIMED_OUT = 105;
		this.NOT_LOGGED_IN = 102;
		this.BAD_USERNAME = 103;
		this.BAD_PASSWORD = 104;
		this.LOGIN_STUDENT = 117;
		this.LOGIN_TEACHER = 113;
		this.LOGIN_SCHOOL = 114;

		//signup
		this.SCHOOL_USERNAME_TAKEN = 115;

		//descriptions
		this.STANDARD_DESCRIPTION = 106;
		this.ITEM_DESCRIPTION = 107;
		this.PRACTICE_DESCRIPTION = 108;
		this.CORE_DESCRIPTION = 110;
		this.STUDENT_ITEM_STATS = 109;

		//games


		//scroll
		this.SCROLL = 112;

		//admin
		this.UPDATED_STANDARD_ID = 111;

		this.FULL_NORMAL = 116;
		this.FULL = 101;

		//personal info
		this.mUsername = '';
		this.mFirstName = '';
		this.mLastName = '';

		/*********** LOGIN *******************
		this.mFullLogin = false;
		this.mLoggedIn = false;
		this.mBadUsername = false;
		this.mBadPassword = false;

		/*********** LEVEL *******************
		this.mRef_id = 'login';
		this.mProgression = 0;
		this.mStandard = '';
		this.mResponseArray = 0;
		this.mRawData = 0;
		this.mType = '';
		this.mItemAttemptsID = 0;
		this.mItemAttemptsIDLast = 0;

		this.mData = 0;

		this.mLevelCompleted = false;
		this.mLevelFailed = false;
		this.mEvaluationFailed = false;
		this.mGotoPractice = false;
		this.mGotoCore = false;
		this.mGotoTimesTables = false;
		this.mLeavePractice = false;
		this.mWaitForReturn = false;
		
		/*********** TIMERS *******************/
		this.mStateThresholdTime = 30000; 
		this.mStateEnterTime = 0; 


		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		/********* STATES *******************/ 
		this.mCoreStateMachine = new StateMachine(this);

		//admin
                this.mGLOBAL_CORE_APPLICATION          = new GLOBAL_CORE_APPLICATION       (this);
                this.mINIT_CORE_APPLICATION            = new INIT_CORE_APPLICATION         (this);

		//login
                this.mLOGIN_STUDENT_APPLICATION        = new LOGIN_STUDENT_APPLICATION     (this);
                this.mLOGIN_STUDENT_WAIT_APPLICATION   = new LOGIN_STUDENT_WAIT_APPLICATION(this);
                this.mLOGIN_SCHOOL_APPLICATION         = new LOGIN_SCHOOL_APPLICATION      (this);
                this.mLOGIN_SCHOOL_WAIT_APPLICATION    = new LOGIN_SCHOOL_WAIT_APPLICATION (this);

		//signup
                this.mSIGNUP_STUDENT_APPLICATION       = new SIGNUP_STUDENT_APPLICATION    (this);
                this.mSIGNUP_SCHOOL_APPLICATION        = new SIGNUP_SCHOOL_APPLICATION     (this);

		//normal
                this.mNORMAL_CORE_APPLICATION          = new NORMAL_CORE_APPLICATION       (this);

		//reports
                this.mREPORT_CORE_APPLICATION          = new REPORT_CORE_APPLICATION       (this);

		//practice
                this.mPRACTICE_APPLICATION             = new PRACTICE_APPLICATION          (this);
                this.mLEAVE_PRACTICE_APPLICATION       = new LEAVE_PRACTICE_APPLICATION    (this);
	
		//core		
                this.mCORE_APPLICATION                 = new CORE_APPLICATION              (this);

		//tables
                this.mTIMES_TABLES_APPLICATION         = new TIMES_TABLES_APPLICATION      (this);

                this.mCoreStateMachine.setGlobalState(this.mGLOBAL_CORE_APPLICATION);
                this.mCoreStateMachine.changeState(this.mINIT_CORE_APPLICATION);
        },
 	
        update: function()
        {
		this.mCoreStateMachine.update();
        },
	
	parseResponse: function(response)
	{
                this.mResponseArray = response.split(",");
                var code = this.mResponseArray[0];
                var codeNumber = parseInt(code);
		if (codeNumber > 100 && codeNumber < 200)
		{
                        if (codeNumber == APPLICATION.LOGIN_STUDENT)
                        {
				APPLICATION.log('FULL LOGIN CODE');
				APPLICATION.mFullLogin = true;
                        }
			
			if (codeNumber == APPLICATION.LOGIN_SCHOOL)
                        {
				APPLICATION.mFullLogin = true;
                        }
        		
			if (codeNumber == APPLICATION.NOT_LOGGED_IN)
                        {
				this.mSent = false;		
			}
			if (codeNumber == APPLICATION.BAD_USERNAME)
                        {
				this.mBadUsername = true;
			}
			if (codeNumber == APPLICATION.BAD_PASSWORD)
                        {
				this.mBadPassword = true;
			}
                    	if (codeNumber == APPLICATION.SCHOOL_USERNAME_TAKEN)
                        {
                                APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                                var v = 'USERNAME TAKEN';
                                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
                                this.mSent = false;
                        }

			if (codeNumber == APPLICATION.TIMED_OUT)
                        {
				APPLICATION.log('TIMED_OUT');		
				var v = 'TIMED OUT PLEASE LOGIN AGAIN';
 				APPLICATION.mCoreStateMachine.changeState(application.mLOGIN_APPLICATION);
				APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
				this.mSent = false;		
			}

			if (codeNumber == APPLICATION.FULL)
                	{
				APPLICATION.log('FULL');
                		APPLICATION.mRef_id = this.mResponseArray[1];
				APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
                        	APPLICATION.mLoggedIn = this.mResponseArray[2];
                       		APPLICATION.mUsername = this.mResponseArray[3];
                        	APPLICATION.mFirstName = this.mResponseArray[4];
                        	APPLICATION.mLastName = this.mResponseArray[5];
                        	APPLICATION.mRawData = this.mResponseArray[6];
                        	APPLICATION.mRole = this.mResponseArray[7];
		
                        	APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

				APPLICATION.mWaitForReturn = false; 
				this.mSent = false;		
               		}

                        if (codeNumber == APPLICATION.FULL_NORMAL)
                        {
				APPLICATION.log('FULL_NORMAL');
                                APPLICATION.mRef_id = this.mResponseArray[1];
                                APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
                                APPLICATION.mLoggedIn = this.mResponseArray[2];
                                APPLICATION.mUsername = this.mResponseArray[3];
                                APPLICATION.mFirstName = this.mResponseArray[4];
                                APPLICATION.mLastName = this.mResponseArray[5];
                                APPLICATION.mRawData = this.mResponseArray[6];
                                APPLICATION.mRole = this.mResponseArray[7];

                                APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

                                APPLICATION.mWaitForReturn = false;
                                this.mSent = false;
                        }
                   

			if (codeNumber == APPLICATION.STANDARD_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mStandardDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mStandardInfo.setText(this.mResponseArray[1]);
                        }
			if (codeNumber == APPLICATION.ITEM_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mItemDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mItemInfo.setText(this.mResponseArray[1]);
                        }
			if (codeNumber == APPLICATION.PRACTICE_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mPracticeDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.fillPracticeSelect();
                        }
			if (codeNumber == APPLICATION.CORE_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mCoreDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.fillCoreSelect();
                        }
			if (codeNumber == APPLICATION.STUDENT_ITEM_STATS)
                        {
                        }
			if (codeNumber == APPLICATION.UPDATED_STANDARD_ID)
                        {
				APPLICATION.mWaitForReturn = false; 
                        }
			if (codeNumber == APPLICATION.SCROLL)
			{
				APPLICATION.mHud.setScroll(this.mResponseArray[1]); 
			}
		}
	},

        signupStudent: function(username,password,first_name,last_name)
        {
		APPLICATION.log('signup in application');
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
                xmlhttp.open("POST","../../web/php/signup_student.php?username=" + username + "&password=" + password + "&first_name=" + first_name + "&last_name=" + last_name,true);
                xmlhttp.send();
	},
        
	signupSchool: function(username,password,name,city,state,zip,email,student_code)
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
                xmlhttp.open("POST","../../web/php/school_create.php?username=" + username + "&password=" + password + "&name=" + name + "&city=" + city + "&state=" + state + "&zip=" + zip + "&email=" + email + "&student_code=" + student_code,true);
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
		APPLICATION.mSent = true;

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
						//takes a bit....
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/login.php?username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },

        schoolLogin: function(username,password)
        {
		APPLICATION.mSent = true;
                //gets called right away
/*
                APPLICATION.mGame.mLoginButton.setVisibility(false);
                APPLICATION.mGame.mUsernameLabel.setVisibility(false);
                APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
                APPLICATION.mGame.mPasswordLabel.setVisibility(false);
                APPLICATION.mGame.mPasswordTextBox.setVisibility(false);
                var v = 'PLEASE WAIT LOGGING IN';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
*/
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
                                                //takes a bit....
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/school_login.php?username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },


        getScroll: function()
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
                xmlhttp.open("POST","../../web/php/scroll.php",true);
                xmlhttp.send();
        },


	sendItemAttempt: function(itemtypesid,transactioncode,question,answers,answer,itemattemptid)
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
                xmlhttp.open("POST","../../web/php/send_item_attempt.php?itemtypesid=" + itemtypesid + "&transactioncode=" + transactioncode + "&question=" + question + "&answers=" + answers + "&answer=" + answer + "&itemattemptid=" + itemattemptid,true);
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

                if (this.mRef_id == 'timestables_2')
                {
			if (tablenumber == '2')
			{
                        	xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
			}
                	else
                	{
                        	xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                	}
		}
                if (this.mRef_id == 'timestables_3') 
                {
                        if (tablenumber == '3')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_4')
                {
                        if (tablenumber == '4')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_5')
                {
                        if (tablenumber == '5')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_6')
                {
                        if (tablenumber == '6')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_7')
                {
                        if (tablenumber == '7')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_8')
                {
                        if (tablenumber == '8')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
                if (this.mRef_id == 'timestables_9')
                {
                        if (tablenumber == '9')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
 		if (this.mRef_id == 'timestables')
                {
                        if (tablenumber == '10')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }
               	if (this.mRef_id == 'The Izzy')
                {
                        if (tablenumber == '11')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }

                if (this.mRef_id == 'Add Subtract within 5')
                {
                        if (tablenumber == '12')
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=0",true);
                        }
                        else
                        {
                                xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                        }
                }

                if (this.mRef_id == 'normal')
                {
                	xmlhttp.open("POST","../../web/php/timestables.php?tablenumber=" + tablenumber + "&start_new=1",true);
                }
                if (this.mRef_id == 'practice')
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
