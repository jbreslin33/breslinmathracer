
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_3',4.0203,'4.oa.a.2','Multiplicative or Additive Comparison. Multiplicative.');
*/

var i_4_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '4.oa.a.2_3';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                this.a = 0;
                this.b = 0;

                while (this.a <= this.b)
                {
                        this.a = Math.floor(Math.random()*10+1);
                        this.b = Math.floor(Math.random()*10+1);
                }

                this.setQuestion('Compare.');
                this.setAnswer('Is greater than.',0);

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(50,50,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(50,50,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.a);
                shapeB.setText(this.b);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_2',4.0202,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Division operation.' );
*/

var i_4_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_2';

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetables     = this.mNameMachine.getVegetable();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 

		this.a = 0;
		this.b = 0;
		this.c = 0;
		this.r = 1;

		while (this.r != 0)
		{	
                	//variables
                	this.a = Math.floor(Math.random()*90)+10;
                	this.b = Math.floor(Math.random()*8)+2;
                	this.c = parseInt(this.a / this.b);
			this.r = this.a % this.b;
		}

						
                this.random = Math.floor(Math.random()*2);
		this.random = 1;
		if (this.random == 0)
		{
                	this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day. ' + this.mNameTwo + ' played ' + this.mPlayedActivity + ' for ' + this.b + ' times less minutes a day. Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');
		}
		else if (this.random == 1)
		{
                	this.setQuestion('At ' + this.mSchool + ' room ' + this.mRoomOne + ' ate ' + this.a + ' ' + this.mVegetables + '. Room '  + this.mRoomOne + ' ate ' + this.b + ' times as many ' + this.mVegetables + ' as room ' + this.mRoomTwo + '. How many ' + this.mVegetables + ' did room ' + this.mRoomTwo + ' eat? Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');

		}
                this.setAnswer('' + this.a + '/' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.c + '=' + this.a + '/' + this.b ,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('4.oa.a.2_1',4.0201,'4.oa.a.2','Word problem. Answer in equation form. Multiplicative comparision. Multiplication operation.' );
*/

var i_4_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '4.oa.a.2_1';

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

                this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write an equation that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12'); 

                this.setAnswer('' + this.a + '*' + this.b + '=' + this.c ,0);
                this.setAnswer('' + this.b + '*' + this.a + '=' + this.c ,1);
                this.setAnswer('' + this.c + '=' + this.a + '*' + this.b ,2);
                this.setAnswer('' + this.c + '=' + this.b + '*' + this.a ,3);
        }
});


