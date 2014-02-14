var k_oa_a_2 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(20);

		this.mThresholdTime = 120000;
             	this.mCorrectAnswerThresholdTime = 30000;

                //input pad
                this.mInputPad = new BigQuestionNumberPad(application);

		//word problems
		this.mWordProblems = new WordProblems();
	},

     	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
		this.parent();
                
                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);
       
		//move dont forget 
	        this.mShapeArray[8].setVisibility(false);
	        this.mShapeArray[9].setVisibility(false);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
		this.parent();

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(140,140);
	      
		//move frantic clock 
		this.mShapeArray[8].setPosition(650,300);
        },

    	tip: function()
        {
                if (this.mQuiz.getQuestion().mTipArray.length > 0)
                {
                        //tip header
                        this.mShapeArray[2].setPosition(140,100);
                        this.mShapeArray[2].setSize(200,10);
                        this.mShapeArray[2].setVisibility(true);
                        if (this.mQuiz.getQuestion().mTipArray.length == 1)
                        {
                                this.mShapeArray[2].mMesh.innerHTML = 'Tip:';
                        }
                        else
                        {
                                this.mShapeArray[2].mMesh.innerHTML = 'Tips:';
                        }

                        if (this.mQuiz.getQuestion().mTipArray.length > 0)
                        {
                                this.mShapeArray[3].setPosition(380,150);
                                this.mShapeArray[3].setSize(700,10);
                                this.mShapeArray[3].setVisibility(true);
                                this.mShapeArray[3].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[0];
                        }
                        if (this.mQuiz.getQuestion().mTipArray.length > 1)
                        {
                                this.mShapeArray[4].setPosition(380,200);
                        	this.mShapeArray[4].setSize(700,10);
                                this.mShapeArray[4].setVisibility(true);
                                this.mShapeArray[4].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[1];
                        }
                        if (this.mQuiz.getQuestion().mTipArray.length > 2)
                        {
                                this.mShapeArray[5].setPosition(380,250);
                        	this.mShapeArray[5].setSize(700,10);
                                this.mShapeArray[5].setVisibility(true);
                                this.mShapeArray[5].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[2];
                        }
                        if (this.mQuiz.getQuestion().mTipArray.length > 3)
                        {
                                this.mShapeArray[6].setPosition(380,300);
                        	this.mShapeArray[6].setSize(700,10);
                                this.mShapeArray[6].setVisibility(true);
                                this.mShapeArray[6].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[3];
			}
                }
        },


	createQuestions: function()
        {
 		this.parent();
		
		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2 || totalD < this.mScoreNeeded * .2)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*4));		
				this.log('s:' + s);
				if (randomChance == 0)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeApB(2,9,2,9,2,9,'Luke had','toy cars. His cousin Mikey brings', 'toy cars to play with Luke. How many cars do the boys have to play with now?'));
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'boys cars = Luke cars + Mikey cars';
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[1] = 'a = Luke cars, b = Mikey cars, x = Boys cars';
					totalA++;
				}	

				if (randomChance == 1)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeApB(2,9,2,9,2,9,'Brent had',' books about dinosaurs. He got', 'more books about dinasaurs from the library. How many books about dinosaurs does Brent have now?'));
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'had + got = has';
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[1] = 'a = had, b = got, x = has';
					totalB++;
				}
				if (randomChance == 2)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeAmB(2,9,2,9,2,9,'Emerald had',' stuffed animals. She put', 'of them in the chair for the tea party. She left the rest of them on the bed. How many stuffed animals did Emerald leave on the bed.'));
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'total - put on chair = on bed';
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[1] = 'a = total, b = put on chair, x = on bed';
					totalC++;
				}
				if (randomChance == 3)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeAmB(2,9,2,9,2,9,'Max had','pencils in his box. He gave', 'of them to Lyle. How many pencils does Max have in his box now?'));
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[0] = 'Max had - gave to Lyle = Max has';
					this.mQuiz.mQuestionArray[this.mQuiz.mQuestionArray.length -1].mTipArray[1] = 'a = Max had, b = gave to Lyle, x = Max has';
					totalD++;
				}
			}
		}
	}
});
