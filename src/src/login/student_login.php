/* GAME: */

var StudentLogin = new Class(
{

Extends: Login,

	initialize: function(application)
	{
       		this.parent(application);
		
                this.mServerLabel.setText('Student Login');
	},

        sendLogin: function()
        {
		if (this.mSent == false)
		{
			this.mSent = true;
                	var username = APPLICATION.mGame.mUsernameTextBox.mMesh.value;
                	var password = APPLICATION.mGame.mPasswordTextBox.mMesh.value;

                	APPLICATION.login(username,password,1);
		}
		else
		{

		}
        }
});
