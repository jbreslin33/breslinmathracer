var AngleDegree = new Class(
{
Extends: RaphaelPolygon,
initialize: function (item,x,y,radius,start,end,r,g,b,s,op,d)
{
	this.parent(0,0,x,y,item.mSheet.mGame,item.mRaphael,r,g,b,s,op,d);

	var originalStart = start; 
	var originalEnd = end; 

	start = parseFloat(360 - start);	
	end   = parseFloat(360 - end);	

	//amount of angle
        var degrees =  parseInt(end - start); 
	var halfway = parseFloat(degrees / 2);
	//because its backards going in
	var rotateTo = parseFloat(originalEnd + halfway);

        this.mPolygon = this.mRaphael.text(parseFloat(x + 30), y,'' + degrees).attr({fill: '#ff0000'});
               
	var rotateAmount = '' + 'r' + rotateTo + ',' + x + ',' + y;
        this.mPolygon.transform(rotateAmount);

	this.mPolygon.mPolygon = this;
}
});
