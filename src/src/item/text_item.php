/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem = new Class(
{
Extends: Item,
        initialize: function(question,answer)
        {
		this.parent(question,answer);
	},
 
	createWorld: function()
        {
                //question
                this.mNumQuestion = new Shape(100,50,325,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
		this.mNumQuestion.setText(this.mQuestion);

 		//answer
                this.mNumAnswer = new Shape(100,50,425,100,this,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mNumAnswer.mMesh.attachEvent('onkeypress',this.inputKeyHitEnter);
                }
                else
                {
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                }
                this.mShapeArray.push(this.mNumAnswer);
        },

	destroyWorld: function()
        {
                //shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].destructor();
                        this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
        },
 
	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
					}
				}
			}
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
                       	// APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.getItem())
					{
						APPLICATION.mGame.mSheet.getItem().setUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
					}
				}
			}
                }
        }
});
