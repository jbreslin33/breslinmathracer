/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.4_1',6.1001,'6.ns.b.4','least common multiple - word problem');
*/
var i_6_ns_b_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.b.4_1';
        
        var n = 0;
        var d = 0;

        n = Math.floor(Math.random()*11)+2;
        d = n;

        while (n == d)
        {
          d = Math.floor(Math.random()*11)+2;        
        }

        var multA = new Array();
        var x = 0;
        var i = 1;

        while (x < (n*d))
        {
          x = n * i;
          i++;
          multA.push(x);
         // console.log(x);
        }

        var multB = new Array();
        x = 0;
        i = 1;

        while (x < (n*d))
        {
          x = d * i;
          i++;
          multB.push(x);
         // console.log(x);
        }

        var answer = 0;

        for (j = 0; j < multA.length; j++) 
        {
          for (k = 0; k < multB.length; k++)
          {
            if (multA[j] == multB[k])
            { 
              answer = multA[j];
              break; 
            }
          }
          if (multA[j] == multB[k]) {break;}
        }


        this.setAnswer('' + answer,0);

  this.setQuestion('A teacher bought packages of ' + n + ' pens in each package. Another teacher bought packages of ' + d + ' pens in each package. If the teachers ended up buying the same number of pens, what is the least number of pens they could have?' );

}

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.4_5',6.1005,'6.ns.b.4','greatest common factor - word problem');
*/
var i_6_ns_b_4__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.b.4_5';

         this.ns = new NameSampler();

         var d = 0;
         var fractionA = new Fraction(1,1,false);
         var gcf = 1;
    
        var n = Math.floor(Math.random()*96)+4;

        while (gcf == 1 || d == n)
        {
          d = Math.floor(Math.random()*96)+4;
          fractionA = new Fraction(n,d,false);
          gcf = fractionA.gcd(fractionA.mNumerator,fractionA.mDenominator);
        }

        this.setAnswer('' + gcf,0);

  this.setQuestion(this.ns.mNameOne + ' arranged ' + n + ' tiles into a rectangular array. ' + this.ns.mNameOne + ' arranged ' + d + ' tiles into a rectangular array. Their arrays had the same number of rows. What is the greatest number of rows their arrays could have?');

}

});








/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.4_4',6.1004,'6.ns.b.4','greatest common factor - 2 numbers');
*/
var i_6_ns_b_4__4 = new Class(
{
Extends: TextItemFraction,

initialize: function(sheet)
{
       // this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        //this.parent(sheet,575,50,320,75,100,50,380,180);
        this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);

        this.mType = '6.ns.b.4_4';

         var d = 0;
         var fractionA = new Fraction(1,1,false);
         var gcf = 1;
    
        var n = Math.floor(Math.random()*96)+4;

        while (gcf == 1 || d <= n)
        {
          d = Math.floor(Math.random()*96)+4;
          fractionA = new Fraction(n,d,false);
          gcf = fractionA.gcd(fractionA.mNumerator,fractionA.mDenominator);
        }        

  this.setQuestion('Use the GCF to write this fraction in simplest form: ' + fractionA.getString());

  fractionA.reduce();

  this.setAnswer('' + fractionA.getString(),0);

}

});









/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.4_3',6.1003,'6.ns.b.4','least common multiple - 2 numbers');
*/
var i_6_ns_b_4__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.b.4_3';
        
        var n = 0;
        var d = 0;

        n = Math.floor(Math.random()*11)+2;
        d = n;

        while (n == d)
        {
          d = Math.floor(Math.random()*11)+2;        
        }

        var multA = new Array();
        var x = 0;
        var i = 1;

        while (x < (n*d))
        {
          x = n * i;
          i++;
          multA.push(x);
         // console.log(x);
        }

        var multB = new Array();
        x = 0;
        i = 1;

        while (x < (n*d))
        {
          x = d * i;
          i++;
          multB.push(x);
         // console.log(x);
        }

        var answer = 0;

        for (j = 0; j < multA.length; j++) 
        {
          for (k = 0; k < multB.length; k++)
          {
            if (multA[j] == multB[k])
            { 
              answer = multA[j];
              break; 
            }
          }
          if (multA[j] == multB[k]) {break;}
        }


        this.setAnswer('' + answer,0);

  this.setQuestion('What is the least common multiple of ' + n + ' and ' + d);

}

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.4_2',6.1002,'6.ns.b.4','greatest common factor - 2 numbers');
*/
var i_6_ns_b_4__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        //this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.parent(sheet,575,50,320,75,100,50,380,180);

        this.mType = '6.ns.b.4_2';

         var d = 0;
         var fractionA = new Fraction(1,1,false);
         var gcf = 1;
    
        var n = Math.floor(Math.random()*96)+4;

        while (gcf == 1 || d == n)
        {
          d = Math.floor(Math.random()*96)+4;
          fractionA = new Fraction(n,d,false);
          gcf = fractionA.gcd(fractionA.mNumerator,fractionA.mDenominator);
        }

        this.setAnswer('' + gcf,0);

  this.setQuestion('What is the greatest common factor of ' + n + ' and ' + d);

}

});


