/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_1',6.901,'6.ns.b.3','word problem. multiply decimal by a decimal');
*/
var i_6_ns_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.b.3_1';
        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*89+10);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*88+11);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }


        var things = ['painting','poster', 'television'];

        var r = Math.floor(Math.random()*3);

        var answer = decimalA.multiply(decimalB);
        this.setAnswer('' + answer.getString(),0);

  this.setQuestion('A ' + things[r] + ' is in the shape of a rectangle. The length of the ' + things[r] + ' is ' + decimalA.getString() + ' feet. The width of the ' + things[r] + ' is ' + decimalB.getString() + ' feet. What is the area of the ' + things[r] + ' in square feet?');

},

});








/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_9',6.909,'6.ns.b.3','word problem. divide decimal by a decimal');
*/
var i_6_ns_b_3__9 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);

        this.mType = '6.ns.b.3_9';
	
        this.mNameMachine = new NameMachine();
        this.ns = new NameSampler();
        this.mNameOne     = this.mNameMachine.getName();

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*89+10);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*88+11);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.multiply(decimalB);
        this.setAnswer('' + decimalA.getString(),0);


  this.setQuestion(this.mNameOne + ' has a roll of ribbon containing ' + answer.getString() + ' yards of ribbon. How many pieces of ribbon ' + decimalB.getString() + ' yards long can ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' cut from the roll?');

},

});










/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_8',6.908,'6.ns.b.3','decimal division');
*/
var i_6_ns_b_3__8 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_8';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*89+10);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*88+11);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, 1);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the quotient: ' + answer.getString() + ' &divide; ' + decimalB.getString() + '');
        this.setAnswer('' + decimalA.getString(),0);
}
});








/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_7',6.907,'6.ns.b.3','decimal multiplication');
*/
var i_6_ns_b_3__7 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_7';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.multiply(decimalB);

        this.setQuestion('Find the product: ' + decimalA.getString() + ' x ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});










/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_6',6.906,'6.ns.b.3','word problem. decimal subtraction');
*/
var i_6_ns_b_3__6 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_6';

        this.ns = new NameSampler();

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
        var decimalC = new Decimal(100);
    
        var a = 0;
        var n = 0;
        var m = 0;
     
                a = Math.floor(Math.random()*1999+2000);
                //n = Math.floor(Math.random()*2)+1;
               // m = Math.pow(10, 2);
                a = parseFloat(a / 100);
                decimalA = new Decimal(a);
                decimalA = decimalA.getMoney();
                decimalA = new Decimal(decimalA);
                
                var b = Math.floor(Math.random()*1999+4000);
               // n = Math.floor(Math.random()*2)+1;
               // m = Math.pow(10, 2);
                b = parseFloat(b / 100);
                decimalB = new Decimal(b);
                decimalB = decimalB.getMoney();
                decimalB = new Decimal(decimalB);
               
      
        var answer = decimalA.add(decimalB);
        answer = decimalC.subtract(answer);

        this.setQuestion(this.ns.mNameOne + ' buys a shirt for $' + decimalA.getMoney() + ' and a jacket for $' +  decimalB.getMoney() + '. If ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' pays with a $100 bill, how much change does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' receive?');

        this.setAnswer('' + answer.getMoney(),0);
},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: $' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);
        this.mUserAnswerLabel.setPosition(200,250);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: $' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
        this.mCorrectAnswerLabel.setPosition(500,250);

		  }
    }

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_5',6.905,'6.ns.b.3','word problem. decimal subtraction');
*/
var i_6_ns_b_3__5 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_5';

        this.ns = new NameSampler();

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);
                decimalA = decimalA.getMoney();
                decimalA = new Decimal(decimalA);
                
                var b = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
                decimalB = decimalB.getMoney();
                decimalB = new Decimal(decimalB);
               
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion(this.ns.mNameOne + ' had $' + decimalA.getMoney() + ' in ' +  this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' wallet. He spent $' + decimalB.getMoney() + ' at the carnival. How much money does ' + this.ns.mNameOne + ' have left?');

        this.setAnswer('' + answer.getMoney(),0);
},

showCorrectAnswer: function()
    {
		  if (this.mCorrectAnswerLabel)
		  {
        // this.mCorrectAnswerLabel.setSize(200, 75);
       // this.mCorrectAnswerLabel.setPosition(630,300);

        this.mUserAnswerLabel.setText('USER ANSWER: $' +  this.mUserAnswer); 
			  this.mUserAnswerLabel.setVisibility(true);
        this.mUserAnswerLabel.setPosition(200,250);

			  this.mCorrectAnswerLabel.setText('CORRECT ANSWER: $' +  this.getAnswer()); 
			  this.mCorrectAnswerLabel.setVisibility(true);
        this.mCorrectAnswerLabel.setPosition(500,250);

		  }
    }

});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_4',6.904,'6.ns.b.3','word problem. decimal addition');
*/
var i_6_ns_b_3__4 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_4';

        this.ns = new NameSampler();

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.add(decimalB);

        this.setQuestion('At the grocery store, ' + this.ns.mNameOne + ' bought ' + decimalA.getString() + ' pounds of ' +  this.ns.mFruitOne + ' and ' + decimalB.getString() + ' pounds of ' + this.ns.mFruitTwo + '. How many pounds of fruit did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' buy altogether?');

        this.setAnswer('' + answer.getString(),0);
}
});







/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_3',6.903,'6.ns.b.3','decimal addition');
*/
var i_6_ns_b_3__3 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_3';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*8999+1000);
                n = Math.floor(Math.random()*3)+1;
                m = Math.pow(10, n);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.add(decimalB);

        this.setQuestion('Find the sum: ' + decimalA.getString() + ' + ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});





/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ns.b.3_2',6.902,'6.ns.b.3','decimal subtraction');
*/
var i_6_ns_b_3__2 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
         this.parent(sheet,575,50,320,75,100,50,380,180);

                this.mType = '6.ns.b.3_2';

        var decimalA = new Decimal(1);
        var decimalB = new Decimal(2);
    
        var a = 0;
        var n = 0;
        var m = 0;

        while (parseFloat(decimalA.mDecimal) <= parseFloat(decimalB.mDecimal))
        {
                a = Math.floor(Math.random()*8999+1000);
                n = Math.floor(Math.random()*3)+1;
                m = Math.pow(10, n);
                a = parseFloat(a / m);
                decimalA = new Decimal(a);

                var b = Math.floor(Math.random()*899+100);
                n = Math.floor(Math.random()*2)+1;
                m = Math.pow(10, n);
                b = parseFloat(b / m);
                decimalB = new Decimal(b);
        }

        var answer = decimalA.subtract(decimalB);

        this.setQuestion('Find the difference: ' + decimalA.getString() + ' - ' + decimalB.getString() + '');
        this.setAnswer('' + answer.getString(),0);
}
});
