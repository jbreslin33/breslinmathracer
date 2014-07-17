/* GAME: */

var login = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		APPLICATION.log('login::constructor');	
               
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
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mPasswordTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mPasswordTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.mShapeArray.push(this.mPasswordTextBox);
       
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
                this.mLoginButton.mMesh.innerHTML = 'LOGIN';


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
                this.mSignupButton.mMesh.innerHTML = 'SIGNUP';
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




        hitLoginButton: function()
        {
                var username = APPLICATION.mGame.mUsernameTextBox.mMesh.value;
                var password = APPLICATION.mGame.mPasswordTextBox.mMesh.value;

                APPLICATION.login(username,password);
        },
        
	hitSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSIGNUP_APPLICATION);
        },

        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.log('hit enter');
                }
        },

        inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.log('hit enter');
                }
        }

});
