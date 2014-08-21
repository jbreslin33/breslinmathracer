
/*
prerequisites:
none finished
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_2',3.0102,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_3_oa_a_1__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_2';

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                //move gui
                this.mUserAnswerLabel.setPosition(125,200);
                this.mCorrectAnswerLabel.setPosition(425,200);

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;

                this.setQuestion('Write a multiplicative number sentence that goes with the picture. Example answer: 5x4');

                this.setAnswer('' + this.a + 'x' + this.b ,0);
                this.setAnswer('' + this.b + 'x' + this.c ,1);
		
		APPLICATION.log('a:' + this.a + ' b:' + this.b);
	},

        createQuestionShapes: function()
        {
                var y = 125;

		var a = parseInt(this.a); 
		var b = parseInt(this.b); 
	
                for (var i = 0; i < a; i++)
                {
			var x = 25; 
                	for (var z = 0; z < b; z++)
			{
                        	this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
                        	x = parseInt(x + 70);
			}
			y = y + 25; 	
                }
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.1_1',3.0101,'3.oa.a.1','Word Problem. Multiplication. Interprete(not solve). Factors between 1-10.' );
*/

var i_3_oa_a_1__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
        	this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.1_1';

		//move gui
		this.mUserAnswerLabel.setPosition(125,200);
		this.mCorrectAnswerLabel.setPosition(425,200);

                this.mNameMachine = new NameMachine();
                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mThing       = this.mNameMachine.getThing();
                this.mFruit       = this.mNameMachine.getFruit();
                this.mOwned       = this.mNameMachine.getOwned();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                this.mGrade      = this.mNameMachine.getGrade();
                this.mSchool      = this.mNameMachine.getSchool();
                this.mRoomOne      = Math.floor(Math.random()*90)+9 

               	//variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;

	
                random = Math.floor(Math.random()*4);
		
		if (random == 3)
		{
			var nameString = this.mNameMachine.getNameString(this.a);
			
			this.setQuestion(this.mNameOne + ' had friends named ' + nameString + '. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' gave each friend ' + this.b + ' ' + this.mFruit + '. Write a number sentence that can be used to solve how many ' + this.mFruit + ' ' + this.mNameOne + ' gave to ' + this.mNameMachine.getPronoun(this.mNameOne,0,1) + ' friends. Do not use spaces. Example Answer: 2x3');    	

		}

		if (random == 2)
		{
			this.setQuestion('At ' + this.mSchool + ' in the ' + this.mGrade + ' grade, room ' + this.mRoomOne + ' had ' + this.a + ' rows with ' + this.b + ' students in each row. Write a number sentence that can be used to solve how many students are in room ' + this.mRoomOne + '. Do not use spaces. Example Answer: 2x3');   
		}

		if (random == 1)
		{
			this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day for ' + this.b + ' days.  Write a number sentence that can be used to solve how many minutes ' + this.mNameOne + ' played ' + this.mPlayedActivity + '. Do not use spaces. Example Answer: 2x3'); 
		} 

		if (random == 0)
		{
                	this.setQuestion(this.mNameOne + ' ' + this.mOwned + ' ' + this.a + ' ' + this.mThing + '. ' + this.mNameTwo + ' had ' + this.b + ' times as many ' + this.mThing + ' as ' + this.mNameOne + '. Write a number sentence that can be used to solve how many ' + this.mThing + ' ' + this.mNameTwo + ' has. Do not use spaces. Example Answer: 2x3'); 
		}

                this.setAnswer('' + this.a + 'x' + this.b ,0);
                this.setAnswer('' + this.b + 'x' + this.a ,1);
        }
});
