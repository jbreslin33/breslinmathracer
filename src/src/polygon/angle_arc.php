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

	var sr = parseFloat(start * Math.PI / 180); 
	var degX = parseFloat(sr * 180 / Math.PI);
	var tempX = parseFloat(degX * radius); 
	var textX = parseFloat(x + degX); 
	
	var er = parseFloat(end * Math.PI / 180); 
	var degY = parseFloat(er * 180 / Math.PI);
	var tempY = parseFloat(degY * radius); 
	var textY = parseFloat(y + degY); 
	
	APPLICATION.log('sr:' + sr);
	APPLICATION.log('degX' + degX);
	APPLICATION.log('tempX:' + tempX);
	APPLICATION.log('textX:' + textX);

	APPLICATION.log('er:' + er);
	APPLICATION.log('degY:' + degY);
	APPLICATION.log('tempY:' + tempY);
	APPLICATION.log('textY:' + textY);

	var degrees =  parseInt(end - start); 
	
	this.mText = this.mRaphael.text(textX, textY,'' + degrees).attr({fill: '#ff0000'});

	this.mPolygon.mPolygon = this;
}
});
