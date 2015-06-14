
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_7',4.3107,'4.md.c.7',''); update item_types SET progression = 4.3107 where id = '4.md.c.7_7';
*/
var i_4_md_c_7__7 = new Class(
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
        this.parent(sheet,500,200,325,400, 100,50,700,300);
        this.mType = '4.md.c.7_7';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setAnswer('' + parseInt(this.b - this.a),0);
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

        this.mAngleArcAB = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcAB);
        
	this.mAngleArcBC = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleC),parseFloat(angleB),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcBC);
       
	//letters 
        var textA = this.ns.mUpperLetterOne;
        var textB = this.ns.mUpperLetterTwo;
        var textC = this.ns.mUpperLetterThree;
        var textD = this.ns.mUpperLetterFour;

        this.setQuestion('' + 'There are 2 slices of pie left. ' + this.ns.mNameOne + ' measures them and they come to ' + parseInt(this.c - this.a) + '&deg together represented by the angle ' + textA + textB + textC + '. If one of the pies measures ' + parseInt(this.c - this.b) + '&deg represented by the angle ' + textD + textB + textC + ' than how many degrees does the slice represented by the angle ' + textA + textB + textD + ' measure?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_6',4.3106,'4.md.c.7',''); update item_types SET progression = 4.3106 where id = '4.md.c.7_6';
*/
var i_4_md_c_7__6 = new Class(
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
        this.parent(sheet,500,200,325,400, 100,50,700,300);
        this.mType = '4.md.c.7_6';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setAnswer('' + parseInt(this.b - this.a),0);
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

        this.mAngleArcAB = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcAB);
        
	this.mAngleArcBC = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleC),parseFloat(angleB),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcBC);
       
	//letters 
        var textA = this.ns.mUpperLetterOne;
        var textB = this.ns.mUpperLetterTwo;
        var textC = this.ns.mUpperLetterThree;
        var textD = this.ns.mUpperLetterFour;

        this.setQuestion('' + this.ns.mNameOne + ' invents a ray gun. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' wants it to cover ' + parseInt(this.c - this.a) + '&deg which is represented by the angle ' + textA + textB + textC + '. It only covers ' + parseInt(this.c - this.b) + '&deg represented by the angle ' + textD + textB + textC + '. How many more degrees does the ray gun need to cover to reach ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,0,1) + ' goal of ' + parseInt(angleC - angleA) + '&deg?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_5',4.3105,'4.md.c.7',''); update item_types SET progression = 4.3105 where id = '4.md.c.7_5';
*/
var i_4_md_c_7__5 = new Class(
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
        this.parent(sheet,500,200,325,400, 100,50,700,300);
        this.mType = '4.md.c.7_5';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setAnswer('' + parseInt(this.b - this.a),0);
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

        this.mAngleArcAB = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleB),parseFloat(angleA),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcAB);
        
	this.mAngleArcBC = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleC),parseFloat(angleB),true,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcBC);
       
	//letters 
        var textA = this.ns.mUpperLetterOne;
        var textB = this.ns.mUpperLetterTwo;
        var textC = this.ns.mUpperLetterThree;
        var textD = this.ns.mUpperLetterFour;

        this.setQuestion('' + 'The measure of angle ' + textA + textB + textC + ' is ' + parseInt(this.c - this.a) + '&deg. The measure of angle ' + textD + textB + textC + ' is ' + parseInt(angleC - angleB) + '&deg. What is the measure of angle ' + textA + textB + textD + ' in degrees?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_4',4.3104,'4.md.c.7',''); update item_types SET progression = 4.3104 where id = '4.md.c.7_4';
*/
var i_4_md_c_7__4 = new Class(
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
        this.parent(sheet,500,200,325,400, 100,50,700,300);
        this.mType = '4.md.c.7_4';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

        this.setAnswer('' + parseInt(this.c - this.b),0);
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
        
	this.mAngleArcBC = new AngleArc(parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),50, parseFloat(angleC),parseFloat(angleB),false,this,0,0,1,"none",.5,false);;
        this.addQuestionShape(this.mAngleArcBC);
       
	//letters 
        var textA = this.ns.mUpperLetterOne;
        var textB = this.ns.mUpperLetterTwo;
        var textC = this.ns.mUpperLetterThree;
        var textD = this.ns.mUpperLetterFour;

        this.setQuestion('' + 'The measure of angle ' + textA + textB + textC + ' is ' + parseInt(this.c - this.a) + '&deg. The measure of angle ' + textA + textB + textD + ' is ' + parseInt(angleB - angleA) + '&deg. What is the measure of angle ' + textD + textB + textC + ' in degrees?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_3',4.3103,'4.md.c.7',''); update item_types SET progression = 4.3103 where id = '4.md.c.7_3';
*/
var i_4_md_c_7__3 = new Class(
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
        this.parent(sheet,500,200,325,350, 100,50,700,300);
        this.mType = '4.md.c.7_3';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

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

        this.setQuestion('' + 'There are 2 slices of pie left. One slice is for ' + this.ns.mNameOne + ' and is ' + parseInt(angleB - angleA) + '&deg and it is represented by angle ' + textA + textB + textD + '.  The other slice is for ' + this.ns.mNameTwo + ' and is ' + parseInt(angleC - angleB) + '&deg and it is represented by angle ' + textD + textB + textC + '. What is the total angle measurement of the two slices represented by angle ' + textA + textB + textC + ' in degrees?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_2',4.3102,'4.md.c.7',''); update item_types SET progression = 4.3102 where id = '4.md.c.7_2';
*/
var i_4_md_c_7__2 = new Class(
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
        this.parent(sheet,450,200,275,350,100,50,625,300);
        this.mType = '4.md.c.7_2';
        this.mChopWhiteSpace = false;

        var f = new Fraction(this.d,360,false);

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

        this.setQuestion('' + this.ns.mNameOne + ' and '+ this.ns.mNameTwo + ' are fighting aliens. ' + this.ns.mNameOne + ' shoots a ray gun blast that has a ' + parseInt(angleB - angleA) + '&deg angle and it is represented by angle ' + textA + textB + textD + '. ' + this.ns.mNameTwo + ' shoots a ray gun blast next to the one ' + this.ns.mNameOne + ' shot that has a ' + parseInt(angleC - angleB) + '&deg angle and it is represented by angle ' + textD + textB + textC + '. What is the total angle measurement of the two ray blasts represented by angle ' + textA + textB + textC + ' in degrees?');          

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
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.c.7_1',4.3101,'4.md.c.7',''); update item_types SET progression = 4.3101 where id = '4.md.c.7_1';
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

        this.setQuestion('The measure of angle ' + textA + textB + textD + ' is ' + parseInt(angleB - angleA) + '&deg and the measure of angle ' + textD + textB + textC + ' is ' + parseInt(angleC - angleB) + '&deg. What is the measure of angle ' + textA + textB + textC + ' in degrees?' );

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

