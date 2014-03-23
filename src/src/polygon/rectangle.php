var Rectangle = new Class(
{

Extends: RaphaelPolygon,

        initialize: function (width,height,spawnX,spawnY,game,raphael,x,y,w,h,r,g,b,s,op,d)
        {
		this.parent(width,height,spawnX,spawnY,game,raphael,r,g,b,s,op,d);
		this.x = x;
		this.y = y;
		this.w = w;
		this.h = h;
		
 		this.mPolygon = this.mRaphael.rect(this.x, this.y, this.w, this.h).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
	
                if (this.mDrag)
                {
                        this.mPolygon.drag(this.move, this.start, this.up);
                }
	},

	dragMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mPolygon.attr({x: this.x, y: this.y});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
