var RaphaelPolygon = new Class(
{
Extends: Polygon,
        initialize: function (height,width,spawnX,spawnY,game,raphael,r,g,b,s,op,d,type)
        {
		this.parent(height,width,spawnX,spawnY,game);
		this.mRaphael = raphael;
		
		this.mRed = r;
		this.mGreen = g;
		this.mBlue = b;
		this.mStroke = s;
		this.mOpacity = op;

		//shape type
		this.mPolygon = 0;
 
		this.mLastX = 0;
                this.mLastY = 0;
		
		//drag
		this.mDrag = d;
	},

	destructor: function()
	{
		this.mPolygon.remove();
	},
	
	checkForOutOfBounds: function()
	{

	},

	setVisibility: function(b)
	{
             	if (b)
                {
                        this.mPolygon.show();
                }
                else
                {
                        this.mPolygon.hide();
                }
	},

	dragMove: function(dx,dy)
	{
	
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
		this.mPolygon.dragMove(dx,dy);
        },

        up: function()
        {
        }
});
