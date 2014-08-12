/*  5.oa.a.2 */

/* TYPE_DESCRIPTION: Match word problem to equation sentence. */
var i_5_oa_a_2__3 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_3';
		this.mNameMachine = new NameMachine(); 
		this.mFruit = this.mNameMachine.getFruit(); 
		this.mSchool = this.mNameMachine.getSchool();
		this.mGrade = this.mNameMachine.getGrade('1st','8th');
		this.mAdult = this.mNameMachine.getAdult('man');
		this.mPlayedActivity = this.mNameMachine.getPlayedActivity();
		this.mNameOne = this.mNameMachine.getName();
		this.mNameTwo = this.mNameMachine.getName();
		this.mNameThree = this.mNameMachine.getName();

                rNum = Math.floor(Math.random()*3);
		rNum = 1;
                
		this.a = '';
                this.b = '';
                this.c = '';

                this.x = 0;
                this.y = 0;
                this.z = 0;
 		
		//(x-y)/2
                if (rNum == 2)
                {
                        this.w = 0;

                        while(this.w < 2)
                        {
				var missingFactor = Math.floor((Math.random()*8)+2);
				this.z = Math.floor((Math.random()*8)+2);
				var left = parseInt(missingFactor * this.z);
				//rotten
				this.y = Math.floor((Math.random()*8)+2);
				this.x = left + this.y;  	
			
                                this.w = (this.x-this.y)/this.z;

                                this.setQuestion(this.mNameOne + ' had ' + this.x + ' ' + this.mFruit + ', ' + this.y + ' of them were rotten so ' + this.mNameMachine.getPronoun(this.mNameOne,0) + ' threw them out. ' + this.mNameMachine.getPronoun(this.mNameOne,1) + ' gave the rest out evenly to ' + this.z + ' friends. Which expression solves this?');
                        this.setAnswer('('+this.x+'-'+this.y+')/'+this.z,0);

                                this.b = '('+this.z+'+'+this.y+')'+this.x;
                                this.c = '('+this.x+'x'+this.y+')'+this.z;
                        }
                }
 
		//(x-y)2
                if (rNum == 1)
                {
			this.w = 0;

			while(this.w < 2)
			{
				this.x = Math.floor((Math.random()*18)+2);
				this.y = Math.floor((Math.random()*18)+2);
				this.z = Math.floor((Math.random()*4)+2);
				this.w = (this.x-this.y)*this.z;

                        	this.setQuestion('While playing ' + this.mPlayedActivity + ' ' + this.mNameOne + ' scored ' + this.x + ' points. ' + this.mNameTwo + ' scored ' + this.y + ' less than ' + this.mNameOne + '. ' + this.mNameThree + ' scored ' + this.z + ' times as many as ' + this.mNameTwo + '. Which expression solves this for ' +  this.mNameThree + '?');
                        this.setAnswer('('+this.x+'-'+this.y+')'+this.z,0);

                		this.b = '('+this.z+'+'+this.y+')'+this.x;
                		this.c = '('+this.x+'x'+this.y+')'+this.z;
			}
                }
		
		//(x+y)2
                if (rNum == 0)
                {
                        this.x = Math.floor((Math.random()*5)+18);
                        this.y = Math.floor((Math.random()*5)+18);
                        this.z = Math.floor((Math.random()*4)+2);

                        this.setQuestion('At ' + this.mSchool + ', there are two ' + this.mGrade + ' grade classes. One has ' + this.x + ' students and the other has ' + this.y + ' students. ' + this.mAdult + ' wants to give each ' + this.mGrade + ' grader ' + this.z + ' ' + this.mFruit + '. What expression solves this?');
                        this.setAnswer('('+this.x+'+'+this.y+')'+this.z,0);

			this.b = '('+this.z+'+'+this.y+')'+this.x;
			this.c = '('+this.x+'x'+this.y+')'+this.z; 
                }

                this.mButtonA.setAnswer(this.getAnswer());
                this.mButtonB.setAnswer(this.b);
                this.mButtonC.setAnswer(this.c);

                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Match number sentence to equation  */
var i_5_oa_a_2__2 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_2';

                rNum = Math.floor(Math.random()*2);
                if (rNum == 0)
                {
                        this.setQuestion('Which equation matches this?  Divide 6 by 2 then multiply by 5.');
                        this.setAnswer('5(6/2)',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('5/2x6');
                        this.mButtonC.setAnswer('6x2/5');
                }
                if (rNum == 1)
                {
                        this.setQuestion('Which matches this? Divide 45 by 9 then subtract 3.');
                        this.setAnswer('(45/9)/2',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('9x45/2');
                        this.mButtonC.setAnswer('(9x2/45');
                }

                this.shuffle(10);
        }
});

/* TYPE_DESCRIPTION: Match equations to number sentences  */
var i_5_oa_a_2__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);

                this.mType = '5.oa.a.2_1';
                
		rNum = Math.floor(Math.random()*2);
		rNum = 1;

		if (rNum == 0)
		{
                	this.setQuestion('Which matches this?  5(6/2)');
                	this.setAnswer('Divide 6 by 2 then multiply by 5.',0);

                	this.mButtonA.setAnswer(this.getAnswer());
                	this.mButtonB.setAnswer('Add 6 and 2 then multiply by 5');
                	this.mButtonC.setAnswer('Divide 5 by 6 then multiply by 2');
		}
                if (rNum == 1)
                {
                        this.setQuestion('Which matches this?  (45/9)-3');
                        this.setAnswer('Divide 45 by 9 then subtract 3.',0);

                        this.mButtonA.setAnswer(this.getAnswer());
                        this.mButtonB.setAnswer('Add 45 and 9 then subtract 3');
                        this.mButtonC.setAnswer('Subtract 3 then Divide 45 by 9');
                }

                this.shuffle(10);
        }
});
