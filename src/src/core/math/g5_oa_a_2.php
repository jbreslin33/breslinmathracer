/*  5.oa.a.2 */

/* TYPE_DESCRIPTION: Write expression based on word problem. Words: divided, subtracted */
var i_5_oa_a_2__13 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_13';
                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mThing = this.mNameMachine.getThing();

                this.x = Math.floor((Math.random()*8)+2);
                this.y = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);

                this.setQuestion(this.mNameOne + ' has ' + this.x + ' more than ' + this.y + ' ' + this.mThing + '. ' + this.mNameTwo + ' has ' + this.z + ' times that many ' + this.mThing + '. Write an expression that represents this.');
                this.setAnswer('(' + this.x + '+' +  this.y + ')' + this.z,0);
                this.setAnswer('(' + this.y + '+' +  this.x + ')' + this.z,1);
                
		this.setAnswer(this.z + '(' + this.x + '+' +  this.y + ')',2);
		this.setAnswer(this.z + '(' + this.y + '+' +  this.x + ')',3);
        }
});


/* TYPE_DESCRIPTION: Write expression based on word problem. Words: divided, subtracted */
var i_5_oa_a_2__12 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_12';
                this.mNameMachine = new NameMachine();
                this.mNameOne = this.mNameMachine.getName();
                this.mNameTwo = this.mNameMachine.getName();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();

                this.x = 60; 
                this.y = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);

		this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.y + ' minutes fewer than an hour. ' + this.mNameTwo + ' played for ' + this.z + ' times as long as ' + this.mNameOne + '. Write an expression that represents this.');   
                this.setAnswer('(60-' + this.y + ')' + this.z,0);
        }
});

/* TYPE_DESCRIPTION: Write expression based on word problem. Words: divided, subtracted */
var i_5_oa_a_2__11 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_11';
                this.mNameMachine = new NameMachine();
                this.mFruit = this.mNameMachine.getFruit();
                this.mNameOne = this.mNameMachine.getName();
                this.mSchool = this.mNameMachine.getSchool();
                this.mPlayedActivity = this.mNameMachine.getPlayedActivity();

                this.factor = Math.floor((Math.random()*8)+2);
                this.z = Math.floor((Math.random()*8)+2);
                this.y = Math.floor((Math.random()*8)+2)
                this.x = parseInt( (this.factor * this.z) + this.y );

                this.setQuestion('Before lunch the cafeteria at ' + this.mSchool + ' had ' + this.x + ' ' + this.mFruit + '. After lunch the cafeteria had ' + this.y + ' less. The remaining were divided among the ' + this.z + ' players on the ' + this.mPlayedActivity + ' team. Write an expression that represents this.');

                this.setAnswer('('+this.x+'-'+this.y+')/'+this.z,0);
        }
});

/* TYPE_DESCRIPTION: Write expression based on word problem. Words: gave the rest out, threw out */
var i_5_oa_a_2__10 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,475,300,260,195,225,50,640,90);

                this.mType = '5.oa.a.2_10';
		this.mNameMachine = new NameMachine(); 
		this.mFruit = this.mNameMachine.getFruit(); 
		this.mNameOne = this.mNameMachine.getName();

		this.factor = Math.floor((Math.random()*8)+2);
		this.z = Math.floor((Math.random()*8)+2);
		this.y = Math.floor((Math.random()*8)+2) 		
		this.x = parseInt( (this.factor * this.z) + this.y );

                this.setQuestion(this.mNameOne + ' had ' + this.x + ' ' + this.mFruit + ', ' + this.y + ' of them were rotten so ' + this.mNameMachine.getPronoun(this.mNameOne,0) + ' threw them out. ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' gave the rest out evenly to ' + this.z + ' friends. Write an expression that represents this.');
                
		this.setAnswer('('+this.x+'-'+this.y+')/'+this.z,0);
        }
});

/* TYPE_DESCRIPTION: Match number sentence to equation. Words used: times, sum.   */
var i_5_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,200,50,225,95,100,50,425,100);

                this.mType = '5.oa.a.2_2';

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: ' + a + ' times the sum of  ' + a + ' and ' + b + '.');
                this.setAnswer('(' + a + '+' + b + ')' + c,0);
                this.setAnswer(c + '(' + a + '+' + b + ')',1);
        }
});

/* TYPE_DESCRIPTION: Write expression based off numerical expression. Words used add, multiply.  */
var i_5_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
		this.parent(sheet,200,50,225,95,100,50,425,100);

                this.mType = '5.oa.a.2_1';
        	this.mQuestionLabel.setSize(325,50);
        	this.mQuestionLabel.setPosition(200,95);
        	this.mAnswerTextBox.setPosition(525,100);

               	var a = Math.floor(Math.random()*8+2);
               	var b = Math.floor(Math.random()*8+2);
               	var c = Math.floor(Math.random()*8+2);

                this.setQuestion('Write an expression that matches this: Add ' + a + ' and ' + b + ' then multiply by ' + c + '.');
                this.setAnswer('(' + a + '+' + b + ')' + c,0);
                this.setAnswer(c + '(' + a + '+' + b + ')',1);
        }
});

