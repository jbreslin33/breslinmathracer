/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.5.a_1',5.1801,'5.nf.b.5.a','scaling');
*/
var i_5_nf_b_5_a__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.5.a_1';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                this.a = 0;
                this.b = 0;

                while (this.a <= this.b)
                {
                        this.a = Math.floor(Math.random()*10+1);
                        this.b = Math.floor(Math.random()*10+1);
                }

                this.setQuestion('Compare.');
                this.setAnswer('Is greater than.',0);

                this.mButtonA.setAnswer('Is greater than.');
                this.mButtonB.setAnswer('Is equal to.');
                this.mButtonC.setAnswer('Is less than.');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(50,50,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(50,50,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.a);
                shapeB.setText(this.b);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});


