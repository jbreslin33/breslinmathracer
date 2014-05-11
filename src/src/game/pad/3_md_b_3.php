var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();
		this.mCountShapeArrayC = new Array();
		this.mCountShapeArrayD = new Array();

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

	createNumQuestion: function()
        {
		this.parent();

                this.mNumQuestion.setPosition(110,100);
        },
 
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mCountShapeArrayA.length; i++)
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
                this.mCountShapeArrayA = 0;
                this.mCountShapeArrayB = 0;
                this.mCountShapeArrayC = 0;
                this.mCountShapeArrayD = 0;
	},

	showQuestion: function()
	{
		this.parent();

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
	},

	makeRandomChart: function()
	{
		this.mNumberOfAArray[i] = Math.floor((Math.random()*6)+1);
		this.mNumberOfBArray[i] = Math.floor((Math.random()*6)+1);
		this.mNumberOfCArray[i] = Math.floor((Math.random()*6)+1);
		this.mNumberOfDArray[i] = Math.floor((Math.random()*6)+1);
	},
 
	createQuestions: function()
        {
		this.parent();

              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d] = 0;
			this.mNumberOfAArray[i] = 0;
			this.mNumberOfBArray[i] = 0;
			this.mNumberOfCArray[i] = 0;
			this.mNumberOfDArray[i] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();
			
		this.mNumberOfAArray = 0;
		this.mNumberOfAArray = new Array();
		
		this.mNumberOfBArray = 0;
		this.mNumberOfBArray = new Array();

		this.mNumberOfCArray = 0;
		this.mNumberOfCArray = new Array();
	
		this.mNumberOfDArray = 0;
		this.mNumberOfDArray = new Array();
			

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var question = 0;
			var answer = -1;
			this.mLeastMost = Math.floor((Math.random()*2));
			this.makeRandomChart();
			this.mLeastMost = 2; 

			while (answer < 0)
			{		
				//try again
				this.makeRandomChart();

				var el = 0;
				this.mLeastMost = 2;
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
				
				//giraffes - kids 
                       		if (this.mLeastMost == 2)
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
					answer = parseInt(this.mNumberOfAArray[i] - this.mNumberOfBArray[i]);	
                                	question = new Question('How many more Giraffs are there than Kids?','' + answer);
                        	}
			}
			this.mQuiz.mQuestionArray.push(question);
			this.createQuestionShapes();
		}
	},

	createQuestionShapes: function()
	{
		if (this.mCountShapeArrayA.length > 0)
		{
			return;
		}
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
	}
});
