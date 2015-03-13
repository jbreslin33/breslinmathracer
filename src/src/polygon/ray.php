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
	}
});
