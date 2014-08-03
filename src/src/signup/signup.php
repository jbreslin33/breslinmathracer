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

		//grade ...this should be a drop down. does not have to come from db though it can be hardcoded.
		//for now it will be text though
               
		//mPracticeInfo
                this.mGradeSelect = new Shape(200,50,200,295,this,"SELECT","","");
                this.addShape(this.mGradeSelect);

                var optionK = document.createElement("option");
                optionK.value = 1;  
                optionK.text = 'k';   
                this.mGradeSelect.mMesh.appendChild(optionK);
                
		var option1 = document.createElement("option");
                option1.value = 2;  
                option1.text = '1';   
                this.mGradeSelect.mMesh.appendChild(option1);
		
		var option2 = document.createElement("option");
                option2.value = 3;  
                option2.text = '2';   
                this.mGradeSelect.mMesh.appendChild(option2);

		var option3 = document.createElement("option");
                option3.value = 4;  
                option3.text = '3';   
                this.mGradeSelect.mMesh.appendChild(option3);
		
		var option4 = document.createElement("option");
                option4.value = 5;  
                option4.text = '4';   
                this.mGradeSelect.mMesh.appendChild(option4);
		
		var option5 = document.createElement("option");
                option5.value = 6;  
                option5.text = '5';   
                this.mGradeSelect.mMesh.appendChild(option5);
	

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
