raphael = 0;
divLines = [];

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
                this.mTeacherName     = this.mNameMachine.getAdult();
                this.mPlayedActivity       = this.mNameMachine.getPlayedActivity();
                
		this.mSchool     = this.mNameMachine.getSchool();
		this.mVegetableOne     = this.mNameMachine.getVegetable();
		this.mVegetableTwo     = this.mNameMachine.getVegetable();
		this.mFruit     = this.mNameMachine.getFruit();
		this.mThings     = this.mNameMachine.getThing();
    this.mSupply     = this.mNameMachine.getSupply();

		this.mRoomOne = Math.floor(Math.random()*10)+40; 
		this.mRoomTwo = Math.floor(Math.random()*10)+20; 
                
		this.mAdult     = this.mNameMachine.getAdult();

                this.b = Math.floor(Math.random()*8)+2;
                this.c = Math.floor(Math.random()*8)+2;
                this.a = parseInt(this.b * this.c);

                this.random = Math.floor(Math.random()*4);
		//this.random = 2;

    if (this.random == 2)
		{
			this.setQuestion(this.mNameOne + '  has fabric that is ' + this.a + ' inches long. ' + this.mNameMachine.getPronoun(this.mNameOne,1,0) + ' wants to cut the fabric into strips that are ' + this.b + ' inches wide. Write a number sentence that can be used to show how many strips ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' can make.');    
		}


    if (this.random == 4)
		{
			this.setQuestion(this.mAdult + ' has ' + this.a + ' ' + this.mSupply + ' ' + this.mNameMachine.getPronoun(this.mAdult,0,0) + ' wants to store over summer break. He can put ' + this.b + ' ' + this.mSupply + ' into each storage box. Write a number sentence that can be used to solve how many boxes ' + this.mAdult + ' needs to store all of his ' + this.mSupply + '.');    
		}

		if (this.random == 3)
		{
			this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + ' and ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' wants to divide them up equally into ' + this.b + ' boxes. Write a number sentence that can be used to solve how many ' + this.mThings + ' were put in each box.');    
		}

		if (this.random == 1)
		{
                	this.setQuestion(this.mNameOne + ' has ' + this.a + ' ' + this.mThings + ' and ' + this.mNameMachine.getPronoun(this.mNameOne,0,0) + ' wants to share them equally with ' + this.mNameMachine.getPronoun(this.mNameOne,0,1) + ' ' + this.b + ' brothers. Write a number sentence that can be used to solve how many ' + this.mThings + ' each brother will get.');
     	
		}
		
		if (this.random == 0) 
		{
			this.setQuestion(this.mAdult + ' had a garden. In the garden ' + this.mNameMachine.getPronoun(this.mAdult,0) + ' had ' + this.a + ' ' + this.mVegetableOne + '. ' + this.mNameMachine.getPronoun(this.mAdult,1,0) + ' gave out '  + this.mVegetableOne + ' equally among ' + this.mNameMachine.getPronoun(this.mAdult,0,1) + ' ' + this.b + ' friends. Write a number sentence that can be used to solve how many ' + this.mVegetableOne + ' each friend got.');   
		}
               
    this.setAnswer('' + this.a + '/' + this.b ,0);	
		this.setAnswer('' + this.a + '/' + this.b + '=' + this.c,1);
		this.setAnswer('' + this.a + '/' + this.b + '=',2);         
  }
});



/*
insert into item_types(id,progression,core_standards_id,description) values ('3.oa.a.2_2',3.0202,'3.oa.a.2','Word Problem. Division. Interprete(not solve). Factors between 1-10. Picure.' );
*/

