
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_1',4.3101,'4.md.c.7','');
*/
var i_4_md_c_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        //this.a = Math.floor(Math.random()*45)+270;
        this.a = 270;
        this.b = parseInt(Math.floor(Math.random()*45) + this.a + 30);
        this.c = parseInt(Math.floor(Math.random()*45) + this.b + 30);

        this.mRaphael = Raphael(20,20,380,380);
        this.ns = new NameSampler();
        this.parent(sheet,300,50,575,95,200,50,625,200);
        this.mType = '4.md.c.7_1';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setQuestion('What is the turn of this angle in degrees?');
        this.setAnswer('' + parseInt(this.c - this.a),0);
},

createShapes: function()
{
        this.parent();

        var angleA = this.a;
        var angleB = this.b;
        var angleC = this.c;


        this.mRayA = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleA,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayA);

        this.mRayB = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleB,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayB);
        
	this.mRayC = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,angleC,this,"#000000",.5,false);
        this.addQuestionShape(this.mRayC);

        this.mAngleArcAB = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcAB);
        
	this.mAngleArcBC = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleC),parseFloat(angleB),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcBC);
       
	//letters 
        var textA = this.ns.mUpperLetterOne;
        var textB = this.ns.mUpperLetterTwo;
        var textC = this.ns.mUpperLetterThree;
        var textD = this.ns.mUpperLetterFour;

        var x = parseInt(this.mRaphael.width/2);
        var y = parseInt(this.mRaphael.height/2);

	var lengthA = 100;
	var lengthB = 100;
        var lengthC = 100;
        var lengthD = 100;

        // rotatation
        var rotateAmountA = '' + 'r' + angleA + ',' + x + ',' + y;
        var rotateAmountB = '' + 'r' + angleB + ',' + x + ',' + y;
        var rotateAmountC = '' + 'r' + angleC + ',' + x + ',' + y;

        this.mTextA = new RaphaelText(parseInt(x + lengthA + 15),y,this,0,0,1,"#000000",.5,false,"" + textA,16);
        this.addQuestionShape(this.mTextA);
        this.mTextA.mPolygon.transform(rotateAmountA);
        
	this.mTextB = new RaphaelText(parseInt(x - 15),y,this,0,0,1,"#000000",.5,false,"" + textB,16);
        this.addQuestionShape(this.mTextB);
        this.mTextB.mPolygon.transform(rotateAmountB);

        this.mTextC = new RaphaelText(parseInt(x + lengthC + 15),y,this,0,0,1,"#000000",.5,false,"" + textC,16);
        this.addQuestionShape(this.mTextC);
        this.mTextC.mPolygon.transform(rotateAmountC);
	
	this.mTextD = new RaphaelText(parseInt(x + lengthD + 15),y,this,0,0,1,"#000000",.5,false,"" + textD,16);
        this.addQuestionShape(this.mTextD);
        this.mTextD.mPolygon.transform(rotateAmountB);


}
});

