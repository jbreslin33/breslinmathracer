var ShapeChaser = new Class(
{

Extends: ShapeAI,
 	initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);
        },

	onCollision: function(col)
        {
		this.parent(col);
                if (col == this.mGame.mControlObject)
                {
			this.mGame.resetGame();
                }
        }
});

