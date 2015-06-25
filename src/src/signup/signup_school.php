/* GAME: */

var SignupSchool = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		//username	
		this.mUsernameLabel = new Shape(200,40,120,80,this,"","","");
                this.mUsernameLabel.setText('Username:');
                this.mShapeArray.push(this.mUsernameLabel);
                
		this.mUsernameTextBox = new Shape(200,40,220,80,this,"INPUT","","");
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

		//password one	
		this.mPasswordOneLabel = new Shape(200,40,120,135,this,"","","");
                this.mPasswordOneLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordOneLabel);

                this.mPasswordOneTextBox = new Shape(200,40,220,135,this,"INPUT","","");
                this.mPasswordOneTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mPasswordOneTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordOneTextBox.mMesh.attachEvent('onkeypress',this.passwordOneTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordOneTextBox.mMesh.addEvent('keypress',this.passwordOneTextBoxFirefoxHit);
                }

                //password two 
                this.mPasswordTwoLabel = new Shape(200,40,120,190,this,"","","");
                this.mPasswordTwoLabel.setText('Password:');
                this.mShapeArray.push(this.mPasswordTwoLabel);

                this.mPasswordTwoTextBox = new Shape(200,40,220,190,this,"INPUT","","");
                this.mPasswordTwoTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mPasswordTwoTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordTwoTextBox.mMesh.attachEvent('onkeypress',this.passwordTwoTextBoxMicrosoftHit);
                }
                else
                {
                        this.mPasswordTwoTextBox.mMesh.addEvent('keypress',this.passwordTwoTextBoxFirefoxHit);
                }

		//Name	
		this.mNameLabel = new Shape(200,40,120,245,this,"","","");
                this.mNameLabel.setText('School:');
                this.mShapeArray.push(this.mNameLabel);

  		this.mNameTextBox = new Shape(200,40,220,245,this,"INPUT","","");
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
		this.mCityLabel = new Shape(200,40,120,300,this,"","","");
                this.mCityLabel.setText('City:');
                this.mShapeArray.push(this.mCityLabel);
  		
		this.mCityTextBox = new Shape(200,40,220,300,this,"INPUT","","");
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
                this.mStateLabel = new Shape(200,40,120,355,this,"","","");
                this.mStateLabel.setText('State:');
                this.mShapeArray.push(this.mStateLabel);

                this.mStateTextBox = new Shape(200,40,220,355,this,"INPUT","","");
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

                //zip         
                this.mZipLabel = new Shape(200,40,450,80,this,"","","");
                this.mZipLabel.setText('Zip:');
                this.mShapeArray.push(this.mZipLabel);

                this.mZipTextBox = new Shape(200,40,550,80,this,"INPUT","","");
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

                //email one 
                this.mEmailOneLabel = new Shape(200,40,450,135,this,"","","");
                this.mEmailOneLabel.setText('Email:');
                this.mShapeArray.push(this.mEmailOneLabel);

                this.mEmailOneTextBox = new Shape(200,40,550,135,this,"INPUT","","");
                this.mEmailOneTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mEmailOneTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mEmailOneTextBox.mMesh.attachEvent('onkeypress',this.emailOneTextBoxMicrosoftHit);
                }
                else
                {
                        this.mEmailOneTextBox.mMesh.addEvent('keypress',this.emailOneTextBoxFirefoxHit);
                }

                //email two
                this.mEmailTwoLabel = new Shape(200,40,450,190,this,"","","");
                this.mEmailTwoLabel.setText('Email:');
                this.mShapeArray.push(this.mEmailTwoLabel);

                this.mEmailTwoTextBox = new Shape(200,40,550,190,this,"INPUT","","");
                this.mEmailTwoTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mEmailTwoTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mEmailTwoTextBox.mMesh.attachEvent('onkeypress',this.emailTwoTextBoxMicrosoftHit);
                }
                else
                {
                        this.mEmailTwoTextBox.mMesh.addEvent('keypress',this.emailTwoTextBoxFirefoxHit);
                }

                //code
                this.mCodeLabel = new Shape(300,40,500,245,this,"","","");
                this.mCodeLabel.setText('School Signup Password:');
                this.mShapeArray.push(this.mCodeLabel);

                this.mCodeTextBox = new Shape(80,40,610,245,this,"INPUT","","");
                this.mCodeTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mCodeTextBox);
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mCodeTextBox.mMesh.attachEvent('onkeypress',this.codeTextBoxMicrosoftHit);
                }
                else
                {
                        this.mCodeTextBox.mMesh.addEvent('keypress',this.codeTextBoxFirefoxHit);
                }


		//SIGNUP BUTTON
                this.mSignupButton = new Shape(200,50,450,300,this,"BUTTON","","");
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
                this.mLoginButton = new Shape(100,50,700,360,this,"BUTTON","","");
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
                        APPLICATION.mGame.mNameTextBox.mMesh.focus();
                }
        },

        passwordTwoTextBoxFirefoxHit: function(e)
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

        //zip
        zipTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mEmailOneTextBox.mMesh.focus();
                }
        },

        zipTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mEmailOneTextBox.mMesh.focus();
                }
        },

        //emailOne
        emailOneTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mEmailTwoTextBox.mMesh.focus();
                }
        },

        emailOneTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mEmailTwoTextBox.mMesh.focus();
                }
        },

        //emailTwo
        emailTwoTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mCodeTextBox.mMesh.focus();
                }
        },

        emailTwoTextBoxFirefoxHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mCodeTextBox.mMesh.focus();
                }
        },

	//sendSignup 
        codTextBoxMicrosoftHit: function(e)
        {
                if (e.keyCode == 13)
                {
			APPLICATION.mGame.sendSignup();
                }
        },

        codeTextBoxFirefoxHit: function(e)
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
		var password = APPLICATION.mGame.mPasswordOneTextBox.mMesh.value;
		var name = APPLICATION.mGame.mNameTextBox.mMesh.value;
		var city = APPLICATION.mGame.mCityTextBox.mMesh.value;
		var state = APPLICATION.mGame.mStateTextBox.mMesh.value;
		var zip = APPLICATION.mGame.mZipTextBox.mMesh.value;
		var email = APPLICATION.mGame.mEmailOneTextBox.mMesh.value;
		var student_code = APPLICATION.mGame.mCodeTextBox.mMesh.value;
		APPLICATION.signupSchool(username,password,name,city,state,zip,email,student_code);
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
