/* GAME: */

var SignupSchool = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		//username	
		this.mUsernameLabel = new Shape(200,40,300,80,this,"","","");
                this.mUsernameLabel.setText('Username:');
                this.mShapeArray.push(this.mUsernameLabel);
                
		this.mUsernameTextBox = new Shape(200,40,400,80,this,"INPUT","","");
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
		this.mPasswordLabel = new Shape(200,40,300,135,this,"","","");
                this.mPasswordLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordLabel);

                this.mPasswordTextBox = new Shape(200,40,400,135,this,"INPUT","","");
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

		//Name	
		this.mNameLabel = new Shape(200,40,300,190,this,"","","");
                this.mNameLabel.setText('School Name:');
                this.mShapeArray.push(this.mNameLabel);

  		this.mNameTextBox = new Shape(200,40,400,190,this,"INPUT","","");
                this.mNameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mNameTextBox);
             	if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mNameTextBox.mMesh.attachEvent('onkeypress',this.nameTextBoxMicrosoftHit);
                }
                else
                {
                        this.mNameTextBox.mMesh.addEvent('keypress',this.nameTextBoxFirefoxHit);
                }
	
		//city	
		this.mCityLabel = new Shape(200,40,300,245,this,"","","");
                this.mCityLabel.setText('City:');
                this.mShapeArray.push(this.mCityLabel);
  		
		this.mCityTextBox = new Shape(200,40,400,245,this,"INPUT","","");
                this.mCityTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mCityTextBox);
             	if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mCityTextBox.mMesh.attachEvent('onkeypress',this.cityTextBoxMicrosoftHit);
                }
                else
                {
                        this.mCityTextBox.mMesh.addEvent('keypress',this.cityTextBoxFirefoxHit);
                }

                //state         
                this.mStateLabel = new Shape(200,40,300,300,this,"","","");
                this.mStateLabel.setText('State:');
                this.mShapeArray.push(this.mStateLabel);

                this.mStateTextBox = new Shape(200,40,400,300,this,"INPUT","","");
                this.mStateTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mStateTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mStateTextBox.mMesh.attachEvent('onkeypress',this.stateTextBoxMicrosoftHit);
                }
                else
                {
                        this.mStateTextBox.mMesh.addEvent('keypress',this.stateTextBoxFirefoxHit);
                }

                //city         
                this.mZipLabel = new Shape(200,40,300,355,this,"","","");
                this.mZipLabel.setText('Zip:');
                this.mShapeArray.push(this.mZipLabel);

                this.mZipTextBox = new Shape(200,40,400,355,this,"INPUT","","");
                this.mZipTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mZipTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mZipTextBox.mMesh.attachEvent('onkeypress',this.zipTextBoxMicrosoftHit);
                }
                else
                {
                        this.mZipTextBox.mMesh.addEvent('keypress',this.zipTextBoxFirefoxHit);
                }

		//SIGNUP BUTTON
                this.mSignupButton = new Shape(200,50,400,415,this,"BUTTON","","");
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mSignupButton.mMesh.attachEvent("onclick",this.hitSignupButton);
                }
                else
                {
                        this.mSignupButton.mMesh.addEvent('click',this.hitSignupButton);
                }
                this.mShapeArray.push(this.mSignupButton);
                this.mSignupButton.mMesh.innerHTML = 'Create School';


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
                        APPLICATION.mGame.mNameTextBox.mMesh.focus();
                }
        },

        passwordTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mNameTextBox.mMesh.focus();
                }
        },

	//name
        nameTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mCityTextBox.mMesh.focus();
                }
        },

        nameTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mCityTextBox.mMesh.focus();
                }
        },

        //city
        cityTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mStateTextBox.mMesh.focus();
                }
        },

        cityTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mStateTextBox.mMesh.focus();
                }
        },

       	//state
        stateTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mZipTextBox.mMesh.focus();
                }
        },

        stateTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mZipTextBox.mMesh.focus();
                }
        },



	//sendSignup 
        zipTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
			APPLICATION.mGame.sendSignup();
                }
        },

        zipTextBoxFirefoxHit: function(e)
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
		var name = APPLICATION.mGame.mNameTextBox.mMesh.value;
		var city = APPLICATION.mGame.mCityTextBox.mMesh.value;
		var state = APPLICATION.mGame.mStateTextBox.mMesh.value;
		var zip = APPLICATION.mGame.mZipTextBox.mMesh.value;
		APPLICATION.signupSchool(username,password,name,city,state,zip);
	},

	//goto login screen
        hitLoginButton: function()
        {
		APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
        },
        hitSchoolButton: function()
        {
  		window.location.replace("/web/login/school_login.php");
        }

});
