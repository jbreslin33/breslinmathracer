var Cube = new Class(
{
Extends: RaphaelPolygon,
        // x,y = position - w,h,d = dimensions(width,height,depth)
        initialize: function (item,game,raphael,rx,ry,x,y,w,h,d,r,g,b,s,op,dd,label)
        {
this.parent(w,h,x,y,game,raphael,r,g,b,s,op,d);
this.mItem = item;
var xfactor = (d * 1.0) / (w * 1.0);
var yfactor = (d * 1.0) / (h * 1.0);

var xOff = (w/2) * xfactor;
var yOff = (h/2) * yfactor;

this.mPolygon = this.mRaphael.rect(x+xOff,y-yOff,w,h).attr({fill: "hsb(" + r + "," + g + "," + b + ")", stroke: s, opacity: op});

                this.mPolygon.mPolygon = this;

var boxTwoC = new Rectangle(w,h,x,y,game,raphael,.5,.5,.5,"#000",1,false);
this.mItem.addQuestionShape(boxTwoC);

 //this.mPolygon.mPolygon = boxTwoD.mPolygon;


var ax1 = x;
var ay1 = y;

var ax2 = x+w;
var ay2 = y;

var ax3 = x+w;
var ay3 = y+h;

var ax4 = x;
var ay4 = y+h;

var bx1 = ax1+xOff;
var by1 = ay1-yOff;

var bx2 = ax2+xOff;
var by2 = ay2-yOff;

var bx3 = ax3+xOff;
var by3 = ay3-yOff;

var bx4 = ax3+xOff;
var by4 = ay3-yOff;

var boxTwoB = new Parallelogram(game,raphael,ax1,ay1,ax2,ay2,bx2,by2,bx1,by1,.5,.5,.5,"#000",1,false);
this.mItem.addQuestionShape(boxTwoB);
var boxTwoA = new Parallelogram(game,raphael,ax2,ay2,bx2,by2,bx3,by3,ax3,ay3,.5,.5,.5,"#000",1,false);
this.mItem.addQuestionShape(boxTwoA);

if(label)
{
var dLabelPosX = (ax3+rx+bx3+rx+50)/2;
var dLabelPosY = (ay3+ry+by3+ry)/2;

var dLabelUnits = '' + d/40 + ' ' + label;

var dLabel = new Shape(50,25,dLabelPosX,dLabelPosY,game,"","","");
this.mItem.addQuestionShape(dLabel);
dLabel.setText(dLabelUnits);

var wLabelPosX = x+rx+(.5*w);
var wLabelPosY = y+ry+h;

var wLabelUnits = '' + w/40 + ' ' + label;

var wLabel = new Shape(50,25,wLabelPosX,wLabelPosY,game,"","","");
this.mItem.addQuestionShape(wLabel);
wLabel.setText(wLabelUnits);


var hLabelPosX = bx3+rx+30;
var hLabelPosY = by3+ry-(h/2);

var hLabelUnits = '' + h/40 + ' ' + label;

var hLabel = new Shape(50,25,hLabelPosX,hLabelPosY,game,"","","");
hLabel.setText(hLabelUnits);
this.mItem.addQuestionShape(hLabel);
}

	},


	dragMove: function(dx,dy)
	{

	}


});




var RubixCube = new Class(
{
// x,y = position - w1,h1,d1 = dimensions of single cube - w2,h2,d2 = dimensions of rubix cube
        initialize: function (item,game,raphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,r,g,b,s,op,z)
        {

var xx = 0;
var i;
var j;

for(k=d2-1;k>=0;k--) {

  for(i=0;i<w2;i++) {
    xx = x+(i*w1)+(k*w1/2);

    for(j=0;j<h2;j++) {
      var cube = new Cube(item,game,raphael,rx,ry,xx,y-(j*h1)-(k*h1/2),w1,h1,d1,.5,.5,.5,"#000",1,false,'');
	item.addQuestionShape(cube);
    }
  }
}

},


	dragMove: function(dx,dy)
	{

	}


});



var RubixCubeStairs = new Class(
{
// x,y = position - w1,h1,d1 = dimensions of single cube - w2,h2,d2 = dimensions of rubix cube
        initialize: function (item,game,raphael,rx,ry,x,y,w1,h1,d1,w2,h2,d2,r,g,b,s,op,z)
        {

var xx = 0;
var i;
var j;

for(k=d2-1;k>=0;k--) {

  for(i=0;i<w2;i++) {
    xx = x+(i*w1)+(k*w1/2);

    for(j=0;j<h2-i;j++) {
      var cube = new Cube(item,game,raphael,rx,ry,xx,y-(j*h1)-(k*h1/2),w1,h1,d1,.5,.5,.5,"#000",1,false,'');
	item.addQuestionShape(cube);
    }
  }
}

},


	dragMove: function(dx,dy)
	{

	}


});
