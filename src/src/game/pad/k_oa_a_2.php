var k_oa_a_2 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(20);

		this.mThresholdTime = 240000;
             	this.mCorrectAnswerThresholdTime = 40000;
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

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);
	      
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
                        if (this.mQuiz.getQuestion().mTipArray.length > 3)
                        {
                                this.mShapeArray[6].setPosition(380,180);
                        	this.mShapeArray[6].setSize(700,10);
                                this.mShapeArray[6].setVisibility(true);
                                this.mShapeArray[6].mMesh.innerHTML = this.mQuiz.getQuestion().mTipArray[3];
			}
                }
        },

        createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(200,200,140,140,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Chris had','toy cars. His friend Albert brings', 'toy cars to play with Albert. How many cars do they have to play with now?',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Toy cars Chris had + Toy cars Albert brings =  Total toy cars they have to play with now';
		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Zuyanna had','rings. Her friend Iris gave her', ' more rings. How many rings does Zuyanna have now?',0));	
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Rings Zuyanna had + Rings Iris gave Zuyanna = Rings Zuyanna has now';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Jaavon had','books about dinosaurs. He got', 'more books about dinosaurs from the library. How many books about dinosaurs does Jaavon have now?',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Dinosaur books Jaavon had + Dinosaur books Jaavon got from library = Dinosaur books Jaavon has now';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Michael had','baseballs. He got ', 'more baseballs from his friend. How many baseballs does Michael have now?',0));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Baseballs Michael had + Baseballs Michael got from his friend = Baseballs Michael has now';
	
       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Jasmine had',' stuffed animals. She put', 'of them in the chair for the tea party. She left the rest of them on the bed. How many stuffed animals did Jasmine leave on the bed.',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Stuffed animals Jasmine had - Stuffed animals Jasmine put on chair = rest of Stuffed animals on bed';
       		
		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Leah had',' cookies. She ate', 'of them. She left the rest of the cookies for Santa Claus. How many cookies did Leah leave for Santa Claus.',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Cookies Leah had - Cookies Leah ate = Cookies Leah left for Santa Claus';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Devin had','pencils in his box. He gave', 'of them to Zabriana. How many pencils does Devin have in his box now?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Pencils Devin had in box - Pencils Devin game to Zabriana = Pencils Devin has left in box';

       		this.mQuiz.mQuestionPoolArray.push(new QuestionWord('','',2,9,2,9,2,9,'Tanya had','erasers in her case. She gave', 'of them to Ny. How many erasers does Tanya have in her case now?',1));
		this.mQuiz.mQuestionPoolArray[this.mQuiz.mQuestionPoolArray.length -1].mTipArray[0] = 'Erasers Tanya had in her case - Erasers Tanya gave to Ny = Erasers Tanya has left in her case';

		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;
		var totalE = 0;
		var totalF = 0;
		var totalG = 0;
		var totalH = 0;

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2 || totalD < this.mScoreNeeded * .2 || totalE < this.mScoreNeeded * .2 || totalF < this.mScoreNeeded * .2 || totalG < this.mScoreNeeded * .2 || totalH < this.mScoreNeeded * .2)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*8));		
				if (randomChance == 0)
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalA++;
				}	

				else if (randomChance == 1) 
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalB++;
				}
				else if (randomChance == 2) 
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalC++;
				}
				else if (randomChance == 3) 
				{
       					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
					totalD++;
				}
                                if (randomChance == 4)
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
                                        totalE++;
                                }

                                else if (randomChance == 5) 
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
                                        totalF++;
                                }
                                else if (randomChance == 6)
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
                                        totalG++;
                                }
                                else if (randomChance == 7)
                                {
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomChance]);
                                        totalH++;
                                }

			}
		}
	}
});
