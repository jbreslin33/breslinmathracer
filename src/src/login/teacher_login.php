/* GAME: */

var TeacherLogin = new Class(
{

Extends: Login,

	initialize: function(application)
	{
       		this.parent(application);
		APPLICATION.log('init');
		
                this.mServerLabel.setText('Teacher Login');
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
        }
});
