var RaphaelText = new Class(
{
Extends: RaphaelPolygon,
initialize: function (x,y,item,r,g,b,s,op,d,text,fontsize)
{
	this.parent(0,0,x,y,item.mSheet.mGame,item.mRaphael,r,g,b,s,op,d);

        this.mPolygon = this.mRaphael.text(x, y,'' + text).attr({fill: '#ff0000', "font-size": fontsize });
	this.mPolygon.mPolygon = this;
}
});
