/* GAME: */

var signup = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		//username	
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

		//password	
		this.mPasswordLabel = new Shape(200,50,300,165,this,"","","");
                this.mPasswordLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordLabel);

                this.mPasswordTextBox = new Shape(200,50,400,165,this,"INPUT","","");
                this.mPasswordTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mPasswordTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordTextBox.mMesh.attachEvent('onkeypress',this.passwordTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordTextBox.mMesh.addEvent('keypress',this.passwordTextBoxFirefoxHit);
                }

		//firstName	
		this.mFirstNameLabel = new Shape(200,50,300,230,this,"","","");
                this.mFirstNameLabel.setText('First Name:');
                this.mShapeArray.push(this.mFirstNameLabel);

  		this.mFirstNameTextBox = new Shape(200,50,400,230,this,"INPUT","","");
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
		this.mLastNameLabel = new Shape(200,50,300,295,this,"","","");
                this.mLastNameLabel.setText('Last Name:');
                this.mShapeArray.push(this.mLastNameLabel);
  		
		this.mLastNameTextBox = new Shape(200,50,400,295,this,"INPUT","","");
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
                this.mSignupButton = new Shape(200,50,400,360,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSignupButton.mMesh.attachEvent("onclick",this.hitSignupButton);
                }
                else
                {
                        this.mSignupButton.mMesh.addEvent('click',this.hitSignupButton);
                }
                this.mShapeArray.push(this.mSignupButton);
                this.mSignupButton.mMesh.innerHTML = 'SIGNUP';


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
                this.mLoginButton.mMesh.innerHTML = 'Login';
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

	//password
 	passwordTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mFirstNameTextBox.mMesh.focus();
                }
        },

        passwordTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mFirstNameTextBox.mMesh.focus();
                }
        },

	//firstName
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
		var password = APPLICATION.mGame.mPasswordTextBox.mMesh.value;
		var first_name = APPLICATION.mGame.mFirstNameTextBox.mMesh.value;
		var last_name = APPLICATION.mGame.mLastNameTextBox.mMesh.value;
		
		APPLICATION.signup(username,password,first_name,last_name);
	},

	//goto login screen
        hitLoginButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
        }
});
