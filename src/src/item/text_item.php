/*
TextItem: this class just is barebones question and answer box to hit enter in.
*/
var TextItem = new Class(
{
Extends: Item,
        initialize: function(question,answer)
        {
		this.mStateLogs = true;		
	
		//question
		this.mQuestion = question;

		//answer
		this.mAnswerArray = new Array();
		this.mAnswerArray.push(answer);
		
		//tip
		this.mTipArray = new Array();

		//is solved
		this.mSolved = false;

  		//answer pool
                this.mAnswerPool = new Array();

		//choiceArray
		this.mChoiceA = '';
		this.mChoiceB = '';
		this.mChoiceC = '';
		this.mChoiceD = '';

		this.mShapeArray   = new Array();
        
		//randomChoices
		this.mRandomChoices = false;

		this.mType = 0; //uncategorized
 
		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM       = new GLOBAL_ITEM(this);
                this.mINIT_ITEM         = new INIT_ITEM         (this);
                this.mRESET_ITEM        = new RESET_ITEM        (this);
                this.mNORMAL_ITEM       = new NORMAL_ITEM       (this);

                //pad states
                this.mFIRST_TIME_ITEM   = new FIRST_TIME_ITEM(this);
                this.mWAITING_ON_ANSWER_ITEM   = new WAITING_ON_ANSWER_ITEM(this);
                this.mCORRECT_ANSWER_ITEM = new CORRECT_ANSWER_ITEM(this);
                this.mSHOW_CORRECT_ANSWER_ITEM = new SHOW_CORRECT_ANSWER_ITEM(this);
                this.mOUT_OF_TIME_ITEM = new OUT_OF_TIME_ITEM(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM);
                this.mStateMachine.changeState(this.mINIT_ITEM);
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
                }
        },
 
	inputKeyHitEnter: function(e)
        {
                if (e.keyCode == 13)
                {
                       	// APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.log('enter hit');	
                }
        }
});
