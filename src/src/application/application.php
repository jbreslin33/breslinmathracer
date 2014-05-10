<?php
session_start();
?>

var Application = new Class(
{
	initialize: function()
        {
		//logging
		this.mStateLogs = false;

		//personal info
		this.mUsername = username;
		this.mFirstName = firstname;
		this.mLastName = lastname;

		/*********** LEVEL *******************
		this.mRef_id = ref_id;
		this.mLevel = level;
		this.mLevels = levels;
		this.mProgression = progression;
		this.mStandard = standard;
		this.mFailedAttempts = failed_attempts;

		this.mLevelCompleted = false;
		this.mLevelFailed = false;

		this.mWaitingOnLevelData = false;

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

                this.mGLOBAL_APPLICATION                = new GLOBAL_APPLICATION       (this);
                this.mINIT_APPLICATION                  = new INIT_APPLICATION         (this);
                this.mNORMAL_APPLICATION                = new NORMAL_APPLICATION       (this);
                this.mGET_LEVEL_DATA_APPLICATION        = new GET_LEVEL_DATA_APPLICATION(this);
                this.mADVANCE_TO_NEXT_LEVEL_APPLICATION = new ADVANCE_TO_NEXT_LEVEL_APPLICATION(this);
                this.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION = new REWIND_TO_PREVIOUS_LEVEL_APPLICATION(this);

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
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        var response = xmlhttp.responseText; 
			var responseArray = response.split(","); 
			var code = responseArray[0];

			if (code == "100")
			{
				APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mLevel = responseArray[2];
				APPLICATION.mLevels = responseArray[3];
				APPLICATION.mLevels = responseArray[3];
                                APPLICATION.mProgression = responseArray[4];
				APPLICATION.mHud.setLevel(APPLICATION.mLevel, APPLICATION.mLevels);
				APPLICATION.mWaitingOnLevelData = false;
                                APPLICATION.mHud.setProgression(APPLICATION.mProgression);
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

		if (this.mRef_id == '7B20214AA4AA445AA720062C6F1B5C58')
		{ 
             		if (this.mGameName != "k_cc_b_4a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_b_4a";
                               	this.mGame = new k_cc_b_4a(APPLICATION);
			}
                }

		if (this.mRef_id == '3DEE205D86BC461FA4271EF4BD190A0C')
		{ 
             		if (this.mGameName != "k_cc_b_4b")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_b_4b";
                               	this.mGame = new k_cc_b_4b(APPLICATION);
			}
                }

		if (this.mRef_id == '6F4455B55B4240F3B4738DD9DB3EAF40')
		{ 
             		if (this.mGameName != "k_cc_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_cc_b_5";
                               	this.mGame = new k_cc_b_5(APPLICATION);
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
		if (this.mRef_id == 'C815B29CD8F546BBBB4C647B9D163942')
		{ 
             		if (this.mGameName != "k_oa_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_oa_a_1";
                               	this.mGame = new k_oa_a_1(APPLICATION);
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
		if (this.mRef_id == '9EC218587C01452C9EB49F52EB2DD1DD')
		{ 
             		if (this.mGameName != "k_oa_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_oa_a_3";
                               	this.mGame = new k_oa_a_3(APPLICATION);
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
		if (this.mRef_id == '017AAEA9D22543A59A60C697FEBADD1B')
		{ 
             		if (this.mGameName != "k_md_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_md_a_1";
                               	this.mGame = new k_md_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '4D3953649C704D4CAFC97E99C7A83EE9')
		{ 
             		if (this.mGameName != "k_md_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_md_a_2";
                               	this.mGame = new k_md_a_2(APPLICATION);
			}
                }
		if (this.mRef_id == 'C655A9B714CB481EB9D88759DD9BD0D1')
		{ 
             		if (this.mGameName != "k_md_b_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_md_b_3";
                               	this.mGame = new k_md_b_3(APPLICATION);
			}
                }
		if (this.mRef_id == 'D55BE0EDAFBC47B0BBDB1B88F9DF8781')
		{ 
             		if (this.mGameName != "k_g_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_a_1";
                               	this.mGame = new k_g_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '4F0A52E0906841DFA13739BFC87B330B')
		{ 
             		if (this.mGameName != "k_g_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_a_2";
                               	this.mGame = new k_g_a_2(APPLICATION);
			}
                }
		if (this.mRef_id == '01938BB1EE4E47319738DAC239A2B141')
		{ 
             		if (this.mGameName != "k_g_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_a_3";
                               	this.mGame = new k_g_a_3(APPLICATION);
			}
                }
		if (this.mRef_id == 'C712BAA86FEF4BFAB703AD2EB402B2DE')
		{ 
             		if (this.mGameName != "k_g_b_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_b_4";
                               	this.mGame = new k_g_b_4(APPLICATION);
			}
                }
		if (this.mRef_id == 'k.g.b.5')
		{ 
             		if (this.mGameName != "k_g_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_b_5";
                               	this.mGame = new k_g_b_5(APPLICATION);
			}
                }
		if (this.mRef_id == 'k.g.b.6')
		{ 
             		if (this.mGameName != "k_g_b_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "k_g_b_6";
                               	this.mGame = new k_g_b_6(APPLICATION);
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

		if (this.mRef_id == 'AF4F218991664833853239C29DCE8521')
		{ 
             		if (this.mGameName != "g1_oa_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_a_2";
                               	this.mGame = new g1_oa_a_2(APPLICATION);
			}
                }

		if (this.mRef_id == 'FC21412A7C92444EA50B30A09729330F')
		{ 
             		if (this.mGameName != "g1_oa_b_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_b_3";
                               	this.mGame = new g1_oa_b_3(APPLICATION);
			}
                }

		if (this.mRef_id == '6929CC4620B54F1692E2C20D8FAA12F8')
		{ 
             		if (this.mGameName != "g1_oa_b_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_b_4";
                               	this.mGame = new g1_oa_b_4(APPLICATION);
			}
                }

		if (this.mRef_id == '2688E9D1A3FA4B689A3D9E41A1071C0E')
		{ 
             		if (this.mGameName != "g1_oa_c_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_c_5";
                               	this.mGame = new g1_oa_c_5(APPLICATION);
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

		if (this.mRef_id == '2A26EE660F72412EA29765D79C367F0B')
		{ 
             		if (this.mGameName != "g1_oa_d_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_d_7";
                               	this.mGame = new g1_oa_d_7(APPLICATION);
			}
                }
		if (this.mRef_id == '626EB1B1473A47E28445F7E8DBDDC269')
		{ 
             		if (this.mGameName != "g1_oa_d_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_oa_d_8";
                               	this.mGame = new g1_oa_d_8(APPLICATION);
			}
                }
		if (this.mRef_id == '19A6BEFD554245118E73E9D4E6048E30')
		{ 
             		if (this.mGameName != "g1_nbt_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_a_1";
                               	this.mGame = new g1_nbt_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '0B8F8764427D4A1D9FE9EBA6D2EC0C95')
		{ 
             		if (this.mGameName != "g1_nbt_b_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_b_2";
                               	this.mGame = new g1_nbt_b_2(APPLICATION);
			}
                }
		if (this.mRef_id == 'C20A87396FC74159818466765D45D084')
		{ 
             		if (this.mGameName != "g1_nbt_b_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_b_3";
                               	this.mGame = new g1_nbt_b_3(APPLICATION);
			}
                }
		if (this.mRef_id == '41064C0B98A4460181333BF337E74EF3')
		{ 
             		if (this.mGameName != "g1_nbt_c_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_c_4";
                               	this.mGame = new g1_nbt_c_4(APPLICATION);
			}
                }
		if (this.mRef_id == 'B26DE2515D35459792503137FBF1BAC5')
		{ 
             		if (this.mGameName != "g1_nbt_c_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_c_5";
                               	this.mGame = new g1_nbt_c_5(APPLICATION);
			}
                }
		if (this.mRef_id == '884F1851E494434DB4B70D01A077363D')
		{ 
             		if (this.mGameName != "g1_nbt_c_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_nbt_c_6";
                               	this.mGame = new g1_nbt_c_6(APPLICATION);
			}
                }
		if (this.mRef_id == '1.md.a.1')
		{ 
             		if (this.mGameName != "g1_md_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_md_a_1";
                               	this.mGame = new g1_md_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '1.md.a.2')
		{ 
             		if (this.mGameName != "g1_md_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_md_a_2";
                               	this.mGame = new g1_md_a_2(APPLICATION);
			}
                }
		if (this.mRef_id == '87CBA4CAA0F6481DA4CE599F6B368E13')
		{ 
             		if (this.mGameName != "g1_md_b_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_md_b_3";
                               	this.mGame = new g1_md_b_3(APPLICATION);
			}
                }
		if (this.mRef_id == '1.g.a.1')
		{ 
             		if (this.mGameName != "g1_g_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_g_a_1";
                               	this.mGame = new g1_g_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '1.g.a.2')
		{ 
             		if (this.mGameName != "g1_g_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_g_a_2";
                               	this.mGame = new g1_g_a_2(APPLICATION);
			}
                }
		if (this.mRef_id == '1.g.a.3')
		{ 
             		if (this.mGameName != "g1_g_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g1_g_a_3";
                               	this.mGame = new g1_g_a_3(APPLICATION);
			}
                }
		if (this.mRef_id == '800715566B824BB3A5A8C464E961C2B3')
		{ 
             		if (this.mGameName != "g2_oa_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_a_1";
                               	this.mGame = new g2_oa_a_1(APPLICATION);
			}
                }
		if (this.mRef_id == '2.oa.b.2.1')
		{ 
             		if (this.mGameName != "g2_oa_b_2_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_1";
                               	this.mGame = new g2_oa_b_2_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.2')
		{ 
             		if (this.mGameName != "g2_oa_b_2_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_2";
                               	this.mGame = new g2_oa_b_2_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.3')
		{ 
             		if (this.mGameName != "g2_oa_b_2_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_3";
                               	this.mGame = new g2_oa_b_2_3(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.4')
		{ 
             		if (this.mGameName != "g2_oa_b_2_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_4";
                               	this.mGame = new g2_oa_b_2_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.5')
		{ 
             		if (this.mGameName != "g2_oa_b_2_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_5";
                               	this.mGame = new g2_oa_b_2_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.6')
		{ 
             		if (this.mGameName != "g2_oa_b_2_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_6";
                               	this.mGame = new g2_oa_b_2_6(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.7')
		{ 
             		if (this.mGameName != "g2_oa_b_2_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_7";
                               	this.mGame = new g2_oa_b_2_7(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.8')
		{ 
             		if (this.mGameName != "g2_oa_b_2_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_8";
                               	this.mGame = new g2_oa_b_2_8(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.9')
		{ 
             		if (this.mGameName != "g2_oa_b_2_9")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_9";
                               	this.mGame = new g2_oa_b_2_9(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.10')
		{ 
             		if (this.mGameName != "g2_oa_b_2_10")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_10";
                               	this.mGame = new g2_oa_b_2_10(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.11')
		{ 
             		if (this.mGameName != "g2_oa_b_2_11")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_11";
                               	this.mGame = new g2_oa_b_2_11(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.12')
		{ 
             		if (this.mGameName != "g2_oa_b_2_12")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_12";
                               	this.mGame = new g2_oa_b_2_12(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.13')
		{ 
             		if (this.mGameName != "g2_oa_b_2_13")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_13";
                               	this.mGame = new g2_oa_b_2_13(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.14')
		{ 
             		if (this.mGameName != "g2_oa_b_2_14")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_14";
                               	this.mGame = new g2_oa_b_2_14(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.15')
		{ 
             		if (this.mGameName != "g2_oa_b_2_15")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_15";
                               	this.mGame = new g2_oa_b_2_15(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.16')
		{ 
             		if (this.mGameName != "g2_oa_b_2_16")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_16";
                               	this.mGame = new g2_oa_b_2_16(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.17')
		{ 
             		if (this.mGameName != "g2_oa_b_2_17")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_17";
                               	this.mGame = new g2_oa_b_2_17(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.18')
		{ 
             		if (this.mGameName != "g2_oa_b_2_18")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_18";
                               	this.mGame = new g2_oa_b_2_18(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.19')
		{ 
             		if (this.mGameName != "g2_oa_b_2_19")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_19";
                               	this.mGame = new g2_oa_b_2_19(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.oa.b.2.20')
		{ 
             		if (this.mGameName != "g2_oa_b_2_20")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_b_2_20";
                               	this.mGame = new g2_oa_b_2_20(APPLICATION);
			}	
		}
		if (this.mRef_id == 'C7ECD7455B7D46E89CF07EB8C0A2337Aa')
		{ 
             		if (this.mGameName != "g2_oa_c_3a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_c_3a";
                               	this.mGame = new g2_oa_c_3a(APPLICATION);
			}	
		}
		if (this.mRef_id == 'C7ECD7455B7D46E89CF07EB8C0A2337Ab')
		{ 
             		if (this.mGameName != "g2_oa_c_3b")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_c_3b";
                               	this.mGame = new g2_oa_c_3b(APPLICATION);
			}	
		}
		if (this.mRef_id == 'A4531EC480FA4835AF9E3F9348FC5EC1')
		{ 
             		if (this.mGameName != "g2_oa_c_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_oa_c_4";
                               	this.mGame = new g2_oa_c_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '3B25AF48C22D4668A6085998F847B56E')
		{ 
             		if (this.mGameName != "g2_nbt_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_a_1";
                               	this.mGame = new g2_nbt_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == 'EE88A59EFD4348C28C56A49E61A673A8')
		{ 
             		if (this.mGameName != "g2_nbt_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_a_2";
                               	this.mGame = new g2_nbt_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == 'EE06B2E4211C4C8EB432A5448DA82C77')
		{ 
             		if (this.mGameName != "g2_nbt_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_a_3";
                               	this.mGame = new g2_nbt_a_3(APPLICATION);
			}	
		}
		if (this.mRef_id == 'B9615D5AFE1A46C3B0AD4E517ECB0C9E')
		{ 
             		if (this.mGameName != "g2_nbt_a_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_a_4";
                               	this.mGame = new g2_nbt_a_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '7C9ACFC70C934A229B447804D6A1C0FC')
		{ 
             		if (this.mGameName != "g2_nbt_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_b_5";
                               	this.mGame = new g2_nbt_b_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '70CC6A0456AB4CD1A86BC8EA43B447BA')
		{ 
             		if (this.mGameName != "g2_nbt_b_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_b_6";
                               	this.mGame = new g2_nbt_b_6(APPLICATION);
			}	
		}
		if (this.mRef_id == '29E245BF9A144F5B96C6DE0A626622A7')
		{ 
             		if (this.mGameName != "g2_nbt_b_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_b_7";
                               	this.mGame = new g2_nbt_b_7(APPLICATION);
			}	
		}
		if (this.mRef_id == 'D7C98BF1710A476BAFD20AEC169E9DC3')
		{ 
             		if (this.mGameName != "g2_nbt_b_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_nbt_b_8";
                               	this.mGame = new g2_nbt_b_8(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.a.1')
		{ 
             		if (this.mGameName != "g2_md_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_a_1";
                               	this.mGame = new g2_md_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.a.2')
		{ 
             		if (this.mGameName != "g2_md_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_a_2";
                               	this.mGame = new g2_md_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.a.3')
		{ 
             		if (this.mGameName != "g2_md_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_a_3";
                               	this.mGame = new g2_md_a_3(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.a.4')
		{ 
             		if (this.mGameName != "g2_md_a_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_a_4";
                               	this.mGame = new g2_md_a_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.b.5')
		{ 
             		if (this.mGameName != "g2_md_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_b_5";
                               	this.mGame = new g2_md_b_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.b.6a')
		{ 
             		if (this.mGameName != "g2_md_b_6a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_b_6a";
                               	this.mGame = new g2_md_b_6a(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.c.7')
		{ 
             		if (this.mGameName != "g2_md_c_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_c_7";
                               	this.mGame = new g2_md_c_7(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.md.c.8')
		{ 
             		if (this.mGameName != "g2_md_c_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_md_c_8";
                               	this.mGame = new g2_md_c_8(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.g.a.1')
		{ 
             		if (this.mGameName != "g2_g_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_g_a_1";
                               	this.mGame = new g2_g_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.g.a.2')
		{ 
             		if (this.mGameName != "g2_g_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_g_a_2";
                               	this.mGame = new g2_g_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '2.g.a.3')
		{ 
             		if (this.mGameName != "g2_g_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g2_g_a_3";
                               	this.mGame = new g2_g_a_3(APPLICATION);
			}	
		}
		if (this.mRef_id == '1F72443D6AC449C7B959047522ED087B')
		{ 
             		if (this.mGameName != "g3_oa_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_a_1";
                               	this.mGame = new g3_oa_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == 'D9008C43187E44DDA9B676FFEAA78311')
		{ 
             		if (this.mGameName != "g3_oa_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_a_2";
                               	this.mGame = new g3_oa_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '1F2BFEA5A0204D71A7FD29883E22CB9D')
		{ 
             		if (this.mGameName != "g3_oa_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_a_3";
                               	this.mGame = new g3_oa_a_3(APPLICATION);
			}	
		}
		if (this.mRef_id == 'ACB26A2ED7114E59911EE985D8D02B6D')
		{ 
             		if (this.mGameName != "g3_oa_a_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_a_4";
                               	this.mGame = new g3_oa_a_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.b.5')
		{ 
             		if (this.mGameName != "g3_oa_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_b_5";
                               	this.mGame = new g3_oa_b_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.b.6')
		{ 
             		if (this.mGameName != "g3_oa_b_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_b_6";
                               	this.mGame = new g3_oa_b_6(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.2')
		{ 
             		if (this.mGameName != "g3_oa_c_7_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_2";
                               	this.mGame = new g3_oa_c_7_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.3')
		{ 
             		if (this.mGameName != "g3_oa_c_7_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_3";
                               	this.mGame = new g3_oa_c_7_3(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.4')
		{ 
             		if (this.mGameName != "g3_oa_c_7_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_4";
                               	this.mGame = new g3_oa_c_7_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.5')
		{ 
             		if (this.mGameName != "g3_oa_c_7_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_5";
                               	this.mGame = new g3_oa_c_7_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.6')
		{ 
             		if (this.mGameName != "g3_oa_c_7_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_6";
                               	this.mGame = new g3_oa_c_7_6(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.7')
		{ 
             		if (this.mGameName != "g3_oa_c_7_7")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_7";
                               	this.mGame = new g3_oa_c_7_7(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.8')
		{ 
             		if (this.mGameName != "g3_oa_c_7_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_8";
                               	this.mGame = new g3_oa_c_7_8(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.c.7.9')
		{ 
             		if (this.mGameName != "g3_oa_c_7_9")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_c_7_9";
                               	this.mGame = new g3_oa_c_7_9(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.oa.d.8')
		{ 
             		if (this.mGameName != "g3_oa_d_8")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_oa_d_8";
                               	this.mGame = new g3_oa_d_8(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nbt.a.1')
		{ 
             		if (this.mGameName != "g3_nbt_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nbt_a_1";
                               	this.mGame = new g3_nbt_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nbt.a.2')
		{ 
             		if (this.mGameName != "g3_nbt_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nbt_a_2";
                               	this.mGame = new g3_nbt_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nbt.a.3')
		{ 
             		if (this.mGameName != "g3_nbt_a_3")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nbt_a_3";
                               	this.mGame = new g3_nbt_a_3(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.1')
		{ 
             		if (this.mGameName != "g3_nf_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_1";
                               	this.mGame = new g3_nf_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.2a')
		{ 
             		if (this.mGameName != "g3_nf_a_2a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_2a";
                               	this.mGame = new g3_nf_a_2a(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.2b')
		{ 
             		if (this.mGameName != "g3_nf_a_2b")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_2b";
                               	this.mGame = new g3_nf_a_2b(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.3a')
		{ 
             		if (this.mGameName != "g3_nf_a_3a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_3a";
                               	this.mGame = new g3_nf_a_3a(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.3b')
		{ 
             		if (this.mGameName != "g3_nf_a_3b")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_3b";
                               	this.mGame = new g3_nf_a_3b(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.3c')
		{ 
             		if (this.mGameName != "g3_nf_a_3c")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_3c";
                               	this.mGame = new g3_nf_a_3c(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.nf.a.3d')
		{ 
             		if (this.mGameName != "g3_nf_a_3d")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_nf_a_3d";
                               	this.mGame = new g3_nf_a_3d(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.md.a.1a')
		{ 
             		if (this.mGameName != "g3_md_a_1a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_md_a_1a";
                               	this.mGame = new g3_md_a_1a(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.md.a.1b')
		{ 
             		if (this.mGameName != "g3_md_a_1b")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_md_a_1b";
                               	this.mGame = new g3_md_a_1b(APPLICATION);
			}	
		}
		if (this.mRef_id == '3.md.a.2a')
		{ 
             		if (this.mGameName != "g3_md_a_2a")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g3_md_a_2a";
                               	this.mGame = new g3_md_a_2a(APPLICATION);
			}	
		}
		if (this.mRef_id == '7828B4F15ABD40E19EF14DDE0EB399DF')
		{ 
             		if (this.mGameName != "g4_oa_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_oa_a_1";
                               	this.mGame = new g4_oa_a_1(APPLICATION);
			}	
		}
		if (this.mRef_id == '062925BDC19347E8890A6D7390DF3842')
		{ 
             		if (this.mGameName != "g4_oa_a_2")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_oa_a_2";
                               	this.mGame = new g4_oa_a_2(APPLICATION);
			}	
		}
		if (this.mRef_id == '4.nbt.b.4')
		{ 
             		if (this.mGameName != "g4_nbt_b_4")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_nbt_b_4";
                               	this.mGame = new g4_nbt_b_4(APPLICATION);
			}	
		}
		if (this.mRef_id == '4.nbt.b.5')
		{ 
             		if (this.mGameName != "g4_nbt_b_5")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_nbt_b_5";
                               	this.mGame = new g4_nbt_b_5(APPLICATION);
			}	
		}
		if (this.mRef_id == '4.nbt.b.6')
		{ 
             		if (this.mGameName != "g4_nbt_b_6")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_nbt_b_6";
                               	this.mGame = new g4_nbt_b_6(APPLICATION);
			}	
		}
		if (this.mRef_id == '4.nf.a.1')
		{ 
             		if (this.mGameName != "g4_nf_a_1")
                       	{
				if (this.mGame)
				{
					this.mGame.destructor();
					this.mGame = 0;
				}
                               	this.mGameName = "g4_nf_a_1";
                               	this.mGame = new g4_nf_a_1(APPLICATION);
			}	
		}
	},
	
	isOdd: function(num)
 	{
 		return num % 2;
	},

    	sendFailedAttempt: function()
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
                        var response = xmlhttp.responseText;
                        var responseArray = response.split(",");
			var code = responseArray[0];
                        var codeNumber = parseInt(code);

                        if (codeNumber == 101)
                        {
                                APPLICATION.mRef_id = responseArray[1];
                                APPLICATION.mLevel = responseArray[2];
                                APPLICATION.mStandard = responseArray[3];
                                APPLICATION.mHud.setStandard(APPLICATION.mStandard);
                                APPLICATION.mProgression = responseArray[4];
                                APPLICATION.mLevels = responseArray[5];
                                APPLICATION.mFailedAttempts = responseArray[6];
                                APPLICATION.mHud.setLevel(APPLICATION.mLevel, APPLICATION.mLevels);
                                APPLICATION.mHud.setProgression(APPLICATION.mProgression);
                        }
                }
                xmlhttp.open("GET","../../src/database/send_failed_attempt.php",true);
                xmlhttp.send();
        },
       
	sendLevelAttempt: function()
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
                xmlhttp.open("POST","../../src/database/send_level_attempt.php",false);
                xmlhttp.send();
        },

	advanceToNextLevel: function()
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
                        var response = xmlhttp.responseText; 
			var responseArray = response.split(","); 
			var code = responseArray[0];
			var codeNumber = parseInt(code);

			if (codeNumber == 101)
			{
				APPLICATION.mRef_id = responseArray[1];
				APPLICATION.mLevel = responseArray[2];
				APPLICATION.mStandard = responseArray[3];
				APPLICATION.mHud.setStandard(APPLICATION.mStandard);
				APPLICATION.mProgression = responseArray[4];
				APPLICATION.mLevels = responseArray[5];
				APPLICATION.mFailedAttempts = responseArray[6];
				APPLICATION.mHud.setLevel(APPLICATION.mLevel, APPLICATION.mLevels);
				APPLICATION.mHud.setProgression(APPLICATION.mProgression);
			}
                }
                xmlhttp.open("GET","../../src/database/goto_next_level_ajax.php",true);
                xmlhttp.send();
        },

       	advanceToLastLevel: function()
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
                        var response = xmlhttp.responseText;
                        var responseArray = response.split(",");
			var code = responseArray[0];
			var codeNumber = parseInt(code);

			if (codeNumber == 101)
                        {
                                APPLICATION.mRef_id = responseArray[1];
                                APPLICATION.mLevel = responseArray[2];
                                APPLICATION.mStandard = responseArray[3];
                                APPLICATION.mHud.setStandard(APPLICATION.mStandard);
                                APPLICATION.mProgression = responseArray[4];
                                APPLICATION.mLevels = responseArray[5];
				APPLICATION.mFailedAttempts = responseArray[6];
                                APPLICATION.mHud.setLevel(APPLICATION.mLevel, APPLICATION.mLevels);
                                APPLICATION.mHud.setProgression(APPLICATION.mProgression);
                        }
                }
                xmlhttp.open("GET","../../src/database/goto_last_level_ajax.php",true);
                xmlhttp.send();
        },
 	
	sendGameTimeEnd: function()
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
        }
});
