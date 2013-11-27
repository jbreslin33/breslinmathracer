var ShapeVictory = new Class(
{

Extends: ShapeAI,
 	initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);
		this.mDirection = 0;
        },
	
	ai: function()
        {
		this.parent();
/*
                var direction = Math.floor(Math.random()*2)

                if (direction == 0 && this.mDirection != 0) //up
                {
			this.mDirection = 0;
                        this.mKey.mX = 0;
                        this.mKey.mY = -1;
                }
                if (direction == 1 && this.mDirection != 1) //down
                {
			this.mDirection = 1;
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
*/
        },

});

