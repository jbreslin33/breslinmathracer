
/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_3',6.0103,'6.rp.a.1','' );
*/
var i_6_rp_a_1__3 = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,300,50,175,95, 200,50,475,100);
                this.mType = '6.rp.a.1_3';
               	this.ns = new NameSampler(); 
		this.mChopWhiteSphace = false;
		this.mStripCommas = false;

		var a = Math.floor((Math.random()*15)+2);
		var b = Math.floor((Math.random()*15)+2);

                this.setQuestion('' + 'Write ' + a + ' ' + this.ns.mThingOne + ' for every ' + b + ' ' + this.ns.mThingTwo + ' as a ratio 3 different ways. Seperate each way by a comma.');
                this.setAnswer('' + a + 'to' + b + ',' + a + ':' + b + ',' + a + '/' + b,0);
                this.setAnswer('' + a + 'to' + b + ',' + a + '/' + b + ',' + a + ':' + b,1);
                
		this.setAnswer('' + a + ':' + b + ',' + a + '/' + b + ',' + a + 'to' + b,2);
		this.setAnswer('' + a + ':' + b + ',' + a + 'to' + b + ',' + a + '/' + b,3);
		
		this.setAnswer('' + a + '/' + b + ',' + a + 'to' + b + ',' + a + ':' + b,4);
		this.setAnswer('' + a + '/' + b + ',' + a + ':' + b + ',' + a + 'to' + b,5);
        }
});


var i_6_rp_a_1__picture = new Class(
{
Extends: TextItem,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                //move gui
                this.mUserAnswerLabel.setPosition(625,150);
                this.mCorrectAnswerLabel.setPosition(625,250);

                this.mNameMachine = new NameMachine();
                this.mPictureLinkOne = this.mNameMachine.getPictureLink();
                this.mPictureLinkTwo = this.mNameMachine.getPictureLink();

                //variables
                this.a = Math.floor(Math.random()*8)+2;
                this.b = Math.floor(Math.random()*8)+2;
                this.c = parseInt(this.a * this.b);

                this.setQuestion('YOU NEED A QUESTION IN CHILD!');

        },

        createQuestionShapes: function()
        {
                var y = 135;

                var a = parseInt(this.a);
                var b = parseInt(this.b);

                var x = 50;
                for (var i = 0; i < a; i++)
		{
                	this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkOne,"",""));
                        x = parseInt(x + 30);
		}

                var x = 400;
                for (var i = 0; i < b; i++)
		{
                	this.addQuestionShape(new Shape(25,25,x,135,this.mSheet.mGame,this.mPictureLinkTwo,"",""));
                        x = parseInt(x + 30);
		}
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_2',6.0102,'6.rp.a.1','Word Problem. Ratio. Picure. Flipped Order' );
*/

var i_6_rp_a_1__2 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_2';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkTwo) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkOne) + '?');
                
		this.setAnswer('' + this.b + ':' + this.a ,0);
                this.setAnswer('' + this.b + 'to' + this.a ,1);
                this.setAnswer('' + this.b + '/' + this.a,2);
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_1',6.0101,'6.rp.a.1','Word Problem. Ratio. Picure. Normal Order' );
*/

var i_6_rp_a_1__1 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_1';

                this.setQuestion('What is the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkOne) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkTwo) + '?');
                
		this.setAnswer('' + this.a + ':' + this.b ,0);
                this.setAnswer('' + this.a + 'to' + this.b ,1);
                this.setAnswer('' + this.a + '/' + this.b,2);
        }
});
