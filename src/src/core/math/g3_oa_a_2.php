/*
prerequisites:
none yet
*/

/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.2_1',3.0201,'3.oa.a.2','Word problem. Answer in expression form. Division.' );
*/

var i_3_oa_a_2__1 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '3.oa.a.2_1';

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
			this.setQuestion(this.mAdult + ' had a garden. In the garden ' + this.mNameMachine.getPronoun(this.mAdult,0) + ' had ' + this.a + ' ' + this.mVegetableOne + '. ' + this.mNameMachine.getPronoun(this.mAdult,1,0) + ' gave out '  + this.mVegetableOne + ' equally among ' + this.mNameMachine.getPronoun(this.mAdult,0,1) + ' ' + this.b + ' friends. Write a number sentence that can be used to solve how many ' + this.mVegetableOne + ' each friend got. Use / for division. Do not use spaces. Example Answer: 35/7');   
		}
		
		if (this.random == 1)
		{
                	this.setQuestion(this.mNameOne + ' played ' + this.mPlayedActivity + ' for ' + this.a + ' minutes a day. ' + this.mNameTwo + ' played ' + this.mPlayedActivity + ' for ' + this.b + ' times less minutes a day. Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');
		}
		
		if (this.random == 0)
		{
                	this.setQuestion('At ' + this.mSchool + ' room ' + this.mRoomOne + ' ate ' + this.a + ' ' + this.mFruit + '. Room '  + this.mRoomOne + ' ate ' + this.b + ' times as many ' + this.mFruit + ' as room ' + this.mRoomTwo + '. How many ' + this.mFruit + ' did room ' + this.mRoomTwo + ' eat? Write an equation that can be used to solve how many minutes ' + this.mNameTwo + ' played a day. Remember an equation has an equal sign. Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 3+4=12');

		}

                this.setAnswer('' + this.a + '/' + this.b,0);
        }
});
