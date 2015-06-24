/* GAME: */

var SchoolLogin = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

                /*************** Title **********/
                this.mTitleLabel.setText('School Login');
		
		this.mSent = false;

		this.mUsernameLabel = new Shape(200,50,300,100,this,"","","");
                this.mUsernameLabel.setText('Username:');
                this.mShapeArray.push(this.mUsernameLabel);

                this.mUsernameTextBox = new Shape(200,50,400,100,this,"INPUT","","");
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


                this.mPasswordLabel = new Shape(200,50,300,165,this,"","","");
                this.mPasswordLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordLabel);

                this.mPasswordTextBox = new Shape(200,50,400,165,this,"INPUT","","");
                this.mPasswordTextBox.mMesh.value = '';
		this.mPasswordTextBox.mMesh.setAttribute("type", "password");
                this.mShapeArray.push(this.mPasswordTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordTextBox.mMesh.attachEvent('onkeypress',this.passwordTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordTextBox.mMesh.addEvent('keypress',this.passwordTextBoxFirefoxHit);
                }
 
		//LOGIN BUTTON
                this.mLoginButton = new Shape(200,50,400,230,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mLoginButton.mMesh.attachEvent("onclick",this.hitLoginButton);
                }
                else
                {
                        this.mLoginButton.mMesh.addEvent('click',this.hitLoginButton);
                }
                this.mShapeArray.push(this.mLoginButton);
                this.mLoginButton.mMesh.innerHTML = 'SIGN IN';

                //STUDENT LOGIN BUTTON
                this.mStudentLoginButton = new Shape(200,50,650,240,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mStudentLoginButton.mMesh.attachEvent("onclick",this.hitStudentLoginButton);
                }
                else
                {
                        this.mStudentLoginButton.mMesh.addEvent('click',this.hitStudentLoginButton);
                }
                this.mShapeArray.push(this.mStudentLoginButton);
                this.mStudentLoginButton.mMesh.innerHTML = 'Student Login';

                //SIGNUP BUTTON
                this.mSignupButton = new Shape(200,50,650,360,this,"BUTTON","","");
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

                //SCHOOL BUTTON
                this.mSchoolButton = new Shape(200,50,650,300,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSchoolButton.mMesh.attachEvent("onclick",this.hitSchoolButton);
                }
                else
                {
                        this.mSchoolButton.mMesh.addEvent('click',this.hitSchoolButton);
                }
                this.mShapeArray.push(this.mSchoolButton);
                this.mSchoolButton.mMesh.innerHTML = 'Create School';
	},

        //***tab to next

        //username
        usernameTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mPasswordTextBox.mMesh.focus();
                }
        },

        usernameTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mPasswordTextBox.mMesh.focus();
                }
        },

       	//sendLogin
        passwordTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.sendLogin();
                }
        },

        passwordTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.sendLogin();
                }
        },

        hitLoginButton: function()
        {
                APPLICATION.mGame.sendLogin();
        },

        sendLogin: function()
        {
		if (this.mSent == false)
		{
			this.mSent = true;
                	var username = APPLICATION.mGame.mUsernameTextBox.mMesh.value;
                	var password = APPLICATION.mGame.mPasswordTextBox.mMesh.value;

                	APPLICATION.schoolLogin(username,password);
		}
		else
		{

		}
        },

	hitSignupButton: function()
        {
		APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
        },

	hitSchoolButton: function()
        {
		APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
        },
       
	hitStudentLoginButton: function()
        {
                APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
        }

});
