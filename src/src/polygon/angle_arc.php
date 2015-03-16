/*
sector: function(cx, cy, r, startAngle, endAngle, params)
{
        return this.mRaphael.path(["M", cx, cy, "L", x1, y1, "A", r, r, 0, +(endAngle - startAngle > 180), 0, x2, y2, "z"]).attr(params);
}
*/
var AngleArc = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (item,x,y,radius,start,end,r,g,b,s,op,d)
        {
		this.parent(0,0,x,y,item.mSheet.mGame,item.mRaphael,r,g,b,s,op,d);

        	var rad = Math.PI / 180;
        	var x1 = x + radius * Math.cos(-start * rad),
        	x2 = x + radius * Math.cos(-end * rad),
        	y1 = y + radius * Math.sin(-start * rad),
        	y2 = y + radius * Math.sin(-end * rad);
        
		this.mPolygon = this.mRaphael.path(["M", x, y, "L", x1, y1, "A", radius, radius, 0, +(end - start > 180), 0, x2, y2, "z"]).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

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
