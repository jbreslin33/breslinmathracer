var g1_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new NumberPad(application);
	},
	
	update: function()
	{
		this.parent();
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
	},
	
	showQuestion: function()
	{
		this.mInputPad.showQuestion();	
		var t = this.mQuiz.getQuestion().getAnswer(); 	
		var tArray = t.split(":");
		this.setClock(parseInt(tArray[0]),parseInt(tArray[1]));	
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

		for (i=0; i < this.mScoreNeeded; i++)
		{
			var h = '' + Math.floor((Math.random()*12)+1);	
			var m = '00';	
			randomChance = Math.floor((Math.random()*2));	
			
			//exact hour
			if (randomChance == 0)
			{
				m = '00';	
			}
			//half past
			else
			{
				m = '30';	
			}
		
			var question = new Question('What time is it?', '' + h + ':' + m);
			this.mQuiz.mQuestionArray.push(question);
		}

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

		this.mShapeArray = new Array();		
		
		this.createClock(12,59);	
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
	
	destroyShapes: function()
	{
		this.parent();
	},

	createClock: function(hours,minutes,seconds)
	{
		this.mClock = new Shape(200,200,200,200,this,"","",""); 
		this.mShapeArray.push(this.mClock);
		canvas = Raphael(this.mClock,200, 200);
                clock = canvas.circle(100,100,95);
                clock.attr({"fill":"#f5f5f5","stroke":"#444444","stroke-width":"5"})  
                var hour_sign;
                for(i=0;i<12;i++)
		{
                	var start_x = 100+Math.round(80*Math.cos(30*i*Math.PI/180));
                    	var start_y = 100+Math.round(80*Math.sin(30*i*Math.PI/180));
                    	var end_x = 100+Math.round(90*Math.cos(30*i*Math.PI/180));
                    	var end_y = 100+Math.round(90*Math.sin(30*i*Math.PI/180));    
                    	hour_sign = canvas.path("M"+start_x+" "+start_y+"L"+end_x+" "+end_y);
                }    
                this.hour_hand = canvas.path("M100 100L100 50");
                this.hour_hand.attr({stroke: "#444444", "stroke-width": 6});

                this.minute_hand = canvas.path("M100 100L100 40");
                this.minute_hand.attr({stroke: "#444444", "stroke-width": 4});

                var pin = canvas.circle(100, 100, 5);
                pin.attr("fill", "#000000");    
		
		//reset transforms
 		this.hour_hand.transform("");
 		this.minute_hand.transform("");
	},
	setClock: function(hours,minutes)
	{
		//reset transforms
 		this.hour_hand.transform("");
 		this.minute_hand.transform("");
		
		//rotate to spot
		if (hours == 12)
		{
			
			this.hour_hand.transform("r" + parseInt(minutes/2) + ",100,100"); 
			this.minute_hand.transform("r" + parseInt(6*minutes) + ",100,100"); 
		}
		else
		{
			this.hour_hand.transform("r" + parseInt(30*hours + (minutes/2)) + ",100,100"); 
			this.minute_hand.transform("r" + parseInt(6*minutes) + ",100,100"); 
		}
		this.log('' + hours + ':' + minutes);
	}
});
