/**********************************************
public methods
----------------------
Animation: Needs 8 animations to work. Plug in images to all 8 directions. They can of course be the same image. If so it won't waste time
switching them as if we have a check for that.

void update(); //update the the shape using the delta time of game update

//get methods

/**********************************************
protected methods
----------------------

void animate();

************************************************/

var Animation = new Class(
{
        initialize: function(shape)
        {
		//shape to animate
		this.mShape = shape;

		//animation Array
		this.mAnimation = 0;
		this.mAnimationArray = new Array(); //at this point it looks like we would have 9 or 0-8 with 0 idle and 1 north and 8 north west.
        },

/******************** PUBLIC METHODS *************/

/****** UTILITY METHODS ******************/

        update: function()
        {
		//animation--let's play a certain animation base on velocity. but for now let's do it on keystroke?
		//scratch that. velocity should determine if run or walk animation is played.
		//so  we will simply use direction keys

		//now we have to loop thru based on timer and mAnimationArray[]
		if (this.mShape.mKey.mX == 0 && this.mShape.mKey.mY == 0)
		{
			//this.mAnimation = 0;
		}
		//north 
		if (this.mShape.mKey.mX == 0 && this.mShape.mKey.mY == -1)
		{
			this.mAnimation = 1;
		} 
		//north east
		if (this.mShape.mKey.mX == .5 && this.mShape.mKey.mY == -.5)
		{
			this.mAnimation = 2;
		} 
		//east
		if (this.mShape.mKey.mX == 1 && this.mShape.mKey.mY == 0)
		{
			this.mAnimation = 3;
		} 
		//south east
		if (this.mShape.mKey.mX == .5 && this.mShape.mKey.mY == .5)
		{
			this.mAnimation = 4;
		} 
		//south
		if (this.mShape.mKey.mX == 0 && this.mShape.mKey.mY == 1)
		{
			this.mAnimation = 5;
		} 
		//south west
		if (this.mShape.mKey.mX == -.5 && this.mShape.mKey.mY == .5)
		{
			this.mAnimation = 6;
		} 
		//west
		if (this.mShape.mKey.mX == -1 && this.mShape.mKey.mY == 0)
		{
			this.mAnimation = 7;
		}
		//north west
		if (this.mShape.mKey.mX == -.5 && this.mShape.mKey.mY == -.5)
		{
			this.mAnimation = 8;
		}

		this.animate();
	},
	
	animate: function()
	{
		//if that animation exists 	
		if (this.mAnimationArray[this.mAnimation])
		{
			//then switch to it if we are not already there.
			if (this.mShape.mSrc != this.mAnimationArray[this.mAnimation])
			{
				this.mShape.setSrc(this.mAnimationArray[this.mAnimation]);
			}	
		}
	},

	addAnimations: function(pic,extension)
	{
        	for (i = 0; i < 9; i++)
		{
        		this.mShape.mAnimation.mAnimationArray[i] = new Array();
                	this.mShape.mAnimation.mAnimationArray[i][0] = pic + i + extension;
		}	
	}
});
