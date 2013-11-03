var BusDriver = new Class(
{

Extends: Player,
 	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        {
                this.parent(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        },

	update: function(delta)
	{
		this.parent(delta);
	}

});

