var AngleArc = new Class(
{
Extends: RaphaelPolygon,
initialize: function (item,x,y,radius,start,end,r,g,b,s,op,d)
{
	this.parent(0,0,x,y,item.mSheet.mGame,item.mRaphael,r,g,b,s,op,d);

	var originalStart = start; 
	var originalEnd = end; 

	start = parseFloat(360 - start);	
	end   = parseFloat(360 - end);	

       	var rad = Math.PI / 180;
       	var x1 = x + radius * Math.cos(-start * rad),
       	x2 = x + radius * Math.cos(-end * rad),
       	y1 = y + radius * Math.sin(-start * rad),
       	y2 = y + radius * Math.sin(-end * rad);
        
	this.mPolygon = this.mRaphael.path(["M", x, y, "L", x1, y1, "A", radius, radius, 0, +(end - start > 180), 0, x2, y2, "z"]).attr({fill: "hsb(" + this.mRed + "," + this.mGreen + "," + this.mBlue + ")", stroke: this.mStroke, opacity: this.mOpacity});

	//amount of angle
        var degrees =  parseInt(end - start); 
	var halfway = parseFloat(degrees / 2);
	//because its backards going in
	var rotateTo = parseFloat(originalEnd + halfway);

        this.mText = this.mRaphael.text(parseFloat(x + 30), y,'' + degrees).attr({fill: '#ff0000'});
               
	var rotateAmount = '' + 'r' + rotateTo + ',' + x + ',' + y;
        this.mText.transform(rotateAmount);

	this.mPolygon.mPolygon = this;
}
});
