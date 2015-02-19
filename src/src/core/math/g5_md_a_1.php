/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_1',5.2401,'5.md.a.1','');
*/
var i_5_md_a_1__1 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_1';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*8)+2); 
		var answer = parseInt(a * 1000);

                this.setQuestion('' + this.ns.mNameOne + ' ran ' + a + ' kilometers around a track. How many meters did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' run?');

                this.setAnswer('' + answer,0);
        }


});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_2',5.2402,'5.md.a.1','');
*/
var i_5_md_a_1__2 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_2';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*11)+2); 
		var answer = parseInt(a * 3);

                this.setQuestion('' + this.ns.mNameOne + ' ran the football ' + a + ' yards into the end zone to make a touchdown. How far did ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' run in feet?');

                this.setAnswer('' + answer,0);
        }


});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_3',5.2403,'5.md.a.1','');
*/
var i_5_md_a_1__3 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_3';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*9)+2); 
		var answer = parseInt(a * 100);

                this.setQuestion('' + this.ns.mNameOne + ' dove off a ' + a + ' meter diving platform into the pool. How many centimeters high is the diving platform?');

                this.setAnswer('' + answer,0);
        }


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_4',5.2404,'5.md.a.1','');
*/
var i_5_md_a_1__4 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_4';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*6)+1); 
		//var answer = parseInt(a * 1);

    var b = Math.floor((Math.random()*15)+1); 
		var answer = parseInt(b * 1);

    var c = (a * 16) + b;

                this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' lb of chicken. She needs ' + c + ' oz of chicken for a recipe. How many more ounces of chicken does ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' need for the recipe?');

                this.setAnswer('' + answer,0);
        }


});


/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_5',5.2405,'5.md.a.1','');
*/
var i_5_md_a_1__5 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_5';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*6)+1); 
		//var answer = parseInt(a * 1);

    var b = Math.floor(Math.random()*9)+1; 
//console.log(b);
		b = b * 0.1;
//console.log(b);
    b = (a-1) + b;
    b = b.toFixed(1); 
//console.log(b);
    
    var answer = a - b;
    var n = answer.toFixed(1);






                this.setQuestion('' + this.ns.mNameOne + ' has ' + a + ' L of water and only needs ' + b + ' L. How many mL of water should ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' pour out in order to have only ' + b + ' L left?');

                this.setAnswer(n,0);
        },



/* overrode this function to allow user to enter fraction, improper fraction, decimal, mixed number, whole number - as long as it is correct */

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
	}


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_6',5.2406,'5.md.a.1','');
*/
var i_5_md_a_1__6 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_6';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*10)+10) * 3; 

    var b = Math.floor((Math.random()*10)+10) * 3; 
		
    var c = Math.floor((Math.random()*10)+15);

    var answer = ((a*2) + (b*2))/3;
    answer = answer * c;

                this.setQuestion('' + this.ns.mNameOne + ' is building a fence around the perimeter of ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' yard, which is shaped like a rectangle. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,1) + ' yard is ' + a + ' feet long and ' + b + ' feet wide. One yard of fencing costs ' + c + ' dollars. How much will ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,0) + ' spend on fencing?');

                this.setAnswer('' + answer,0);
        }


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_7',5.2407,'5.md.a.1','');
*/
var i_5_md_a_1__7 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_7';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*10)+10); 

    var answer = a * 16;

                this.setQuestion('The capacity of a water cooler is ' + a + ' gallons. How many cups can the water cooler hold?');

                this.setAnswer('' + answer,0);
        }


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_8',5.2408,'5.md.a.1','');
*/
var i_5_md_a_1__8 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_8';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*6)+4);

    var b = Math.floor((Math.random()*3)+1);

    var answer = a * b * 2000;

                this.setQuestion(a + ' of the houses on maple street are getting their driveways paved. It takes ' + b + ' tons of concrete to pave each driveway. How many pounds of concrete will be used in all?');

                this.setAnswer('' + answer,0);
        }


});



/*
insert into item_types(id,progression,core_standards_id,description) values ('5.md.a.1_9',5.2409,'5.md.a.1','');
*/
var i_5_md_a_1__9 = new Class(
{

Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95,100,50,425,100);

                this.mType = '5.md.a.1_9';

    this.ns = new NameSampler();

		var a = Math.floor((Math.random()*4)+1);

    var b = Math.floor(Math.random()*3);
    b = (b*5) + 20;

    var answer = (a*300) / b;

                this.setQuestion('' + this.ns.mNameOne + ' ran the ' + a + '00-yard dash at the track meet. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' ran at a rate of  ' + b + ' feet per second. How long did it take to finish the race in seconds?');

                this.setAnswer('' + answer,0);
        }


});
