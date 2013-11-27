var ShapeVictory = new Class(
{

Extends: ShapeAI,
 	initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);
        },
	
	ai: function()
        {
                var direction = Math.floor(Math.random()*2)

                if (direction == 0) //up
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = -1;
                }
                if (direction == 1) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
        },

});

