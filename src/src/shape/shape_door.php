var ShapeDoor = new Class(
{

Extends: QuestionShape,
	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message,srcOpen,url)
        {
		this.parent(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
		this.mOpen = false;	
		this.mSrcClosed = src;
		this.mSrcOpen = srcOpen;
		this.mEnteredDoor = false;
        },
	
	reset: function()
	{
		this.mEnteredDoor = false 
		this.mOpen = false;	
	},

        onCollision: function(col)
        {
		this.parent(col);		
		
		if (this.mQuestion == '' && col.mQuestion == '')
		{
			this.enterDoor();
		}
        },
	
	render: function()
	{
		this.parent();

		//draw door
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
		this.enterDoor();
	},
	
	setOpenDoor: function(b)
	{
		this.mOpen = b;	
	},

	getOpenDoor: function()
	{
		return this.mOpen;
	},
	
	enterDoor: function()
        {
		if (!this.mEnteredDoor)
		{
			this.mEnteredDoor = true;
		}
        }
});

