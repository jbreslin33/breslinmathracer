
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

