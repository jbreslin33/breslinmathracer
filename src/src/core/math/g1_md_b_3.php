/*
insert into item_types(id,progression,core_standards_id,description) values ('1.md.b.3_1',1.2001,'1.md.b.3','' );
*/
var i_1_md_b_3__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
        this.parent(sheet,600,50,330,75,100,50,685,80);

        this.mNameMachine = new NameMachine();
  	this.mRaphael = Raphael(25,200,200, 200);

        this.ns = new NameSampler();
        this.mType = '1.md.b.3_1';
                
	this.hour = Math.floor(Math.random()*12)+1;
	this.minute = "00";

        this.setQuestion('' + 'What time is it?');
        this.setAnswer('' + this.hour + ':00',0);
},
createQuestionShapes: function()
{
	this.mAnalogClock = new AnalogClock (this,100,20,20,APPLICATION.mGame,this.mRaphael,0,0,0,"#000000",.5,false);
        this.addQuestionShape(this.mAnalogClock);
	this.mAnalogClock.set(this.hour,this.minute);
}
});
