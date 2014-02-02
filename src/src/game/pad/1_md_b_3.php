var g1_md_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 5000;

		this.setScoreNeeded(20);

		//input pad
		this.mInputPad = new NumberPad(application);
	},
	
	showQuestion: function()
	{
		this.mInputPad.showQuestion();	
		var t = this.mQuiz.getQuestion().getAnswer(); 	
		var tArray = t.split(":");
		this.setClock(parseInt(tArray[0]),parseInt(tArray[1]));	
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
	},
	
	createQuestions: function()
        {
		this.parent();

		this.mQuiz.resetQuestionArray();

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
	},

	createWorld: function()
	{
		this.parent();

		this.createClock(12,59);	
	},
	
	createClock: function(hours,minutes,seconds)
	{
		canvas = Raphael(25,200,200, 200);
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
	}
});
