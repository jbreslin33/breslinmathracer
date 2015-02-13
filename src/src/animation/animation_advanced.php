/**********************************************
public methods
----------------------
AnimationAdvanced: Handles rotating thru a series of images at intervals. 

void update(); //update the the shape using the delta time of game update

//get methods

/**********************************************
protected methods
----------------------

void animate();

************************************************/

var AnimationAdvanced = new Class(
{
Extends: Animation,

        initialize: function(shape)
        {
		this.parent(shape);

		//animation Array
		this.mAnimationAdvanced = 0;
		this.mAnimationAdvancedDelay = 10;
		this.mAnimationAdvancedDelayCounter = 0;
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
		//if that animation array exists 	
		if (this.mAnimationArray[this.mAnimation])
		{
			//if animation is out of array length set back to 0
			if (this.mAnimationAdvanced >= this.mAnimationArray[this.mAnimation].length)
			{
				this.mAnimationAdvanced = 0;
			}
		
			//if advanced animation exists	
			if (this.mAnimationArray[this.mAnimation][this.mAnimationAdvanced])
			{
				//then switch to it if we are not already there.
				if (this.mShape.mSrc != this.mAnimationArray[this.mAnimation][this.mAnimationAdvanced])
				{
					this.mShape.setSrc(this.mAnimationArray[this.mAnimation][this.mAnimationAdvanced]);
				}	
			}
		}
		//move to next advanced animation for next frame
		//wait for a delay so animations don't play too fast
		if (this.mAnimationAdvancedDelayCounter > this.mAnimationAdvancedDelay)
		{
			this.mAnimationAdvancedDelayCounter = 0;
			this.mAnimationAdvanced++;
		}
		//increment the advanced delay counter
		this.mAnimationAdvancedDelayCounter++;
	}
});
