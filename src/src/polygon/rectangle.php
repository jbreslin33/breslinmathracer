var Rectangle = new Class(
{
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

 		this.mRectangle = this.mRaphael.rect(this.x, this.y, this.w, this.h).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

		this.mRectangle.mRectangle = this;
	
		this.mLastX = 0;
		this.mLastY = 0;
	},

	updateMove: function(dx,dy)
	{
   		var deltaX = dx - this.mLastX;
                var deltaY = dy - this.mLastY;

                this.x += deltaX;
                this.y += deltaY;
 		
		this.mRectangle.attr({x: this.x, y: this.y});

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
		this.mRectangle.resetLast();
            //    this.animate({r: 70, opacity: .25}, 500, ">");
        },
        
	move: function(dx,dy)
        {
		this.mRectangle.updateMove(dx,dy);
        },

        up: function()
        {
 		//this.animate({r: 50, opacity: .5}, 500, ">");
        }
});
