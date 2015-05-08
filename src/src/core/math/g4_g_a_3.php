
/*
insert into item_types(id,progression,core_standards_id,description) values ('4.g.a.3_21',4.3421,'4.g.a.3','');
*/
var i_4_g_a_3__21 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mChopWhiteSpace = false;
        this.mType = '4.g.a.3_21';

        this.setQuestion('Does the grey line show a line of symmetry for the kid? Answer yes or no.');
        this.setAnswer('' + 'no',0);
},

createQuestionShapes: function()
{
        var kid = new Shape(50,50,200,300,this.mSheet.mGame,"/images/bus/kid.png","","");
        this.addQuestionShape(kid);

        var lineA = new LineOne (100,150,300,150,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
}
});


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

        this.setQuestion('Does the grey line show a line of symmetry for the kid? Answer yes or no.');
        this.setAnswer('' + 'yes',0);
},

createQuestionShapes: function()
{
	var kid = new Shape(50,50,200,300,this.mSheet.mGame,"/images/bus/kid.png","","");
      	this.addQuestionShape(kid);

        var lineA = new LineOne (190,100,190,200,this.mGame,this.mRaphael,"#000",.5,false);
        this.addQuestionShape(lineA);
}
});