var i_3_oa_a_2__2 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);              

                this.mType = '3.oa.a.2_2';
  
                this.Xpad = 10;
                this.Ypad = 35;

                //if (raphael != 0)
                  //raphael.clear();

                //this.mRaphael = Raphael(350,137,150,5);
                //this.mRaphael = Raphael(this.Xpad,this.Ypad,700,700);
                //raphael = Raphael(this.Xpad,this.Ypad,700,350);

      // this.mFractionBar = new LineOne (this.mSheet.mGame,this.mRaphael,0,0,0,0,"#000000",false);
		
		//move gui
		this.mUserAnswerLabel.setPosition(625,150);
		this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLink = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*7)+2;
                this.b = Math.floor(Math.random()*7)+2;
                this.c = parseInt(this.a * this.b);
                
		var random = Math.floor(Math.random()*1);
		if (random == 0)
		{
                	this.setQuestion('Write a number sentence that represents the picture.');
		}
		if (random == 1)
		{
                	this.setQuestion('Write a multiplication expression that represents the picture.');
		}

		this.setAnswer('' + this.c + '/' + this.b ,0);
    this.setAnswer('' + this.c + '/' + this.a ,1);
		this.setAnswer('' + this.c + '/' + this.a + '=' + this.b,2);
		this.setAnswer('' + this.c + '/' + this.b + '=' + this.a,3);
		this.setAnswer('' + this.c + '/' + this.a + '=',4);
		this.setAnswer('' + this.c + '/' + this.b + '=',5);

	},

createQuestionShapes: function()
{
    // raphael.clear();
  
    var y = 135;
    var x = 0;

		var a = parseInt(this.a); 
		var b = parseInt(this.b); 
    
    var length = 0;

    //this.mFractionBar.dragMove(100,100);
    //this.addShape(this.mFractionBar);
		//this.mFractionBar.setVisibility(true);

	
    for (var i = 0; i < a; i++)
    {
       if (i > 4)
          x = (30*b) + 100;
       else
          x = 30;

       if (i == 5)
          y = 135;

       for (var z = 0; z < b; z++)
			 {
          this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLink,"",""));
          x = parseInt(x + 30);
			 }

			 y = y + 60; 	
    }

console.log('a: ' + a);
console.log('b: ' + b);

    length = (30*b);
/*
    if (a > 5)
    {
       length = (2*length) + 100;
       a = 5;
    }
*/
    var test = 0;

    raphael = Raphael(this.Xpad,this.Ypad,630,360);

    y = 105 - this.Ypad;
    
    for (var i = 0; i < a; i++)
    {               
        x = 25 - this.Xpad;

        if (i > 4)
         x = 30 - this.Xpad + length + 60;

         if (i == 5)
          y = 105 - this.Ypad;

        y = y + 60;

     // this.addQuestionShape(new LineOne (this.mSheet.mGame,raphael,x,y,x+length,y,"#000000",false));

      //(width,height,spawnX,spawnY,game,raphael,r,g,b,s,op,d)

this.addQuestionShape(new Rectangle(length,30,x-5,y-45,this.mSheet.mGame,raphael,.5,.5,.5,"#000",.3,false));

     //test = divLines[i].mRaphael.rect(100,100,100,100);
		 //this.mPolygon.attr ("stroke", this.mStroke);

   

    }
  
},


checkUserAnswer: function()
{
   raphael.remove();
  
   this.parent();
},


showCorrectAnswer: function()
{
		if (this.mCorrectAnswerLabel)
		{
			var answer = '';
			for (i=0; i < this.mAnswerArray.length; i++)	
			{
				if (i == 0)
				{
					answer = answer + '' + this.getAnswer();		
				}
				else
				{
					answer = answer + ' OR ' + this.getAnswer(i);		
				}
			}
			this.mCorrectAnswerLabel.setText('CORRECT ANSWER: ' + answer); 
			this.mCorrectAnswerLabel.setVisibility(true);
		}
		this.hideAnswerInputs();
		this.showUserAnswer();

    this.mCorrectAnswerLabel.setPosition(650,200);
    this.mCorrectAnswerLabel.setSize(200,100);
},

//this.mCorrectAnswerLabel = new Shape(300,50,525,200,this.mSheet.mGame,"","","");

 //this.mUserAnswerLabel = new Shape(200,50,125,200,this.mSheet.mGame,"","","");

showUserAnswer: function()
{
		if (this.mUserAnswerLabel)
		{
                	this.mUserAnswerLabel.setText('USER ANSWER:' + this.mUserAnswer);
                	this.mUserAnswerLabel.setVisibility(true);
		}

    this.mUserAnswerLabel.setPosition(650,100);
    //this.mCorrectAnswerLabel.setSize(200,100);
} 

});
