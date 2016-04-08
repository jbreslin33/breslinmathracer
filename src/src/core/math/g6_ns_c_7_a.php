
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.a_4',6.1804,'6.ns.c.7.a','compare and order rational numbers. <'); update item_types set progression = 6.1804 where id = '6.ns.c.7.a_4';
*/
var i_6_ns_c_7_a__4 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.a_4';
	 	this.mStripCommas = false;
 		this.mChopWhiteSpace = false;

                //BUTTON A
                this.mButtonA.setPosition(380,120);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,280);

                var a = Math.floor(Math.random()*2 + 3);
                var b = Math.floor(Math.random()*2 + 1);
                var c = Math.floor(Math.random()*2);
                var d = Math.floor(Math.random()*2 + 2);

                var n = a.toString(); 

                a = '-0.' + a;
                b = '-0.' + b;
                c = '0.' + c;
                d = '0.' + d;

                this.setQuestion('Choose the set of numbers that is ordered from greatest to least.');

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
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.a_3',6.1803,'6.ns.c.7.a','compare and order rational numbers. <'); update item_types set progression = 6.1803 where id = '6.ns.c.7.a_3';
*/
var i_6_ns_c_7_a__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.a_3';
		this.mStripCommas = false;
 		this.mChopWhiteSpace = false;


                //BUTTON A
                this.mButtonA.setPosition(380,120);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,280);

                var a = Math.floor(Math.random()*2 - 4);
                var b = Math.floor(Math.random()*2 - 2);
                var c = Math.floor(Math.random()*2);
                var d = Math.floor(Math.random()*2 + 2);

                var answer = [a,b,c,d];
                var answer1 = [a,c,b,d];
                var answer2 = [d,b,c,a];

                this.setQuestion('Choose the set of numbers that is ordered from least to greatest.');

                this.setAnswer('' + a + ', ' + b + ', ' + c + ', ' + d,0);

                var r = Math.floor(Math.random()*3);

              if(r == 0)
              {
                this.mButtonA.setAnswer('' + a + ', ' + b + ', ' + c + ', ' + d);
                this.mButtonB.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);
                this.mButtonC.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
              }
              if(r == 1)
              {
                this.mButtonA.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
                this.mButtonB.setAnswer('' + a + ', ' + b + ', ' + c + ', ' + d);
                this.mButtonC.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);   
              }
              if(r == 2)
              {
                this.mButtonA.setAnswer('' + d + ', ' + b + ', ' + c + ', ' + a);
                this.mButtonB.setAnswer('' + a + ', ' + c + ', ' + b + ', ' + d);
                this.mButtonC.setAnswer('' + a + ', ' + b + ', ' + c + ', ' + d);
              }
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.a_2',6.1802,'6.ns.c.7.a','compare and order rational numbers. <'); update item_types set progression = 6.1802 where id = '6.ns.c.7.a_2';
*/
var i_6_ns_c_7_a__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.a_2';

                //BUTTON A
                this.mButtonA.setPosition(380,120);
                this.mButtonB.setPosition(380,180);
                this.mButtonC.setPosition(380,300);

          while(this.a == this.b)
          {
                var n = Math.floor(Math.random()*9 + 1);

                var d = Math.random()*1;

                this.a = (1 * n) + (1 * d); 

                var r = Math.floor(Math.random()*3);               
                
                if(r == 0)
                  this.a = this.a.toFixed(2);
                if(r == 1)
                  this.a = this.a.toFixed(1);
                if(r == 2)
                  this.a = n;               
 



                n = Math.floor(Math.random()*9 + 1);

                d = Math.random()*1;

                this.b = (1 * n) + (1 * d); 

                r = Math.floor(Math.random()*3);               
                
                if(r == 0)
                  this.b = this.b.toFixed(2);
                if(r == 1)
                  this.b = this.b.toFixed(1);
                if(r == 2)
                  this.b = n;               


                r = Math.floor(Math.random()*2);

                if(r == 0)
                  this.b = -this.b;

                r = Math.floor(Math.random()*2);

                if(r == 0)
                  this.a = -this.a;
            }

                this.setQuestion('On a number line:');

                if (this.a > this.b)
                  this.setAnswer('right',0);
                else if (this.a < this.b)
                  this.setAnswer('left',0);
                else
                  this.setAnswer('=',0);

                this.mButtonA.setAnswer('right');
                this.mButtonB.setAnswer('left');
                this.mButtonC.setAnswer('=');
                this.mButtonC.setVisibility(false);
        },


	showAnswerInputs: function()
	{
		for (i = 0; i < this.mButtonArray.length; i++)
		{
			this.mButtonArray[i].setVisibility(true);
		}

    this.mButtonC.setVisibility(false);
	},


        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,260,170,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,170,this.mSheet.mGame,"","","");

                shapeA.setText(this.a + ' is to the ');
                shapeB.setText('of ' + this.b);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);

this.mButtonC.setVisibility(false);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.c.7.a_1',6.1801,'6.ns.c.7.a','compare and order rational numbers. <'); update item_types set progression = 6.1801 where id = '6.ns.c.7.a_1';
*/
var i_6_ns_c_7_a__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '6.ns.c.7.a_1';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var n = Math.floor(Math.random()*9 + 1);

                var d = Math.random()*1;

                this.a = (1 * n) + (1 * d); 

                var r = Math.floor(Math.random()*3);               
                
                if(r == 0)
                  this.a = this.a.toFixed(2);
                if(r == 1)
                  this.a = this.a.toFixed(1);
                if(r == 2)
                  this.a = n;               
 



                n = Math.floor(Math.random()*9 + 1);

                d = Math.random()*1;

                this.b = (1 * n) + (1 * d); 

                r = Math.floor(Math.random()*3);               
                
                if(r == 0)
                  this.b = this.b.toFixed(2);
                if(r == 1)
                  this.b = this.b.toFixed(1);
                if(r == 2)
                  this.b = n;               


                r = Math.floor(Math.random()*2);

                if(r == 0)
                  this.b = -this.b;

                r = Math.floor(Math.random()*2);

                if(r == 0)
                  this.a = -this.a;


                this.setQuestion('Compare.');

                if (this.a > this.b)
                  this.setAnswer('&gt;',0);
                else if (this.a < this.b)
                  this.setAnswer('&lt;',0);
                else
                  this.setAnswer('=',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,290,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.a);
                shapeB.setText(this.b);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});


