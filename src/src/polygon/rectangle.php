var Rectangle = new Class(
{

Extends: Polygon,

        initialize: function (raphael,x,y,w,h,r,g,b,s,op)
        {
		this.mRaphael = raphael;
		this.x = x;
		this.y = y;
		this.w = w;
		this.h = h;
		
		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

 		this.mPolygon = this.mRaphael.rect(this.x, this.y, this.w, this.h).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mPolygon.mPolygon = this;
	
		this.mLastX = 0;
		this.mLastY = 0;
	},

	updateMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mPolygon.attr({x: this.x, y: this.y});

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
        },
        
	move: function(dx,dy)
        {
		this.mPolygon.updateMove(dx,dy);
        },

        up: function()
        {
        }
});
