var Circle = new Class(
{

Extends: Polygon,
	
        initialize: function (raphael,x,y,radius,r,g,b,s,op,d)
        {
		this.parent();
		this.mRaphael = raphael;
		this.x = x;
		this.y = y;
		this.mRadius = radius;
		
		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

 		this.mPolygon = this.mRaphael.circle(this.x, this.y, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
	
		this.mLastX = 0;
		this.mLastY = 0;

	        this.mDrag = d;

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
 		
		this.mPolygon.attr({cx: this.x, cy: this.y});

                this.mLastX = dx;
                this.mLastY = dy;
	},
	
	resetLast: function()
	{
                this.mLastX = 0;
                this.mLastY = 0;
	},

        start: function()
        {
		this.mPolygon.resetLast();
                this.animate({r: 50, opacity: .25}, 500, ">");
        },
        
	move: function(dx,dy)
        {
		this.mPolygon.dragMove(dx,dy);
        },

        up: function()
        {
 		this.animate({r: 25, opacity: .5}, 500, ">");
        }
});
