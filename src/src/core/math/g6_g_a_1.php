/*
insert into item_types(id,progression,core_standards_id,description) values ('6.g.a.1_1',6.0101,'6.g.a.1',''); update item_types SET progression = 6.0101 where id = '6.g.a.1_1';
*/
var i_6_g_a_1__1 = new Class(
{
Extends: TextItem,
initialize: function(sheet)
{
        this.parent(sheet,300,50,175,95,100,50,425,100);
        this.mRaphael = Raphael(10,150,500,350);
        this.mType = '6.g.a.1_1';

        this.setQuestion('How many angles are inside the drawing below?');
        this.setAnswer('' + '7',0);
},

createQuestionShapes: function()
{
	//   1
	//   23
        //var triangle = new Triangle (100,125, 100,150, 150,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
        
	//   1
	//  32
	//var triangle = new Triangle (100,125, 100,150, 50,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	

	//   13
	//   2
        //var triangle = new Triangle (100,125, 100,150, 150,125, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	
	//  31
	//   2
        //var triangle = new Triangle (100,125, 100,150, 50,125, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);


	
	//   1
	//   32
        //var triangle = new Triangle (100,125, 150,150, 100,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	
	//   1
	//  23
        //var triangle = new Triangle (100,125, 50,150, 100,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	
	//  12
	//  3
        //var triangle = new Triangle (100,125, 150,125, 100,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	
	// 21
	//  3
        //var triangle = new Triangle (100,125, 50,125, 100,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);

  	//   2
        //   31
        var triangle = new Triangle (200,150, 150,100, 150,150, this.mSheet.mGame,this.mRaphael,.5,.5,.5,"#000",.5,false);
	
        this.addQuestionShape(triangle);
}
});


