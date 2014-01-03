var k_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePadSpread(application);
	
		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();
		this.mCountShapeArrayC = new Array();
		this.mCountShapeArrayD = new Array();

		//move buttons
		this.mInputPad.mButtonA.setPosition(100,100);

		//numberOfShapes
		this.mNumberOfAArray = new Array()
		this.mNumberOfBArray = new Array()
		this.mNumberOfCArray = new Array()
		this.mNumberOfDArray = new Array()

		this.mLeastMost = 0;

		this.mCorrectAnswerArray = new Array();
		this.mCorrectAnswerArray[0] = 'giraffes';
		this.mCorrectAnswerArray[1] = 'kids';
		this.mCorrectAnswerArray[2] = 'red monsters';
		this.mCorrectAnswerArray[3] = 'feathers';
	},

	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mCountShapeArray.length; i++)
                {
			//A
                        this.mCountShapeArrayA[i].mDiv.mDiv.removeChild(this.mCountShapeArrayA[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayA[i].mDiv.mDiv);
                        this.mCountShapeArrayA[i] = 0;
			//A
                        this.mCountShapeArrayB[i].mDiv.mDiv.removeChild(this.mCountShapeArrayB[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayB[i].mDiv.mDiv);
                        this.mCountShapeArrayB[i] = 0;
			//A
                        this.mCountShapeArrayC[i].mDiv.mDiv.removeChild(this.mCountShapeArrayC[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayC[i].mDiv.mDiv);
                        this.mCountShapeArrayC[i] = 0;
			//D
                        this.mCountShapeArrayD[i].mDiv.mDiv.removeChild(this.mCountShapeArrayD[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayD[i].mDiv.mDiv);
                        this.mCountShapeArrayD[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
                {
                        this.mCountShapeArrayA[i].setVisibility(false);
                        this.mCountShapeArrayB[i].setVisibility(false);
                        this.mCountShapeArrayC[i].setVisibility(false);
                        this.mCountShapeArrayD[i].setVisibility(false);
                }

		for (i = 0; i < this.mNumberOfAArray[this.mScore]; i++)
                {
                        this.mCountShapeArrayA[i].setVisibility(true);
                }
		for (i = 0; i < this.mNumberOfBArray[this.mScore]; i++)
                {
                        this.mCountShapeArrayB[i].setVisibility(true);
                }
		for (i = 0; i < this.mNumberOfCArray[this.mScore]; i++)
                {
                        this.mCountShapeArrayC[i].setVisibility(true);
                }
		for (i = 0; i < this.mNumberOfDArray[this.mScore]; i++)
                {
                        this.mCountShapeArrayD[i].setVisibility(true);
                }
		
		this.mInputPad.showQuestion();	
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();

              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var question = 0;
			this.mLeastMost = Math.floor((Math.random()*2));

			this.mNumberOfAArray[i] = Math.floor((Math.random()*6)+1);
			this.mNumberOfBArray[i] = Math.floor((Math.random()*6)+1);
			this.mNumberOfCArray[i] = Math.floor((Math.random()*6)+1);
			this.mNumberOfDArray[i] = Math.floor((Math.random()*6)+1);

			while (this.mNumberOfAArray[i] == this.mNumberOfBArray[i] || this.mNumberOfAArray[i] == this.mNumberOfCArray[i] || this.mNumberOfAArray[i] == this.mNumberOfDArray[i] || this.mNumberOfBArray[i] == this.mNumberOfCArray[i] || this.mNumberOfBArray[i] == this.mNumberOfDArray[i] || this.mNumberOfCArray[i] == this.mNumberOfDArray[i])
			{
				this.mNumberOfAArray[i] = Math.floor((Math.random()*6)+1);
				this.mNumberOfBArray[i] = Math.floor((Math.random()*6)+1);
				this.mNumberOfCArray[i] = Math.floor((Math.random()*6)+1);
				this.mNumberOfDArray[i] = Math.floor((Math.random()*6)+1);
			}

			var el = 0;
			if (this.mLeastMost == 0)
			{
                                for (m = 7; m > 0; m--)
				{
					if (this.mNumberOfAArray[i] == m)
					{
						el = 0; 
					}
					if (this.mNumberOfBArray[i] == m)
					{
						el = 1; 
					}	
					if (this.mNumberOfCArray[i] == m)
					{
						el = 2; 
					}
					if (this.mNumberOfDArray[i] == m)
					{
						el = 3; 
					}
				}
				question = new Question('What has the least?','' + this.mCorrectAnswerArray[el]);
			}
			
			if (this.mLeastMost == 1)
			{
				for (m = 0; m < 7; m++)
                                {
                                	if (this.mNumberOfAArray[i] == m)
                                        {
						el = 0; 
                                        }
                                        if (this.mNumberOfBArray[i] == m)
                                        {
						el = 1; 
                                        }
                                        if (this.mNumberOfCArray[i] == m)
                                        {
						el = 2; 
                                        }
                                        if (this.mNumberOfDArray[i] == m)
                                        {
						el = 3; 
                                        }
				}
				question = new Question('What has the most?','' + this.mCorrectAnswerArray[el]);
			}
			this.mQuiz.mQuestionArray.push(question);
		}

		for (i = 0; i < this.mQuiz.mQuestionArray.length; i++)
		{
			this.mQuiz.mQuestionArray[i].setChoice('A','' + this.mCorrectAnswerArray[0]);
			this.mQuiz.mQuestionArray[i].setChoice('B','' + this.mCorrectAnswerArray[1]);
			this.mQuiz.mQuestionArray[i].setChoice('C','' + this.mCorrectAnswerArray[2]);
			this.mQuiz.mQuestionArray[i].setChoice('D','' + this.mCorrectAnswerArray[3]);
		}	

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.mCountShapeArrayA = new Array();		
		this.mCountShapeArrayB = new Array();		
		this.mCountShapeArrayC = new Array();		
		this.mCountShapeArrayD = new Array();		

                this.mCountShapeArrayA.push(new Shape(50,50,450,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,450,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,450,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,450,350,this,"/images/attributes/feather.jpg","",""));
                
		this.mCountShapeArrayA.push(new Shape(50,50,500,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,500,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,500,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,500,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,550,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,550,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,550,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,550,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,600,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,600,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,600,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,600,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,650,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,650,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,650,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,650,350,this,"/images/attributes/feather.jpg","",""));
		
		this.mCountShapeArrayA.push(new Shape(50,50,700,50,this,"/images/attributes/giraffe.jpg","",""));
                this.mCountShapeArrayB.push(new Shape(50,50,700,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayC.push(new Shape(50,50,700,250,this,"/images/monster/red_monster.png","",""));
                this.mCountShapeArrayD.push(new Shape(50,50,700,350,this,"/images/attributes/feather.jpg","",""));

		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			//A
			this.mCountShapeArrayA[i].setVisibility(false);
               		this.mCountShapeArrayA[i].mCollidable = false;
               		this.mCountShapeArrayA[i].mCollisionOn = false;
			//B
			this.mCountShapeArrayB[i].setVisibility(false);
               		this.mCountShapeArrayB[i].mCollidable = false;
               		this.mCountShapeArrayB[i].mCollisionOn = false;
			//C
			this.mCountShapeArrayC[i].setVisibility(false);
               		this.mCountShapeArrayC[i].mCollidable = false;
               		this.mCountShapeArrayC[i].mCollisionOn = false;
			//D
			this.mCountShapeArrayD[i].setVisibility(false);
               		this.mCountShapeArrayD[i].mCollidable = false;
               		this.mCountShapeArrayD[i].mCollisionOn = false;
		}	
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

});
