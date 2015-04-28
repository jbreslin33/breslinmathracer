
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.md.b.4_1',4.2701,'4.md.b.4','');
*/
var i_4_md_b_4__1 = new Class(
{
Extends: TextItem,

initialize: function(sheet)
{
	this.mRaphael = Raphael(20,20,380,380);
	this.parent(sheet,300,50,575,95,100,50,625,200);
	this.mChopWhiteSpace = false;
	
        this.mType = '4.md.b.4_1';

        this.setQuestion('A line with a start point but no end point. It goes to infinity.');
        this.setAnswer('' + 'ray',0);
        this.setAnswer('' + 'a ray',1);

},

createShapes: function()
{
	this.parent();
        this.mRay = new Ray (parseInt(this.mRaphael.width/2),parseInt(this.mRaphael.height/2),100,334,this,"#000000",.5,false);
        this.addQuestionShape(this.mRay);
}
});

