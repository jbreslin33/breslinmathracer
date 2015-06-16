/* GAME: */

var Login = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.mSent = false;
                
		this.mServerLabel = new Shape(200,50,440,50,this,"","","");
                this.mServerLabel.setText('Login');
                this.mShapeArray.push(this.mServerLabel);

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
                this.mStudentLoginButton = new Shape(200,50,650,70,this,"BUTTON","","");
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
              	
		//TEACHER LOGIN BUTTON
                this.mTeacherLoginButton = new Shape(200,50,650,130,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTeacherLoginButton.mMesh.attachEvent("onclick",this.hitTeacherLoginButton);
                }
                else
                {
                        this.mTeacherLoginButton.mMesh.addEvent('click',this.hitTeacherLoginButton);
                }
                this.mShapeArray.push(this.mTeacherLoginButton);
                this.mTeacherLoginButton.mMesh.innerHTML = 'Teacher Login';
                
		//SCHOOL LOGIN BUTTON
                this.mSchoolLoginButton = new Shape(200,50,650,190,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSchoolLoginButton.mMesh.attachEvent("onclick",this.hitSchoolLoginButton);
                }
                else
                {
                        this.mSchoolLoginButton.mMesh.addEvent('click',this.hitSchoolLoginButton);
                }
                this.mShapeArray.push(this.mSchoolLoginButton);
                this.mSchoolLoginButton.mMesh.innerHTML = 'School Login';


                //STUDENT SIGNUP BUTTON
                this.mStudentSignupButton = new Shape(200,50,650,250,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mStudentSignupButton.mMesh.attachEvent("onclick",this.hitSignupButton);
                }
                else
                {
                        this.mStudentSignupButton.mMesh.addEvent('click',this.hitStudentSignupButton);
                }
                this.mShapeArray.push(this.mStudentSignupButton);
                this.mStudentSignupButton.mMesh.innerHTML = 'Create Student';

                //TEACHER SIGNUP BUTTON
                this.mTeacherSignupButton = new Shape(200,50,650,310,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mTeacherSignupButton.mMesh.attachEvent("onclick",this.hitTeacherSignupButton);
                }
                else
                {
                        this.mTeacherSignupButton.mMesh.addEvent('click',this.hitTeacherSignupButton);
                }
                this.mShapeArray.push(this.mTeacherSignupButton);
                this.mTeacherSignupButton.mMesh.innerHTML = 'Create Teacher';

                
		//SCHOOL SIGNUP BUTTON
                this.mSchoolSignupButton = new Shape(200,50,650,370,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSchoolSignupButton.mMesh.attachEvent("onclick",this.hitSchoolSignupButton);
                }
                else
                {
                        this.mSchoolSignupButton.mMesh.addEvent('click',this.hitSchoolSignupButton);
                }
                this.mShapeArray.push(this.mSchoolSignupButton);
                this.mSchoolSignupButton.mMesh.innerHTML = 'Create School';

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
		//override
        },
	
	hitStudentLoginButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSTUDENT_LOGIN_APPLICATION);
        },
	
	hitTeacherLoginButton: function()
        {
		APPLICATION.log('hit t');
		APPLICATION.mStateMachine.changeState(APPLICATION.mTEACHER_LOGIN_APPLICATION);
        },

	hitSchoolLoginButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSCHOOL_LOGIN_APPLICATION);
        },
	
	hitSchoolSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSCHOOL_SIGNUP_APPLICATION);
        },
	
	hitTeacherSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mTEACHER_SIGNUP_APPLICATION);
        },

	hitStudentSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSTUDENT_SIGNUP_APPLICATION);
        }
});
