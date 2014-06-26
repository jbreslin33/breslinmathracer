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
 
	inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        //APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.log('enter hit');	
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.mItem)
					{
						APPLICATION.mGame.mSheet.mItem.checkUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
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
			APPLICATION.log('enter hit');	
			if (APPLICATION.mGame)
			{
				if (APPLICATION.mGame.mSheet)
				{
					if (APPLICATION.mGame.mSheet.mItem)
					{
						APPLICATION.mGame.mSheet.mItem.checkUserAnswer(APPLICATION.mGame.mSheet.getItem().mNumAnswer.mMesh.value); 
					}
				}
			}
                }
        }
});
