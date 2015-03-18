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
	//this.mText = this.mRaphael.text(190, 100, "ellipse").attr({fill: '#ff0000'});
	//this.mText = this.mRaphael.text(x, parseFloat(y + radius), "ellipse").attr({fill: '#ff0000'});

	var c     = Math.sin(start);  
	var textX = parseFloat(c * radius); 
	
	var s     = Math.cos(end);  
	var textY = parseFloat(s * radius); 
	APPLICATION.log('textX:' + textX);
	APPLICATION.log('textY:' + textY);
	
	this.mText = this.mRaphael.text(textX, textY, "ellipse").attr({fill: '#ff0000'});

	this.mPolygon.mPolygon = this;
}
});
/*
The simple equations you've linked to give the X and Y coordinates of the point on the circle relative to the center of the circle.

X = r * cosine(angle)
Y = r * sine(angle)

This tells you how far the point is offset from the center of the circle. Since you have the coordinates of the center (xcircle, ycircle), simply add the calculated offset.

The coordinates of the point on the circle are:

X = xcircle + (r * sine(angle))
Y = ycircle + (r * cosine(angle))

*/
