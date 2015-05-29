        //this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f);

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_3',4.0170,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__3 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_3';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);

        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

        var ah = parseInt(a * 100);
        var bt = parseInt(b * 10);

        var dh = parseInt(d * 100);
        var et = parseInt(d * 10);

        var atotal = parseInt(ah + bt + c);
        var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. ' + ah + ' + __' + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f);
        this.setAnswer('' + dh, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_2',4.0169,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__2 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_2';

        var a = Math.floor( (Math.random()*9)+1);
        var b = Math.floor( (Math.random()*9)+1);
        var c = Math.floor( (Math.random()*9)+1);
	
        var d = Math.floor( (Math.random()*9)+1);
        var e = Math.floor( (Math.random()*9)+1);
        var f = Math.floor( (Math.random()*9)+1);

	var ah = parseInt(a * 100);	
	var bt = parseInt(b * 10);	
	
	var dh = parseInt(d * 100);	
	var et = parseInt(d * 10);	

	var atotal = parseInt(ah + bt + c);
	var btotal = parseInt(dh + et + f);
        var t = parseInt(atotal + btotal);
        this.setQuestion('' + this.ns.mNameOne + ' is adding ' + atotal + ' + ' + btotal + '. ' + this.ns.mNameMachine.getPronoun(this.ns.mNameOne,1,0) + ' adds them by doing this. __' + ' + ' + dh + ' + ' + bt + ' + ' + et + ' + ' + c + ' + ' + f);
        this.setAnswer('' + ah, 0);
}
});

/*
insert into item_types(id,progression,core_standards_id,description) values ('2.nbt.b.7_1',4.0168,'2.nbt.b.7','' );
*/
var i_2_nbt_b_7__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,500,25,275,50,50,50,625,100);
        this.ns = new NameSampler();
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '2.nbt.b.7_1';

        var a = Math.floor( (Math.random()*29)+30);
        var b = Math.floor( (Math.random()*39)+60);
	
	var c = parseInt(a + b);
	this.setQuestion('' + this.ns.mNameOne + ' is adding ' + a + ' + ' + b + '. Use the empty number line below to find the sum by adding on from the larger number.'); 
	this.setAnswer('' + c,0);  
},
createQuestionShapes: function()
{
	this.addQuestionShape(new LineOne (100,150, 475,150,this.mGame,this.mRaphael,"#000",.5,false));
	this.addQuestionShape(new Triangle(75,150,100,125,100,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));
	this.addQuestionShape(new Triangle(500,150,475,125,475,175,this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false));

}	
});

