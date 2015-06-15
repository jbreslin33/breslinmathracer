/* GAME: */

var login = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.mSent = false;
                
		this.mServerLabel = new Shape(200,50,400,50,this,"","","");
                this.mServerLabel.setText('');
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
                
		//SCHOOL LOGIN BUTTON
                this.mSchoolLoginButton = new Shape(200,50,650,240,this,"BUTTON","","");
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


                //SIGNUP STUDENT BUTTON
                this.mStudentSignupButton = new Shape(200,50,650,300,this,"BUTTON","","");
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
                
		//SCHOOL SIGNUP BUTTON
                this.mSchoolSignupButton = new Shape(200,50,650,360,this,"BUTTON","","");
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
		if (this.mSent == false)
		{
			this.mSent = true;
                	var username = APPLICATION.mGame.mUsernameTextBox.mMesh.value;
                	var password = APPLICATION.mGame.mPasswordTextBox.mMesh.value;

                	APPLICATION.login(username,password);
		}
		else
		{

		}
        },

	hitSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSIGNUP_APPLICATION);
        },

	hitSchoolLoginButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSCHOOL_LOGIN_APPLICATION);
        }
});
