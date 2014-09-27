/*
  var r = Raphael("simpleExample");
  var chart = r.g.linechart(
    10, 10,      // top left anchor
    490, 180,    // bottom right anchor
    [
      [1, 2, 3, 4, 5, 6, 7],        // red line x-values
      [3.5, 4.5, 5.5, 6.5, 7, 8]    // blue line x-values
    ], 
    [
      [12, 32, 23, 15, 17, 27, 22], // red line y-values
      [10, 20, 30, 25, 15, 28]      // blue line y-values
    ], 
    {
       nostroke: false,   // lines between points are drawn
       axis: "0 0 1 1",   // draw axes on the left and bottom
       symbol: "disc",    // use a filled circle as the point symbol
       smooth: true,      // curve the lines to smooth turns on the chart
       dash: "-",         // draw the lines dashed
       colors: [
         "#995555",       // the first line is red  
         "#555599"        // the second line is blue
       ]
     });
*/
/*
insert into item_types(id,progression,core_standards_id,description) values ('5.oa.b.3_1',5.0301,'5.oa.b.3','graphs');
*/
var i_5_oa_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,200,50,225,95,100,50,425,100);

        this.mType = '5.oa.b.3_1';
/*
var r = Raphael(10, 50, 640, 480);
 "symbol":"s", axis:"0 0 1 1"});
r.linechart(0, 0, 99, 99, [1,2,3,4,5], [[1,2,3,4,5], [1,3,9,16,25], [100,50,25,12,6]], {smooth: true, colors: ['#F00', '#0F0', '#FF0'], symbol: 'circle'});
*/

//var r = Raphael("simpleExample");
//var linechart = r.g.linechart(10,10,300,220,[1,2,3,4,5],[10,20,15,35,30], {"colors":["#444"],

// graph coords
var startX = 10;
var endX = 310;
var startY = 10;
var endY = 310;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];
var pointsX = [2, 4, 6];
var pointsY = [2, 4, 6];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 640;
var rY2 = 480;

var r = Raphael(rX1, rY1, rX2, rY2);


var chart = new LineChart (this.mSheet.mGame,r,startX, startY, endX, endY,pointsX,pointsY,range,"#000000",false);

this.addQuestionShape(chart);

// Draw horizontal gridlines
for (var i = 0; i < chart.mPolygon.axis[1].text.items.length; i++) {
    r.path(['M', startX, chart.mPolygon.axis[1].text.items[i].attrs.y, 'H', endX]).attr({
        stroke : '#995555'
    }).toBack();
}


// Draw vertical gridlines
for (var i = 0; i < chart.mPolygon.axis[0].text.items.length; i++) {
    r.path(['M', chart.mPolygon.axis[0].text.items[i].attrs.x, endY, 'V', startY]).attr({
        stroke : '#995555'
    }).toBack();
}

// draw letters at points
for( var i = 0; i < pointsX.length; i++ ) {
       var posX = startX+rX1 + (pointsX[i])*(width/range[1]);
       var posY = endY+rY1 - (pointsY[i])*(height/range[1]);  

       letter = new Shape(10,10,posX,posY,this.mSheet.mGame,"","","");
        
       if(i == 0)
          letter.setText('A');
       if(i == 1)
          letter.setText('B');
       if(i == 2)
          letter.setText('C');

       this.addQuestionShape(letter);

   } 

// table coords
var tableWidth = 150;
var tableHeight = 200;
var tableX = 330;
var tableY = 125;
var cols = 3;
var rows = 4;

// table perimeter
var box = new Rectangle(tableWidth,tableHeight,tableX,tableY,this.mSheet.mGame,r,.5,.5,.5,"#000",.3,false);

box.mPolygon.attr({fill: "#000", "fill-opacity": 0, stroke: "#000", "stroke-width": 2});

this.addQuestionShape(box);

// Draw horizontal table lines
for (var i = 0; i < rows; i++) {
    //var line = r.path(['M', tableX, tableY + (i+1)*tableHeight/rows, 'H', 330 + 150]).attr({
       // stroke : '#995555'
   // }).toBack();

    var y = tableY + (i+1)*tableHeight/rows;
    var line = new LineOne (this.mSheet.mGame,r,tableX, y, tableX+tableWidth, y,"#000000",false);

    this.addQuestionShape(line);
}


// Draw vertical table lines
for (var i = 0; i < 3; i++) {
   // r.path(['M', 330 + (i+1)*50, 125, 'V', 200+125]).attr({
       // stroke : '#995555'
   // }).toBack();

    var x = tableX + (i+1)*tableWidth/cols;

    var line = new LineOne (this.mSheet.mGame,r,x, tableY, x, tableY+tableHeight,"#000000",false);

    this.addQuestionShape(line);
}


 //raphael.clear();
// this.mFractionBar = new LineOne (this.mSheet.mGame,raphael,x,y,x+length,y,"#000000",false);




        var x = 0;
        while (x < 1)
        {
                var a1 = Math.floor(Math.random()*10)+5;
                var a2 = Math.floor(Math.random()*4)+1;

                var b1 = Math.floor((Math.random()*10)+200);

                var c1 = Math.floor((Math.random()*8)+2);

                var d1 = Math.floor((Math.random()*10)+1);

                var e1 = Math.floor((Math.random()*2)+2);

                x = parseInt(  (d1 + (b1 - ( a1 + a2) * c1 )) * e1 );

                this.setQuestion('');
                this.setAnswer(x,0);
        }
}
});
