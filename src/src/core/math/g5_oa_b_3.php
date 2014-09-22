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
//var r = Raphael("simpleExample");
var r = Raphael(10, 50, 640, 480);
r.linechart(0, 0, 99, 99, [1,2,3,4,5], [[1,2,3,4,5], [1,3,9,16,25], [100,50,25,12,6]], {smooth: true, colors: ['#F00', '#0F0', '#FF0'], symbol: 'circle'});
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

                this.setQuestion(  '(' + d1 + ' + ' + '(' + b1 + ' - (' + a1 + ' + ' + a2 + ')' + c1 + '))' + e1          );
                this.setAnswer(x,0);
        }
}
});
