/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.3_20',4.3420,'4.g.a.3','');
*/
var i_4_g_a_3__20 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.3_20';

        this.setQuestion('Does the line show a line of symmetry? Answer yes or no.');
        this.setAnswer('' + 'yes',0);
},

createQuestionShapes: function()
{
	var kid = new Shape(50,50,200,200,this.mSheet.mGame,"/images/bus/kid.png","","");
      	this.addQuestionShape(kid);

/*
        var angleA = 270;
        var angleB = 360;

        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);

        this.mAngleArc = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArc);

        //right square
        var rectangle = new Rectangle(12,12,parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2 - 12),this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.3,false);
        this.addQuestionShape(rectangle);
*/


}
});


