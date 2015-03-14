//you could put a circle at x1,y1 and then a triangle at x2,y2
var Ray = new Class(
{
Extends: RaphaelPolygon,
        initialize: function (game,raphael,x1,y1,x2,y2,s,d)
        {
		//find center for mPosition...
		sX = x1 + x2 / 3;
		sY = y1 + y2 / 3;

		this.parent(0,0,sX,sY,game,raphael,0,0,0,s,0,d);

		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		
		this.mPathString = "M" + this.x1 + "," + this.y1 + " L" + this.x2 + "," + this.y2;
		
		this.mPolygon = this.mRaphael.path("" + this.mPathString);
		this.mPolygon.attr ("stroke", this.mStroke);

		this.mPolygon.mPolygon = this;

		this.mEndPoint = new Circle (12.5,x1,y1,game,this.mRaphael,0,1,1,"none",.5,false)

	}
});
