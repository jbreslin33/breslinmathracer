var ShapeVictory = new Class(
{

Extends: ShapeAI,
 	initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);
		this.mDirection = 0;

                //collision on or off
                this.mCollidable = false;
                this.mCollisionOn = false;
        },
	
 	ai: function()
        {
                var direction = Math.floor(Math.random()*19)
		if (this.mPosition < 290)
		{
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
		}
		else
		{
                if (direction == 0) //left
                {
                        this.mKey.mX = -1;
                        this.mKey.mY = 0;
                }
                if (direction == 1) //right
                {
                        this.mKey.mX = 1;
                        this.mKey.mY = 0;
                }
                if (direction == 2) //up
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = -1;
                }
                if (direction == 3) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 4) //leftup
                {
                        this.mKey.mX = -.5;
                        this.mKey.mY = -.5;
                }
                if (direction == 5) //leftdown
                {
                        this.mKey.mX = -.5;
                        this.mKey.mY = .5;
                }
                if (direction == 6) //rightup
                {
                        this.mKey.mX = .5;
                        this.mKey.mY = -.5;
                }
                if (direction == 7) //rightdown
                {
                        this.mKey.mX = .5;
                        this.mKey.mY = .5;
                }
                if (direction == 8) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 9) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 10) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 11) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 12) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 13) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 14) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 15) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 16) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 17) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
                if (direction == 18) //down
                {
                        this.mKey.mX = 0;
                        this.mKey.mY = 1;
                }
		}
        }
});

