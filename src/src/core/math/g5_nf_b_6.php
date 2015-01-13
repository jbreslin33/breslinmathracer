/*
insert into item_types(id,progression,core_standards_id,description) values ('5.nf.b.6_1',5.2001,'5.nf.b.6','');
*/
var i_5_nf_b_6__1 = new Class(
{
Extends: ThreeButtonItem,
        initialize: function(sheet)
        {
                this.parent(sheet);
                this.mType = '5.nf.b.6_1';

                //BUTTON A
                this.mButtonA.setPosition(380,100);
                this.mButtonB.setPosition(380,200);
                this.mButtonC.setPosition(380,300);

                var na = 0;
                var da = 0;
                this.b = 0;
                this.c = 0;

                while (na <= da)
                {
                        na = Math.floor(Math.random()*18+2);
                        da = Math.floor(Math.random()*18+2);
                        this.b = Math.floor(Math.random()*18+2);
                        this.c = this.b;
                }

                this.mFractionA = new Fraction(na,da,false);

                this.setQuestion('Compare.');
                this.setAnswer('&gt;',0);

                this.mButtonA.setAnswer('&gt;');
                this.mButtonB.setAnswer('=');
                this.mButtonC.setAnswer('&lt;');
        },

        createQuestionShapes: function()
        {
                var shapeA = new Shape(100,100,240,200,this.mSheet.mGame,"","","");
                var shapeB = new Shape(100,100,530,200,this.mSheet.mGame,"","","");

                shapeA.setText(this.b + ' &times ' + this.mFractionA.getString());
                shapeB.setText(this.c);

                this.addQuestionShape(shapeA);
                this.addQuestionShape(shapeB);
        }
});

