/* GAME: */

var login = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		APPLICATION.log('login::constructor');	

                this.mUsernameTextBox = new Shape(200,50,125,150,this,"INPUT","","");
                this.mUsernameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mUsernameTextBox);

                this.mPasswordTextBox = new Shape(200,50,125,220,this,"INPUT","","");
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
                this.mLoginButton = new Shape(200,50,125,300,this,"BUTTON","","");
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
                this.mSignupButton = new Shape(200,50,500,350,this,"BUTTON","","");
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

        hitSignupButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mSIGNUP_APPLICATION);
        },
        
	hitLoginButton: function()
        {
		//APPLICATION.mStateMachine.changeState(APPLICATION.mSIGNUP_APPLICATION);
		APPLICATION.log('hit login button');
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
