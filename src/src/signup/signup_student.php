/* GAME: */

var SignupStudent = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

                /*************** Title **********/
                this.mTitleLabel.setText('Create Student');

		//username	
		this.mUsernameLabel = new Shape(200,40,120,100,this,"","","");
                this.mUsernameLabel.setText('Username:');
                this.mShapeArray.push(this.mUsernameLabel);
                
		this.mUsernameTextBox = new Shape(200,40,220,100,this,"INPUT","","");
                this.mUsernameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mUsernameTextBox);
		this.mUsernameTextBox.mMesh.focus();	
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mUsernameTextBox.mMesh.attachEvent('onkeypress',this.usernameTextBoxMicrosoftHit);
                }
                else
                {
                        this.mUsernameTextBox.mMesh.addEvent('keypress',this.usernameTextBoxFirefoxHit);
                }

		//passwordOne	
		this.mPasswordOneLabel = new Shape(200,40,120,155,this,"","","");
                this.mPasswordOneLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordOneLabel);

                this.mPasswordOneTextBox = new Shape(200,40,220,155,this,"INPUT","","");
                this.mPasswordOneTextBox.mMesh.value = '';
                this.mPasswordOneTextBox.mMesh.setAttribute("type", "password");
                this.mShapeArray.push(this.mPasswordOneTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordOneTextBox.mMesh.attachEvent('onkeypress',this.passwordOneTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordOneTextBox.mMesh.addEvent('keypress',this.passwordOneTextBoxFirefoxHit);
                }

                //passwordTwo
                this.mPasswordTwoLabel = new Shape(200,40,120,210,this,"","","");
                this.mPasswordTwoLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordTwoLabel);

                this.mPasswordTwoTextBox = new Shape(200,40,220,210,this,"INPUT","","");
                this.mPasswordTwoTextBox.mMesh.value = '';
                this.mPasswordTwoTextBox.mMesh.setAttribute("type", "password");
                this.mShapeArray.push(this.mPasswordTwoTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordTwoTextBox.mMesh.attachEvent('onkeypress',this.passwordTwoTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordTwoTextBox.mMesh.addEvent('keypress',this.passwordTwoTextBoxFirefoxHit);
                }


		//firstName	
		this.mFirstNameLabel = new Shape(200,40,120,265,this,"","","");
                this.mFirstNameLabel.setText('First Name:');
                this.mShapeArray.push(this.mFirstNameLabel);

  		this.mFirstNameTextBox = new Shape(200,40,220,265,this,"INPUT","","");
                this.mFirstNameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mFirstNameTextBox);
             	if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mFirstNameTextBox.mMesh.attachEvent('onkeypress',this.firstNameTextBoxMicrosoftHit);
                }
                else
                {
                        this.mFirstNameTextBox.mMesh.addEvent('keypress',this.firstNameTextBoxFirefoxHit);
                }
	
		//lastName	
		this.mLastNameLabel = new Shape(200,40,120,320,this,"","","");
                this.mLastNameLabel.setText('Last Name:');
                this.mShapeArray.push(this.mLastNameLabel);
  		
		this.mLastNameTextBox = new Shape(200,40,220,320,this,"INPUT","","");
                this.mLastNameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mLastNameTextBox);
             	if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mLastNameTextBox.mMesh.attachEvent('onkeypress',this.lastNameTextBoxMicrosoftHit);
                }
                else
                {
                        this.mLastNameTextBox.mMesh.addEvent('keypress',this.lastNameTextBoxFirefoxHit);
                }

		//SIGNUP BUTTON
                this.mSignupButton = new Shape(200,50,220,380,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSignupButton.mMesh.attachEvent("onclick",this.hitSignupButton);
                }
                else
                {
                        this.mSignupButton.mMesh.addEvent('click',this.hitSignupButton);
                }
                this.mShapeArray.push(this.mSignupButton);
                this.mSignupButton.mMesh.innerHTML = 'Create Student';


                //LOGIN BUTTON
                this.mLoginButton = new Shape(200,50,650,360,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mLoginButton.mMesh.attachEvent("onclick",this.hitLoginButton);
                }
                else
                {
                        this.mLoginButton.mMesh.addEvent('click',this.hitLoginButton);
                }
                this.mShapeArray.push(this.mLoginButton);
                this.mLoginButton.mMesh.innerHTML = 'Back';
	},

        log: function(msg)
        {
                setTimeout(function()
                {
                        throw new Error(msg);
                }, 0);
        },

	//***tab to next
	
	//username
	usernameTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mPasswordOneTextBox.mMesh.focus();
                }
        },

        usernameTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mPasswordOneTextBox.mMesh.focus();
                }
        },

	//passwordOne
 	passwordOneTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mPasswordTwoTextBox.mMesh.focus();
                }
        },

        passwordOneTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mPasswordTwoTextBox.mMesh.focus();
                }
        },

	//passwordTwo
 	passwordTwoTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mLastNameTextBox.mMesh.focus();
                }
        },

        passwordTwoTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mLastNameTextBox.mMesh.focus();
                }
        },

        firstNameTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mLastNameTextBox.mMesh.focus();
                }
        },

        firstNameTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mLastNameTextBox.mMesh.focus();
                }
        },

	//sendSignup 
        lastNameTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
			APPLICATION.mGame.sendSignup();
                }
        },

        lastNameTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
			APPLICATION.mGame.sendSignup();
                }
        },
	
	hitSignupButton: function()
        {
		APPLICATION.mGame.sendSignup();
        },
	
	sendSignup: function()
	{
		var username = APPLICATION.mGame.mUsernameTextBox.mMesh.value;
		var passwordOne = APPLICATION.mGame.mPasswordOneTextBox.mMesh.value;
		var passwordTwo = APPLICATION.mGame.mPasswordTwoTextBox.mMesh.value;
		var first_name = APPLICATION.mGame.mFirstNameTextBox.mMesh.value;
		var last_name = APPLICATION.mGame.mLastNameTextBox.mMesh.value;
		if (username.length < 1) 
		{
			var v = 'Missing Username';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (username.indexOf(" ") > -1)
		{
			var v = 'No spaces in username';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (passwordOne.length < 1)
		{
			var v = 'Missing Password';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (passwordOne.indexOf(" ") > -1)
		{
			var v = 'No spaces in password';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (passwordOne != passwordTwo)
		{
			var v = 'Passwords must match!';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (first_name.length < 1)
		{
			var v = 'Missing First Name!';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (first_name.indexOf(" ") > -1)
		{
			var v = 'No spaces in first name';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (last_name.length < 1)
		{
			var v = 'Missing Last Name!';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else if (last_name.indexOf(" ") > -1)
		{
			var v = 'No spaces in last name';
			this.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		}
		else
		{
	                if (APPLICATION.mSent == false)
                	{
                        	APPLICATION.mSent = true;
				APPLICATION.signupStudent(username,passwordOne,first_name,last_name);
				
                	}
                	else
                	{

                	}
		}
	},

	//goto login screen
        hitLoginButton: function()
        {
		APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
        },
        hitSchoolButton: function()
        {
  		window.location.replace("/web/login/school_login.php");
        }

});
