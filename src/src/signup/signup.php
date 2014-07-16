/* GAME: */

var signup = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		APPLICATION.log('signup::constructor');	
                this.mUsernameTextBox = new Shape(200,50,125,150,this,"INPUT","","");
                this.mUsernameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mUsernameTextBox);

                this.mPasswordTextBox = new Shape(200,50,125,220,this,"INPUT","","");
                this.mPasswordTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mPasswordTextBox);

  		this.mFirstNameTextBox = new Shape(200,50,125,290,this,"INPUT","","");
                this.mFirstNameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mFirstNameTextBox);
  		
		this.mLastNameTextBox = new Shape(200,50,125,360,this,"INPUT","","");
                this.mLastNameTextBox.mMesh.value = '';
                this.mShapeArray.push(this.mLastNameTextBox);
             	if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mLastNameTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mLastNameTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }

       
		//SIGNUP BUTTON
                this.mSignupButton = new Shape(200,50,125,430,this,"BUTTON","","");
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
                this.mLoginButton = new Shape(200,50,500,350,this,"BUTTON","","");
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
	
	hitSignupButton: function()
        {
		//APPLICATION.mStateMachine.changeState(APPLICATION.mSIGNUP_APPLICATION);
		APPLICATION.log('hit signup button');
        },

        hitLoginButton: function()
        {
		APPLICATION.mStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
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
