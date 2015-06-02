/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_5',3.0305,'3.oa.a.3','' );
*/
var i_3_oa_a_3__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '3.oa.a.3_5';
   
	this.r = Math.floor( (Math.random()*4) +1);
        this.setQuestion('What rectangle has been divided into same-sized squares?');
},

createQuestionShapes: function()
{
	var a1 = new Rectangle(25,75,300,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a1);
	var a2 = new Rectangle(25,75,325,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(a2);
	this.mText1 = new RaphaelText(280,30,this,0,0,1,"#000000",.5,false,"" + "B.",16);
        this.addQuestionShape(this.mText1);

	var b1 = new Rectangle(50,25,100,25,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b1);
	var b2 = new Rectangle(50,25,100,50,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b2);
	var b3 = new Rectangle(50,25,100,75,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(b3);
        this.mText2 = new RaphaelText(80,30,this,0,0,1,"#000000",.5,false,"" + "A.",16);
        this.addQuestionShape(this.mText2);
 
   	var c1 = new Rectangle(25,12.5,100,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c1);
   	var c2 = new Rectangle(25,12.5,125,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c2);
   	var c3 = new Rectangle(25,12.5,100,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c3);
   	var c4 = new Rectangle(25,12.5,125,137.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c4);
   	var c5 = new Rectangle(25,12.5,100,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c5);
        var c6 = new Rectangle(25,12.5,125,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c6);
        var c7 = new Rectangle(25,12.5,100,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c7);
        var c8 = new Rectangle(25,12.5,125,162.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c8);
        var c9 = new Rectangle(25,12.5,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c9);
        var c10 = new Rectangle(25,12.5,125,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c10);
        var c11 = new Rectangle(25,12.5,100,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c11);
        var c12 = new Rectangle(25,12.5,125,187.5,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(c12);
	this.mText3 = new RaphaelText(80,130,this,0,0,1,"#000000",.5,false,"" + "C.",16);
        this.addQuestionShape(this.mText3);

        var d1 = new Rectangle(25,25,300,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d1);
        var d2 = new Rectangle(25,25,325,125,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d2);
        var d3 = new Rectangle(25,25,300,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d3);
        var d4 = new Rectangle(25,25,325,150,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d4);
        var d5 = new Rectangle(25,25,300,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d5);
        var d6 = new Rectangle(25,25,325,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(d6);
        this.mText4 = new RaphaelText(280,130,this,0,0,1,"#000000",.5,false,"" + "D.",16);
        this.addQuestionShape(this.mText4);
	
	if (this.r == 1) 
	{
		this.setAnswer('' + 'A',0);
		this.mText4.setText('A.');
		this.mText2.setText('D.');
	}
	if (this.r == 2) 
	{
		this.setAnswer('' + 'B',0);
		this.mText4.setText('B.');
		this.mText1.setText('D.');
	}
	if (this.r == 3) 
	{
		this.setAnswer('' + 'C',0);
		this.mText4.setText('C.');
		this.mText3.setText('D.');
	}
	if (this.r == 4) 
	{
		this.setAnswer('' + 'D',0);
	}
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_4',3.0304,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__4 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_4';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

		this.setQuestion(this.ns.mNameOne + ' had a garden. In the garden ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' had ' + this.a + ' '  + this.ns.mVegetableOne + ' which represents ' + this.b + ' times the amount of ' + this.ns.mVegetableTwo +  ' in ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' garden. Write a number sentence that can be used to solve how many ' + this.ns.mVegetableTwo +  ' are in the garden. ' + this.ns.mNameMachine.getOperationInstructionEquation())     
                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_3',3.0303,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_3';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

                this.setQuestion(this.ns.mNameOne + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.a + ' minutes a day. ' + this.ns.mNameTwo + ' played ' + this.ns.mPlayedActivityOne + ' for ' + this.b + ' times less minutes a day. Write a number sentence that can be used to solve how many minutes ' + this.ns.mNameTwo + ' played a day. ' + this.ns.mNameMachine.getOperationInstructionEquation());
		
                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_2',3.0302,'3.oa.a.3','Word problem. Division. Factors between 1-10.' );
*/

var i_3_oa_a_3__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);
		
		this.ns = new NameSampler();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);
	
		this.x = 0;		
		this.y = 0;		
		while(this.x == this.y)
		{
                	this.x = Math.floor(Math.random()*98)+2;
                	this.y = Math.floor(Math.random()*98)+2;
		}

                this.setQuestion('At ' + this.ns.mSchoolOne + ' room ' + this.x + ' ate ' + this.a + ' ' + this.ns.mFruitOne + '. Room '  + this.x + ' ate ' + this.b + ' times as many ' + this.ns.mFruitOne + ' as room ' + this.y + '. How many ' + this.ns.mFruitOne + ' did room ' + this.y + ' eat? Write a number sentence that can be used to solve how many minutes ' + this.ns.mNameTwo + ' played a day. ' + this.ns.mNameMachine.getOperationInstructionEquation());

                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,1);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.3_1',3.0301,'3.oa.a.3','Word problem. Multiplication. Factors between 1-10.' );
*/

var i_3_oa_a_3__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.3_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);
		this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThing       = this.mNameMachine.getThing();
                this.mOwned       = this.mNameMachine.getOwned();

               	//variables
                this.a = Math.floor(Math.random()*9)+1;
		this.a = this.a * 10;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

	 	
                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write a number sentence that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. ' + this.mNameMachine.getOperationInstructionEquation()); 

                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,3);
        }
});
