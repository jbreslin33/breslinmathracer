var Circle = new Class(
{
        initialize: function (raphael,x,y,radius,r,g,b,s,op)
        {
		this.mRaphael = raphael;
		this.x = x;
		this.y = y;
		this.mRadius = radius;
		
		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

 		this.mCircle = this.mRaphael.circle(this.x, this.y, this.mRadius).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mCircle.mCircle = this;
	
		this.mLastX = 0;
		this.mLastY = 0;
	},

	updateMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mCircle.attr({cx: this.x, cy: this.y});

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
		this.mCircle.resetLast();
                this.animate({r: 70, opacity: .25}, 500, ">");
        },
        
	move: function(dx,dy)
        {
		this.mCircle.updateMove(dx,dy);
        },

        up: function()
        {
 		this.animate({r: 50, opacity: .5}, 500, ">");
        }
});
