/* GAME: */

var signup = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);

		APPLICATION.log('signup::constructor');	
                this.mUsernameTextBox = new Shape(100,50,425,100,this,"INPUT","","");
                this.mUsernameTextBox.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mUsernameTextBox.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mUsernameTextBox.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.mShapeArray.push(this.mUsernameTextBox);

	
	},

        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                }
        },

        inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                }
        },

});
