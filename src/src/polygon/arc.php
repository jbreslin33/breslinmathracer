var Arc = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,raphael,x,y,radius,start,end,r,g,b,s,op,d)
        {
		this.parent(0,0,x,y,game,raphael,r,g,b,s,op,d);

		//find center for mPosition...
		sX = x;
		sY = y;

		var f = ((end - start) > Math.PI) ? 1 : 0;

                var sx = radius * Math.cos(start);
                var sy = radius * Math.sin(start);
                var ex = x + radius * Math.cos(end);
                var ey = y + radius * Math.sin(end);
		
 		this.mPathString = "M " + x + " " + y + " l "
                + sx + " " + sy + " A " + radius
                + " " + radius + " 0 " + f + " 1 "
                + ex + " " + ey + " z";
		
		this.mPolygon = this.mRaphael.path("" + this.mPathString).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

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

		//update mPosition
		this.mPosition.mX += deltaX; 
		this.mPosition.mY += deltaY; 

                this.x1 += deltaX;
                this.y1 += deltaY;
                this.x2 += deltaX;
                this.y2 += deltaY;
                this.x3 += deltaX;
                this.y3 += deltaY;

                this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2 + " L" + this.x3 + "," + this.y3 + " z";
                this.mPolygon.attr({path:"" + this.mPathString});

                this.mLastX = dx;
                this.mLastY = dy;
	}
});
