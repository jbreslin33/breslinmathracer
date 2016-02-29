/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.c_4',6.1704,'6.ns.c.7.c','compare and order rational numbers. real world example');
*/
var i_6_ns_c_7_c__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.c_4';

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

                a = 'Marianna Trench';4
                d = 'Death Valley';1
                c = 'Mt. McKinley';2
                b = 'Mt. Everest';3

                this.setQuestion('The elevation of a location refers to the distance above or below sea level. Click the button that shows the locations listed from nearest to sea level to farthest from sea level.');

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









/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.c_2',6.1702,'6.ns.c.7.c','absolute value');
*/
var i_6_ns_c_7_c__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.c_2';

                //BUTTON A
                this.mButtonA.setPosition(380,120);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,280);

                var c = Math.floor(Math.random()*2 + 5);
                var a = Math.floor(Math.random()*2 + 1);
                var b = Math.floor(Math.random()*2 + 3);
                var d = Math.floor(Math.random()*2 + 7);
                
                var n = a.toString(); 

                a = '-' + a;
                b = '-' + b;
                c = '' + c;
                d = '' + d;


                this.setQuestion('Choose the set of numbers that is ordered from farthest from zero to nearest to zero.');

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









/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.c_3',6.1703,'6.ns.c.7.c','absolute value');
*/
var i_6_ns_c_7_c__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.c_3';

                //BUTTON A
                this.mButtonA.setPosition(380,120);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,280);

                var b = Math.floor(Math.random()*2 + 5);
                var d = Math.floor(Math.random()*2 + 1);
                var c = Math.floor(Math.random()*2 + 3);
                var a = Math.floor(Math.random()*2 + 7);

                var n = a.toString(); 

                a = '-0.' + a;
                b = '-0.' + b;
                c = '0.' + c;
                d = '0.' + d;

                this.setQuestion('Choose the set of numbers that is ordered from nearest to zero to farthest from zero.');

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











/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.c_1',6.1701,'6.ns.c.7.c','absolute value');
*/
var i_6_ns_c_7_c__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.c_1';

             var a;
             var b;

             var r = Math.floor(Math.random()*2);

             if (r == 0)
             {

                a = Math.floor(Math.random()*19 - 9);
                 
                b = a;

                if (a < 0)
                  b = -a;

             }
             else
             {

                a = Math.random()*19 - 9;
                 
                b = a;

                if (a < 0)
                  b = -a;

                a = a.toFixed(2);
                b = b.toFixed(2);
             }

                this.setQuestion('Evaluate: ' + '|' + a + '|');

                this.setAnswer('' + b,0);              

        }


});


