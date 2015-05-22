/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_10',6.0110,'6.rp.a.1','' );
*/

var i_6_rp_a_1__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_10';
                this.ns = new NameSampler();
                
		var a = Math.floor((Math.random()*2)+3);
                var b = Math.floor((Math.random()*89)+10);

                this.setQuestion('What is the ratio of ' + a + ' to ' + b + '?');

                this.setAnswer('' + a + ':' + b ,0);
                this.setAnswer('' + a + 'to' + b ,1);
                this.setAnswer('' + a + '/' + b,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_9',6.0109,'6.rp.a.1','' );
*/
var i_6_rp_a_1__9 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_9';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var d = Math.floor((Math.random()*2)+3);
                var c = Math.floor((Math.random()*89)+10);
                var g = Math.floor((Math.random()*10)+20);

                var dc = new Decimal('' + d + '.' + c);
                var gd = new Decimal('' + g);
                var answer = dc.multiply(gd);

                this.setQuestion('' + this.ns.mNameOne + ' drove '  + answer.getString() + ' miles on ' + g + ' gallons of gas. How many miles per gallon does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' get?');
                this.setAnswer('' + dc.getString(),0);
                this.setAnswer('' + dc.getString() + ' mpg',1);
                this.setAnswer('' + dc.getString() + ' miles per gallon',2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_8',6.0108,'6.rp.a.1','' );
*/
var i_6_rp_a_1__8 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,300,50,175,95, 200,50,475,100);

                this.mType = '6.rp.a.1_8';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var d = Math.floor((Math.random()*2)+3);
                var c = Math.floor((Math.random()*89)+10);
                var g = Math.floor((Math.random()*10)+20);

                var dc = new Decimal('' + d + '.' + c);
                var gd = new Decimal('' + g);
		var answer = dc.multiply(gd);

                this.setQuestion('' + 'Angry Baby bought gas for her car and it cost $' + answer.getMoney() + ' for ' + g + ' gallons of gas and it makes her so mad!. How much money did Angry Baby pay per gallon of gas?');
                this.setAnswer('$' + dc.getString(),0);
                this.setAnswer('' + dc.getString(),1);
                this.setAnswer('$' + dc.getString() + ' per gallon',2);
                this.setAnswer('$' + dc.getString() + ' per gallon of gas',3);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_7',6.0107,'6.rp.a.1','' );
*/
var i_6_rp_a_1__7 = new Class(
{
Extends: TextItemFraction,
        initialize: function(sheet)
        {
     	this.parent(sheet,300,50,175,95,100,50,425,100,100,50,425,175);

                this.mType = '6.rp.a.1_7';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = 4;
                var b = 2;
                while (a % b == 0 || a == b || a > 20 || b > 20 || b < a)
                {
                        a = Math.floor((Math.random()*98)+2);
                        b = Math.floor((Math.random()*98)+2);
                }
                var c = new Fraction(a,b);
                this.setQuestion('' + this.ns.mNameOne + ' plans to bike a total of ' + a + ' miles every ' + b + ' days. Write this ratio as a fraction.');
                this.setAnswer('' + c.getString(),0);
        }
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_6',6.0106,'6.rp.a.1','' );
*/
var i_6_rp_a_1__6 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_6';
                this.ns = new NameSampler();
                this.mChopWhiteSpace = false;

                var a = 4;
                var b = 2;
                while (a % b == 0 || a == b || a > 20 || b > 20 || b < a)
                {
                        a = Math.floor((Math.random()*98)+2);
                        b = Math.floor((Math.random()*98)+2);
                }
                c = parseInt( a / b );
                this.setQuestion('' + 'In baseball ' + this.ns.mNameOne + ' gets a hit ' + a + ' times out of every ' + b + ' attempts. Write the ratio with a colon to represent ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' this.');
                this.setAnswer('' + a + ':' + b,0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_5',6.0105,'6.rp.a.1','' );
*/
var i_6_rp_a_1__5 = new Class(
{
Extends: TextItemMixedNumber,
initialize: function(sheet)
{
	this.parent(sheet, 320,100,200,95, 100,50,510,137, 100,50,625,100, 100,50,625,175,true);
        this.mType = '6.rp.a.1_5';
	this.ns = new NameSampler();
       	this.mChopWhiteSpace = false;

        var a = 4;
        var b = 2;
        while (a % b == 0 || a == b || a > 20 || b > 20)
        {
               a = Math.floor((Math.random()*98)+2);
               b = Math.floor((Math.random()*98)+2);
        }
	var f = new Fraction(a,b);	
	
        this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a unit rate.');
	this.setAnswer('' + f.getString(),0);
},
createQuestionShapes: function()
{
	var txt = new Shape(150,50,600,240,this.mSheet.mGame,"","","");
	this.addQuestionShape(txt);
        txt.setText('' + this.ns.mThingOne + ' per ' + this.ns.mNameMachine.getSingular(this.ns.mThingTwo));
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_4',6.0104,'6.rp.a.1','' );
*/
var i_6_rp_a_1__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_4';
                this.ns = new NameSampler();
		this.mChopWhiteSpace = false;

                var a = 3;
                var b = 2;
		while (a % b != 0 || a == b || a > 20 || b > 20) 
		{
                	a = Math.floor((Math.random()*98)+2);
                	b = Math.floor((Math.random()*98)+2);
		}
		c = parseInt( a / b ); 
                this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a unit rate.');
                this.setAnswer('' + c + ' ' + this.ns.mThingOne + ' per ' + this.ns.mNameMachine.getSingular(this.ns.mThingTwo),0);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_3',6.0103,'6.rp.a.1','' );
*/
var i_6_rp_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_3';
               	this.ns = new NameSampler(); 
		this.mChopWhiteSphace = false;
		this.mStripCommas = false;

		var a = Math.floor((Math.random()*15)+2);
		var b = Math.floor((Math.random()*15)+2);

                this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a ratio 3 different ways. Seperate each way by a comma.');
                this.setAnswer('' + a + 'to' + b + ',' + a + ':' + b + ',' + a + '/' + b,0);
                this.setAnswer('' + a + 'to' + b + ',' + a + '/' + b + ',' + a + ':' + b,1);
                
		this.setAnswer('' + a + ':' + b + ',' + a + '/' + b + ',' + a + 'to' + b,2);
		this.setAnswer('' + a + ':' + b + ',' + a + 'to' + b + ',' + a + '/' + b,3);
		
		this.setAnswer('' + a + '/' + b + ',' + a + 'to' + b + ',' + a + ':' + b,4);
		this.setAnswer('' + a + '/' + b + ',' + a + ':' + b + ',' + a + 'to' + b,5);
        }
});


var i_6_rp_a_1__picture = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                //move gui
                this.mUserAnswerLabel.setPosition(625,150);
                this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLinkOne = this.mNameMachine.getPictureLink();
                this.mPictureLinkTwo = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('YOU NEED A QUESTION IN CHILD!');

        },

        createQuestionShapes: function()
        {
                var y = 135;

                var a = parseInt(this.a);
                var b = parseInt(this.b);

                var x = 50;
                for (var i = 0; i < a; i++)
		{
                	this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkOne,"",""));
                        x = parseInt(x + 30);
		}

                var x = 400;
                for (var i = 0; i < b; i++)
		{
                	this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkTwo,"",""));
                        x = parseInt(x + 30);
		}
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_2',6.0102,'6.rp.a.1','Word Problem. Ratio. Picure. Flipped Order' );
*/

var i_6_rp_a_1__2 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_2';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkTwo) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkOne) + '?');
                
		this.setAnswer('' + this.b + ':' + this.a ,0);
                this.setAnswer('' + this.b + 'to' + this.a ,1);
                this.setAnswer('' + this.b + '/' + this.a,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_1',6.0101,'6.rp.a.1','Word Problem. Ratio. Picure. Normal Order' );
*/

var i_6_rp_a_1__1 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_1';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkOne) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkTwo) + '?');
                
		this.setAnswer('' + this.a + ':' + this.b ,0);
                this.setAnswer('' + this.a + 'to' + this.b ,1);
                this.setAnswer('' + this.a + '/' + this.b,2);
        }
});
