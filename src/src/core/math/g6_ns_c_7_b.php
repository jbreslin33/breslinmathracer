/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.b_1',6.1901,'6.ns.c.7.b','compare and order rational numbers. real world example');
*/
var i_6_ns_c_7_b__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.b_1';

// graph coords
var startX = 10;
var endX = 300;
var startY = 130;
var endY = 330;
var width = endX - startX;
var height = endY - startY;
var range = [0,10];

//var r = Raphael('graph');
var rX1 = 10;
var rY1 = 50;
var rX2 = 420;
var rY2 = 450;

this.raphael = Raphael(rX1, rY1, rX2, rY2);

this.raphaelSizeX = rX2;
this.raphaelSizeY = rY2;

var tableData = [['Location','Elevation (km)'],['Mt. McKinley','6.2'],['Marianna Trench','-11.0'],['Mt. Everest','8.85'],['Death Valley','-0.085']];

// create Table object
var table = new Table2 (this.mSheet.mGame,this,this.raphael,startX, startY, endX, endY,tableData,rX1,rY1,tableData,"#000000",false);

this.addQuestionShape(table)

                //BUTTON A
                this.mButtonA.setPosition(530,220);
                this.mButtonB.setPosition(530,280);
                this.mButtonC.setPosition(530,340);

                this.mButtonA.setSize(400,50);
                this.mButtonB.setSize(400,50);
                this.mButtonC.setSize(400,50);

                a = 'Marianna Trench';
                b = 'Death Valley';
                c = 'Mt. McKinley';
                d = 'Mt. Everest';

                this.setQuestion('The elevation of a location refers to the distance above or below sea level. Click the button that shows the locations listed from highest to lowest elevation.');

                this.setAnswer('' + d + ', ' + c + ', ' + b + ', ' + a,0);

                var r = Math.floor(Math.random()*3);

              if(r == 0)
              {
                this.mButtonA.setAnswer('' + d + ', ' + c + ', ' + b + ', ' + a);
                this.mButtonB.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);
                this.mButtonC.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
              }
              if(r == 1)
              {
                this.mButtonA.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
                this.mButtonB.setAnswer('' + d + ', ' + c + ', ' + b + ', ' + a);
                this.mButtonC.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);   
              }
              if(r == 2)
              {
                this.mButtonA.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);
                this.mButtonB.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
                this.mButtonC.setAnswer('' + d + ', ' + c + ', ' + b + ', ' + a);
              }
        }
});
