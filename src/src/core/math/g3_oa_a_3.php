
/*
prerequisites:
none finished
*/

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

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 
                
		this.mAdult     = this.mNameMachine.getAdult();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

                this.random = Math.floor(Math.random()*2);
		this.random = 2;
		
		if (this.random == 2) 
		{
			this.setQuestion(this.mAdult + ' had a garden. In the garden ' + this.mNameMachine.getPronoun(this.mAdult,0) + ' had ' + this.a + ' '  + this.mVegetableOne + ' which represents ' + this.b + ' times the amount of ' + this.mVegetableTwo +  ' in ' + this.mNameMachine.getPronoun(this.mAdult,0,1) + ' garden. Write a number sentence that can be used to solve how many ' + this.mVegetableTwo +  ' are in the garden. ' + this.mNameMachine.getOperationInstructionExpression())     
		}
		
		if (this.random == 1)
		{
                	this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day. ' + this.mNameTwo + ' played ' + this.mPlayedActivity + ' for ' + this.b + ' times less minutes a day. Write a number sentence that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. ' + this.mNameMachine.getOperationInstructionExpression());
		}
		
		if (this.random == 0)
		{
                	this.setQuestion('At ' + this.mSchool + ' room ' + this.mRoomOne + ' ate ' + this.a + ' ' + this.mFruit + '. Room '  + this.mRoomOne + ' ate ' + this.b + ' times as many ' + this.mFruit + ' as room ' + this.mRoomTwo + '. How many ' + this.mFruit + ' did room ' + this.mRoomTwo + ' eat? Write a number sentence that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. ' + this.mNameMachine.getOperationInstructionExpression());

		}

                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,2);
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

	 	
                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write a number sentence that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. ' + this.mNameMachine.getOperationInstructionExpression()); 

                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,3);
        }
});
