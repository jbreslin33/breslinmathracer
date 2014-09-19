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

                this.setAnswer('' + this.a + ':' + this.b ,0);
                this.setAnswer('' + this.a + 'to' + this.b ,1);
                this.setAnswer('' + this.a + '/' + this.b,2);
        },

        createQuestionShapes: function()
        {
                var y = 135;

                var a = parseInt(this.a);
                var b = parseInt(this.b);
                this.addQuestionShape(new Shape(25,25,100,135,this.mSheet.mGame,this.mPictureLinkOne,"",""));
                this.addQuestionShape(new Shape(25,25,300,135,this.mSheet.mGame,this.mPictureLinkTwo,"",""));
/*
                for (var i = 0; i < a; i++)
                {
                        var x = 30;
                        for (var z = 0; z < b; z++)
                        {
                                this.addQuestionShape(new Shape(25,25,x,y,this.mSheet.mGame,this.mPictureLinkOne,"",""));
                                x = parseInt(x + 30);
                        }
                        y = y + 25;
                }
*/
        }
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('6.rp.a.1_1',6.0101,'6.rp.a.1','Word Problem. Ratio. Picure.' );
*/

var i_6_rp_a_1__1 = new Class(
{
Extends: i_6_rp_a_1__picture,
        initialize: function(sheet)
        {
                this.parent(sheet,600,50,330,75,100,50,685,80);

                this.mType = '6.rp.a.1_1';

                this.setQuestion('Write the ratio of ' + this.mNameMachine.getPictureName(this.mPictureLinkOne) + ' to ' +  this.mNameMachine.getPictureName(this.mPictureLinkTwo));
        }
});

