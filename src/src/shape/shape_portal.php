var ShapePortal = new Class(
{

Extends: QuestionShape,
	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message,srcOpen,url)
        {
		this.parent(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
		this.mOpen = false;	
		this.mSrcClosed = src;
		this.mSrcOpen = srcOpen;

                //open on quiz complete??
                this.mOpenOnQuizComplete = false;

                //open on question solved
                this.mOpenOnQuestionSolved = true;
		
		this.mUrl = url; 

//document.addEvent("keydown", mApplication.keyDown);
//		this.addEvent("click", this.enterPortal);
//object.onclick=function(){SomeJavaScriptCode};
this.mDiv.onclick=function(){ this.enterPortal();  };
        },

        update: function(delta)
	{
		if (this.mOpenOnQuizComplete)
		{
	               	if (this.mGame.mQuiz.isQuizComplete())
			{
				this.mOpen = true;
			}
		}

		//open on question solved?
		if (this.mQuestion)
		{
	               	if (this.mQuestion.mSolved)
			{
				this.mOpen = true;
			}
		}
        },
/*
        onCollision: function(col)
        {
		this.parent(col);		
		
		if (this.mQuestion == '' && col.mQuestion == '')
		{
			this.enterPortal();
		}
        },
*/	
	render: function()
	{
		this.parent();

		//draw portal 
		if (this.mOpen)
		{
			this.setSrc(this.mSrcOpen);
		}
		else
		{	
			this.setSrc(this.mSrcClosed);
		}
	},

	correctAnswer: function()
	{
		this.enterPortal();
	},
	
	setOpenPortal: function(b)
	{
		this.mOpen = b;	
	},

	getOpenPortal: function()
	{
		return this.mOpen;
	},
	
	enterPortal: function()
        {
                this.mGame.mOn = false;
                window.location = this.mUrl;
        }
	


});

