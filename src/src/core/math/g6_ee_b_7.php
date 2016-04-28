/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_1',6.3301,'6.ee.b.7','');
*/
var i_6_ee_b_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_1';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = Math.floor(Math.random()*9+11);

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to subtract ___ from both sides. </br></br>' + 'a' + ' + ' + b + ' = ' + c);

        var answer = c - b;
       
        this.setAnswer('' + b,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_2',6.3302,'6.ee.b.7','');
*/
var i_6_ee_b_7__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_2';

        var a = Math.floor(Math.random()*2+2);
        var b = Math.floor(Math.random()*2+1);
        var c = Math.floor(Math.random()*2+3);

        var d = Math.floor(Math.random()*2+1);
        var e = Math.floor(Math.random()*3+6);

        var f = Math.floor(Math.random()*2+3);

        var fractionA = new Fraction(d,e,false);
        var fractionB = new Fraction(f,e,false);

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to subtract ___ from both sides. </br></br>' + 'a' + ' + ' + b + fractionA.getString() + ' = ' + c + fractionB.getString());

        var answer = c - b;
       
        this.setAnswer('' + b + d + '/' + e,0);
        this.setShowAnswer('' + b + fractionA.getString());

//this.mCorrectAnswerLabel.setPosition(530,300);
//this.mUserAnswerLabel.setPosition(230,300);

},

showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }

});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_3',6.3303,'6.ee.b.7','');
*/
var i_6_ee_b_7__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_3';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.random()*9+2;
        var c = Math.random()*9+11;

        var n = b.toFixed(2);
        var m = c.toFixed(2); 

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to subtract ___ from both sides. </br></br>' + 'a' + ' + ' + n + ' = ' + m);

        var answer = c - b;
       
        this.setAnswer('' + n,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_4',6.3304,'6.ee.b.7','');
*/
var i_6_ee_b_7__4 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_4';

        var a = Math.floor(Math.random()*11+22);
        var b = Math.floor(Math.random()*22+40);
        var c = a + b;

        this.setQuestion('What is the solution to this equation?</br></br> ' + 'a' + ' + ' + b + ' = ' + c);

        var answer = a;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_5',6.3305,'6.ee.b.7','');
*/
var i_6_ee_b_7__5 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_5';

       // var a = Math.floor(Math.random()*11+22);
       // var b = Math.floor(Math.random()*22+40);
      //  var c = a + b;

        var a = Math.random()*11+2;
        var b = Math.random()*9+2;
        
        var n = b.toFixed(2);
        var k = a.toFixed(2); 

        var m = 1.0*k + 1.0*n;
        m = m.toFixed(2); 

       this.setQuestion('What is the solution to this equation?</br></br>' + 'a' + ' + ' + n + ' = ' + m);

        var answer = k;
       
        this.setAnswer('' + answer,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_6',6.3306,'6.ee.b.7','');
*/
var i_6_ee_b_7__6 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_6';

this.mChopWhiteSpace = false;

        var an = 1;
        var ad = 1;
        var bn = 1;
        var bd = 1;

     while (an <= ad || (an % ad) == 0)
     {
        an = Math.floor(Math.random()*11)+2;
        ad = Math.floor(Math.random()*11)+2;
     }

      while (bn <= bd || (bn % bd) == 0)
     {
        bn = Math.floor(Math.random()*11)+13;
        bd = ad; //Math.floor(Math.random()*11)+2;
     }

     var fractionA = new Fraction(an,ad,false);
     var fractionB = new Fraction(bn,bd,false);

     var mix = fractionB.subtract(fractionA);

     this.setAnswer(mix.mNumerator + '/' + mix.mDenominator,0);

     this.setShowAnswer(mix.getMixedNumber());
     
     //console.log(mix.mNumerator + '/' + mix.mDenominator);

this.setQuestion('What is the solution to this equation?</br></br>' + 'a' + ' + ' + fractionA.getMixedNumber() + ' = ' + fractionB.getMixedNumber());

},


checkUserAnswer: function()
	{

			var str = '';
			var res = '';
			var whole;
			var frac;
			var res2;
			var decimal;
      var correctAnswer;
      var userAnswer;

			//console.log('' + this.mUserAnswer);

			str = '' + this.mUserAnswer;
			res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			userAnswer = (whole + decimal) * 1.0;
			
			//console.log(userAnswer);

			//str = this.mQuiz.getQuestion().mAnswerArray[0];
      str = this.mAnswerArray[0];
      res = str.split(" ");

      // fraction or whole - no mixed number
			if (res.length == 1)
			{
				str = res[0].split("/");

        // fraction - else it's a whole and we just leave it as is
				if(str.length == 2)
				   res[0] = 1.0 * (str[0] * 1.0)/(str[1] * 1.0);

        // either way set this to zero so we don't get error
				res[1] = '0/1';

				
			}
			whole = res[0] * 1.0;
			frac = res[1];
			res2 = frac.split("/");

			if (res2.length == 1)
			{
				res2[1] = '1';
			}

			decimal = 1.0 * (res2[0] * 1.0)/(res2[1] * 1.0);
			correctAnswer = (whole + decimal) * 1.0;

		correctAnswerFound = false;
		
		if (userAnswer == correctAnswer)
		{
			correctAnswerFound = true;	
		} 
	
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},






showCorrectAnswer: function()
        {
		this.mCorrectAnswerLabel.setSize(150,200);
                //this.mCorrectAnswerLabel.setPosition(425,250);
                this.mCorrectAnswerLabel.setPosition(530,400);
                this.mUserAnswerLabel.setPosition(230,300);
                if (this.mCorrectAnswerLabel)
                {
                        this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + this.getShowAnswer());
                        this.mCorrectAnswerLabel.setVisibility(true);
                }
                this.hideAnswerInputs();
                this.showUserAnswer();
        }



});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_7',6.3307,'6.ee.b.7','');
*/
var i_6_ee_b_7__7 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_7';

        var a = Math.floor(Math.random()*11+2);
        var b = Math.floor(Math.random()*9+2);
        var c = a * b;

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to divide ___ from both sides. </br></br>' + a + 'b' + ' = ' + c);       
       
        this.setAnswer('' + a,0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_8',6.3308,'6.ee.b.8','');
*/
var i_6_ee_b_7__8 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_8';

        this.mChopWhiteSpace = false;

        var fractionA = new Fraction(1,2,false);

        var a = Math.floor(Math.random()*8+2);
        var b = Math.floor(Math.random()*8+2);
        var c = a * 2 + 1;

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to divide ___ from both sides. </br></br>' + a + fractionA.getString() + 'b' + ' = ' + c);       
       
        this.setAnswer('' + a + ' 1/2',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});


/*
insert into item_types(id,progression,core_standards_id,description) values ('6.ee.b.7_9',6.3309,'6.ee.b.9','');
*/
var i_6_ee_b_7__9 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,75,100,50,425,100);
        this.mType = '6.ee.b.7_9';

        this.mChopWhiteSpace = false;

        var a = Math.floor(Math.random()*8+2);
        var b = Math.floor(Math.random()*8+2);
        var d = '.5';
        var c = a * 2 + 1;

        this.setQuestion('In order to get the variable to be on one side of the equation by itself, you need to divide ___ from both sides. </br></br>' + a + d + 'b' + ' = ' + c);       
       
        this.setAnswer('' + a + '.5',0);

this.mCorrectAnswerLabel.setPosition(530,300);
this.mUserAnswerLabel.setPosition(230,300);

}
});

