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
	this.mPolygon.mPolygon = this;

	//amount of angle
        var degrees =  parseInt(end - start); 

	//angleDegree text
 	this.mAngleDegree = new AngleDegree(item,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(end),parseFloat(start),0,0,1,"none",.5,false);;
	item.addQuestionShape(this.mAngleDegree);
	
	var halfway = parseFloat(degrees / 2);
	//because its backards going in
	var rotateTo = parseFloat(originalEnd + halfway);
	var rotateAmount = '' + 'r' + rotateTo + ',' + x + ',' + y;
        this.mAngleDegree.mPolygon.transform(rotateAmount);
}
});
